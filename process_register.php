<?php
session_start();
if (isset($_POST['register'])) {
    // เชื่อมต่อกับฐานข้อมูล
    include("condb_ct.php");

    // รับข้อมูลจากฟอร์ม
    $mem_username = mysqli_real_escape_string($condb_ct, $_POST['mem_username']);
    $mem_username = mysqli_real_escape_string($condb_ct, $_POST['mem_username']);
    $mem_password = mysqli_real_escape_string($condb_ct, sha1($_POST['mem_password']));

    // เพิ่มข้อมูลผู้ใช้ลงในฐานข้อมูล
    $sql = "INSERT INTO members (mem_username, mem_password) VALUES ('$mem_username', '$mem_password')";
    $result = mysqli_query($condb_ct, $sql);

    if ($result) {
        // ลงทะเบียนสำเร็จ
        // คุณสามารถเพิ่มส่วนเพิ่มข้อมูลเพิ่มเติมของผู้ใช้ในฐานข้อมูลตามความต้องการของคุณ
        Header("Location: index.php");
    } else {
        // ลงทะเบียนไม่สำเร็จ
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาดในการลงทะเบียน');";
        echo "window.history.back()";
        echo "</script>";
    }
} else {
    // กรณีไม่ได้กดปุ่ม "Register"
    Header("Location: register.php");
}
?>
