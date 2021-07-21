<?php /* Smarty version 3.1.24, created on 2016-03-18 05:27:30
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_danhmuc/ht_danhmuc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2291556eb83b28923e8_94130176%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eae68c07c91296bba69dc7fa357ffcdd4c0c0b92' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_danhmuc/ht_danhmuc.tpl',
      1 => 1458275208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2291556eb83b28923e8_94130176',
  'variables' => 
  array (
    'dm' => 0,
    'dmsp' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb83b2955918_24977856',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb83b2955918_24977856')) {
function content_56eb83b2955918_24977856 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2291556eb83b28923e8_94130176';
?>
<ol class="breadcrumb">
    <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
    <li class="active"><strong>Quản lí danh mục</strong></li>
</ol>
<div class="col-md-10 col-md-push-1">
   <legend ><h3 class="text-center text-success"><span class="glyphicon glyphicon-th"></span> BẢNG LOẠI</h3>
    <p><a href="add_danhmuc.php"><i class="glyphicon glyphicon-plus"></i>Thêm danh mục</a></p>
   </legend>

   	<div class="table-responsive">
        	<table class="table table-hover table-bordered">
            	<thead>
                <tr class="active">
               		<th class="text-center">ID</th>
                    <th class="text-center">TÊN</th>
                    <th class="text-center">P_ID</th>
                    <th class="text-center">DATE_UP</th>
                     <th class="text-center">NGÀY SỬA</th>
                    <th class="text-center">STATUS</th>
                   
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($_smarty_tpl->tpl_vars['dm']->value)) {?>  
                <?php
$_from = $_smarty_tpl->tpl_vars['dm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['dmsp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['dmsp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dmsp']->value) {
$_smarty_tpl->tpl_vars['dmsp']->_loop = true;
$foreach_dmsp_Sav = $_smarty_tpl->tpl_vars['dmsp'];
?>  
                <tr>
                	<td><?php echo $_smarty_tpl->tpl_vars['dmsp']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dmsp']->value->name;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dmsp']->value->p_id;?>
</td>
                    
                    <td><?php echo $_smarty_tpl->tpl_vars['dmsp']->value->date_up;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dmsp']->value->date_edit;?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['dmsp']->value->status == 1) {
echo "Hiển thị";
} elseif (!($_smarty_tpl->tpl_vars['dmsp']->value->status == 1)) {
echo "Ẩn";
}?></td>
                    <td> <p align="center"><a href="edit_danhmuc.php?id=<?php echo $_smarty_tpl->tpl_vars['dmsp']->value->id;?>
"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="del_danhmuc.php?id=<?php echo $_smarty_tpl->tpl_vars['dmsp']->value->id;?>
" onClick="return confirm('Bạn có chắc chắn xóa không ?')"><span class="glyphicon glyphicon-trash"></span></a></p>
                    </td>
                </tr>
                <?php
$_smarty_tpl->tpl_vars['dmsp'] = $foreach_dmsp_Sav;
}
?>
                <?php }?>
            </tbody>
            </table>
         </div>
        <div class="row text-center">
    <p>
    <?php echo $_smarty_tpl->tpl_vars['listpage']->value;?>

</p>
</div>

</div>
<?php }
}
?>