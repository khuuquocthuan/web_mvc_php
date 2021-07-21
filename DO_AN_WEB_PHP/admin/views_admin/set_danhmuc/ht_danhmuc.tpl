<ol class="breadcrumb">
    <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
    <li class="active"><strong>Quản lí danh mục</strong></li>
</ol>
<div class="col-md-10 col-md-push-1">
   <legend ><h3 class="text-center text-success"><span class="glyphicon glyphicon-th"></span> BẢNG LOẠI</h3>
    <p><a href="add_danhmuc.php"><i class="glyphicon glyphicon-plus"></i>Thêm danh mục</a></p>
   </legend>

   	<div class="table-responsive">
        	<table class="table table-hover table-bordered">
            	<thead>
                <tr class="active">
               		<th class="text-center">ID</th>
                    <th class="text-center">TÊN</th>
                    <th class="text-center">P_ID</th>
                    <th class="text-center">DATE_UP</th>
                     <th class="text-center">NGÀY SỬA</th>
                    <th class="text-center">STATUS</th>
                   
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {if isset($dm)}  
                {foreach $dm as $dmsp }  
                <tr>
                	<td>{$dmsp->id}</td>
                    <td>{$dmsp->name}</td>
                    <td>{$dmsp->p_id}</td>
                    
                    <td>{$dmsp->date_up}</td>
                    <td>{$dmsp->date_edit}</td>
                    <td>{if $dmsp->status==1}{"Hiển thị"}{elseif !($dmsp->status==1)}{"Ẩn"}{/if}</td>
                    <td> <p align="center"><a href="edit_danhmuc.php?id={$dmsp->id}"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="del_danhmuc.php?id={$dmsp->id}" onClick="return confirm('Bạn có chắc chắn xóa không ?')"><span class="glyphicon glyphicon-trash"></span></a></p>
                    </td>
                </tr>
                {/foreach}
                {/if}
            </tbody>
            </table>
         </div>
        <div class="row text-center">
    <p>
    {$listpage}
</p>
</div>

</div>
