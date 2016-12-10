<?php 
    //Khai báo sử dụng session
    session_start();
     function sendmail($mailfrom,$h){
            header('Content-Type: text/html; charset=UTF-8');
            $to = "taquanghoang95@gmail.com";
            $subject = "Active Dormitory Management";
            
            $url = "http://localhost:83/quanlikitucxaBachKhoa/webdomitory/controller_active.php?active=".$h;
            $message = "<b>Hi You!.</b>";
            $message .= "<h1><a href='{$url}'>Please click active.</a></h1>";
            
            $header = "From:taquanghoang95@gmail.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
         
            $retval = mail($to,$subject,$message,$header);
         
            if( $retval == true )
            {
             echo "Gửi email thành công ...";
             }
            else
            {
               echo "Không thể gửi email ...";
            }
            }
    function GeraHash($qtd){ 
            $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789'; 
            $QuantidadeCaracteres = strlen($Caracteres); 
            $QuantidadeCaracteres--; 
            $Hash=NULL; 
                    for($x=1;$x<=$qtd;$x++){ 
                        $Posicao = rand(0,$QuantidadeCaracteres); 
                        $Hash .= substr($Caracteres,$Posicao,1); 
                    } 
                return $Hash; 
            }        
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
    $gioitinh = $_POST['sex'];
   // echo "$gioitinh";

    $email = $_POST['email'];
    
    $dates = getdate(date("U"));
    $datestart = $dates['year'].'-'.$dates['mon'].'-'.$dates['mday'];
   // echo "$datestart";

    $datein = $_POST['datein'];
    $d = getdate(strtotime($datein));
    $date = $d['year'].'-'.$d['mon'].'-'.$d['mday'];
   // echo "$date";
    
    $lopHP = $_POST['lopHP'];
    $sdt = $_POST['sdt'];
    if(isset($_POST['listNha'])){
    	$tenkv = $_POST['listNha'];	
    }
    //echo "$tenkv";
    if(isset($_POST['listPhong'])){
    	$tenphong = $_POST['listPhong'];	
    }
   // echo "$tenphong";
    //kiem tra email hop le
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$", $email)){
    	$msgEmail = "Email không hợp lệ";
    	include_once "registation-room.php";
        exit;
    }
    //kiểm tra mã số sinh viên
    if (mysqli_num_rows(mysqli_query($link,"SELECT TaiKhoan FROM taikhoan WHERE TaiKhoan='$maSV'"))>0 ||
        mysqli_num_rows(mysqli_query($link,"SELECT sinhvien FROM MaSV WHERE MaSV='$maSV'"))> 0){
        $msgMaSV = "Mã số sinh viên này đã được đăng ký.";
        include_once "registation-room.php";
        exit;
    }
    // //tìm mã khu vực
    // $query = mysqli_query($link,"SELECT MaKV FROM khuvuc WHERE TenKV='$tennha'");
    // $row = mysqli_fetch_array($query);
    // $maKV = $row['MaKV'];
    //tìm mã phòng
    $query1 = mysqli_query($link,"SELECT MaPhong FROM phong WHERE TenPhong='$tenphong' and MaKV='$tenkv'");
    $row1 = mysqli_fetch_array($query1);
    $maPhong = $row1['MaPhong'];
   // echo "$maPhong";
    $hash = GeraHash(10);
    $rsDatcho = mysqli_query($link,"INSERT INTO quanlydatcho(MaSV,MaPhong,TenSV,GioiTinh,Email,SDT,Lop,NgayDatCho,NgayBatDau,NgayKetThuc,KichHoat,active) VALUES ('{$maSV}','{$maPhong}','{$hotenSV}','{$gioitinh}','{$email}','{$sdt}','{$lopHP}','{$datestart}','{$date}',DATE_ADD('{$date}', INTERVAL 6 month),'chua kich hoat','{$hash}')");
    $rstaikhoan = mysqli_query($link,"INSERT INTO taikhoan(TaiKhoan,MatKhau,MaND) VALUES('{$maSV}','{$password}',3)"); 
    if($rsDatcho && $rstaikhoan){
        $_SESSION['masv'] = $maSV;
        sendmail($email,$hash);
    	$URL = "registation-room-active.php";
        header ("Location: $URL");
    }else{
    	echo "Lỗi cập nhập cơ sở dữ liệu";
    }

   
}
?>