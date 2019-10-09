<?php
if( isset($_POST["btnDangKy"]) ){

    $mangLoi = array();

    $random = RandomChuoi(10);
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);
    $email = $_POST["email"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    // Kiểm tra trùng email
    $checkEmail = true;
    $qrEmail = "SELECT id FROM users WHERE email='$email' ";
    $rows = mysqli_query($con, $qrEmail);
    if( mysqli_num_rows($rows)==0 ){
        $checkEmail = true;
    }else{
        $checkEmail = false;
        array_push($mangLoi, "Đã tồn tại Email này rồi!");
    }

    // Kiểm tra trùng username
    $checkUn = true;
    $qrUn = "SELECT id FROM users WHERE username='$username' ";
    $rows = mysqli_query($con, $qrUn);
    if( mysqli_num_rows($rows)==0 ){
        $checkUn = true;
    }else{
        $checkUn = false;
        array_push($mangLoi, "Đã tồn tại Username này rồi!");
    }

    if($checkEmail==true && $checkUn==true){
        $qr = "INSERT INTO users VALUES(
            null,
            '$username',
            '$password',
            '$name',
            '$email',
            '$phone',
            '0',
            '$random'
        )";
    
        if( mysqli_query($con, $qr) ){
            //echo "Đăng ký thành công";
        }else{
            array_push($mangLoi, "Đăng ký thất bại");
        }
    }  

}
?>