<?php /* Smarty version 3.1.24, created on 2016-03-16 09:09:03
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_slider/sua_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:768656e9149f18d973_13355506%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5249ef6680a7c4a2b58fd054f8c2fa1588941c2e' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_slider/sua_slider.tpl',
      1 => 1458115636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '768656e9149f18d973_13355506',
  'variables' => 
  array (
    'c_sl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56e9149f22dc21_08391961',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e9149f22dc21_08391961')) {
function content_56e9149f22dc21_08391961 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '768656e9149f18d973_13355506';
?>
<ol class="breadcrumb">
  <li><strong><a href="admin.php">Trang tổng quan</a></strong></li>
  <li class="active"><strong>Cập nhật slide</strong></li>
</ol>
<div class="col-md-10 col-md-push-1">
    <h1></h1>
<legend class="text-center text-success"><strong><span class="glyphicon glyphicon-pencil"></span> THÊM LOẠI</strong></legend>
        <form class="vertical form" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label for="exampleInputEmail1">Id</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $_smarty_tpl->tpl_vars['c_sl']->value->id;?>
" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Chọn ảnh</label>
            <input type="file" id="exampleInputFile" name="image">
          </div>
           <b>Trạng thái</b>
          <div class="form-group">

          <select name="status" id="">
              <option value="0" <?php if (($_smarty_tpl->tpl_vars['c_sl']->value->status == 0)) {?>selected<?php }?>>Ẩn</option>
              <option value="1" <?php if (($_smarty_tpl->tpl_vars['c_sl']->value->status == 1)) {?>selected<?php }?>>Hiển thi</option>
          </select>
      </div>
          <b>Bắt đầu</b>
          <div class="checkbox">
            <label>
              <input name="ma_sl" type="checkbox" <?php if (($_smarty_tpl->tpl_vars['c_sl']->value->ma_sl == 3)) {?>checked<?php }?>> Slider xuất hiện đầu 
            </label>
          </div>
          <input type="submit" name="sm" class="btn btn-success" value="Cập nhật">
          <button type="submit" class="btn btn-info">Nhập lại</button> 
        </form>
</div>
</div>
<?php }
}
?>