<?php /* Smarty version 3.1.24, created on 2016-03-18 05:27:29
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_phanhoi/ht_phanhoi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1438656eb83b1746d86_47863346%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69ebdb5ddc3551f09526a87294b326396c5d2538' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_phanhoi/ht_phanhoi.tpl',
      1 => 1458275156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1438656eb83b1746d86_47863346',
  'variables' => 
  array (
    'ht_ph' => 0,
    'row' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb83b17e31b0_27881039',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb83b17e31b0_27881039')) {
function content_56eb83b17e31b0_27881039 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1438656eb83b1746d86_47863346';
?>
<ol class="breadcrumb">
	<li><strong><a href="index.php">Trang tổng quan</a></strong></li>
	<li class="active"><strong>Quản lí phản hồi</strong></li>
</ol>
<div class="col-md-12">
<legend><h1 class="text-center" style="color:#3C8E51"><small style="color:#3C8E51"><i class="glyphicon glyphicon-th-list"></i></small> Danh sách phản hồi</h1></legend>
	<table class="table table-hover text-left">
		<thead>
			<tr>
				<th class="text-center" >ID</th>
				<th class="text-center" >Tên</th>
				<th class="text-center" >Email</th>
				<th class="text-center" >Số đt</th>
				<th class="text-center" >Phản hồi</th>
				<th class="text-center" >Ngày gửi</th>
				<th class="text-center" >Chức năng</th>
			</tr>
		</thead>
		<tbody>
			
			<?php if (isset($_smarty_tpl->tpl_vars['ht_ph']->value)) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['ht_ph']->value;
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
					<td class="text-center" ><?php echo $_smarty_tpl->tpl_vars['row']->value->name;?>
</td>
					<td class="text-center" ><?php echo $_smarty_tpl->tpl_vars['row']->value->email;?>
</td>
					<td class="text-center" ><?php echo $_smarty_tpl->tpl_vars['row']->value->phone;?>
</td>
					<td class="text-center" ><?php echo $_smarty_tpl->tpl_vars['row']->value->feedback;?>
</td>
					<td class="text-center" ><?php echo $_smarty_tpl->tpl_vars['row']->value->date_up;?>
</td>
					<td class="text-center" >
						<a href="del_phanhoi.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
"
							 onclick="return confirm('Bạn có chắc muốn xóa sản phẩm <?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
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
		<div class="row text-center"><?php echo $_smarty_tpl->tpl_vars['listpage']->value;?>
</div>	
</div>
<?php }
}
?>