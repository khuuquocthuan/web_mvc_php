<ol class="breadcrumb">
	<li><strong><a href="index.php">Trang tổng quan</a></strong></li>
	<li class="active"><strong>Quản lí phản hồi</strong></li>
</ol>
<div class="col-md-12">
<legend><h1 class="text-center" style="color:#3C8E51"><small style="color:#3C8E51"><i class="glyphicon glyphicon-th-list"></i></small> Danh sách phản hồi</h1></legend>
	<table class="table table-hover text-left">
		<thead>
			<tr>
				<th class="text-center" >ID</th>
				<th class="text-center" >Tên</th>
				<th class="text-center" >Email</th>
				<th class="text-center" >Số đt</th>
				<th class="text-center" >Phản hồi</th>
				<th class="text-center" >Ngày gửi</th>
				<th class="text-center" >Chức năng</th>
			</tr>
		</thead>
		<tbody>
			
			{if isset($ht_ph)}
			{foreach $ht_ph as $row}
				<tr>
					<td class="text-center" >{$row->id}</td>
					<td class="text-center" >{$row->name}</td>
					<td class="text-center" >{$row->email}</td>
					<td class="text-center" >{$row->phone}</td>
					<td class="text-center" >{$row->feedback}</td>
					<td class="text-center" >{$row->date_up}</td>
					<td class="text-center" >
						<a href="del_phanhoi.php?id={$row->id}"
							 onclick="return confirm('Bạn có chắc muốn xóa sản phẩm {$row->id} hay không?') "
						 title="Xóa"><i class="glyphicon glyphicon-trash"></i></a>
					</td>
				</tr>
				{/foreach}
				{/if}
			</tbody>
		</table>
		<div class="row text-center">{$listpage}</div>	
</div>
