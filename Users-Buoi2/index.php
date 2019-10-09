<?php
session_start();
require_once "./lib/dbCon.php";
require_once "./lib/lib.php";
require_once "./lib/xulyDangKy.php";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/layout.css" />
    <script src="public/js/jquery.js"></script>
</head>
<body>
    <div id="wrapper">
        <div id="header"><?php require_once "blocks/header.php" ?></div>
        <div id="leftsidebar"><?php require_once "blocks/leftsidebar.php" ?></div>
        <div id="content">
            <?php
            if( isset($_GET["p"]) ){
                $p = $_GET["p"];
                switch($p){
                    case "dangky"       : require_once "pages/dangky.php";      break;
                    case "dangnhap"     : require_once "pages/dangnhap.php";    break;
                    case "kichhoat"     : require_once "pages/kichhoat.php";    break;
                    case "quenmatkhau"  : require_once "pages/quenmatkhau.php"; break;
                    default             : require_once "pages/trangchu.php";
                }
            }else{
                require_once "pages/trangchu.php";
            }
            ?>
        </div>
    </div>
</body>
</html>