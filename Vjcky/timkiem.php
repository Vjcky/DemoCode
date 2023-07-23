

<?php
    if(isset($_POST['submit'])){
        $noidung = $_POST['noidung'];
        }
       
?>


<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername='localhost';
$username='root';
$password='';
$database="abc";

$conn = mysqli_connect($servername, $username, $password, $database);
// if($conn){
//  echo ("Ket noi thanh cong !");
//  //header("Location: /UNITOP-PHP/Vjcky/baitap.html");
// }else{
//  echo ("Ket noi that bai!");
// }
?>

<?php
    $sql = "SELECT * FROM user WHERE Name LIKE '%$noidung%'";
    $result =  mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array( $result)){
      echo 'Name: '. $row['Name'];
      echo '<br>';
      echo 'Email: '.$row['Email'];
      echo '<br>';
      echo 'Job: '.$row['Job'];
    }
    
?>




