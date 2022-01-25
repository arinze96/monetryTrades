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
    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper" class="wrapper clearfix">
        @include('includes.home_header')

        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="{{ asset('assets/images/page-titles/map.jpg') }}" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="title title-6 text-center">
                            <div class="title--heading">
                                <h1>Our Pricing</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">about</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Pricing</li>
                            </ol>
                        </div><!-- .title end -->
                    </div><!-- .col-lg-8 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </section><!-- #page-title end -->
        <section id="about1" class="about about-1 bg-gray pt-110 pb-50">
            <div class="container">
                <h1 style="text-align: center; color:#98cb2b">Company Milestone</h1>
                <!-- .row end -->
                <div class="counter counter-1">
                    <div class="row">
                        <!-- count #1 -->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="count-box text-center">
                                <div class="counting">1,538</div>
                                <div class="count-title">No of Investors and counting</div>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->
                        <!-- count #2 -->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="count-box text-center">
                                <div class="counting">5,124</div>
                                <div class="count-title">Deposit</div>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->
                        <!-- count #3 -->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="count-box text-center">
                                <div class="counting">13,128</div>
                                <div class="count-title">Withdrawals</div>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->
                        <!-- count #4 -->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="count-box text-center">
                                <div class="counting">29,534</div>
                                <div class="count-title">Working Hours</div>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .counter end -->
            </div>
            <!-- .container end -->
        </section>




        <!-- Pricing Table #1
============================================= -->
        <section id="pricing1" class="pricing pricing-1 bg-overlay bg-overlay-dark pt-110 pb-0">
            <div class="bg-section">
                <img src="{{ asset('assets/images/background/2.jpg') }}" al="bg">
            </div>
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-1 text--center mb-40">
                            <p class="heading--subtitle">Get Started Now</p>
                            <h2 class="heading--title text-white">Our Pricing Plans</h2>
                            <p class="heading--desc mb-0">Get started now with us to earn every day and forever in your
                                business. We accept Investment from all over the world.</p>
                        </div>
                    </div><!-- .col-lg-6 end -->
                </div><!-- .row end -->
            </div>
            <div class="container pt-40">
                <div class="row">
                    <!-- Pricing Packge #1
   ============================================= -->
                    @if (!$Plans->isEmpty())
                        @foreach ($Plans as $plan)
                            <div class="col-sm-12 col-md-4 col-lg-4 price-table pricing-active">
                                <div class="pricing-panel">
                                    <!--  Pricing heading  -->
                                    <div class="pricing--heading text--center">
                                        <div class="pricing--icon">
                                            <i class="icon-global"></i>
                                        </div>
                                        <h4>{{ ucwords($plan->name) }}</h4>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Minimum Investment
                                        </div>
                                        <p style="font-size:50px"><span
                                                class="currency">$</span>{{ number_format($plan->min, 0, '.', ',') }}
                                        </p>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Maximum Investment
                                        </div>
                                        <p style="font-size:50px"><span
                                                class="currency">$</span>{{ number_format($plan->max, 0, '.', ',') }}
                                        </p>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Daily ROI: {{ $plan->roi }}%
                                        </div>
                                        <div style="margin-bottom: 10px"></div>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Duration: {{ $plan->duration }}%
                                        </div>
                                        <div style="margin-bottom: 10px"></div>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Referral Commision: {{ $plan->commission }}%
                                        </div>
                                        <div style="margin-bottom: 10px"></div>
                                        <div class="pricing--desc" style="margin-bottom:-1px">
                                            Capital Return: YES
                                        </div>
                                        <div style="margin-bottom: 10px"></div>
                                        <div class="pricing--desc" style="margin-bottom:0px">
                                            Instant Withdrawal: YES
                                        </div>
                                        <div style="margin-bottom: 10px"></div>
                                        <div class="pricing--desc" style="margin-bottom: 0px">
                                            24/7 Live Support
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div><!-- .row end -->
            </div><!-- .container end -->
            <div class="section-divider"></div>
        </section><!-- #pricing1 end -->

        <!-- Testimonial #1
============================================= -->
        <section id="testimonial1" class="testimonial testimonial-1 pt-70 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                        <div id="testimonial-wide" class="carousel owl-carousel" data-slide="1" data-slide-rs="1"
                            data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="true"
                            data-speed="800">
                            <!-- Testimonial #1 -->
                            <div class="testimonial-panel">
                                <div class="testimonial--img">
                                    <img src="{{ asset('assets/images/testimonial/2.png') }}"
                                        alt="Testimonial Author">
                                </div>
                                <div class="testimonial--body">
                                    <div class="testimonial--icon2"></div>
                                    <!-- .testimonial-icon end -->
                                    <p>Investing in ProStack has been been great. The company is a true 24/7 investment
                                        platform that is innovative, reliable and secure!</p>
                                </div>
                                <!-- .testimonial-body end -->
                                <div class="testimonial--icon"></div>
                                <!-- .testimonial-icon end -->
                                <div class="testimonial--meta">
                                    <h4>Mahmoud Baghagho</h4>
                                    <p>Montreal</p>
                                </div>
                                <!-- .testimonial-meta end -->
                            </div>
                            <!-- .testimonial-panel end -->

                            <!-- Testimonial #2 -->
                            <div class="testimonial-panel">
                                <div class="testimonial--img">
                                    <img src="{{ asset('assets/images/testimonial/1.png') }}"
                                        alt="Testimonial Author">
                                </div>
                                <div class="testimonial--body">
                                    <div class="testimonial--icon2"></div>
                                    <!-- .testimonial-icon end -->
                                    <p>I have been investing in ProStack since July 2021, They are truly amazing and are
                                        a key to me being able to retire from my job! I love their professionalism and
                                        responsiveness..!</p>
                                </div>
                                <!-- .testimonial-body end -->
                                <div class="testimonial--icon"></div>
                                <!-- .testimonial-icon end -->
                                <div class="testimonial--meta">
                                    <h4>ayman fikry</h4>
                                    <p>isreal</p>
                                </div>
                                <!-- .testimonial-meta end -->
                            </div>
                            <!-- .testimonial-panel end -->

                            <!-- Testimonial #3 -->
                            <div class="testimonial-panel">
                                <div class="testimonial--img">
                                    <img src="{{ asset('assets/images/testimonial/3.png') }}"
                                        alt="Testimonial Author">
                                </div>
                                <div class="testimonial--body">
                                    <div class="testimonial--icon2"></div>
                                    <!-- .testimonial-icon end -->
                                    <p>The past couple of months I have invested with ProStack invest I have been very
                                        pleased with their superb investment model and their professional & outstanding
                                        staff.
                                    </p>
                                </div>
                                <!-- .testimonial-body end -->
                                <div class="testimonial--icon"></div>
                                <!-- .testimonial-icon end -->
                                <div class="testimonial--meta">
                                    <h4>Fouad badawy</h4>
                                    <p>Panama</p>
                                </div>
                                <!-- .testimonial-meta end -->
                            </div>
                            <!-- .testimonial-panel end -->
                        </div>
                    </div>
                    <!-- .col-lg-10 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #testimonial1 end -->


        <section id="cta1" class="cta cta-1 bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-9 col-md-9">
                        <h3>Doing the Right Thing, at the Right Time!</h3>
                    </div>
                    <!-- .col-lg-9 -->
                    <div class="col-sm-12 col-md-12 col-lg-3 text-right">
                        <a href="{{ route('user.pages.view', ['contact']) }}"
                            class="btn btn--white btn--bordered btn--rounded">Get Started</a>
                    </div>
                </div>
            </div>
        </section>

        @include('includes.home_footer')


        <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
    </div><!-- #wrapper end -->
    @include('includes.home_script')
</body>

</html>
