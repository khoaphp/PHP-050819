<?php
class SanPhamModel extends DB{

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
    
}
?>