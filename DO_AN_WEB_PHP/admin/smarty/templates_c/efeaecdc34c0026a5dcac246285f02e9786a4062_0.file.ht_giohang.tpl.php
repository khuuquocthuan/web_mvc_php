<?php /* Smarty version 3.1.24, created on 2016-03-18 05:27:27
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_giohang/ht_giohang.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2190856eb83afe24650_96689565%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efeaecdc34c0026a5dcac246285f02e9786a4062' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_giohang/ht_giohang.tpl',
      1 => 1458275171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2190856eb83afe24650_96689565',
  'variables' => 
  array (
    'gh' => 0,
    'sp1' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb83aff16990_90079456',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb83aff16990_90079456')) {
function content_56eb83aff16990_90079456 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2190856eb83afe24650_96689565';
?>
<ol class="breadcrumb">
    <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
    <li class="active"><strong>Quản lí giỏ hàng</strong></li>
</ol>
<div class="col-md-12">
    <legend><h2  class="text-center text-success"><span class="glyphicon glyphicon-shopping-cart"></span>Giỏ Hàng</h2>
    </legend>
            <table class="table table-hover table-bordered">
                <thead> 
                <tr class=" success">
                    <th class="text-center ">Id</th>
                    <th class="text-center">Tên khách hàng</th>
                    <th class="text-center">Mã hóa đơn</th>
                   <!--  <th class="text-center">Tổng sản phẩm</th> -->
                    <th class="text-center">Tổng tiền</th>
                    <th class="text-center">Trạng thái</th>
                    <th class="text-center">Chức năng</th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($_smarty_tpl->tpl_vars['gh']->value)) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['gh']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sp1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sp1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sp1']->value) {
$_smarty_tpl->tpl_vars['sp1']->_loop = true;
$foreach_sp1_Sav = $_smarty_tpl->tpl_vars['sp1'];
?>
                <tr>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->cus_id;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->cus_name;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->b_id;?>
</td>
                    <!-- <td class="text-center"></td> -->
                    <td class="text-center"><?php echo number_format($_smarty_tpl->tpl_vars['sp1']->value->b_cprice);?>
 vnđ</td>
                    <td class="text-center">
                        <form action="edit_giohang.php?id=<?php echo $_smarty_tpl->tpl_vars['sp1']->value->cus_id;?>
" method="post">
                       <select name="status" id="">
                           <option value="0" <?php if (($_smarty_tpl->tpl_vars['sp1']->value->cus_status) == 0) {?>selected<?php }?>>Mới</option>
                           <option value="1" <?php if (($_smarty_tpl->tpl_vars['sp1']->value->cus_status) == 1) {?>selected<?php }?>>Đang hoàn thiện</option>
                           <option value="2" <?php if (($_smarty_tpl->tpl_vars['sp1']->value->cus_status) == 2) {?>selected<?php }?>>Hoàn thiện</option>
                       </select>
                        
                    </td>
                    <!-- <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->sale_price;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->sale;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->special;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->describe;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->s_describe;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->date_up;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->date_edit;?>
</td> -->
                    <td class="text-center">
                     <p align="center"><a href="ht_giohang.php?id=<?php echo $_smarty_tpl->tpl_vars['sp1']->value->b_id;?>
&cus_id=<?php echo $_smarty_tpl->tpl_vars['sp1']->value->cus_id;?>
">[Xem]</a>                  
                    <button name="cn" title="Cập nhật"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;</button>
                    </form> 
                    <?php if (($_smarty_tpl->tpl_vars['sp1']->value->cus_status) == 0) {?><a href="del_giohang.php?id=<?php echo $_smarty_tpl->tpl_vars['sp1']->value->b_id;?>
" title="Xóa" onClick="return confirm('Bạn có chắc chắn xóa không ?')"><span class="glyphicon glyphicon-trash"></span></a><?php }?></p>
                    </td>

    </div>
</div>
                </tr>
                
                <?php
$_smarty_tpl->tpl_vars['sp1'] = $foreach_sp1_Sav;
}
?>
                <?php }?>
            </tbody>
        </table>
<div class="text-center">
         <?php echo $_smarty_tpl->tpl_vars['listpage']->value;?>

     </div>
</div><?php }
}
?>