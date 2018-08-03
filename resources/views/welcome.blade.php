@extends('layouts.header')
	<body>
	<style>
		.bg{
			width: 300px;
			float: left;
			margin-top:150px;
			margin-right: 0;
			z-index: 0;		}
	</style>	
	<div class="main-wrapper-first">
			<div class="hero-area2 relative">
				<header>
					<div class="container">
						<div class="header-wrap">
							<div class="header-top d-flex justify-content-between align-items-center">
								<div class="logo">
									<a href="index.html"><img style="width:25%;" src="img/logo1.png" alt=""></a>
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
				<div class="banner-area">
					<div class="container">
						<div class="row height align-items-center">
							<div class="col-lg-7">
								
								<div class="banner-content">
									<h1 class="text-white text-uppercase mb-10">@lang('lang.title') <br> @lang('lang.subtitle')</h1>
									<p class="text-white mb-30">@lang('lang.description')</p>
                                    <a href="/Hadi/public/ar/register" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">@lang('lang.register')</span></a>
                                    <br/><br/>
                                    <a href="{{ App::getLocale() }}/login" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">@lang('lang.login')</span></a>
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
								<h2>@lang('lang.brieftitle')</h2>
								<p>@lang('lang.briefdesc')</p>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<div class="main-wrapper">
            @extends('layouts.footer')