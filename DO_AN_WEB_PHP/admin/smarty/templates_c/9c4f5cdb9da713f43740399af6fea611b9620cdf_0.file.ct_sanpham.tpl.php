<?php /* Smarty version 3.1.24, created on 2016-03-18 05:27:22
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_sanpham/ct_sanpham.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1558856eb83aab10770_18356066%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c4f5cdb9da713f43740399af6fea611b9620cdf' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_sanpham/ct_sanpham.tpl',
      1 => 1458275146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1558856eb83aab10770_18356066',
  'variables' => 
  array (
    'sp' => 0,
    'mang' => 0,
    'img_same' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb83aac683c8_51300928',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb83aac683c8_51300928')) {
function content_56eb83aac683c8_51300928 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1558856eb83aab10770_18356066';
?>
<ol class="breadcrumb">
  <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
  <li class="active"><strong>Chi tiết sản phẩm</strong></li>
</ol>
<div class="col-md-12">
	<legend><h3  class="text-center text-success"><span class="glyphicon glyphicon-edit"></span> Chi tiết sản phẩm</h3></legend>
	<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Thông số</a></li>
  <li><a data-toggle="tab" href="#menu1">Hình ảnh</a></li>
  <li><a data-toggle="tab" href="#menu2">Mô tả</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  	<?php if (isset($_smarty_tpl->tpl_vars['sp']->value)) {?>
    <h3>Thông số:</h3>
    <p>ID:<strong><?php echo $_smarty_tpl->tpl_vars['sp']->value->id;?>
</strong></p>
    <p>Tên sản phẩm:<strong><?php echo $_smarty_tpl->tpl_vars['sp']->value->name;?>
</strong></p>
    <p>Thuộc danh mục:<strong>
      <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 3) {
echo "Cây ăn quả";
}?>
      <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 4) {
echo "Cây ăn lá";
}?>
      <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 5) {
echo "Cây ăn củ";
}?>
      <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 6) {
echo "Cây cảnh";
}?>
      <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 7) {
echo "Bình tưới";
}?>
      <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 8) {
echo "Giá thể";
}?>
      <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 9) {
echo "Đất trồng";
}?>
      <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 10) {
echo "Chậu trồng";
}?>
    </strong></p>
    <p>Giá:<strong><?php echo $_smarty_tpl->tpl_vars['sp']->value->price;?>
</strong></p>
    <p><span>Giảm giá:<strong><?php if (($_smarty_tpl->tpl_vars['sp']->value->sale) == 1) {
echo "Có";
}?> <?php if (($_smarty_tpl->tpl_vars['sp']->value->sale) == 0) {
echo "Không";
}?></span></strong> &nbsp; &nbsp;  <span>Giá sale:<strong><?php echo $_smarty_tpl->tpl_vars['sp']->value->sale_price;?>
</span></strong></p>
    <p><strong>Bán theo:</strong><?php if (($_smarty_tpl->tpl_vars['sp']->value->manny == 0)) {?>Gói<?php } elseif (($_smarty_tpl->tpl_vars['sp']->value->manny == 1)) {?>Hạt<?php } else { ?>Sản phẩm<?php }?></p>
    <p>Đặc biệt:<strong><?php if (($_smarty_tpl->tpl_vars['sp']->value->special) == 1) {
echo "Có";
}?> <?php if (($_smarty_tpl->tpl_vars['sp']->value->special) == 0) {
echo "Không";
}?></strong>&nbsp; &nbsp;
    <span>Hiển thị:<strong><?php if (($_smarty_tpl->tpl_vars['sp']->value->status) == 1) {
echo "Có";
}?> <?php if (($_smarty_tpl->tpl_vars['sp']->value->status) == 0) {
echo "Không";
}?></strong></span>
    </p>
    <p>Ngày đăng:<strong><?php echo $_smarty_tpl->tpl_vars['sp']->value->date_up;?>
</strong></p>
    <p>Ngày sửa:<strong><?php echo $_smarty_tpl->tpl_vars['sp']->value->date_edit;?>
</strong></p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Hình ảnh</h3>
    <p>Hình ảnh chính</p>
    <img width="200px" height="200px" src="../public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['sp']->value->image;?>
" alt="">
    <p>Ảnh liên quan</p>
     <?php
$_from = $_smarty_tpl->tpl_vars['mang']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['img_same'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['img_same']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['img_same']->value) {
$_smarty_tpl->tpl_vars['img_same']->_loop = true;
$foreach_img_same_Sav = $_smarty_tpl->tpl_vars['img_same'];
?>
        <?php if ($_smarty_tpl->tpl_vars['img_same']->value != '') {?>
        <img width="200px" height="200px" src="../public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['img_same']->value;?>
" alt="">
        <?php }?>
     <?php
$_smarty_tpl->tpl_vars['img_same'] = $foreach_img_same_Sav;
}
?>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Mô tả</h3>
    <p><strong>Mô tả ngắn:</strong><?php echo $_smarty_tpl->tpl_vars['sp']->value->s_describe;?>
</p>
    <p><strong>Mô tả chi tiết:</strong><?php echo $_smarty_tpl->tpl_vars['sp']->value->describe;?>
</p>
    <?php }?>
  </div>
</div>
</div><?php }
}
?>