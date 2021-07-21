<?php
/* Smarty version 3.1.39, created on 2021-06-29 17:59:00
  from 'D:\Xampp\htdocs\DO_AN\views\home\home_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db43442cf568_94716921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef82f19d3dd4a5313aae257a0cd2d1c80ea29e51' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\DO_AN\\views\\home\\home_content.tpl',
      1 => 1458284472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/home/home_slider.tpl' => 1,
    'file:views/home/home_phanhoi.tpl' => 1,
  ),
),false)) {
function content_60db43442cf568_94716921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131028773860db43442c0104_80494849', "home_slider");
?>

<div class="container">
<div class="row">
				<legend>
					<h1 class="text-center">
						Sản phẩm khuyến mại
					</h1>
				</legend>

			</div>
			<div class="row">
				<?php if ((isset($_smarty_tpl->tpl_vars['product']->value))) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
				<div class="col-xs-12 col-sm-12  col-md-3">
					<div class="thumbnail">
				      <img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['row']->value->image;?>
" alt="Bí Ngô" class="img-responsive">
				      <h3><?php echo $_smarty_tpl->tpl_vars['row']->value->name;?>
</h3>
				        <p><span style="text-decoration: line-through">Giá cũ:<?php echo number_format($_smarty_tpl->tpl_vars['row']->value->price);?>
 vnđ</span> Giá:<?php echo number_format($_smarty_tpl->tpl_vars['row']->value->sale_price);?>
 vnđ</p>
				        <p>
				        <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" name="dongia" value="<?php if (($_smarty_tpl->tpl_vars['row']->value->sale == 0)) {
echo $_smarty_tpl->tpl_vars['row']->value->price;
} else {
echo $_smarty_tpl->tpl_vars['row']->value->sale_price;
}?>"/>
		              <span>Số lượng:</span><input type="text" value="1" size="2" name="soluong" id="soluong<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" /></p>
		              <a class="btn btn-success button-1" name="id" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" >Mua ngay</a>
				        <a href="index_ctsanpham.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" class="btn btn-default" role="button">Xem thêm</a></p>
				      <div class="caption">
				        <p><?php echo $_smarty_tpl->tpl_vars['row']->value->s_describe;?>
</p>
				      </div>
				     <div class="sale">
                        <div class="sale-text">
                           Sale
                        </div>
                     </div>
				 </div>
				</div> 
				 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				 <?php }?>

			</div>
				
				<legend>
					<h1 class="text-center">
						Sản phẩm Mới
					</h1>
				</legend>
				<?php if ((isset($_smarty_tpl->tpl_vars['product_nb']->value))) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_nb']->value, 'row_nb');
$_smarty_tpl->tpl_vars['row_nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row_nb']->value) {
$_smarty_tpl->tpl_vars['row_nb']->do_else = false;
?>
				<div class="col-xs-12 col-sm-12  col-md-3">
					<div class="thumbnail">
				      <img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['row_nb']->value->image;?>
" alt="Bí Ngô" class="img-responsive">
				      <h3><?php echo $_smarty_tpl->tpl_vars['row_nb']->value->name;?>
</h3>
				        <p><span style="text-decoration: line-through">Giá cũ:<?php echo $_smarty_tpl->tpl_vars['row_nb']->value->price;?>
</span> Giá:<?php echo $_smarty_tpl->tpl_vars['row_nb']->value->sale_price;?>
 vnđ</p>
				        <p>
				        <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" name="dongia" value="<?php if (($_smarty_tpl->tpl_vars['row']->value->sale == 0)) {
echo $_smarty_tpl->tpl_vars['row']->value->price;
} else {
echo $_smarty_tpl->tpl_vars['row']->value->sale_price;
}?>"/>
		              <span>Số lượng:</span><input type="text" value="1" size="2" name="soluong" id="soluong<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" /></p>
		              <a class="btn btn-success button-1" name="id" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" >Mua ngay</a>
				        <a href="index_ctsanpham.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" class="btn btn-default" role="button">Xem thêm</a></p>
				      <div class="caption">
				        <p><?php echo $_smarty_tpl->tpl_vars['row_nb']->value->s_describe;?>
</p>
				      </div>
				     <div class="sale">
                        <div class="sale-text">
                           New
                        </div>
                     </div>
				 </div>
				</div> 
				 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				 <?php }?>
							
			
			</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171183751060db43442ce4b1_98349193', "home_phanhoi");
?>

</div><?php }
/* {block "home_slider"} */
class Block_131028773860db43442c0104_80494849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'home_slider' => 
  array (
    0 => 'Block_131028773860db43442c0104_80494849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/home/home_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "home_slider"} */
/* {block "home_phanhoi"} */
class Block_171183751060db43442ce4b1_98349193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'home_phanhoi' => 
  array (
    0 => 'Block_171183751060db43442ce4b1_98349193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/home/home_phanhoi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "home_phanhoi"} */
}
