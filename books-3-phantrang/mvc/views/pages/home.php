<div class="card">
  <div class="card-header">
    Sách mới nhất
  </div>
  <div class="card-body">

    <?php
    $mangMoiNhat = json_decode($data["moinhat"]);
    foreach($mangMoiNhat as $book){
    ?>
    <a href="./SanPham/ChiTietSP/<?= $book->id ?>">
        <img src="./public/upload/<?= $book->FileHinh ?>" alt="" class="img-thumbnail sach">
    </a>
    <?php } ?>

    

  </div>
</div>

<div class="card" id="sachmoinhat">
  <div class="card-header">
    Sách hay nhất
  </div>
  <div class="card-body">
    
  <?php
    $mangMoiNhat = json_decode($data["haynhat"]);
    foreach($mangMoiNhat as $book){
    ?>
    <a href="./SanPham/ChiTietSP/<?= $book->id ?>">
        <img src="./public/upload/<?= $book->FileHinh ?>" alt="" class="img-thumbnail sach">
    </a>
    <?php } ?>

  </div>
</div>