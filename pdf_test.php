<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new mPDF();
$mpdf->WriteHTML(

	' <style>
        body{
            font-family: "freemono"; //คือ TH salaban แปลงชื่อเนื่องจาก function เดิม ดักการเพิ่มของไฟล์ font ซึ่งแก้แล้วไม่ได้
        }
    </style>'.
'<h1>สวัสดี</h1>'
);
$mpdf->Output();
?>