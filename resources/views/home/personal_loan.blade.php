<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<head>
    @include('includes.home_css')
    <title>Moneytarytrades | Personal Loan</title>
</head>

<body>
    <div class="preloader">
        <div class="reverse-spinner"></div>
    </div>

    <div id="wrapper" class="wrapper clearfix">
        @include('includes.home_header')


        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="{{ asset('assets/images/page-titles/office2.jpg') }}" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>Get A Personal Loan</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Get A Personal Loan</li>
                            </ol>
                        </div><!-- .title end -->
                    </div><!-- .col-lg-8 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </section><!-- #page-title end -->



        <section id="featured2" class="featured featured-2 featured-left pt-110 pb-110 bg-overlay bg-overlay-dark3">
            <div class="bg-section"><img src="{{ asset('assets/images/background/1.jpg') }}" alt="background">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="heading">
                            <h2 class="heading--title color-white">We Are Here To Ease<br>The Investment Obstacles!</h2>
                            <p class="heading--desc color-white">The choice is in your hands: Where do you go to get an
                                advice and where you purchase products?!!</p>
                        </div>
                        <!-- Feature Card #1 -->
                        <div class="feature-card wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-card-icon">
                                <i class="icon-refresh"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Innovative Solutions</h3>
                                <p class="feature-card-desc ">Innovative Solutions offers services, development
                                    services and consulting to help you make the best technology.</p>
                            </div>
                        </div>
                        <!-- feature-card end -->
                        <!-- Feature Card #2 -->
                        <div class="feature-card wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-card-icon">
                                <i class="icon-speedometer"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">On Time Services</h3>
                                <p class="feature-card-desc ">Mutual funds from many investors to purchase broad range
                                    of investments, such as stocks, goals, and dreams.</p>
                            </div>
                        </div>
                        <!-- feature-card end -->
                        <!-- Feature Card #3 -->
                        <div class="feature-card wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-card-icon">
                                <i class="icon-lifesaver"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Best Support</h3>
                                <p class="feature-card-desc ">We bring the right people business solutions to challenge
                                    established thinking and drive transformation.</p>
                            </div>
                        </div>
                        <!-- feature-card end -->
                    </div>
                    <!-- .col-lg-6 end -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="contact-box">
                            <div class="contat-heading">
                                <h3>Apply to get a personal loan</h3>
                            </div>
                            <form class="mb-0" action="" method="POST">
                                @csrf

                                <div class="col-sm-12 col-md-6 col-lg-12">
                                    <input type="text" class="form-control" value="{{ old('firstname') }}"
                                        name="firstname" id="firstname" placeholder="Firstname" required="">
                                </div>
                                @error('firstname')
                                    <p class="">{{ $message }} </p>
                                @enderror
                                <div class="col-sm-12 col-md-6 col-lg-12">
                                    <input type="text" class="form-control" value="{{ old('lastname') }}"
                                        name="lastname" id="lastname" placeholder="Lastname" required="">
                                </div>
                                @error('lastname')
                                    <p class="">{{ $message }} </p>
                                @enderror
                                <div class="col-sm-12 col-md-6 col-lg-12">
                                    <input type="email" class="form-control" value="{{ old('email') }}" name="email"
                                        id="email" placeholder="Email">
                                </div>
                                @error('email')
                                    <p class="">{{ $message }} </p>
                                @enderror

                                <div class="col-sm-12 col-md-6 col-lg-12">
                                    <input type="text" class="form-control" value="{{ old('address') }}"
                                        name="address" id="address" placeholder="Address">
                                </div>
                                @error('address')
                                    <p class="">{{ $message }} </p>
                                @enderror
                                <div class="col-sm-12 col-md-6 col-lg-12">
                                    <input type="text" class="form-control" value="{{ old('next-of-kin') }}"
                                        name="next-of-kin" id="next-of-kin" placeholder="Next of Kin">
                                </div>
                                @error('next-of-kin')
                                    <p class="">{{ $message }} </p>
                                @enderror
                                <div class="col-sm-12 col-md-6 col-lg-12">
                                    <div class="form-select">
                                        <i class="fa fa-angle-down"></i>
                                        <select name="currency" id="strategySelect" class="form-control">
                                            <option value="" disabled selected hidden>Payment Method</option>
                                            <option value="0">BTC</option>
                                            <option value="1">USD</option>
                                        </select>
                                    </div>
                                </div>
                                @error('currency')
                                    <p class="">{{ $message }} </p>
                                @enderror
                                <div class="col-sm-12 col-md-6 col-lg-12">
                                    <div class="form-select">
                                        <i class="fa fa-angle-down"></i>
                                        <select name="amount" id="strategySelect" class="form-control">
                                            <option value="" disabled selected hidden>Amount</option>
                                            <option value="0">$1,000</option>
                                            <option value="1">$3,000</option>
                                            <option value="2">$5,000</option>
                                            <option value="3">$7,000</option>
                                            <option value="4">$10,000</option>
                                            <option value="5">$15,000</option>
                                            <option value="6">$25,000</option>
                                            <option value="7">$35,000</option>
                                            <option value="8">$50,000</option>
                                            <option value="9">$100,000</option>
                                            <option value="10">6 months</option>
                                        </select>
                                    </div>
                                </div>
                                @error('amout')
                                    <p class="">{{ $message }} </p>
                                @enderror
                                <div class="col-sm-12 col-md-6 col-lg-12">
                                    <div class="form-select">
                                        <i class="fa fa-angle-down"></i>
                                        <select name="duration" id="strategySelect" class="form-control">
                                            <option value="" disabled selected hidden>Duration of Loan</option>
                                            <option value="0">3 months</option>
                                            <option value="1">6 months</option>
                                            <option value="2">1 year</option>
                                            <option value="2">2 years</option>
                                        </select>
                                    </div>
                                </div>
                                @error('duration')
                                    <p class="">{{ $message }} </p>
                                @enderror

                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="submit" id="submit" value="Submit Request" name="submit"
                                            class="btn btn--secondary btn--block">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="contact-result"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- form end -->
                        </div>
                    </div>
                    <!-- .col-lg-6 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>


        <section id="cta1" class="cta cta-1 bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-9 col-md-9">
                        <h3>Doing the Right Thing, at the Right Time!</h3>
                    </div>
                    <!-- .col-lg-9 -->
                    <div class="col-12 col-sm-3 col-md-3 text-right">
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
    </div><!-- #wrapper end -->
    @include('includes.home_script')
</body>



</html>
