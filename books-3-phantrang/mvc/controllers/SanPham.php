<?php

class SanPham extends Controller{
    
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
        
    }

    public function SPTheoLoai($idLoai=1, $trangdangxem=1){

        $this->view("master1", [
            "page"=>"sptheoloai",
            "categories" => $this->CategoryModel->ListAll(),
            "ads" => $this->AdsModel->ListAll(),
            "sptheoLoai" => $this->SanPhamModel->SanPhamTheoLoai($idLoai, $trangdangxem),
            "tongsotrang" => $this->SanPhamModel->SoTrangSanPhamTheoLoai($idLoai),
            "idLoai" => $idLoai
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