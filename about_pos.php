<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบ POS SYSTEM</title>
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
        }
    </style>
</head>

<body>
    <nav>
        <!-- Include Navbar ที่นี่ -->
        <!-- ตัวอย่าง: -->
        <a href="index.php">POS System</a>
        <a href="news.php">ข่าวสาร</a>
        <a href="join.php">สมัคร POS</a>
        <a href="contact.php">ติดต่อเรา</a>
    </nav>

    <header>
        <!-- เพิ่มสีให้กับตัวอักษร h1 -->
        <h1>เกี่ยวกับระบบ POS SYSTEM</h1>
    </header>

    <section id="about">
        <?php
        // เนื้อหาเกี่ยวกับระบบ POS
        $content = "
            <p>ระบบ POS (Point of Sale) คือ ระบบที่ถูกออกแบบมาเพื่อช่วยในกระบวนการทำธุรกรรมการขายและบริหารจัดการธุรกิจ เป็นส่วนหนึ่งของระบบ IT (Information Technology) ที่ได้รับความนิยมมากขึ้นในธุรกิจค้าปลีกและอื่น ๆ</p>
            <p><strong>คุณสมบัติหลักของระบบ POS:</strong></p>
            <ol>
                <li>การทำธุรกรรมขาย (Sales Transaction)</li>
                <li>การจัดการสต็อก (Inventory Management)</li>
                <li>รายงานและการวิเคราะห์ (Reporting and Analytics)</li>
                <li>การจัดการลูกค้า (Customer Management)</li>
                <li>การทำงานในระบบเครือข่าย (Network Compatibility)</li>
                <li>ความปลอดภัย (Security)</li>
                <li>การทำงานในโหมดออฟไลน์ (Offline Mode)</li>
            </ol>
            <p><strong>ความสำคัญของระบบ POS:</strong></p>
            <ol>
                <li>เพิ่มประสิทธิภาพการทำงาน</li>
                <li>การติดตามและจัดการสต็อก</li>
                <li>ประหยัดเวลาและทรัพยากร</li>
                <li>ปรับปรุงประสบการณ์ลูกค้า</li>
                <li>วิเคราะห์และการบริหารจัดการ</li>
            </ol>
        ";

        echo $content;
        ?>
    </section>

    <footer>
        <p>&copy; 2023 บริษัท POS. สงวนลิขสิทธิ์.</p>
    </footer>
</body>

</html>
