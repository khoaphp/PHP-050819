<?php

class Home extends Controller{

    public $CategoryModel;
    public $AdsModel;
    public $SanPhamModel;

    public function __construct(){
        // Model
        $this->CategoryModel = $this->model("CategoryModel");
        $this->AdsModel = $this->model("AdsModel");
        $this->SanPhamModel = $this->model("SanPhamModel");
    }
    
    public function SayHi(){

        $this->view("master1", [
            "page" => "home",
            "categories" => $this->CategoryModel->ListAll(),
            "ads" => $this->AdsModel->ListAll(),
            "moinhat" => $this->SanPhamModel->MoiNhat(),
            "haynhat" => $this->SanPhamModel->HayNhat()
        ]);
        
    }
    
}


?>