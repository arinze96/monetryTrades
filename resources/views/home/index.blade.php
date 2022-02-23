<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('include.home_css')
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/styles1.css") }}" rel="stylesheet" />

    <title>Moneytarytrades</title>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/61f3fcb0b9e4e21181bc612c/1fqgh65mk';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</head>


<body>
    <div class="preloader">
        <div class="reverse-spinner"></div>
    </div>

    @include('include.home_header')
            <!-- Navigation-->
            {{-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:#212529;">
                <div class="container">
                    <a class="navbar-brand" href="#page-top"
                        ><img src="{{ asset("assets/images/slider-main/bg1.jpg") }}" alt="..."
                    /></a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarResponsive"
                        aria-controls="navbarResponsive"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        Menu
                        <i class="fas fa-bars ms-1"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> --}}
            <!-- Masthead-->
            <header class="masthead">
                <div class="container">
                    <div class="masthead-subheading">A NEW WAY TO INVEST</div>
                    <div class="masthead-heading" style="font-size:20px">
                        Take the anxiety out of investing by letting us do the work for you
                    </div>
                    <a
                        class="btn btn-primary btn-xl text-uppercase"
                        href="{{route('user.register')}}"
                        >Get Started</a
                    >
                </div>
            </header>

    <!-- START SECTION SERVICES -->
    <section class="services text-center">
        <div class="container">
            <div class="sec-title">
                <h2><span>Our Professional </span>Services</h2>
                <p>There are many ways in which our ivestment experts can help invest your funds for maximum returns</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 cell cel-1">
                    <img src="{{ asset('assets/images/info/img-1.png') }}" width="70" alt="">
                    <h3>Business Consulting</h3>
                    <p>At Monetarytrades we are on daily standby for Business Consulting</p>
                    <div class="inf-btn">

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 cell cel-2">
                    <img src="{{ asset('assets/images/info/img-2.png') }}" width="70" alt="">
                    <h3>Financial Analysis</h3>
                    <p>Our experts at Monetarytrades make proper market analysis before investing funds </p>
                    <div class="inf-btn">

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 cell cel-3">
                    <img src="{{ asset('assets/images/info/img-3.png') }}" width="70" alt="">
                    <h3>Children Account Investment</h3>
                    <p>Our team of Experts are successful investment fund managers on the best financial investment for your kids future </p>
                    <div class="inf-btn">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 cell cel-4">
                    <img src="{{ asset('assets/images/info/img-4.png') }}" width="70" alt="">
                    <h3>Cryptocurrency Investment</h3>
                    <p>We help you invest funds in the best crypto asset for a maximum return</p>
                    <div class="inf-btn">

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 cell cel-5">
                    <img src="{{ asset('assets/images/info/img-5.png') }}" width="70" alt="">
                    <h3>Charity</h3>
                    <p>We raise funds for humaritarian purposes</p>
                    <div class="inf-btn">

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 cell cel-6">
                    <img src="{{ asset('assets/images/info/img-6.png') }}" width="70" alt="">
                    <h3>Retirement Fund Investment</h3>
                    <p>Our team of financial experts advices help advise you on how to manage your portfolio and invest in a high return market for a better future</p>
                    <div class="inf-btn">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION SERVICES -->

    <!-- START SECTION PROJECTS -->
    {{-- <section class="portfolio">
        <div class="container-fluid">
            <div class="head-project">
                <div class="sec-title project">
                    <h2><span>Our </span>Projects</h2>
                    <p>We involve in numerous projects</p>
                </div>
                <div class="inf-btn pro">
                    <a href="#" class="btn btn-pro btn-secondary btn-lg">Show All Projects</a>
                </div>
            </div>
            <div class="row portfolio-items">
                <div class="item col-lg-3 col-md-6 col-xs-12 landscapes no-gutters">
                    <div class="project-single">
                        <div class="project-inner">
                            <div class="project-head">
                                <img src="{{ asset('assets/images/projects/g-1.jpg') }}" alt="#">
                            </div>
                            <div class="project-bottom">
                                <h4><a href="#">Business Consulting</a><span
                                        class="category">Business</span></h4>
                            </div>
                            <div class="button">
                                <a class="img-poppu btn" href="{{ asset('assets/images/projects/g-1.jpg') }}"
                                    data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                                <a href="project-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3 col-md-6 col-xs-12 people no-gutters">
                    <div class="project-single">
                        <div class="project-inner">
                            <div class="project-head">
                                <img src="{{ asset('assets/images/projects/g-2.jpg') }}" alt="#">
                            </div>
                            <div class="project-bottom">
                                <h4><a href="#">Business Grow</a><span
                                        class="category">Business</span></h4>
                            </div>
                            <div class="button">
                                <a class="img-poppu btn" href="{{ asset('assets/images/projects/g-2.jpg') }}"
                                    data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                                <a href="project-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3 col-md-6 col-xs-12 people landscapes no-gutters">
                    <div class="project-single">
                        <div class="project-inner">
                            <div class="project-head">
                                <img src="{{ asset('assets/images/projects/g-3.jpg') }}" alt="#">
                            </div>
                            <div class="project-bottom">
                                <h4><a href="#">Financial Analysis</a><span
                                        class="category">Business</span></h4>
                            </div>
                            <div class="button">
                                <a class="img-poppu btn" href="{{ asset('assets/images/projects/g-3.jpg') }}"
                                    data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                                <a href="project-single.html" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3 col-md-6 col-xs-12 people landscapes no-gutters">
                    <div class="project-single">
                        <div class="project-inner">
                            <div class="project-head">
                                <img src="{{ asset('assets/images/projects/g-4.jpg') }}" alt="#">
                            </div>
                            <div class="project-bottom">
                                <h4><a href="#">Finance Advisor</a><span
                                        class="category">Business</span></h4>
                            </div>
                            <div class="button">
                                <a class="img-poppu btn" href="{{ asset('assets/images/projects/g-4.jpg') }}"
                                    data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                                <a href="project-single.html" class="btn"><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- END SECTION PROJECTS -->

    <!-- START SECTION TEAM -->
    {{-- <section class="team">
        <div class="container">
            <div class="sec-title">
                <h2><span>Our </span>Experts</h2>
                <p>This is our team of experts</p>
            </div>
            <div class="row team-all">
                <div class="team-block col-lg-3 col-md-6 col-xs-12">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="our-team.html"><img src="{{ asset('assets/images/team/team-1.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="lower-box">
                            <h3><a href="our-team.html">Arling Tracy</a></h3>
                            <div class="designation">Acountant</div>
                        </div>
                    </div>
                </div>
                <div class="team-block col-lg-3 col-md-6 col-xs-12">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="our-team.html"><img src="{{ asset('assets/images/team/team-2.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="lower-box">
                            <h3><a href="our-team.html">Carls Jhons</a></h3>
                            <div class="designation">Financial Advisor</div>
                        </div>
                    </div>
                </div>
                <div class="team-block col-lg-3 col-md-6 col-xs-12 pb-none">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="our-team.html"><img src="{{ asset('assets/images/team/team-3.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="lower-box">
                            <h3><a href="our-team.html">Katy Grace</a></h3>
                            <div class="designation">Team Leader</div>
                        </div>
                    </div>
                </div>
                <div class="team-block col-lg-3 col-md-6 col-xs-12 pb-none">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="our-team.html"><img src="{{ asset('assets/images/team/team-4.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="lower-box">
                            <h3><a href="our-team.html">Mark Web</a></h3>
                            <div class="designation">Founder &amp; CEO</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- END SECTION TEAM -->

    <!-- START SECTION INFO-HELP -->
    <section class="info-help">
        <div class="container">
            <div class="row info-head">
                <div class="col-lg-6 col-md-8 col-xs-8">
                    <div class="info-text">
                        <h3>We Can Help With Your Business Today...</h3>
                        <p>Huge community of Consult, Advisor and Acountant ready for your project. Bring to the table
                            win-win survival strategies to ensure proactive domination going forward.</p>
                        <div class="inf-btn pro">
                            <a href="{{route('user.contact')}}" class="btn btn-pro btn-secondary btn-lg">Contact Us Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-3"></div>
            </div>
        </div>
    </section>

    <section class="pricing-table">
		<div class="container">
			<div class="sec-title">
				<h2><span>Pricing </span>Packages</h2>
				<p>Investment Plans</p>
			</div>
			<div class="row">
                @if (!$Plans->isEmpty())
                @foreach ($Plans as $plan)
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="plan text-center featured no-mgb yes-mgb">
                        <span class="plan-name">{{ ucwords($plan->name) }}</span>
                        <p class="plan-price"><sup
                                class="currency">$</sup><strong style="font-size:20p"></span>{{ number_format($plan->min, 0, '.', ',') }}</strong></p>
                        <ul class="list-unstyled">
							<li>maximum amount </span>${{ number_format($plan->max, 0, '.', ',') }}</li>
                            <li>Daily ROI: {{ $plan->roi }}</li>
                            <li>Duration: {{ $plan->duration }}</li>
                            <li>Referral Commision: {{ $plan->commission }}%</li>
							<li>Security Management</li>
							<li>24/7 Support</li>
                        </ul>
                        <a class="btn btn-secondary btn-lg" href="#.">Sign Up Now</a>
                    </div>
                </div>
                @endforeach
                @endif

				{{-- <div class="col-lg-3 col-md-6 col-xs-12">
					<div class="plan text-center">
						<span class="plan-name">Deluxe<small>Plan</small></span>
						<p class="plan-price"><sup class="currency">$</sup><strong>100,000</strong>
						</p>
						<ul class="list-unstyled">
							<li>15% monthly</li>
							<li>12 months investment duration</li>
							<li>Security Management</li>
							<li>Automated Payout</li>
							<li>24/7 Tech Support</li>
							<li>Unlimited Project</li>
						</ul>
						<a class="btn btn-secondary btn-lg" href="{{route('user.register')}}">Sign Up Now</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-xs-12">
					<div class="plan text-center">
						<span class="plan-name">Grand<small>Plan</small></span>
						<p class="plan-price"><sup class="currency">$</sup><strong>1,000,000</strong>
						</p>
						<ul class="list-unstyled">
							<li>40% off monthly</li>
							<li>24 months investment duration</li>
							<li>Security Management</li>
							<li>Automated Payout</li>
							<li>24/7 Tech Support</li>
							<li>Unlimited Project</li>
						</ul>
						<a class="btn btn-secondary btn-lg" href="{{route('user.register')}}">Sign Up Now</a>
					</div>
				</div> --}}
			</div>
		</div>
	</section>

    <section class="testimonials">
        <div class="container">
            <div class="sec-title">
                <h2><span>People</span> Says</h2>
            </div>
            <div class="owl-carousel style1">
                <div class="single-testimonial">
                    <div class="client-comment">
                        <p> Investing in Monetarytrades has been been great. The company is a true 24/7 investment platform that is innovative, reliable and secure!</p>
                    </div>
                    <div class="clinet-inner">
                        <div class="client-thumb">
                            <img src="{{ asset('assets/images/testimonials/ts-1.jpg') }}" alt="" />
                        </div>
                        <div class="client-info">
                            <h2>Carol Deneth</h2>
                            <span>New York City</span>
                            <div class="client-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-comment">
                        <p> I have been investing in Monetarytrades  since July 2021, They are truly amazing and are a key to me being able to retire from my job! I love their professionalism and responsiveness.</p>
                    </div>
                    <div class="clinet-inner">
                        <div class="client-thumb">
                            <img src="{{ asset('assets/images/testimonials/ts-2.jpg') }}" alt="" />
                        </div>
                        <div class="client-info">
                            <h2>John camber</h2>
                            <span>Los Angeles</span>
                            <div class="client-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-empty"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-comment">
                        <p>The past couple of months I have invested with Montarytrades invest I have been very pleased with their superb investment model and their professional & outstanding staff.</p>
                    </div>
                    <div class="clinet-inner">
                        <div class="client-thumb">
                            <img src="{{ asset('assets/images/testimonials/ts-3.jpg') }}" alt="" />
                        </div>
                        <div class="client-info">
                            <h2>Denis Ortwele</h2>
                            <span>Chicago</span>
                            <div class="client-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-comment">
                        <p>Monetary invest offers excellent customer service and passive income products that perform well even when the markets are crazy. I’ve been investing with them for 10 months and it’s been a great experience so far.</p>
                    </div>
                    <div class="clinet-inner">
                        <div class="client-thumb">
                            <img src="{{ asset('assets/images/testimonials/ts-4.jpg') }}" alt="" />
                        </div>
                        <div class="client-info">
                            <h2>Gary Steven</h2>
                            <span>Philadelphia</span>
                            <div class="client-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-empty"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-comment">
                        <p>Since i started investing with Monetarytrades i have never regreted it</p>
                    </div>
                    <div class="clinet-inner">
                        <div class="client-thumb">
                            <img src="{{ asset('assets/images/testimonials/ts-5.jpg') }}" alt="" />
                        </div>
                        <div class="client-info">
                            <h2>Cristy Mayer</h2>
                            <span>San Francisco</span>
                            <div class="client-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="client-comment">
                        <p>Monetrytrrades will help you manage your crypto portfolio... i can attest to that </p>
                    </div>
                    <div class="clinet-inner">
                        <div class="client-thumb">
                            <img src="{{ asset('assets/images/testimonials/ts-6.jpg') }}" alt="" />
                        </div>
                        <div class="client-info">
                            <h2>Ichiro Tasaka</h2>
                            <span>Houston</span>
                            <div class="client-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-empty"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>
                        Meet our team
                    </h1>
                    <p class="lead font-weight-normal mt-4" style="color: #111827;margin-bottom: 3.5em;"></p>

                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card card-pink h-100 overflow-hidden shadow bg-white border-0 px-0">
                        <div class="card-shape">
                            <img src="{{ asset('assets/images/team/tm1.jpg') }}"
                                class="card-img-top" alt="Tauno Vuorine">
                            {{-- <div class="custom-shape-divider-bottom-1634717805">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 1200 120" preserveAspectRatio="none">
                                    <path
                                        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                                        opacity=".25" class="shape-fill"></path>
                                    <path
                                        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                                        opacity=".5" class="shape-fill"></path>
                                    <path
                                        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                                        class="shape-fill"></path>
                                </svg>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <blockquote>
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475.082 475.081" x="0px"
                                    y="0px" width="25px" height="25px"
                                    xmlns:xml="http://www.w3.org/XML/1998/namespace" xml:space="preserve"
                                    version="1.1">
                                    <g>
                                        <g>
                                            <path
                                                d="M 164.45 219.27 h -63.954 c -7.614 0 -14.087 -2.664 -19.417 -7.994 c -5.327 -5.33 -7.994 -11.801 -7.994 -19.417 v -9.132 c 0 -20.177 7.139 -37.401 21.416 -51.678 c 14.276 -14.272 31.503 -21.411 51.678 -21.411 h 18.271 c 4.948 0 9.229 -1.809 12.847 -5.424 c 3.616 -3.617 5.424 -7.898 5.424 -12.847 V 54.819 c 0 -4.948 -1.809 -9.233 -5.424 -12.85 c -3.617 -3.612 -7.898 -5.424 -12.847 -5.424 h -18.271 c -19.797 0 -38.684 3.858 -56.673 11.563 c -17.987 7.71 -33.545 18.132 -46.68 31.267 c -13.134 13.129 -23.553 28.688 -31.262 46.677 C 3.855 144.039 0 162.931 0 182.726 v 200.991 c 0 15.235 5.327 28.171 15.986 38.834 c 10.66 10.657 23.606 15.985 38.832 15.985 h 109.639 c 15.225 0 28.167 -5.328 38.828 -15.985 c 10.657 -10.663 15.987 -23.599 15.987 -38.834 V 274.088 c 0 -15.232 -5.33 -28.168 -15.994 -38.832 C 192.622 224.6 179.675 219.27 164.45 219.27 Z" />
                                            <path
                                                d="M 459.103 235.256 c -10.656 -10.656 -23.599 -15.986 -38.828 -15.986 h -63.953 c -7.61 0 -14.089 -2.664 -19.41 -7.994 c -5.332 -5.33 -7.994 -11.801 -7.994 -19.417 v -9.132 c 0 -20.177 7.139 -37.401 21.409 -51.678 c 14.271 -14.272 31.497 -21.411 51.682 -21.411 h 18.267 c 4.949 0 9.233 -1.809 12.848 -5.424 c 3.613 -3.617 5.428 -7.898 5.428 -12.847 V 54.819 c 0 -4.948 -1.814 -9.233 -5.428 -12.85 c -3.614 -3.612 -7.898 -5.424 -12.848 -5.424 h -18.267 c -19.808 0 -38.691 3.858 -56.685 11.563 c -17.984 7.71 -33.537 18.132 -46.672 31.267 c -13.135 13.129 -23.559 28.688 -31.265 46.677 c -7.707 17.987 -11.567 36.879 -11.567 56.674 v 200.991 c 0 15.235 5.332 28.171 15.988 38.834 c 10.657 10.657 23.6 15.985 38.828 15.985 h 109.633 c 15.229 0 28.171 -5.328 38.827 -15.985 c 10.664 -10.663 15.985 -23.599 15.985 -38.834 V 274.088 C 475.082 258.855 469.76 245.92 459.103 235.256 Z" />
                                        </g>
                                    </g>

                                </svg> --}}
                                <p class="font-italic mt-2 mb-6">
                                    Intersperse Finance Team
                                </p>
                            </blockquote>

                        </div>
                        <div class="card-footer">
                            <p class="mb-0 font-weight-bolder" style="color:#ff2c95">Tauno Vuorine</p>
                            <small class="text-muted">Executive Vice President and Chief Financial Officer</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-blue h-100 overflow-hidden shadow bg-white border-0 px-0">
                        <div class="card-shape">
                            <img src="{{ asset('assets/images/team/tm2.jpg') }}"
                                class="card-img-top" alt="Isak jeremiassen">
                            {{-- <div class="custom-shape-divider-bottom-1634717805">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 1200 120" preserveAspectRatio="none">
                                    <path
                                        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                                        opacity=".25" class="shape-fill"></path>
                                    <path
                                        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                                        opacity=".5" class="shape-fill"></path>
                                    <path
                                        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                                        class="shape-fill"></path>
                                </svg>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <blockquote>
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475.082 475.081" x="0px"
                                    y="0px" width="25px" height="25px"
                                    xmlns:xml="http://www.w3.org/XML/1998/namespace" xml:space="preserve"
                                    version="1.1">
                                    <g>
                                        <g>
                                            <path
                                                d="M 164.45 219.27 h -63.954 c -7.614 0 -14.087 -2.664 -19.417 -7.994 c -5.327 -5.33 -7.994 -11.801 -7.994 -19.417 v -9.132 c 0 -20.177 7.139 -37.401 21.416 -51.678 c 14.276 -14.272 31.503 -21.411 51.678 -21.411 h 18.271 c 4.948 0 9.229 -1.809 12.847 -5.424 c 3.616 -3.617 5.424 -7.898 5.424 -12.847 V 54.819 c 0 -4.948 -1.809 -9.233 -5.424 -12.85 c -3.617 -3.612 -7.898 -5.424 -12.847 -5.424 h -18.271 c -19.797 0 -38.684 3.858 -56.673 11.563 c -17.987 7.71 -33.545 18.132 -46.68 31.267 c -13.134 13.129 -23.553 28.688 -31.262 46.677 C 3.855 144.039 0 162.931 0 182.726 v 200.991 c 0 15.235 5.327 28.171 15.986 38.834 c 10.66 10.657 23.606 15.985 38.832 15.985 h 109.639 c 15.225 0 28.167 -5.328 38.828 -15.985 c 10.657 -10.663 15.987 -23.599 15.987 -38.834 V 274.088 c 0 -15.232 -5.33 -28.168 -15.994 -38.832 C 192.622 224.6 179.675 219.27 164.45 219.27 Z" />
                                            <path
                                                d="M 459.103 235.256 c -10.656 -10.656 -23.599 -15.986 -38.828 -15.986 h -63.953 c -7.61 0 -14.089 -2.664 -19.41 -7.994 c -5.332 -5.33 -7.994 -11.801 -7.994 -19.417 v -9.132 c 0 -20.177 7.139 -37.401 21.409 -51.678 c 14.271 -14.272 31.497 -21.411 51.682 -21.411 h 18.267 c 4.949 0 9.233 -1.809 12.848 -5.424 c 3.613 -3.617 5.428 -7.898 5.428 -12.847 V 54.819 c 0 -4.948 -1.814 -9.233 -5.428 -12.85 c -3.614 -3.612 -7.898 -5.424 -12.848 -5.424 h -18.267 c -19.808 0 -38.691 3.858 -56.685 11.563 c -17.984 7.71 -33.537 18.132 -46.672 31.267 c -13.135 13.129 -23.559 28.688 -31.265 46.677 c -7.707 17.987 -11.567 36.879 -11.567 56.674 v 200.991 c 0 15.235 5.332 28.171 15.988 38.834 c 10.657 10.657 23.6 15.985 38.828 15.985 h 109.633 c 15.229 0 28.171 -5.328 38.827 -15.985 c 10.664 -10.663 15.985 -23.599 15.985 -38.834 V 274.088 C 475.082 258.855 469.76 245.92 459.103 235.256 Z" />
                                        </g>
                                    </g>

                                </svg> --}}
                                <p class="font-italic mt-2 mb-6">
                                    Intersperse Finance Team
                                </p>
                            </blockquote>
                        </div>
                        <div class="card-footer">
                            <p class="mb-0 font-weight-bolder">Isak jeremiassen</p>
                            <small class="text-muted">
                                Administrator</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-pink h-100 overflow-hidden shadow bg-white border-0 px-0">
                        <div class="card-shape">
                            <img src="{{ asset('assets/images/team/tm3.jpg') }}"
                                class="card-img-top" alt="Birk mattson">
                            {{-- <div class="custom-shape-divider-bottom-1634717805">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 1200 120" preserveAspectRatio="none">
                                    <path
                                        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                                        opacity=".25" class="shape-fill"></path>
                                    <path
                                        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                                        opacity=".5" class="shape-fill"></path>
                                    <path
                                        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                                        class="shape-fill"></path>
                                </svg>
                            </div> --}}
                        </div>

                        <div class="card-body">
                            <blockquote>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475.082 475.081" x="0px"
                                    y="0px" width="25px" height="25px"
                                    xmlns:xml="http://www.w3.org/XML/1998/namespace" xml:space="preserve"
                                    version="1.1">
                                    <g>
                                        <g>
                                            <path
                                                d="M 164.45 219.27 h -63.954 c -7.614 0 -14.087 -2.664 -19.417 -7.994 c -5.327 -5.33 -7.994 -11.801 -7.994 -19.417 v -9.132 c 0 -20.177 7.139 -37.401 21.416 -51.678 c 14.276 -14.272 31.503 -21.411 51.678 -21.411 h 18.271 c 4.948 0 9.229 -1.809 12.847 -5.424 c 3.616 -3.617 5.424 -7.898 5.424 -12.847 V 54.819 c 0 -4.948 -1.809 -9.233 -5.424 -12.85 c -3.617 -3.612 -7.898 -5.424 -12.847 -5.424 h -18.271 c -19.797 0 -38.684 3.858 -56.673 11.563 c -17.987 7.71 -33.545 18.132 -46.68 31.267 c -13.134 13.129 -23.553 28.688 -31.262 46.677 C 3.855 144.039 0 162.931 0 182.726 v 200.991 c 0 15.235 5.327 28.171 15.986 38.834 c 10.66 10.657 23.606 15.985 38.832 15.985 h 109.639 c 15.225 0 28.167 -5.328 38.828 -15.985 c 10.657 -10.663 15.987 -23.599 15.987 -38.834 V 274.088 c 0 -15.232 -5.33 -28.168 -15.994 -38.832 C 192.622 224.6 179.675 219.27 164.45 219.27 Z" />
                                            <path
                                                d="M 459.103 235.256 c -10.656 -10.656 -23.599 -15.986 -38.828 -15.986 h -63.953 c -7.61 0 -14.089 -2.664 -19.41 -7.994 c -5.332 -5.33 -7.994 -11.801 -7.994 -19.417 v -9.132 c 0 -20.177 7.139 -37.401 21.409 -51.678 c 14.271 -14.272 31.497 -21.411 51.682 -21.411 h 18.267 c 4.949 0 9.233 -1.809 12.848 -5.424 c 3.613 -3.617 5.428 -7.898 5.428 -12.847 V 54.819 c 0 -4.948 -1.814 -9.233 -5.428 -12.85 c -3.614 -3.612 -7.898 -5.424 -12.848 -5.424 h -18.267 c -19.808 0 -38.691 3.858 -56.685 11.563 c -17.984 7.71 -33.537 18.132 -46.672 31.267 c -13.135 13.129 -23.559 28.688 -31.265 46.677 c -7.707 17.987 -11.567 36.879 -11.567 56.674 v 200.991 c 0 15.235 5.332 28.171 15.988 38.834 c 10.657 10.657 23.6 15.985 38.828 15.985 h 109.633 c 15.229 0 28.171 -5.328 38.827 -15.985 c 10.664 -10.663 15.985 -23.599 15.985 -38.834 V 274.088 C 475.082 258.855 469.76 245.92 459.103 235.256 Z" />
                                        </g>
                                    </g>

                                </svg>
                                <p class="font-italic mt-2 mb-6">
                                    Intersperse Finance Team
                                </p>
                            </blockquote>
                        </div>
                        <div class="card-footer">
                            <p class="mb-0 font-weight-bolder">Birk mattson</p>
                            <small class="text-muted">Founder and major stakeholder</small>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-1">
                <div class="col">
                    <div class="card card-blue h-100 overflow-hidden shadow bg-white border-0 px-0">
                        <div class="card-shape">
                            <img src="{{ asset('assets/images/team/tm4.jpg') }}"
                                class="card-img-top" alt="Natalie Crotch">
                            {{-- <div class="custom-shape-divider-bottom-1634717805">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 1200 120" preserveAspectRatio="none">
                                    <path
                                        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                                        opacity=".25" class="shape-fill"></path>
                                    <path
                                        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                                        opacity=".5" class="shape-fill"></path>
                                    <path
                                        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                                        class="shape-fill"></path>
                                </svg>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <blockquote>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475.082 475.081" x="0px"
                                    y="0px" width="25px" height="25px"
                                    xmlns:xml="http://www.w3.org/XML/1998/namespace" xml:space="preserve"
                                    version="1.1">
                                    <g>
                                        <g>
                                            <path
                                                d="M 164.45 219.27 h -63.954 c -7.614 0 -14.087 -2.664 -19.417 -7.994 c -5.327 -5.33 -7.994 -11.801 -7.994 -19.417 v -9.132 c 0 -20.177 7.139 -37.401 21.416 -51.678 c 14.276 -14.272 31.503 -21.411 51.678 -21.411 h 18.271 c 4.948 0 9.229 -1.809 12.847 -5.424 c 3.616 -3.617 5.424 -7.898 5.424 -12.847 V 54.819 c 0 -4.948 -1.809 -9.233 -5.424 -12.85 c -3.617 -3.612 -7.898 -5.424 -12.847 -5.424 h -18.271 c -19.797 0 -38.684 3.858 -56.673 11.563 c -17.987 7.71 -33.545 18.132 -46.68 31.267 c -13.134 13.129 -23.553 28.688 -31.262 46.677 C 3.855 144.039 0 162.931 0 182.726 v 200.991 c 0 15.235 5.327 28.171 15.986 38.834 c 10.66 10.657 23.606 15.985 38.832 15.985 h 109.639 c 15.225 0 28.167 -5.328 38.828 -15.985 c 10.657 -10.663 15.987 -23.599 15.987 -38.834 V 274.088 c 0 -15.232 -5.33 -28.168 -15.994 -38.832 C 192.622 224.6 179.675 219.27 164.45 219.27 Z" />
                                            <path
                                                d="M 459.103 235.256 c -10.656 -10.656 -23.599 -15.986 -38.828 -15.986 h -63.953 c -7.61 0 -14.089 -2.664 -19.41 -7.994 c -5.332 -5.33 -7.994 -11.801 -7.994 -19.417 v -9.132 c 0 -20.177 7.139 -37.401 21.409 -51.678 c 14.271 -14.272 31.497 -21.411 51.682 -21.411 h 18.267 c 4.949 0 9.233 -1.809 12.848 -5.424 c 3.613 -3.617 5.428 -7.898 5.428 -12.847 V 54.819 c 0 -4.948 -1.814 -9.233 -5.428 -12.85 c -3.614 -3.612 -7.898 -5.424 -12.848 -5.424 h -18.267 c -19.808 0 -38.691 3.858 -56.685 11.563 c -17.984 7.71 -33.537 18.132 -46.672 31.267 c -13.135 13.129 -23.559 28.688 -31.265 46.677 c -7.707 17.987 -11.567 36.879 -11.567 56.674 v 200.991 c 0 15.235 5.332 28.171 15.988 38.834 c 10.657 10.657 23.6 15.985 38.828 15.985 h 109.633 c 15.229 0 28.171 -5.328 38.827 -15.985 c 10.664 -10.663 15.985 -23.599 15.985 -38.834 V 274.088 C 475.082 258.855 469.76 245.92 459.103 235.256 Z" />
                                        </g>
                                    </g>

                                </svg>
                                <p class="font-italic mt-2 mb-6">
                                    Intersperse Finance Team
                                </p>
                            </blockquote>

                        </div>
                        <div class="card-footer">
                            <p class="mb-0 font-weight-bolder">Natalie Crotch</p>
                            <small class="text-muted">Administrator and  Marketer</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-pink h-100 overflow-hidden shadow bg-white border-0 px-0">
                        <div class="card-shape">
                            <img src="{{ asset('assets/images/team/tm5.jpg') }}"
                                class="card-img-top" alt="Lindsay Hatfield">
                            {{-- <div class="custom-shape-divider-bottom-1634717805">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 1200 120" preserveAspectRatio="none">
                                    <path
                                        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                                        opacity=".25" class="shape-fill"></path>
                                    <path
                                        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                                        opacity=".5" class="shape-fill"></path>
                                    <path
                                        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                                        class="shape-fill"></path>
                                </svg>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <blockquote>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475.082 475.081" x="0px"
                                    y="0px" width="25px" height="25px"
                                    xmlns:xml="http://www.w3.org/XML/1998/namespace" xml:space="preserve"
                                    version="1.1">
                                    <g>
                                        <g>
                                            <path
                                                d="M 164.45 219.27 h -63.954 c -7.614 0 -14.087 -2.664 -19.417 -7.994 c -5.327 -5.33 -7.994 -11.801 -7.994 -19.417 v -9.132 c 0 -20.177 7.139 -37.401 21.416 -51.678 c 14.276 -14.272 31.503 -21.411 51.678 -21.411 h 18.271 c 4.948 0 9.229 -1.809 12.847 -5.424 c 3.616 -3.617 5.424 -7.898 5.424 -12.847 V 54.819 c 0 -4.948 -1.809 -9.233 -5.424 -12.85 c -3.617 -3.612 -7.898 -5.424 -12.847 -5.424 h -18.271 c -19.797 0 -38.684 3.858 -56.673 11.563 c -17.987 7.71 -33.545 18.132 -46.68 31.267 c -13.134 13.129 -23.553 28.688 -31.262 46.677 C 3.855 144.039 0 162.931 0 182.726 v 200.991 c 0 15.235 5.327 28.171 15.986 38.834 c 10.66 10.657 23.606 15.985 38.832 15.985 h 109.639 c 15.225 0 28.167 -5.328 38.828 -15.985 c 10.657 -10.663 15.987 -23.599 15.987 -38.834 V 274.088 c 0 -15.232 -5.33 -28.168 -15.994 -38.832 C 192.622 224.6 179.675 219.27 164.45 219.27 Z" />
                                            <path
                                                d="M 459.103 235.256 c -10.656 -10.656 -23.599 -15.986 -38.828 -15.986 h -63.953 c -7.61 0 -14.089 -2.664 -19.41 -7.994 c -5.332 -5.33 -7.994 -11.801 -7.994 -19.417 v -9.132 c 0 -20.177 7.139 -37.401 21.409 -51.678 c 14.271 -14.272 31.497 -21.411 51.682 -21.411 h 18.267 c 4.949 0 9.233 -1.809 12.848 -5.424 c 3.613 -3.617 5.428 -7.898 5.428 -12.847 V 54.819 c 0 -4.948 -1.814 -9.233 -5.428 -12.85 c -3.614 -3.612 -7.898 -5.424 -12.848 -5.424 h -18.267 c -19.808 0 -38.691 3.858 -56.685 11.563 c -17.984 7.71 -33.537 18.132 -46.672 31.267 c -13.135 13.129 -23.559 28.688 -31.265 46.677 c -7.707 17.987 -11.567 36.879 -11.567 56.674 v 200.991 c 0 15.235 5.332 28.171 15.988 38.834 c 10.657 10.657 23.6 15.985 38.828 15.985 h 109.633 c 15.229 0 28.171 -5.328 38.827 -15.985 c 10.664 -10.663 15.985 -23.599 15.985 -38.834 V 274.088 C 475.082 258.855 469.76 245.92 459.103 235.256 Z" />
                                        </g>
                                    </g>

                                </svg>
                                <p class="font-italic mt-2 mb-6">
                                    Intersperse Finance Team
                                </p>
                            </blockquote>
                        </div>
                        <div class="card-footer">
                            <p class="mb-0 font-weight-bolder">Lindsay Hatfield</p>
                            <small class="text-muted">
                                Head of Private and Client Customer Services</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-blue h-100 overflow-hidden shadow bg-white border-0 px-0">
                        <div class="card-shape">
                            <img src="{{ asset('assets/images/team/tm6.jpg') }}"
                                class="card-img-top" alt="Emiko Welch">
                            {{-- <div class="custom-shape-divider-bottom-1634717805">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 1200 120" preserveAspectRatio="none">
                                    <path
                                        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                                        opacity=".25" class="shape-fill"></path>
                                    <path
                                        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                                        opacity=".5" class="shape-fill"></path>
                                    <path
                                        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                                        class="shape-fill"></path>
                                </svg>
                            </div> --}}
                        </div>

                        <div class="card-body">
                            <blockquote>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475.082 475.081" x="0px"
                                    y="0px" width="25px" height="25px"
                                    xmlns:xml="http://www.w3.org/XML/1998/namespace" xml:space="preserve"
                                    version="1.1">
                                    <g>
                                        <g>
                                            <path
                                                d="M 164.45 219.27 h -63.954 c -7.614 0 -14.087 -2.664 -19.417 -7.994 c -5.327 -5.33 -7.994 -11.801 -7.994 -19.417 v -9.132 c 0 -20.177 7.139 -37.401 21.416 -51.678 c 14.276 -14.272 31.503 -21.411 51.678 -21.411 h 18.271 c 4.948 0 9.229 -1.809 12.847 -5.424 c 3.616 -3.617 5.424 -7.898 5.424 -12.847 V 54.819 c 0 -4.948 -1.809 -9.233 -5.424 -12.85 c -3.617 -3.612 -7.898 -5.424 -12.847 -5.424 h -18.271 c -19.797 0 -38.684 3.858 -56.673 11.563 c -17.987 7.71 -33.545 18.132 -46.68 31.267 c -13.134 13.129 -23.553 28.688 -31.262 46.677 C 3.855 144.039 0 162.931 0 182.726 v 200.991 c 0 15.235 5.327 28.171 15.986 38.834 c 10.66 10.657 23.606 15.985 38.832 15.985 h 109.639 c 15.225 0 28.167 -5.328 38.828 -15.985 c 10.657 -10.663 15.987 -23.599 15.987 -38.834 V 274.088 c 0 -15.232 -5.33 -28.168 -15.994 -38.832 C 192.622 224.6 179.675 219.27 164.45 219.27 Z" />
                                            <path
                                                d="M 459.103 235.256 c -10.656 -10.656 -23.599 -15.986 -38.828 -15.986 h -63.953 c -7.61 0 -14.089 -2.664 -19.41 -7.994 c -5.332 -5.33 -7.994 -11.801 -7.994 -19.417 v -9.132 c 0 -20.177 7.139 -37.401 21.409 -51.678 c 14.271 -14.272 31.497 -21.411 51.682 -21.411 h 18.267 c 4.949 0 9.233 -1.809 12.848 -5.424 c 3.613 -3.617 5.428 -7.898 5.428 -12.847 V 54.819 c 0 -4.948 -1.814 -9.233 -5.428 -12.85 c -3.614 -3.612 -7.898 -5.424 -12.848 -5.424 h -18.267 c -19.808 0 -38.691 3.858 -56.685 11.563 c -17.984 7.71 -33.537 18.132 -46.672 31.267 c -13.135 13.129 -23.559 28.688 -31.265 46.677 c -7.707 17.987 -11.567 36.879 -11.567 56.674 v 200.991 c 0 15.235 5.332 28.171 15.988 38.834 c 10.657 10.657 23.6 15.985 38.828 15.985 h 109.633 c 15.229 0 28.171 -5.328 38.827 -15.985 c 10.664 -10.663 15.985 -23.599 15.985 -38.834 V 274.088 C 475.082 258.855 469.76 245.92 459.103 235.256 Z" />
                                        </g>
                                    </g>

                                </svg>
                                <p class="font-italic mt-2 mb-6">
                                    Intersperse Finance Team.
                                </p>
                            </blockquote>
                        </div>
                        <div class="card-footer">
                            <p class="mb-0 font-weight-bolder">Emiko Welch</p>
                            <small class="text-muted">Chief Executive Officer and President</small>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="partners">
        <div class="container">
            <div class="owl-carousel style2">
                <div class="owl-item"><img src="{{ asset('assets/images/partners/1.png') }}" alt=""></div>
                <div class="owl-item"><img src="{{ asset('assets/images/partners/2.png') }}" alt=""></div>
                <div class="owl-item"><img src="{{ asset('assets/images/partners/3.png') }}" alt=""></div>
                <div class="owl-item"><img src="{{ asset('assets/images/partners/4.png') }}" alt=""></div>
                <div class="owl-item"><img src="{{ asset('assets/images/partners/5.png') }}" alt=""></div>
                <div class="owl-item"><img src="{{ asset('assets/images/partners/6.png') }}" alt=""></div>
                <div class="owl-item"><img src="{{ asset('assets/images/partners/7.png') }}" alt=""></div>
                <div class="owl-item"><img src="{{ asset('assets/images/partners/8.png') }}" alt=""></div>
                <div class="owl-item"><img src="{{ asset('assets/images/partners/9.png') }}" alt=""></div>
                <div class="owl-item"><img src="{{ asset('assets/images/partners/10.png') }}" alt=""></div>
            </div>
        </div>
    </div>

    {{-- <section class="request" id="quote">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="property-location mp">
                        <h3>Job Location</h3>
                        <div class="divider-fade"></div>
                        <div id="map-contact" class="contact-map"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Get a Free CONSULTATION</h3>
                    <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                        <div id="success" class="successform">
                            <p class="alert alert-success font-weight-bold" role="alert">Your message was sent
                                successfully!</p>
                        </div>
                        <div id="error" class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="firstname"
                                placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="phonenumber"
                                placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-custom input-full" name="email"
                                placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control textarea-custom input-full" id="ccomment" name="message"
                                required rows="1" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Send Request</button>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}

    


    <a data-scroll href="#heading" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->


    @include('include.home_footer')



</body>
@include('include.home_script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset("js/scripts.js") }}"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<!-- ARCHIVES JS -->
</html>
