
<?php if(count($data["giohang"])>0){ ?>

    <?php 
    $tongtien = 0;
    foreach($data["giohang"] as $sp){ 
        $tien = $sp->SOLUONG * $sp->DONGIA;
        $tongtien = $tongtien + $tien;
    ?>

    <div class="mostsp">
        <?= $sp->ID ?> - 
        <button idSP="<?= $sp->ID ?>" class="tangSoLuong">+</button>
        <span class="soluong" idSP="<?= $sp->ID ?>"> <?= $sp->SOLUONG ?> </span>
        <button idSP="<?= $sp->ID ?>" class="giamSoLuong">-</button> 
        <span class="dongia" idSP="<?= $sp->ID ?>"> <?= number_format($tien) ?> </span>
        <button>X</button>
    </div>

    <?php } ?>

    <div id="tongtien"><?= number_format($tongtien) ?></div>

    <form action="./Cart/SaveCartInformation" method="POST">
        <input type="text" name="txtHoTen" placeholder="Ho ten">
        <input type="text" name="txtEmail" placeholder="Email">
        <input type="text" name="txtDienthoai" placeholder="Phone" />
        <input type="submit" name="btnSaveCart" value="Đồng ý mua hàng" />
    </form>

<?php }else{ ?>

    <div>Bạn chưa có sản phẩm nào</div>

<?php } ?>

