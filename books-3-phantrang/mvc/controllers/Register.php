<?php

class Register extends Controller{

    public $CategoryModel;
    public $AdsModel;
    public $UserModel;

    public function __construct(){
        
        // Model
        $this->CategoryModel = $this->model("CategoryModel");
        $this->AdsModel = $this->model("AdsModel");
        $this->UserModel = $this->model("UserModel");
    }

    public function SayHi(){
        
        $this->view("master1", [
            "page"=> "register",
            "categories" => $this->CategoryModel->ListAll(),
            "ads" => $this->AdsModel->ListAll()
        ]);
        
    }

    public function KhachHangDangKy(){
        
        // 1. get data khách hàng nhập
        if( isset($_POST["btnRegister"]) ){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $email = $_POST["email"];
            $hoten = $_POST["hoten"];
            $diachi = $_POST["diachi"];
           
            // 2. Insert database bảng users
            $kq = $this->UserModel->InsertNewUser($username, $password, $email, $hoten, $diachi);
            
            // 3. SHow chữ "OK/Fail"
            $this->view("master1", [
                "page"=> "register",
                "categories" => $this->CategoryModel->ListAll(),
                "ads" => $this->AdsModel->ListAll(),
                "result" => $kq
            ]);

        }

        

    }

}

?>