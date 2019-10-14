<?php if(isset($_SESSION["id"])){ ?>
<ul>
    <li>Họ tên: <?php echo $_SESSION["hoten"] ?></li>
    <li>Username: <?php echo $_SESSION["hoten"] ?></li>
    <li>Email: <?php echo $_SESSION["email"] ?></li>
    <li>Phone: <?php echo $_SESSION["phone"] ?> </li>
    <a href="./index.php?p=dangxuat">Log out</a>
</ul>
<?php } ?>