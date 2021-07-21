<ol class="breadcrumb">
  <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
  <li class="active"><strong>Chi tiết sản phẩm</strong></li>
</ol>
<div class="col-md-12">
	<legend><h3  class="text-center text-success"><span class="glyphicon glyphicon-edit"></span> Chi tiết sản phẩm</h3></legend>
	<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Thông số</a></li>
  <li><a data-toggle="tab" href="#menu1">Hình ảnh</a></li>
  <li><a data-toggle="tab" href="#menu2">Mô tả</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  	{if  isset($sp)}
    <h3>Thông số:</h3>
    <p>ID:<strong>{$sp->id}</strong></p>
    <p>Tên sản phẩm:<strong>{$sp->name}</strong></p>
    <p>Thuộc danh mục:<strong>
      {if ($sp->c_id)==3}{"Cây ăn quả"}{/if}
      {if ($sp->c_id)==4}{"Cây ăn lá"}{/if}
      {if ($sp->c_id)==5}{"Cây ăn củ"}{/if}
      {if ($sp->c_id)==6}{"Cây cảnh"}{/if}
      {if ($sp->c_id)==7}{"Bình tưới"}{/if}
      {if ($sp->c_id)==8}{"Giá thể"}{/if}
      {if ($sp->c_id)==9}{"Đất trồng"}{/if}
      {if ($sp->c_id)==10}{"Chậu trồng"}{/if}
    </strong></p>
    <p>Giá:<strong>{$sp->price}</strong></p>
    <p><span>Giảm giá:<strong>{if ($sp->sale)==1}{"Có"}{/if} {if ($sp->sale)==0}{"Không"}{/if}</span></strong> &nbsp; &nbsp;  <span>Giá sale:<strong>{$sp->sale_price}</span></strong></p>
    <p><strong>Bán theo:</strong>{if ($sp->manny==0)}Gói{elseif ($sp->manny==1)}Hạt{else}Sản phẩm{/if}</p>
    <p>Đặc biệt:<strong>{if ($sp->special)==1}{"Có"}{/if} {if ($sp->special)==0}{"Không"}{/if}</strong>&nbsp; &nbsp;
    <span>Hiển thị:<strong>{if ($sp->status)==1}{"Có"}{/if} {if ($sp->status)==0}{"Không"}{/if}</strong></span>
    </p>
    <p>Ngày đăng:<strong>{$sp->date_up}</strong></p>
    <p>Ngày sửa:<strong>{$sp->date_edit}</strong></p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Hình ảnh</h3>
    <p>Hình ảnh chính</p>
    <img width="200px" height="200px" src="../public/images/caytrong/{$sp->image}" alt="">
    <p>Ảnh liên quan</p>
     {foreach $mang as $img_same}
        {if $img_same!=""}
        <img width="200px" height="200px" src="../public/images/caytrong/{$img_same}" alt="">
        {/if}
     {/foreach}
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Mô tả</h3>
    <p><strong>Mô tả ngắn:</strong>{$sp->s_describe}</p>
    <p><strong>Mô tả chi tiết:</strong>{$sp->describe}</p>
    {/if}
  </div>
</div>
</div>