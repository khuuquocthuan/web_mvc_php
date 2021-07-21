<?php
/* Smarty version 3.1.39, created on 2021-06-29 17:59:00
  from 'D:\Xampp\htdocs\DO_AN\views\home\home_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db43443e6004_05570013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5a01653b1408193cc52747ef693aac51b48091d' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\DO_AN\\views\\home\\home_slider.tpl',
      1 => 1456724893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db43443e6004_05570013 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
	<div class="row">
		<!-- <div class="col-md-12"> -->
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				<li data-target="#carousel-id" data-slide-to="3" class=""></li>
				<li data-target="#carousel-id" data-slide-to="4" class=""></li>
			</ol>
			<div class="carousel-inner">
				<?php if ((isset($_smarty_tpl->tpl_vars['sl']->value))) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sl']->value, 'kq');
$_smarty_tpl->tpl_vars['kq']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kq']->value) {
$_smarty_tpl->tpl_vars['kq']->do_else = false;
?>
				<div class="item <?php if ($_smarty_tpl->tpl_vars['kq']->value->ma_sl == 3) {
echo 'active';
}?>">
					<img  class="img-responsive" src="public/images/slider/<?php echo $_smarty_tpl->tpl_vars['kq']->value->name;?>
" >
					<div class="container">
						<!-- <div class="carousel-caption">
							<h1></h1>
							<p></p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
						</div> -->
					</div>
				</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
				
		       
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>
</div>


<?php }
}
