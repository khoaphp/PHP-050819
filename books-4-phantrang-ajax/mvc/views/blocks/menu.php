<ul id="loaiSach" class="list-group">

  <?php
  $mangCategory = json_decode($data["categories"]) ;
  foreach($mangCategory as $cate){
  ?>

  <li class="list-group-item">
      <a href="./SanPham/SPTheoLoai/<?php echo $cate->id ?>">  
          <?php echo $cate->name ?>
      </a>
  </li>

  <?php
  }
  ?>
  
  
</ul>