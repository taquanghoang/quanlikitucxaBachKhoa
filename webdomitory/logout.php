<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); 
    $URL = "index.php";
    	header ("Location: $URL");
    // xóa session login
}
?>