<?php
class SanPhamModel extends DB{

    public $sosp1trang = 20;

    public function MoiNhat(){
        $qr = "
            SELECT * FROM sanpham
            WHERE SachMoi = 1
            AND AnHien = 1
            ORDER BY ThuTu ASC
            LIMIT 0, 9
        ";

        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);

    }

    public function HayNhat(){
        $qr = "
            SELECT * FROM sanpham
            WHERE NoiBat = 1
            AND AnHien = 1
            ORDER BY ThuTu ASC
            LIMIT 0, 9
        ";

        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);

    }

    public function SanPhamTheoLoai($idLoai, $trangdangxem){
        $from = ($trangdangxem-1)*$this->sosp1trang;

        $qr = "
            SELECT * FROM sanpham
            WHERE idLoaiSach = $idLoai
            AND AnHien = 1
            ORDER BY id ASC
            LIMIT $from, $this->sosp1trang
        ";

        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }

    public function SoTrangSanPhamTheoLoai($idLoai){
        $qr = " SELECT id FROM sanpham 
                WHERE idLoaiSach = $idLoai
                AND AnHien = 1
        ";
        $rows = mysqli_query($this->con, $qr);
        $tongsp = mysqli_num_rows($rows);
        return ceil($tongsp/$this->sosp1trang);
    }
    
}
?>