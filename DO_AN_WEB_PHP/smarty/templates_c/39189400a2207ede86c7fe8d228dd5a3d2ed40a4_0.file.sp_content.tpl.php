<?php /* Smarty version 3.1.24, created on 2016-03-18 05:07:37
         compiled from "C:/xampp/htdocs/DO_AN/views/sanpham/sp_content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2666156eb7f09c5fc13_85227481%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39189400a2207ede86c7fe8d228dd5a3d2ed40a4' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/views/sanpham/sp_content.tpl',
      1 => 1458209657,
      2 => 'file',
    ),
    '5f3215f1fe067472a2b0d522fb2caf3ad2c827ac' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/views/sanpham/sp_content_left.tpl',
      1 => 1458274056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2666156eb7f09c5fc13_85227481',
  'variables' => 
  array (
    'view1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb7f09d657d5_25123672',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb7f09d657d5_25123672')) {
function content_56eb7f09d657d5_25123672 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2666156eb7f09c5fc13_85227481';
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
        <?php if (isset($_smarty_tpl->tpl_vars['view1']->value)) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view1']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
}?>
		<?php /*  Call merged included template "views/sanpham/sp_content_left.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("views/sanpham/sp_content_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '401156eb7f09cf81c7_18204692', 'content_56eb7f09cf81c5_94219794');
/*  End of included template "views/sanpham/sp_content_left.tpl" */?>

		
		
	</div>
</div>
<?php }
}
?><?php
/*%%SmartyHeaderCode:401156eb7f09cf81c7_18204692%%*/
if ($_valid && !is_callable('content_56eb7f09cf81c5_94219794')) {
function content_56eb7f09cf81c5_94219794 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '401156eb7f09cf81c7_18204692';
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
            <li style="border-bottom:1px dashed #5FB263"><a class="c2mn" href="index_loaisp.php?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value->id;?>
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
            <li style="border-bottom:1px dashed #5FB263"><a class="c2mn" href="index_loaisp.php?id=<?php echo $_smarty_tpl->tpl_vars['menudc']->value->id;?>
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
.c2mn:hover{
            color: #22A935 !important;
        }
</style>










<?php
/*/%%SmartyNocache:401156eb7f09cf81c7_18204692%%*/
}
}
?>