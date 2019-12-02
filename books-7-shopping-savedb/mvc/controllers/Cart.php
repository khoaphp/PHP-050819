<?php

class Cart extends Controller{

    public $SanPhamModel;
    public $AdsModel;
    public $CategoryModel;

    public function __construct(){
        $this->CategoryModel = $this->model("CategoryModel");
        $this->AdsModel = $this->model("AdsModel");
        $this->SanPhamModel = $this->model("SanPhamModel");
    }


    public function DatHang($idSP){

        // 1. Lấy chi tiết $idSP: Tên, Hình, Giá
        $json =  $this->SanPhamModel->ChiTietSP($idSP);
        $item = json_decode($json);
        
        // 2. Save giỏ hàng: Số lượng 01, Session
        //         Ten, Hinh, DonGia, SoLuong
        $sp = new ItemCart($idSP, $item->TieuDe, $item->FileHinh, $item->Gia, 1 );
                
        // Tạo giỏ hàng mới / đan tồn tại
        if( !isset($_SESSION["CART"]) ){
            $arrSP = array();
        }else{
            $arrSP = $_SESSION["CART"];
        }

        // Kiểm tra $idSP đã tồn tại trong Session chưa?
        // Nếu đã tồn tại: Không push, mà update soluong + 1 
        // Nếu ko tồn tại: array_push

        $search = false;
        foreach($arrSP as $motSp){
            if($motSp->ID == $idSP){
                $search = true;
            }
        }

        if($search == false){
            array_push($arrSP, $sp);
        }
        
        $_SESSION["CART"] = $arrSP;

        // 3. Return GioHang
        echo json_encode($_SESSION["CART"]);
    }

    public function Show(){

        if( !isset($_SESSION["CART"]) ){
            $giohang = array();
        }else{
            $giohang = $_SESSION["CART"];
        }
        
        $this->view("master1", [
            "page" => "showCart",
            "categories" => $this->CategoryModel->ListAll(),
            "ads" => $this->AdsModel->ListAll(),
            "giohang" => $giohang
        ]);

    }

    public function UpdateQuantity($idSP, $direction){ // 1 tăng, 0 giảm
        // Cart/Increase/768
        $arrSP = $_SESSION["CART"];
        $soluong = 0;
        $tt = 0;
        $tong = 0;
        foreach($arrSP as $motSP){
            if($motSP->ID == $idSP){
                if($direction=="1"){
                    $motSP->SOLUONG += 1;
                }

                if($direction=="0"){
                    $motSP->SOLUONG -= 1;
                }

                if($motSP->SOLUONG<0){
                    $motSP->SOLUONG = 0;
                }
                
                $soluong = $motSP->SOLUONG;
                $tt = $motSP->SOLUONG * $motSP->DONGIA;
            }
            $tong = $tong + $motSP->SOLUONG * $motSP->DONGIA;
        }

        $_SESSION["CART"] = $arrSP;

        // return: Soluong, thanhtien, tongtien
        $result = new AjaxIncrease(
            number_format($soluong),
            number_format($tt),
            number_format($tong)
        );
        echo json_encode($result);
    }

    public function DeleteItemCart($idSP){
        $arrSP = $_SESSION["CART"];
        $dem = 0;
        foreach($arrSP as $sp){
            if($sp->ID == $idSP){
                unset($_SESSION["CART"][$dem]);
            }
            $dem++;
        }
        echo  `{"idSP":"`+$idSP+`"}`;
    }

    public function SaveCartInformation(){
        if( $_POST["btnSaveCart"] ){
            if( isset($_SESSION["CART"]) ){            

                //Save donhang
                $txtHoTen = $_POST["txtHoTen"];
                $txtEmail = $_POST["txtEmail"];
                $txtDienthoai = $_POST["txtDienthoai"];
                
                $this->SanPhamModel->LuuDonHang($txtHoTen, $txtEmail, $txtDienthoai, $_SESSION["CART"]);
                
                //header("location:./");
                //Save sanpham
    
            }else{
                header("location:./");
            }
        }else{
            header("location:./");
        }
    }

}

class AjaxIncrease{
    public $SOLUONG;
    public $THANHTIEN;
    public $TONGTIEN;
    public function __construct($sl, $tt, $tong){
        $this->SOLUONG = $sl;
        $this->THANHTIEN = $tt;
        $this->TONGTIEN = $tong;
    }
}


?>