<ol class="breadcrumb">
	<li><strong><a href="index.php">Trang tổng quan</a></strong></li>
	<li class="active"><strong>Quản lí slide</strong></li>
</ol>
<div class="col-md-6">
	
<legend><h1 class="text-center" style="color:#3C8E51"><small style="color:#3C8E51"><i class="glyphicon glyphicon-th-list"></i></small> Danh sách Slider</h1></legend>
	<table class="table table-hover text-left">
		<thead>
			<tr>
				<th class="text-center" >ID</th>
				<th class="text-center" >Hình ảnh</th>
				<th class="text-center" >Ngày đăng</th>
				<th class="text-center" >Ngày sửa</th>
				<th class="text-center" >Bắt đầu</th>
				<th class="text-center" >Trạng thái</th>
				<th class="text-center" >Chức năng</th>
			</tr>
		</thead>
		<tbody>
			
			{if isset($c_sl)}
			{foreach $c_sl as $row}
				<tr>
					<td class="text-center" >{$row->id}</td>
					<td class="text-center" ><img src="../public/images/slider/{$row->name}" alt="" width="100px"></td>
					<td class="text-center" >{$row->date_up}</td>
					<td class="text-center" >{$row->date_edit}</td>
					<td class="text-center" >
						<input type="checkbox" {if ($row->ma_sl==3)}{"checked"}{/if}>
					</td>
					<td class="text-center" >{if ($row->status)==1}Hiển thị {else}Ẩn{/if}</td>
					<td class="text-center" >
						<a href="edit_slider.php?id={$row->id}"
						 title="Sửa"><i class="glyphicon glyphicon-pencil"></i></a>
					</td>
				</tr>
				{/foreach}
				{/if}
			</tbody>
		</table>
		
</div>
<div class="col-md-6">
	<legend>
		<h1 class="text-center" style="color:#1F8021"><small style="color:#1F8021"><i class="glyphicon glyphicon-film"></i></small> Hiển thị slider</h1>
	</legend>
	
	<div id="carousel-id" class="carousel slide" data-ride="carousel" style="margin-top:80px">

			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				<li data-target="#carousel-id" data-slide-to="3" class=""></li>
				<li data-target="#carousel-id" data-slide-to="4" class=""></li>
			</ol>
			<div class="carousel-inner">
				{if isset($c_sl)}
				{foreach $c_sl as $kq}
				<div class="item {if $kq->ma_sl==3}{'active'}{/if}">
					<img style="height:300px !important; width:100%" src="../public/images/slider/{$kq->name}" >
					<div class="container">
						<!-- <div class="carousel-caption">
							<h1></h1>
							<p></p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
						</div> -->
					</div>
				</div>
				{/foreach}
				{/if}
				
		       
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
</div>