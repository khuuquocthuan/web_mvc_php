<div class="col-sm-12 col-md-2" style="margin-right:50px;float:right" >
    <!-- First Featurette -->
    <div class="row text-center">
        <style>
        .nav-tabs li:hover{
            background-color:#32B63B!important;
        }
        </style>
           
        <div class="row">
          <div class="col-sm-12 col-md-12" style="">
            <h4 class="text-center" style="font-weight:bold;line-height:40px;background:rgba(204,204,204,0.5);box-shadow:1px 2px 3px">Danh mục sản phẩm</h4>
        </div>
    </div>
<div class="row text-center">
    <div class="col-sm-12" >
        <ul class="nav nav-pills nav-stacked" id="cate">
            <h2>Cây trồng</h2>
           {if isset($menu1)}
           {foreach $menu1 as $menu}
            <li style="border-bottom:1px dashed #5FB263"><a class="c2mn" href="index_loaisp.php?id={$menu->id}" >
                <strong>{$menu->name}</strong>
            </a></li>
            {/foreach}
            {/if}
        </ul>

        <ul class="nav nav-pills nav-stacked text-center">
            <h2>Dụng cụ</h2>
            {if isset($menu2)}
           {foreach $menu2 as $menudc}
            <li style="border-bottom:1px dashed #5FB263"><a class="c2mn" href="index_loaisp.php?id={$menudc->id}" >
                <strong>{$menudc->name}</strong>
            </a></li>
            {/foreach}
            {/if}
    </ul>
</div>
</div>
<h1></h1>
<div class="row" style="margin-left:10px">
    <!-- <div class="panel panel-success">
        <div class="panel-heading">Lọc sản phẩm</div>
        <div class="panel-body">
            <select name="" id="" class="form-control">
                <option value="1">Mới nhất</option>
                <option value="2">Giá giảm dần</option>
            </select>
        </div>
    </div> -->
</div>
</div>
</div>

<style>
.nav-pills{

    text-align:left;
}
.nav-pills a i{
    color: #41DA31;

}
    /* .nav-pills a {
        font-size: 16px; 
        }*/
        .nav-pills a{
            color:#1B0A0A !important;

        }
        .nav-stacked li{
            bottom: 1px dotted #10AE2E !important;
        }
.c2mn:hover{
            color: #22A935 !important;
        }
</style>










