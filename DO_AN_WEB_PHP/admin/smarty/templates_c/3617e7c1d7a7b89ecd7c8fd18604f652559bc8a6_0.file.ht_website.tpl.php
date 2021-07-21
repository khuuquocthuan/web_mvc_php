<?php /* Smarty version 3.1.24, created on 2016-03-18 05:27:27
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_website/ht_website.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1789556eb83af2d1dc0_07286906%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3617e7c1d7a7b89ecd7c8fd18604f652559bc8a6' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_website/ht_website.tpl',
      1 => 1458275072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1789556eb83af2d1dc0_07286906',
  'variables' => 
  array (
    'mweb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb83af372077_76923881',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb83af372077_76923881')) {
function content_56eb83af372077_76923881 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1789556eb83af2d1dc0_07286906';
?>
<ol class="breadcrumb">
	<li><strong><a href="index.php">Trang tổng quan</a></strong></li>
	<li class="active"><strong>Thiết lập chung</strong></li>
</ol>
<div class="row">
	<div class="col-md-6 cog">
		<form action="" method="post" role="form" enctype="multipart/form-data">
			<legend class="text-center text-success"><strong><span class="glyphicon glyphicon-pencil"></span> CẬP NHẬT MỚI</strong></legend>
			<div class="form-group">
				<label for="">Tiêu đề website:</label>
				<input type="text" name="tittle" class="form-control" id="" value="<?php echo $_smarty_tpl->tpl_vars['mweb']->value->tittle;?>
">
			</div>
			<div class="form-group">
				<label for="">Đổi logo:</label>
				<input type="file" name="logo" class="form-control" id="" placeholder="Chọn hình ảnh">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại:</label>
				<input type="text" name="phone" class="form-control" id="" value="<?php echo $_smarty_tpl->tpl_vars['mweb']->value->phone;?>
">
			</div>
			<div class="form-group">
				<label for="">Email:</label>
				<input type="text" name="email" class="form-control" id="" value="<?php echo $_smarty_tpl->tpl_vars['mweb']->value->email;?>
">
			</div>
			<div class="form-group">
				<label for="">Facebook:</label>
				<input type="text" name="face" class="form-control" id="" value="<?php echo $_smarty_tpl->tpl_vars['mweb']->value->face;?>
">
			</div>
			<div class="form-group">
				<label for="">Địa chỉ:</label>
				<input type="text" name="address" class="form-control" id="" value="<?php echo $_smarty_tpl->tpl_vars['mweb']->value->address;?>
">
			</div>
			<div class="form-group">
				<label for="">Nội dung giới thiệu:</label>
				<textarea class="form-control" name="s_describe" rows="5" ><?php echo $_smarty_tpl->tpl_vars['mweb']->value->s_describe;?>
</textarea>
			</div>
			<p class="text-center">
				<button type="submit" name="sm" class="btn btn-primary">Cập nhật</button>
				<button type="reset" class="btn btn-primary">Nhập lại</button>
			</p>
		</form>
	</div>
	<div class="col-md-6">
		<legend class="text-center text-success"><strong><span class="glyphicon glyphicon-th"></span> THÔNG TIN HIỆN TẠI</legend>
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th class="col-md-4">Tiêu đề website</th>
					<th class="col-md-8 text-primary"><?php echo $_smarty_tpl->tpl_vars['mweb']->value->tittle;?>
</th>
				</tr>
			</thead>
			<thead>
				<tr> 
					<th class="col-md-4">Logo hiện tại</th>
					<th class="col-md-8"><p class="text-center"><img src="../public/images/logo/<?php echo $_smarty_tpl->tpl_vars['mweb']->value->logo;?>
" class="img-responsive"></p></th>
				</tr>
			</thead>	
			<thead>
				<tr>
					<th class="col-md-4">Nội dung giới thiệu</th>
					<th class="col-md-8 text-primary"><?php echo $_smarty_tpl->tpl_vars['mweb']->value->s_describe;?>
</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th class="col-md-4">Số điện thoại</th>
					<th class="col-md-8 text-primary"><?php echo $_smarty_tpl->tpl_vars['mweb']->value->phone;?>
</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th class="col-md-4">Địa chỉ</th>
					<th class="col-md-8 text-primary"><?php echo $_smarty_tpl->tpl_vars['mweb']->value->address;?>
</th>
				</tr>
			</thead>
		</table>
	</div>
</div><?php }
}
?>