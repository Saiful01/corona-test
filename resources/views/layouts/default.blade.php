<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Covid-19</title>

    <!-- Fav Icon -->
    <link rel="icon" href="/theme/assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
          rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <!-- Stylesheets -->
    <link href="/theme/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="/theme/assets/css/owl.css" rel="stylesheet">
    <link href="/theme/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/theme/assets/css/animate.css" rel="stylesheet">
    <link href="/theme/assets/css/color.css" rel="stylesheet">
    <link href="/theme/assets/css/style.css" rel="stylesheet">
    <link href="/theme/assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/custom.css">

    <style>

        @media (max-width: 320px) {
            .dhumpan {
                padding-top: 210px;

            }
        }

        .dhumpan {
            padding-top: 90px;
        }

        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x- ng-cloak {
            display: none !important;
        }

        .test-paragraph {
            color: #ffffff;
        }

        .symptoms-section {
            position: relative;
            padding: 60px 0px 60px 0px;
        }
    </style>
</head>


<!-- page wrapper -->
<body ng-app="myApp" ng-controller="myCtrl">
<div class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader">
        <div id="handle-preloader" class="handle-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                        <span data-text-preloader="C" class="letters-loading">
                            C
                        </span>
                    <span data-text-preloader="O" class="letters-loading">
                            O
                        </span>
                    <span data-text-preloader="V" class="letters-loading">
                            V
                        </span>
                    <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                    <span data-text-preloader="D" class="letters-loading">
                            D
                        </span>
                    <span data-text-preloader="-" class="letters-loading">
                            -
                        </span>
                    <span data-text-preloader="1" class="letters-loading">
                            1
                        </span>
                    <span data-text-preloader="9" class="letters-loading">
                            9
                        </span>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- main header -->
    <header class="main-header">
        <div class="outer-box clearfix">
            <div class="logo-box pull-left">
                <figure class="logo"><a href="/"><img src="/theme/assets/images/logo.png" alt=""></a></figure>
            </div>
            <div class="menu-area pull-right">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation scroll-nav clearfix">
                            <li class="current"><a href="/">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#symptoms">Symptoms</a></li>
                            <li><a href="#prevention">Prevention</a></li>
                            <li><a href="#faq">FAQ</a></li>
                            <li class="dropdown"><a href="/">News</a>
                                <ul>
                                    <li><a href="blog-1.html">Blog Grid</a></li>
                                    <li><a href="blog-2.html">Blog Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="btn-box">
                    <a href="/corona-test" class="theme-btn"><i class="fas fa-phone"></i>Emergency Test</a>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="/"><img src="/theme/assets/images/small-logo.png" alt=""></a>
                    </figure>
                </div>
                <div class="menu-area pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <div class="btn-box">
                        <a href="/" class="theme-btn"><i class="fas fa-phone"></i>Emergency Call</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="/"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="/"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="/"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="/"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="/"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


@yield('content')




<!-- main-footer -->
    <footer class="main-footer">
        <div class="shape-layer" style="background-image: url(/theme/assets/images/shape/shape-3.png);"></div>
        <div class="anim-icon">
            <div class="icon icon-1 rotate-me"
                 style="background-image: url(/theme/assets/images/icons/anim-icon-4.png);"></div>
            <div class="icon icon-2 rotate-me"
                 style="background-image: url(/theme/assets/images/icons/anim-icon-3.png);"></div>
            <div class="icon icon-3 rotate-me"
                 style="background-image: url(/theme/assets/images/icons/anim-icon-6.png);"></div>
        </div>
        <div class="footer-top">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="logo-widget footer-widget">
                                <figure class="footer-logo"><a href="/"><img
                                                src="/theme/assets/images/footer-logo.png" alt=""></a></figure>
                                <div class="text">
                                    <p>The best way to prevent and slow down transmission is be well informed about the
                                        COVID-19 virus, the disease it causes and how it spreads.</p>
                                    <p>Protect yourself and others from infec- tion by washing your hands or using
                                        an</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget service footer-widget">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="/">About Us</a></li>
                                        <li><a href="/">Symptoms</a></li>
                                        <li><a href="/">Prevention</a></li>
                                        <li><a href="/">Our Doctors</a></li>
                                        <li><a href="/">Our Blog</a></li>
                                        <li><a href="/">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget region footer-widget">
                                <div class="widget-title">
                                    <h3>Regions</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="/">America</a></li>
                                        <li><a href="/">Africa</a></li>
                                        <li><a href="/">South East Asia</a></li>
                                        <li><a href="/">Europe</a></li>
                                        <li><a href="/">Australia</a></li>
                                        <li><a href="/">Westenr Pacific</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <div class="widget-title">
                                    <h3>Contacts</h3>
                                </div>
                                <ul class="info-list clearfix">
                                    <li><i class="fas fa-map-marker-alt"></i>Flat 20, Reynolds Neck, North Helenaville,
                                        FV77 8WS
                                    </li>
                                    <li><i class="fas fa-microphone"></i><a href="tel:23055873407">+2(305) 587-3407</a>
                                    </li>
                                    <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a>
                                    </li>
                                </ul>
                                <ul class="social-links clearfix">
                                    <li><a href="/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="/"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="/"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="/"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="bottom-inner clearfix">
                    <div class="copyright pull-left">
                        <p><a href="/">Covid-19</a> &copy; 2020 All Right Reserved</p>
                    </div>
                    <ul class="footer-nav pull-right">
                        <li><a href="/">Terms of Service</a></li>
                        <li><a href="/">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->


    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fas fa-arrow-up"></span>
    </button>
</div>


<script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function ($scope) {


        document.getElementById('age').style.display = 'block';
        document.getElementById('gender').style.display = 'none';
        document.getElementById('is_pregnant').style.display = 'none';
        document.getElementById('temperature').style.display = 'none';
        document.getElementById('symptom').style.display = 'none';
        document.getElementById('extra_symptom').style.display = 'none';
        document.getElementById('disease').style.display = 'none';
        document.getElementById('pre_disease').style.display = 'none';
        document.getElementById('is_smoker').style.display = 'none';
        document.getElementById('is_nurse').style.display = 'none';
        document.getElementById('symptom_change').style.display = 'none';
        document.getElementById('submit').style.display = 'none';

        console.log("App");

        let default_gender = "none";
        $scope.ageChange = function () {
            document.getElementById('gender').style.display = 'block';
        };
        $scope.genderChange = function (gender) {

            default_gender = gender;
            if (default_gender === "female") {
                console.log("Female: " + gender);
                document.getElementById('is_pregnant').style.display = 'block';
                document.getElementById('temperature').style.display = 'none';

                //Make Visible
                $scope.pregnantChange = function () {
                    document.getElementById('temperature').style.display = 'block';
                }
            } else {
                document.getElementById('is_pregnant').style.display = 'none';
                document.getElementById('temperature').style.display = 'block';
            }

        };

        $scope.temperatureChange = function () {
            document.getElementById('symptom').style.display = 'block';
        };
        $scope.symptomChange = function () {
            document.getElementById('extra_symptom').style.display = 'block';
        };


        $scope.extraSymptomChange = function () {
            document.getElementById('disease').style.display = 'block';
        };

        $scope.diseaseChange = function () {
            document.getElementById('pre_disease').style.display = 'block';
        };

        $scope.preDiseaseChange = function () {
            document.getElementById('is_smoker').style.display = 'block';
        };

        $scope.smokerChange = function () {
            document.getElementById('is_nurse').style.display = 'block';
        };


        $scope.nurseChange = function () {
            document.getElementById('symptom_change').style.display = 'block';
        };

        $scope.symptomChnageChange = function () {
            document.getElementById('submit').style.display = 'block';
        };
    });
</script>

<!-- jequery plugins -->
<script src="/theme/assets/js/jquery.js"></script>
<script src="/theme/assets/js/popper.min.js"></script>
<script src="/theme/assets/js/bootstrap.min.js"></script>
<script src="/theme/assets/js/owl.js"></script>
<script src="/theme/assets/js/wow.js"></script>
<script src="/theme/assets/js/appear.js"></script>
<script src="/theme/assets/js/scrollbar.js"></script>
<script src="/theme/assets/js/pagenav.js"></script>

<!-- main-js -->
<script src="/theme/assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>
