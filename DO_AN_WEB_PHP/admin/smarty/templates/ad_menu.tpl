<body>
		<nav class="navbar navbar-inverse" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="admin.php"> Trang quản trị</a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="../index.php" title="My web" style="color:#fff"><span class="glyphicon glyphicon-home"></span></b></a>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		<div class="container-fluid">
				<div class="row content-ct">
					<div class="col-md-2">
						<div class="collapse navbar-collapse navbar-ex1-collapse navbar-inverse menu-left">
							<ul class="nav navbar-tab side-nav">
								<img src="images/avatar.png" class="img-responsive img-circle">
								
						<div class="dropdown text-center">
							<span class="text-danger">Xin chào</span>
							<span>
							<a href="set_admin.php" style="text-decoration:none;color:#fff;"><strong>admin</strong>
							 <i class="glyphicon glyphicon-chevron-down"></i></a>
							 </span>

							 <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" 
							style="background:#393838;margin-left:7px;">
								<li><a href="#">Thông tin tài khoản</a></li>
								<li><a href="#">Đổi mật khẩu</a></li>
							 	
											    
							</ul> -->
						</div>
										<!--  the end dropdown -->
								<p class="text-center text-danger"><a href="logout.php"> Đăng xuất <span class="glyphicon glyphicon-log-out"></span>
								</a></p>
								<li {if isset($active)}{$active}{/if}><a href="."><span class="glyphicon glyphicon-asterisk"></span> &nbsp;Trang tổng quan</a></li>
								<li {if isset($active1)}{$active1}{/if}><a href="set_website.php"><span class="glyphicon glyphicon-cog"></span> &nbsp;Thiết lập trang</a></li>
								<li {if isset($activeg)}{$activeg}{/if}><a href="set_giohang.php"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Giỏ hàng</a></li>
								<li {if isset($active2)}{$active2}{/if}><a href="set_slider.php"><span class="glyphicon glyphicon-picture"></span> &nbsp;Quản lý slider</a></li>
								<li {if isset($active3)}{$active3}{/if}><a href="set_phanhoi.php"><span class="glyphicon glyphicon-envelope"></span> &nbsp;Quản lý phản hồi</a></li>
								<li {if isset($active4)}{$active4}{/if}><a href="set_danhmuc.php"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Danh mục sản phẩm</a></li>
								<li {if isset($active5)}{$active5}{/if}><a href="set_sanpham.php"><span class="glyphicon glyphicon-gift"></span> &nbsp;Quản lý sản phẩm</a></li>
								<li {if isset($active6)}{$active6}{/if}><a href="set_admin.php"><span class="glyphicon glyphicon-user"></span> &nbsp;Quản lí quản trị</a></li>
							</ul>
						</div>
					</div>