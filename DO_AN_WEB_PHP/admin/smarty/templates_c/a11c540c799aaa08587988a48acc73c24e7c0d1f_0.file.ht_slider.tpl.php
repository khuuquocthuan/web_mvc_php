<?php /* Smarty version 3.1.24, created on 2016-03-18 05:27:28
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_slider/ht_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1439756eb83b0b93791_98060450%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a11c540c799aaa08587988a48acc73c24e7c0d1f' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_slider/ht_slider.tpl',
      1 => 1458275104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1439756eb83b0b93791_98060450',
  'variables' => 
  array (
    'c_sl' => 0,
    'row' => 0,
    'kq' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb83b0c72240_84843470',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb83b0c72240_84843470')) {
function content_56eb83b0c72240_84843470 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1439756eb83b0b93791_98060450';
?>
<ol class="breadcrumb">
	<li><strong><a href="index.php">Trang tổng quan</a></strong></li>
	<li class="active"><strong>Quản lí slide</strong></li>
</ol>
<div class="col-md-6">
	
<legend><h1 class="text-center" style="color:#3C8E51"><small style="color:#3C8E51"><i class="glyphicon glyphicon-th-list"></i></small> Danh sách Slider</h1></legend>
	<table class="table table-hover text-left">
		<thead>
			<tr>
				<th class="text-center" >ID</th>
				<th class="text-center" >Hình ảnh</th>
				<th class="text-center" >Ngày đăng</th>
				<th class="text-center" >Ngày sửa</th>
				<th class="text-center" >Bắt đầu</th>
				<th class="text-center" >Trạng thái</th>
				<th class="text-center" >Chức năng</th>
			</tr>
		</thead>
		<tbody>
			
			<?php if (isset($_smarty_tpl->tpl_vars['c_sl']->value)) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['c_sl']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
				<tr>
					<td class="text-center" ><?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
</td>
					<td class="text-center" ><img src="../public/images/slider/<?php echo $_smarty_tpl->tpl_vars['row']->value->name;?>
" alt="" width="100px"></td>
					<td class="text-center" ><?php echo $_smarty_tpl->tpl_vars['row']->value->date_up;?>
</td>
					<td class="text-center" ><?php echo $_smarty_tpl->tpl_vars['row']->value->date_edit;?>
</td>
					<td class="text-center" >
						<input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['row']->value->ma_sl == 3)) {
echo "checked";
}?>>
					</td>
					<td class="text-center" ><?php if (($_smarty_tpl->tpl_vars['row']->value->status) == 1) {?>Hiển thị <?php } else { ?>Ẩn<?php }?></td>
					<td class="text-center" >
						<a href="edit_slider.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
"
						 title="Sửa"><i class="glyphicon glyphicon-pencil"></i></a>
					</td>
				</tr>
				<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
				<?php }?>
			</tbody>
		</table>
		
</div>
<div class="col-md-6">
	<legend>
		<h1 class="text-center" style="color:#1F8021"><small style="color:#1F8021"><i class="glyphicon glyphicon-film"></i></small> Hiển thị slider</h1>
	</legend>
	
	<div id="carousel-id" class="carousel slide" data-ride="carousel" style="margin-top:80px">

			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				<li data-target="#carousel-id" data-slide-to="3" class=""></li>
				<li data-target="#carousel-id" data-slide-to="4" class=""></li>
			</ol>
			<div class="carousel-inner">
				<?php if (isset($_smarty_tpl->tpl_vars['c_sl']->value)) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['c_sl']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['kq'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['kq']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['kq']->value) {
$_smarty_tpl->tpl_vars['kq']->_loop = true;
$foreach_kq_Sav = $_smarty_tpl->tpl_vars['kq'];
?>
				<div class="item <?php if ($_smarty_tpl->tpl_vars['kq']->value->ma_sl == 3) {
echo 'active';
}?>">
					<img style="height:300px !important; width:100%" src="../public/images/slider/<?php echo $_smarty_tpl->tpl_vars['kq']->value->name;?>
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
$_smarty_tpl->tpl_vars['kq'] = $foreach_kq_Sav;
}
?>
				<?php }?>
				
		       
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
</div><?php }
}
?>