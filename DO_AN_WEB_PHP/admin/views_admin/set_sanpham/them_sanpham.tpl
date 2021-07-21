<script type="text/javascript" src="../public/ckeditor/ckeditor.js"></script>
<script>
    function kiemtra(){
    var name=document.getElementById('name');
    if (name.value==""){
    document.getElementById("err_name").innerHTML="Bạn đang để trống tên sản phẩm";
    name.focus();
    return false;
  }
  else{
    document.getElementById("err_name").innerHTML="";
  }
  //Mô tả ngăn
  var s_describe=document.getElementById('s_describe');
    if (s_describe.value==""){
    document.getElementById("err_s_describe").innerHTML="Bạn đang để trống mô tả sơ lược";
    s_describe.focus();
    return false;
  }
  else{
    document.getElementById("err_s_describe").innerHTML="";
  }
  //Giá
  var price=document.getElementById('price');
    if (price.value==""){
    document.getElementById("err_price").innerHTML="Bạn đang để trống giá sản phẩm";
    price.focus();
    return false;
  }
  else{
    document.getElementById("err_price").innerHTML="";
  }
  //Ảnh
  var image=document.getElementById("image");
  if (image.value=="") {
    document.getElementById("err_image").innerHTML="Bạn đang để trống hình ảnh chính sản phẩm";
    return false;
    image.focus();
  }
  else{
    document.getElementById("err_image").innerHTML="";
  }
  //from
  var from=document.getElementById('from');
    if (from.value==""){
    document.getElementById("err_from").innerHTML="Bạn đang để trống nơi nhập khẩu";
    from.focus();
    return false;
  }
  else{
    document.getElementById("err_from").innerHTML="";
  }
  //Mô tả
  // var ckeditor=document.getElementById('ckeditor');
  //   if (ckeditor.value==""){
  //   document.getElementById("err_ckeditor").innerHTML="Bạn đang để trống Mô tả";
  //   ckeditor.focus();
  //   return false;
  // }
  // else{
  //   document.getElementById("err_ckeditor").innerHTML="";
  // }
   return true;
}
</script>
<ol class="breadcrumb">
  <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
  <li class="active"><strong>Thêm mới sản phẩm</strong></li>
</ol>
<legend><h3  class="text-center text-success"><span class="glyphicon glyphicon-edit"></span>Thêm sản phẩm</h3></legend>
  <p class="text-right">
    <form action="" method="post" enctype="multipart/form-data">
  	<input type="submit" name="sm" class="btn btn-success" value="Thêm mới" onclick="return kiemtra()">
	<button type="reset" class="btn btn-info">Nhập lại</button>
  </p>
  
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Thông số</a></li>
  <li><a data-toggle="tab" href="#menu1">Hình ảnh</a></li>
  <li><a data-toggle="tab" href="#menu2">Mô tả</a></li>
</ul>
<div class="tab-content">
<!-- <div class="col-md-8 col-md-push-2"> -->
	<div  id="home" class="tab-pane fade in active" >
	<h3>Thêm thông số</h3>
	<div class="form-group">
    <label for="exampleInputEmail1">Tên sản phẩm</label>
    <p style="color:red" id="err_name"></p>
    <input type="text" id="name" name="name" value="" class="form-control" >
  	</div>
  	<div class="form-group">
     <p style="color:red" id="err_s_describe"></p> 
    <label for="exampleInputPassword1">Mô tả ngắn:</label>
    <input type="text" id="s_describe" name="s_describe" value="" class="form-control">
  </div>
   <label for="exampleInputEmail1">Danh mục:</label>
  <select class="form-control" id="c_id" name="c_id">
  	<option value="3">Cây ăn quả</option>
  	<option value="4">Cây ăn lá</option>
  	<option value="5">Cây ăn củ</option>
  	<option value="6">Cây cảnh</option>
  	<option value="7">Bình tưới</option>
  	<option value="8">Giá thể</option>
  	<option value="9">Đất trồng</option>
  	<option value="10">Chậu trồng</option>
  </select>
  <div class="form-group">
    <p style="color:red" id="err_price"></p>
    <label for="exampleInputPassword1">Giá:</label>
    <input type="number" class="form-control" id="price" name="price" min="0">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Giá sale:</label>
    <input type="number" class="form-control" id="sale_price" name="sale_price" min="0">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Chọn ảnh chính:</label>
    <p style="color:red" id="err_image"></p>
    <input type="file" id="image" name="image" value=""> 
    </div>
  
  	<label for="">Lựa chọn</label>
  	<br>
    <label>
      <input type="checkbox" id="sale"  name="sale">
      Giảm giá
    </label>
    <label>
      <input type="checkbox" id="special" name="special" >
      Đặc biệt
    </label>
    <label>
      <input type="checkbox" id="status" name="status" >
      Hiển thị
    </label>
    <div class="form-group">
    <p style="color:red" id="err_from"></p>  
    <label for="exampleInputEmail1">Nhập khẩu:</label>
    <input type="text" class="form-control" id="from" name="from" >
  </div>
 <label for="">Bán theo:</label>
  <select class="form-control" id="manny" name="manny">
   	<option value="0">Hạt</option>
  	<option value="1">Gói</option>
    <option value="3">Sản phẩm</option>
  </select>
</div>


<div id="menu2" class="tab-pane fade">
	<label >Mô tả</label>
  <p style="color:red" id="err_ckeditor"></p>  
	<textarea id="ckeditor" class="ckeditor" name="ckeditor"></textarea>
	<script language="javascript">
	ckeditor.replace("ckeditor");
	</script>
	</div>
<div id="menu1" class="tab-pane fade">
	<h2>Chọn thêm file ảnh</h2>
	<div class="form-group">
    <label for="exampleInputFile">Chọn ảnh 1:</label>
    <input type="file" id="image1" name="image1">
    </div>
  <div class="form-group">
    <label for="exampleInputFile">Chọn ảnh 2:</label>
    <input type="file" id="image2" name="image2">
    </div>
  <div class="form-group">
    <label for="exampleInputFile">Chọn ảnh 3:</label>
    <input type="file" id="image3" name="image3">
    </div>
  <div class="form-group">
    <label for="exampleInputFile">Chọn ảnh 4:</label>
    <input type="file" id="image4" name="image4">
    </div>
</div>	
</div>
</form>
</div>
