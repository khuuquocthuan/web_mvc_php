<?php /* Smarty version 3.1.24, created on 2016-03-16 07:53:41
         compiled from "C:/xampp/htdocs/DO_AN/views/sanpham/tim_sp.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1187956e902f508bf81_37409735%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f04d30decd9370abae55c1d826f55cbed7330f1e' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/views/sanpham/tim_sp.tpl',
      1 => 1458111185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1187956e902f508bf81_37409735',
  'variables' => 
  array (
    'chon' => 0,
    'chon1' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56e902f51b0f47_60901357',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e902f51b0f47_60901357')) {
function content_56e902f51b0f47_60901357 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1187956e902f508bf81_37409735';
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
      <?php if (isset($_smarty_tpl->tpl_vars['chon']->value)) {?>
      <?php
$_from = $_smarty_tpl->tpl_vars['chon']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['chon1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['chon1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['chon1']->value) {
$_smarty_tpl->tpl_vars['chon1']->_loop = true;
$foreach_chon1_Sav = $_smarty_tpl->tpl_vars['chon1'];
?>
      <div class="col-xs-12 col-sm-12  col-md-3">
        <div class="thumbnail">
          <img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['chon1']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['chon1']->value->image;?>
" class="img-responsive">
          <h3><?php echo $_smarty_tpl->tpl_vars['chon1']->value->name;?>
</h3>
          <?php if ($_smarty_tpl->tpl_vars['chon1']->value->sale == 1) {?><p><span ><s>Giá cũ:<?php echo number_format($_smarty_tpl->tpl_vars['chon1']->value->price);?>
 vnđ</s></span>
            </p>
            <p>Giá sale:<?php echo number_format($_smarty_tpl->tpl_vars['chon1']->value->sale_price);?>
 vnđ</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['chon1']->value->sale == 0) {?>
            <p>Giá:<?php echo number_format($_smarty_tpl->tpl_vars['chon1']->value->price);?>
 vnđ</p>
            <p>&nbsp;</p>
            <?php }?>
            <p>
             <!--  thầy -->
              <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['chon1']->value->id;?>
" name="dongia" value="<?php if (($_smarty_tpl->tpl_vars['chon1']->value->sale == 0)) {
echo $_smarty_tpl->tpl_vars['chon1']->value->price;
} else {
echo $_smarty_tpl->tpl_vars['chon1']->value->sale_price;
}?>"/>
              <span>Số lượng:</span><input type="text" value="1" size="2" name="soluong" id="soluong<?php echo $_smarty_tpl->tpl_vars['chon1']->value->id;?>
" /></p>
              <a class="btn btn-success button-1" name="id" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['chon1']->value->id;?>
" >Mua ngay</a>
              <!-- endthaayf -->
              <a href="index_ctsanpham.php?id=<?php echo $_smarty_tpl->tpl_vars['chon1']->value->id;?>
" class="btn btn-default" role="button">Xem thêm</a></p>
            <div class="caption">
              <p><?php echo $_smarty_tpl->tpl_vars['chon1']->value->s_describe;?>
</p>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['chon1']->value->sale == 1 || $_smarty_tpl->tpl_vars['chon1']->value->special == 1) {?>
            <div class="sale">
              <div class="sale-text">
               <?php if ($_smarty_tpl->tpl_vars['chon1']->value->sale == 1) {
echo "Sale";
}?>
               <!-- <?php if ($_smarty_tpl->tpl_vars['chon1']->value->special == 1) {
echo "Top";
}?> -->
             </div>
           </div>
           <?php }?>
          
         </div>
       </div>
       <?php
$_smarty_tpl->tpl_vars['chon1'] = $foreach_chon1_Sav;
}
?>
       <?php }?> 
     </div>
     <div class="row text-center">
       <div class="col-md-12">
         <!-- <?php echo $_smarty_tpl->tpl_vars['listpage']->value;?>
 -->
      </div>
    </div>
    <div class="row">
       <div class="fb-comments" data-href="https://facebook.com/yenmasieupham" data-width="100%" data-numposts="15"></div>
  </div>
    </div>
   <?php }
}
?>