<h2>Register</h2>

<form action="./Register/KhachHangDangKy" method="POST">
  
  <div class="form-group">
    <label >Username</label>
    <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
    <div id="messageUn"></div>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="form-group">
    <label >Email</label>
    <input type="text" name="email" class="form-control" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label >Họ tện</label>
    <input type="text" name="hoten" class="form-control" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label >Địa chỉ</label>
    <input type="text" name="diachi" class="form-control" placeholder="Enter address">
  </div>

  <button type="submit" name="btnRegister" class="btn btn-primary">Register</button>
</form>

<?php if( isset($data["result"]) ) { ?>
    <h3><?php
    if($data["result"] == "true"){
        echo "Đăng kí thành công";
    }else{
        echo "Đăng kí thất bại";
    }
    ?></h3>
<?php } ?>