<!DOCTYPE html>
<html>
<body>

<?php
$diemgiuaki = 9;
$diemcuoiki = 8;

$diemtrungbinh = $diemgiuaki * 0.3 + $diemcuoiki*0.7;

if($diemtrungbinh >= 9){
    echo "Xuất sắc";
}elseif($diemtrungbinh>=7 && $diemtrungbinh<9){
    echo "Giỏi";
}elseif($diemtrungbinh>=5 && $diemtrungbinh<7){
    echo "Khá";
}else{
    echo "Yếu";
}

echo "<br>";
echo "Today is " . date("Y") . "<br>";


if(date("Y")%2 === 0){
    echo "Năm chẵn";
}else{
    echo  "Năm lẻ";
}
echo "<br>";

$a= 1;
$b = "1";

if($a===$b){
    echo "Biến a = b";
}

?>

</body>
</html>