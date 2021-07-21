<?php /* Smarty version 3.1.24, created on 2016-03-18 05:01:41
         compiled from "C:/xampp/htdocs/DO_AN/views/sanpham/dc_content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1896156eb7da5a7aab8_30367188%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4392cef7e9b9e48c3eb170461c913af253cc831' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/views/sanpham/dc_content.tpl',
      1 => 1458209896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1896156eb7da5a7aab8_30367188',
  'variables' => 
  array (
    'ds_dc' => 0,
    'ds_dcn' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb7da5bb7185_19538248',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb7da5bb7185_19538248')) {
function content_56eb7da5bb7185_19538248 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1896156eb7da5a7aab8_30367188';
?>
<div class="col-md-9" style="margin-left:10px">
    <div class="row">
      <div class="col-sm-12 col-md-12" style=";">
          <h4 class="text-center" style="font-weight:bold;line-height:40px;background:rgba(204,204,204,0.5);box-shadow:1px 2px 3px">Danh sách sản phẩm</h4>
       <!--  <ul class="nav nav-tabs" style="border-color:#32B63B;color:#fff;margin:10px 0px" >
          <li role="presentation"  style="background-color:#32B63B;padding:5px;border-radius:5px 5px 0 0"><h4>Sản phẩm</h4></li>
        </ul> -->
      </div>
    </div>
    <h1></h1>
   <div class="row">
       <?php if (isset($_smarty_tpl->tpl_vars['ds_dc']->value)) {?>
      <?php
$_from = $_smarty_tpl->tpl_vars['ds_dc']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ds_dcn'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ds_dcn']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ds_dcn']->value) {
$_smarty_tpl->tpl_vars['ds_dcn']->_loop = true;
$foreach_ds_dcn_Sav = $_smarty_tpl->tpl_vars['ds_dcn'];
?>
      <div class="col-xs-12 col-sm-12  col-md-3">
        <div class="thumbnail">
          <img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['ds_dcn']->value->image;?>
" alt="Bí Ngô" class="img-responsive">
          <h3><?php echo $_smarty_tpl->tpl_vars['ds_dcn']->value->name;?>
</h3>
          <p>
           <?php if ($_smarty_tpl->tpl_vars['ds_dcn']->value->sale == 1) {?><p><span ><s>Giá cũ:<?php echo number_format($_smarty_tpl->tpl_vars['ds_dcn']->value->price);?>
 vnđ</s></span>
            </p>
            <p>Giá sale:<?php echo number_format($_smarty_tpl->tpl_vars['ds_dcn']->value->sale_price);?>
 vnđ</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ds_dcn']->value->sale == 0) {?>
            <p>Giá:<?php echo number_format($_smarty_tpl->tpl_vars['ds_dcn']->value->price);?>
 vnđ</p>
            <p>&nbsp;</p>
            <?php }?>
          </p>
            <p><input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['ds_dcn']->value->id;?>
" name="dongia" value="<?php if (($_smarty_tpl->tpl_vars['ds_dcn']->value->sale == 0)) {
echo $_smarty_tpl->tpl_vars['ds_dcn']->value->price;
} else {
echo $_smarty_tpl->tpl_vars['ds_dcn']->value->sale_price;
}?>"/>
              <span>Số lượng:</span><input type="text" value="1" size="2" name="soluong" id="soluong<?php echo $_smarty_tpl->tpl_vars['ds_dcn']->value->id;?>
" /></p>
              <a class="btn btn-success button-1" name="id" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['ds_dcn']->value->id;?>
" >Mua ngay</a>
              <a href="index_ctsanpham.php?id=<?php echo $_smarty_tpl->tpl_vars['ds_dcn']->value->id;?>
" class="btn btn-default" role="button">Xem thêm</a></p>
            <div class="caption">
              <p><?php echo $_smarty_tpl->tpl_vars['ds_dcn']->value->s_describe;?>
</p>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['ds_dcn']->value->sale == 1 || $_smarty_tpl->tpl_vars['ds_dcn']->value->special == 1) {?>
            <div class="sale">
              <div class="sale-text">
               <?php if ($_smarty_tpl->tpl_vars['ds_dcn']->value->sale == 1) {
echo "Sale";
}?>
               <!-- <?php if ($_smarty_tpl->tpl_vars['ds_dcn']->value->special == 1) {
echo "Top";
}?> -->
             </div>
           </div>
           <?php }?>
          
         </div>
       </div>
       <?php
$_smarty_tpl->tpl_vars['ds_dcn'] = $foreach_ds_dcn_Sav;
}
?>
       <?php }?> 
   </div>
   <div class="row text-center">
     <div class="col-md-12">
      <?php echo $_smarty_tpl->tpl_vars['listpage']->value;?>

     </div>
   </div>
   <div class="fb-comments" data-href="http://localhost:97/DO_AN/index_dungcu.php" data-width="100%" data-numposts="15"></div>
</div><?php }
}
?>