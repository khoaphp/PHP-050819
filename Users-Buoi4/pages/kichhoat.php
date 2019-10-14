<?php
CheckNotLogin();
if( isset($_GET["random"]) ){
    $random = $_GET["random"];
    $qr = "SELECT active FROM users
     WHERE random='$random' ";
    $rows = mysqli_query($con, $qr);
    if( mysqli_num_rows($rows)==1 ){
        $user = mysqli_fetch_array($rows);
        if($user["active"]==1){
            echo "<h2>Trước đây bạn đã kích hoạt rồi.</h2>";
        }else{
            // kich hoat len 1
            $qr2 = "UPDATE users SET active=1 
                    WHERE random='$random' ";
            if(mysqli_query($con, $qr2)){
                echo "<h2>Kích hoạt thành công :D</h2>";
            }       

        }
    }else{
        echo "Phá hả mạy????";
    }

    
}
?>