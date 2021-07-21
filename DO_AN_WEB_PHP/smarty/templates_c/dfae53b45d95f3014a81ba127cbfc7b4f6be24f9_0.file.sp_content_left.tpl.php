<?php
/* Smarty version 3.1.39, created on 2021-06-29 18:00:09
  from 'D:\Xampp\htdocs\DO_AN\views\sanpham\sp_content_left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db4389c6f950_43394998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfae53b45d95f3014a81ba127cbfc7b4f6be24f9' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\DO_AN\\views\\sanpham\\sp_content_left.tpl',
      1 => 1458274056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db4389c6f950_43394998 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-sm-12 col-md-2" style="margin-right:50px;float:right" >
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
           <?php if ((isset($_smarty_tpl->tpl_vars['menu1']->value))) {?>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu1']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
            <li style="border-bottom:1px dashed #5FB263"><a class="c2mn" href="index_loaisp.php?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value->id;?>
" >
                <strong><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</strong>
            </a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </ul>

        <ul class="nav nav-pills nav-stacked text-center">
            <h2>Dụng cụ</h2>
            <?php if ((isset($_smarty_tpl->tpl_vars['menu2']->value))) {?>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu2']->value, 'menudc');
$_smarty_tpl->tpl_vars['menudc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menudc']->value) {
$_smarty_tpl->tpl_vars['menudc']->do_else = false;
?>
            <li style="border-bottom:1px dashed #5FB263"><a class="c2mn" href="index_loaisp.php?id=<?php echo $_smarty_tpl->tpl_vars['menudc']->value->id;?>
" >
                <strong><?php echo $_smarty_tpl->tpl_vars['menudc']->value->name;?>
</strong>
            </a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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










<?php }
}
