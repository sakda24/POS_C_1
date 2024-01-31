<?php 
include "barcode/src/BarcodeGenerator.php";
include "barcode/src/BarcodeGeneratorHTML.php";


function barcode($code){
  
  $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
  $border = 1;//กำหนดความหน้าของเส้น Barcode
  $height = 20;//กำหนดความสูงของ Barcode

  return $generator->getBarcode($code , $generator::TYPE_CODE_128,$border,$height);



}

$barcode1 = p_id;

 echo barcode($barcode1);
?>