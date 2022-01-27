<!DOCTYPE html>
<html lang="zxx">

<head>
	@include('include.home_css')
</head>

<body class="inner-pages ser">
	<!-- START SECTION HEADINGS -->
@include('include.home_header')

<section class="headings">
	<div class="text-heading text-center">
		<div class="container">
			<h1 style="margin-top:-10px; font-size:40px">CHILDREN ACCOUNT</h1>
			<h2><a href="index.html">Home </a> &nbsp;>>&nbsp; Children Account</h2>
		</div>
	</div>
</section>
{{-- <footer class="first-footer">
	<div class="top-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-6">
					<p><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp;
						Our experienced real estate team pinpoints properties with the highest potential.
					</p> 
					<p><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp;
						We purchase, renovate and manage apartment buildings across the country the fund renovates the units to increase the cash flow. This immediately increases the building’s value as well as the rents.
					</p> 
					<p><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp;
						Cash flow from rents is reinvested throughout the fund’s term to continue adding new properties and funding renovations. Since all properties are cash flowing, we wait and let the assets further appreciate so we can sell them at a maximum profit.
					</p> 
					<p><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp;
						The risk of a sharp decline in the investment value of assets.When the market is right, we sell the assets and redistribute profits among investors.
					</p> 
				</div>


				<div class="col-lg-4 col-md-6">
					<img src="{{ asset('assets/images/background/estate1.jpg') }}" />
				</div>
			</div>
		</div>
	</div>
</footer> --}}

<footer class="first-footer">
	<div class="top-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<img src="{{ asset('assets/images/background/general.jpg') }}" />
				</div>
				<div class="col-lg-8 col-md-6">
					<p>
						As a parent, We want the best for our kids. We want to do everything Possible to set them up for success.
					</p>
					<p>
						We at Blueglide Capital have spoken with many parents and grandparents who have one simple question: How can I invest in my child or grandchild’s future? Knowing the power of compound interest, some couple wrote us that they wanted to kick-start their son’s retirement savings. Others just want to help their kids get a college diploma without taking on any debt.
					</p>
				</div>
			</div> <br> <br>
			<div class="row">
				Those are great concerns to have, so give yourself a high five! Whether “Junior” is still crawling around the living room floor or getting ready to graduate from high school, we got you covered, you can secure and invest in their future. The Blueglide Capital Children’s Account is a unique investments account designed to allow parents invest then save for their children’s future and teach them about savings/investments from a tender age. The account is modeled in two tiers for young children and teens with an overarching objective of making savings fun for them and teaching them financial discipline.
			</div>
		</div>
	</div>
</footer>

<footer class="first-footer">
	<div class="top-footer">
		<div class="container">
			<h4 style="font-style:italics; color:#0f1341">MONETARYTRADES CHILDREN’S ACCOUNT(0-15)</h4>
			<div class="row">
				
				<div class="col-lg-8 col-md-6">
					<p>
						BGC account is modeled in two tiers for young children and teens with an overarching objective of making savings fun for them and teaching them financial discipline.
					</p>
					<p><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp;
						An account specifically for children between the ages of 0-15yrs
					</p> 
					<p><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp;
						ROI rate at 150% per annum (withdrawal once a year and only if there are emergency needs)
					</p> 
					<p><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp;
						Zero account opening balance
					</p> 
					<p><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp;
						Minimum Investment of $15,000
					</p> 
				</div>
				<div class="col-lg-4 col-md-6">
					<img src="{{ asset('assets/images/background/children.jpg') }}" />
				</div>
			</div>
		</div>
	</div>
</footer>

<footer class="first-footer">
	<div class="top-footer">
		<div class="container">
			<h4 style="font-style:italics; color:#0f1341">MONETARYTRADES CHILDREN’S ACCOUNT FOR TEENS (16 and above)</h4>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<img src="{{ asset('assets/images/background/teens.jpg') }}" />
				</div>
				<div class="col-lg-8 col-md-6">
					<p>
						MT Teens account is a next level account for teenagers from 16years and above.
					</p>
					<p><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp;
						An account specifically for children between the ages of 16-Above
					</p> 
					<p><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp;
						Interest rate at 200%( withdraw twice a year and more only if they are emergency needs)
					</p> 
					<p><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp;
						Zero account opening balance
					</p> 
					<p><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp;
						Minimum Investment of $20,000
					</p> 
				</div>
			</div>
		</div>
	</div>
</footer>
<section class="pricing-table">
	<div class="container">
		<div class="sec-title">
			<h2><span>Pricing </span>Packages</h2>
			<p>Real Estate Investment Package</p>
		</div>
		<div class="row">
			<!-- plan start -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="plan text-center">
					{{-- <span class="plan-name">Real Estate<small>Plan</small></span>
					<p class="plan-price"><sup class="currency">$</sup><strong>150,000</strong><sub>.00</sub>
					</p>
					<ul class="list-unstyled">
						<li>20% off quaterly</li>
						<li>24 months investment duration</li>
						<li>Security Management</li>
						<li>Automated Payout</li>
						<li>24/7 Tech Support</li>
						<li>Unlimited Project</li>
					</ul> --}}
					<a class="btn btn-secondary btn-lg" href="{{route('user.register')}}">Sign Up Now</a>
				</div>
			</div>
		</div>
	</div>
</section>

@include('include.home_footer')

	<a data-scroll href="#heading" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
	<!-- END FOOTER -->

	<!-- ARCHIVES JS -->
	@include('include.home_script')
</body>


<!-- Mirrored from code-theme.com/html/gobiz/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 10:25:48 GMT -->
</html>
