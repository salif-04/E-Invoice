<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>E-Invoice</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>

    <!-- favicons
    ================================================== -->

</head>

<body>

    <!-- home
    ================================================== -->
    <a class="info-toggle" href="#0">
            <span class="info-menu-icon"></span>
        </a>
    
        <div class="s-info">
    
            <div class="row info-wrapper">
    
                <div class="col-seven tab-full info-main">
                    <h1>We are E-Invoice.</h1>
                    <p>
                    We generate online invoice and email it to the clients. We aim total replacement of paper invoices and bills.
                    </p>
                </div>
                    
                </div> -->  <!-- end info contact -->
    
            </div>  <!-- end info wrapper -->
    
        </div> <!-- end s-info -->

    <!-- info
    ================================================== -->
    <main class="s-home s-home--static">

            <div class="overlay"></div>
    
            <div class="home-content">
                
                <div class="row home-content__main">
    
                    <div class="col-eight home-content__text pull-right">
                        <h3>Welcome to E-Invoice</h3>
    
                        <h1>
                        E-invoice helps you send <br>
                        online invoice to your clients. <br> It totally replaces paper invoices and bills.
                        </h1>
                        
                    </div>  <!-- end home-content__text -->
    
                </div>  <!-- end home-content__main -->
    
                 <ul class="home-social">
                        <li>
                            <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt" aria-hidden="true"></i><span>SignIn</span></a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}"><i class="fas fa-registered" aria-hidden="true"></i><span>Register</span></a>
                        </li>
                        <li>
                            <a href="http://localhost/E-Invoice/Einvoice/public/dashboard"><i class="fas fa-tachometer-alt" aria-hidden="true"></i><span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="https://www.github.com/salif-04/E-Invoice"><i class="fab fa-github" aria-hidden="true"></i><span>Github</span></a>
                        </li>
                        <li>
                            <a href="https://www.github.com/salif-04/E-Invoice"><i class="fas fa-book" aria-hidden="true"></i><span>Docs</span></a>
                        </li>

                </ul> <!--end home-social -->
    
                <div class="row home-copyright">
                    <span>Copyright 2018</span> 
                    <span>Design by <a href="#">ALUCARD</a></span>
                </div> <!-- end home-copyright -->
    
                <div class="home-content__line"></div>
    
            </div> <!-- end home-content -->
    
        </main> <!-- end s-home -->
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>