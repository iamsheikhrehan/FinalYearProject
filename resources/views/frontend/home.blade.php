@extends('welcome')
@section('content')

<head>
    <!-- custombox -->
    <link rel="stylesheet" href="{{asset('dist/custombox/custom.css')}}">

    <!-- custombox -->
    <!-- calander -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <!-- calander -->
<style>
    
</style>
    <!-- banner -->



    <!-- banner -->
</head>



<div id="carouselExampleIndicators" class="carousel slide my-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="dist/img/slidesho1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="dist/img/slidesho2.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="dist/img/slidesho3.jpg" alt="Second slide">
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
<section class="custom-section">
    <div>
        <div class="container-1 contact-form">
            <div class="contact-image">
                <div class="circles  icon"><i class="fas fa-hiking fa-3x ftp"></i></div>

                <div class="circles icon"><i class="fas fa-skiing fa-3x ftp"></i></div>
                <div class="circles icon"><i class="fas fa-bed fa-3x ftp"></i></div>
                <div class="circles icon"><i class="fas fa-car fa-3x ftp"></i></div>
                <div class="circles icon"><i class="fas fa-map-marked-alt fa-3x ftp"></i></div>
            </div>
        </div>
        <div class="container contact-form custom">

            <form method="post">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="Where To" class="form-chitrol" placeholder="   Hunza,Skardu *" value="" />
                            <input type="submit" name="btnSubmit" class="btnSearch" value="Search " />
                        </div>
                        </br>
                        <div class="form-group" style="display: inline-block;">
                            <input type="text" id="datepicker" name="When are you leaving" class="form-control" placeholder="   Enter Start date*" value="" />
                        </div>
                        <div class="form-group" style="display: inline-block;">
                            <input type="text" id="datepicker-1" name="When you will be come back" class="form-control" placeholder="    Enter End date*" value="" style="margin-left: 10px;" />
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</section>



<section id="slider" class="pt-5 uper">
    <div class="container">
        <h1 class="text-center"><b>Feature Trips</b></h1>
        <div class="slider">
            <div class="owl-carousel">
                <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <img src="dist/img/slidesho1.jpg" alt="">
                    </div>
                    <h5 class="mb-0 text-center"><b>HTML CSS3 Tutorials</b></h5>
                    <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                </div>
                <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <img src="dist/img/slidesho1.jpg" alt="">
                    </div>
                    <h5 class="mb-0 text-center"><b>Wordpress Tutorials</b></h5>
                    <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                </div>
                <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <img src="dist/img/slidesho1.jpg" alt="">
                    </div>
                    <h5 class="mb-0 text-center"><b>PHP MySQL Tutorials</b></h5>
                    <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                </div>
                <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <img src="dist/img/slidesho1.jpg" alt="">
                    </div>
                    <h5 class="mb-0 text-center"><b>Javascript Tutorials</b></h5>
                    <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                </div>
                <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <img src="dist/img/slidesho1.jpg" alt="">
                    </div>
                    <h5 class="mb-0 text-center"><b>Bootstrap Tutorials</b></h5>
                    <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.cardview')
<!-- banner -->
<section class="ftco-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="slider-hero">
                    <div class="featured-carousel owl-carousel">
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url('dist/img/slider9.jpg');">
                                    <div class="text text-center">

                                        .
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url('dist/img/slider10.png');">
                                    <div class="text text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-center justify-content-center" style="background-image: url('dist/img/slidesho5.png');">
                                    <div class="text text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-5 text-center">
                        <ul class="thumbnail">
                            <li class="active img"><a href="#"><img src="dist/img/slider9.jpg" alt="Image" class="img-fluid"></a></li>
                            <li><a href="#"><img src="dist/img/slider10.png" alt="Image" class="img-fluid"></a></li>
                            <li><a href="#"><img src="dist/img/slidesho5.png" alt="Image" class="img-fluid" style="width: 80px;height: 30px;"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.stays')
<section>

</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="{{asset('dist/js/owl.carousel.min.js')}}"></script>
<!-- banner -->

<script src="{{asset('dist/banner/js/popper.js')}}"></script>
<script src="{{asset('dist/banner/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/banner/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('dist/banner/js/main.js')}}"></script>
<!-- banner -->
<script>
    $("#datepicker").datepicker();
    $("#datepicker-1").datepicker();
</script>
@endsection