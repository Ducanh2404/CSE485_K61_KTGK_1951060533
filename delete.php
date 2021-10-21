<?php
$conn = mysqli_connect('localhost','root','','blood');
if (!$conn){
    die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
}
if(isset($_REQUEST['reci_id']) and $_REQUEST['reci_id']!=""){
$reci_id=$_GET['reci_id'];
$sql = "DELETE FROM blood_recipient WHERE reci_id='$reci_id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
header("Location:index.php");
?>