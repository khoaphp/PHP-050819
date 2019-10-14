<?php
if( isset($_POST["btnLogin"]) ){
    $mangLoi = array();
    $un = $_POST["Username"];
    $pa = $_POST["Password"];
    $pa = md5($pa);
    $qr = " SELECT * FROM users
            WHERE username='$un'
            AND password='$pa'
            AND active=1
    ";
    $rows = mysqli_query($con, $qr);
    if(mysqli_num_rows($rows)== 1){
        $u = mysqli_fetch_array($rows);
        
        $_SESSION["id"] = $u["id"];
        $_SESSION["username"] = $u["username"];
        $_SESSION["hoten"] = $u["hoten"];
        $_SESSION["email"] = $u["email"];
        $_SESSION["phone"] = $u["phone"];

        header("location:./");

    }else{
        array_push($mangLoi, "Login sai");
    }


}
?>