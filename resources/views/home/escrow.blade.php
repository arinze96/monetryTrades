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
                <img src="{{ asset('assets/images/page-titles/map.jpg') }}" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>Escrow</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">Escrow</a></li>
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
                                        Escrow is a legal concept in which a financial instrument or an asset is held by a third party on behalf of two other parties that are in the process of completing a transaction. The funds or assets are held by in escrow until it receives the appropriate instructions or until predetermined contractual obligations have been fulfilled. Money, securities, funds and other assets can all be held in escrow.
                                    </p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>


                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <p>
                                        Escrow comes into play when two parties are in the process of completing a transaction and there is uncertainty over whether one party or another will be able to fulfill their obligations.
                                    </p>
                                </div>
                                <!-- .case-study-text end -->
                            </div>
                            
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="case--study-text">
                                    <p>
                                        For example, a client wants to sell bitcoin but is not certain that the buyer is real or not a fraud also the buyer is not sure that the seller is real and won't disappear with funds after payment. So to resolve this situation we hold the bitcoin and the funds in escrow and remit both to the appropriate parties immediately both parties fulfil their payment obligation. This way, both parties are safe, and the transaction can proceed.

                                        To use our escrow service contact our help desk
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
