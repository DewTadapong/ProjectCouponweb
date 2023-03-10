<?php 
  require ("fpdf/fpdf.php");
  require ("word.php");
  require "config.php"; 
  //customer and invoice details
  $info=[
    "customer"=>"",
    "address"=>",",
    "city"=>"",
    "invoice_no"=>"",
    "invoice_date"=>"",
    "total_amt"=>"",
    "words"=>""
  ];
  
  //Select Invoice Details From Database
  $sql="select * from invoice where SID='{$_GET["id"]}'";
  $res=$con->query($sql);
  if($res->num_rows>0){
	  $row=$res->fetch_assoc();
	  
	  $obj=new IndianCurrency($row["GRAND_TOTAL"]);
	 

	  $info=[
		"customer"=>$row["CNAME"],
		"address"=>$row["CADDRESS"],
		"city"=>$row["CCITY"],
		"invoice_no"=>$row["INVOICE_NO"],
		"invoice_date"=>date("d-m-Y",strtotime($row["INVOICE_DATE"])),
		"total_amt"=>$row["GRAND_TOTAL"],
		"words"=> $obj->get_words(),
	  ];
    $invoice = $row['INVOICE_NO'];
  }
  

  //Select coupon_price
  $price_new=[
    "barcode"=>"",
    "pricenew"=>"",
    "employee"=>""
  ];
  //Select coupon_price Details From Database
  $sqlpricenew="select * from productsuse where itemnumber_use='$invoice'";
  $respricenew=$con->query($sqlpricenew);
  if($respricenew->num_rows>0){
	  $row=$respricenew->fetch_assoc();
      $price_new=[
        "barcode"=>$row["barcode"],
        "pricenew"=>$row["discountbath"],
        "employee"=>$row["employee"],
         ];
         $barcode = $row['barcode'];
	  }
 


    $position=[
      "position"=>"",
      "discount"=>""
    ];
    //Select coupon_price Details From Database
    $sqlposition="select * from products where barcode='$barcode'";
    $resposition=$con->query($sqlposition);
    if($resposition->num_rows>0){
      $row=$resposition->fetch_assoc();
        $position=[
          "position"=>$row["position"],
          "discount"=>$row["discount"],
            ];
      }



  //invoice Products
  $products_info=[];
  
  //Select Invoice Product Details From Database
  $sql="select * from invoice_products where SID='{$_GET["id"]}'";
  $res=$con->query($sql);
  if($res->num_rows>0){
	  while($row=$res->fetch_assoc()){
		   $products_info[]=[
			"name"=>$row["PNAME"],
			"price"=>$row["PRICE"],
			"qty"=>$row["QTY"],
			"total"=>$row["TOTAL"],
		   ];
	  }
  }
 
  class PDF extends FPDF
  {


    function Header(){
       
      //Display Company Info
      $this->SetX(27);
      $this->SetFont('Arial','B',15);
      $this->Cell(50,8,"LIVING & FACILITIES,.CO.TH",0,1);
      $this->SetFont('Arial','',13);
      $this->SetY(23);
      $this->Cell(50,7,"789 Tambon Nong Kham,",0,1);
      $this->Cell(50,7,"Amphoe Si Racha, Chonburi 20230",0,1);
      $this->Cell(50,7,"PH : 033 005 289",0,1);
      
      //Display INVOICE text
      $this->SetY(10);
      $this->SetX(-50);
      $this->SetFont('Arial','B',26);
      $this->Cell(50,10,"INVOICE",0,1);

      $this->SetY(16);
      $this->SetX(-34);
      $this->SetFont('Arial','',9);
      $this->Cell(50,10,"USE COUPON",0,1);
      
      //Display Horizontal line
      $this->Line(0,48,210,48);
    }
    

    function body($info,$products_info,$price_new,$position){

      //Billing Details
      $this->SetY(57);
      $this->SetX(10);
      $this->SetFont('Arial','',12);
      $this->Cell(52,6,"Bill To  :  ".$info["customer"].$info["address"],0,1);
      $this->Cell(52,9,"Phone  :  ".$info["city"],0,1);
      
      //Display Invoice no
      $this->SetY(57);
      $this->SetX(-60);
      $this->Cell(52,7,"Invoice No : ".$info["invoice_no"]);
      
      //Display Invoice date
      $this->SetY(65);
      $this->SetX(-60);
      $this->Cell(52,7,"Invoice Date : ".$info["invoice_date"]);
      
      //Display Table headings
      $this->SetY(86);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(80,9,"DESCRIPTION",1,0);
      $this->Cell(40,9,"PRICE",1,0,"C");
      $this->Cell(30,9,"QTY",1,0,"C");
      $this->Cell(40,9,"TOTAL",1,1,"C");
      $this->SetFont('Arial','',12);
      
      //Display table product rows
      foreach($products_info as $row){
        $this->Cell(80,9,$row["name"],"LR",0);
        $this->Cell(40,9,$row["price"],"R",0,"R");
        $this->Cell(30,9,$row["qty"],"R",0,"C");
        $this->Cell(40,9,$row["total"],"R",1,"R");
      }
      
      //Display table empty rows
      for($i=0;$i<11-count($products_info);$i++)
      {
        $this->Cell(80,9,"","LR",0);
        $this->Cell(40,9,"","R",0,"R");
        $this->Cell(30,9,"","R",0,"C");
        $this->Cell(40,9,"","R",1,"R");
      }
      //Display  total row
      $this->SetFont('Arial','B',12);
      $this->Cell(150,9,"PRICE",1,0,"R");
      $this->Cell(40,9,$info["total_amt"],1,1,"R");

      //Display discount  row
     $pricediscount = $info["total_amt"] - $price_new['pricenew'];   
       $this->SetFont('Arial','B',12);
       $this->Cell(150,9,"DISCOUNT",1,0,"R");
       $this->Cell(40,9,$pricediscount,1,1,"R");
      //Display priceresult  row
      $this->SetFont('Arial','B',12);
      $this->Cell(150,9,"TOTAL",1,0,"R");
      $this->Cell(40,9,$price_new["pricenew"],1,1,"R");
 
      //Display amount in words
      $this->SetY(224);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(0,9,"Amount in Words ",0,1);
      $this->SetFont('Arial','',12);
      $this->Cell(0,9,$info["words"],0,1);

      //Display use barcode
      $this->SetY(243);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(0,9,"UseCoupon By ".$price_new['employee'],0,1);
      $this->SetFont('Arial','',12);
      $this->Cell(0,9,"  Discount  ".$position['discount']."% if oder-amount more than ".$position['position']." bath.",0,1);
      
    }
    function Footer(){
      
      //set footer position
      $this->SetY(-50);
      $this->SetFont('Arial','B',12);
      $this->Cell(0,10,"For Living & Facilities",0,1,"R");
      $this->Ln(17);
      $this->SetFont('Arial','',12);
      $this->Cell(0,10,"Authorized Signature",0,1,"R");
      $this->SetFont('Arial','',10);
      $this->Ln(3);

      //Display Footer Text
      $this->Cell(0,10,"This is a example invoice",0,1,"C");
      
    }
    
  }
 
  
  //Create A4 Page with Portrait 
  $pdf=new PDF("P","mm","A4");
  $pdf->AddPage();
  $pdf->body($info,$products_info,$price_new,$position);
  $pdf->Image('laf2.png',10,7,15,15);
  $pdf->Image('sigture.png',165,253,25,25);
  $pdf->Image('sigture.png',20,260,25,25);
  $pdf->Output();
?>