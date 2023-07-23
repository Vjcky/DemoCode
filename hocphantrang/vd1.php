<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Phan Trang </title>
    <script src="/script.js" defer></script>
    <style>
        .row2 {
        display: flex;
        justify-content: space-around;
        border: 1px;
        padding: 5px 9px;
        }

#colum3 {
  border: 1px solid #ccc;
  float: left;
  width: 24%;
  text-align: center;
  font-size: 15px;
  font-family: "Raleway", sans-serif;
}
</style> 
</head>
<body>
<div class="row2"> 
   
        <div id="colum3">
            <img src="https://bitly2s.com/dusr9v"alt="Pineapple" style="width:100%;height:60%;margin-top:10px;">
            <h3> John Doe</h3>
            <p class="kieuchu">CEO & Founder </p>
            <p> Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <form>
                <button class="button3">
                    <i class="material-icons">mail</i>
                    Contact
                </button>
            </form>
    
        </div>

        <div id="colum3"> 
            <img src="https://bitly2s.com/f2xbzk"alt="Pineapple" style="width:100%;height:60%;margin-top:10px;">
            <h3> Anja Doe</h3>
            <p class="kieuchu">Art Director </p>
            <p> Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <form>
                <button class="button3">
                    <i class="material-icons">mail</i>
                    Contact
                </button>
            </form>
        </div>
        <div id="colum3"> 
            <img src="https://bitly2s.com/hjs06b"alt="Pineapple" style="width:100%;height:60%;margin-top:10px;">
            <h3> Mike Ross</h3>
            <p class="kieuchu">Web Designer </p>
            <p> Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <form>
                <button class="button3">
                    <i class="material-icons">mail</i>
                    Contact
                </button>
            </form>
        </div>
        <div id="colum3"> 
            <img src="https://bitly2s.com/osg46f" alt="Pineapple" style="width:100%;height:60%;margin-top:10px;">
            <h3> Dan Star</h3>
            <p class="kieuchu">Designer </p>
            <p> Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <form>
                <button class="button3">
                    <i class="material-icons">mail</i>
                    Contact
                </button>
            </form>
        </div>

    <?php
        $servername='localhost';
        $username='root';
        $password='';
        $database="Vjcky";
        
        $conn = mysqli_connect($servername, $username, $password, $database);
        $sotin1trang = 1;
        $current_page = isset($_GET['trang']) ? $_GET['trang'] : "  ";
        if($current_page == '  '|| $current_page == 1){
            $from = 0;
        }else{ 
            $from = ($current_page - 1)*$sotin1trang;
        }
        $qr = "SELECT * FROM name LIMIT $from, $sotin1trang";
        $ds = mysqli_query($conn,$qr);
        $iq = "SELECT * FROM name";
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
            while ($monan = mysqli_fetch_assoc($ds)){
                echo  $monan["Ten"] ;
            }
        ?>
</div>
<div id = "phantrang">
    <?php
    for($t = 1; $t<=$sotrang; $t++){
         echo "<a href = 'vd1.php?trang=$t'> Trang $t </a>";
     }
?>
</div>
   
</body>
</head>

