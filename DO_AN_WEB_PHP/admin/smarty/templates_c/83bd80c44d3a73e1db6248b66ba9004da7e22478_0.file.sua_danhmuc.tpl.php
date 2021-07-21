<?php /* Smarty version 3.1.24, created on 2016-03-18 05:11:31
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_danhmuc/sua_danhmuc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1834256eb7ff3121d63_61854633%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83bd80c44d3a73e1db6248b66ba9004da7e22478' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_danhmuc/sua_danhmuc.tpl',
      1 => 1458115986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1834256eb7ff3121d63_61854633',
  'variables' => 
  array (
    'doc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb7ff323b1a8_14491294',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb7ff323b1a8_14491294')) {
function content_56eb7ff323b1a8_14491294 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1834256eb7ff3121d63_61854633';
?>
<?php echo '<script'; ?>
>
    function kiemtra(){
        var name=document.getElementById('name');
        if (name.value=="") {
            document.getElementById("err_name").innerHTML="Tên không được rỗng";
            name.focus();
            return false;
        }
        else
             document.getElementById("err_name").innerHTML="";
            return true;

    }

<?php echo '</script'; ?>
>
<ol class="breadcrumb">
    <li><strong><a href="admin.php">Trang tổng quan</a></strong></li>
    <li class="active"><strong>Cập nhật danh mục</strong></li>
</ol>
<div class="col-md-10 col-md-push-1">
<legend class="text-center text-success"><strong><span class="glyphicon glyphicon-pencil"></span> THÊM LOẠI</strong></legend>
        <form class="vertical form" action="" method="Post">
             <div class="form-group">
                <label class="control-label col-md-6">Id</label>
                <div class="col-md-12">
                    <input type="text" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
" readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-6">P_id</label>
                <div class="col-md-12">
                <select name="p_id" class="form-control">
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['doc']->value->p_id == 1) {
echo "selected";
}?>>Cây trồng</option>'
                     <option value="2" <?php if ($_smarty_tpl->tpl_vars['doc']->value->p_id == 2) {
echo "selected";
}?>>Dụng cụ</option>
                     <option value="0" <?php if ($_smarty_tpl->tpl_vars['doc']->value->p_id == 0) {
echo "selected";
}?>>Sản phẩm</option>
                </select>
            </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-6">Tên loại sản phẩm</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['doc']->value->name;?>
" >
                </div>
                <p style="color:red" id="err_name"></p>
            </div>
            <div class="form-group">
                <label class="control-label col-md-6">Trạng thái</label>
                <div class="col-md-12">
                    <select name="status" class="form-control">
                     <option value="0" <?php if ($_smarty_tpl->tpl_vars['doc']->value->status == 1) {
echo "selected";
}?>>Ẩn</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['doc']->value->status == 1) {
echo "selected";
}?>>Hiển thị</option>'
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">    
                    <input type="submit" name="sm"  style="margin-top:20px;" class="btn btn-primary" value="Cập nhật" onclick="return kiemtra()">
                    <button type="reset"  style="margin-top:20px;" class="btn btn-primary">Nhập lại</button>
                </div>
            </div>    
</form>
</div>
<?php }
}
?>