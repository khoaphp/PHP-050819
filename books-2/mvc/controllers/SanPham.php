<?php

class SanPham extends Controller{
    
    public $CategoryModel;
    public $AdsModel;

    public function __construct(){
        // Model
        $this->CategoryModel = $this->model("CategoryModel");
        $this->AdsModel = $this->model("AdsModel");
    }

    public function SayHi(){
        
    }

    public function SPTheoLoai(){
        $this->view("master1", [
            "page"=>"sptheoloai",
            "categories" => $this->CategoryModel->ListAll(),
            "ads" => $this->AdsModel->ListAll()
        ]);
    }

    public function ChiTietSP(){
        $this->view("master1", [
            "page"=>"chitiet",
            "categories" => $this->CategoryModel->ListAll(),
            "ads" => $this->AdsModel->ListAll()
        ]);
    }

}


?>