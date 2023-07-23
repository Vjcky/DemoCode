<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://glitch.com/favicon.ico" />
    <title> Log in </title>
    <script src="/script.js" defer></script>
    <link rel="stylesheet" href="/taodangnhap.css"/>
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
       
      
       .login{
            font-size:40px;
            font-family: "Raleway", sans-serif;
            -webkit-transition-duration: 1s; 
            transition-duration: 1s;
            opacity: 0.4;
            color: rgb(5, 5, 5);
            border:none;
            border-radius: 8px;

       }
       .login:hover {  
            background-color: rgb(250, 246, 247);  
            color: Black;}
       
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
    <?php
    $servername='localhost';
    $username='root';
    $password='';
    $database="Ngocanh";

     $conn= mysqli_connect($servername, $username, $password, $database);
    ?>
    <?php
    if(isset($_POST['dangnhap'])){
       $username = $_POST['username'];
       $password = $_POST['password'];
    //    if($username == 'changokkuain1305@gmail.com'&& $password=='20110001'){
    //     // $_SESSION['username']=$username;
    //     header('location:baitap.php');
    //    }else{
    //     echo "Tài khoản hoặc mật không không chính xác";
    //    }
     }
    $sql = "SELECT * FROM moncute WHERE username='$username' && password ='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo'<script>alert("Đăng nhập thành công!")</script>'; 
        header('location:baitap.php');
       
    }else{
        echo'<script>alert("Tài khoản hoặc mật không không chính xác!")</script>'; 
        
    }
    ?>

    <div id = 'ngungoc'> 
        <h1> Log in</h1>
        <form action="login.php" method="POST" onsubmit="return validate()">
            <div id = 'ngudot'>
                <div>
                    <input id = "username" type = "text" name="username" placeholder="Username"/>
                </div>
                <br>
                <div>
                    <input id = "password" type = "text" name="password" placeholder="Password"/>
                </div>
            </div>
            <br>
            <p>Bạn chưa có tài khoản? <a href="/UNITOP-PHP/Vjcky/signin.php">Đăng ký</a>.</p>
            <button type="submit" name="dangnhap">Đăng nhập</a></button>
        </form>
    </div>
</body>