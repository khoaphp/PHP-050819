<?php
class CategoryModel extends DB{

    public function ListAll(){
        $qr = "SELECT * FROM category";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }

}
?>