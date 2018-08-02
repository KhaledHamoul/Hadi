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
										<a href="/Hadi/public/ar">@lang('lang.home')</a>
										<a href="/Hadi/public/ar/contact">@lang('lang.contactUs')</a>
										<a href="#">@lang('lang.whoAreWe')</a>
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
                                        <div class="row justify-content-center ">
                                            <div>
                                            </div>
                                        </div>
                                        <form  style="margin:auto;" id="myForm" action="mail.php" method="post" class="contact-form ">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-7">
                                                    <input id="name" type="text" name="fname" placeholder="<?php echo __('lang.Name');?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.Name');?>'" class="common-input" required>
                                                </div>
                                                <div class="col-lg-7">
                                                    <input id="email" type="email" name="email" placeholder="<?php echo __('lang.EMail');?>" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.EMail');?>'" class="common-input mt-20" required>
                                                </div>
                                                <div class="col-lg-7">
                                                    <input id="id" type="number" name="ID" placeholder="<?php echo __('lang.HajjID');?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.HajjID');?>'" class="common-input mt-20" required>
                                                </div>
                                                <div class="col-lg-7">
                                                    <input id="phone" type="phone" name="Phone" placeholder="<?php echo __('lang.Phone');?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.Phone');?>'" class="common-input mt-20" required>
                                                </div>
                                                <div class="col-lg-7">
                                                    <input id="password" type="password" name="password" placeholder="<?php echo __('lang.Password');?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.Password');?>'" class="common-input mt-20" required>
                                                </div>
                                                <div class="col-lg-7 d-flex justify-content-end">
                                                    <button id="nextButton" onClick="showNext()" class="primary-btn d-inline-flex align-items-center mt-20"><span class="mr-10"><?php echo __('lang.next');?></span></button> <br>
                                                    <div class="alert-msg"></div>
                                                </div>
                                            </div>
                                        </form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-wrapper" id="nextStep" style="display:none">
			<div class="working-process-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="section-title text-center">
								<h2><?php echo __('lang.hadiChoice');?></h2>
								<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving</p>
							</div>
						</div>
					</div>
                    <div class="total-work-process d-flex flex-wrap justify-content-around align-items-center">
						<div class="single-work-process">
							<div class="work-icon-box">
								<img style="width:80px;margin:15px" src="{{ asset('img/sheep.png') }}"></img>
							</div>
                            <h4 class="caption">@lang('lang.sheep')</h4>
                            <br>
                            <div class="mt-10" style="width:40%;margin:auto">
								<input id="q1" value="0" type="number" onChange="valueChanged()" name="first_name" min="0" placeholder="<?php echo __('lang.quntity');?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.quntity');?>'" required class="single-input">
							</div>
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
							<img style="width:80px;margin:15px" src="{{ asset('img/cow.png') }}"></img>
							</div>
                            <h4 class="caption">@lang('lang.cow')</h4>
                            <br>
                            <div class="mt-10" style="width:40%;margin:auto">
								<input id="q2" value="0" type="number" onChange="valueChanged()" name="first_name" min="0" placeholder="<?php echo __('lang.quntity');?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.quntity');?>'" required class="single-input">
							</div>
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<img style="width:80px;margin:15px" src="{{ asset('img/camel.png') }}"></img>
							</div>
                            <h4 class="caption">@lang('lang.camel')</h4>
                            <br>
                            <div class="mt-10" style="width:40%;margin:auto">
								<input id="q3" value="0" type="number" onChange="valueChanged()" name="first_name" min="0" placeholder="<?php echo __('lang.quntity');?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo __('lang.quntity');?>'" required class="single-input">
							</div>
						</div>
                    </div>
                    <br><br>
                    <div class="mt-10" style="width:40%;margin:auto">
                        <label for="price"><?php echo __('lang.price');?> (ريال سعودي)</label>
						<input style="width:80px" id="price" type="text" name="first_name" min="0" value="0" disabled required class="single-input"> 
						
					</div>
					
                    <div class="row justify-content-center">
				<div class="col-lg-7 d-flex justify-content-end">
						<a href="#"  class="genric-btn primary circle">@lang('lang.pay')</a>
						</div></div>
				</div>
				
                
               
                 
                                              
			</div>
		</div>
		

        <script>
        
        var price = 0 ;
        function showNext(){
			var element = document.getElementById('nextStep');
            var f1 = document.getElementById('name').value;
			var f2 = document.getElementById('email').value;
			var f3 = document.getElementById('id').value;
			var f4 = document.getElementById('phone').value;
			var f5 = document.getElementById('password').value;

			var nextButton = document.getElementById('nextButton');

		if (f1=="") alert("Field Name is Empty");
		else
		if (f2=="") alert("Field Email is Empty");
		else
		if (f3=="") alert("Field ID is Empty");
		else
		if (f4=="") alert("Field Phone is Empty");
		else
		if (f5=="") alert("Field Password is Empty");
		else {
			element.style.display = 'block';
			nextButton.disabled = true ;
		}

		
        }

        

        function valueChanged(){
            var q1 = document.getElementById('q1').value;
            var q2 = document.getElementById('q2').value;
            var q3 = document.getElementById('q3').value;
           
            var p = document.getElementById('price');
            p.value = parseInt(q1)*1000 + parseInt(q2)*1500 + parseInt(q3)*2000 ;
        }

        </script>
			
            @extends('layouts.footer')