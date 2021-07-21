{literal}
<script>
    function kiemtra(){
        var name=document.getElementById('name');
        if (name.value=="") {
            document.getElementById("err_name").innerHTML="Bạn đang để trống tên";
            name.focus();
            return false;
        }
        else{
            document.getElementById("err_name").innerHTML="";
        }
        var email=document.getElementById('email');
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (email.value=="" || !re.test(email.value)) {
                document.getElementById('err_email').innerHTML="Email sai định dạng";
                email.focus();
                return false;   
            }
            
            else{
                document.getElementById("err_email").innerHTML="";
            }
        var phone=document.getElementById('phone');
        if (phone.value=="") {
                document.getElementById('err_phone').innerHTML="Số điện thoại nhập sai định dạng";
                phone.focus();
                return false;
            }
            else{
                document.getElementById("err_phone").innerHTML="";
            }
        var rep=document.getElementById('address');
        if (rep.value=="") {
                document.getElementById('err_address').innerHTML="Bạn đang để trống địa chỉ";
                rep.focus();
                return false;
            }
            else{
                document.getElementById("err_address").innerHTML="";
            }
        var note=document.getElementById('note');    
        if (note.value=="") {
                document.getElementById('err_note').innerHTML="Bạn đang để trống ghi chú";
                note.focus();
                return false;
            }
            else{
                document.getElementById("err_note").innerHTML="";
            }
        return true;
    }
</script>
{/literal}
{block name="sp_content_right"}{include file="views/sanpham/sp_content_left.tpl"}{/block}
<div class="col-md-8 col-sm-push-1">
<section id="content">
  <div class="main" style="min-height:768px" id="th_giohang">
    {if isset($ds_mon_an) || isset($ds_thuc_don)}
        <div>{assign var=tien_mon_an value=0}
        <form action="index_giohang.php" method="post">
    {if isset($ds_mon_an)}       
        <legend><h2 class="text-center" style="color:#149911;font-weight:bold">Giỏ hàng</h2></legend>
        <table class="table table-bordered table-hover">
            <tr><th >Mã món</th><th>Tên món</th><th>Hình ảnh</th><th>Số lượng</th><th>Đơn giá</th><th>Thành tiền</th><th>Xóa</th></tr>
        {foreach $ds_mon_an as $item}
            <tr>
                <td>
                    {$item->id}
                </td>
                <td>
                    {$item->name}
                </td>
                <td>
                    <img src="public/images/caytrong/{$item->image}" width="100px" height="100px" alt="">
                </td>
                <td>
                    <input type="text" value="{$item->so_luong}" name="soluong{$item->id}" style="width:70px; text-align:center"/>
                    <input type="hidden" value="{if ($item->sale==0)}{$item->price}{else}{$item->sale_price}{/if}" name="dongia{$item->id}"/>
                </td>
                <td align="right">
                    {if ($item->sale==0)}{$item->price}{else}{$item->sale_price}{/if}
                </td>
                <td align="right">
                    {if ($item->sale==0)}{$item->so_luong * $item->price}{else}{$item->so_luong*$item->sale_price}{/if} 
                    {if ($item->sale==0)}{$tien_mon_an=$tien_mon_an+$item->so_luong*$item->price}{else}{$tien_mon_an=$tien_mon_an+$item->so_luong*$item->sale_price}{/if}
                </td>
                <td align="center">
                    <input type="checkbox" name="{{$item->id}}" value="{$item->price}"/>
                </td>
            </tr>
        {/foreach}
            <input type="hidden" value="{$tien_mon_an}" name="httt"/>
            <tr bgcolor="#FFE9D2"><td colspan="4" align="right"><strong>Tổng tiền:</strong></td><td align="right">{number_format($tien_mon_an)}đ</td></tr>
        </table> 
    {/if} 
    
    <p align="center">
    <input type="submit" name="btnCapnhat" value="Cập nhật" class="button-2 btn btn-primary" />
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    <i class="glyphicon glyphicon-ok-sign"></i> Thanh toán
    </button>
    <button  class="button-1 btn btn-info" id="btnxoa" class="art-button" /><i class="glyphicon glyphicon-remove-sign"></i> Xóa giỏ hàng</button>
    </p>
    </form>
    </div>
    <div class="row">
            <div class="col-md-12">
                <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <i class="glyphicon glyphicon-ok-sign"></i> Thanh toán
            </button>
            <button class="btn button-2" type="button"  onclick="window.location.href = 'khach_hang.php?key=dat-hang'" value="Đặt hàng" class="art-button" >
                <i class="glyphicon glyphicon-retweet"></i> Cập nhật giỏ hàng
            </button>
            <input class="btn button-1" type="button" id="btnxoa" value="Xóa giỏ hàng" class="art-button">
                <i class="glyphicon glyphicon-remove-sign"></i>Xóa giỏ hàng
            </button> -->
            <style>
                .collapse p{
                    color: red;
                }
            </style>
            <div class="collapse" id="collapseExample">
                <form action="" method="POST" role="form">
                    <legend>Nhập thông tin khách hàng</legend>
                
                    <div class="form-group">
                        <label for="">Họ tên khách hàng</label>
                        <p id="err_name"></p>
                        <input type="text" name="name" id="name" class="form-control" id="" >
                    </div>
                    <div class="form-group">
                        <label for="">Đại chỉ email</label>
                        <p id="err_email"></p>
                        <input type="text" name="email" id="email" class="form-control" id="" >
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <p id="err_phone"></p>
                        <input type="number" name="phone" id="phone" class="form-control" id="" >
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ gửi hàng </label>
                        <p id="err_address"></p>
                        <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Ghi chú</label>
                        <p id="err_note"></p>
                        <input type="text" name="note" id="note" class="form-control" id="" >
                    </div>
                
                    
                
                    <input type="submit" name="submit" onclick="return kiemtra()" class="btn btn-success" value="Gửi đi">
                    <input type="reset" class="btn btn-danger" value="Nhập lại">
                    <h1></h1>
            </div>
            
</form>
                
            </div>
        </div>
    </div>
    {else}
        <h3 style="color:red" class="text-center"><i>Bạn chưa mua sản phẩm nào :(</i></h3> 
    {/if}
  </div>
</section>
</div>