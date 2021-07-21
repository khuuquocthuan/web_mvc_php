<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 footer">


				<div class="col-xs-push-1 col-md-3" style="margin:40px 0px">
					<h4>Hệ thống cửa hàng</h4>
					<p> Chợ bà hoa, Quận Tân Bình </p>

				</div>

				<div class="col-xs-push-1 col-md-4" style="margin:40px 0px">
					<h4>Liên Hệ</h4>
					<p>SĐT:{$mweb->phone}</p>
					<p>ĐỊA CHỈ:{$mweb->address}</p>
					<p>Email:{$mweb->email}</p>
				</div>

				<div class=" col-xs-push-1 col-md-4 " >
					<div class="hidden-xs">
						<div class="fb-page" data-href="#" 
						data-tabs="timeline" data-height="300" 
						data-small-header="false"
						data-adapt-container-width="false" 
						data-hide-cover="false" data-show-facepile="false">
						<div class="fb-xfbml-parse-ignore"><blockquote cite="#">
							<a href="{$mweb->face}">KIẾN THỨC QUANH TA</a></blockquote></div></div>
						</div>

					</div>

				</div>
			</div>
			
		<div class="row" style="background:rgba(204,204,204,0.5)">
			<p class="text-center" style="line-height:30px;font-weight:bold;margin-top:20px"> </p>
		</div>
		</div>
		<div class="support-icon-right">
			<h3 class="text-center"><i class="glyphicon glyphicon-user"></i> Hỗ trợ trực tuyến</h3>
			<div class="online-support">
				<div
				class="fb-page"
				data-href="#"
				data-small-header="true"
				data-height="300"
				data-width="250"
				data-tabs="messages"
				data-adapt-container-width="false"
				data-hide-cover="false"
				data-show-facepile="false"
				data-show-posts="false">
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function(){
		$('.online-support').hide();
		$('.support-icon-right h3').click(function(e){
			e.stopPropagation();
			$('.online-support').slideToggle();
		});
		$('.online-support').click(function(e){
			e.stopPropagation();
		});
		$(document).click(function(){
			$('.online-support').slideUp();
		});
	});
	</script>
	<style>
	.support-icon-right {
		/*background: #F0F3EF;*/
		position: fixed;
		right: 0;
		bottom: 0;
		z-index: 100;
		overflow: hidden;
		width: 250px;
		color: #fff!important;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-ms-transition: all 0.3s;
		-o-transition: all 0.3s;
		transition: all 0.3s;
	}

	.support-icon-right h3 {
		text-transform: uppercase;
		font-weight: bold;
		font-size: 13px!important;
		font-family: Arial;
		color: #fff!important;
		margin: 0!important;
		background-color:#1D3EE8;
		cursor: pointer;
		border-radius: 10px 10px 0 0;
	}

	.support-icon-right i {

		padding: 15px 15px 12px 15px;
	}
	.online-support {
		display: none;
	}
	</style>

</footer>
<script src="public/js/jquery.js"></script>
<script src="public/js/ajax_cart.js"></script>
<script src="public/js/ajax_xoa_cart.js"></script>
</script>

<!-- Bootstrap JavaScript -->
<script src="public/js/bootstrap.min.js"></script>

</body>
</html>