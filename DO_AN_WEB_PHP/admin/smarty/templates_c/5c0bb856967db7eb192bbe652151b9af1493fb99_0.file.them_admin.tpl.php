<?php /* Smarty version 3.1.24, created on 2016-03-18 05:53:20
         compiled from "C:/xampp/htdocs/DO_AN/admin/views_admin/set_admin/them_admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1753256eb89c033c096_97679119%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c0bb856967db7eb192bbe652151b9af1493fb99' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/admin/views_admin/set_admin/them_admin.tpl',
      1 => 1458275219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1753256eb89c033c096_97679119',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb89c03ad532_53859305',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb89c03ad532_53859305')) {
function content_56eb89c03ad532_53859305 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1753256eb89c033c096_97679119';
?>

<?php echo '<script'; ?>
>
	function kiemtra(){
		var name=document.getElementById('name');
		var user=document.getElementById('user');
		var pass=document.getElementById('pass');
		var email=document.getElementById('email');
		var date_born=document.getElementById('date_born');
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		
		if (name.value=="") {
			document.getElementById("err_name").innerHTML="Bạn đang để rỗng Tên";
			name.focus();
			return false;
		}else{
			document.getElementById("err_name").innerHTML="";
		}
		if (user.value=="") {
			document.getElementById("err_user").innerHTML="Bạn đang để rỗng Username";
			user.focus();
			return false;
		}else{
			document.getElementById("err_user").innerHTML="";
		}
		if (pass.value=="") {
			document.getElementById("err_pass").innerHTML="Bạn đang để rỗng pass";
			pass.focus();
			return false;
		}else{
			document.getElementById("err_pass").innerHTML="";
		}
		if (email.value=="" || !re.test(email.value)) {
			document.getElementById("err_email").innerHTML="Bạn đang sai định dạng email";
			email.focus();
			return false;
		}else{
			document.getElementById("err_email").innerHTML="";
		}
		if (date_born.value=="") {
			document.getElementById("err_date_born").innerHTML="Bạn đang để rỗng Ngày sinh";
			date_born.focus();
			return false;
		}else{
			document.getElementById("err_date_born").innerHTML="";
		}
		return true;
	}

<?php echo '</script'; ?>
>

<ol class="breadcrumb">
	<li><strong><a href="index.php">Trang tổng quan</a></strong></li>
	<li class="active"><strong>Thêm admin</strong></li>
</ol>
<div class="col-md-8 col-md-push-2">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<legend><h1 class="text-center" style="color:#3C8E51">Thêm admin <small><i class="glyphicon glyphicon-plus" style="color:#3C8E51"></i></small></h1></legend>

			<div class="form-group" action="" method="Post">
				<label for="">Tên admin</label>
				<p id="err_name" style="color:red"></p>
				<input type="text" class="form-control" name="name" id="name" value="">
			</div>
			<div class="form-group">
				<label for="">Username</label>
				<p style="color:red" id="err_user"></p>
				<input type="text" class="form-control" name="user" id="user" placeholder="" value="">
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<p style="color:red" id="err_pass"></p>
				<input type="text" class="form-control" name="pass" id="pass" placeholder="" value="">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<p style="color:red" id="err_email"></p>
				<input type="text" class="form-control" name="email" id="email" placeholder="" value="" >
			</div>
			<div class="form-group">
				<label for="">Ngày sinh</label>
				<p style="color:red" id="err_date_born"></p>
				<input type="text" class="form-control" name="date_born" id="date_born" value="" placeholder="Năm-tháng-ngày">
				
			</div>
			<div >
				<label for="">Trạng thái</label>
				<select class="form-control" name="status">Trạng thái
					<option value="1" >Hiển thị</option>

					<option value="0" >Ẩn</option>
					
				</select>
			</div>

			
			<h1> </h1>
			
			<div class="form-group">
				<input type="submit" class="btn btn-primary" name="sm" value="Thêm mới" onclick="return kiemtra()">
				<input type="reset" class="btn btn" value="Nhập lại">
			</div>
		</form>
	</div>
<?php }
}
?>