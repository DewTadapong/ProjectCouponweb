<?php
require("fpdf/fpdf.php");
require("word.php");
require "config.php";

$amount = [
  "amountnow" => ""
];
//Select coupon_price Details From Database
$sqlamount = "select * from products where id ='{$_GET["id"]}'";
$resamount = $con->query($sqlamount);
if ($resamount->num_rows > 0) {
  $row = $resamount->fetch_assoc();
  $amount = [
    "amountnow" => $row["amountnow"]
  ];
  $amountnow = $row["amountnow"];
  $barcode = $row["barcode"];
}


class PDF extends FPDF
{


  function body($info)
  {
  }
}
$amountnow;

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);

switch ($amountnow) {
  case 1:
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 2:
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 3:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 4:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    $pdf->Image("outputs/$barcode.jpg", 0, 0, 140, 80);
    break;
  case 5:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    $pdf->Image("outputs/$barcode.jpg", 0, 0, 140, 80);
    $pdf->Image("outputs/$barcode.jpg", 0, 85, 140, 80);
    break;
  case 6:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 7:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    $pdf->Image("outputs/$barcode.jpg", 0, 0, 140, 80);
    break;
  case 8:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 9:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 10:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    $pdf->Image("outputs/$barcode.jpg", 0, 0, 140, 80);
    break;
  case 11:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 12:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 13:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 14:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 15:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 16:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 17:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 18:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 19:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 20:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 21:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 22:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 23:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 24:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 25:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 26:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 27:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 28:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 29:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 30:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 31:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 32:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 33:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 34:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 35:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 36:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 37:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 38:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 39:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 40:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 41:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 42:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 43:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 44:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 45:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 46:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 47:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 48:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 49:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 85; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 50:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 100; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  case 51:
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    $pdf->AddPage();
    for ($i = 1; $i <= $a = 180; $i = $i + 85) {
      $pdf->Image("outputs/$barcode.jpg", 0, $i, 140, 80);
    }
    break;
  default:
    echo "จำนวนปริ้นคูปองเกิน";
} // จบที่ 3 คูปองใน 1 กระดาษพอดีจะเพิ่มก็ก็อปปี้ case 51 ได้เลย

$pdf->Output();
