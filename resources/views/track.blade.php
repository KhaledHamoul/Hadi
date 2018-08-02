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
                                        <div class="row justify-content-center col-lg-20">
                                            <div class="col-lg-20">
                                            </div>
                                        </div>
                                        <form id="myForm" action="mail.php" method="post" class="contact-form">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-10">
                                                    <input type="text" name="fname" placeholder="<?php echo __('lang.Name');?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.Name');?>'" class="common-input" required>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="email" name="email" placeholder="<?php echo __('lang.EMail');?>" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.EMail');?>'" class="common-input mt-20" required>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" name="ID" placeholder="<?php echo __('lang.HajjID');?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.HajjID');?>'" class="common-input mt-20" required>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="text" name="Phone" placeholder="<?php echo __('lang.Phone');?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.Phone');?>'" class="common-input mt-20" required>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="password" name="password" placeholder="<?php echo __('lang.Password');?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.Password');?>'" class="common-input mt-20" required>
                                                </div>
                                                <div class="col-lg-10 d-flex justify-content-end">
                                                    <button class="primary-btn submit-btn d-inline-flex align-items-center mt-20"><span class="mr-10"><?php echo __('lang.next');?></span></button> <br>
                                                    <div class="alert-msg"></div>
                                                </div>
                                            </div>
                                        </form>
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
                    <div class="total-work-process d-flex flex-wrap justify-content-around align-items-center">
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-funnel"></span>
							</div>
							<h4 class="caption">1. Researching</h4>
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-layers"></span>
							</div>
							<h4 class="caption">2. Wireframing</h4>
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-paw"></span>
							</div>
							<h4 class="caption">3. Prototyping</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-wrapper">
			
            @extends('layouts.footer')