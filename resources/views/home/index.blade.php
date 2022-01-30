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
				<div class="col-lg-3 col-md-6 col-xs-12">
					<div class="plan text-center">
						<span class="plan-name">Classic<small>Plan</small></span>
						<p class="plan-price"><sup class="currency">$</sup><strong>3,000</strong>
						</p>
						<ul class="list-unstyled">
							<li>10% monthly</li>
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
                    <div class="plan text-center featured no-mgb yes-mgb">
                        <span class="plan-name">Master <small>plan</small></span>
                        <p class="plan-price"><sup
                                class="currency">$</sup><strong>500,000</strong></p>
                        <ul class="list-unstyled">
							<li>20% monthly</li>
							<li>12 months investment duration</li>
							<li>Security Management</li>
							<li>Automated Payout</li>
							<li>24/7 Tech Support</li>
							<li>Unlimited Project</li>
                        </ul>
                        <a class="btn btn-secondary btn-lg" href="#.">Sign Up Now</a>
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
				</div>
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
