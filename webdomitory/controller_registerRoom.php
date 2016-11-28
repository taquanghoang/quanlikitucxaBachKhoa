<?php 
    //Khai báo sử dụng session
    session_start();
	//Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

    if (isset($_POST['submit'])) 
{
    //Kết nối tới database
    include('DatabaseConnection.php');
    //Lấy dữ liệu vào
    $maSV = $_POST['maSV'];
    $password = $_POST['password'];
    $hotenSV = $_POST['hotenSV'];
    $email = $_POST['email'];
    $sex = $_POST['sex'];
    if($sex =="male"){
    	$gt = 1;
    }else{
    	$gt = 0;
    }
    $dateOfBirth = $_POST['dateOfBirth'];
    $d = getdate(strtotime($dateOfBirth));
    $date = $d['year'].'-'.$d['mon'].'-'.$d['mday'];

    $quequan = $_POST['quequan'];
    $lopHP = $_POST['lopHP'];
    $sdt = $_POST['sdt'];
    $tennhanthan = $_POST['tennhanthan'];
    $sdtLL = $_POST['sdtLL'];
    if(isset($_POST['listNha'])){
    	$tennha = $_POST['listNha'];	
    }
    if(isset($_POST['listPhong'])){
    	$tenphong = $_POST['listPhong'];	
    }

    //kiem tra email hop le
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$", $email)){
    	$msgEmail = "Email không hợp lệ";
    	include_once "registation-room.php";
        exit;
    }
    //kiểm tra mã số sinh viên
    if (mysqli_num_rows(mysqli_query($link,"SELECT maSV FROM sinhvien WHERE maSV='$maSV'"))> 0){
        $msgMaSV = "Mã số sinh viên này đã được đăng ký.";
        include_once "registation-room.php";
        exit;
    }
    //tìm mã khu vực
    $query = mysqli_query($link,"SELECT maKhuVuc FROM khuvuc WHERE tenKhuVuc='$tennha'");
    $row = mysqli_fetch_array($link,$query);
    $maKV = $row['maKhuVuc'];
    //tìm mã phòng
    $query1 = mysqli_query($link,"SELECT maPhong FROM phong WHERE tenPhong='$tenphong' and maKhuVuc='$maKV'");
    $row1 = mysqli_fetch_array($link,$query1);
    $maPhong = $row1['maPhong'];
    //thêm dữ liệu vào bảng user
    $sql1 = "INSERT INTO user(username,password) VALUE ('{$maSV}','{$password}')";
    $rsUser = mysqli_query($link,"INSERT INTO user(username,password) VALUE ('{$maSV}','{$password}')"); 
    //thêm dữ liệu vào bảng Sinh viên
    $sql2 = "INSERT INTO sinhvien(maSV,maPhong,tenSV,email,ngaySinh,queQuan,gioiTinh,lop,tenNhanThan,soDienThoai,soDienThoaiNhanThan) VALUES ('{$maSV}','{$maPhong}','{$hotenSV}','{$email}','{$dateOfBirth}','{$quequan}','{$gt}','{$lopHP}','{$tennhanthan}','{$sdt}','{$sdtLL}')";
    $rsSinhvien = mysqli_query($link,"INSERT INTO sinhvien(maSV,maPhong,tenSV,email,ngaySinh,queQuan,gioiTinh,lop,tenNhanThan,soDienThoai,soDienThoaiNhanThan) VALUES ('{$maSV}','{$maPhong}','{$hotenSV}','{$email}','{$date}','{$quequan}','{$gt}','{$lopHP}','{$tennhanthan}','{$sdt}','{$sdtLL}')");
    if($rsUser && $rsSinhvien){
    	$URL = "index.php";
        header ("Location: $URL");
    }else{
    	echo "Lỗi cập nhập cơ sở dữ liệu";
    }
}
?>