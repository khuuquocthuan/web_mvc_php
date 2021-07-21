{block name="home_slider"}{include file="views/home/home_slider.tpl"}{/block}
<div class="container">
<div class="row">
				<legend>
					<h1 class="text-center">
						Sản phẩm khuyến mại
					</h1>
				</legend>

			</div>
			<div class="row">
				{if isset($product)}
				{foreach $product as $row}
				<div class="col-xs-12 col-sm-12  col-md-3">
					<div class="thumbnail">
				      <img src="public/images/caytrong/{$row->image}" alt="Bí Ngô" class="img-responsive">
				      <h3>{$row->name}</h3>
				        <p><span style="text-decoration: line-through">Giá cũ:{number_format($row->price)} vnđ</span> Giá:{number_format($row->sale_price)} vnđ</p>
				        <p>
				        <input type="hidden" id="dongia{$row->id}" name="dongia" value="{if ($row->sale==0)}{$row->price}{else}{$row->sale_price}{/if}"/>
		              <span>Số lượng:</span><input type="text" value="1" size="2" name="soluong" id="soluong{$row->id}" /></p>
		              <a class="btn btn-success button-1" name="id" href="javascript:void(0)" id="{$row->id}" >Mua ngay</a>
				        <a href="index_ctsanpham.php?id={$row->id}" class="btn btn-default" role="button">Xem thêm</a></p>
				      <div class="caption">
				        <p>{$row->s_describe}</p>
				      </div>
				     <div class="sale">
                        <div class="sale-text">
                           Sale
                        </div>
                     </div>
				 </div>
				</div> 
				 {/foreach}
				 {/if}

			</div>
				
				<legend>
					<h1 class="text-center">
						Sản phẩm Mới
					</h1>
				</legend>
				{if isset($product_nb)}
				{foreach $product_nb as $row_nb}
				<div class="col-xs-12 col-sm-12  col-md-3">
					<div class="thumbnail">
				      <img src="public/images/caytrong/{$row_nb->image}" alt="Bí Ngô" class="img-responsive">
				      <h3>{$row_nb->name}</h3>
				        <p><span style="text-decoration: line-through">Giá cũ:{$row_nb->price}</span> Giá:{$row_nb->sale_price} vnđ</p>
				        <p>
				        <input type="hidden" id="dongia{$row->id}" name="dongia" value="{if ($row->sale==0)}{$row->price}{else}{$row->sale_price}{/if}"/>
		              <span>Số lượng:</span><input type="text" value="1" size="2" name="soluong" id="soluong{$row->id}" /></p>
		              <a class="btn btn-success button-1" name="id" href="javascript:void(0)" id="{$row->id}" >Mua ngay</a>
				        <a href="index_ctsanpham.php?id={$row->id}" class="btn btn-default" role="button">Xem thêm</a></p>
				      <div class="caption">
				        <p>{$row_nb->s_describe}</p>
				      </div>
				     <div class="sale">
                        <div class="sale-text">
                           New
                        </div>
                     </div>
				 </div>
				</div> 
				 {/foreach}
				 {/if}
							
			
			</div>
{block name="home_phanhoi"}{include "views/home/home_phanhoi.tpl"}{/block}
</div>