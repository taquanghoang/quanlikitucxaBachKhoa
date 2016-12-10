<?php session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from g-axon.com/mouldifi-3.0/light/editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2016 02:49:20 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>Mouldifi | Editors</title>

<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<!--Summernote-->
<link href="css/plugins/summernote/summernote.css" rel="stylesheet">
<!--Markdown-->
<link href="css/plugins/markdown/bootstrap-markdown.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/mouldifi-forms.css">
<link href="css/style.css" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- Page container -->
<div class="page-container">

  <!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="index.php"><img src="images/logo.png" alt="Mouldifi" title="Mouldifi"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			
			<li class="has-sub"><a href="introduce.php"><i class="icon-layout"></i><span class="title">Ký Túc Xá</span></a>
				<ul class="nav collapse">
					<li><a href="introduce_index.php"><span class="title">Giới Thiệu</span></a></li>
					<li><a href="officials_index.php"><span class="title">Danh Sách Cán Bộ</span></a></li>
					<li><a href="listroom_index.php"><span class="title">Thông Tin Phòng</span></a></li>
				</ul>
			</li>

			<li class="has-sub"><a href="panels.html"><i class="icon-users"></i><span class="title">Người Dùng</span></a>
				<ul class="nav collapse">
					<li><a href="index_user.php"><span class="title">Thông tin cá nhân </span></a></li>
					<li><a href="user_room_information.php"><span class="title">Thông tin phòng</span></a></li>	
					<li><a href="user_thongbao.php"><span class="title">Thông báo</span></a></li>					
					<li><a href="user_reported-missing.php"><span class="title">Báo vắng</span></a></li>					
					<li><a href="user_extend-room.php"><span class="title">Gia Hạn Phòng</span></a></li>
					<li><a href="user_request.php"><span class="title">Yêu Cầu</span></a></li>					
					<li><a href="user_service.php"><span class="title">Dịch Vụ</span></a></li>					
					<li><a href="feedback.php"><span class="title">Góp ý</span></a></li>
					
				</ul>
			</li>
			
			<li class="other-activity.html"><a href="form-basic.html"><i class="icon-doc-text"></i><span class="title">Hoạt Động Khác</span></a>
			</li>
			<li class="seach.html"><a href="form-basic.html"><i class="icon-search"></i><span class="title">Tìm Kiếm</span></a>
			</li>

		</ul>
		<!-- /main navigation -->		
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container">
  
	<!-- Main header -->
		<div class="main-header row">

		  
		  <div class="col-sm-6 col-xs-5 height-header1">
					<a href="index.php">
					<div id="header-logo-img">
                        		<img src="images/logobk.jpg" alt = "HTML5 icon" width="60" >
                        </div>
					<div id="header-logo-infologo">
                            <h3><b>KÝ TÚC XÁ ĐẠI HỌC BÁCH KHOA</b></h3>
                            <p>Dormitory of University of Science and Technology</p>
                        </div>
                        
                        
                    </a>
		  </div>
		  		  <div class="col-sm-6 col-xs-7">
		  
			<!-- User info -->
			<ul class="user-info pull-left">          
			  <li class="profile-info dropdown" style="margin-left: 350px;margin-top: 10px;"> 
			  <?php 
      				 if (isset($_SESSION['TaiKhoan'])){
      				 	echo "<a data-toggle='dropdown' class='dropdown-toggle' href='index_user.php' aria-expanded='false'>
      				 		<img width='44' class='img-circle avatar' alt='' src='images/nu.jpg'>{$_SESSION['TaiKhoan']}
      				 		<span class='caret'></span></a>
      				 		<ul class='dropdown-menu'>
				 			<li><a href='#''><i class='icon-cog'></i>Account settings</a></li>
				  			<li><a href='logout.php'><i class='icon-logout'></i>Logout</a></li>
							</ul>";
      				 }
      				 ?>
				<!-- /user action menu -->
			  </li>
			</ul>
			</div>
			<!-- /user info -->
		</div>
		<!-- /main header -->
	
	<!-- Main content -->
	<div class="main-content">
		
		<!-- Breadcrumb -->
		<ol class="breadcrumb breadcrumb-2"> 
			<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li> 
			<li><a href="form-basic.html">Người dùng</a></li> 
			<li class="active"><strong>Góp ý</strong></li> 
		</ol>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading no-border clearfix" style="background: #58FAF4;"> 
						<h2 class="panel-title"><b> NỘI DUNG GÓP Ý </b></h2>
					</div> 
					<!-- panel body --> 
					<div class="panel-body">
						<div class="col-lg-10">
						<!-- Card Container -->
						<div class="cards-container default-view">
							<div id="summernote">
								 <p>Nội dung góp ý</p>
							</div>
							<div class="row" style="text-align: center;">
								<button class="btn btn-primary" type="button" style="width: 100px; ">Gửi</button>
							</div>	
						</div>
						<!-- /card container -->	
						</div>					
					</div>
					<!--/panel body -->
				</div>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-lg-12">
				<h3 class="title">Nhập nội dung góp ý</h3>
				<div id="summernote">
					 <p>Nội dung góp ý</p>
				</div>
			</div>
		</div> -->
		



			</div>
			<!-- Footer -->
			<footer class="footer-main"> 

			<!-- Footer -->
			<footer class="footer-main"> 
				
				<div class="container">
                    <div id="footer-content-nav">
                        <div id="footer-content-nav-brand" style="float: left;">
                            <h4><a href="#"><b>KÝ TÚC XÁ ĐẠI HỌC BÁCH KHOA</b></a></h4>
                        </div>
                        <div id="footer-content-nav-links" style="float: right;">
                            <a href="#"><span class="glyphicon glyphicon-open" aria-hidden="true"></span></a>
                        </div>
                    </div>
                    <div id="footer-content-links" style="padding-top: 10px">
                        <div class="links-group contact" style="float: left;">
                            <h4>LIÊN HỆ</h4>
                            <p>Ban quản lý KTX - Đại học Bách Khoa.</p>
                            <p>Địa chỉ: 60 Ngô Sĩ Liên, phường Hòa Khánh, quận Liên Chiểu, TP.Đà Nẵng.</p>
                            <p>Tel: 0511.3736.936</p>
                            <p>Email: ktxbk.dn@gmail.com</p>
                        </div>
                        <div class="links-group connectus" style="margin-left: 80px;float: left;">
                            <h4>LIÊN KẾT</h4>
                            <a href="http://udn.vn/" target="_blank">Trang Đại Học Đà Nẵng</a><br>
                            <a href="http://dut.udn.vn/" target="_blank">Trang Đại Học Bách Khoa</a><br>                            
                            <a href="http://daotao.dut.udn.vn/" target="_blank">Trang Đào Tạo</a><br>
                            <a href="http://daotao.dut.udn.vn/sv" target="_blank">Hệ thống trang tín chỉ</a><br>
                            <a href="http://ctsv.dut.udn.vn/" target="_blank">Phòng công tác sinh viên</a><br>
                            <a href="http://yu.dut.udn.vn/" target="_blank">Đoàn Trường Bách Khoa</a>
                        </div>
                    </div>
                </div>

			</footer>	
			<!-- /footer -->
	  </div>
	  <!-- /main content -->
	  
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metismenu/jquery.metisMenu.js"></script>
<!--Summernote Editor-->
<script src="js/plugins/summernote/summernote.min.js"></script>
<!--Markdown Editor-->
<script src="js/plugins/markdown/bootstrap-markdown.js"></script>
<script src="js/plugins/markdown/markdown.js"></script>
<script>
	 $(document).ready(function(){
		$('#summernote').summernote({
		  height: 260,                 // set editor height
		  minHeight: null,             // set minimum height of editor
		  maxHeight: null,             // set maximum height of editor
		  focus: true                  // set focus to editable area after initializing summernote
		});
		
		
	});
</script>
<script src="js/functions.js"></script>
</body>

<!-- Mirrored from g-axon.com/mouldifi-3.0/light/editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2016 02:49:23 GMT -->
</html>
