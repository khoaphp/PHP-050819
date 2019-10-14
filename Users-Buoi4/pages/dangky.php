<?php CheckNotLogin(); ?>
<h2>ĐĂNG KÝ THÀNH VIÊN</h2>

<form id="frmRegister" action="" method="POST">
<input type="text" name="username" id="username" placeholder="Username" />
<input type="password" name="password" id="password" />
<input type="text" name="email" id="email" placeholder="Email" />
<input type="text" name="name" id="name" placeholder="Name" />
<input type="text" name="phone" id="phone" placeholder="Phone" />
<input type="submit" name="btnDangKy" value="Đăng ký" />

<?php
if( isset($mangLoi) && count($mangLoi) > 0 ){
?>
<div class="error">
    <?php for($i=0; $i<count($mangLoi); $i++){ ?>
        <h3><?php echo $mangLoi[$i] ?></h3>
    <?php } ?>
</div>
<?php } ?>

</form>

<?php
if( isset($mangLoi) && count($mangLoi)== 0 ){
?>
<h3>Đăng ký thành công</h3>
<script>
$(document).ready(function(){
    $("#frmRegister").hide(3000);
});
</script>
<?php } ?>