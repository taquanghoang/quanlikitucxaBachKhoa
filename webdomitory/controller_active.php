<?php 
	session_start();
	include('DatabaseConnection.php');
	$active = $_GET['active'];
	$masv = $_SESSION['masv'];
	$query = mysqli_query($link,"SELECT MaSV,TenSV,GioiTinh,Email,SDT,MaPhong,Lop,NgayDatCho,NgayBatDau,NgayKetThuc,active FROM quanlydatcho WHERE MaSV='$masv' and active='$active'");
	
	if (mysqli_num_rows($query) != 0) {
		while($row = mysqli_fetch_array($query)){
			$sql1 = "INSERT INTO sinhvien(MaSV,TenSV,Email,GioiTinh,Lop,SDT,MaPhong) VALUES('{$masv}','{$row['TenSV']}','{$row['Email']}','{$row['GioiTinh']}','{$row['Lop']}','{$row['SDT']}','{$row['MaPhong']}')";
			$sql2 = "INSERT INTO hopdong(NgayBatDau,NgayKetThuc,NgayTao,ChiPhi6Thang,MaSV) VALUES('{$row['NgayBatDau']}','{$row['NgayKetThuc']}','{$row['NgayDatCho']}',500000,'{$masv}')";
			$rssinhvien = mysqli_query($link,$sql1);
			$rshopdong = mysqli_query($link,$sql2);
			if($rssinhvien && $rshopdong){
				$URL = "login.php";
        		header ("Location: $URL");
        		die();	
			}else{
				echo "loi cap nhat du lieu";
			}
		}
       
    }else{
    	echo "Active That Bai!";
    }
?>