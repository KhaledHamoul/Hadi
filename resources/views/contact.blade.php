
@extends('layouts.header')
	<body>
		<div class="main-wrapper-first">
			<div class="hero-area2 relative">
				<header>
					<div class="container">
						<div class="header-wrap">
							<div class="header-top d-flex justify-content-between align-items-center">
								<div class="logo">
									<a href="index.html"><img src="img/logo.png" alt=""></a>
								</div>
								<div class="main-menubar d-flex align-items-center">
									<nav class="hide">
										<a href="<?php
											if (App::isLocale('ar'))  echo '/Hadi/public/ar"';
											else  echo '/Hadi/public/en"';		
										?>">@lang('lang.home')</a>
										<a href="<?php
											if (App::isLocale('ar'))  echo '/Hadi/public/ar/contact"';
											else  echo '/Hadi/public/en/contact"';		
										?>">@lang('lang.contactUs')</a>
										<a href="<?php
											if (App::isLocale('ar'))  echo '/Hadi/public/ar/about"';
											else  echo '/Hadi/public/en/about"';		
										?>">@lang('lang.whoAreWe')</a>
									</nav>
									<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
								</div>
							</div>
						</div>
					</div>
				</header>
			</div>	
<div class="banner-area" style="height:620px;">
	<div class="container">
		<div class="row height align-items-center">
			<div class="main-wrapper">
				<section class="contact-form-area">
					<div style="margin-top: 150px" class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6">
								<div class="section-title text-center">
								<h2 class="text-white">@lang('lang.ctitle')</h2>
								<p class="text-white">@lang('lang.cdesc')</p>
							</div>
						</div>
					</div>
					<form id="myForm" action="mail.php" method="post" class="contact-form">
						<div class="row justify-content-center">
							<div class="col-lg-5">
								<input type="text" name="fname" placeholder="@lang('lang.cname')" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-20" required>
							</div>
							<div class="col-lg-5">
								<input type="email" name="email" placeholder="@lang('lang.caddress')" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-20" required>
							</div>
							<div class="col-lg-10">
								<textarea class="common-textarea mt-20" name="message" placeholder="@lang('lang.cmessage')" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required></textarea>
							</div>
							<div class="col-lg-10 d-flex justify-content-end">
								<button class="primary-btn submit-btn d-inline-flex align-items-center mt-20"><span class="mr-10">@lang('lang.csendmessage')</span></button> <br>
								<div class="alert-msg"></div>
							</div>
						</div>
					</form>
				</section>	
			</div>
		</div>
	</div>
</div>

@extends('layouts.footer')