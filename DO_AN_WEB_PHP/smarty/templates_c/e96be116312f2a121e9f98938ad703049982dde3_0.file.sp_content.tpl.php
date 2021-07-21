<?php
/* Smarty version 3.1.39, created on 2021-06-29 18:00:12
  from 'D:\Xampp\htdocs\DO_AN\views\sanpham\sp_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db438c869407_51104041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e96be116312f2a121e9f98938ad703049982dde3' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\DO_AN\\views\\sanpham\\sp_content.tpl',
      1 => 1458209657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/sanpham/sp_content_left.tpl' => 1,
  ),
),false)) {
function content_60db438c869407_51104041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            <div >
               <!--  <a href="">
                <img class="img-reponsive" src="public/images/quangcao/sale5.jpg" width="100%" height="350px"  alt="">         
                </a> -->
            </div>
            <div >
                <div class="row">
                  
                    <div class="col-md-12"> <img src="public/images/quangcao/bn.jpg" alt="" width="100%" height="400px"></div>
                   
                </div>
            </div>
			
		</div>		
		
	</div>
	<div class="row">
        <?php if ((isset($_smarty_tpl->tpl_vars['view1']->value))) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view1']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17673993360db438c868450_31821276', "sp_content_left");
?>

		
		
	</div>
</div>
<?php }
/* {block "sp_content_left"} */
class Block_17673993360db438c868450_31821276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sp_content_left' => 
  array (
    0 => 'Block_17673993360db438c868450_31821276',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/sanpham/sp_content_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "sp_content_left"} */
}
