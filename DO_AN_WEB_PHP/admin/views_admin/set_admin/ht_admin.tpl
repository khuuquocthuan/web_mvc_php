<ol class="breadcrumb">
	<li><strong><a href="index.php">Trang tổng quan</a></strong></li>
	<li class="active"><strong>Quản lí admin</strong></li>
</ol>
	<legend><h1 class="text-center" style="color:#3C8E51"><small style="color:#3C8E51"><i class="glyphicon glyphicon-th-list"></i></small> Danh sách admin</h1><a href="add_admin.php"><i class="glyphicon glyphicon-plus"></i> Thêm admin</a></legend>
	<table class="table table-hover text-left">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tên</th>
				<th>Uername</th>
				<th>Email</th>
				<th>Ngày sinh</th>
				<th>Ngày Thêm</th>
				<th>Trạng thái</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			
			{if isset($ht_admin)}
			{foreach $ht_admin as $row}
				<tr>
					<td>{$row->id}</td>
					<td>{$row->name}</td>
					<td>{$row->user}</td>
					<td>{$row->email}</td>
					<td>{$row->date_born}</td>
					<td>{$row->date_up}</td>
					<td>{if $row->status==1}{"Hiển thị"}{/if}{if !($row->status==1)}{"Ẩn"}{/if}</td>
					<td>
						<a href="edit_admin.php?id={$row->id}" title="Sửa"><i class="glyphicon glyphicon-pencil "></i></a>
						<a href="del_admin.php?id={$row->id}"
							 onclick="return confirm('Bạn có chắc muốn xóa loại sản phẩm mã {$row->id} hay không?') "
						 title="Xóa"><i class="glyphicon glyphicon-trash"></i></a>

					</td>
				</tr>
				{/foreach}
				{/if}
			</tbody>
		</table>
		
	

		

	
	