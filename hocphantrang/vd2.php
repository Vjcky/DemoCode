<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Phan Trang </title>
    <script src="/script.js" defer></script>
</head>
<body>
<div id = "noidung">
    <?php
    
        require "dbCon.php";
        $sotin1trang = 4;
        $current_page = isset($_GET['trang']) ? $_GET['trang'] : "  ";
        if($current_page == '  '|| $current_page == 1){
            $from = 0;
        }else{ 
            $from = ($current_page - 1)*$sotin1trang;
        }
    
        $conn = mysqli_connect($servername, $username, $password, $database);
        $qr = "SELECT * FROM monan LIMIT $from, $sotin1trang";
        $ds = mysqli_query($conn,$qr);
        $iq = "SELECT * FROM monan";
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
                echo '<li>' . $monan["TenMonAn"] . '</li>';
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