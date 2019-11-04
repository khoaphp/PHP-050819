<?php

class SanPham extends Controller{
    
    public function SayHi(){
        
    }

    public function SPTheoLoai(){
        $this->view("master1", [
            "page"=>"sptheoloai"
        ]);
    }

    public function ChiTietSP(){
        $this->view("master1", [
            "page"=>"chitiet"
        ]);
    }

}


?>