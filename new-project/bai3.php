<?php
    // public : trong class, ở class kế thừa, ngoài đối tượng khởi tạo từ class đó
    // protected : trong class, ở class kế thừa 
    // private : chỉ trong class đó thôi
    class Hocsinh{
        protected $name;
        public $tuoi;
        public $diemCacMon;
        public $diemTrungBinh;

        function __construct($hs_name, $hs_tuoi, $hs_diemCacMon, $hs_diemTrungBinh){
            $this->name = $hs_name;
            $this->tuoi = $hs_tuoi;
            $this->diemCacMon = $hs_diemCacMon;
            $this->tinhDiemTrungBinh();
        }

        function tinhDiemTrungBinh(){
            $total = 0;
            foreach($this->diemCacMon as $diem){
                $total += $diem;
            }
            $this->diemTrungBinh = $total / 3;
        }

        function getTenHocSinh(){
            return $this->name;
        }

        function diemTongCacMon(){
            $total = 0;
            foreach($this->diemCacMon as $diem){
                $total += $diem;
            }
            return $total;
        }
    }

    class HocsinhCap1 extends Hocsinh{
        public $soPhieuBeNgoan;

        function __construct($hs_name, $hs_tuoi, $hs_diemCacMon, $hs_soPhieu){
            $this->name = $hs_name;
            $this->tuoi = $hs_tuoi;
            $this->diemCacMon = $hs_diemCacMon;
            $this->soPhieuBeNgoan = $hs_soPhieu;
            $this->tinhDiemTrungBinh();
        }

        function getName(){
            return $this->name;
        }
    }

    class HocsinhCap2 extends Hocsinh{

        function getName(){
            return $this->name;
        }
    }

    $hocsinhA = new HocSinh('Ngoc Anh', "20", array('10','9','9'));

    $hocsinhA_lop1 = new HocsinhCap1('Phuc', "8", array('6','7','9'), '44');

    $hocsinhA_lop6 = new HocsinhCap2('Viet Hung', "11", array('10','9','9'));

    // echo "<p>Danh sách học sinh</p>";
    // $total_A = $hocsinhA->diemTongCacMon();
    // echo "$hocsinhA->name có tuổi là $hocsinhA->tuoi và có điểm tổng 3 môn là $total_A, điểm trung bình là $hocsinhA->diemTrungBinh";

    // echo $hocsinhA->getTenHocSinh();
    // echo $hocsinhA->tuoi;

    echo $hocsinhA_lop1->getName() .'<br>';
    echo $hocsinhA_lop1->diemTrungBinh .'<br>';
    echo $hocsinhA_lop1->soPhieuBeNgoan .'<br>';

    echo $hocsinhA_lop6->getName() .'<br>';
?>