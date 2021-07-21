<?php /* Smarty version 3.1.24, created on 2016-03-18 05:39:06
         compiled from "C:/xampp/htdocs/DO_AN/views/giohang/v_gio_hang.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:959856eb866a616e92_85669293%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '521b4bd41b174680a1f5f054625270c2437e4a7b' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/views/giohang/v_gio_hang.tpl',
      1 => 1458109167,
      2 => 'file',
    ),
    '5f3215f1fe067472a2b0d522fb2caf3ad2c827ac' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/views/sanpham/sp_content_left.tpl',
      1 => 1458274056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '959856eb866a616e92_85669293',
  'variables' => 
  array (
    'ds_mon_an' => 0,
    'ds_thuc_don' => 0,
    'item' => 0,
    'tien_mon_an' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb866a87c3a9_18005285',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb866a87c3a9_18005285')) {
function content_56eb866a87c3a9_18005285 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '959856eb866a616e92_85669293';
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

<?php /*  Call merged included template "views/sanpham/sp_content_left.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("views/sanpham/sp_content_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1719656eb866a724751_34219469', 'content_56eb866a724756_89141865');
/*  End of included template "views/sanpham/sp_content_left.tpl" */?>

<div class="col-md-8 col-sm-push-1">
<section id="content">
  <div class="main" style="min-height:768px" id="th_giohang">
    <?php if (isset($_smarty_tpl->tpl_vars['ds_mon_an']->value) || isset($_smarty_tpl->tpl_vars['ds_thuc_don']->value)) {?>
        <div><?php $_smarty_tpl->tpl_vars['tien_mon_an'] = new Smarty_Variable(0, null, 0);?>
        <form action="index_giohang.php" method="post">
    <?php if (isset($_smarty_tpl->tpl_vars['ds_mon_an']->value)) {?>       
        <legend><h2 class="text-center" style="color:#149911;font-weight:bold">Giỏ hàng</h2></legend>
        <table class="table table-bordered table-hover">
            <tr><th >Mã món</th><th>Tên món</th><th>Hình ảnh</th><th>Số lượng</th><th>Đơn giá</th><th>Thành tiền</th><th>Xóa</th></tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['ds_mon_an']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
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
$_smarty_tpl->tpl_vars['tien_mon_an'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tien_mon_an']->value+$_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->price, null, 0);
} else {
$_smarty_tpl->tpl_vars['tien_mon_an'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tien_mon_an']->value+$_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->sale_price, null, 0);
}?>
                </td>
                <td align="center">
                    <input type="checkbox" name="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_tmp1=ob_get_clean();
echo $_tmp1;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->price;?>
"/>
                </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
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
}
?><?php
/*%%SmartyHeaderCode:1719656eb866a724751_34219469%%*/
if ($_valid && !is_callable('content_56eb866a724756_89141865')) {
function content_56eb866a724756_89141865 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1719656eb866a724751_34219469';
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
/*/%%SmartyNocache:1719656eb866a724751_34219469%%*/
}
}
?>