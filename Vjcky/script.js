/*
 function signup() {
   event.prevenDeffault();
   var username = document.getelementById(elementId: "username").value;
   var email = document.getelementById(elementId:"email").value;
   var password = document.getelementById(elementId:"password").value;
   var confirm = document.getelementById(elementId: "confirm").value;
   var user = {
    username: username,
    email: email,
    password: password,
   };
   var json = JSON.stringify(value: user);
   localStorage.setItem(key: username, value: json);
   alert(message: "Đăng ký thành công");
}
function login() {
   event.preventDefault();
   var username = document.getelementById(elementId: "username").value;
   var email = document.getelementById(elementId:"email").value;
   var password = document.getelementById(elementId:"password").value;
   var user = localStorage.grtItem(key: username);
   var data = JSON.parse(text: user);
if(user ==null){
   alert(message: "vui lòng đăng nhập lại")
}else if(username == data.username && email == data.email && password == data.password){
   alert(message: "vui lòng đăng nhập lại")
   window.location.href="baitap.html"
}
else{alert(message: "đăng nhập thất baij")}
}




</script>
<script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add('right-panel-active');
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove('right-panel-active');
        });
    </script>*/
   
    function validate() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      var confirm = document.getElementById("confirm").value;
      
      if(username== "") {
      alert("Vui lòng nhập tên!");
      return false;
      }
      if(password == "") {
      alert("Vui lòng nhập mật khẩu!");
      return false;
      }
      if(confirm == "") {
      alert("Vui lòng xác minh mật khẩu!");
      return false;
      }
      
      alert("Xin hãy điền đúng thông tin!")
      return true;
      }
      
