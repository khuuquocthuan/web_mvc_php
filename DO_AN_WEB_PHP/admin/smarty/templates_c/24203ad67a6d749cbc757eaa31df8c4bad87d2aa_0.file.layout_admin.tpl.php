<?php /* Smarty version 3.1.24, created on 2016-03-18 05:54:32
         compiled from "smarty/templates/layout_admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:845356eb8a08ef14e6_03757091%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24203ad67a6d749cbc757eaa31df8c4bad87d2aa' => 
    array (
      0 => 'smarty/templates/layout_admin.tpl',
      1 => 1456980939,
      2 => 'file',
    ),
    '2d82ecd99927fa5e8a5521b27e09ca7c70e9a36f' => 
    array (
      0 => 'smarty/templates/ad_head.tpl',
      1 => 1458117552,
      2 => 'file',
    ),
    'bbe3d7e53e29d79e8f48b4864b3d6dcd643e919b' => 
    array (
      0 => 'smarty/templates/ad_menu.tpl',
      1 => 1458276722,
      2 => 'file',
    ),
    '3a16db1e314e64bb863c289a4c9069120c9d3b70' => 
    array (
      0 => 'smarty/templates/ad_footer.tpl',
      1 => 1456978257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '845356eb8a08ef14e6_03757091',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb8a090bc9a0_37157933',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb8a090bc9a0_37157933')) {
function content_56eb8a090bc9a0_37157933 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '845356eb8a08ef14e6_03757091';
/*  Call merged included template "ad_head.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("ad_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '909956eb8a09024405_24514695', 'content_56eb8a09024409_19955922');
/*  End of included template "ad_head.tpl" */?>

<?php /*  Call merged included template "ad_menu.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("ad_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1856156eb8a09047698_70477254', 'content_56eb8a09047698_43996605');
/*  End of included template "ad_menu.tpl" */?>

<?php echo $_smarty_tpl->getSubTemplate ("ad_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php /*  Call merged included template "ad_footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("ad_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2800756eb8a090b0e29_29548404', 'content_56eb8a090b0e20_05301630');
/*  End of included template "ad_footer.tpl" */?>

<?php }
}
?><?php
/*%%SmartyHeaderCode:909956eb8a09024405_24514695%%*/
if ($_valid && !is_callable('content_56eb8a09024409_19955922')) {
function content_56eb8a09024409_19955922 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '909956eb8a09024405_24514695';
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $_smarty_tpl->tpl_vars['ad_tieude']->value;?>
</title>

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/admin.css" rel="stylesheet">
		<?php echo '<script'; ?>
 src="js/kiemtra.js"><?php echo '</script'; ?>
>
		<style>
			.navbar-inverse{
				background-color:#27ae60;
				border-color:#2ecc71;
			}
		</style>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
	</head><?php
/*/%%SmartyNocache:909956eb8a09024405_24514695%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1856156eb8a09047698_70477254%%*/
if ($_valid && !is_callable('content_56eb8a09047698_43996605')) {
function content_56eb8a09047698_43996605 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1856156eb8a09047698_70477254';
?>
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
								<li <?php if (isset($_smarty_tpl->tpl_vars['active']->value)) {
echo $_smarty_tpl->tpl_vars['active']->value;
}?>><a href="."><span class="glyphicon glyphicon-asterisk"></span> &nbsp;Trang tổng quan</a></li>
								<li <?php if (isset($_smarty_tpl->tpl_vars['active1']->value)) {
echo $_smarty_tpl->tpl_vars['active1']->value;
}?>><a href="set_website.php"><span class="glyphicon glyphicon-cog"></span> &nbsp;Thiết lập trang</a></li>
								<li <?php if (isset($_smarty_tpl->tpl_vars['activeg']->value)) {
echo $_smarty_tpl->tpl_vars['activeg']->value;
}?>><a href="set_giohang.php"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Giỏ hàng</a></li>
								<li <?php if (isset($_smarty_tpl->tpl_vars['active2']->value)) {
echo $_smarty_tpl->tpl_vars['active2']->value;
}?>><a href="set_slider.php"><span class="glyphicon glyphicon-picture"></span> &nbsp;Quản lý slider</a></li>
								<li <?php if (isset($_smarty_tpl->tpl_vars['active3']->value)) {
echo $_smarty_tpl->tpl_vars['active3']->value;
}?>><a href="set_phanhoi.php"><span class="glyphicon glyphicon-envelope"></span> &nbsp;Quản lý phản hồi</a></li>
								<li <?php if (isset($_smarty_tpl->tpl_vars['active4']->value)) {
echo $_smarty_tpl->tpl_vars['active4']->value;
}?>><a href="set_danhmuc.php"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Danh mục sản phẩm</a></li>
								<li <?php if (isset($_smarty_tpl->tpl_vars['active5']->value)) {
echo $_smarty_tpl->tpl_vars['active5']->value;
}?>><a href="set_sanpham.php"><span class="glyphicon glyphicon-gift"></span> &nbsp;Quản lý sản phẩm</a></li>
								<li <?php if (isset($_smarty_tpl->tpl_vars['active6']->value)) {
echo $_smarty_tpl->tpl_vars['active6']->value;
}?>><a href="set_admin.php"><span class="glyphicon glyphicon-user"></span> &nbsp;Quản lí quản trị</a></li>
							</ul>
						</div>
					</div><?php
/*/%%SmartyNocache:1856156eb8a09047698_70477254%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2800756eb8a090b0e29_29548404%%*/
if ($_valid && !is_callable('content_56eb8a090b0e20_05301630')) {
function content_56eb8a090b0e20_05301630 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2800756eb8a090b0e29_29548404';
?>
<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
		<!-- Bootstrap JavaScript -->
		<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</body>
</html><?php
/*/%%SmartyNocache:2800756eb8a090b0e29_29548404%%*/
}
}
?>