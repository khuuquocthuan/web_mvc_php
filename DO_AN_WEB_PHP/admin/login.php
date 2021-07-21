<?php
	session_start();
	if(isset($_POST['submit'])){
			require_once("../models/m_admin.php");
			$m_admin=new M_admin();
			$ht1_admin=$m_admin->Hien_thi_admin_on();
		foreach($ht1_admin as $key){
			if($_POST['username']==($key->user) && md5($_POST['password']) == ($key->pass)){
				$_SESSION['login'] = "OK";
				$_SESSION['name'] = $username;
				header("location:index.php");	
			}
		
			if($_POST['username']!=($key->user) || $_POST['password'] != ($key->pass)){
			$err = "<div class='alert alert-danger role='alert'>Tài khoản không tồn tại!</div>";
		}
	}
		
			

	}

?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang đăng nhập quản trị</title>
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="header">
			<div class="container">
				<div class="row col-md-12">
					<h2 class="text-center">TRANG QUẢN TRỊ</h2>
					<hr></hr>
				</div>
			</div>
		</div>
		<div id="content">
			<div class="container">
				<div class="row col-md-12">
					<div class="col-md-4 col-md-offset-4 login">
						<div class="col-md-12 ribbonvip">
							<div class="ribbon-wrapper h2 ribbon-red">
								<div class="ribbon-front">
									<h4>Đăng nhập</h4>
								</div>
								<div class="ribbon-edge-topleft2"></div>
								<div class="ribbon-edge-bottomleft"></div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 form-login">
							<form action="" method="POST" role="form">
								<?php echo isset($err)?$err:""?>
								<div class="form-group">
									<label for="" class="sr-only">label</label>
									<input type="text" class="form-control" id="" placeholder="Username" class="" name="username">
									<div class="glyphicon glyphicon-user login-user"> </div>
								</div>
								<div class="form-group">
									<label for="" class="sr-only">label</label>
									<input type="password" class="form-control" id="password" placeholder="Password" name="password">
									<span class="glyphicon glyphicon-lock login-pass"> </span>
								</div>
								<!-- <div>
									<label><input type="checkbox"> Ghi nhớ tài khoản</label>
								</div> -->
								<p class="text-center">
									<button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="container">
				<div class="row col-md-12">
					<p class="text-center">&copy; Copyright by Viettek - Group CYT 2016</p>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>