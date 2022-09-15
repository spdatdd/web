<!DOCTYPE html>
<html lang="vi-VN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
  <link rel="stylesheet" href="fontend/css/style.css">
</head>
<body>

<div class="form">

  <div class="form-header">
    <span><img src="backend/img/logo.png" 
      alt="logo" height="40" width="40">
    </span> 
    <a href="#">Webgiaitri</a>
  </div>

  <div class="form-body">
    <form name="myForm" action="backend/register_handle.php"
    onsubmit="" method="post">
      <div class="row">
        <div class="col-25">
          <label for="fname">Tài khoản:</label>
        </div>
        <div class="col-75">
          <input type="text" name="fname" placeholder=
          "nhập vào tên tài khoản..." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="fpwd">Mật khẩu:</label>
        </div>
        <div class="col-75">
          <input type="password" name="fpwd" placeholder=
          "nhập vào mật khẩu của bạn..." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="frpwd">Nhập lại mật khẩu:</label>
        </div>
        <div class="col-75">
          <input type="password" name="frpwd" placeholder=
          "nhập lại mật khẩu lần nữa..." required>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Đăng ký">
      </div>
    </form>
  </div>
</div>
</body>
</html>