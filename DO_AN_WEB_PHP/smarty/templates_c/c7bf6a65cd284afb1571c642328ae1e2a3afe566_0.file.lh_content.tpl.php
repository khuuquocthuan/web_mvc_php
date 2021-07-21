<?php /* Smarty version 3.1.24, created on 2016-03-16 07:05:54
         compiled from "C:/xampp/htdocs/DO_AN/views/lienhe/lh_content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1121856e8f7c2852df3_63961588%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7bf6a65cd284afb1571c642328ae1e2a3afe566' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/views/lienhe/lh_content.tpl',
      1 => 1457334163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1121856e8f7c2852df3_63961588',
  'variables' => 
  array (
    'ph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56e8f7c298f4c4_69693863',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e8f7c298f4c4_69693863')) {
function content_56e8f7c298f4c4_69693863 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1121856e8f7c2852df3_63961588';
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
		var rep=document.getElementById('rep');
		if (rep.value=="") {
				document.getElementById('err_rep').innerHTML="Bạn đang để trống phản hồi";
				rep.focus();
				return false;
			}
			else{
				document.getElementById("err_rep").innerHTML="";
			}
		return true;
	}
<?php echo '</script'; ?>
>

<div class="container">
		<legend>
			<h2 style="color:#55518a">
			Thông tin cửa hàng
			</h2>
		</legend>
	<?php echo $_smarty_tpl->getSubTemplate ("views/lienhe/tt_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<div class="container">
	<div class="row" style="margin:0px 0px 20px 0px; color:#4AA934 !important">
	<form action="" method="post" enctype="multipart/form-data">
	<legend><h2 style="color:#17670F;">Phản hồi</h2></legend>
	<h2 style="color:red;"><?php if (isset($_smarty_tpl->tpl_vars['ph']->value)) {
echo $_smarty_tpl->tpl_vars['ph']->value;
}?></h2>

	<div class="form-group has-success">
		<label for="">Nhập họ tên</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên">
		<p style="color:red" id="err_name"></p>
	</div>
	<div class="form-group has-success">
		<label for="">Nhập địa chỉ email</label>
		<input type="text" class="form-control" name="email" id="email" placeholder="Nhập địa chỉ email">
		<p style="color:red" id="err_email"></p>
	</div>
	<div class="form-group has-success">
		<label for="">Nhập sđt</label>
		<input type="number" class="form-control" name="phone" id="phone" placeholder="Nhập sđt">
		<p style="color:red" id="err_phone"></p>
	</div>
	<div class="form-group has-success">
		<label for="">Phản hồi</label>
		<textarea class="form-control" name="feedback" id="rep" placeholder="Phản hồi" style="resize:vertical;min-height:100px"></textarea>
		<p style="color:red" id="err_rep"></p>
	</div>

	
	<div class="form_group">
		<input type="submit" name="sm" class="btn btn-success" value="Phản hồi" onclick="return kiemtra()">
		<input type="reset" class="btn btn-danger" value="Nhập lại">
	</div>
	</div>
</form>
</div>
<?php }
}
?>