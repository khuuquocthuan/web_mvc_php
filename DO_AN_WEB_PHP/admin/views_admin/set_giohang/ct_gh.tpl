<ol class="breadcrumb">
  <li><strong><a href="index.php">Trang tổng quan</a></strong></li>
  <li class="active"><strong>Chi tiết hóa đơn</strong></li>
</ol>
<div class="col-md-12">
	<legend><h3  class="text-center text-success"><span class="glyphicon glyphicon-edit"></span> Chi tiết sản phẩm</h3></legend>
	<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Thông số</a></li>
  <li><a data-toggle="tab" href="#menu1">Thông tin khách hàng</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
     <div class="col-md-9 col-md-push-1">
      <h1></h1>
  	<table class="table table-hover table-bordered">
              <thead>
                <tr class="active">
                    <th class="text-center">Sản phẩm</th>
                    <th class="text-center">Hình ảnh</th>
                    <th class="text-center">Số lượng</th>
                    <th class="text-center">Thành tiền</th>
                </tr>
                </thead>
                <tbody>
                  {if isset($ctgh)}
                  {foreach $ctgh as $ct }
                <tr>
                    <td class="text-center">{$ct->pr_name}</td>
                    <td class="text-center"><img src="../public/images/caytrong/{$ct->pr_image}" alt="" width="100px" height="100px"></td>
                    <td class="text-center">{$ct->pb_count}</td>
                    <td class="text-center">{$ct->pb_cprice|number_format} vnđ</td>
                </tr>
                {/foreach}
                {/if}
            </tbody>
            </table>
          </div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <div class="col-md-8 col-md-push-1">
      <form  action="" method="POST" role="form">
                    <h1></h1>
                    <legend style="color:#449839">Thông tin khách hàng</legend>
                    <div class="form-group">
                        <label for="">Họ tên khách hàng</label>
                        <p id="err_name"></p>
                        {$ctkh->cus_name}
                    </div>
                    <div class="form-group">
                        <label for="">Đại chỉ email</label>
                        <p id="err_email"></p>
                        {$ctkh->cus_email}
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <p id="err_phone"></p>
                        {$ctkh->cus_phone}
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ gửi hàng </label>
                        <p id="err_address"></p>
                        <textarea name="address" id="address" class="form-control" rows="3">{$ctkh->cus_address}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Ghi chú</label>
                        <p id="err_note"></p>
                        {$ctkh->cus_note}
                    </div>
    </form>
    </div>
       
  </div>
</div>
</div>