<?php /* Smarty version 3.1.24, created on 2016-03-18 06:45:18
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_giohang/ct_gh.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2260856eb95ee6ffdf9_24778893%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b8bdf74bcd53083c843bb2fc35c9241202122b5' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_giohang/ct_gh.tpl',
      1 => 1458275182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2260856eb95ee6ffdf9_24778893',
  'variables' => 
  array (
    'ctgh' => 0,
    'ct' => 0,
    'ctkh' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb95ee7f9e32_72541337',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb95ee7f9e32_72541337')) {
function content_56eb95ee7f9e32_72541337 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2260856eb95ee6ffdf9_24778893';
?>
<ol class="breadcrumb">
  <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
  <li class="active"><strong>Chi tiết hóa đơn</strong></li>
</ol>
<div class="col-md-12">
	<legend><h3  class="text-center text-success"><span class="glyphicon glyphicon-edit"></span> Chi tiết sản phẩm</h3></legend>
	<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Thông số</a></li>
  <li><a data-toggle="tab" href="#menu1">Thông tin khách hàng</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
     <div class="col-md-9 col-md-push-1">
      <h1></h1>
  	<table class="table table-hover table-bordered">
              <thead>
                <tr class="active">
                    <th class="text-center">Sản phẩm</th>
                    <th class="text-center">Hình ảnh</th>
                    <th class="text-center">Số lượng</th>
                    <th class="text-center">Thành tiền</th>
                </tr>
                </thead>
                <tbody>
                  <?php if (isset($_smarty_tpl->tpl_vars['ctgh']->value)) {?>
                  <?php
$_from = $_smarty_tpl->tpl_vars['ctgh']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ct'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ct']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
$_smarty_tpl->tpl_vars['ct']->_loop = true;
$foreach_ct_Sav = $_smarty_tpl->tpl_vars['ct'];
?>
                <tr>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['ct']->value->pr_name;?>
</td>
                    <td class="text-center"><img src="../public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['ct']->value->pr_image;?>
" alt="" width="100px" height="100px"></td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['ct']->value->pb_count;?>
</td>
                    <td class="text-center"><?php echo number_format($_smarty_tpl->tpl_vars['ct']->value->pb_cprice);?>
 vnđ</td>
                </tr>
                <?php
$_smarty_tpl->tpl_vars['ct'] = $foreach_ct_Sav;
}
?>
                <?php }?>
            </tbody>
            </table>
          </div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <div class="col-md-8 col-md-push-1">
      <form  action="" method="POST" role="form">
                    <h1></h1>
                    <legend style="color:#449839">Thông tin khách hàng</legend>
                    <div class="form-group">
                        <label for="">Họ tên khách hàng</label>
                        <p id="err_name"></p>
                        <?php echo $_smarty_tpl->tpl_vars['ctkh']->value->cus_name;?>

                    </div>
                    <div class="form-group">
                        <label for="">Đại chỉ email</label>
                        <p id="err_email"></p>
                        <?php echo $_smarty_tpl->tpl_vars['ctkh']->value->cus_email;?>

                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <p id="err_phone"></p>
                        <?php echo $_smarty_tpl->tpl_vars['ctkh']->value->cus_phone;?>

                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ gửi hàng </label>
                        <p id="err_address"></p>
                        <textarea name="address" id="address" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['ctkh']->value->cus_address;?>
</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Ghi chú</label>
                        <p id="err_note"></p>
                        <?php echo $_smarty_tpl->tpl_vars['ctkh']->value->cus_note;?>

                    </div>
    </form>
    </div>
       
  </div>
</div>
</div><?php }
}
?>