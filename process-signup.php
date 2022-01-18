<?php
if(!isset($_POST['btnSignUp'])){
    header("location:sign up.php");
}
$user = $_POST['txtuser'];
$phone  = $_POST['txtphone'];
$pass1  = $_POST['txtPass1'];
$pass2 = $_POST['txtPass2'];

// Bước 01: Kết nối Database Server
$conn = mysqli_connect('localhost','root','','btl');
if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
// Bước 02: Thực hiện truy vấn
$sql01 = "SELECT * FROM nguoidung WHERE phone = '$phone' or tendangnhap='$user'";
// Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
// Nghiêm trọng: lỗi SQL Injection

$result01 = mysqli_query($conn,$sql01);
if(mysqli_num_rows($result01) > 0){
    // CẤP THẺ LÀM VIỆC
    $error = "Tên đăng nhập hoặc mật khẩu đã tồn tại";
    header("location: sign up.php?error=$error"); 
}else{
   $sql02="INSERT INTO nguoidung(Sdt,TenDangNhap,MatKhau) VALUES('$phone','$user','$pass1')";
   $result02 = mysqli_query($conn,$sql02);
   if($result02 == true){
       header("location:login.php");
   }else{
       $error=" Can not insert record.Please check";
       header("location: sign up.php?error=$error");
   }

}

// Bước 03: Đóng kết nối
mysqli_close($conn);
?>