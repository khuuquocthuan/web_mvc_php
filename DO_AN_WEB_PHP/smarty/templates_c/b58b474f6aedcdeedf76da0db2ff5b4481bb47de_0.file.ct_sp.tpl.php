<?php /* Smarty version 3.1.24, created on 2016-03-18 05:04:52
         compiled from "C:/xampp/htdocs/DO_AN/views/sanpham/ct_sp.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2648656eb7e64001691_03931005%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b58b474f6aedcdeedf76da0db2ff5b4481bb47de' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/views/sanpham/ct_sp.tpl',
      1 => 1458209984,
      2 => 'file',
    ),
    '5f3215f1fe067472a2b0d522fb2caf3ad2c827ac' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/views/sanpham/sp_content_left.tpl',
      1 => 1458273890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2648656eb7e64001691_03931005',
  'variables' => 
  array (
    'ct_sp' => 0,
    'img_child' => 0,
    'img_same' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb7e6419f7f8_98294716',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb7e6419f7f8_98294716')) {
function content_56eb7e6419f7f8_98294716 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2648656eb7e64001691_03931005';
/*  Call merged included template "views/sanpham/sp_content_left.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("views/sanpham/sp_content_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '48456eb7e6407e6b0_44512947', 'content_56eb7e6407a838_48199671');
/*  End of included template "views/sanpham/sp_content_left.tpl" */?>

<div class="col-md-8 col-md-push-1">
	<div class="row">
		<div class="col-sm-12 col-md-12" style=";">
			<h4 class="text-center" style="font-weight:bold;line-height:40px;background:rgba(204,204,204,0.5);box-shadow:1px 2px 3px">Chi tiết sản phẩm</h4>
		</div>
	</div>
	<div class="row">
		<?php if (isset($_smarty_tpl->tpl_vars['ct_sp']->value)) {?>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->name;?>
" class="img-responsive">
				<h3><?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->name;?>
</h3>
				<p>
					<?php if ($_smarty_tpl->tpl_vars['ct_sp']->value->sale == 1) {?><p><span ><s>Giá cũ:<?php echo number_format($_smarty_tpl->tpl_vars['ct_sp']->value->price);?>
 vnđ</s></span>
		            </p>
		            <p>Giá sale:<?php echo number_format($_smarty_tpl->tpl_vars['ct_sp']->value->sale_price);?>
 vnđ

		            <?php }?>
		            <?php if ($_smarty_tpl->tpl_vars['ct_sp']->value->sale == 0) {?>
		            <p>Giá:<?php echo number_format($_smarty_tpl->tpl_vars['ct_sp']->value->price);?>
 vnđ</p>
		            <p>&nbsp;</p>
		            <?php }?>
				</p>
				<p>
					<input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->id;?>
" name="dongia" value="<?php if (($_smarty_tpl->tpl_vars['ct_sp']->value->sale == 0)) {
echo $_smarty_tpl->tpl_vars['ct_sp']->value->price;
} else {
echo $_smarty_tpl->tpl_vars['ct_sp']->value->sale_price;
}?>"/>
		              <span>Số lượng:</span><input type="text" value="1" size="2" name="soluong" id="soluong<?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->id;?>
" /></p>
		              <a class="btn btn-success button-1" name="id" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->id;?>
" >Mua ngay</a>
					<a href="#" class="btn btn-default" role="button">Xem thêm</a></p>
				<div class="caption">
					<?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->s_describe;?>

				</div>
			</div>
		</div>
		<div class="col-md-8">
			<ul class="nav nav-tabs" id="ctsp">
				<li class="active"><a data-toggle="tab" href="#home">Thông số</a></li>
				<li><a data-toggle="tab" href="#menu1">Chi tiết</a></li>
				<li><a data-toggle="tab" href="#menu2">Hình ảnh</a></li>
			</ul>

			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<h1></h1>
					<p><strong>Tên sp:</strong><?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->name;?>
</p>
					<p><strong>Bán theo:</strong><?php if (($_smarty_tpl->tpl_vars['ct_sp']->value->manny == 0)) {?>Gói<?php } elseif (($_smarty_tpl->tpl_vars['ct_sp']->value->manny == 1)) {?>Hạt<?php } else { ?>Sản phẩm<?php }?></p>
					<p><strong>Giá:</strong><?php echo number_format($_smarty_tpl->tpl_vars['ct_sp']->value->price);?>
 vnđ/1<?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->manny;?>
</p>
					<p><strong>Ngày Đăng:</strong><?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->date_up;?>
</p>
					<p><strong>Mô tả ngắn:</strong><?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->s_describe;?>
</p>
					<p><strong>Nhập khẩu:</strong>Ấn Độ</p>
					
				</div>
				<div id="menu1" class="tab-pane fade">
					<h1></h1>
					<h4>
						<?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->describe;?>

					</h4>
				</div>
				<div id="menu2" class="tab-pane fade">
					<h1></h1>
					<?php
$_from = $_smarty_tpl->tpl_vars['img_child']->value;
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
				       <img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['img_same']->value;?>
" alt="" width="100px" height="100px" data-toggle="modal" 
				       data-target="#c<?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->id;?>
">
				     <?php }?>
				     <?php
$_smarty_tpl->tpl_vars['img_same'] = $foreach_img_same_Sav;
}
?>
				        <div class="modal fade bs-example-modal-sm" id="c<?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->id;?>
" role="dialog">
						    <div class="modal-dialog">
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						        </div>
						        <div class="modal-body">
					<?php
$_from = $_smarty_tpl->tpl_vars['img_child']->value;
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
						          <img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['img_same']->value;?>
" alt="" width="100%" height="400px">
					 <?php }?>
				     <?php
$_smarty_tpl->tpl_vars['img_same'] = $foreach_img_same_Sav;
}
?>
				     </div>
					</div>
					</div>
					</div>
					<!-- <img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['img_child']->value["0"];?>
" alt="" width="100px" height="100px" data-toggle="modal" data-target="#myModal">
					<img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['img_child']->value["1"];?>
" alt="" width="100px" height="100px">
					<img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['img_child']->value["2"];?>
" alt="" width="100px" height="100px">
					<img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['img_child']->value["3"];?>
" alt="" width="100px" height="100px"> -->
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="fb-comments" data-href="http://localhost:97/DO_AN/index_sanpham.php?id=<?php echo $_smarty_tpl->tpl_vars['ct_sp']->value->id;?>
" data-width="100%" data-numposts="15"></div>
	</div>
</div>
<?php }?>
<style>
#ctsp li:hover{
	background: transparent !important;
}
#ctsp li a:hover{
	background: transparent !important;
}
#ctsp a{
	color: black;
}
</style><?php }
}
?><?php
/*%%SmartyHeaderCode:48456eb7e6407e6b0_44512947%%*/
if ($_valid && !is_callable('content_56eb7e6407a838_48199671')) {
function content_56eb7e6407a838_48199671 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '48456eb7e6407e6b0_44512947';
?>
<div class="col-sm-12 col-md-2" style="margin-right:50px;float:right" >
    <!-- First Featurette -->
    <div class="row text-center">
        <style>
        .nav-tabs li:hover{
            background-color:#32B63B!important;
        }
        </style>
           
        <div class="row">
          <div class="col-sm-12 col-md-12" style="">
            <h4 class="text-center" style="font-weight:bold;line-height:40px;background:rgba(204,204,204,0.5);box-shadow:1px 2px 3px">Danh mục sản phẩm</h4>
        </div>
    </div>
<div class="row text-center">
    <div class="col-sm-12" >
        <ul class="nav nav-pills nav-stacked" id="cate">
            <h2>Cây trồng</h2>
           <?php if (isset($_smarty_tpl->tpl_vars['menu1']->value)) {?>
           <?php
$_from = $_smarty_tpl->tpl_vars['menu1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['menu']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
$foreach_menu_Sav = $_smarty_tpl->tpl_vars['menu'];
?>
            <li style="border-bottom:1px dashed #5FB263"><a href="index_loaisp.php?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value->id;?>
" >
                <strong><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</strong>
            </a></li>
            <?php
$_smarty_tpl->tpl_vars['menu'] = $foreach_menu_Sav;
}
?>
            <?php }?>
        </ul>

        <ul class="nav nav-pills nav-stacked text-center">
            <h2>Dụng cụ</h2>
            <?php if (isset($_smarty_tpl->tpl_vars['menu2']->value)) {?>
           <?php
$_from = $_smarty_tpl->tpl_vars['menu2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['menudc'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['menudc']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['menudc']->value) {
$_smarty_tpl->tpl_vars['menudc']->_loop = true;
$foreach_menudc_Sav = $_smarty_tpl->tpl_vars['menudc'];
?>
            <li style="border-bottom:1px dashed #5FB263"><a href="index_loaisp.php?id=<?php echo $_smarty_tpl->tpl_vars['menudc']->value->id;?>
" >
                <strong><?php echo $_smarty_tpl->tpl_vars['menudc']->value->name;?>
</strong>
            </a></li>
            <?php
$_smarty_tpl->tpl_vars['menudc'] = $foreach_menudc_Sav;
}
?>
            <?php }?>
    </ul>

</div>
</div>
<h1></h1>
<div class="row" style="margin-left:10px">
    <!-- <div class="panel panel-success">
        <div class="panel-heading">Lọc sản phẩm</div>
        <div class="panel-body">
            <select name="" id="" class="form-control">
                <option value="1">Mới nhất</option>
                <option value="2">Giá giảm dần</option>
            </select>
        </div>
    </div> -->
</div>
</div>
</div>

<style>
.nav-pills{

    text-align:left;
}
.nav-pills a i{
    color: #41DA31;

}
    /* .nav-pills a {
        font-size: 16px; 
        }*/
        .nav-pills a{
            color:#1B0A0A !important;

        }
        .nav-stacked li{
            bottom: 1px dotted #10AE2E !important;
        }
</style>










<?php
/*/%%SmartyNocache:48456eb7e6407e6b0_44512947%%*/
}
}
?>