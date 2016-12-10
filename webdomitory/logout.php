<?php session_start(); 
 
if (isset($_SESSION['TaiKhoan'])){
    unset($_SESSION['TaiKhoan']); 
    $URL = "index.php";
    	header ("Location: $URL");
    // xóa session login
}
?>