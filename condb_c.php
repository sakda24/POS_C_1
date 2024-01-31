<?php 
error_reporting(0);
$condb_c = mysqli_connect("localhost","root","","COSMETIC") 
or die ("Error :".mysqli_error($condb_c));
mysqli_query($condb_c,"SET NAMES UTF8");
date_default_timezone_set('Asia/Bangkok');

// error_reporting( error_reporting() & ~E_NOTICE );//ปิดerror ที่ต้องใส่ @
// if($condb_c){
// 	echo "Connect";
// }else{
// 	echo "error";
// }


?>