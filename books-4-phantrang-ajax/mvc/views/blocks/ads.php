
<div class="card">
  <div class="card-header">
    Quảng cáo
  </div>

  <div class="card-body">
    
    <?php
    $mangAds = json_decode($data["ads"]);
    foreach($mangAds as $ads){
    ?>
    
    <a href="<?= $ads->link ?>">
      <img target="_blank" src="./public/images/ads/<?= $ads->file ?>" width="100%" class="ads" />
    </a>

    <?php
    }
    ?>
    

    

  </div>

</div>