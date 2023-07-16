<?php
if(!isset($_SESSION["username"])){
    header('Location: process.php');
}
alert(message: "Đăng nhập thành công");
?>