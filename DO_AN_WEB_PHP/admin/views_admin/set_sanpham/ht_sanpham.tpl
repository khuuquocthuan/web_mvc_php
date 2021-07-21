<ol class="breadcrumb">
    <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
    <li class="active"><strong>Quản lí sản phẩm</strong></li>
</ol>
<div class="col-md-12">
    <legend><h2  class="text-center text-success"><span class="glyphicon glyphicon-th"></span> BẢNG SẢN PHẨM</h2>
    <p><a href="add_sanpham.php"><span class="glyphicon glyphicon-plus"></span>Thêm mới</a></p>
    </legend>

    <!-- <div class="table-responsive"> -->
            <table class="table table-hover table-bordered">
                <thead>
                 <!-- `id`, `c_id`, `name`, `price`, `sale_price`, `image`, `describe`, `sale`, `special`, `status`
                manny`, `date_up`, `date_edit`, `image_same`, `s_describe
                 ,-->   
                <tr class=" success">
                    <th class="text-center ">Id</th>
                    <th class="text-center">C_id</th>
                    <th class="text-center">Tên</th>
                    <th class="text-center">Giá</th>
                    <th class="text-center">Hình ảnh</th>
                    <th class="text-center">Trạng thái</th>
                    <!-- <th class="text-center">Giá sale</th>
                    <th class="text-center">Sale</th>
                    <th class="text-center">Đặc biệt</th>
                    <th class="text-center">Mô tả</th>
                    <th class="text-center">Sơ lược</th>
                    <th class="text-center">Ngày thêm</th>
                    <th class="text-center">Ngày sửa</th> -->
                    <th class="text-center">Chức năng</th>
                </tr>
                </thead>
                <tbody>
                {if isset($sp)}
                {foreach $sp as $sp1}
                <tr>
                    <td class="text-center">{$sp1->id}</td>
                    <td class="text-center">{$sp1->c_id}</td>
                    <td class="text-center">{$sp1->name}</td>
                    <td class="text-center">{$sp1->price}</td>
                    <td class="text-center"><img src="../public/images/caytrong/{$sp1->image}" width="80px" height="80px"></td>
                    <td class="text-center">
                        {if $sp1->status==1}{"Hiển thị"}{/if}
                        {if !($sp1->status==1)}{"Ẩn"}{/if}
                    </td>
                    <!-- <td class="text-center">{$sp1->sale_price}</td>
                    <td class="text-center">{$sp1->sale}</td>
                    <td class="text-center">{$sp1->special}</td>
                    <td class="text-center">{$sp1->describe}</td>
                    <td class="text-center">{$sp1->s_describe}</td>
                    <td class="text-center">{$sp1->date_up}</td>
                    <td class="text-center">{$sp1->date_edit}</td> -->
                    <td class="text-center">
                     <p align="center"><a href="ct_sanpham.php?id={$sp1->id}">[Xem]</a>                  
                    <a href="edit_sanpham.php?id={$sp1->id}" title="Sửa"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;
                    <a href="del_sanpham.php?id={$sp1->id}" title="Xóa" onClick="return confirm('Bạn có chắc chắn xóa không ?')"><span class="glyphicon glyphicon-trash"></span></a></p>
                  
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
