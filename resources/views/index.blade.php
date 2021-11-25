@extends('layouts.app')
@section('content')

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fast Delivery</title>
    <!--  bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--  font Awesome Css  -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <!--    css file -->
    <link rel="stylesheet" href="public/app.css">
</head>

<body class="js" style=" background-color:rgba(209, 209, 224);">
    <!--start header area-->
    <div id="preloader"></div>
    <section class="header_area" id="home">
        <!--  start welcome text marup  -->
        <div class="table">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="welcome_text">
                                <h1>Fastest delivery</h1>
                                <h1>for your products </h1>
                                <div class="welcome_p">
                                    <p>Official BidIT partner since 2021</p>
                                </div>
                                <div class="welcome_form">

                                    <form action="" method="POST">
                                        @csrf
                                        <input class="form-control" type="text" name="packageId" placeholder="Enter your product code">
                                        <input class="submit" type="submit" value="Track your product">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end of header area-->

    <!--   start about top area-->
    <section class="about_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 ">
                    <div class="about_single_item">
                        <div class="item_icon">
                        <img src="fast.png" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Fast Delivery</h4>
                            <p>We offer the fastest delivery service in Latvia. Package should reach its owner in 48 hours.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 ">
                    <div class="about_single_item">
                        <div class="item_icon">
                        <img src="partner.png" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>BidIT Partner</h4>
                            <p>We are official partners with BidIT, meaning we work together to help our clients recieve their products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 ">
                    <div class="about_single_item">
                        <div class="item_icon">
                        <img src="private.png" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Private Service</h4>
                            <p>Contact us via email to deliver private packages</p>
                            <a href = "mailto: delivery@bidit.com">Send Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of about top area-->


    <!--    start about us area-->
    <section class="about_us_area" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about_us_content">
                        <h2>About us</h2>
                        <p>BidIT Delivery is official child company to BidIT. We offer delivery service for bid winners or private packages.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   end of about us area-->

    <!--start count up area-->
    <section class="couter_up_area" id="service">
        <div class="table">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-3 text-center">
                        <br>
                            <div class="single_count">
                                <h1 class="counter">126</h1>
                                <h5>Satisfied clients</h5>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-md-offset-1 text-center">
                        <br>
                            <div class="single_count">
                                <h1 class="counter">34</h1>
                                <h5>Branches</h5>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-md-offset-1 text-center">
                        <br>
                            <div class="single_count">
                                <h1 class="counter">120</h1>
                                <h5>Active workers</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-md-offset-1 text-center">
                            <br>
                            <div class="single_count">
                                <h1 class="counter">3546</h1>
                                <h5>Products delivered</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer" id="about">
    <footer class="page-footer font-small dark pt-4">
        <div class="footer-copyright text-center py-3">© 2021 Copyright: BidIT Delivery</div>
    </footer>   
    </section>
@endsection('content')