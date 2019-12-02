<?php
class ItemCart{
    public $ID;
    public $TEN;
    public $HINH;
    public $DONGIA;
    public $SOLUONG;
    public function __construct($id, $ten, $hinh, $dongia, $soluong){
        $this->ID = $id;
        $this->TEN = $ten;
        $this->HINH = $hinh;
        $this->DONGIA = $dongia;
        $this->SOLUONG = $soluong;
    }
} 
?>