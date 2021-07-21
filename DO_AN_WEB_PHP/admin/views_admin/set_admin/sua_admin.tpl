<script>
	function kiemtra(){
		var name=document.getElementById('name');
		var user=document.getElementById('user');
		var pass=document.getElementById('pass');
		var email=document.getElementById('email');
		var date_born=document.getElementById('date_born');
		
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
		if (email.value=="") {
			document.getElementById("err_email").innerHTML="Bạn đang để rỗng email";
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

</script>
<ol class="breadcrumb">
	<li><strong><a href="index.php">Trang tổng quan</a></strong></li>
	<li class="active"><strong>Sửa admin</strong></li>
</ol>
<div class="col-md-8 col-md-push-2">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<legend><h1 class="text-center" style="color:#3C8E51">Sửa admin <small><i class="glyphicon glyphicon-plus" style="color:#3C8E51"></i></small></h1></legend>

			<div class="form-group">
				<label for="">Tên admin</label>
				<p style="color:red" id="err_name"></p>
				<input type="text" class="form-control" name="name" id="name" placeholder="" value="{$sua->name} ">
			</div>
			<div class="form-group">
				<label for="">Username</label>
				<p style="color:red" id="err_user"></p>
				<input type="text" class="form-control" name="user" id="user" placeholder="" value=" {$sua->user} ">
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<p style="color:red" id="err_pass"></p>
				<input type="text" class="form-control" id="pass" name="pass" placeholder="" value=" {$sua->pass} ">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<p style="color:red" id="err_email"></p>
				<input type="text" class="form-control" id="email" name="email" placeholder="" value=" {$sua->email}" >
			</div>
			<div class="form-group">
				<label for="">Ngày sinh</label>
				<p style="color:red" id="err_date_born"></p>
				<input type="text" class="form-control" name="date_born" id="date_born" value="{$sua->date_born}" placeholder="Năm-tháng-ngày">
			</div>
			<div >
				<label for="">Trạng thái</label>
				<select class="form-control" name="status">Trạng thái
					<option value="1" {if $sua->status==1}{"selected"}{/if} >Hiển thị</option>

					<option value="0" {if $sua->status==0}{"selected"}{/if} >Ẩn</option>
					
				</select>
			</div>

			
			<h1> </h1>
			
			<div class="form-group">
				<input type="submit" class="btn btn-primary" name="sm" value="Cập nhật" onclick="return kiemtra()">
				<input type="reset" class="btn btn" value="Nhập lại">
			</div>
		</form>
	</div>
