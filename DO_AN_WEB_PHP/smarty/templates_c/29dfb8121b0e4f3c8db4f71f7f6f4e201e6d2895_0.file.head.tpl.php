<?php
/* Smarty version 3.1.39, created on 2021-06-29 17:58:59
  from 'D:\Xampp\htdocs\DO_AN\smarty\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db4343ec3374_85634337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29dfb8121b0e4f3c8db4f71f7f6f4e201e6d2895' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\DO_AN\\smarty\\templates\\head.tpl',
      1 => 1458542600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db4343ec3374_85634337 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
				<?php }
}
