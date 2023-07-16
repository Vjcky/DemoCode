<?php
class hocsinh{
   var $ho;
   var $ten;
   var $ngaysinh;
   var $diemtb;
   function hoten() { return $this->ho . " " . $this->ten; }
   function tuoi() {
        $ns = $this ->ngaysinh;
        return date("Y") - $ns;
   }
}
class nhanvienuutu extends hocsinh{
    public $thuong;
    function thuong(){
        return $this->thuong;
    }
   }

$hs1 = new hocsinh;
$hs1->ho ="Trần Ngọc ";
$hs1->ten = "Anh";
$hs1->ngaysinh = "2002";
echo "<h4>Tôi tên: ", $hs1->hoten(), "</h4>";
echo "<p>Tuổi: {$hs1->tuoi() } </p>";

$hs2 = new nhanvienuutu();
$hs2 ->ho = "Mai Xuân";
$hs2 -> ten = "Sang";
$hs2 -> ngaysinh = "1998";
$hs2 ->thuong = 2000000;
echo "<h4>Bạn trai tôi tên: ", $hs2->hoten(), "</h4>";
echo "<p>Tuổi: {$hs2->tuoi() } </p>";
echo "<p> Thưởng: ".$hs2 ->thuong."VND</p>";
?>