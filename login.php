<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // เชื่อมต่อกับฐานข้อมูล
  $conn = new mysqli("localhost", "root", "", "pos_system");

  // ตรวจสอบการเชื่อมต่อฐานข้อมูล
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // รับข้อมูลจากฟอร์ม
  $username = $_POST["username"];
  $password = $_POST["password"];

  // ค้นหาข้อมูลสมาชิก
  $sql = "SELECT * FROM members WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // เข้าสู่ระบบสำเร็จ
    $_SESSION["username"] = $username;
    header("Location: new_page.php");
  } else {
    // เข้าสู่ระบบไม่สำเร็จ
    echo "Login failed. Please check your username and password.";
  }

  $conn->close();
}
?>
