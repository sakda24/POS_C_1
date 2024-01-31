<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

    body {
      font-weight: 300;
      font-size: 16px;
      line-height: 1.6;
      color: #272727;
      background: rgb(25, 199, 155);
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    header {
  position: relative;
  background-color: #F0FFFF;
  padding: 20px;
  border-bottom: 2px solid #1E90FF;
  display: flex;
  justify-content: center; /* จัดตำแหน่งตรงกลางของ header */
  align-items: center; /* จัดตำแหน่งตรงกลางของ header */
}

header h1 {
  color: #1E90FF;
  padding: 10px;
  border-radius: 10px;
  margin: 0; /* ลบ margin ที่ถูกกำหนดเริ่มต้น */
}

    .back-button {
      position: absolute;
      top: 20px;
      left: 20px;
      padding: 10px;
      background-color: #808080;
      color: #ffffff;
      text-decoration: none;
      border-radius: 5px;
      z-index: 1000;
    }

    nav {
      background-color: #555;
      color: white;
      padding: 10px;
      text-align: center;
      display: flex;
      justify-content: flex-end;
    }

    nav a {
      color: white;
      text-decoration: none;
      padding: 10px;
      margin: 0 5px;
    }

    .container {
      max-width: 600px;
      width: 80%;
      margin: 20px auto;
      background: #F9F9F9;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #contact input,
    #contact textarea {
      font: 400 16px/1.6 Open Sans, sans-serif;
      width: 100%;
      border: 1px solid #CCC;
      background: #FFF;
      margin: 10px 0;
      padding: 2px;
      border-radius: 5px;
    }

    #contact textarea {
      height: 100px;
      resize: none;
    }

    #contact h1 {
      margin-bottom: 30px;
      font-size: 36px;
    }

    #contact button {
      cursor: pointer;
      width: 100%;
      border: none;
      background: #1E90FF;
      color: #FFF;
      margin: 10px 0;
      padding: 15px;
      font-size: 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    #contact button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <header>
    <h1 align="center">Work with us</h1>
  </header>

  <nav>
    <a href="index.php">POS System</a>
    <a href="news.php">ข่าวสาร</a>
    <a href="join.php">สมัคร POS</a>
    <a href="contact.php">ติดต่อเรา</a>
  </nav>

  <div class="container">
    <form id="contact" action="send.php" method="post">
      <h1>Contact Form</h1>

      <fieldset>
        <input placeholder="ชื่อ-นามสกุล" name="name" type="text" tabindex="1" autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Email Address" name="email" type="email" tabindex="2">
      </fieldset>
      <fieldset>
        <input placeholder="ชื่อร้าน" type="text" name="subject" tabindex="4">
      </fieldset>
      <fieldset>
        <textarea name="message" placeholder="รายละเอียดของร้าน" tabindex="5"></textarea>
      </fieldset>

      <fieldset>
        <button type="submit" name="send">Submit Now</button>
      </fieldset>
    </form>
  </div>
</body>

</html>
