<ol class="breadcrumb">
	<li class="active"><strong>Trang tổng quan</strong></li>
</ol>
<div class="col-md-4">
	<div class="panel panel-default panel-over panel-over-one">
		<div class="panel-body">
		   	<span class="glyphicon glyphicon-gift gly-one col-md-8 pull-left"></span> 
            <span class="badge badge-new col-md-4 pull-right">{$tsp} sp</span>
		   	<div class="panel panel-add col-xs-12"><h4 class="text-center col-md-12 h4-one">Tổng sản phẩm<span class="glyphicon glyphicon-arrow-right"></span></h4></div>
		</div>
	</div>
</div>
<div class="col-md-4">
	<div class="panel panel-default panel-over panel-over-two">
		<div class="panel-body">
		   	<span class="glyphicon glyphicon-comment gly-one col-md-8 pull-left"></span> 
            <span class="badge badge-new col-md-4 pull-right">{$tph} ph</span>
		   	<div class="panel panel-add col-xs-12"><h4 class="text-center col-md-12 h4-two">Phản hồi <span class="glyphicon glyphicon-arrow-right"></span></h4></div>
		</div>
	</div>
</div> 
<div class="col-md-4">
	<div class="panel panel-default panel-over panel-over-three">
		<div class="panel-body">
            <span class="glyphicon glyphicon-file gly-one col-md-8 pull-left"></span>
             <span class="badge badge-new col-md-4 pull-right">{$hdm} hđ</span>
            <div class="panel panel-add  col-xs-12"><h4 class="text-center col-md-12 h4-two">Hóa đơn mới<span class="glyphicon glyphicon-arrow-right"></span></h4></div>
		   
		</div>
	</div>
</div>
<div class="col-md-12">
    <div style="background:#65BD6B;margin-bottom:20px">
    <h1 style="padding:10px 20px;color:#fff"><i class="glyphicon glyphicon-folder-open"></i> Quản lí</h1> 
    </div>
</div>
<div class="col-md-6">
	<div class="panel panel-default panel-hislg">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-time"></span> <strong>Quản lí sản phẩm</strong></h3>
		</div>
		<div class="panel-body">
			<div class="list-group">
                <a href="set_sanpham.php" class="list-group-item">
                    <span class="badge">Xem</span>
                    <i class="glyphicon glyphicon-book"></i> Tổng sản phẩm <strong>{$tsp}</strong>
                </a>
                <a href="set_sanpham.php" class="list-group-item">
                    <span class="badge">Xem</span>
                    <i class="glyphicon glyphicon-ok-circle"></i> Sản phẩm hiện thị <strong>{$tspht}</strong> 
                </a>
            </div>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="panel panel-default panel-hislg">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-wrench"></span> <strong>Quản lí admin</strong></h3>
		</div>
    
        <div class="panel-body">
            <div class="list-group">
                <a href="set_admin.php" class="list-group-item">
                    <span class="badge">Xem</span>
                   <i class="glyphicon glyphicon-book"></i> Tổng admin <strong>{$tph}</strong>
                </a>
                <a href="set_admin.php" class="list-group-item">
                    <span class="badge">Xem</span>
                   <i class="glyphicon glyphicon-ok-circle"></i> Admin được hoạt động <strong>{$tphht}</strong>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="panel panel-default panel-hislg">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-time"></span> <strong>Quản lí đơn hàng</strong></h3>
        </div>
        <div class="panel-body">
            <div class="list-group">
                <a href="set_giohang.php" class="list-group-item">
                    <span class="badge">Xem</span>
                    <i class="glyphicon glyphicon-book"></i> Tổng đơn hàng <strong>{$thd}</strong>
                </a>
                <a href="set_giohang.php" class="list-group-item">
                    <span class="badge">Xem</span>
                    <i class="glyphicon glyphicon-ok-circle"></i> Hóa đơn chưa xem <strong>{$hdm}</strong>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="panel panel-default panel-hislg">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-time"></span> <strong>Quản lí danh mục</strong></h3>
        </div>
        <div class="panel-body">
            <div class="list-group">
                <a href="set_danhmuc.php" class="list-group-item">
                    <span class="badge">Xem</span>
                    <i class="glyphicon glyphicon-book"></i> Tổng danh mục <strong>{$tdm}</strong>
                </a>
                <a href="set_danhmuc.php" class="list-group-item">
                    <span class="badge">Xem</span>
                    <i class="glyphicon glyphicon-ok-circle"></i> 
                    Danh mục hiển thị <strong>{$tdmht}</strong>
                </a>
            </div>
        </div>
    </div>
</div>