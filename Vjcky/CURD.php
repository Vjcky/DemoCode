<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> CURD User</title>
  </head>
  <body>
  <?php
   
    ?>
      <div class = "container">
        <h1> User List</h1>
</div>

<div>
    <table class = "table">
        <thead>
            <tr>
                <th scope = "col">ID</th>
                <th scope ="col">Name</th>
                <th scope ="col">Email</th>
                <th scope ="col">Job</th>
                <th scope ="Edit">Job</th>
                <th scope ="Delete">Job</th>
                
        </tr>
        </thead>
        <tfoot>
                <tr>
                    <td colspan="8">
                        <a href="add.php"><button id="button">Add member</button></a>
                    </td>
                </tr>
        </tfoot>
<tbody>
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
    //$ID=0;
    // while($row=mysqli_fetch_array($result)){
    //     $ID++;
    //     echo "<tr>";
    //     echo "<td>$ID</td>";
    //     echo "<td>$row[Name]</td>";
    //     echo "<td>$row[Email]</td>";
    //     echo "<td>$row[Job]</td>";
    //     echo '<td><a href="./edit.php"ID=<?=$row[ID?]>Edit</a></td>';
    //     echo '<td><a href="./delete.php"ID=<?=$row[ID?]>Delete</a></td>';
    // }
    ?>
</tbody>
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
                echo "<tr>";
                echo "<td>$ID</td>";
                echo "<td>$monan[Name]</td>";
                echo "<td>$monan[Email]</td>";
                echo "<td>$monan[Job]</td>";
                echo '<td><a href="./edit.php"ID=<?=$row[ID?]>Edit</a></td>';
                echo '<td><a href="./delete.php"ID=<?=$row[ID?]>Delete</a></td>';
            }}

        ?>
    </div>
    <div id = "phantrang">
    <?php
    for($t = 1; $t<=$sotrang; $t++){
        echo "<a href = 'CURD.php?trang=$t'> Trang $t </a>";
    }
    ?>
    </div>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>




