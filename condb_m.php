<?php 
error_reporting(0);
$condb_m = mysqli_connect("localhost","root","","MEMBER_POS") 
or die ("Error :".mysqli_error($condb_m));
mysqli_query($condb_m,"SET NAMES UTF8");
date_default_timezone_set('Asia/Bangkok');

// error_reporting( error_reporting() & ~E_NOTICE );//ปิดerror ที่ต้องใส่ @
// if($condb_m){
// 	echo "Connect";
// }else{
// 	echo "error";
// }


?>