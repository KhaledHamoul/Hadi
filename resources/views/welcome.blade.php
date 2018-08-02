@extends('layouts.header')
	<body>
		<div class="main-wrapper-first">
			<div class="hero-area relative">
				<header>
					<div class="container">
						<div class="header-wrap">
							<div class="header-top d-flex justify-content-between align-items-center">
								<div class="logo">
									<a href="index.html"><img src="img/logo.png" alt=""></a>
								</div>
								<div class="main-menubar d-flex align-items-center">
									<nav class="hide">
										<a href="index.html">@lang('lang.home')</a>
										<a href="generic.html">@lang('lang.contactUs')</a>
										<a href="elements.html">@lang('lang.whoAreWe')</a>
									</nav>
									<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div class="banner-area">
					<div class="container">
						<div class="row height align-items-center">
							<div class="col-lg-7">
								<div class="banner-content">
									<h1 class="text-white text-uppercase mb-10">@lang('lang.title') <br> #Hajj_Hackathon</h1>
									<p class="text-white mb-30">Living in today’s metropolitan world of cellular phones, mobile computers and other high-tech gadgets is not just hectic but very</p>
                                    <a href="{{ App::getLocale() }}/register" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                                    <br/><br/>
                                    <a href="{{ App::getLocale() }}/login" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-wrapper">
			<div class="working-process-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="section-title text-center">
								<h2>Our Working Process</h2>
								<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving</p>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<div class="main-wrapper">
			<!-- Start Feature Area -->
			<section class="featured-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="section-title text-center">
								<h2 class="text-white">Our Exclusive Features</h2>
								<p class="text-white">Living in today’s metropolitan world of cellular phones, mobile computers and other high-tech gadgets is not just hectic but very </p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="single-feature">
								<div class="thumb" style="background: url(img/t1.jpg);"></div>
								
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-feature">
								<div class="thumb" style="background: url(img/t2.jpg);"></div>
								
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-feature">
								<div class="thumb" style="background: url(img/t3.jpg);"></div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Feature Area -->
			
		

			<!-- Start Subscription Area -->
			<section class="subscription-area">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="section-title">
								<h3>Subscribe for our Newsletter</h3>
								<span>Can you imagine what we will be downloading in another</span>
							</div>
						</div>
						<div class="col-lg-6">
							<div id="mc_embed_signup">
								<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01" method="get" class="subscription relative">
									<input type="email" name="EMAIL" placeholder="Your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required>
									<div style="position: absolute; left: -5000px;">
										<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
									</div>
								    <button class="primary-btn hover d-inline-flex align-items-center"><a href="{{ route('login') }}" class="mr-10">log in</a><span class="lnr lnr-arrow-right"></span></button>
									<div class="info"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Subscription Area -->
			
            @extends('layouts.footer')