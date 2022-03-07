<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <style>
        .subscription.bg-white {
            background: none
        }

        .bg-white {
            background-color: #fff !important
        }

        .subscription.bg-white .subscription-wrapper {
            background: #fff
        }

        .subscription-wrapper {
            border-radius: 0% 5% 10% 3%/10% 20% 0% 17%;
            -webkit-transform: perspective(1800px) rotateY(20deg) skewY(1deg) translateX(50px);
            transform: perspective(1800px) rotateY(20deg) skewY(1deg) translateX(50px);
            padding: 70px 50px;
            z-index: 1;
            width: 100%;
            background: linear-gradient(80deg, #0030cc 0%, #00a4db 100%);
            position: absolute;
            top: 100px
        }

        .subscription-wrapper {
            box-shadow: 0px 15px 39px 0px rgba(8, 18, 109, 0.1) !important
        }

        .subscription-content {
            -webkit-transform: skewY(-1deg);
            transform: skewY(-1deg)
        }

        h3,
        .h3 {
            font-size: 30px
        }

        .flex-fill {
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important
        }

        .subscription.bg-white .form-control {
            border: 1px solid #ebebeb !important
        }

        .subscription-wrapper .form-control {
            height: 60px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 45px
        }

        .subscription-wrapper .form-control:focus {
            background: rgba(255, 255, 255, 0.1);
            outline: 0;
            box-shadow: none
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer
        }

        .btn-primary {
            border: 0;
            color: #fff
        }

        .btn {
            font-size: 16px;
            font-family: "Poppins", sans-serif;
            text-transform: capitalize;
            padding: 18px 45px;
            border-radius: 45px;
            font-weight: 500;
            border: 1px solid;
            position: relative;
            z-index: 1;
            transition: .3s ease-in;
            overflow: hidden
        }

        .btn-primary:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 102%;
            height: 100%;
            background: linear-gradient(45deg, #00a8f4 0%, #02d1a1 100%);
            z-index: -1;
            transition: ease 0.3s
        }

        .demo {
            background: #f8f8f8;
        }

        .testimonial {
            margin: 0 20px 40px;
        }

        .testimonial .testimonial-content {
            padding: 35px 25px 35px 50px;
            margin-bottom: 35px;
            background: #fff;
            border: 1px solid #f0f0f0;
            position: relative;
        }

        .testimonial .testimonial-content:after {
            content: "";
            display: inline-block;
            width: 20px;
            height: 20px;
            background: #fff;
            position: absolute;
            bottom: -10px;
            left: 22px;
            transform: rotate(45deg);
        }

        .testimonial-content .testimonial-icon {
            width: 50px;
            height: 45px;
            background: blue;
            text-align: center;
            font-size: 22px;
            color: white;
            line-height: 42px;
            position: absolute;
            top: 37px;
            left: -19px;
        }

        .testimonial-content .testimonial-icon:before {
            content: "";
            border-bottom: 16px solid blue;
            border-left: 18px solid transparent;
            position: absolute;
            top: -16px;
            left: 1px;
        }

        .testimonial .description {
            font-size: 15px;
            font-style: italic;
            color: #8a8a8a;
            line-height: 23px;
            margin: 0;
        }

        .testimonial .title {
            display: block;
            font-size: 18px;
            font-weight: 700;
            color: #525252;
            text-transform: capitalize;
            letter-spacing: 1px;
            margin: 0 0 5px 0;
        }

        .testimonial .post {
            display: block;
            font-size: 14px;
            color: blue;
        }

        .owl-theme .owl-controls {
            margin-top: 20px;
        }

        .owl-theme .owl-controls .owl-page span {
            background: #ccc;
            opacity: 1;
            transition: all 0.4s ease 0s;
        }

        .owl-theme .owl-controls .owl-page.active span,
        .owl-theme .owl-controls.clickable .owl-page:hover span {
            background: #ff4242;
        }
    </style>
</head>

<body>
    <div class="demo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                                </p>
                            </div>
                            <h3 class="title">williamson</h3>
                            <span class="post">Web Developer</span>
                        </div>

                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                                </p>
                            </div>
                            <h3 class="title">Kristina</h3>
                            <span class="post">Web Designer</span>
                        </div>

                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                                </p>
                            </div>
                            <h3 class="title">williamson</h3>
                            <span class="post">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="subscription bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscription-wrapper">
                        <div class="d-flex subscription-content justify-content-between align-items-center flex-column flex-md-row text-center text-md-left">
                            <h3 class="flex-fill">Subscribe <br> to our newsletter</h3>
                            <form action="#" class="row flex-fill">
                                <div class="col-lg-7 my-md-2 my-2"> <input type="email" class="form-control px-4 border-0 w-100 text-center text-md-left" id="email" placeholder="Your Email" name="email"> </div>
                                <div class="col-lg-5 my-md-2 my-2"> <button type="submit" class="btn btn-primary btn-lg border-0 w-100">Subscribe Now</button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $("#testimonial-slider").owlCarousel({
                items: 3,
                itemsDesktop: [1000, 3],
                itemsDesktopSmall: [980, 2],
                itemsTablet: [768, 2],
                itemsMobile: [650, 1],
                pagination: true,
                navigation: false,
                slideSpeed: 1000,
                autoPlay: true
            });
        });
    </script>
</body>

</html>