<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    @include('includes.home_css')
    <title>Moneytarytrades | Forex</title>
</head>

<body>
    <div class="preloader">
        <div class="reverse-spinner"></div>
    </div>


    <div id="wrapper" class="wrapper clearfix">
        @include('includes.home_header')

        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="{{ asset('assets/images/page-titles/map.jpg') }}" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>Forex</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">Forex</a></li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-lg-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>

        <section id="case-study-single" class="case-study case-study-single">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3">

                    </div><!-- .col-lg-3 end -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    
                                    <p>
                                        Forex or Fx is an acronym of Foreign Exchange and Forex trading means to trade on this market. Trading takes place by predicting how one currency performs against another in a Forex pair. It is the largest market in the world with average daily trading volumes exceeding trillions of dollars.
                                    </p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>


                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <p>
                                        For those who know what they are doing, Forex trading can be very profitable activity although it doesn't come without risks. To get the best out of your trading experience. It is critical that you choose a Forex platform/broker that can offer you everything you need from demo platforms to educational tools.
                                    </p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>
                            
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <p>
                                        Selecting the right broker can be a time-consuming process. Who do you choose and why? What do you look out for and how do you know that the company/broker is safe? That is where we come in. Our team of experts scour the internet reviewing and rating all of the markets, so that we only present you with the best of them. It is then up to you to make an informed decision as to how much to invest.
                                    </p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>


                        </div>
                    </div>
                    <!-- .col-md-9 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>

        <section id="cta1" class="cta cta-1 bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <h3>Doing the Right Thing, at the Right Time!</h3>
                    </div>
                    <!-- .col-lg-9 -->
                    <div class="col-sm-12 col-md-12 col-lg-3 text-right">
                        <a href="#" class="btn btn--white btn--bordered btn--rounded">Get Started</a>
                    </div>
                    <!-- .col-lg-3 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>

        @include('includes.home_footer')


        <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
    </div>
    @include('includes.home_script')
</body>


</html>
