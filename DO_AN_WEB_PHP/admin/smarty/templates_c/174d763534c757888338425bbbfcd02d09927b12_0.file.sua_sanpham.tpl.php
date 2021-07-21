<?php /* Smarty version 3.1.24, created on 2016-03-18 05:46:06
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_sanpham/sua_sanpham.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:182856eb880ee8d352_86042798%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '174d763534c757888338425bbbfcd02d09927b12' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_sanpham/sua_sanpham.tpl',
      1 => 1458275128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182856eb880ee8d352_86042798',
  'variables' => 
  array (
    'sp' => 0,
    'err_anh' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb880f0ae735_47593663',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb880f0ae735_47593663')) {
function content_56eb880f0ae735_47593663 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '182856eb880ee8d352_86042798';
?>
<?php echo '<script'; ?>
>
    function kiemtra(){
    var name=document.getElementById('name');
    if (name.value==""){
    document.getElementById("err_name").innerHTML="Bạn đang để trống tên sản phẩm";
    name.focus();
    return false;
  }
  else{
    document.getElementById("err_name").innerHTML="";
  }
  //Mô tả ngăn
  var s_describe=document.getElementById('s_describe');
    if (s_describe.value==""){
    document.getElementById("err_s_describe").innerHTML="Bạn đang để trống mô tả sơ lược";
    s_describe.focus();
    return false;
  }
  else{
    document.getElementById("err_s_describe").innerHTML="";
  }
  //Giá
  var price=document.getElementById('price');
    if (price.value==""){
    document.getElementById("err_price").innerHTML="Bạn đang để trống giá sản phẩm";
    price.focus();
    return false;
  }
  else{
    document.getElementById("err_price").innerHTML="";
  }
  //from
  var from=document.getElementById('from');
    if (from.value==""){
    document.getElementById("err_from").innerHTML="Bạn đang để trống nơi nhập khẩu";
    from.focus();
    return false;
  }
  else{
    document.getElementById("err_from").innerHTML="";
  }
  //Mota
  // var ckeditor=document.getElementById('ckeditor');
  //   if (ckeditor.value==""){
  //   document.getElementById("err_ckeditor").innerHTML="Bạn đang để trống Mô tả";
  //   ckeditor.focus();
  //   return false;
  // }
  // else{
  //   document.getElementById("err_ckeditor").innerHTML="";
  // }
 
   return true;

}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<ol class="breadcrumb">
  <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
  <li class="active"><strong>Cập nhật sản phẩm</strong></li>
</ol>
<legend><h3  class="text-center text-success"><span class="glyphicon glyphicon-edit"></span>Cập nhật</h3></legend>
  <p class="text-right">
    <form action="" method="post" enctype="multipart/form-data">
  	<input type="submit" name="sm" class="btn btn-success" value="Cập nhật" onclick="return kiemtra()">
	<button type="reset" class="btn btn-info">Nhập lại</button>
  </p>
  
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Thông số</a></li>
  <li><a data-toggle="tab" href="#menu1">Hình ảnh</a></li>
  <li><a data-toggle="tab" href="#menu2">Mô tả</a></li>
</ul>
<div class="tab-content">
<!-- <div class="col-md-8 col-md-push-2"> -->
	<div  id="home" class="tab-pane fade in active" >
	<h3>Thêm thông số</h3>
	<div class="form-group">
    <label for="exampleInputEmail1">Tên sản phẩm</label>
    <p style="color:red" id="err_name"></p>
    <input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->name;?>
" class="form-control" >
  	</div>
  	<div class="form-group">
     <p style="color:red" id="err_s_describe"></p> 
    <label for="exampleInputPassword1">Mô tả ngắn:</label>
    <input type="text" id="s_describe" name="s_describe"value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->s_describe;?>
" class="form-control">
  </div>
   <label for="exampleInputEmail1">Danh mục:</label>
  <select class="form-control" id="c_id" name="c_id">
  	<option value="3" <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 3) {
echo "selected";
}?>>Cây ăn quả</option>
  	<option value="4" <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 4) {
echo "selected";
}?>>Cây ăn lá</option>
  	<option value="5" <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 5) {
echo "selected";
}?>>Cây ăn củ</option>
  	<option value="6" <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 6) {
echo "selected";
}?>>Cây cảnh</option>
  	<option value="7" <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 7) {
echo "selected";
}?>>Bình tưới</option>
  	<option value="8" <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 8) {
echo "selected";
}?>>Giá thể</option>
  	<option value="9" <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 9) {
echo "selected";
}?>>Đất trồng</option>
  	<option value="10" <?php if (($_smarty_tpl->tpl_vars['sp']->value->c_id) == 10) {
echo "selected";
}?>>Chậu trồng</option>
  </select>
  <div class="form-group">
    <p style="color:red" id="err_price"></p>
    <label for="exampleInputPassword1">Giá:</label>
    <input type="number" class="form-control" id="price" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->price;?>
" name="price" min="0">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Giá sale:</label>
    <input type="number" class="form-control" id="sale_price" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->sale_price;?>
" name="sale_price" min="0">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Chọn ảnh chính:</label>
    <!-- <p style="color:red" id="err_image"><?php echo $_smarty_tpl->tpl_vars['err_anh']->value;?>
</p> -->
    <input type="file" id="image" name="image" value="">
    </div>
  
  	<label for="">Lựa chọn</label>
  	<br>
    <label>
      <input type="checkbox" id="sale" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->sale;?>
" name="sale" <?php if (($_smarty_tpl->tpl_vars['sp']->value->sale) == 1) {
echo "checked";
}?>>
      Giảm giá
    </label>
    <label>
      <input type="checkbox" id="special" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->specail;?>
" name="special" <?php if (($_smarty_tpl->tpl_vars['sp']->value->special) == 1) {
echo "checked";
}?>>
      Đặc biệt
    </label>
    <label>
      <input type="checkbox" id="status" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->status;?>
" name="status" <?php if (($_smarty_tpl->tpl_vars['sp']->value->status) == 1) {
echo "checked";
}?>>
      Hiển thị
    </label>
    <div class="form-group">
    <p style="color:red" id="err_from"></p>  
    <label for="exampleInputEmail1">Nhập khẩu:</label>
    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->from;?>
" id="from" name="from" >
  </div>
 <label for="">Bán theo:</label>
  <select class="form-control" id="manny" name="manny">
   	<option value="0" <?php if (($_smarty_tpl->tpl_vars['sp']->value->from) == 0) {
echo "selected";
}?> >Hạt</option>
  	<option value="1" <?php if (($_smarty_tpl->tpl_vars['sp']->value->from) == 1) {
echo "selected";
}?> >Gói</option>
    <option value="3" <?php if (($_smarty_tpl->tpl_vars['sp']->value->from) == 3) {
echo "selected";
}?> >Sản phẩm</option>
  </select>
</div>


<div id="menu2" class="tab-pane fade">
	<label for="ckeditor">Mô tả</label>
  <p style="color:red" id="err_ckeditor"></p>  
	<textarea id="ckeditor" class="ckeditor" name="ckeditor"> <?php echo $_smarty_tpl->tpl_vars['sp']->value->describe;?>
</textarea>
	<?php echo '<script'; ?>
 language="javascript">
	ckeditor.replace("ckeditor");
	<?php echo '</script'; ?>
>
	</div>
<div id="menu1" class="tab-pane fade">
	<h2>Chọn thêm file ảnh</h2>
	<div class="form-group">
    <label for="exampleInputFile">Chọn ảnh 1:</label>
    <input type="file" id="image1" name="image1">
    </div>
  <div class="form-group">
    <label for="exampleInputFile">Chọn ảnh 2:</label>
    <input type="file" id="image2" name="image2">
    </div>
  <div class="form-group">
    <label for="exampleInputFile">Chọn ảnh 3:</label>
    <input type="file" id="image3" name="image3">
    </div>
  <div class="form-group">
    <label for="exampleInputFile">Chọn ảnh 4:</label>
    <input type="file" id="image4" name="image4">
    </div>
</div>	
</div>
</form>
</div>
<?php }
}
?>