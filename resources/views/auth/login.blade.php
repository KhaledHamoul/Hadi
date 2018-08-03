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
                                        <form id="myForm" action="mail.php" method="post" class="contact-form" style="margin:auto">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-10">
                                                    <input type="email" name="email" placeholder="<?php echo __('lang.EMail');?>" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.EMail');?>'" class="common-input mt-20" required>
                                                </div>
                                                <div class="col-lg-10">
                                                    <input type="password" name="password" placeholder="<?php echo __('lang.Password');?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.Password');?>'" class="common-input mt-20" required>
                                                </div>
                                                <div class="col-lg-10 d-flex justify-content-end">
                                                    <button class="primary-btn submit-btn d-inline-flex align-items-center mt-20"><span class="mr-10"><?php echo __('lang.login');?></span></button> <br>
                                                    <div class="alert-msg"></div>
                                                </div>
                                            </div>
                                        </form>
						</div>
					</div>
				</div>
			</div>
        </div>
        
		
			
            @extends('layouts.footer')