@extends('frontlayout')
@section('content')
    <style>
        #border {
            border: 2px solid rgb(38, 37, 37);
            border-radius: 5px;
            /* width: 500px; */
        }

        body {
            margin: 0px;
        }

        .colour-block {
            background: #823A9C;
            width: 60%;
            padding: 7% 20% 10% 20%;
            color: #fff;
        }

        .white-block {
            background: #fff;
            width: 60%;
            padding: 7% 20% 10% 20%;
            color: #823A9C;
        }

        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .product-card {
            width: 380px;
            position: relative;
            box-shadow: 0 2px 7px #dfdfdf;
            margin: 50px auto;
            background: #fafafa;
        }

        .badge {
            position: absolute;
            left: 0;
            top: 20px;
            text-transform: uppercase;
            font-size: 13px;
            font-weight: 700;
            background: red;
            color: #fff;
            padding: 3px 10px;
        }

        .product-tumb {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 300px;
            padding: 50px;
            background: #f0f0f0;
        }

        .product-tumb img {
            max-width: 100%;
            max-height: 100%;
        }

        .product-details {
            padding: 30px;
        }

        .product-catagory {
            display: block;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            color: #ccc;
            margin-bottom: 18px;
        }

        .product-details h4 a {
            font-weight: 500;
            display: block;
            margin-bottom: 18px;
            text-transform: uppercase;
            color: #363636;
            text-decoration: none;
            transition: 0.3s;
        }

        .product-details h4 a:hover {
            color: #fbb72c;
        }

        .product-details p {
            font-size: 15px;
            line-height: 22px;
            margin-bottom: 18px;
            color: #999;
        }

        .product-bottom-details {
            overflow: hidden;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }

        .product-bottom-details div {
            float: left;
            width: 50%;
        }

        .product-price {
            font-size: 18px;
            color: #fbb72c;
            font-weight: 600;
        }

        .product-price small {
            font-size: 80%;
            font-weight: 400;
            text-decoration: line-through;
            display: inline-block;
            margin-right: 5px;
        }

        .product-links {
            text-align: right;
        }

        .product-links a {
            display: inline-block;
            margin-left: 5px;
            color: #e1e1e1;
            transition: 0.3s;
            font-size: 17px;
        }

        .product-links a:hover {
            color: #fbb72c;

            .site-footer {
                background-color: #26272b;
                padding: 45px 0 20px;
                font-size: 15px;
                line-height: 24px;
                color: #737373;
            }

            .site-footer hr {
                border-top-color: #bbb;
                opacity: 0.5
            }

            .site-footer hr.small {
                margin: 20px 0
            }

            .site-footer h6 {
                color: #fff;
                font-size: 16px;
                text-transform: uppercase;
                margin-top: 5px;
                letter-spacing: 2px
            }

            .site-footer a {
                color: #737373;
            }

            .site-footer a:hover {
                color: #3366cc;
                text-decoration: none;
            }

            .footer-links {
                padding-left: 0;
                list-style: none
            }

            .footer-links li {
                display: block
            }

            .footer-links a {
                color: #737373
            }

            .footer-links a:active,
            .footer-links a:focus,
            .footer-links a:hover {
                color: #3366cc;
                text-decoration: none;
            }

            .footer-links.inline li {
                display: inline-block
            }

            .site-footer .social-icons {
                text-align: right
            }

            .site-footer .social-icons a {
                width: 40px;
                height: 40px;
                line-height: 40px;
                margin-left: 6px;
                margin-right: 0;
                border-radius: 100%;
                background-color: #33353d
            }

            .copyright-text {
                margin: 0
            }

            @media (max-width:991px) {
                .site-footer [class^=col-] {
                    margin-bottom: 30px
                }
            }

            @media (max-width:767px) {
                .site-footer {
                    padding-bottom: 0
                }

                .site-footer .copyright-text,
                .site-footer .social-icons {
                    text-align: center
                }
            }

            .social-icons {
                padding-left: 0;
                margin-bottom: 0;
                list-style: none
            }

            .social-icons li {
                display: inline-block;
                margin-bottom: 4px
            }

            .social-icons li.title {
                margin-right: 15px;
                text-transform: uppercase;
                color: #96a2b2;
                font-weight: 700;
                font-size: 13px
            }

            .social-icons a {
                background-color: #0f1010;
                color: #818a91;
                font-size: 16px;
                display: inline-block;
                line-height: 44px;
                width: 44px;
                height: 44px;
                text-align: center;
                margin-right: 8px;
                border-radius: 100%;
                -webkit-transition: all .2s linear;
                -o-transition: all .2s linear;
                transition: all .2s linear
            }

            .social-icons a:active,
            .social-icons a:focus,
            .social-icons a:hover {
                color: #fff;
                background-color: #29aafe
            }

            .social-icons.size-sm a {
                line-height: 34px;
                height: 34px;
                width: 34px;
                font-size: 14px
            }

            .social-icons a.facebook:hover {
                background-color: #3b5998
            }

            .social-icons a.twitter:hover {
                background-color: #00aced
            }

            .social-icons a.linkedin:hover {
                background-color: #007bb6
            }

            .social-icons a.dribbble:hover {
                background-color: #100f10
            }

            @media (max-width:767px) {
                .social-icons li.title {
                    display: block;
                    margin-right: 0;
                    font-weight: 600
                }
            }
        }

        .header-blue {
            background: linear-gradient(135deg, #545252, #ffb3c5);
            background-color: #184e8e;
            padding-bottom: 80px;
            font-family: 'Source Sans Pro', sans-serif;
        }

        @media (min-width:768px) {
            .header-blue {
                padding-bottom: 120px;
            }
        }

        .header-blue .navbar {
            background: transparent;
            padding-top: .75rem;
            padding-bottom: .75rem;
            color: #fff;
            border-radius: 0;
            box-shadow: none;
            border: none;
        }

        @media (min-width:768px) {
            .header-blue .navbar {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
        }

        .header-blue .navbar .navbar-brand {
            font-weight: bold;
            color: inherit;
        }

        .header-blue .navbar .navbar-brand:hover {
            color: #f0f0f0;
        }

        .header-blue .navbar .navbar-collapse {
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            margin-top: .5rem;
        }

        @media (min-width:768px) {
            .header-blue .navbar .navbar-collapse {
                border-color: transparent;
                margin: 0;
            }
        }

        .header-blue .navbar .navbar-collapse span .login {
            color: #fff;
            margin-right: .5rem;
            text-decoration: none;
        }

        .header-blue .navbar .navbar-collapse span .login:hover {
            color: #fff;
        }

        .header-blue .navbar .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.3);
        }

        .header-blue .navbar .navbar-toggler:hover,
        .header-blue .navbar-toggler:focus {
            background: none;
        }

        @media (min-width: 768px) {
            .header-blue .navbar-nav .nav-link {
                padding-left: .7rem;
                padding-right: .7rem;
            }
        }

        @media (min-width: 992px) {
            .header-blue .navbar-nav .nav-link {
                padding-left: 1.2rem;
                padding-right: 1.2rem;
            }
        }

        .header-blue .navbar.navbar-light .navbar-nav .nav-link {
            color: #fff;
        }

        .header-blue .navbar.navbar-light .navbar-nav .nav-link:focus,
        .header-blue .navbar.navbar-light .navbar-nav .nav-link:hover {
            color: #fcfeff !important;
            background-color: transparent;
        }

        .header-blue .navbar .navbar-nav>li>.dropdown-menu {
            margin-top: -5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, .1);
            background-color: #fff;
            border-radius: 2px;
        }

        .header-blue .navbar .dropdown-menu .dropdown-item:focus,
        .header-blue .navbar .dropdown-menu .dropdown-item {
            line-height: 2;
            color: #37434d;
        }

        .header-blue .navbar .dropdown-menu .dropdown-item:focus,
        .header-blue .navbar .dropdown-menu .dropdown-item:hover {
            background: #ebeff1;
        }

        .header-blue .action-button,
        .header-blue .action-button:not(.disabled):active {
            border: 1px solid rgb(255, 255, 255);
            border-radius: 40px;
            color: #fff;
            box-shadow: none;
            text-shadow: none;
            padding: .3rem .8rem;
            background: transparent;
            transition: background-color 0.25s;
            outline: none;
        }

        .header-blue .action-button:hover {
            color: #fff;
        }

        .header-blue .navbar .form-inline label {
            color: #d9d9d9;
        }

        .header-blue .navbar .form-inline .search-field {
            display: inline-block;
            width: 80%;
            background: none;
            border: none;
            border-bottom: 1px solid transparent;
            border-radius: 0;
            color: #121212;
            box-shadow: none;
            color: inherit;
            transition: border-bottom-color 0.3s;
        }

        .header-blue .navbar .form-inline .search-field:focus {
            border-bottom: 1px solid #ccc;
        }

        .header-blue .hero {
            margin-top: 20px;
            text-align: center;
        }

        @media (min-width:768px) {
            .header-blue .hero {
                margin-top: 60px;
                text-align: left;
            }
        }

        .header-blue .hero h1 {
            color: #fff;
            font-size: 40px;
            margin-top: 0;
            margin-bottom: 15px;
            font-weight: 300;
            line-height: 1.4;
        }

        @media (min-width:992px) {
            .header-blue .hero h1 {
                margin-top: 190px;
                margin-bottom: 24px;
                line-height: 1.2;
            }
        }

        .header-blue .hero p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 20px;
            margin-bottom: 30px;
            font-weight: 300;
        }

        .header-blue .phone-holder {
            text-align: right;
        }

        .header-blue div.iphone-mockup {
            position: relative;
            max-width: 300px;
            margin-top: 172px;
            display: inline-block;
        }

        .header-blue .iphone-mockup img.device {
            width: 100%;
            height: auto;
        }

        .header-blue .iphone-mockup .screen:before {
            content: '';
            background-color: #fff;
            position: absolute;
            width: 70%;
            height: 140%;
            top: -12%;
            right: -60%;
            transform: rotate(-19deg);
            opacity: 0.2;
        }

        .hcf-overlay>* {
            position: relative;
            z-index: 1;
        }

        .hcf-transform {
            transform: scale3d(1, 1, 1);
            transform-style: preserve-3d;
            transition: all 0.5s;
        }

        .hcf-transform:hover {
            transform: scale3d(1.02, 1.02, 1.02);
        }

        .megamenu {
            position: static;
        }

        .megamenu .dropdown-menu {
            background: none;
            border: none;
            width: 100%;
        }

        body {
            background: #eaafc8;
            background: -webkit-linear-gradient(to right, #eaafc8, #654ea3);
            background: linear-gradient(to right, #eaafc8, #654ea3);
            min-height: 100vh;
        }

        code {
            color: #745eb1;
            background: #fff;
            padding: 0.1rem 0.2rem;
            border-radius: 0.2rem;
        }

        .text-uppercase {
            letter-spacing: 0.08em;
        }

        .new-deal {
            width: 100%;
            float: left;
            padding: 15px 0;
        }

        .new-deal .item-slide {
            position: relative;
            overflow: hidden;
            transition: all .5s ease;
            -moz-transition: all .5s ease;
            -webkit-transition: all .5s ease;
            margin: 15px 0;
        }

        .new-deal .slide-hover {
            position: absolute;
            height: 100%;
            width: 100%;
            left: -100%;
            background: rgba(0, 0, 0, .5);
            top: 0;
            transition: all .5s ease;
            -moz-transition: all .5s ease;
            -webkit-transition: all .5s ease;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
        }

        .new-deal .item-slide:hover .slide-hover {
            left: 0px;
        }

        .new-deal img {
            max-width: 100%;
        }

        .text-wrap {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            color: #fff;
            background: rgba(0, 0, 0, .5);
            z-index: 999;
            transition: all .5s ease;
            -moz-transition: all .5s ease;
            -webkit-transition: all .5s ease;
        }

        .text-wrap h4 {
            padding: 0 5px;
        }

        .box-img {
            width: 100%;
            float: left;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            overflow: hidden;
            border: 1px solid #ccc;
        }

        .text-wrap .desc {
            width: 50%;
            float: left;
            padding: 0 5px;
        }

        .text-wrap p {
            padding: 15px;
            font-size: 15px;
            text-align: center;
            font-weight: normal;
            text-shadow: 2px 2px 3px #000;
        }

        .text-wrap .desc h4 {
            margin: 0px;
            font: 400 17px/21px "Roboto";
        }

        .text-wrap .desc h3 {
            margin: 0px;
            font: 400 32px/36px "Roboto";
        }

        .new-deal .item-slide:hover .text-wrap {
            background: none
        }

        .book-now-c {
            float: right;
            padding: 10px;
        }

        .book-now-c a {
            background: #029a8b;
            color: #fff;
            padding: 5px;
            border-radius: 5px;
            margin-top: 0px;
            float: left;
            min-width: 101px;
            text-align: center;
            font-size: 16px;
        }

        .new-deal .item-slide:hover .box-img .text-wrap {
            bottom: -100%;
        }
    </style>
    <link href='https://fonts.googleapis.com/css?family=Wire+One|Raleway:300' rel='stylesheet' type='text/css'>
    {{-- old menu --}}
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <h1><b> Hotel Management </h1></b>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i
                                        class="fa fa-search text-white"></i></label><input class="form-control search-field"
                                    type="search" id="search-field" name="search"></div>
                    </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1>Business goal designs</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.<br></p>
                        <button class="btn btn-light btn-lg action-button" type="button">Learn More<i
                                class="fa fa-long-arrow-right ml-2"></i></button>
                    </div>
                    <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup">
                            <img class="device"
                                src="https://th.bing.com/th/id/OIP.DWQSxbNldwrZt3wzbeCdkwHaE7?rs=1&pid=ImgDetMain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <section class="new-deal">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 deal deal-block">
                <div class="item-slide">
                    <div class="box-img">
                        <img src="http://orig11.deviantart.net/6356/f/2010/156/e/f/swallowed_by_nature_by_danutza88.jpg"
                            alt="dasdas" />
                        <div class="text-wrap">
                            <h4>Paris europe <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span> Sun,
                                    Jan 29 - Tue, Jan 31</span></h4>
                            <div class="desc">
                                <span>Starting from</span>
                                <h3>$1000</h3>
                            </div>
                            <div class="book-now-c">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide-hover">
                        <div class="text-wrap">
                            <p>MyFlightSearch gets you flight tickets at the best price. MyFlightSearch gets you flight
                                tickets at the best price.</p>
                            <h4>Paris europe <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span> Sun,
                                    Jan 29 - Tue, Jan 31</span></h4>
                            <div class="desc">
                                <span>Starting from</span>
                                <h3>$1000</h3>
                            </div>
                            <div class="book-now-c">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 deal">
                <div class="item-slide">
                    <div class="box-img">
                        <img src="http://orig11.deviantart.net/6356/f/2010/156/e/f/swallowed_by_nature_by_danutza88.jpg"
                            alt="dasdas" />
                        <div class="text-wrap">
                            <h4>Paris europe <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span> Sun,
                                    Jan 29 - Tue, Jan 31</span></h4>
                            <div class="desc">
                                <span>Starting from</span>
                                <h3>$1000</h3>
                            </div>
                            <div class="book-now-c">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide-hover">
                        <div class="text-wrap">
                            <p>MyFlightSearch gets you flight tickets at the best price. MyFlightSearch gets you flight
                                tickets at the best price.</p>
                            <h4>Paris europe <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span> Sun,
                                    Jan 29 - Tue, Jan 31</span></h4>
                            <div class="desc">
                                <span>Starting from</span>
                                <h3>$1000</h3>
                            </div>
                            <div class="book-now-c">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 deal">
                <div class="item-slide">
                    <div class="box-img">
                        <img src="http://orig11.deviantart.net/6356/f/2010/156/e/f/swallowed_by_nature_by_danutza88.jpg"
                            alt="dasdas" />
                        <div class="text-wrap">
                            <h4>Paris europe <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span> Sun,
                                    Jan 29 - Tue, Jan 31</span></h4>
                            <div class="desc">
                                <span>Starting from</span>
                                <h3>$1000</h3>
                            </div>
                            <div class="book-now-c">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide-hover">
                        <div class="text-wrap">
                            <p>MyFlightSearch gets you flight tickets at the best price. MyFlightSearch gets you flight
                                tickets at the best price.</p>
                            <h4>Paris europe <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span>
                                    Sun, Jan 29 - Tue, Jan 31</span></h4>
                            <div class="desc">
                                <span>Starting from</span>
                                <h3>$1000</h3>
                            </div>
                            <div class="book-now-c">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 deal">
                <div class="item-slide">
                    <div class="box-img">
                        <img src="http://orig11.deviantart.net/6356/f/2010/156/e/f/swallowed_by_nature_by_danutza88.jpg"
                            alt="dasdas" />
                        <div class="text-wrap">
                            <h4>Paris europe <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span>
                                    Sun, Jan 29 - Tue, Jan 31</span></h4>
                            <div class="desc">
                                <span>Starting from</span>
                                <h3>$1000</h3>
                            </div>
                            <div class="book-now-c">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="slide-hover">
                        <div class="text-wrap">
                            <p>MyFlightSearch gets you flight tickets at the best price. MyFlightSearch gets you flight
                                tickets at the best price.</p>
                            <h4>Paris europe <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span>
                                    Sun, Jan 29 - Tue, Jan 31</span></h4>
                            <div class="desc">
                                <span>Starting from</span>
                                <h3>$1000</h3>
                            </div>
                            <div class="book-now-c">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 deal">
                <div class="item-slide">
                    <div class="box-img">
                        <img src="http://orig11.deviantart.net/6356/f/2010/156/e/f/swallowed_by_nature_by_danutza88.jpg"
                            alt="dasdas" />
                        <div class="text-wrap">
                            <h4>Paris europe <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span>
                                    Sun, Jan 29 - Tue, Jan 31</span></h4>
                            <div class="desc">
                                <span>Starting from</span>
                                <h3>$1000</h3>
                            </div>
                            <div class="book-now-c">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide-hover">
                        <div class="text-wrap">
                            <p>MyFlightSearch gets you flight tickets at the best price. MyFlightSearch gets you flight
                                tickets at the best price.</p>
                            <h4>Paris europe <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span>
                                    Sun, Jan 29 - Tue, Jan 31</span></h4>
                            <div class="desc">
                                <span>Starting from</span>
                                <h3>$1000</h3>
                            </div>
                            <div class="book-now-c">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 deal">
                <div class="item-slide">
                    <div class="box-img">
                        <img src="http://orig11.deviantart.net/6356/f/2010/156/e/f/swallowed_by_nature_by_danutza88.jpg"
                            alt="dasdas" />
                        <div class="text-wrap">
                            <h4>Paris europe <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span>
                                    Sun, Jan 29 - Tue, Jan 31</span></h4>
                            <div class="desc">
                                <span>Starting from</span>
                                <h3>$1000</h3>
                            </div>
                            <div class="book-now-c">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="slide-hover">
                        <div class="text-wrap">
                            <p>MyFlightSearch gets you flight tickets at the best price. MyFlightSearch gets you flight
                                tickets at the best price.</p>
                            <h4>Paris europe <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span>
                                    Sun, Jan 29 - Tue, Jan 31</span></h4>
                            <div class="desc">
                                <span>Starting from</span>
                                <h3>$1000</h3>
                            </div>
                            <div class="book-now-c">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>





    </section>
    &nbsp;
    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the
                        upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or
                        snippets as the code wants to be simple. We will help programmers build up concepts in different
                        programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android,
                        SQL
                        and Algorithm.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                        <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/about/">About Us</a></li>
                        <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                        <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
    </footer>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor') }}/lightbox2-2.11.3/dist/css/lightbox.min.css">
    <script type="text/javascript" src="{{ asset('vendor') }}/lightbox2-2.11.3/dist/js/lightbox.min.js"></script>
    <style type="text/css">
        .hide {
            display: none;
        }
    </style>
@endsection
