<?php

$db = new DB;

for($i = 1;  $i<=1000 ; $i++){
    $idLoaiSach =  rand(1,4) ; // random 1,2,3,4
    $SoLanXem = rand(0, 100); // random
    $SachMoi = rand(0,1); // random
    $NoiBat = rand(0,1); // random
    $qr = "
        INSERT INTO sanpham VALUES(
            null, 
            '$idLoaiSach',
            '[$i] Lập trình PHP cơ bản',
            'lap-trinh-php-co-ban',
            'One of the first books on the market to cover Flutter – get a headstart on the knowledge you need',
            '156.jpg',
            '235000' ,
            '$SoLanXem',
            '$SachMoi',
            '$NoiBat',
            '0',
            '1'
        )
    ";
    mysqli_query($db->con, $qr);
}

class DB{

    public $con;
    protected $server = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "bookshop";

    public function __construct(){

        $this->con = mysqli_connect(
            $this->server,
            $this->username,
            $this->password
        );

        mysqli_select_db(
            $this->con,
            $this->dbname
        );

        mysqli_query(
            $this->con,
            "SET NAMES 'utf8'"
        );
    }


}
?>