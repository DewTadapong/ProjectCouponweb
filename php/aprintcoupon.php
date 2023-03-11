<?php 
  require ("fpdf/fpdf.php");
  require ("word.php");
  require "config.php"; 

  $amount=[
    "amountnow"=>""
  ];
  //Select coupon_price Details From Database
  $sqlamount="select * from products where id ='{$_GET["id"]}'";
  $resamount=$con->query($sqlamount);
  if($resamount->num_rows>0){
    $row=$resamount->fetch_assoc();
      $amount=[
        "amountnow"=>$row["amountnow"]
          ];
        $amountnow = $row["amountnow"];
        $barcode = $row["barcode"];        
    }

 
  class PDF extends FPDF
  {

  
    function body($info){
 
    }
  
  }
  $amountnow;

 $pdf = new PDF();
 $pdf->AliasNbPages();
 $pdf->AddPage();
 $pdf->SetFont('Times','',12);

if($amountnow = 1){
  for( $i=0; $i<=$a=85; $i=$i+85 ) {
   $pdf->Image("outputs/$barcode.jpg",0,$i,140,80);   
   }     
}
elseif($amountnow = 2){
  for( $i=0; $i<=$a=170; $i=$i+85 ) {
      $pdf->Image("outputs/$barcode.jpg",0,$i,140,80);
  }
}
elseif($amountnow = 3){
  for( $i=0; $i<=$a=270; $i=$i+85 ) {
      $pdf->Image("outputs/$barcode.jpg",0,$i,140,80);
  }
}
elseif($amountnow = 4){
  for( $i=0; $i<=$a=350; $i=$i+85 ) {
      $pdf->Image("outputs/$barcode.jpg",0,$i,140,80);
  }
}
elseif($amountnow = 5){
  for( $i=0; $i<=$a=430; $i=$i+85 ) {
      $pdf->Image("outputs/$barcode.jpg",0,$i,140,80);
  }
}
elseif($amountnow = 6){
  for( $i=0; $i<=$a=520; $i=$i+85 ) {
      $pdf->Image("outputs/$barcode.jpg",0,$i,140,80);
  }
}
$pdf->Output();

?>