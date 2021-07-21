<?php
/* Smarty version 3.1.39, created on 2021-06-30 05:44:55
  from 'D:\Xampp\htdocs\DO_AN\views\lienhe\tt_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60dbe8b74ecf12_24882039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0b6e0a1253768d9317a7c1726440e7e6e9d5aca' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\DO_AN\\views\\lienhe\\tt_content.tpl',
      1 => 1625024693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60dbe8b74ecf12_24882039 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- Bootstrap Core CSS -->
    

    <!-- Custom CSS -->
    <!-- <link href="one-page-wonder.css" rel="stylesheet"> -->

    <style>
        /*  bhoechie tab */
        
        div.bhoechie-tab-container {
            z-index: 10;
            background-color: #ffffff;
            padding: 0 !important;
            border-radius: 4px;
            -moz-border-radius: 4px;
            border: 1px solid #ddd;
            margin-top: 20px;
            /*margin-left: 50px;*/
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            -moz-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            background-clip: padding-box;
            opacity: 0.97;
            filter: alpha(opacity=97);
        }
        
        div.bhoechie-tab-menu {
            padding-right: 0;
            padding-left: 0;
            padding-bottom: 0;
        }
        
        div.bhoechie-tab-menu div.list-group {
            margin-bottom: 0;
        }
        
        div.bhoechie-tab-menu div.list-group>a {
            margin-bottom: 0;
        }
        
        div.bhoechie-tab-menu div.list-group>a .glyphicon,
        div.bhoechie-tab-menu div.list-group>a .fa {
            color: #5A55A3;
        }
        
        div.bhoechie-tab-menu div.list-group>a:first-child {
            border-top-right-radius: 0;
            -moz-border-top-right-radius: 0;
        }
        
        div.bhoechie-tab-menu div.list-group>a:last-child {
            border-bottom-right-radius: 0;
            -moz-border-bottom-right-radius: 0;
        }
        
        div.bhoechie-tab-menu div.list-group>a.active,
        div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
        div.bhoechie-tab-menu div.list-group>a.active .fa {
            background-color: #5A55A3;
            background-image: #5A55A3;
            color: #ffffff;
        }
        
        div.bhoechie-tab-menu div.list-group>a.active:after {
            content: '';
            position: absolute;
            left: 100%;
            top: 50%;
            margin-top: -13px;
            border-left: 0;
            border-bottom: 13px solid transparent;
            border-top: 13px solid transparent;
            border-left: 10px solid #5A55A3;
        }
        div.bhoechie-tab-menu a.active:hover{
            background-color:#5A55A3 !important;
        }
        
        div.bhoechie-tab-content {
            background-color: #ffffff;
            /* border: 1px solid #eeeeee; */
           /* padding-left: 20px;*/
            padding-top: 10px;
        }
        
        div.bhoechie-tab div.bhoechie-tab-content:not(.active) {
            display: none;
        }
    </style>


        <!-- First Featurette -->
       
           
                <div class="row">
                    <div class="col-md-12 bhoechie-tab-container">
                        <div class=" col-md-4 bhoechie-tab-menu">
                            <div class="list-group">
                                <a href="#" class="list-group-item active text-center">
                                    <h4 class="glyphicon glyphicon-user"></h4>
                                    <br/>Chủ shop
                                </a>
                                <a href="#" class="list-group-item text-center">
                                    <h4 class="glyphicon glyphicon-home"></h4>
                                    <br/>Thông tin cửa hàng
                                </a>
                                <a href="#" class="list-group-item text-center">
                                    <h4 class="glyphicon glyphicon-phone"></h4>
                                    <br/>Liên hệ
                                </a>
                                <a href="#" class="list-group-item text-center">
                                    <h4 class="glyphicon glyphicon-road"></h4>
                                    <br/>Bản đồ
                                </a>
                               <!--  <a href="#" class="list-group-item text-center">
                                    <h4 class="glyphicon glyphicon-credit-card"></h4>
                                    <br/>Credit Card
                                </a> -->
                            </div>
                        </div>
                        <div class=" col-md-8 bhoechie-tab">
                            <!-- flight section -->
                            <div class="bhoechie-tab-content active">
                                <center>
                                    <img  alt="" class="img-reponsive img-thumbnail img-circle" width="200px">
                                    <h2 style="margin-top: 0;color:#55518a">Lê Ánh Loan</h2>
                                    <h3 style="margin-top: 0;color:#55518a">Sđt: 0937424535</h3>
                                </center>
                            </div>
                            <!-- train section -->
                            <div class="bhoechie-tab-content">
                                <center>
                                    <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
                                    <h2 style="margin-top: 0;color:#55518a"><i class="glyphicon glyphicon-leaf"></i>Cleanseed</h2>
                                    <h4 style="margin-top: 0;color:#55518a"><?php echo $_smarty_tpl->tpl_vars['mweb']->value->s_describe;?>
</h4>
                                </center>
                            </div>

                            <!-- hotel search -->
                            <div class="bhoechie-tab-content">
                                <center>
                                    <h1 class="glyphicon glyphicon-phone" style="font-size:12em;color:#55518a"></h1>
                                    <p style="margin-top: 0;color:#55518a">Sđt:<?php echo $_smarty_tpl->tpl_vars['mweb']->value->phone;?>
</p>
                                    <p style="margin-top: 0;color:#55518a">Gmail:<?php echo $_smarty_tpl->tpl_vars['mweb']->value->phone;?>
</p>
                                     
                                </center>
                            </div>
                            <div class="bhoechie-tab-content">
                                <center>
                                   <p>
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.448697180009!2d105.78203601475467!3d21.014725193633563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab556e18b5fb%3A0xf369b6856e8d2636!2zTeG7hSBUcsOsIEjhuqE!5e0!3m2!1svi!2s!4v1456301964196" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                   </p>
                                </center>
                            </div>
                            <!-- <div class="bhoechie-tab-content">
                                <center>
                                    <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                                    <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                    <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                                </center>
                            </div>
 -->
                        </div>
                    </div>
                </div>
            
           

            <!----Code------end----------------------------------->
        </div>
        <!-- /.container -->
        
        <?php echo '<script'; ?>
 src="public/js/jquery.js">
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $(document).ready(function () {
                $("div.bhoechie-tab-menu>div.list-group>a").click(function (e) {
                    e.preventDefault();
                    $(this).siblings('a.active').removeClass("active");
                    $(this).addClass("active");
                    var index = $(this).index();
                    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
                });
            });
        <?php echo '</script'; ?>
>
        <!-- Bootstrap Core JavaScript -->
       
       
   <?php }
}
