<ol class="breadcrumb">
  <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
  <li class="active"><strong>Cập nhật slide</strong></li>
</ol>
<div class="col-md-10 col-md-push-1">
    <h1></h1>
<legend class="text-center text-success"><strong><span class="glyphicon glyphicon-pencil"></span> THÊM LOẠI</strong></legend>
        <form class="vertical form" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label for="exampleInputEmail1">Id</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{$c_sl->id}" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Chọn ảnh</label>
            <input type="file" id="exampleInputFile" name="image">
          </div>
           <b>Trạng thái</b>
          <div class="form-group">

          <select name="status" id="">
              <option value="0" {if ($c_sl->status==0)}selected{/if}>Ẩn</option>
              <option value="1" {if ($c_sl->status==1)}selected{/if}>Hiển thi</option>
          </select>
      </div>
          <b>Bắt đầu</b>
          <div class="checkbox">
            <label>
              <input name="ma_sl" type="checkbox" {if ($c_sl->ma_sl==3)}checked{/if}> Slider xuất hiện đầu 
            </label>
          </div>
          <input type="submit" name="sm" class="btn btn-success" value="Cập nhật">
          <button type="submit" class="btn btn-info">Nhập lại</button> 
        </form>
</div>
</div>
