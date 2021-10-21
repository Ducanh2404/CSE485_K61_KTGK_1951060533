<?php
    $conn = mysqli_connect('localhost','root','','blood');
            if(!$conn){
                die("Không thể kết nối,kiểm tra lại các tham số kết nối");
            }
?>