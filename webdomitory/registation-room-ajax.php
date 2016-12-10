<?php
	include('DatabaseConnection.php'); 	
	$makv = $_GET['makv'];
	$query1 = mysqli_query($link,"SELECT TenPhong,MaPhong FROM phong where MaKV='{$makv}'");
	while($row1 = mysqli_fetch_array($query1)){
		$maphong = $row1['MaPhong'];
		$query2 = mysqli_query($link,"SELECT SoLuongNgO FROM phong where MaPhong='{$maphong}'");
		while($row2 = mysqli_fetch_array($query2)){
			if($row2['SoLuongNgO']<6){
				echo "<option value='{$row1['TenPhong']}'>{$row1['TenPhong']}</option>";	
			}
		}		
	}
	?>	