
<div class="card">
  <div class="card-header">
    Sách mới nhất
  </div>
  <div class="card-body">

    <?php
    $mangMoiNhat = json_decode($data["sptheoLoai"]);
    foreach($mangMoiNhat as $book){
    ?>
    <a href="./SanPham/ChiTietSP/<?= $book->id ?>">
        <?= $book->id ?> - 
        <!--<img src="./public/upload/<?= $book->FileHinh ?>" alt="" class="img-thumbnail sach">-->
    </a>
    <?php } ?>
  </div>
</div>

<div id="phantrang">
    
    <?php for($trang=1; $trang<=$data["tongsotrang"]; $trang++){ ?>  
    <a href="./SanPham/SPTheoLoai/<?= $data["idLoai"] ?>/<?= $trang ?>">
        <?= $trang ?>
    </a> - 
    <?php } ?>

</div>