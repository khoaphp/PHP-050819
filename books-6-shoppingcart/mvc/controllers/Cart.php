<?php
class Cart extends Controller{

    public $SanPhamModel;

    public function __construct(){
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
        array_push($arrSP, $sp);
        $_SESSION["CART"] = $arrSP;

        // 3. Return GioHang
        echo json_encode($_SESSION["CART"]);
    }

}

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