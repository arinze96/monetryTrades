<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/gobiz/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 10:25:44 GMT -->
<head>
   @include('include.home_css')
</head>

<body class="inner-pages">
    <!-- START SECTION HEADINGS -->
    @include('include.home_header')

	<section class="headings">
		<div class="text-heading text-center">
			<div class="container">
				<h1>FAQ'S</h1>
				<h2><a href="{{route('home')}}">Home </a> &nbsp;>>&nbsp; FAQ'S</h2>
			</div>
		</div>
	</section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION FAQ -->
    <section class="service-details faq-text">
        <div class="container">
		<h2 class="mb-5">FREQUENTLY ASKED QUESTIONS</h2>
            <div class="row">
                <div class="col-lg-6 col-md-12 service-info">
                    <article class="faq">                        
                        <div id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <h4 class="panel-heading">
 <a data-toggle="collapse" data-parent="#accordion" href="#tab-1">What payment methods are available?</a>
                            </h4>
                                <div id="tab-1" class="panel-collapse collapse-in">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod Anim pariatur cliche enim eiusmod high life accusamus Business Pro.
                                    </p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <h4 class="panel-heading">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-2">How can i get financial aid to live off campus?</a>
                            </h4>
                                <div id="tab-2" class="panel-collapse collapse">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod Anim pariatur cliche enim eiusmod high life accusamus Business Pro.
                                    </p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <h4 class="panel-heading">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-3" >Does Business Pro share my information with others?</a>
                            </h4>
                                <div id="tab-3" class="panel-collapse collapse">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod Anim pariatur cliche enim eiusmod high life accusamus Business Pro.
                                    </p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <h4 class="panel-heading">
 <a data-toggle="collapse" data-parent="#accordion" href="#tab-4">What kind of Business advice do you give?</a>
                            </h4>
                                <div id="tab-4" class="panel-collapse collapse">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod Anim pariatur cliche enim eiusmod high life accusamus Business Pro.
                                    </p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <h4 class="panel-heading">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-5" >How do i link multiple accounts with my profile?</a>
                            </h4>
                                <div id="tab-5" class="panel-collapse collapse">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod Anim pariatur cliche enim eiusmod high life accusamus Business Pro.
                                    </p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <h4 class="panel-heading mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-6" >What kind of financial advice do you give?</a>
                            </h4>
                                <div id="tab-6" class="panel-collapse collapse">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod Anim pariatur cliche enim eiusmod high life accusamus Business Pro.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6 col-md-12 faq-contact">
					<h3>Didn't you find your answer contact us here</h3>
					<form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                        <div id="success" class="successform">
                            <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                        </div>
                        <div id="error" class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="lastname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-custom input-full" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Send Message</button>
                    </form>
				</div>
            </div>
        </div>
    </section>
    <!-- END SECTION FAQ -->

    <!-- START FOOTER -->
   @include('include.home_footer')

    <a data-scroll href="#heading" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->

    <!-- ARCHIVES JS -->
    @include('include.home_script')
</body>


<!-- Mirrored from code-theme.com/html/gobiz/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 10:25:45 GMT -->
</html>
