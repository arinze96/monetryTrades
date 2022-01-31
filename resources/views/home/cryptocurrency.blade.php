<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/gobiz/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 10:25:48 GMT -->
<head>
	@include('include.home_css')
	<title>Moneytarytrades | Cryptocurrency</title>
</head>

<body class="inner-pages ser">
	<!-- START SECTION HEADINGS -->
@include('include.home_header')

<section class="headings">
	<div class="text-heading text-center">
		<div class="container">
			<h1 style="margin-top:-10px; font-size:40px">INVESTMENT PLANS</h1>
			<h2><a href="index.html">Home </a> &nbsp;>>&nbsp; Investment Plans</h2>
		</div>
	</div>
</section>

	<!-- START SECTION PRICING -->
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
							<li>maximum amount </span>${{ number_format($plan->min, 0, '.', ',') }}</li>
                            <li>Daily ROI: {{ $plan->roi }}%</li>
                            <li>Duration: {{ $plan->duration }}%</li>
                            <li>Referral Commision: {{ $plan->commission }}%</li>
							<li>Security Management</li>
							<li>24/7 Support</li>
                        </ul>
                        <a class="btn btn-secondary btn-lg" href="#.">Sign Up Now</a>
                    </div>
                </div>
                @endforeach
                @endif
			</div>
		</div>
	</section>
	<!-- END SECTION PRICING -->

	<!-- START FOOTER -->
@include('include.home_footer')

	<a data-scroll href="#heading" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
	<!-- END FOOTER -->

	<!-- ARCHIVES JS -->
	@include('include.home_script')
</body>


<!-- Mirrored from code-theme.com/html/gobiz/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 10:25:48 GMT -->
</html>
