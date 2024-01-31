<?php
session_start();

include("condb_m.php");

function sanitize_input($data)
{
    global $condb_m;
    $data = trim($data);
    $data = mysqli_real_escape_string($condb_m, $data);
    return $data;
}

$ref_l_id = $mem_name = $mem_username = $mem_password = $shop_name = $address_m = $phone = $mem_img = "";
$ref_l_id_err = $mem_name_err = $username_err = $password_err = $shop_name_err = $address_err = $phone_err = $image_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ref_l_id = sanitize_input($_POST["ref_l_id"]);
    $mem_name = sanitize_input($_POST["mem_name"]);
    $mem_username = sanitize_input($_POST["mem_username"]);
    $mem_password = sanitize_input($_POST["mem_password"]);
    $shop_name = sanitize_input($_POST["shop_name"]);
    $address_m = sanitize_input($_POST["address_m"]);
    $phone = sanitize_input($_POST["phone"]);
    $mem_img = sanitize_input($_POST["mem_img"]);

    if (empty($ref_l_id)) {
        $ref_l_id_err = "โปรดป้อนรหัสร้าน.";
    }

    if (empty($mem_name)) {
        $mem_name_err = "โปรดป้อนชื่อ.";
    }

    if (empty($mem_username)) {
        $username_err = "โปรดป้อนชื่อผู้ใช้.";
    }

    if (empty($mem_password)) {
        $password_err = "โปรดป้อนรหัสผ่าน.";
    } elseif (strlen($mem_password) < 6) {
        $password_err = "รหัสผ่านต้องมีอย่างน้อย 6 ตัวอักษร.";
    }

    if (empty($shop_name)) {
        $shop_name_err = "โปรดป้อนชื่อร้าน.";
    }

    if (empty($address_m)) {
        $address_err = "โปรดป้อนที่อยู่.";
    }

    if (empty($phone)) {
        $phone_err = "โปรดป้อนเบอร์โทร.";
    }

    if (empty($mem_img)) {
        $image_err = "โปรดอัปโหลดรูปภาพ.";
    }

    if (empty($ref_l_id_err) && empty($mem_name_err) && empty($username_err) && empty($password_err) && empty($shop_name_err) && empty($address_err) && empty($phone_err) && empty($image_err)) {

        // เข้ารหัสรหัสผ่านด้วย SHA-1
        $mem_password = sha1($mem_password);

        $sql = "INSERT INTO tbl_member_m (ref_l_id, mem_name, mem_username, mem_password, shop_name, address_m, phone, mem_img) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($condb_m, $sql)) {
            mysqli_stmt_bind_param($stmt, "isssssss", $param_ref_l_id, $param_mem_name, $param_mem_username, $param_mem_password, $param_shop_name, $param_address, $param_phone, $param_mem_img);

            $param_ref_l_id = $ref_l_id;
            $param_mem_name = $mem_name;
            $param_mem_username = $mem_username;
            $param_mem_password = $mem_password;
            $param_shop_name = $shop_name;
            $param_address = $address_m;
            $param_phone = $phone;
            $param_mem_img = $mem_img;

            if (mysqli_stmt_execute($stmt)) {
                header("Location: index.php");
                exit();
            } else {
                echo "เกิดข้อผิดพลาด. กรุณาลองอีกครั้งในภายหลัง.";
            }

            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($condb_m);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom styles here -->
    <style>
        /* Add your custom styles here */
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <!-- Add your form fields here -->
                            <div class="form-group">
                                <label for="ref_l_id">รหัสร้าน:</label>
                                <input type="text" class="form-control" name="ref_l_id" id="ref_l_id" value="<?php echo $ref_l_id; ?>">
                                <span class="text-danger"><?php echo $ref_l_id_err; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="mem_name">ชื่อ:</label>
                                <input type="text" class="form-control" name="mem_name" id="mem_name" value="<?php echo $mem_name; ?>">
                                <span class="text-danger"><?php echo $mem_name_err; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="mem_username">ชื่อผู้ใช้:</label>
                                <input type="text" class="form-control" name="mem_username" id="mem_username" value="<?php echo $mem_username; ?>">
                                <span class="text-danger"><?php echo $username_err; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="mem_password">รหัสผ่าน:</label>
                                <input type="password" class="form-control" name="mem_password" id="mem_password">
                                <span class="text-danger"><?php echo $password_err; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="shop_name">ชื่อร้าน:</label>
                                <input type="text" class="form-control" name="shop_name" id="shop_name" value="<?php echo $shop_name; ?>">
                                <span class="text-danger"><?php echo $shop_name_err; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="address_m">ที่อยู่:</label>
                                <textarea class="form-control" name="address_m" id="address_m"><?php echo $address_m; ?></textarea>
                                <span class="text-danger"><?php echo $address_err; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="phone">เบอร์โทร:</label>
                                <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $phone; ?>">
                                <span class="text-danger"><?php echo $phone_err; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="mem_img">รูปภาพ:</label>
                                <input type="file" class="form-control" name="mem_img" id="mem_img" accept="image/*">
                                <span class="text-danger"><?php echo $image_err; ?></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Register</button>
                                <a href="index.php" class="btn btn-secondary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
