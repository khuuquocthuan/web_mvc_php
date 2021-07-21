<ol class="breadcrumb">
	<li><strong><a href="index.php">Trang tổng quan</a></strong></li>
	<li class="active"><strong>Thiết lập chung</strong></li>
</ol>
<div class="row">
	<div class="col-md-6 cog">
		<form action="" method="post" role="form" enctype="multipart/form-data">
			<legend class="text-center text-success"><strong><span class="glyphicon glyphicon-pencil"></span> CẬP NHẬT MỚI</strong></legend>
			<div class="form-group">
				<label for="">Tiêu đề website:</label>
				<input type="text" name="tittle" class="form-control" id="" value="{$mweb->tittle}">
			</div>
			<div class="form-group">
				<label for="">Đổi logo:</label>
				<input type="file" name="logo" class="form-control" id="" placeholder="Chọn hình ảnh">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại:</label>
				<input type="text" name="phone" class="form-control" id="" value="{$mweb->phone}">
			</div>
			<div class="form-group">
				<label for="">Email:</label>
				<input type="text" name="email" class="form-control" id="" value="{$mweb->email}">
			</div>
			<div class="form-group">
				<label for="">Facebook:</label>
				<input type="text" name="face" class="form-control" id="" value="{$mweb->face}">
			</div>
			<div class="form-group">
				<label for="">Địa chỉ:</label>
				<input type="text" name="address" class="form-control" id="" value="{$mweb->address}">
			</div>
			<div class="form-group">
				<label for="">Nội dung giới thiệu:</label>
				<textarea class="form-control" name="s_describe" rows="5" >{$mweb->s_describe}</textarea>
			</div>
			<p class="text-center">
				<button type="submit" name="sm" class="btn btn-primary">Cập nhật</button>
				<button type="reset" class="btn btn-primary">Nhập lại</button>
			</p>
		</form>
	</div>
	<div class="col-md-6">
		<legend class="text-center text-success"><strong><span class="glyphicon glyphicon-th"></span> THÔNG TIN HIỆN TẠI</legend>
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th class="col-md-4">Tiêu đề website</th>
					<th class="col-md-8 text-primary">{$mweb->tittle}</th>
				</tr>
			</thead>
			<thead>
				<tr> 
					<th class="col-md-4">Logo hiện tại</th>
					<th class="col-md-8"><p class="text-center"><img src="../public/images/logo/{$mweb->logo}" class="img-responsive"></p></th>
				</tr>
			</thead>	
			<thead>
				<tr>
					<th class="col-md-4">Nội dung giới thiệu</th>
					<th class="col-md-8 text-primary">{$mweb->s_describe}</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th class="col-md-4">Số điện thoại</th>
					<th class="col-md-8 text-primary">{$mweb->phone}</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th class="col-md-4">Địa chỉ</th>
					<th class="col-md-8 text-primary">{$mweb->address}</th>
				</tr>
			</thead>
		</table>
	</div>
</div>