<div id="ajaxContent">
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
        <?= $book->id ?>
          <!--<img src="./public/upload/<?= $book->FileHinh ?>" alt="" class="img-thumbnail sach"> -->
      </a>
      <?php } ?>
    </div>
  </div>
</div>
  
<?php if(isset($data["tongsotrang"])){ ?>

<hr />

<div id="phantrang">
   
    <?php if( ($data["trangdangxem"] - 2) > 1 ){ ?>

      <?php for($trang=$data["trangdangxem"] - 2; $trang<=$data["trangdangxem"] + 2; $trang++){ ?>  
      <a href="./SanPham/SPTheoLoai/<?= $data["idLoai"] ?>/<?= $trang ?>">
          <?= $trang ?>
      </a> - 
      <?php } ?>

    <?php }else{ ?>

      <?php for($trang=1; $trang<=5; $trang++){ ?>  
      <a href="./SanPham/SPTheoLoai/<?= $data["idLoai"] ?>/<?= $trang ?>">
          <?= $trang ?>
      </a> - 
      <?php } ?>

    <?php } ?>

    

</div>

<hr />

<div id="phantrang">
    
    <?php for($trang=1; $trang<=$data["tongsotrang"]; $trang++){ ?>  
    <a href="./SanPham/SPTheoLoai/<?= $data["idLoai"] ?>/<?= $trang ?>">
        <?= $trang ?>
    </a> - 
    <?php } ?>

</div>

<hr />

<div id="phantrang2">
    
    <?php for($trang=1; $trang<=$data["tongsotrang"]; $trang++){ ?>  
    <div class="trangAjax" idloai="<?= $data["idLoai"] ?>" trang="<?= $trang ?>">
        <?= $trang ?>
    </div>
    <?php } ?>

</div>

<?php } ?>