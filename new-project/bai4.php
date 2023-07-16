<?php
    abstract class HS {
        public $name;
        public $tuoi;

        function __construct($hs_name, $hs_tuoi){
            $this->name = $hs_name;
            $this->tuoi = $hs_tuoi;
        }

        function info(){
            echo "Hoc sinh $this->name có tuổi là $this->tuoi";
            echo "<br>";
        }

        abstract function thongTinCuLyChay();
    }

    class HS_2 extends HS{
        function thongTinCuLyChay() {
            echo "HS_2 chay cu ly 500m";
        }
    }

    class HS_1 extends HS{
        function thongTinCuLyChay() {
            echo "HS_2 chay cu ly 100m";
        }
    }


    // $hsA = new HS('Ngoc Anh', "12");
    // $hsA->info();


    $hsB = new HS_2('Viet Hung', '20');
    $hsB->info();
?>