<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    @include('includes.home_css')
    <title>Consultivo | Consulting Business Consulting Finance Html5 Template</title>
</head>

<body>
    <div class="preloader">
        <div class="reverse-spinner"></div>
    </div>


    <div id="wrapper" class="wrapper clearfix">
        @include('includes.home_header')

        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="{{ asset('assets/images/page-titles/security.jpg') }}" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>SECURITY</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">Case Studies</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Single Case Studies</li>
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

                        <div class="widget widget-categories">
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li class="active"><a href="#">All services</a></li>
                                    <li><a href="#">Protection & Security</a></li>
                                    <li><a href="#">Licensed Exchange</a></li>
                                    <li><a href="#">Recurring Buys</a></li>
                                    <li><a href="#">Unlimited Free Transfers</a></li>
                                    <li><a href="#">Multi Currency Accounts</a></li>
                                    <li><a href="#">Blockchain Smart Contracts</a></li>
                                </ul>
                            </div>
                        </div>


                    </div><!-- .col-lg-3 end -->
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <h3>Privacy</h3>
                                    <p>Respect for your personal data and information.</p>
                                    <p>Prostackinvest, we place premium on the protection of our client's privacy and information. We are highly professional in dealing with our clients and as such, client's information cannot be shared with the public except by express permission from our clients.
                                    </p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>


                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <h3>Fraud Protection</h3>
                                    <p>Safeguards to protect against unauthorized activity.</p>
                                    <p>Prostackinvest is committed to safeguarding and protecting your account from fraud and all other unauthorized activities. Report as soon as you notice an illegal activity in your account and our company will move in swiftly to ensure you recover whatever loss that may arise as a result of such illegal activity.</p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <h3>Data Security</h3>
                                    <p>Protection behind the scenes.</p>
                                    <p>Our company uses the strongest browser encryption to protect our clients investments. We do this by ensuring that our data collection is saved on a secured server which is strong enough secure and store data.</p>
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
