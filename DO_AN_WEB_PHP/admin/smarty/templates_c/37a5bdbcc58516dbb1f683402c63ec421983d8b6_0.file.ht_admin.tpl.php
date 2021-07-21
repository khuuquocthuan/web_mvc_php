<?php /* Smarty version 3.1.24, created on 2016-03-18 05:27:35
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_admin/ht_admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:696956eb83b7c1d176_77717484%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37a5bdbcc58516dbb1f683402c63ec421983d8b6' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_admin/ht_admin.tpl',
      1 => 1458275237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '696956eb83b7c1d176_77717484',
  'variables' => 
  array (
    'ht_admin' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb83b7ce83a8_53753118',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb83b7ce83a8_53753118')) {
function content_56eb83b7ce83a8_53753118 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '696956eb83b7c1d176_77717484';
?>
<ol class="breadcrumb">
	<li><strong><a href="index.php">Trang tổng quan</a></strong></li>
	<li class="active"><strong>Quản lí admin</strong></li>
</ol>
	<legend><h1 class="text-center" style="color:#3C8E51"><small style="color:#3C8E51"><i class="glyphicon glyphicon-th-list"></i></small> Danh sách admin</h1><a href="add_admin.php"><i class="glyphicon glyphicon-plus"></i> Thêm admin</a></legend>
	<table class="table table-hover text-left">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tên</th>
				<th>Uername</th>
				<th>Email</th>
				<th>Ngày sinh</th>
				<th>Ngày Thêm</th>
				<th>Trạng thái</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			
			<?php if (isset($_smarty_tpl->tpl_vars['ht_admin']->value)) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['ht_admin']->value;
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->name;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->user;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->email;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->date_born;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->date_up;?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value->status == 1) {
echo "Hiển thị";
}
if (!($_smarty_tpl->tpl_vars['row']->value->status == 1)) {
echo "Ẩn";
}?></td>
					<td>
						<a href="edit_admin.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" title="Sửa"><i class="glyphicon glyphicon-pencil "></i></a>
						<a href="del_admin.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
"
							 onclick="return confirm('Bạn có chắc muốn xóa loại sản phẩm mã <?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
 hay không?') "
						 title="Xóa"><i class="glyphicon glyphicon-trash"></i></a>

					</td>
				</tr>
				<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
				<?php }?>
			</tbody>
		</table>
		
	

		

	
	<?php }
}
?>