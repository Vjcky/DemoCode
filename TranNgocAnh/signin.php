<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername='localhost';
$username='root';
$password='';
$database="Ngocanh";

$connect = mysqli_connect($servername, $username, $password, $database);

// Xử lý khi người dùng gửi biểu mẫu đăng ký
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM moncute WHERE username='$username'";
    $result = $connect->query($sql);
    $length  =  strlen($username); 
    if ($length < 8) 
    {  
        echo '<script>alert("Username cần tối thiểu 8 ký tự")</script>';         
    } else if ($password  == "") {
        echo '<script>alert("Vui lòng nhập mật khẩu!")</script>'; 
    }else if ($result->num_rows > 0) {
        echo '<script>alert("Tên người dùng đã tồn tại. Vui lòng chọn tên khác!")</script>'; 
    } else {
        // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
       // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Thêm tài khoản vào cơ sở dữ liệu
        $hihi = "INSERT INTO moncute (username, password) VALUES ('$username', '$password')";
        if ($connect->query($hihi) === TRUE) {
            echo '<script>alert("Đăng ký thành công!")</script>'; 
        } else {
            echo "Lỗi: " . $hihi . "<br>" . $connect->error;
        }
    }

    $connect->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký tài khoản</title>
    <style>
        body{
            background-color: pink;    
            }
    
        #ngungoc{
            margin: 120px auto;
            text-align:center;
            color: white;
            max-width: 400px;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
            input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
         }
         </style>
</head>
<body>
    <div id = 'ngungoc'> 
    <h2>Đăng ký tài khoản</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
   
        <input id = "username" type = "text" name="username" placeholder="User Name"/> <br><br>

       
        <input id = "password" type = "text" name="password" placeholder="Password"/><br><br>
        <p>Bạn đã có tài khoản rồi? <a href="Login.php">Đăng nhập</a>.</p>
        <input type="submit" value="Đăng ký">
    </form>
</div>
</body>
</html>