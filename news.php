<!-- news.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข่าวสารเกี่ยวกับระบบ POS</title>
    <link rel="stylesheet" href="style.css"> <!-- เพิ่มไฟล์ CSS ตามต้องการ -->
    <style>
        /* เพิ่มสีให้กับตัวอักษร h1 */
        header {
            position: relative;
        }

        header h1 {
            color: #1E90FF;
            display: inline-block; /* เพื่อให้ปุ่ม back ไม่ทับกับตัวอักษร h1 */
            background-color: #F0FFFF;
            padding: 10px;
            border-radius: 10px;
        }

        /* เพิ่มปุ่ม back */
        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 10px;
            background-color: #808080; /* สีเทา */
            color: #ffffff; /* สีขาว */
            text-decoration: none;
            border-radius: 5px;
            z-index: 1000; /* ป้องกันถูกครอบทับ */
        }

        /* สไตล์ Navbar */
        nav {
            background-color: #555;
            color: white;
            padding: 10px;
            text-align: center;
            display: flex; /* ทำให้ nav เป็น Flex Container */
            justify-content: flex-end; /* ย้าย Navbar ไปทางขวา */
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 0 5px;
        }

        /* เพิ่ม margin ให้กับเนื้อหาใต้ Navbar */
        section {
            margin-top: 20px;
            text-align: left; /* จัดตำแหน่งของเนื้อหาใน section เป็นซ้าย */
            padding: 20px; /* เพิ่ม padding เพื่อให้เนื้อหาดูสวยงาม */
        }

        /* สไตล์ของข่าว */
        #newsContent {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <nav>
        <!-- Include Navbar ที่นี่ -->
        <!-- ตัวอย่าง: -->
        <a href="index.php">POS System</a>
        <a href="about_pos.php">เกี่ยวกับระบบ POS</a>
        <a href="join.php">สมัคร POS</a>
        <a href="contact.php">ติดต่อเรา</a>
    </nav>

    <header>
        <!-- เพิ่มสีให้กับตัวอักษร h1 -->
        <h1>ข่าวสารเกี่ยวกับระบบ POS</h1>
    </header>

    <section id="news">
        <?php
        // เนื้อหาข่าวสาร
        $newsContent = "
            <div id='newsContent'>
                <h2>เปิดตัวระบบ POS ออนไลน์แห่งใหม่</h2>
                <p>เรามีความยินดีที่จะประกาศให้ทราบว่าเราได้เปิดตัวระบบ POS แห่งใหม่ที่ให้บริการออนไลน์ ทำให้ธุรกิจของคุณสามารถทำธุรกรรมการขายได้ง่ายและสะดวกมากยิ่งขึ้น</p>
                <p>ระบบนี้มาพร้อมกับคุณสมบัติที่ทันสมัยและการออกแบบที่ใช้งานง่าย ทำให้คุณสามารถจัดการการขายและสต็อกของคุณได้ในที่เดียว</p>
                <p>อย่ารอช้า ลองใช้งานระบบของเราได้แล้ววันนี้!</p>
            </div>
        ";

        echo $newsContent;
        ?>
    </section>

    <footer>
        <p>&copy; 2023 บริษัท POS. สงวนลิขสิทธิ์.</p>
    </footer>
</body>

</html>
