<?php
session_start();

if (isset($_POST['mem_username'])) {
    // connection
    include("condb_c.php");
    include("condb.php");

    // รับค่า user & mem_password
    $mem_username = mysqli_real_escape_string($condb, $_POST['mem_username']);
    $mem_password = mysqli_real_escape_string($condb, sha1($_POST['mem_password']));

    $chk = trim($mem_username) OR trim($mem_password);
    if ($chk == '') {
        echo '<script>';
        echo "alert(\" username หรือ  mem_password ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo '</script>';
    } else {
        // query to check in the first database
        $sql_c = "SELECT * FROM tbl_member_c 
                  WHERE mem_username='" . $mem_username . "' 
                  AND mem_password='" . $mem_password . "' ";
        $result_c = mysqli_query($condb_c, $sql_c);

        // query to check in the second database
        $sql = "SELECT * FROM tbl_member 
                WHERE mem_username='" . $mem_username . "' 
                AND mem_password='" . $mem_password . "' ";
        $result = mysqli_query($condb, $sql);

        // check if user exists in either database
        if (mysqli_num_rows($result_c) == 1) {
            // login successful for first database
            $row_c = mysqli_fetch_array($result_c);
            $_SESSION["mem_id"] = $row_c["mem_id"];
            $_SESSION["mem_name"] = $row_c["mem_name"];
            $_SESSION["ref_l_id"] = $row_c["ref_l_id"];
            $_SESSION["mem_img"] = $row_c["mem_img"];
            $_SESSION["mem_address"] = $row_c["mem_address"];
            Header("Location: new_page.php");
        } elseif (mysqli_num_rows($result) == 1) {
            // login successful for second database
            $row = mysqli_fetch_array($result);
            $_SESSION["mem_id"] = $row["mem_id"];
            $_SESSION["mem_name"] = $row["mem_name"];
            $_SESSION["ref_l_id"] = $row["ref_l_id"];
            $_SESSION["mem_img"] = $row["mem_img"];
            $_SESSION["mem_address"] = $row["mem_address"];

            if ($_SESSION["ref_l_id"] == "1") {
                Header("Location: new_page.php");
            } elseif ($_SESSION["ref_l_id"] == "2") {
                Header("Location: new_page.php");
            } elseif ($_SESSION["ref_l_id"] == "3") {
                Header("Location: new_page.php");
            }
        } else {
            // login failed
            echo "<script>";
            echo "alert(\" user หรือ  mem_password ไม่ถูกต้อง\");";
            echo "window.history.back()";
            echo "</script>";
        }
    }
} else {
    Header("Location: login.php"); // user & mem_password incorrect back to login again
}
?>
