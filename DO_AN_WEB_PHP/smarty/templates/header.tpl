<div class="container-fluid">
<div class="row row-menu-top" style="background:#20A138">
				<div class="col-xs-12 col-sm-12 col-md-2">
					<p class="text-center"><i class="glyphicon glyphicon-phone"><a href="phone:{$mweb->phone}"> {$mweb->phone}</a></i></p>
				</div>
				<div class="col-xs-12 col-sm-12  col-md-3">
					<p class="text-center"><i class="glyphicon glyphicon-envelope"> <a href="email:{$mweb->email}">Email:{$mweb->email}</a></i></p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2 col-md-push-4">
					<p class="text-right"><a href="admin/login.php"><i class="glyphicon glyphicon-user"></i> Quản trị</a></p>
				</div>
			</div>
			<!-- banner -->
			<!-- <div data-spy="affix" class="hidden-xs" data-offset-top="197"> -->
				<div class="row banner" style="background-image:url(public/images/logo/bkb2.jpg)">
					<div class="container">
						<div class="col-xs-12 col-sm-12 col-md-3">
						<img src="public/images/logo/{$mweb->logo}" alt="LOGO" class="img-responsive" style="margin-top:5px">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-9" >
					<p class="text-right" style="line-height:80px">
						<i>Chúc quý khách vui vẻ!!</i>
						<i  style="font-size:30px; color:#2C7F2C" class="glyphicon glyphicon-shopping-cart"></i>
					</p>
				</div>
					</div>
				

				
			</div>
			<!-- menu -->
			<!-- <div class="container-fluid"></div> -->
			<div data-spy="affix" class="hidden-xs" data-offset-top="197">
				<div class="row">
					
					<!--  style="background-color: #20A138; height:50px;" -->
				
				<nav class="navbar" role="navigation" >
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href=".">
							<i class="glyphicon glyphicon-home" {if isset($idactive)}{$idactive}{/if}></i>
						</a>
					</div>
					
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li id="sp"><a href="index_sanpham.php" {if isset($spactive)}{$spactive}{/if}>Cây trồng</a>
								<div class="menuc2">
									<ul >
									{if isset($menu1)}
							           {foreach $menu1 as $menu}
							            <li><a href="index_loaisp.php?id={$menu->id}" >
							                <strong>{$menu->name}</strong>
							            </a></li>
							            {/foreach}
							        {/if}
								</ul>
								</div>
								
							</li>
							

							<li id="sp"><a href="index_dungcu.php" {if isset($dcactive)}{$dcactive}{/if}>Dụng cụ</a>
								<div class="menuc2">
									<ul >
									{if isset($menu2)}
							           {foreach $menu2 as $menudc}
							            <li><a href="index_loaisp.php?id={$menudc->id}" >
							                <strong>{$menudc->name}</strong>
							            </a></li>
							            {/foreach}
							            {/if}
									</ul>
								</div>
								
							</li>
<!-- 							<li><a href="#">Khuyến mại</a></li>
 -->							<li><a href="index_lienhe.php" {if isset($lhactive)}{$lhactive}{/if}>Liên Hệ</a></li>
							<li><a href="index_giohang.php" {if isset($ghactive)}{$ghactive}{/if}>Giỏ hàng</a></li>
							
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
							
						<form class="navbar-form navbar-left" role="search" action="index_timkiem.php" method="post">
							<div class="form-group">
								<input name="seach" value="{if isset($smarty.post.seach)}{$smarty.post.seach}{else}""{/if}"  type="text" class="form-control" placeholder="Search">
							</div>
							<button class="btn btn-default" name="tim">Seach</button>
						</form>
						
						</ul>
						</div>
					</div><!-- /.navbar-collapse -->
				</nav>
			
			</div>
			
			</div> 

			<div class="visible-xs">	
				<div class="row banner" style="background-image:url(images/bkb2.jpg)">
				<div class="col-xs-12 col-sm-12 col-md-3">
						<img src="public/images/logo/logoclean2.png" alt="LOGO" class="img-responsive" style="margin-top:2px">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 " >
					<p class="text-right">
						<i style="font-size:10px">Chưa có sản phẩm nào trong giỏ hàng của bạn!</i>
						<i  style="font-size:30px; color:#2C7F2C" class="glyphicon glyphicon-shopping-cart"></i>
					</p>
				</div>

				
			</div>
			<!-- menu -->
			<!-- <div class="container-fluid"></div> -->
			
				<div class="row">
					
					<!--  style="background-color: #20A138; height:50px;" -->
				
				<nav class="navbar" role="navigation" >
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<i class="glyphicon glyphicon-home"></i>
						</a>
					</div>
					
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Trang chủ</a></li>
							<li id="sp"><a href="index_sanpham.php?c=caytrong">Cây trồng</a>
								<div class="menuc2">
									<ul >
									<li ><a href="#" >Cây ăn quả</a></li>
									<li><a href="#">Cây ăn lá</a></li>
									<li><a href="#">Cây ăn củ</a></li>
									<li><a href="#">Cây cảnh</a></li>
								</ul>
								</div>
								
							</li>
							<li id="sp"><a href="index_sanpham.php?c=dungcu">Dụng cụ</a>
								<div class="menuc2">
									<ul >
									<li><a href="#">Bình tưới</a></li>
									<li><a href="#">Giá Thể</a></li>
									<li><a href="#">Đất trồng</a></li>
									<li><a href="#">Chậu trồng</a></li>
								</ul>
								</div>
								
							</li>
							<li><a href="#">Khuyến mại</a></li>
							<li><a href="index_lienhe.php?c=lienhe">Liên Hệ</a></li>
							<!-- <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li> -->
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
							
							<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Seach</button>
						</form>
						
						</ul>
						</div>
					</div><!-- /.navbar-collapse -->
				</nav>
			
			</div>
			</div>
		</div>