<ol class="breadcrumb">
    <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
    <li class="active"><strong>Quản lí giỏ hàng</strong></li>
</ol>
<div class="col-md-12">
    <legend><h2  class="text-center text-success"><span class="glyphicon glyphicon-shopping-cart"></span>Giỏ Hàng</h2>
    </legend>
            <table class="table table-hover table-bordered">
                <thead> 
                <tr class=" success">
                    <th class="text-center ">Id</th>
                    <th class="text-center">Tên khách hàng</th>
                    <th class="text-center">Mã hóa đơn</th>
                   <!--  <th class="text-center">Tổng sản phẩm</th> -->
                    <th class="text-center">Tổng tiền</th>
                    <th class="text-center">Trạng thái</th>
                    <th class="text-center">Chức năng</th>
                </tr>
                </thead>
                <tbody>
                {if isset($gh)}
                {foreach $gh as $sp1}
                <tr>
                    <td class="text-center">{$sp1->cus_id}</td>
                    <td class="text-center">{$sp1->cus_name}</td>
                    <td class="text-center">{$sp1->b_id}</td>
                    <!-- <td class="text-center"></td> -->
                    <td class="text-center">{number_format($sp1->b_cprice)} vnđ</td>
                    <td class="text-center">
                        <form action="edit_giohang.php?id={$sp1->cus_id}" method="post">
                       <select name="status" id="">
                           <option value="0" {if ($sp1->cus_status)==0}selected{/if}>Mới</option>
                           <option value="1" {if ($sp1->cus_status)==1}selected{/if}>Đang hoàn thiện</option>
                           <option value="2" {if ($sp1->cus_status)==2}selected{/if}>Hoàn thiện</option>
                       </select>
                        
                    </td>
                    <!-- <td class="text-center">{$sp1->sale_price}</td>
                    <td class="text-center">{$sp1->sale}</td>
                    <td class="text-center">{$sp1->special}</td>
                    <td class="text-center">{$sp1->describe}</td>
                    <td class="text-center">{$sp1->s_describe}</td>
                    <td class="text-center">{$sp1->date_up}</td>
                    <td class="text-center">{$sp1->date_edit}</td> -->
                    <td class="text-center">
                     <p align="center"><a href="ht_giohang.php?id={$sp1->b_id}&cus_id={$sp1->cus_id}">[Xem]</a>                  
                    <button name="cn" title="Cập nhật"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;</button>
                    </form> 
                    {if ($sp1->cus_status)==0}<a href="del_giohang.php?id={$sp1->b_id}" title="Xóa" onClick="return confirm('Bạn có chắc chắn xóa không ?')"><span class="glyphicon glyphicon-trash"></span></a>{/if}</p>
                    </td>

    </div>
</div>
                </tr>
                
                {/foreach}
                {/if}
            </tbody>
        </table>
<div class="text-center">
         {$listpage}
     </div>
</div>