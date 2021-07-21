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
                                    <div class="col-md-3"><img  class="img-responsive img-thumbnail"></div>
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
                                    <div class="col-md-3"><img  class="img-responsive img-thumbnail"></div>
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
                                    <div class="col-md-3"><img  class="img-responsive img-thumbnail"></div>
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
                                    <div class="col-md-3"><img  class="img-responsive img-thumbnail"></div>
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
                                <a href="#"><img  class="img-reponsive img-thumbnail img-circle"><small>Mohtashim M.</small></a>
                            </li>
                            <li data-target="#custom_carousel" data-slide-to="1">
                                <a href="#"><img  class="img-reponsive img-thumbnail img-circle"><small>Gopal K Verma</small></a>
                            </li>
                            <li data-target="#custom_carousel" data-slide-to="2">
                                <a href="#"><img  class="img-reponsive img-thumbnail img-circle"><small>Omer Mohammed</small></a>
                            </li>
                            <li data-target="#custom_carousel" data-slide-to="3">
                                <a href="#"><img  class="img-reponsive img-thumbnail img-circle"><small>Kiran Kumar Panigrahi</small></a>
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
        
        <script src="public/js/jquery.js">
        </script>
        <script>
            $(document).ready(function (ev) {
                $('#custom_carousel').on('slide.bs.carousel', function (evt) {
                    $('#custom_carousel .controls li.active').removeClass('active');
                    $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
                })
            });
        </script>
        <!-- Bootstrap Core JavaScript -->
        


                                   
    </div>
</div>

        