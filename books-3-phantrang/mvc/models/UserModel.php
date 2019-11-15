<?php
class UserModel extends DB{

    public function InsertNewUser($username, $password, $email, $hoten, $diachi){
        $qr = "INSERT INTO users VALUES(null, '$username', '$password', '$email', '$hoten', '$diachi')";
        
        $result = false;
        if( mysqli_query($this->con, $qr) ){
            $result = true;
        }

        return json_encode( $result );
    }

    public function checkUsername($un){
        $qr = "SELECT id FROM users
        WHERE username='$un'";
        $rows = mysqli_query($this->con, $qr);
        $kq = false;
        if( mysqli_num_rows($rows)>0 ){
            $kq = true;
        }
        return json_encode($kq);
    }

}
?>