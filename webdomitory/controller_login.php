<?php 
    //Khai báo sử dụng session
    session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['login'])) 
{
    //Kết nối tới database
    include('DatabaseConnection.php');
     
    //Lấy dữ liệu nhập vào
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    // mã hóa pasword
    //$password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($link,"SELECT username, password FROM user WHERE username='$username'");
    if (mysqli_num_rows($query) == 0) {
        $msg = "Tai khoan nay khong ton tai";
        include_once "login.php";      
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        $msg1 = "Mat khau nay khong dung.";
        include_once "login.php";
        exit;
    }
    if($username == "admin"){
        
        $_SESSION['username'] = $username;    
        $URL = "index_admin.php";
        header ("Location: $URL");
        die();    
    }else{
        $_SESSION['username'] = $username;  
        $URL = "index_user.php";
        header ("Location: $URL");
        die();
    } 
    //Lưu tên đăng nhập    
}
?>
