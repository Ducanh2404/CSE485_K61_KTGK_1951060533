<?php include("config/header.php") ?>
<?php require("config/connect.php") ?>
<main>
    <?php
    $reci_id = $_GET['reci_id'];
    $query = mysqli_query($conn, "SELECT * from blood_recipient where reci_id='$reci_id'");
    $row = mysqli_fetch_assoc($query);
    ?>
    <div class="container-fluid">
        <form method="POST" class="form">
            <h2>Chi Tiết</h2>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Họ và Tên </label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $row['reci_name']; ?>" name="reci_name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Năm Sinh </label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $row['reci_age']; ?>" name="reci_age">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nhóm Máu </label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $row['reci_bgrp']; ?>" name="reci_bgrp">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Số Lượng Máu Cần Nhận </label>
                <div class="col-sm-10">
                <input type="text" value="<?php echo $row['reci_bqnty']; ?>" name="reci_bqnty">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Giới Tính </label>
                <div class="col-sm-10">
                <input type="text" value="<?php echo $row['reci_sex']; ?>" name="reci_sex"><br>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ngày Đăng Kí</label>
                <div class="col-sm-10">
                <input type="text" value="<?php echo $row['reci_reg_date']; ?>" name="reci_reg_date"><br>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Số Điện Thoại</label>
                <div class="col-sm-10">
                <input type="text" value="<?php echo $row['reci_phno']; ?>" name="reci_phno"><br>
                </div>
            </div>
            
            <input type="submit" value="sửa" name="update">
            
        </form>
        <td><a href="delete.php?reci_id=<?php echo $row['reci_id']; ?>"><i class="fas fa-trash"></i></a></td>
    </div>

</main>
