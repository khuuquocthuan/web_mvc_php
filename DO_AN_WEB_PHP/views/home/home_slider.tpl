<div class="container-fluid">
	<div class="row">
		<!-- <div class="col-md-12"> -->
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				<li data-target="#carousel-id" data-slide-to="3" class=""></li>
				<li data-target="#carousel-id" data-slide-to="4" class=""></li>
			</ol>
			<div class="carousel-inner">
				{if isset($sl)}
				{foreach $sl as $kq}
				<div class="item {if $kq->ma_sl==3}{'active'}{/if}">
					<img  class="img-responsive" src="public/images/slider/{$kq->name}" >
					<div class="container">
						<!-- <div class="carousel-caption">
							<h1></h1>
							<p></p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
						</div> -->
					</div>
				</div>
				{/foreach}
				{/if}
				
		       
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>
</div>


