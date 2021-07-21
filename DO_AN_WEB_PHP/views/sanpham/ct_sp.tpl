{block name="sp_content_left"}{include file="views/sanpham/sp_content_left.tpl"}{/block}
<div class="col-md-8 col-md-push-1">
	<div class="row">
		<div class="col-sm-12 col-md-12" style=";">
			<h4 class="text-center" style="font-weight:bold;line-height:40px;background:rgba(204,204,204,0.5);box-shadow:1px 2px 3px">Chi tiết sản phẩm</h4>
		</div>
	</div>
	<div class="row">
		{if isset($ct_sp)}
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="public/images/caytrong/{$ct_sp->image}" alt="{$ct_sp->name}" class="img-responsive">
				<h3>{$ct_sp->name}</h3>
				<p>
					{if $ct_sp->sale==1}<p><span ><s>Giá cũ:{number_format($ct_sp->price)} vnđ</s></span>
		            </p>
		            <p>Giá sale:{number_format($ct_sp->sale_price)} vnđ

		            {/if}
		            {if $ct_sp->sale==0}
		            <p>Giá:{number_format($ct_sp->price)} vnđ</p>
		            <p>&nbsp;</p>
		            {/if}
				</p>
				<p>
					<input type="hidden" id="dongia{$ct_sp->id}" name="dongia" value="{if ($ct_sp->sale==0)}{$ct_sp->price}{else}{$ct_sp->sale_price}{/if}"/>
		              <span>Số lượng:</span><input type="text" value="1" size="2" name="soluong" id="soluong{$ct_sp->id}" /></p>
		              <a class="btn btn-success button-1" name="id" href="javascript:void(0)" id="{$ct_sp->id}" >Mua ngay</a>
					<a href="#" class="btn btn-default" role="button">Xem thêm</a></p>
				<div class="caption">
					{$ct_sp->s_describe}
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<ul class="nav nav-tabs" id="ctsp">
				<li class="active"><a data-toggle="tab" href="#home">Thông số</a></li>
				<li><a data-toggle="tab" href="#menu1">Chi tiết</a></li>
				<li><a data-toggle="tab" href="#menu2">Hình ảnh</a></li>
			</ul>

			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<h1></h1>
					<p><strong>Tên sp:</strong>{$ct_sp->name}</p>
					<p><strong>Bán theo:</strong>{if ($ct_sp->manny==0)}Gói{elseif ($ct_sp->manny==1)}Hạt{else}Sản phẩm{/if}</p>
					<p><strong>Giá:</strong>{number_format($ct_sp->price)} vnđ/1{$ct_sp->manny}</p>
					<p><strong>Ngày Đăng:</strong>{$ct_sp->date_up}</p>
					<p><strong>Mô tả ngắn:</strong>{$ct_sp->s_describe}</p>
					<p><strong>Nhập khẩu:</strong>Ấn Độ</p>
					
				</div>
				<div id="menu1" class="tab-pane fade">
					<h1></h1>
					<h4>
						{$ct_sp->describe}
					</h4>
				</div>
				<div id="menu2" class="tab-pane fade">
					<h1></h1>
					{foreach $img_child as $img_same}
				        {if $img_same!=""}
				       <img src="public/images/caytrong/{$img_same}" alt="" width="100px" height="100px" data-toggle="modal" 
				       data-target="#c{$ct_sp->id}">
				     {/if}
				     {/foreach}
				        <div class="modal fade bs-example-modal-sm" id="c{$ct_sp->id}" role="dialog">
						    <div class="modal-dialog">
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						        </div>
						        <div class="modal-body">
					{foreach $img_child as $img_same}
				       {if $img_same!=""}
						          <img src="public/images/caytrong/{$img_same}" alt="" width="100%" height="400px">
					 {/if}
				     {/foreach}
				     </div>
					</div>
					</div>
					</div>
					<!-- <img src="public/images/caytrong/{$img_child["0"]}" alt="" width="100px" height="100px" data-toggle="modal" data-target="#myModal">
					<img src="public/images/caytrong/{$img_child["1"]}" alt="" width="100px" height="100px">
					<img src="public/images/caytrong/{$img_child["2"]}" alt="" width="100px" height="100px">
					<img src="public/images/caytrong/{$img_child["3"]}" alt="" width="100px" height="100px"> -->
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="fb-comments" data-href="http://localhost:97/DO_AN/index_sanpham.php?id={$ct_sp->id}" data-width="100%" data-numposts="15"></div>
	</div>
</div>
{/if}
<style>
#ctsp li:hover{
	background: transparent !important;
}
#ctsp li a:hover{
	background: transparent !important;
}
#ctsp a{
	color: black;
}
</style>