﻿
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from g-axon.com/mouldifi-3.0/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2016 02:49:47 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>Mouldifi | Login</title>
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

<link href="css/mouldifi-forms.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->


</head>
<body class="login-page">
<div class="login-container">
	<div class="login-branding">
		<a href="index.php"><img src="images/logo.png" alt="Mouldifi" title="Mouldifi"></a>
	</div>
	<div class="login-content">
		<h2><strong>Welcome</strong>, please login</h2>
		<?php
						if(isset($msg)!=null){
							echo "<p style='color:red'>".$msg."</p>";
						}
						if(isset($msg1)!=null){
							echo "<p style='color:red'>".$msg1."</p>";
						}
					?>	
		<form method="post" action='controller_login.php?do=login'>                        
			<div class="form-group">
				<input type="text" placeholder="Username" class="form-control" required="" name="username">
			</div>                        
			<div class="form-group">
				<input type="password" placeholder="Password" class="form-control" required="" name="password">
			</div>
			<div class="form-group">
				 <div class="checkbox checkbox-replace">
					<input type="checkbox" id="remeber" value="yes" name="remeber">
					<label for="remeber">Remeber me</label>
				  </div>
			 </div>
			<div class="form-group">
				<button class="btn btn-primary btn-block" name="login" value="login">Login</button>
			</div>
			<p class="text-center"><a href="forgot-password.php">Forgot your password?</a></p>                        
		</form>
	</div>
</div>
<!--Load JQuery-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

<!-- Mirrored from g-axon.com/mouldifi-3.0/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2016 02:49:47 GMT -->
</html>
