<?php
/* Smarty version 3.1.39, created on 2021-06-29 18:00:09
  from 'D:\Xampp\htdocs\DO_AN\views\giohang\v_gio_hang.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db4389b61ba8_68633367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e0aa4c7400a8240d8ba3a4e828870b2c2881c8' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\DO_AN\\views\\giohang\\v_gio_hang.tpl',
      1 => 1458109167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/sanpham/sp_content_left.tpl' => 1,
  ),
),false)) {
function content_60db4389b61ba8_68633367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php echo '<script'; ?>
>
    function kiemtra(){
        var name=document.getElementById('name');
        if (name.value=="") {
            document.getElementById("err_name").innerHTML="Bạn đang để trống tên";
            name.focus();
            return false;
        }
        else{
            document.getElementById("err_name").innerHTML="";
        }
        var email=document.getElementById('email');
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (email.value=="" || !re.test(email.value)) {
                document.getElementById('err_email').innerHTML="Email sai định dạng";
                email.focus();
                return false;   
            }
            
            else{
                document.getElementById("err_email").innerHTML="";
            }
        var phone=document.getElementById('phone');
        if (phone.value=="") {
                document.getElementById('err_phone').innerHTML="Số điện thoại nhập sai định dạng";
                phone.focus();
                return false;
            }
            else{
                document.getElementById("err_phone").innerHTML="";
            }
        var rep=document.getElementById('address');
        if (rep.value=="") {
                document.getElementById('err_address').innerHTML="Bạn đang để trống địa chỉ";
                rep.focus();
                return false;
            }
            else{
                document.getElementById("err_address").innerHTML="";
            }
        var note=document.getElementById('note');    
        if (note.value=="") {
                document.getElementById('err_note').innerHTML="Bạn đang để trống ghi chú";
                note.focus();
                return false;
            }
            else{
                document.getElementById("err_note").innerHTML="";
            }
        return true;
    }
<?php echo '</script'; ?>
>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118433727460db4389af5e97_99095828', "sp_content_right");
?>

<div class="col-md-8 col-sm-push-1">
<section id="content">
  <div class="main" style="min-height:768px" id="th_giohang">
    <?php if ((isset($_smarty_tpl->tpl_vars['ds_mon_an']->value)) || (isset($_smarty_tpl->tpl_vars['ds_thuc_don']->value))) {?>
        <div><?php $_smarty_tpl->_assignInScope('tien_mon_an', 0);?>
        <form action="index_giohang.php" method="post">
    <?php if ((isset($_smarty_tpl->tpl_vars['ds_mon_an']->value))) {?>       
        <legend><h2 class="text-center" style="color:#149911;font-weight:bold">Giỏ hàng</h2></legend>
        <table class="table table-bordered table-hover">
            <tr><th >Mã món</th><th>Tên món</th><th>Hình ảnh</th><th>Số lượng</th><th>Đơn giá</th><th>Thành tiền</th><th>Xóa</th></tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_mon_an']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>

                </td>
                <td>
                    <img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['item']->value->image;?>
" width="100px" height="100px" alt="">
                </td>
                <td>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->so_luong;?>
" name="soluong<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" style="width:70px; text-align:center"/>
                    <input type="hidden" value="<?php if (($_smarty_tpl->tpl_vars['item']->value->sale == 0)) {
echo $_smarty_tpl->tpl_vars['item']->value->price;
} else {
echo $_smarty_tpl->tpl_vars['item']->value->sale_price;
}?>" name="dongia<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"/>
                </td>
                <td align="right">
                    <?php if (($_smarty_tpl->tpl_vars['item']->value->sale == 0)) {
echo $_smarty_tpl->tpl_vars['item']->value->price;
} else {
echo $_smarty_tpl->tpl_vars['item']->value->sale_price;
}?>
                </td>
                <td align="right">
                    <?php if (($_smarty_tpl->tpl_vars['item']->value->sale == 0)) {
echo $_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->price;
} else {
echo $_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->sale_price;
}?> 
                    <?php if (($_smarty_tpl->tpl_vars['item']->value->sale == 0)) {
$_smarty_tpl->_assignInScope('tien_mon_an', $_smarty_tpl->tpl_vars['tien_mon_an']->value+$_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->price);
} else {
$_smarty_tpl->_assignInScope('tien_mon_an', $_smarty_tpl->tpl_vars['tien_mon_an']->value+$_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->sale_price);
}?>
                </td>
                <td align="center">
                    <input type="checkbox" name="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->price;?>
"/>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tien_mon_an']->value;?>
" name="httt"/>
            <tr bgcolor="#FFE9D2"><td colspan="4" align="right"><strong>Tổng tiền:</strong></td><td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['tien_mon_an']->value);?>
đ</td></tr>
        </table> 
    <?php }?> 
    
    <p align="center">
    <input type="submit" name="btnCapnhat" value="Cập nhật" class="button-2 btn btn-primary" />
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    <i class="glyphicon glyphicon-ok-sign"></i> Thanh toán
    </button>
    <button  class="button-1 btn btn-info" id="btnxoa" class="art-button" /><i class="glyphicon glyphicon-remove-sign"></i> Xóa giỏ hàng</button>
    </p>
    </form>
    </div>
    <div class="row">
            <div class="col-md-12">
                <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <i class="glyphicon glyphicon-ok-sign"></i> Thanh toán
            </button>
            <button class="btn button-2" type="button"  onclick="window.location.href = 'khach_hang.php?key=dat-hang'" value="Đặt hàng" class="art-button" >
                <i class="glyphicon glyphicon-retweet"></i> Cập nhật giỏ hàng
            </button>
            <input class="btn button-1" type="button" id="btnxoa" value="Xóa giỏ hàng" class="art-button">
                <i class="glyphicon glyphicon-remove-sign"></i>Xóa giỏ hàng
            </button> -->
            <style>
                .collapse p{
                    color: red;
                }
            </style>
            <div class="collapse" id="collapseExample">
                <form action="" method="POST" role="form">
                    <legend>Nhập thông tin khách hàng</legend>
                
                    <div class="form-group">
                        <label for="">Họ tên khách hàng</label>
                        <p id="err_name"></p>
                        <input type="text" name="name" id="name" class="form-control" id="" >
                    </div>
                    <div class="form-group">
                        <label for="">Đại chỉ email</label>
                        <p id="err_email"></p>
                        <input type="text" name="email" id="email" class="form-control" id="" >
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <p id="err_phone"></p>
                        <input type="number" name="phone" id="phone" class="form-control" id="" >
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ gửi hàng </label>
                        <p id="err_address"></p>
                        <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Ghi chú</label>
                        <p id="err_note"></p>
                        <input type="text" name="note" id="note" class="form-control" id="" >
                    </div>
                
                    
                
                    <input type="submit" name="submit" onclick="return kiemtra()" class="btn btn-success" value="Gửi đi">
                    <input type="reset" class="btn btn-danger" value="Nhập lại">
                    <h1></h1>
            </div>
            
</form>
                
            </div>
        </div>
    </div>
    <?php } else { ?>
        <h3 style="color:red" class="text-center"><i>Bạn chưa mua sản phẩm nào :(</i></h3> 
    <?php }?>
  </div>
</section>
</div><?php }
/* {block "sp_content_right"} */
class Block_118433727460db4389af5e97_99095828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sp_content_right' => 
  array (
    0 => 'Block_118433727460db4389af5e97_99095828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/sanpham/sp_content_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "sp_content_right"} */
}
