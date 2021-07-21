<?php /* Smarty version 3.1.24, created on 2016-03-09 07:18:57
         compiled from "smarty/templates/ad_content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:908256dfc0513f5979_94377534%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '896a5a690694e9a73c227aeef286aa93bac4ad7e' => 
    array (
      0 => 'smarty/templates/ad_content.tpl',
      1 => 1456981134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '908256dfc0513f5979_94377534',
  'variables' => 
  array (
    'ad_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56dfc05140d083_27552976',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dfc05140d083_27552976')) {
function content_56dfc05140d083_27552976 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '908256dfc0513f5979_94377534';
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-xs-12">
<?php if (isset($_smarty_tpl->tpl_vars['ad_view']->value)) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['ad_view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
</div>
</div>
</div>
</div><?php }
}
?>