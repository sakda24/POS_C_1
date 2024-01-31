<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>New Page | POS System</title>
  <style>
    body {
      background-image: url('point-of-sale-systems.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      font-family: Arial, sans-serif;
      color: #333;
    }
    .container {
      max-width: 100%px;
      margin: 0 auto;
      padding: 20px;
      text-align: center;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
    }
    h1 {
      color: #333;
      position: relative;
      padding: 20px; /* ระยะห่างขอบกรอบที่คุณต้องการ */
      background: #222; /* สีพื้นหลังขอบกรอบ */
      border-radius: 10px;
      font-size: 32px; /* ขนาดตัวอักษรของ "POS SYSTEM" */
      display: inline-block;
    }
    p {
      font-size: 20px; /* ปรับขนาดตัวอักษรของข้อความ */
    }
    .btn {
      margin: 10px;
      padding: 10px 20px;
      color: #fff;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s;
    }
    .btn:hover {
      background-color: #0056b3;
    }
    .btn-icon {
      margin-right: 5px; /* ระยะห่างระหว่าง icon กับตัวอักษร */
    }
    .grocery-btn {
      background-color: #4CAF50; /* สีเขียวแก่ */
      color: #fff; /* สีข้องเท้าขาว */
    }
    .cosmetic-btn {
      background-color: #FFC0CB; /* สีชมพูอ่อน */
      color: #fff; /* สีข้องเท้าขาว */
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- เนื้อหาหน้าเพจใหม่ -->
    <h1><font color="#00CCFF">P</font><font color="#FF0000">O</font><font color="#FFFF00">S</font>   </b><font color="#00FFCC">SYS</font><font color=" #00FF99">TEM</font></h1>
    <p><font size="4">ระบบจัดการจุดขาย (Point of Sale System)</font></p>
    <p><font size="4">โปรดเลือกร้านค้าของท่าน</font></p>
    <br>

    <?php
    session_start();
    $ref_l_id = $_SESSION["ref_l_id"]; // รับค่า ref_l_id จาก Session

    if ($ref_l_id == 1) {
        // ถ้า ref_l_id เป็น 1 (admin) ให้แสดงปุ่ม Grocery
        echo '<a href="admin/index.php" class="btn grocery-btn">
                <span class="btn-icon"><img src="grocery-store-icon-1.jpg" alt="Grocery Icon" width="80" height="80"></span>
                Grocery
              </a>';
    } elseif ($ref_l_id == 2) {
        // ถ้า ref_l_id เป็น 2 (cosmetic) ให้แสดงปุ่ม Cosmetic
        echo '<a href="cosmetic/index.php" class="btn cosmetic-btn">
                <span class="btn-icon"><img src="images (1).jpg" alt="Cosmetic Icon" width="80" height="80"></span>
                Cosmetic
              </a>';
    }

    // เพิ่มปุ่ม Logout
    echo '<a href="logout.php" class="btn" style="background-color: #FF3333;">
            <span class="btn-icon"><i class="fas fa-sign-out-alt"></i></span>
            Logout
          </a>';
    ?>

  </div>

  <!-- เรียกใช้ jQuery และ Bootstrap 4 หากจำเป็น -->
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>
