<?php
class AdsModel extends DB{

    public function ListAll(){
        $qr = "SELECT * FROM ads";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }

}
?>