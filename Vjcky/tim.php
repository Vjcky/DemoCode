<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Mon Mon</title>
</head>
<body>
    <tablle border = "1" align = "center" cellspacing = "0" wwidth = "850px">
        <tr> 
            <th>Name</th>
            <th>Job</th>
        <tr>
</table>
    <?php
        $servername='localhost';
        $username='root';
        $password='';
        $database="Vjcky";
        
        $conn = mysqli_connect($servername, $username, $password, $database);
        $sql = "SELECT * FROM name";
        $result =  mysqli_query($conn,$sql);
    
        while($row = mysqli_fetch_array( $result)){
          $Name =  $row['Ten'];
          $Job =  $row['Job'];
        }
    ?>
    <tr>
        <td><?php echo $Name?></td>
        <td><?php echo $Job?></td>
    </tr>

</body>
</html>
