<?php /* Smarty version 3.1.24, created on 2016-03-18 08:01:14
         compiled from "C:/xampp/htdocs/DO_AN/views/home/home_content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2031656eba7ba624ca0_49044809%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45d67c913288fa220e26cec89a008301219c1458' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/views/home/home_content.tpl',
      1 => 1458284472,
      2 => 'file',
    ),
    '9cea2ad270ebd3c7e042528fdfac5601427d4566' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/views/home/home_slider.tpl',
      1 => 1456724893,
      2 => 'file',
    ),
    '1ef89cd421a02e0c554f5b0fe220078e0e987d2c' => 
    array (
      0 => 'C:/xampp/htdocs/DO_AN/views/home/home_phanhoi.tpl',
      1 => 1456471170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2031656eba7ba624ca0_49044809',
  'variables' => 
  array (
    'product' => 0,
    'row' => 0,
    'product_nb' => 0,
    'row_nb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eba7ba7efc84_49090048',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eba7ba7efc84_49090048')) {
function content_56eba7ba7efc84_49090048 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2031656eba7ba624ca0_49044809';
/*  Call merged included template "views/home/home_slider.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("views/home/home_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '3154656eba7ba6c10b2_89312565', 'content_56eba7ba6c10b7_96374866');
/*  End of included template "views/home/home_slider.tpl" */?>

<div class="container">
<div class="row">
				<legend>
					<h1 class="text-center">
						Sản phẩm khuyến mại
					</h1>
				</legend>

			</div>
			<div class="row">
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value)) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['product']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
				<div class="col-xs-12 col-sm-12  col-md-3">
					<div class="thumbnail">
				      <img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['row']->value->image;?>
" alt="Bí Ngô" class="img-responsive">
				      <h3><?php echo $_smarty_tpl->tpl_vars['row']->value->name;?>
</h3>
				        <p><span style="text-decoration: line-through">Giá cũ:<?php echo number_format($_smarty_tpl->tpl_vars['row']->value->price);?>
 vnđ</span> Giá:<?php echo number_format($_smarty_tpl->tpl_vars['row']->value->sale_price);?>
 vnđ</p>
				        <p>
				        <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" name="dongia" value="<?php if (($_smarty_tpl->tpl_vars['row']->value->sale == 0)) {
echo $_smarty_tpl->tpl_vars['row']->value->price;
} else {
echo $_smarty_tpl->tpl_vars['row']->value->sale_price;
}?>"/>
		              <span>Số lượng:</span><input type="text" value="1" size="2" name="soluong" id="soluong<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" /></p>
		              <a class="btn btn-success button-1" name="id" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" >Mua ngay</a>
				        <a href="index_ctsanpham.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" class="btn btn-default" role="button">Xem thêm</a></p>
				      <div class="caption">
				        <p><?php echo $_smarty_tpl->tpl_vars['row']->value->s_describe;?>
</p>
				      </div>
				     <div class="sale">
                        <div class="sale-text">
                           Sale
                        </div>
                     </div>
				 </div>
				</div> 
				 <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
				 <?php }?>

			</div>
				
				<legend>
					<h1 class="text-center">
						Sản phẩm Mới
					</h1>
				</legend>
				<?php if (isset($_smarty_tpl->tpl_vars['product_nb']->value)) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['product_nb']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row_nb'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row_nb']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row_nb']->value) {
$_smarty_tpl->tpl_vars['row_nb']->_loop = true;
$foreach_row_nb_Sav = $_smarty_tpl->tpl_vars['row_nb'];
?>
				<div class="col-xs-12 col-sm-12  col-md-3">
					<div class="thumbnail">
				      <img src="public/images/caytrong/<?php echo $_smarty_tpl->tpl_vars['row_nb']->value->image;?>
" alt="Bí Ngô" class="img-responsive">
				      <h3><?php echo $_smarty_tpl->tpl_vars['row_nb']->value->name;?>
</h3>
				        <p><span style="text-decoration: line-through">Giá cũ:<?php echo $_smarty_tpl->tpl_vars['row_nb']->value->price;?>
</span> Giá:<?php echo $_smarty_tpl->tpl_vars['row_nb']->value->sale_price;?>
 vnđ</p>
				        <p>
				        <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" name="dongia" value="<?php if (($_smarty_tpl->tpl_vars['row']->value->sale == 0)) {
echo $_smarty_tpl->tpl_vars['row']->value->price;
} else {
echo $_smarty_tpl->tpl_vars['row']->value->sale_price;
}?>"/>
		              <span>Số lượng:</span><input type="text" value="1" size="2" name="soluong" id="soluong<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" /></p>
		              <a class="btn btn-success button-1" name="id" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" >Mua ngay</a>
				        <a href="index_ctsanpham.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" class="btn btn-default" role="button">Xem thêm</a></p>
				      <div class="caption">
				        <p><?php echo $_smarty_tpl->tpl_vars['row_nb']->value->s_describe;?>
</p>
				      </div>
				     <div class="sale">
                        <div class="sale-text">
                           New
                        </div>
                     </div>
				 </div>
				</div> 
				 <?php
$_smarty_tpl->tpl_vars['row_nb'] = $foreach_row_nb_Sav;
}
?>
				 <?php }?>
							
			
			</div>
<?php /*  Call merged included template "views/home/home_phanhoi.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("views/home/home_phanhoi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '135256eba7ba7a1a80_55505865', 'content_56eba7ba7a1a87_47535556');
/*  End of included template "views/home/home_phanhoi.tpl" */?>

</div><?php }
}
?><?php
/*%%SmartyHeaderCode:3154656eba7ba6c10b2_89312565%%*/
if ($_valid && !is_callable('content_56eba7ba6c10b7_96374866')) {
function content_56eba7ba6c10b7_96374866 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3154656eba7ba6c10b2_89312565';
?>
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
				<?php if (isset($_smarty_tpl->tpl_vars['sl']->value)) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['sl']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['kq'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['kq']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['kq']->value) {
$_smarty_tpl->tpl_vars['kq']->_loop = true;
$foreach_kq_Sav = $_smarty_tpl->tpl_vars['kq'];
?>
				<div class="item <?php if ($_smarty_tpl->tpl_vars['kq']->value->ma_sl == 3) {
echo 'active';
}?>">
					<img  class="img-responsive" src="public/images/slider/<?php echo $_smarty_tpl->tpl_vars['kq']->value->name;?>
" >
					<div class="container">
						<!-- <div class="carousel-caption">
							<h1></h1>
							<p></p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
						</div> -->
					</div>
				</div>
				<?php
$_smarty_tpl->tpl_vars['kq'] = $foreach_kq_Sav;
}
?>
				<?php }?>
				
		       
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>
</div>


<?php
/*/%%SmartyNocache:3154656eba7ba6c10b2_89312565%%*/
}
}
?><?php
/*%%SmartyHeaderCode:135256eba7ba7a1a80_55505865%%*/
if ($_valid && !is_callable('content_56eba7ba7a1a87_47535556')) {
function content_56eba7ba7a1a87_47535556 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '135256eba7ba7a1a80_55505865';
?>
<div class="row hidden-xs">
    <div class="col-xs-12 col-sm-12 col-md-12">

   <!-- Custom CSS -->
    
    <style>
        #custom_carousel{
            margin: 0px 0px 20px 0px;
        }
       
        #custom_carousel .item {
            color: #000;
            /*background-color: #eee;*/
            padding: 20px 0;
        }
        
        #custom_carousel .controls {
            overflow-x: auto;
            overflow-y: hidden;
            padding: 0;
            margin: 0;
            white-space: nowrap;
            text-align: center;
            position: relative;
            background: #ddd
        }
        #custom_carousel .carousel-inner img{
            max-width: 200px;
            max-height: 200px;
        }
        
        #custom_carousel .controls li {
            display: table-cell;
            width: 1%;
            max-width: 90px
        }
        #custom_carousel .controls li img{
            max-width: 160px;
            max-height: 160px;
        }
        
        #custom_carousel .controls li.active {
            background-color: #eee;
            border-top: 3px solid orange;
        }
        
        #custom_carousel .controls a small {
            overflow: hidden;
            display: block;
            font-size: 10px;
            margin-top: 5px;
            font-weight: bold
        }
    </style>


            
    

        
        <!-- First Featurette -->
                    <!------------------------code---------------start---------------->
                    <div class="row">
                        <legend>
                            <h1 class="text-center">
                                Phản hồi khách hàng
                            </h1>
                        </legend>
                    </div>
            <div class="container">
                <div class="row">
                <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3"><img src="public/images/khachhang/yh.jpg" class="img-responsive img-thumbnail"></div>
                                    <div class="col-md-9">
                                        <h2>Mohtashim M.</h2>
                                        <p>Mohtashim is an MCA from AMU (Aligarah) and a Project Management Professional. He has more than 17 years of experience in Telecom and Datacom industries covering complete SDLC. He is managing in-house innovations, business planning, implementation, finance and the overall business development of Tutorials Point.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3"><img src="public/images/khachhang/ac.jpg" class="img-responsive img-thumbnail"></div>
                                    <div class="col-md-9">
                                        <h2>Gopal K Verma</h2>
                                        <p>Gopal is an MCA from GJU (Hisar) and a Cisco Certified Network Professional. He has more than 11 years of experience in core data networking and telecommunications. He develops contents for Computer Science related subjects. He is also involved in developing Apps for various Mobile devices.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3"><img src="public/images/khachhang/h.jpg" class="img-responsive img-thumbnail"></div>
                                    <div class="col-md-9">
                                        <h2>Test</h2>
                                        <p>Gopal is an MCA from GJU (Hisar) and a Cisco Certified Network Professional. He has more than 11 years of experience in core data networking and telecommunications. He develops contents for Computer Science related subjects. He is also involved in developing Apps for various Mobile devices.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3"><img src="public/images/khachhang/top.jpg" class="img-responsive img-thumbnail"></div>
                                    <div class="col-md-9">
                                        <h2>Omer Mohammed</h2>
                                        <p>Omer has 10+ years of experience, with 4+ years in project management overlapping with 8+ years in Design. He has PMP, 6 Sigma Green Belt and Intellectual Property credentials. Across his career, he has worked in designing training modules, team building events, and driving teams towards results aligned with strategic objectives.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <!-- End Item -->
                    </div>
                    <!-- End Carousel Inner -->
                    <div class="controls">
                    
                        <ul class="nav">
                            <li data-target="#custom_carousel" data-slide-to="0" class="active">
                                <a href="#"><img src="public/images/khachhang/yh.jpg" class="img-reponsive img-thumbnail img-circle"><small>Mohtashim M.</small></a>
                            </li>
                            <li data-target="#custom_carousel" data-slide-to="1">
                                <a href="#"><img src="public/images/khachhang/ac.jpg" class="img-reponsive img-thumbnail img-circle"><small>Gopal K Verma</small></a>
                            </li>
                            <li data-target="#custom_carousel" data-slide-to="2">
                                <a href="#"><img src="public/images/khachhang/h.jpg" class="img-reponsive img-thumbnail img-circle"><small>Omer Mohammed</small></a>
                            </li>
                            <li data-target="#custom_carousel" data-slide-to="3">
                                <a href="#"><img src="public/images/khachhang/top.jpg" class="img-reponsive img-thumbnail img-circle"><small>Kiran Kumar Panigrahi</small></a>
                            </li>
                           
                        </ul>
                    </div>
                   <!--  endcontronls -->
                </div>
                            </div>
                <!-- End Carousel -->
            
            <!----Code------end----------------------------------->
        </div>
        <!-- /.container -->
        
        <?php echo '<script'; ?>
 src="public/js/jquery.js">
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $(document).ready(function (ev) {
                $('#custom_carousel').on('slide.bs.carousel', function (evt) {
                    $('#custom_carousel .controls li.active').removeClass('active');
                    $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
                })
            });
        <?php echo '</script'; ?>
>
        <!-- Bootstrap Core JavaScript -->
        


                                   
    </div>
</div>

        <?php
/*/%%SmartyNocache:135256eba7ba7a1a80_55505865%%*/
}
}
?>