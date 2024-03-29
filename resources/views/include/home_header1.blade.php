<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="top-info hidden-sm-down">
                <div class="call-header">
                    <p><i class="fa fa-phone" aria-hidden="true"></i> <span style="color:black">(234) 0200 17813</span> </p>
                </div>
                <div class="address-header">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i><span style="color:black"> 95 South Park Ave, Switzerland</span></p>
                </div>
                <div class="mail-header">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> <span style="color:black">info@gobiz.com</span></p>
                </div>
            </div>
            <div class="top-social hidden-sm-down">
                <div class="social-icons-header">
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom heading sticky-header" id="heading" style="  background-color: #03a9f5;">
        <div class="container">
            <!-- STAR MOBILE LOGO -->
            <a href="{{route('app.home')}}" class="logo">
                <img src="{{asset('assets/images/background/MT_Trans_2.png')}}" alt="businesspro">
            </a>
            <!-- END MOBILE LOGO -->
            <div class="get-quote hidden-lg-down" style="background-color: #0f1341;">
                <a data-scroll href="{{route('user.contact')}}">
                    <p>CONTACT US</p>
                </a>
            </div>
            <button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search" aria-expanded="false">
                <i class="fa fa-search" aria-hidden="true" style="color: #0f1341;"></i>
            </button>
            <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true" style="color: #0f1341;"></i>
            </button>

            <form action="#" id="bloq-search" class="collapse">
                <div class="bloq-search">
                    <input type="text" placeholder="search...">
                    <input type="submit" value="Search">
                </div>
            </form>

            <nav id="main-menu" class="collapse">
                <ul>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="{{route('app.home')}}" aria-expanded="false">HOME</a>
                        </div>

                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="" data-toggle="" aria-haspopup="true" aria-expanded="false" href="{{route('app.home')}}">HOME</a>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="{{route('company')}}" aria-expanded="false">COMPANY</a>
                        </div>
                        <div class="collapse" id="about">
                            <div class="card card-block">
                                <a class="dropdown-item" href="about">About Us</a>
                                <a class="dropdown-item" href="{{route('what-we-offer')}}">What We Offer</a>
                                <a class="dropdown-item" href="{{route('risk-management')}}">Risk Management</a>
                                <a class="dropdown-item" href="{{route('faq')}}">FAQ</a>
                                <a class="dropdown-item" href="{{route('team')}}">Our Team</a>

                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{route('company')}}">COMPANY</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="about">About Us</a>
                            <a class="dropdown-item" href="{{route('what-we-offer')}}">What We Offer</a>
                            <a class="dropdown-item" href="{{route('risk-management')}}">Risk Management</a>
                            <a class="dropdown-item" href="{{route('faq')}}">FAQ</a>
                            <a class="dropdown-item" href="{{route('team')}}">Our Team</a>
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="{{route('investments')}}" aria-expanded="false">INVESTMENTS</a>
                        </div>
                        <div class="collapse" id="services">
                            <div class="card card-block">
                                <a class="dropdown-item" href="{{route('real_estate')}}">Real Estate</a>
                                <a class="dropdown-item" href="{{route('market-analysis')}}">Market Analysis</a>
                                <a class="dropdown-item" href="{{route('cryptocurrency-plans')}}">Cryptocurrency Plans</a>
                                <a class="dropdown-item" href="{{route('retirement')}}">Retirement</a>
                                <a class="dropdown-item" href="{{route('children-account')}}">Children Account</a>
                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{route('investments')}}">INVESTMENTS</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('real_estate')}}">Real Estate</a>
                            <a class="dropdown-item" href="{{route('market-analysis')}}">Market Analysis</a>
                            <a class="dropdown-item" href="{{route('cryptocurrency-plans')}}">Cryptocurrency Plans</a>
                            <a class="dropdown-item" href="{{route('retirement')}}">Retirement</a>
                            <a class="dropdown-item" href="{{route('children-account')}}">Children Account</a>
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="" href="{route('charity')}}" aria-expanded="false">CHARITY</a>
                        </div>

                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="" aria-haspopup="true" aria-expanded="false" href="{{route('charity')}}">CHARITY</a>

                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="" href="{{route('user.login')}}" aria-expanded="false">LOGIN</a>
                        </div>
                        <div class="" id="blog">

                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="" aria-haspopup="true" aria-expanded="false" href="{{route('user.login')}}">LOGIN</a>

                    </li>
                    <li><a href="{{route('user.register')}}">REGISTER</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>