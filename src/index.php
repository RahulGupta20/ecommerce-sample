<?php include('includes/header.php'); ?>
	<!-- =============================================================
         HERO SECTION
     ==============================================================-->
    <section id="hero" class="my-3 py-1 position-relative">
        <div class="container position-relative">
            <p class="d-md-none">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="row row-offcanvas row-offcanvas-left">
            	<div class="col-12 col-md-4 col-lg-3 sidebar-offcanvas left-sidebar" id="sidebar">
                	<?php include('includes/aside-left/categories.php'); ?>
                </div>
                <!--/span-->
                <main class="col-12 col-md-8 col-lg-9 px-lg-0 main">
                    <div class="banner-section mb-3">
                        <div class="row no-gutters">
                            <div class="col-12 col-lg-9">
                                <div class="">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">1</li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1">2</li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="http://placehold.it/642x680" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="img/01.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="img/03.png" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="img/05.jpg" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="img/02.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="img/04.jpg" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="img/06.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="img/07.jpg" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="img/08.jpg" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="img/09.jpg" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="img/10.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="discounted-items">
                                    <div class="item">
                                        <a href="#">
                                            <!-- <img src="img/06.jpg" class="img-fluid" alt=""> -->
                                            <img src="http://placehold.it/214x180" class="img-top img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                        <!-- <img src="img/04.jpg" class="img-fluid" alt=""> -->
                                        <img src="http://placehold.it/214x180" class="img-top img-fluid" alt="">
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info-boxes-inner">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <div class="info-box">
                                    <i class="icon-wallet icons"></i>
                                    <h4 class="heading">MONEY BACK</h4>
                                    <p>30 Days Money Back Guarantee</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box">
                                    <i class="icon-paper-plane icons"></i>
                                    <h4 class="heading">FREE SHIPPING</h4>
                                    <p>Shipping on orders over $99</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box">
                                    <i class="icon-support icons"></i>
                                    <h4 class="heading">ONLINE SUPPORT 24/7</h4>
                                    <p>We support online 24 hours a day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!--/span-->
            </div>
            <!--/row-->
        </div>
        <!--/.container-->
    </section>
    <!-- =============================================================
         END HERO SECTION
     ==============================================================-->
<?php include('includes/footer.php'); ?>