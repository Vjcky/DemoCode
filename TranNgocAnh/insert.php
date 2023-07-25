<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
<style>
body {
padding: 50px;
background: gray;
}
* {
margin: 0;
padding: 0;
}
.form-tt h2 {
font-size: 30px;
color: #fff;
line-height: 1.2;
text-align: center;
text-transform: uppercase;
display: block;
margin-bottom: 30px;
}

.form-tt input[type=text], .form-tt input[type=password] {
font-family: Poppins-Regular;
font-size: 16px;
color: #fff;
line-height: 1.2;
display: block;
width: calc(100% - 10px);
height: 45px;
background: 0 0;
padding: 10px 0;
border-bottom: 2px solid rgba(255,255,255,.24)!important;
border: 0;
outline: 0;
}
.form-tt input[type=text]::focus, .form-tt input[type=password]::focus {
color: red;
}
.form-tt input[type=password] {
margin-bottom: 20px;
}
.form-tt input::placeholder {
color: #fff;
}
.checkbox {
display: block;
}
.form-tt input[type=submit] {
font-size: 16px;
color: #555;
line-height: 1.2;
padding: 0 20px;
min-width: 120px;
height: 50px;
border-radius: 25px;
background: #fff;
position: relative;
z-index: 1;
border: 0;
outline: 0;
display: block;
margin: 30px auto;
}
#checkbox {
display: inline-block;
margin-right: 10px;
}
.checkbox-text {
color: #fff;
}
.psw-text {
color: #fff;
}
</style>
</head>
<body>
<?php
// Kết nối Database
    $servername='localhost';
    $username='root';
    $password='';
    $database="abc";
    $conn= mysqli_connect($servername, $username, $password, $database);
    // $id=$_GET['ID'];
    // echo $id;
    $query=mysqli_query($conn,"select * from user WHERE ID=12");
    $row=mysqli_fetch_assoc($query);

?>
 <div class="form-tt">
    <form method="POST" class="form">
    <h2>Insert</h2>
    <label>Name: <input id="checkbox" type="text" value="<?php echo $row['Name']; ?>" name="Name"></label><br/><br/>
    <label>Email: <input id="checkbox" type="text" value="<?php echo $row['Email']; ?>" name="Email"></label><br/><br/>
    <label>Job: <input id="checkbox" type="text" value="<?php echo $row['Job']; ?>" name="Job"></label><br/><br/>
    <input type="submit" value="Update" name="update_user"><br/><br/>

</div>
<?php
$servername='localhost';
$username='root';
$password='';
$database="abc";
$conn= mysqli_connect($servername, $username, $password, $database);
if(isset($_REQUEST['ID']) and $_REQUEST['ID']!=""){
$id=$_GET['ID'];
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Job=$_POST['Job'];
$sql = "INSERT INTO user (Name, Email, Job) VALUES($Name, $Email, $Job)";
if ($conn->query($sql) === TRUE) {
echo "Thêm thành công";
} else {
echo "Error updating record: " . $conn->error;
}
$conn->close();
}
?>

</body>
</html>
