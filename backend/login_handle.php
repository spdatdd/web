<?php
// lấy giá trị từ from
$name = $password= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["fname"]);
  $password = test_input($_POST["fpwd"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//nối kết database
$sv_name = "localhost";
$user_name = "root";
$passwd = "";
$database = "user";
$conn = new mysqli($sv_name,$user_name,$passwd,$database);

//kiểm tra nối kết 
if($conn->connect_error){
  die("Nối kết không thành công <br>".$conn->connect_error);
}
else {
  $sql = "SELECT taikhoan FROM taikhoan WHERE taikhoan='$name'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // tới giao diện trang chủ
  } else {
    // tài khoản không tồn tại
    header('location: ../register.php');
  }
}
$conn->close();
?>


