<?php CheckNotLogin(); ?>
<form action="" method="POST">
<input type="text" name="Username" id="Username" placeholder="Username" />
<input type="password" name="Password" id="Password" />
<input type="submit" name="btnLogin" value="Login" />

<?php if(isset($mangLoi) && count($mangLoi)>0 ){ ?>
    <h3><?php echo $mangLoi[0] ?></h3>
<?php } ?>


</form>