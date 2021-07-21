<?php /* Smarty version 3.1.24, created on 2016-03-18 05:27:34
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_sanpham/ht_sanpham.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1408056eb83b6864940_92271227%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45dce67c7325883c905ac4b485a1560f585a730b' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_sanpham/ht_sanpham.tpl',
      1 => 1458275137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1408056eb83b6864940_92271227',
  'variables' => 
  array (
    'sp' => 0,
    'sp1' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb83b694ef79_88107744',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb83b694ef79_88107744')) {
function content_56eb83b694ef79_88107744 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1408056eb83b6864940_92271227';
?>
<ol class="breadcrumb">
    <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
    <li class="active"><strong>Quản lí sản phẩm</strong></li>
</ol>
<div class="col-md-12">
    <legend><h2  class="text-center text-success"><span class="glyphicon glyphicon-th"></span> BẢNG SẢN PHẨM</h2>
    <p><a href="add_sanpham.php"><span class="glyphicon glyphicon-plus"></span>Thêm mới</a></p>
    </legend>

    <!-- <div class="table-responsive"> -->
            <table class="table table-hover table-bordered">
                <thead>
                 <!-- `id`, `c_id`, `name`, `price`, `sale_price`, `image`, `describe`, `sale`, `special`, `status`
                manny`, `date_up`, `date_edit`, `image_same`, `s_describe
                 ,-->   
                <tr class=" success">
                    <th class="text-center ">Id</th>
                    <th class="text-center">C_id</th>
                    <th class="text-center">Tên</th>
                    <th class="text-center">Giá</th>
                    <th class="text-center">Hình ảnh</th>
                    <th class="text-center">Trạng thái</th>
                    <!-- <th class="text-center">Giá sale</th>
                    <th class="text-center">Sale</th>
                    <th class="text-center">Đặc biệt</th>
                    <th class="text-center">Mô tả</th>
                    <th class="text-center">Sơ lược</th>
                    <th class="text-center">Ngày thêm</th>
                    <th class="text-center">Ngày sửa</th> -->
                    <th class="text-center">Chức năng</th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($_smarty_tpl->tpl_vars['sp']->value)) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['sp']->value;
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
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->id;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->c_id;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->name;?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->price;?>
</td>
                    <td class="text-center"><img src="../public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['sp1']->value->image;?>
" width="80px" height="80px"></td>
                    <td class="text-center">
                        <?php if ($_smarty_tpl->tpl_vars['sp1']->value->status == 1) {
echo "Hiển thị";
}?>
                        <?php if (!($_smarty_tpl->tpl_vars['sp1']->value->status == 1)) {
echo "Ẩn";
}?>
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
                     <p align="center"><a href="ct_sanpham.php?id=<?php echo $_smarty_tpl->tpl_vars['sp1']->value->id;?>
">[Xem]</a>                  
                    <a href="edit_sanpham.php?id=<?php echo $_smarty_tpl->tpl_vars['sp1']->value->id;?>
" title="Sửa"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;
                    <a href="del_sanpham.php?id=<?php echo $_smarty_tpl->tpl_vars['sp1']->value->id;?>
" title="Xóa" onClick="return confirm('Bạn có chắc chắn xóa không ?')"><span class="glyphicon glyphicon-trash"></span></a></p>
                  
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
</div>
<?php }
}
?>