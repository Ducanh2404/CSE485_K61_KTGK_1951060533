<?php include ('config/header.php') ?>
<form action="" method="POST">
 <div class="form-group row">
      <label for="reci_name" class="col-sm-1 col-form-label">Họ và tên</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="reci_name" name="reci_name" placeholder="VD:Nguyễn Văn A">
      </div>
  </div>
  <div class="form-group row">
      <label for="reci_age" class="col-sm-1 col-form-label">Năm Sinh</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="reci_age" name="reci_age" placeholder="VD:1995">
      </div>
  </div>
  <div class="form-group row">
      <label for="reci_bgrp" class="col-sm-1 col-form-label">Nhóm Máu</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="reci_bgrp" name="reci_bgrp" placeholder="VD:A,B,O,...">
      </div>
  </div>
  <div class="form-group row">
      <label for="reci_bqnty" class="col-sm-1 col-form-label">Số Máu Cần Nhận</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="reci_bqnty" name="reci_bqnty" placeholder="VD:450">
      </div>
  </div>
  <div class="form-group row">
      <label for="reci_sex" class="col-sm-1 col-form-label">Giới Tính</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="reci_sex" name="reci_sex" placeholder="Nam,Nữ">
      </div>
  </div>
  <div class="form-group row">
      <label for="reci_phno" class="col-sm-1 col-form-label">Số Điện Thoại</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="reci_phno" name="reci_phno" placeholder="VD: 0985478628">
      </div>
  </div>
  <div class="form-group row">
      <label for="reci_reg_date" class="col-sm-1 col-form-label">Ngày Đăng Kí </label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="reci_reg_date" name="reci_reg_date" placeholder="VD: 2021-10-21">
      </div>
  </div>
<button type="submit" name="submit" class="btn btn-success mb-3">Thêm<i class="far fa-plus-square"></i></button>
</form>
<?php
  //kiểm tra người dùng đã ấn thêm hay chưa
  if(isset($_POST['submit'])){
  //lấy giá trị trên form và lưu vào các biến
  $reci_name    = $_POST['reci_name'];
  $reci_age     = $_POST['reci_age'];
  $reci_bgrp    = $_POST['reci_bgrp'];
  $reci_bqnty   = $_POST['reci_bqnty'];
  $reci_sex     = $_POST['reci_sex'];
  $reci_reg_date= $_POST['reci_reg_date'];
  $reci_phno    = $_POST['reci_phno'];
  //thực hiện quy trình 3 bước
  //Bước 1: Kết nối DBS
  require ('config/connect.php');
  //Bước 2 : khai báo truy vấn
  $sql ="INSERT INTO blood_recipient (reci_name,reci_age,reci_bgrp,reci_bqnty,reci_sex,reci_reg_date,reci_phno) VALUES('$reci_name','$reci_age','$reci_bgrp','$reci_bqnty','$reci_sex','$reci_reg_date','$reci_phno')";
  if(mysqli_query($conn,$sql)==TRUE){
    echo "Thêm thành công";
    header("Location:index.php");
  }else{
    echo "Chưa thêm được .....";
  }
  //Bước 3 :Đóng kết nối
  mysqli_close($conn);
  } 
  
?>
