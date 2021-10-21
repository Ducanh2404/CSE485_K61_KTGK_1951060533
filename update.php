<?php
require("config/connect.php");
if (isset($_POST['update'])) {
    $reci_id    = $_GET['reci_id'];
    $reci_name  = $_POST['reci_name'];
    $reci_age   = $_POST['reci_age'];
    $reci_bgrp  = $_POST['reci_bgrp'];
    $reci_bqnty = $_POST['reci_bqnty'];
    $reci_sex   = $_POST['reci_sex'];
    $reci_reg_date=$_POST['reci_reg_date'];
    $reci_phno  = $_POST['reci_phno'];

    $sql = " UPDATE `blood_recipient` SET reci_name='$reci_name' , reci_age = '$reci_age', reci_bgrp='$reci_bgrp', reci_bqnty='$reci_bqnty',reci_sex='$reci_sex',reci_phno='$reci_phno' WHERE reci_id='$reci_id'";

    if ($conn->query($sql) == TRUE) {
        echo "Sửa Thành Công";
    } else {
        echo "Lỗi: " . $conn->error;
    }

    $conn->close();

}
?>
