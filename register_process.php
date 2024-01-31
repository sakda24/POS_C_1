<?php
include 'condb_m.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mem_name = $_POST['mem_name'];
    $mem_username = $_POST['mem_username'];
    $mem_password = $_POST['mem_password'];
    $shop_name = $_POST['shop_name'];
    $address_m = $_POST['address_m'];
    $phone = $_POST['phone'];
    $ref_l_id = $_POST['ref_l_id'];

    // ปรับปรุงเพื่อรองรับการอัปโหลดไฟล์รูปภาพ
    if (isset($_FILES['mem_img']) && $_FILES['mem_img']['error'] === UPLOAD_ERR_OK) {
        $mem_img_name = $_FILES['mem_img']['name'];
        $mem_img_tmp = $_FILES['mem_img']['tmp_name'];
        $mem_img_path = "uploads/" . $mem_img_name; // กำหนดเส้นทางที่จะบันทึกไฟล์รูปภาพ

        // ย้ายไฟล์ไปยังเส้นทางที่กำหนด
        move_uploaded_file($mem_img_tmp, $mem_img_path);
    } else {
        // หากไม่มีการอัปโหลดรูปภาพ
        $mem_img_path = null; // กำหนดให้เป็นค่าว่างหากไม่มีรูป
    }

    // SQL query to insert data into tbl_member_m
    $sql = "INSERT INTO tbl_member_m (mem_name, mem_username, mem_password, shop_name, address_m, phone, mem_img, ref_l_id) 
            VALUES ('$mem_name', '$mem_username', '$mem_password', '$shop_name', '$address_m', '$phone', '$mem_img_path', '$ref_l_id')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('สมัครสมาชิกสำเร็จ.');
                window.location.href = 'index.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('สมัครสมาชิกไม่สำเร็จ.');
                window.location.href = 'register.php';
              </script>";
    }

    $conn->close();
}
?>
