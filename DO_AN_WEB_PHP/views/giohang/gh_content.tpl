{block name="sp_content_right"}{include file="views/sanpham/sp_content_left.tpl"}{/block}
<div class="col-md-8 col-md-push-1">
	<div class="row">
		{if isset($ds_mon_an) || isset($ds_thuc_don)}
		<div class="col-sm-12 col-md-12" style=";">
			<h4 class="text-center" style="font-weight:bold;line-height:40px;background:rgba(204,204,204,0.5);box-shadow:1px 2px 3px">Chi tiết giỏ hàng</h4>
		</div>
	</div>
	<h1></h1>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered ">
				<tr>
					<th  class="text-center">Mã sp</th>
					<th class="text-center">Tên sp</th>
					<th class="text-center">Hình ảnh</th>
					<th class="text-center">Số lượng</th>
					<th class="text-center">Giá</th>
					<th class="text-center">Tổng tiền</th>
					<th class="text-center"></th>
				</tr>
				{if isset($giohang)}
				<tr>
					<td class="text-center">{$giohang->id}</td>
					<td class="text-center">Bí ngô</td>
					<td class="text-center">
						<img src="public/images/caytrong/bingo.jpg" alt="" width="100px" height="100px">
					</td>
					<td class="text-center">
						<input type="checkbox" name="{{$item->ma_mon}}" value="{$item->don_gia}"/>
						</td>
						<td class="text-center">10 000vnđ</td>
						<td class="text-center">10 000vnđ</td>
						<td class="text-center"  class="text-center"><a style="color:#5960F4" href=""><i class="glyphicon glyphicon-trash"></i></a></td>
					</tr>
					{/if}
				</table>
				<p class="text-right">
					<p><strong>Số sản phẩm:1</strong></p>
					<p><strong>Thành tiền:10000 vnđ</strong></p>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				<i class="glyphicon glyphicon-ok-sign"></i> Thanh toán
			</button>
			<button class="btn" type="button">
				<i class="glyphicon glyphicon-retweet"></i> Cập nhật giỏ hàng
			</button>
			<button class="btn" type="button">
				<i class="glyphicon glyphicon-remove-sign"></i>Xóa giỏ hàng
			</button>
			<div class="collapse" id="collapseExample">
				<form action="" method="POST" role="form">
					<legend>Nhập thông tin khách hàng</legend>
				
					<div class="form-group">
						<label for="">Họ tên khách hàng</label>
						<input type="text" class="form-control" id="" >
					</div>
					<div class="form-group">
						<label for="">Đại chỉ email</label>
						<input type="text" class="form-control" id="" >
					</div>
					<div class="form-group">
						<label for="">Số điện thoại</label>
						<input type="text" class="form-control" id="" >
					</div>
					<div class="form-group">
						<label for="">Địa chỉ gửi hàng </label>
						<input type="text" class="form-control" id="" >
					</div>
					<div class="form-group">
						<label for="">Gửi</label>
						<input type="text" class="form-control" id="" >
					</div>
				
					
				
					<input type="submit" class="btn btn-success" value="Gửi đi">
					<input type="reset" class="btn btn-danger" value="Nhập lại">
					<h1></h1>
			</div>
			
				</form>
				
			</div>
		</div>
	</div>