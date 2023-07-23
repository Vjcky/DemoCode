<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
#colum3 {
  border: 1px solid #ccc;
  float: left;
  width: 30%;
  text-align: center;
  font-size: 15px;
  font-family: "Raleway", sans-serif;
 
}
.row2 {
  display: left;
  justify-content: space-around;
}
.button3 {
  font-size: 25px;
  font-family: "sans-serif";
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  opacity: 0.5;
  color: black;
  padding: 10px 50px;
  border: none;
  animation-duration: 4s
}
.button3:hover {
  background-color: rgb(121, 117, 118);
  color: Black;
}
</style>
</head>
<body>
 
 <div>
 
   <?php
    $servername='localhost';
    $username='root';
    $password='';
    $database="abc";
    $conn= mysqli_connect($servername, $username, $password, $database);
    $sql="select * from user order by id DESC";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        echo "<tr><td colspan='5' align='center'></td></tr>";
    }

   ?>

<?php
   
   //Phantrang
   $sotin1trang = 5;
   $current_page = isset($_GET['trang']) ? $_GET['trang'] : "  ";
   if($current_page == '  '|| $current_page == 1){
       $from = 0;
   }else{ 
       $from = ($current_page - 1)*$sotin1trang;
   }
   $qr = "SELECT * FROM user LIMIT $from, $sotin1trang";
   $ds = mysqli_query($conn,$qr);
   $iq = "SELECT * FROM user";
   $aq = mysqli_query($conn,$iq);
   // 2 dong quan trong nhat
   $tongsotin = mysqli_num_rows($aq); //dem so tin => 16 
   $sotrang = ceil($tongsotin/$sotin1trang);
   ?>  
   </div>
   <div>
       <?php 
           // PHẦN HIỂN THỊ TIN TỨC
           // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
           $ID=0;
           while($row=mysqli_fetch_array($result)){
           while ($monan = mysqli_fetch_assoc($ds)){
               $ID++;
               echo '<div class="row2">';
               echo '<div id="colum3">';
               echo "<h3> $monan[Name]</h3>";
               echo "<p>$monan[Job] </p>";
              echo ' <p> Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>';
              echo "<form>";
          
              echo " <button ";
              echo "    <i>mail</i>";
              echo "   Contact";
              echo" </button>";
             
              echo" </form>";
              echo" </div>";
              echo" </div>";
              echo "      ";
    
           }}
       ?>
   </div>
   
   <br> 
   <div id = "phantrang">
   <?php
   for($t = 1; $t<=$sotrang; $t++){
       echo "<a href = 'ngungoc.php?trang=$t'> Trang $t </a>";
   }
   ?>
   </div>

</div>
</body>
</html>
