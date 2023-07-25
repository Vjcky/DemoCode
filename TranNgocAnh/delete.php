<?php
$servername='localhost';
$username='root';
$password='';
$database="abc";
$conn= mysqli_connect($servername, $username, $password, $database);
if(isset($_REQUEST['ID']) and $_REQUEST['ID']!=""){
$id=$_GET['ID'];
$sql = "DELETE FROM user WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $conn->error;
}
$conn->close();
}
?>
