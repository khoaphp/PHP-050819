<div class="card">
  <div class="card-header">
    Sách mới nhất
  </div>
  <div class="card-body">

    <?php
    $mangMoiNhat = json_decode($data["moinhat"]);
    foreach($mangMoiNhat as $book){
    ?>
    <div>
    <img idSP="<?= $book->id ?>" class="heart" src="./public/images/heart-<?php echo checkCookie($book->id); ?>.png" />
    <button idSP="<?= $book->id ?>" class="addtocart">Add to cart</button>
    <a href="./SanPham/ChiTietSP/<?= $book->id ?>">      
        <img src="./public/upload/<?= $book->FileHinh ?>" alt="" class="img-thumbnail sach">
    </a>
    </div>
    <?php } ?>
  </div>
</div>

<?php
function checkCookie($idSP){
  if(isset($_COOKIE["Wishlist"])){    
    if(strpos($_COOKIE["Wishlist"], strval($idSP) ) >= 0){  // TEST thử bỏ / giữ dấu =
      return "red";
    }else{
      return "black";
    }
  }else{
    return "black";
  }
}
?>

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