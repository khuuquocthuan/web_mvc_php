<script>
    function kiemtra(){
        var name=document.getElementById('name');
        if (name.value=="") {
            document.getElementById("err_name").innerHTML="Tên không được rỗng";
            name.focus();
            return false;
        }
        else
             document.getElementById("err_name").innerHTML="";
            return true;

    }

</script>
<ol class="breadcrumb">
    <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
    <li class="active"><strong>Thêm mới danh mục</strong></li>
</ol>
<div class="col-md-10 col-md-push-1">
<legend class="text-center text-success"><strong><span class="glyphicon glyphicon-pencil"></span> THÊM LOẠI</strong></legend>
        <form class="vertical form" action="" method="Post">
                <div class="form-group">
                <label class="control-label col-md-6">P_id</label>
                <div class="col-md-12">
                <select name="p_id" class="form-control">
                    <option value="1" >Cây trồng</option>'
                     <option value="2">Dụng cụ</option>
                     <option value="0" >Sản phẩm</option>
                </select>
            </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-6">Tên loại sản phẩm</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="name" name="name" value="" >
                </div>
                <p style="color:red" id="err_name"></p>
            </div>
            <div class="form-group">
                <label class="control-label col-md-6">Trạng thái</label>
                <div class="col-md-12">
                    <select name="status" class="form-control">
                    <option value="1">Hiển thị</option>
                     <option value="0">Ẩn</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">    
                    <input type="submit" name="sm"  style="margin-top:20px;" class="btn btn-primary" value="Cập nhật" onclick="return kiemtra()">
                    <button type="reset"  style="margin-top:20px;" class="btn btn-primary">Nhập lại</button>
                </div>
            </div>    
</form>
</div>
