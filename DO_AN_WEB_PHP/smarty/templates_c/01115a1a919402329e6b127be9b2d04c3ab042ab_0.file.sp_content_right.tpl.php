<?php
/* Smarty version 3.1.39, created on 2021-06-29 18:00:12
  from 'D:\Xampp\htdocs\DO_AN\views\sanpham\sp_content_right.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db438c8cf4c1_41903244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01115a1a919402329e6b127be9b2d04c3ab042ab' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\DO_AN\\views\\sanpham\\sp_content_right.tpl',
      1 => 1458109572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db438c8cf4c1_41903244 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9" style="margin-left:10px">
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
      <?php if ((isset($_smarty_tpl->tpl_vars['spm']->value))) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spm']->value, 'spmn');
$_smarty_tpl->tpl_vars['spmn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['spmn']->value) {
$_smarty_tpl->tpl_vars['spmn']->do_else = false;
?>
      <div class="col-xs-12 col-sm-12  col-md-3">
        <div class="thumbnail">
          <img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['spmn']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['spmn']->value->image;?>
" class="img-responsive">
          <h3><?php echo $_smarty_tpl->tpl_vars['spmn']->value->name;?>
</h3>
          <?php if ($_smarty_tpl->tpl_vars['spmn']->value->sale == 1) {?><p><span ><s>Giá cũ:<?php echo number_format($_smarty_tpl->tpl_vars['spmn']->value->price);?>
 vnđ</s></span>
            </p>
            <p>Giá sale:<?php echo number_format($_smarty_tpl->tpl_vars['spmn']->value->sale_price);?>
 vnđ</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['spmn']->value->sale == 0) {?>
            <p>Giá:<?php echo number_format($_smarty_tpl->tpl_vars['spmn']->value->price);?>
 vnđ</p>
            <p>&nbsp;</p>
            <?php }?>
            <p>
             <!--  thầy -->
              <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['spmn']->value->id;?>
" name="dongia" value="<?php if (($_smarty_tpl->tpl_vars['spmn']->value->sale == 0)) {
echo $_smarty_tpl->tpl_vars['spmn']->value->price;
} else {
echo $_smarty_tpl->tpl_vars['spmn']->value->sale_price;
}?>"/>
              <span>Số lượng:</span><input type="text" value="1" size="2" name="soluong" id="soluong<?php echo $_smarty_tpl->tpl_vars['spmn']->value->id;?>
" /></p>
              <a class="btn btn-success button-1" name="id" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['spmn']->value->id;?>
" >Mua ngay</a>
              <!-- endthaayf -->
              <a href="index_ctsanpham.php?id=<?php echo $_smarty_tpl->tpl_vars['spmn']->value->id;?>
" class="btn btn-default" role="button">Xem thêm</a></p>
            <div class="caption">
              <p><?php echo $_smarty_tpl->tpl_vars['spmn']->value->s_describe;?>
</p>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['spmn']->value->sale == 1 || $_smarty_tpl->tpl_vars['spmn']->value->special == 1) {?>
            <div class="sale">
              <div class="sale-text">
               <?php if ($_smarty_tpl->tpl_vars['spmn']->value->sale == 1) {
echo "Sale";
}?>
               <!-- <?php if ($_smarty_tpl->tpl_vars['spmn']->value->special == 1) {
echo "Top";
}?> -->
             </div>
           </div>
           <?php }?>
          
         </div>
       </div>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       <?php }?> 
     </div>
     <div class="row text-center">
       <div class="col-md-12">
         <?php echo $_smarty_tpl->tpl_vars['listpage']->value;?>

      </div>
    </div>
    <div class="row">
       <div class="fb-comments" data-href="http://localhost:97/DO_AN/index_sanpham.php" data-width="100%" data-numposts="15"></div>
  </div>
    </div>
   <?php }
}
