<?php
/* Smarty version 3.1.39, created on 2021-06-29 17:59:00
  from 'D:\Xampp\htdocs\DO_AN\smarty\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db4344125470_64802978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5507cf58cd87b68d994b1e96566ada7972f7737' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\DO_AN\\smarty\\templates\\header.tpl',
      1 => 1458286074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db4344125470_64802978 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
<div class="row row-menu-top" style="background:#20A138">
				<div class="col-xs-12 col-sm-12 col-md-2">
					<p class="text-center"><i class="glyphicon glyphicon-phone"><a href="phone:<?php echo $_smarty_tpl->tpl_vars['mweb']->value->phone;?>
"> <?php echo $_smarty_tpl->tpl_vars['mweb']->value->phone;?>
</a></i></p>
				</div>
				<div class="col-xs-12 col-sm-12  col-md-3">
					<p class="text-center"><i class="glyphicon glyphicon-envelope"> <a href="email:<?php echo $_smarty_tpl->tpl_vars['mweb']->value->email;?>
">Email:<?php echo $_smarty_tpl->tpl_vars['mweb']->value->email;?>
</a></i></p>
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
						<img src="public/images/logo/<?php echo $_smarty_tpl->tpl_vars['mweb']->value->logo;?>
" alt="LOGO" class="img-responsive" style="margin-top:5px">
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
							<i class="glyphicon glyphicon-home" <?php if ((isset($_smarty_tpl->tpl_vars['idactive']->value))) {
echo $_smarty_tpl->tpl_vars['idactive']->value;
}?>></i>
						</a>
					</div>
					
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li id="sp"><a href="index_sanpham.php" <?php if ((isset($_smarty_tpl->tpl_vars['spactive']->value))) {
echo $_smarty_tpl->tpl_vars['spactive']->value;
}?>>Cây trồng</a>
								<div class="menuc2">
									<ul >
									<?php if ((isset($_smarty_tpl->tpl_vars['menu1']->value))) {?>
							           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu1']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
							            <li><a href="index_loaisp.php?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value->id;?>
" >
							                <strong><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</strong>
							            </a></li>
							            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							        <?php }?>
								</ul>
								</div>
								
							</li>
							

							<li id="sp"><a href="index_dungcu.php" <?php if ((isset($_smarty_tpl->tpl_vars['dcactive']->value))) {
echo $_smarty_tpl->tpl_vars['dcactive']->value;
}?>>Dụng cụ</a>
								<div class="menuc2">
									<ul >
									<?php if ((isset($_smarty_tpl->tpl_vars['menu2']->value))) {?>
							           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu2']->value, 'menudc');
$_smarty_tpl->tpl_vars['menudc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menudc']->value) {
$_smarty_tpl->tpl_vars['menudc']->do_else = false;
?>
							            <li><a href="index_loaisp.php?id=<?php echo $_smarty_tpl->tpl_vars['menudc']->value->id;?>
" >
							                <strong><?php echo $_smarty_tpl->tpl_vars['menudc']->value->name;?>
</strong>
							            </a></li>
							            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							            <?php }?>
									</ul>
								</div>
								
							</li>
<!-- 							<li><a href="#">Khuyến mại</a></li>
 -->							<li><a href="index_lienhe.php" <?php if ((isset($_smarty_tpl->tpl_vars['lhactive']->value))) {
echo $_smarty_tpl->tpl_vars['lhactive']->value;
}?>>Liên Hệ</a></li>
							<li><a href="index_giohang.php" <?php if ((isset($_smarty_tpl->tpl_vars['ghactive']->value))) {
echo $_smarty_tpl->tpl_vars['ghactive']->value;
}?>>Giỏ hàng</a></li>
							
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
							
						<form class="navbar-form navbar-left" role="search" action="index_timkiem.php" method="post">
							<div class="form-group">
								<input name="seach" value="<?php if ((isset($_POST['seach']))) {
echo $_POST['seach'];
} else { ?>""<?php }?>"  type="text" class="form-control" placeholder="Search">
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
		</div><?php }
}
