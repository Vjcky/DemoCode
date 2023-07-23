<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername='localhost';
$username='root';
$password='';
$database="food";

$conn = mysqli_connect($servername, $username, $password, $database);
if($conn){
 echo ("Ket noi thanh cong !");
 //header("Location: /UNITOP-PHP/Vjcky/baitap.html");
}else{
 echo ("Ket noi that bai!");
}
?>