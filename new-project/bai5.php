<?php

// Lớp Cha
class DongVat
{
    // Động Vật Ăn
    public function An()
    {
        echo 'Động Vật Đang Ăn<br>' ;
        echo 'Động Vật Đang Ăn Chơi<br>' ;
    }
    }
    
    // Lớp Con
    class ConHeo extends DongVat
    {
    public function An()
    {
    parent::An();
    echo 'Con Heo Đang Ăn Cám';
    }
    }
    
    // Khai Báo Lớp on
    $conheo = new ConHeo();
    
    // Gọi Hàm Ăn Trong Lớp ConHeo

$conheo->An();
?>