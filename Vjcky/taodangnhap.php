<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="icon" href="https://glitch.com/favicon.ico" />
    <title> Sign up </title>
    <script src="/script.js" defer></script>
    <link rel="stylesheet" href="/taodangnhap.css"/>
    <style>
        body{
            background-image: url(https://bitly2s.com/icc1om);    
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
       .signup{
            font-size:40px;
            font-family: "Raleway", sans-serif;
            -webkit-transition-duration: 1s; 
            transition-duration: 1s;
            opacity: 0.4;
            color: rgb(5, 5, 5);
            border:none;
            border-radius: 8px;

       }
       .signup:hover {  
            background-color: rgb(250, 246, 247);  
            color: Black;}
           
    </style>
 </head>
 <body>
    <?php
        echo '<script  language="javascript">
        function validate() {
    var u = document.getElementById("username").value;
    var p1 = document.getElementById("password").value;
    var p2 = document.getElementById("confirm").value;
    
    if(u== "") {
    alert("Vui lòng nhập tên!");
    return false;
    }
    else if (p1 == "") {
    alert("Vui lòng nhập mật khẩu!");
    return false;
    }
    else if(p2 == "") {
    alert("Vui lòng xác minh mật khẩu!");
    return false;
    }
    else {
    alert("Chúc mừng bạn đăng ký thành công!");
    return true;}
    }
    </script>'
    ?>
    <!-- <script  language="javascript">
        function validate() {
    var u = document.getElementById("username").value;
    var p1 = document.getElementById("password").value;
    var p2 = document.getElementById("confirm").value;
    
    if(u== "") {
    alert("Vui lòng nhập tên!");
    return false;
    }
    else if (p1 == "") {
    alert("Vui lòng nhập mật khẩu!");
    return false;
    }
    else if(p2 == "") {
    alert("Vui lòng xác minh mật khẩu!");
    return false;
    }
    else {
    alert("Chúc mừng bạn đăng ký thành công!");
    return true;}
    }
    </script> -->
    <div id = 'ngungoc'> 
        <h1> Sign up</h1>
        <form action="" method="POST" onsubmit="return validate()">
            <div id = 'ngudot'>
                <div>
                    <input id = "username" type = "text" name="username" placeholder="User Name"/> 
                </div>
                <br>
                <div>
                    <input id = "email" type = "text" name="email" placeholder="Email"/>
                </div>
                <br>
                <div>
                    <input id = "password" type = "text" name="password" placeholder="Password"/>
                </div>
                <br>
                <div>
                    <input id = "confirm" type = "text" name="confirm" placeholder="Confirm Passwork"/>
                </div>
            </div>
            <br>
            <p>Bạn đã có tài khoản rồi? <a href="Login.html">Đăng nhập</a>.</p>
            <button class = 'signup'>Sign up</button>
            
        </form>
    </div>
 </body>
 </html>