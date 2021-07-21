<?php /* Smarty version 3.1.24, created on 2016-03-16 06:58:42
         compiled from "smarty/templates/content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1105156e8f6122726b8_55183927%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27652c087b37aa1ff8776a51b57833a262376b02' => 
    array (
      0 => 'smarty/templates/content.tpl',
      1 => 1456384666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1105156e8f6122726b8_55183927',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56e8f6122820b9_16478712',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e8f6122820b9_16478712')) {
function content_56e8f6122820b9_16478712 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1105156e8f6122726b8_55183927';
?>
<div class="row clearfix" >
	<?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php }?>
</div><?php }
}
?>