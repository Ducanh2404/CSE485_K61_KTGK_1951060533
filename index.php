<?php include ("config/header.php") ?>
<div class="row">
    <div class="col-md-12 bg-white">
    <div>
        <a href="add.php"><button class="btn btn-success">Thêm</button></a>
    </div>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã Người Nhận</th>
      <th scope="col">Họ và Tên</th>
      <th scope="col">Năm Sinh</th>
      <th scope="col">Nhóm Máu</th>
      <th scope="col">Số Lượng Máu Cần Nhận </th>
      <th scope="col">Giới Tính</th>
      <th scope="col">Ngày Đăng Kí Nhận Máu</th>
      <th scope="col">Số Điện Thoại</th>
    </tr>
  </thead>
  <tbody>
    <?php
          //lấy dữ liệu từ CSDL và để ra bảng (phần lặp lại)
          //bước 1:kết nối tời csdl(mysql)
          require ("config/connect.php");
          //bước 2 khai báo câu lệnh thực thi và thực hiện truy vấn
          $sql = "SELECT * from blood_recipient";
          $result = mysqli_query($conn,$sql);

          //bước 3 xử lý kết quả trả về
          if(mysqli_num_rows($result) > 0){
              $i=1;
              while($row = mysqli_fetch_assoc($result)){
          
      ?>
      
      <tr>
      <th scope="row"><?php echo $i; ?> </th>
      <td><?php echo $row['reci_id']; ?> </td>
      <td><?php echo $row['reci_name']; ?> </td>
      <td><?php echo $row['reci_age']; ?> </td>
      <td><?php echo $row['reci_bgrp']; ?> </td>
      <td><?php echo $row['reci_bqnty']; ?> </td>
      <td><?php echo $row['reci_sex']; ?> </td>
      <td><?php echo $row['reci_reg_date']; ?> </td>
      <td><?php echo $row['reci_phno']; ?> </td>
      <td><a href="details.php?reci_id=<?php echo $row['reci_id']; ?>" title="Chi Tiết"><i class="fas fa-info-circle"></i></a></td>
      </tr>
      <?php
          $i++;
          }
      }
    ?>
  </tbody>
  </table>
  
    </div>
 
  </div>
  

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>