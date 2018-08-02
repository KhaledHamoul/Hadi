
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
				<div class="banner-area" style="height:45px;">
					<div class="container">
						<div class="row height align-items-center">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-wrapper">
			<section class="story-area">
				<div class="container">
					<div class="row height align-items-center">
						<div class="col-lg-1">
						</div>
						<div class="col-lg-7">
							<div class="story-box">
								<h6 class="text-uppercase">@lang('lang.abtitle')</h6>
								<p>@lang('lang.abdesc')</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>


@extends('layouts.footer')