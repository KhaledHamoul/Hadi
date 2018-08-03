@extends('layouts.header')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<body>
		<div class="main-wrapper-first relative" style="width:98%">
			<header>
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<img src="img/logo.png" alt="">
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="index.html">Home</a>
									<a href="generic.html">Generic</a>
									<a href="elements.html">Elements</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="banner-area" >
				<div class="container">
					<div class="row justify-content-center generic-height align-items-center">
						<div class="col-lg-8">
							<div class="banner-content text-center">
                                <h1 class="text-white text-uppercase mb-10">هادي سولوشن </h1>
                                <br><br>
								<p class="text-white"> أهلا بك  <h4 style="font-weight:bold"> Ali Alissa</h4></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <style>
		.w3-bar-block {
			width : 20%;
			border-left : #f5f5f5 1px solid;
			margin : 0px;
			text-align : center ;
			height : 100%;

		}
		.w3-bar-item {
			height : 70px;
			background-color : #f5f5f5;
			margin: auto ;
			font-size: 18px;
			
		}
		.dashContent {
			float : left;
			margin: 80px;
			padding : 10px;
			text-align : right; 
			width: 60%;
			
		}
		.progress-table {
			width : 60%;
		}
		.stageIcons {
			width: 80px;
			margin-top : 25px;
		}
		
		

		</style>


		<div class="main-wrapper" style="height: 1200px;width:98%;padding:0px">
			<div class="working-process-area" style="padding:0px">
				
				<div class="dashContent"> 

						<h3 class="text-heading"> معلوماتك الشخصية :</h3>
						<!-- tale of information of el hajj  -->
							<div class="progress-table">
								<div class="table-head">
									<div class="serial"></div>
									<div class="country"><h4>الإسم</h4></div>
									<div id="name" class="visit">Ali Alissa</div>
									
								</div>
								<div class="table-head">
									<div class="serial"></div>
									<div class="country"><h4>رقم الحاج</h4></div>
									<div id="hajjID" class="visit">0012454687956</div>
									
								</div>
								<div class="table-head">
									<div class="serial"></div>
									<div class="country"><h4>الجنسية</h4></div>
									<div id="nationality" class="visit">جزائرية</div>
									
								</div>
								<div class="table-head">
									<div class="serial"></div>
									<div class="country"><h4>رقم الهاتف </h4></div>
									<div id="phone" class="visit">+213 667 280 998</div>
									
								</div>
								<div class="table-head">
									<div class="serial"></div>
									<div class="country"><h4>الإيميل</h4></div>
									<div id="email" class="visit">badr@gmail.com</div>
									
								</div>
								<br>
								<a href="#" style="float:left" class="genric-btn primary-border circle">خروج</a>
								<a href="#" style="float:left;margin-left:20px"  class="genric-btn primary circle ">تعديل</a>
								

													
							</div>
						<!-- end tale of information of hadi -->
						<br><br>
						<h3 class="text-heading"> معلومات حول هديك :</h3>
						<!-- tale of information of hadi -->
							<div class="progress-table">
								<div class="table-head">
									<div class="serial"></div>
									<div class="country"><h4>النوع</h4></div>
									<div id="cat" class="visit"></div>
									
								</div>
								<div class="table-head">
									<div class="serial"></div>
									<div class="country"><h4>الرقم التسلسلي</h4></div>
									<div id="refID" class="visit"></div>
									
								</div>
								<div class="table-head">
									<div class="serial"></div>
									<div class="country"><h4>الثمن</h4></div>
									<div id="price" class="visit"></div>
									
								</div>
													
							</div>
							
						<!-- end tale of information of hadi -->
						<br><br><br><br>
						<h3 class="text-heading"> تتبع مراحل هديك :</h3>
						<!-- Process of el hady -->
						<div style="padding:0px;margin-right:-50px" class="total-work-process d-flex flex-wrap justify-content-around align-items-center">
							<div class="single-work-process">
								<div  id="stage1" class="work-icon-box">
									<img class="stageIcons" src="{{ asset('img/stages/1.png') }}"></img>
								</div>
								<h4 class="caption">1.  تأكيد الطلب</h4>
								<div>
									jdflkqsjm
								</div>
								
							</div>
							<div class="work-arrow">
								<img src="{{ asset('img/elements/work-arrow.png') }}" alt="">
							</div>
							<div class="single-work-process">
								<div id="stage2" class="work-icon-box">
									<img class="stageIcons" src="{{ asset('img/stages/2 grey.png') }}"></img>
								</div>
								<h4 class="caption">2. فحص الهدي</h4>
								<div>
									jdflkqsjm
								</div>
							</div>
							<div class="work-arrow">
								<img src="{{ asset('img/elements/work-arrow.png') }}" alt="">
							</div>
							<div class="single-work-process">
								<div id="stage3" class="work-icon-box">
									<img class="stageIcons" src="{{ asset('img/stages/3 grey.png') }}"></img>
								</div>
								<h4 class="caption">3. ذبح الهدي (التحلل)</h4>
								<div>
									jdflkqsjm
								</div>
							</div>
							<div class="work-arrow">
								<img src="{{ asset('img/elements/work-arrow.png') }}" alt="">
							</div>
							<div class="single-work-process">
								<div id="stage4" class="work-icon-box">
									<img class="stageIcons" src="{{ asset('img/stages/4 grey.png') }}"></img>
								</div>
								<h4 class="caption">4. التوزيع</h4>
								<div>
									jdflkqsjm
								</div>
							</div>
						</div>
						<!-- end Process of el hady -->
				</div>

					<div  class="w3-bar-block w3-white">
						<div style="text-align : center;padding-top : 65px;height : 180px;"><h3 class="text-heading">سلة هديك</h3></div>
						<a  onClick="hadi1()" style="text-align : center;padding-top : 25px;" class="w3-bar-item w3-button">هديك 1</a>
						<a  onClick="hadi2()" style="text-align : center;padding-top : 25px;" class="w3-bar-item w3-button">هديك 2</a>
						<a  onClick="hadi3()" style="text-align : center;padding-top : 25px;" class="w3-bar-item w3-button">هديك 3</a>
					</div>
					
		
		</div>
	
		

        
		<section>
   			<footer>
					<div class="container">
						<div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
							<div class="logo">
								<a href="index.html"><img src="img/logo.png" alt=""></a>
							</div>
							<div class="copy-right-text">Copyright &copy; 2017  |  All rights reserved to <a href="#">Dinomuz inc.</a> Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></div>
							<div class="footer-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>
					</div>
				</footer>
			</section>
			<!-- End Footer Widget Area -->

		</div>




		<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
	</body>
</html>

<script>

				var cat = document.getElementById('cat');
				var rfid = document.getElementById('refID');
				var price = document.getElementById('price');

				var s1 = document.getElementById('stage1');
				var s2 = document.getElementById('stage2');
				var s3 = document.getElementById('stage3');
				var s4 = document.getElementById('stage4');
				
				function hadi1(){
					cat.innerHTML = 'غنم';
					refID.innerHTML = '456812135458';
					price.innerHTML = '1000';
					
					s1.style.border = '2px green solid';
					s2.style.border = '2px green solid';
					s3.style.border = '2px green solid';
					s4.style.border = '2px red solid';
					
				}

				function hadi2(){
					cat.innerHTML = 'بقر';
					refID.innerHTML = '15884546455485';
					price.innerHTML = '1500';

					s1.style.border = '2px green solid';
					s2.style.border = '2px red solid';
					s3.style.border = '2px red solid';
					s4.style.border = '2px red solid';

					setInterval( function(){ s2.style.border = '2px green solid'; }, 6000);
					
				}

				function hadi3(){
					cat.innerHTML = 'جمل';
					refID.innerHTML = '564548445664';
					price.innerHTML = '2000';

					s1.style.border = '2px green solid';
					s2.style.border = '2px green solid';
					s3.style.border = '2px red solid';
					s4.style.border = '2px red solid';
					
				}
		</script>