<?php /* Smarty version 3.1.24, created on 2016-03-18 04:50:48
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_index/ht_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1157156eb7b18131134_31921152%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '365090446c08882438f4c3b0da6a752ca1184c17' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_index/ht_index.tpl',
      1 => 1458273045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1157156eb7b18131134_31921152',
  'variables' => 
  array (
    'tsp' => 0,
    'tph' => 0,
    'hdm' => 0,
    'tspht' => 0,
    'tphht' => 0,
    'thd' => 0,
    'tdm' => 0,
    'tdmht' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb7b181e8ad4_81963359',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb7b181e8ad4_81963359')) {
function content_56eb7b181e8ad4_81963359 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1157156eb7b18131134_31921152';
?>
<ol class="breadcrumb">
	<li class="active"><strong>Trang tổng quan</strong></li>
</ol>
<div class="col-md-4">
	<div class="panel panel-default panel-over panel-over-one">
		<div class="panel-body">
		   	<span class="glyphicon glyphicon-gift gly-one col-md-8 pull-left"></span> 
            <span class="badge badge-new col-md-4 pull-right"><?php echo $_smarty_tpl->tpl_vars['tsp']->value;?>
 sp</span>
		   	<div class="panel panel-add col-xs-12"><h4 class="text-center col-md-12 h4-one">Tổng sản phẩm<span class="glyphicon glyphicon-arrow-right"></span></h4></div>
		</div>
	</div>
</div>
<div class="col-md-4">
	<div class="panel panel-default panel-over panel-over-two">
		<div class="panel-body">
		   	<span class="glyphicon glyphicon-comment gly-one col-md-8 pull-left"></span> 
            <span class="badge badge-new col-md-4 pull-right"><?php echo $_smarty_tpl->tpl_vars['tph']->value;?>
 ph</span>
		   	<div class="panel panel-add col-xs-12"><h4 class="text-center col-md-12 h4-two">Phản hồi <span class="glyphicon glyphicon-arrow-right"></span></h4></div>
		</div>
	</div>
</div> 
<div class="col-md-4">
	<div class="panel panel-default panel-over panel-over-three">
		<div class="panel-body">
            <span class="glyphicon glyphicon-file gly-one col-md-8 pull-left"></span>
             <span class="badge badge-new col-md-4 pull-right"><?php echo $_smarty_tpl->tpl_vars['hdm']->value;?>
 hđ</span>
            <div class="panel panel-add  col-xs-12"><h4 class="text-center col-md-12 h4-two">Hóa đơn mới<span class="glyphicon glyphicon-arrow-right"></span></h4></div>
		   
		</div>
	</div>
</div>
<div class="col-md-12">
    <div style="background:#65BD6B;margin-bottom:20px">
    <h1 style="padding:10px 20px;color:#fff"><i class="glyphicon glyphicon-folder-open"></i> Quản lí</h1> 
    </div>
</div>
<div class="col-md-6">
	<div class="panel panel-default panel-hislg">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-time"></span> <strong>Quản lí sản phẩm</strong></h3>
		</div>
		<div class="panel-body">
			<div class="list-group">
                <a href="set_sanpham.php" class="list-group-item">
                    <span class="badge">Xem</span>
                    <i class="glyphicon glyphicon-book"></i> Tổng sản phẩm <strong><?php echo $_smarty_tpl->tpl_vars['tsp']->value;?>
</strong>
                </a>
                <a href="set_sanpham.php" class="list-group-item">
                    <span class="badge">Xem</span>
                    <i class="glyphicon glyphicon-ok-circle"></i> Sản phẩm hiện thị <strong><?php echo $_smarty_tpl->tpl_vars['tspht']->value;?>
</strong> 
                </a>
            </div>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="panel panel-default panel-hislg">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-wrench"></span> <strong>Quản lí admin</strong></h3>
		</div>
    
        <div class="panel-body">
            <div class="list-group">
                <a href="set_admin.php" class="list-group-item">
                    <span class="badge">Xem</span>
                   <i class="glyphicon glyphicon-book"></i> Tổng admin <strong><?php echo $_smarty_tpl->tpl_vars['tph']->value;?>
</strong>
                </a>
                <a href="set_admin.php" class="list-group-item">
                    <span class="badge">Xem</span>
                   <i class="glyphicon glyphicon-ok-circle"></i> Admin được hoạt động <strong><?php echo $_smarty_tpl->tpl_vars['tphht']->value;?>
</strong>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="panel panel-default panel-hislg">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-time"></span> <strong>Quản lí đơn hàng</strong></h3>
        </div>
        <div class="panel-body">
            <div class="list-group">
                <a href="set_giohang.php" class="list-group-item">
                    <span class="badge">Xem</span>
                    <i class="glyphicon glyphicon-book"></i> Tổng đơn hàng <strong><?php echo $_smarty_tpl->tpl_vars['thd']->value;?>
</strong>
                </a>
                <a href="set_giohang.php" class="list-group-item">
                    <span class="badge">Xem</span>
                    <i class="glyphicon glyphicon-ok-circle"></i> Hóa đơn chưa xem <strong><?php echo $_smarty_tpl->tpl_vars['hdm']->value;?>
</strong>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="panel panel-default panel-hislg">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-time"></span> <strong>Quản lí danh mục</strong></h3>
        </div>
        <div class="panel-body">
            <div class="list-group">
                <a href="set_danhmuc.php" class="list-group-item">
                    <span class="badge">Xem</span>
                    <i class="glyphicon glyphicon-book"></i> Tổng danh mục <strong><?php echo $_smarty_tpl->tpl_vars['tdm']->value;?>
</strong>
                </a>
                <a href="set_danhmuc.php" class="list-group-item">
                    <span class="badge">Xem</span>
                    <i class="glyphicon glyphicon-ok-circle"></i> 
                    Danh mục hiển thị <strong><?php echo $_smarty_tpl->tpl_vars['tdmht']->value;?>
</strong>
                </a>
            </div>
        </div>
    </div>
</div><?php }
}
?>