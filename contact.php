<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ติดต่อเรา</title>
    <link rel="stylesheet" href="style.css"> <!-- เพิ่มไฟล์ CSS ตามต้องการ -->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
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

        section {
            margin-top: 20px;
            text-align: center;
            padding: 20px;
        }

        form {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
            font-weight: bold;
            white-space: pre-line;
        }

        img {
    max-width: 150px;
    height: 150px;
    border-radius: 10px;
    margin-bottom: 20px;
    display: block; /* ทำให้รูปภาพเรียงต่อกันและไม่กั้นข้อความ */
    margin: 0 auto; /* ทำให้รูปภาพอยู่ตรงกลาง */
}


        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav>
        <a href="index.php">POS SYSTEM</a>
        <a href="about_pos.php">เกี่ยวกับระบบ POS</a>
        <a href="news.php">ข่าวสาร</a>
        <a href="join.php">สมัคร POS</a>
    </nav>

    <header>
        <h1>ติดต่อเรา</h1>
    </header>

    <section>
        <form action="process_contact.php" method="post">
            <img src="poscenter-800x800.jpg" alt="POS Service จำกัด">
            <br>
            <label for="text"><font color="#000080"><h2>บริษัท POS Service จำกัด</h2></font></label>
            <label for="text">ที่อยู่ เลขที่ 113/135 ซอยหทัยราษฎร์21 ถนนหทัยราษฎร์<br>
    แขวงมีนบุรี เขตมีนบุรี กรุงเทพฯ 10510<br>
    โทรศัพท์ : 02-966-8918 , 02-966-8907</label>

        </form>
    </section>

    <footer>
        <p>ติดต่อ: contact@example.com | โทร: 02-123-4567</p>
    </footer>
</body>

</html>
