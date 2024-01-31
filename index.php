<?php
session_start();

// ถ้า Session ถูกต้องและมี Session ให้ Redirect ไปยังหน้าที่ต้องการ
if(isset($_SESSION["mem_id"]) && !empty($_SESSION["mem_id"])) {
    if($_SESSION["ref_l_id"] == "1") {
        Header("Location: new_page.php");
    } elseif($_SESSION["ref_l_id"] == "2") {
        Header("Location: new_page.php");
    } elseif($_SESSION["ref_l_id"] == "3") {
        Header("Location: hardware/");
    }
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>POS System | By PNRU.com</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="" href="assets/img/t.png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Kanit:400" rel="stylesheet">
</head>
<style>
  .hold-transition {
    background-image: url("istockphoto-172882936-612x612.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }
  .login-card-body {
    background-color: #222;
  }
  body {
    background-image: url("paper.gif");
    background-color: #222;
  }

  /* ปรับแต่ง Navbar */
  .navbar {
    width: 100%;
    background-color: #f8f9fa; /* สีของพื้นหลัง Navbar */
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* เพิ่มเงาให้ Navbar */
  }

  /* ปรับแต่งตำแหน่งและสีของ Navbar */
  .navbar.fixed-top {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000; /* ป้องกันถูกครอบทับ */
  }

  .navbar-light .navbar-nav .nav-link {
    color: #000 !important; /* สีของตัวหนังสือใน Navbar */
  }

  .navbar-light .navbar-toggler-icon {
    background-color: #000; /* สีของ Toggle Icon ใน Navbar */
  }
</style>
</head>
<body class="hold-transition login-page">
  <?php include 'navbar.php'; ?>

<div class="login-box">
  <div class="login-logo">
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <center><img width="250 px" src="poscenter-800x800.jpg"><br>
    <h3><b><font color="#00CCFF">P</font><font color="#FF0000">O</font><font color="#FFFF00">S</font>   </b><font color="#00FFCC">SYS</font><font color=" #00FF99">TEM</font></h3> <br><h4><font color="#FF6666">Please</font> <font color="#FF6633">Login</font></h4></center><br>
      <form action="chk_login_3.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="mem_username" id="mem_username" placeholder="Username" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user text-primary"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="mem_password" id="mem_password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock text-primary"></span>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center mb-3">
          <button type="submit" class="btn btn-primary btn-block">เข้าสู่หน้าร้าน</button>
          
        </div>
      </form>
    </div>
  </div>
</div>
<!-- jQuery -->
<script src="assets/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/bootstrap.bundle.min.js"></script>

</body>
</html>
