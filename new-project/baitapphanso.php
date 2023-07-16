<?php
class nhanvien {
    public $ten;
    public $diachi;
    public $Email;
    public $Sodienthoai;
    public $Bangcap; 
function __contruct($tenA,$diachiA,$EmailA,$SodienthoaiA,$BangcapA){
    return $this->ten = $tenA;
    return $this->diachi = $diachiA;
    return $this->Email = $EmailA;
    return $this->Sodienthoai = $SodienthoaiA;
    return $this->Bangcap = $BangcapA;
}
}
$nhanvien1 = new nhanvien;
$nhanvien1->ten = "Trần Ngọc Anh";
$nhanvien1->diachi = "Hà Nội";
$nhanvien1->Email = "20110001";
echo "<h4>Họ tên:  ".$nhanvien1->ten. '</h4>';
echo "<p> Địa chỉ:.$nhanvien1->diachi.</p>"; 
?> 
