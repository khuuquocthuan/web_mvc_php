<?php /* Smarty version 3.1.24, created on 2016-03-21 07:43:22
         compiled from "smarty/templates/layout_home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2043556ef980abeaa65_28122893%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b62eb073c404a1466a28b2a40763d9bbf32fcbd' => 
    array (
      0 => 'smarty/templates/layout_home.tpl',
      1 => 1456384701,
      2 => 'file',
    ),
    'a6d5a3bf9bcd212a679e45055191c2d4cc27a363' => 
    array (
      0 => 'smarty/templates/head.tpl',
      1 => 1458542600,
      2 => 'file',
    ),
    'a5aeb1b0e461d22ca190424367921e9d57c27bc9' => 
    array (
      0 => 'smarty/templates/header.tpl',
      1 => 1458286074,
      2 => 'file',
    ),
    '1f9918e4345edf9f81766450a42428810bcb287f' => 
    array (
      0 => 'smarty/templates/footer.tpl',
      1 => 1458283240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2043556ef980abeaa65_28122893',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56ef980b084bd2_86280349',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ef980b084bd2_86280349')) {
function content_56ef980b084bd2_86280349 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2043556ef980abeaa65_28122893';
/*  Call merged included template "head.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1690556ef980ac67a85_59746857', 'content_56ef980ac67a85_38089590');
/*  End of included template "head.tpl" */?>

<?php /*  Call merged included template "header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '567956ef980ac92a11_64639169', 'content_56ef980ac8eb95_27089589');
/*  End of included template "header.tpl" */?>

<?php echo $_smarty_tpl->getSubTemplate ("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php /*  Call merged included template "footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '3014956ef980b059c45_39947846', 'content_56ef980b055dc2_25873657');
/*  End of included template "footer.tpl" */?>

<?php }
}
?><?php
/*%%SmartyHeaderCode:1690556ef980ac67a85_59746857%%*/
if ($_valid && !is_callable('content_56ef980ac67a85_38089590')) {
function content_56ef980ac67a85_38089590 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1690556ef980ac67a85_59746857';
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $_smarty_tpl->tpl_vars['tieu_de']->value;?>
</title>

		<!-- Bootstrap CSS -->
		<link href="public/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="public/css/style.css">
		<!-- <link rel="stylesheet" type="text/css" media="all" href="public/css/styles.css"> <?php echo '<script'; ?>
 type="text/javascript" src="public/js/js.slider.js"><?php echo '</script'; ?>
>-->
  		
		<style>
			  /* Note: Try to remove the following lines to see the effect of CSS positioning */
			  .affix {
			      top: 0;
			      width:100%;
			      z-index: 100;
			  }

			  .affix + .container-fluid {
			      padding-top: 70px;
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
	</head>
	<body>
		<div id="fb-root"></div>
		<?php echo '<script'; ?>
>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
		<div id="fb-root"></div>
		<?php echo '<script'; ?>
>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=1785659791654389";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
				<?php
/*/%%SmartyNocache:1690556ef980ac67a85_59746857%%*/
}
}
?><?php
/*%%SmartyHeaderCode:567956ef980ac92a11_64639169%%*/
if ($_valid && !is_callable('content_56ef980ac8eb95_27089589')) {
function content_56ef980ac8eb95_27089589 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '567956ef980ac92a11_64639169';
?>
<div class="container-fluid">
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
					<p class="text-right"><a href="admin/login.php"><i class="glyphicon glyphicon-user"></i> Qu???n tr???</a></p>
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
						<i>Ch??c qu?? kh??ch vui v???!!</i>
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
							<i class="glyphicon glyphicon-home" <?php if (isset($_smarty_tpl->tpl_vars['idactive']->value)) {
echo $_smarty_tpl->tpl_vars['idactive']->value;
}?>></i>
						</a>
					</div>
					
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li id="sp"><a href="index_sanpham.php" <?php if (isset($_smarty_tpl->tpl_vars['spactive']->value)) {
echo $_smarty_tpl->tpl_vars['spactive']->value;
}?>>C??y tr???ng</a>
								<div class="menuc2">
									<ul >
									<?php if (isset($_smarty_tpl->tpl_vars['menu1']->value)) {?>
							           <?php
$_from = $_smarty_tpl->tpl_vars['menu1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['menu']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
$foreach_menu_Sav = $_smarty_tpl->tpl_vars['menu'];
?>
							            <li><a href="index_loaisp.php?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value->id;?>
" >
							                <strong><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</strong>
							            </a></li>
							            <?php
$_smarty_tpl->tpl_vars['menu'] = $foreach_menu_Sav;
}
?>
							        <?php }?>
								</ul>
								</div>
								
							</li>
							

							<li id="sp"><a href="index_dungcu.php" <?php if (isset($_smarty_tpl->tpl_vars['dcactive']->value)) {
echo $_smarty_tpl->tpl_vars['dcactive']->value;
}?>>D???ng c???</a>
								<div class="menuc2">
									<ul >
									<?php if (isset($_smarty_tpl->tpl_vars['menu2']->value)) {?>
							           <?php
$_from = $_smarty_tpl->tpl_vars['menu2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['menudc'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['menudc']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['menudc']->value) {
$_smarty_tpl->tpl_vars['menudc']->_loop = true;
$foreach_menudc_Sav = $_smarty_tpl->tpl_vars['menudc'];
?>
							            <li><a href="index_loaisp.php?id=<?php echo $_smarty_tpl->tpl_vars['menudc']->value->id;?>
" >
							                <strong><?php echo $_smarty_tpl->tpl_vars['menudc']->value->name;?>
</strong>
							            </a></li>
							            <?php
$_smarty_tpl->tpl_vars['menudc'] = $foreach_menudc_Sav;
}
?>
							            <?php }?>
									</ul>
								</div>
								
							</li>
<!-- 							<li><a href="#">Khuy???n m???i</a></li>
 -->							<li><a href="index_lienhe.php" <?php if (isset($_smarty_tpl->tpl_vars['lhactive']->value)) {
echo $_smarty_tpl->tpl_vars['lhactive']->value;
}?>>Li??n H???</a></li>
							<li><a href="index_giohang.php" <?php if (isset($_smarty_tpl->tpl_vars['ghactive']->value)) {
echo $_smarty_tpl->tpl_vars['ghactive']->value;
}?>>Gi??? h??ng</a></li>
							
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
							
						<form class="navbar-form navbar-left" role="search" action="index_timkiem.php" method="post">
							<div class="form-group">
								<input name="seach" value="<?php if (isset($_POST['seach'])) {
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
						<i style="font-size:10px">Ch??a c?? s???n ph???m n??o trong gi??? h??ng c???a b???n!</i>
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
							<li class="active"><a href="#">Trang ch???</a></li>
							<li id="sp"><a href="index_sanpham.php?c=caytrong">C??y tr???ng</a>
								<div class="menuc2">
									<ul >
									<li ><a href="#" >C??y ??n qu???</a></li>
									<li><a href="#">C??y ??n l??</a></li>
									<li><a href="#">C??y ??n c???</a></li>
									<li><a href="#">C??y c???nh</a></li>
								</ul>
								</div>
								
							</li>
							<li id="sp"><a href="index_sanpham.php?c=dungcu">D???ng c???</a>
								<div class="menuc2">
									<ul >
									<li><a href="#">B??nh t?????i</a></li>
									<li><a href="#">Gi?? Th???</a></li>
									<li><a href="#">?????t tr???ng</a></li>
									<li><a href="#">Ch???u tr???ng</a></li>
								</ul>
								</div>
								
							</li>
							<li><a href="#">Khuy???n m???i</a></li>
							<li><a href="index_lienhe.php?c=lienhe">Li??n H???</a></li>
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
		</div><?php
/*/%%SmartyNocache:567956ef980ac92a11_64639169%%*/
}
}
?><?php
/*%%SmartyHeaderCode:3014956ef980b059c45_39947846%%*/
if ($_valid && !is_callable('content_56ef980b055dc2_25873657')) {
function content_56ef980b055dc2_25873657 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3014956ef980b059c45_39947846';
?>
<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 footer">


				<div class="col-xs-push-1 col-md-3" style="margin:40px 0px">
					<h4>H??? th???ng c???a h??ng</h4>
					<p>Trung:S??? 255 Nam ????n Ngh??? An</p>
					<p>Nam:S??? 255 Nam ????n Ngh??? An</p>
					<p>B???c:S??? 255 Nam ????n Ngh??? An</p>

				</div>

				<div class="col-xs-push-1 col-md-4" style="margin:40px 0px">
					<h4>Li??n H???</h4>
					<p>S??T:<?php echo $_smarty_tpl->tpl_vars['mweb']->value->phone;?>
</p>
					<p>?????A CH???:<?php echo $_smarty_tpl->tpl_vars['mweb']->value->address;?>
</p>
					<p>Email:<?php echo $_smarty_tpl->tpl_vars['mweb']->value->email;?>
</p>
				</div>

				<div class=" col-xs-push-1 col-md-4 " >
					<div class="hidden-xs">
						<div class="fb-page" data-href="https://www.facebook.com/kienthucquanhta12/" 
						data-tabs="timeline" data-height="300" 
						data-small-header="false"
						data-adapt-container-width="false" 
						data-hide-cover="false" data-show-facepile="false">
						<div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/kienthucquanhta12/">
							<a href="<?php echo $_smarty_tpl->tpl_vars['mweb']->value->face;?>
">KI???N TH???C QUANH TA</a></blockquote></div></div>
						</div>

					</div>

				</div>
			</div>
			
		<div class="row" style="background:rgba(204,204,204,0.5)">
			<p class="text-center" style="line-height:30px;font-weight:bold;margin-top:20px"> &copy; By VietTek 2016</p>
		</div>
		</div>
		<div class="support-icon-right">
			<h3 class="text-center"><i class="glyphicon glyphicon-user"></i> H??? tr??? tr???c tuy???n</h3>
			<div class="online-support">
				<div
				class="fb-page"
				data-href="https://www.facebook.com/kienthucquanhta12"
				data-small-header="true"
				data-height="300"
				data-width="250"
				data-tabs="messages"
				data-adapt-container-width="false"
				data-hide-cover="false"
				data-show-facepile="false"
				data-show-posts="false">
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
>
	$(document).ready(function(){
		$('.online-support').hide();
		$('.support-icon-right h3').click(function(e){
			e.stopPropagation();
			$('.online-support').slideToggle();
		});
		$('.online-support').click(function(e){
			e.stopPropagation();
		});
		$(document).click(function(){
			$('.online-support').slideUp();
		});
	});
	<?php echo '</script'; ?>
>
	<style>
	.support-icon-right {
		/*background: #F0F3EF;*/
		position: fixed;
		right: 0;
		bottom: 0;
		z-index: 100;
		overflow: hidden;
		width: 250px;
		color: #fff!important;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-ms-transition: all 0.3s;
		-o-transition: all 0.3s;
		transition: all 0.3s;
	}

	.support-icon-right h3 {
		text-transform: uppercase;
		font-weight: bold;
		font-size: 13px!important;
		font-family: Arial;
		color: #fff!important;
		margin: 0!important;
		background-color:#1D3EE8;
		cursor: pointer;
		border-radius: 10px 10px 0 0;
	}

	.support-icon-right i {

		padding: 15px 15px 12px 15px;
	}
	.online-support {
		display: none;
	}
	</style>

</footer>
<?php echo '<script'; ?>
 src="public/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax_cart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax_xoa_cart.js"><?php echo '</script'; ?>
>
<?php echo '</script'; ?>
>

<!-- Bootstrap JavaScript -->
<?php echo '<script'; ?>
 src="public/js/bootstrap.min.js"><?php echo '</script'; ?>
>

</body>
</html><?php
/*/%%SmartyNocache:3014956ef980b059c45_39947846%%*/
}
}
?>