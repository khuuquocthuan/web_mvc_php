<div class="col-md-9" style="margin-left:10px">
    <div class="row">
      <div class="col-sm-12 col-md-12" style=";">
          <h4 class="text-center" style="font-weight:bold;line-height:40px;background:rgba(204,204,204,0.5);box-shadow:1px 2px 3px">Danh sách sản phẩm</h4>
       <!--  <ul class="nav nav-tabs" style="border-color:#32B63B;color:#fff;margin:10px 0px" >
          <li role="presentation"  style="background-color:#32B63B;padding:5px;border-radius:5px 5px 0 0"><h4>Sản phẩm</h4></li>
        </ul> -->
      </div>
    </div>
    <h1></h1>
   <div class="row">
       {if isset($ds_dc)}
      {foreach $ds_dc as $ds_dcn}
      <div class="col-xs-12 col-sm-12  col-md-3">
        <div class="thumbnail">
          <img src="public/images/caytrong/{$ds_dcn->image}" alt="Bí Ngô" class="img-responsive">
          <h3>{$ds_dcn->name}</h3>
          <p>
           {if $ds_dcn->sale==1}<p><span ><s>Giá cũ:{number_format($ds_dcn->price)} vnđ</s></span>
            </p>
            <p>Giá sale:{number_format($ds_dcn->sale_price)} vnđ</p>
            {/if}
            {if $ds_dcn->sale==0}
            <p>Giá:{number_format($ds_dcn->price)} vnđ</p>
            <p>&nbsp;</p>
            {/if}
          </p>
            <p><input type="hidden" id="dongia{$ds_dcn->id}" name="dongia" value="{if ($ds_dcn->sale==0)}{$ds_dcn->price}{else}{$ds_dcn->sale_price}{/if}"/>
              <span>Số lượng:</span><input type="text" value="1" size="2" name="soluong" id="soluong{$ds_dcn->id}" /></p>
              <a class="btn btn-success button-1" name="id" href="javascript:void(0)" id="{$ds_dcn->id}" >Mua ngay</a>
              <a href="index_ctsanpham.php?id={$ds_dcn->id}" class="btn btn-default" role="button">Xem thêm</a></p>
            <div class="caption">
              <p>{$ds_dcn->s_describe}</p>
            </div>
            {if $ds_dcn->sale==1 || $ds_dcn->special==1 }
            <div class="sale">
              <div class="sale-text">
               {if $ds_dcn->sale==1}{"Sale"}{/if}
               <!-- {if $ds_dcn->special==1}{"Top"}{/if} -->
             </div>
           </div>
           {/if}
          
         </div>
       </div>
       {/foreach}
       {/if} 
   </div>
   <div class="row text-center">
     <div class="col-md-12">
      {$listpage}
     </div>
   </div>
   <div class="fb-comments" data-href="http://localhost:97/DO_AN/index_dungcu.php" data-width="100%" data-numposts="15"></div>
</div>