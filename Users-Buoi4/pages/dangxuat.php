<?php 
CheckLogin(); 

if( isset($_SESSION["id"]) ){
    session_destroy();
    //unset( $_SESSION["id"] );
    header("location:./");
}

?>
