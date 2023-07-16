<?php
   $servername='localhost';
   $username='root';
   $password='';
   $database="ngocanh";

   $connect = mysqli_connect($servername, $username, $password, $database);
   if($connect){
    echo ("Ket noi thanh cong !");
    header("Location: /UNITOP-PHP/Vjcky/baitap.html");
   }else{
    echo ("Ket noi that bai!");
   }
?>