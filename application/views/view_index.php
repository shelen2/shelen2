<!DOCTYPE HTML>
	<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>تسويق الكتروني</title>
		
		<meta name="keywords" content="content">
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0">		

		
		<link rel="stylesheet" href="<?php echo base_url();?>css/stylesheet.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url();?>css/angelina.css" type="text/css" >		
        <link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css" type="text/css" >		
		<link rel="stylesheet" href="<?php echo base_url();?>css/prettyPhoto.css" type="text/css" >	
		<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url();?>css/style_login.css" type="text/css" media="screen">
		<!-- template skin -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/skin.css"type="text/css" >	
		
	
	     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script src="<?php echo base_url();?>js/jquery.easing.1.3.js" type="text/javascript" ></script>
        <script src="<?php echo base_url();?>js/login.js" type="text/javascript" ></script>

		<!-- FlexSlider -->	
		<script src="<?php echo base_url();?>js/jquery.flexslider.js" type="text/javascript" ></script> 	
		<script src="<?php echo base_url();?>js/function.js" type="text/javascript" ></script> 

		<!-- Ticker -->	
		<script src="<?php echo base_url();?>js/ticker.js" type="text/javascript" ></script> 	
		<script src="<?php echo base_url();?>js/setting.js"  type="text/javascript" ></script> 

		<!-- prettyPhoto -->	
		<script src="<?php echo base_url();?>js/jquery.prettyPhoto.js" type="text/javascript" ></script> 	
		<script src="<?php echo base_url();?>js/setting-1.js"type="text/javascript"  ></script> 

		<!-- ui totop -->	
		<script src="<?php echo base_url();?>js/smoothscroll.js"  type="text/javascript" ></script>
		<script src="<?php echo base_url();?>js/jquery.ui.totop.js"  type="text/javascript"></script>
		<script src="<?php echo base_url();?>js/setting-2.js"  type="text/javascript"></script>
		
		<script src="<?php echo base_url();?>js/functions.js"type="text/javascript"  ></script>
        <script type="text/javascript">
		var base_url=" <?php echo base_url();?>";
		</script>
        <script src="<?php echo base_url();?>js/ajax.js"type="text/javascript"  ></script>
         
		
	</head>
	<body>
	
	<!-- start of wrapper -->
	<div id="wrapper">
	
		<!-- start of section top -->
		<section id="top">
			<div id="top-wrapp">
					<header>
						<div class="container" >
							<div  class="clearfix">
								<div class="grid_4" style="float:left" >
									<div class="logo">
										<a href="index.html" ><img src="<?php echo base_url();?>images/logo.png"  alt="" /></a>
									</div>	
                                    <!-- Login Starts Here -->
                                 <div style="color:#FC0;margin-top:80px;position:absolute;margin-left:70px;">   <?php echo validation_errors()  ;?></div>
            <div id="loginContainer">
                <a href="#" id="loginButton"><span>الدخول</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">
                <div id="loginForm">                
                    <?php echo form_open('site/login_validation'); ?>
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">اسم المستخدم</label>
                               
                                 <?php echo form_input(array('name'=>'username','id'=>"name", 'value'=>$this->input->post('username') )); ?>
                            </fieldset>
                            <fieldset>
                                <label for="password">كلمه السر</label>
                                
                                 <?php echo form_password(array('name'=>'password','id'=>"password")); ?>
                            </fieldset>
                               <button type="submit" class="cta1" style="margin-top:-8px;padding:5px 10px 5px 10px;margin-left:-1px;">دخول</button>

                              </br></br>
                            <div id="comment_valid" style="text-align:center;color:#F90"> </div>                           
                        </fieldset>
                       
                    </form>
                    </div>
                </div>
           
            <!-- Login Ends Here -->
       
           
      
    </div>
								</div>
								
								<div class="grid_8" style="float:right">
									<!-- start navigation -->						
									<nav id="navigation">
										<ul class="menu">
                            
                                     <li class="home" ><a href="#"  >عن الموقع</a></li>
                                    <li class="home"><a href="#"  >اتصل بنا</a></li> 
                                    <li class="home"><a href="#"  >المدونه</a></li>
                                   <li class="home"><a href="<?php echo base_url();?>site/market">السوق</a></li>
                                    <li class="home"><a href="<?php echo base_url();?>site/user_register"  >التسجيل</a></li>
                                    <li class="home"><a href="<?php echo base_url();?>site/"  >الرئيسيه</a></li>
										</ul> <!-- end .menu -->
									</nav>
									<!-- End navigation -->	

								</div>
							</div>
						</div>
					</header>
				
				
					<div id="featured" class="clearfix">
						<div class="container">
							<div id="intro" class="grid_12" style="float:right">
								<h1> انت تحتاج الي <span>تحقيق الربح ؟؟</span>  وبدون مجهود ؟؟</h1>
								<h3>
								"يوفر موقعنا لك ذالك وانت في بيتك"
								</h3>
							</div>
							<div class="grid_7" style="float:left">
								<!-- ********* flexslider ******** -->
								<div class="flexslider">
									<ul class="slides">
										<li>
											<img src="<?php echo base_url();?>images/img-1.png"  alt="" class="scale-grid" />
										</li>
										<li>
											<img src="<?php echo base_url();?>images/img-2.png" alt="" class="scale-grid" />
										</li>
										<li>
											<img src="<?php echo base_url();?>images/img-3.png"  alt="" class="scale-grid" />
										</li>
									</ul>
							  </div>	
								<!-- ********* Endflexslider ******** -->
							</div>
							
							<div class="grid_5 featured_text">
								<p>
				الاعمال الصغيرة تكسبك المال من البيت, تكسبك دخل إضافي وتسمح لك بكسب المزيد من المال على الإنترنيت. إذا ما كنت تعيش في الجزائر, لبنان مصر, السعودية, الإمارات العربية المتحدة, قطر, عمان, البحرين, الكويت, المغرب, تونس, ليبيا, السودان, الأردن, سوريا, العراق أو أي مكان آخر يمكنك العمل في المنزل وكسب اموال اضافية مع فرص الأعمال الصغيرة.
</p>
								<p>
								ضاعف ارباحك من خلال الانترنت واستفد من شهره موقعك وعدد زياراته واربح المال مع زوار ربح لن تحتاج بعد اليوم للبحث عن معلن لموقعك
                                يدخل من بوابه كبيره ويمشي في الطرقه حتى وصل الى الغرفه السريه.. دفع الباب فإذا كل من في الغرفه ينظرون اليه بعيون مليئه بالترقب..
هو ده يا باشا الخبير اللي بعتنا نجيبه
هو ده اللي هيقفل اليوتيوب؟
أيوه يا باشا..
- يأخذ الشاب الخبير مكانه أمام شاشه حاسوب كبيره ويبدأ في الضغط على الأزرار ثم فجأه يصرخ..

								</p>
								<div class="cta-button big" style="float:left"><span class="text" style="float:left">$10</span><a href="<?php echo base_url();?>site/market" class="cta1">تصفح خدماتنا الان</a></div>
                                
                               
							</div>	
                             
                           
						</div>
					</div>
                   
			</div>
		</section>
		<!-- end of section top -->

		<!-- start of section middle -->
		<section id="middle">	
			<div class="container totop30">
				<div class="row clearfix center">
					<div class="grid_4 rotate">
						<img src="<?php echo base_url();?>images/circle-1.png"  alt="" class="rotate" />
						<h3 class="spacer15">شجره الاعضاء <span class="bold"></span></h3>
						<div class="clear"></div>
						<img src="<?php echo base_url();?>images/tree.png"   alt="" class="dummy scale-grid" />
                        <p>
                        إمشي علي إللي هيوديك تفكيرك ليه و المهم خليك جرئ
                        حاول توصل فكرك للناس يمكن تقنعهم أو تلاقي ناس عندهم نفس الفكر و ساعتها هتبقوا أقوي
						</p>
					</div>
					<div class="grid_4 rotate">
						<img src="<?php echo base_url();?>images/circle-2.png" alt="" class="rotate" />
						<h3 class="spacer15">الخدمات <span class="bold"></span></h3>
						<div class="clear"></div>
						<img src="<?php echo base_url();?>images/image-2.png"  alt="" class="dummy scale-grid" />
						<p>
						إمشي علي إللي هيوديك تفكيرك ليه و المهم خليك جرئ
                        حاول توصل فكرك للناس يمكن تقنعهم أو تلاقي ناس عندهم نفس الفكر و ساعتها هتبقوا أقوي
						</p>				
					</div>
					<div class="grid_4 rotate">
						<img src="<?php echo base_url();?>images/circle-3.png" alt="" class="rotate scale-grid" />
						<h3 class="spacer15">حالات الاعضاء<span class="bold"></span></h3>
						<div class="clear"></div>
						<img src="<?php echo base_url();?>images/image-3.png"  alt="" class="dummy" />
						<p>
						إمشي علي إللي هيوديك تفكيرك ليه و المهم خليك جرئ
                        حاول توصل فكرك للناس يمكن تقنعهم أو تلاقي ناس عندهم نفس الفكر و ساعتها هتبقوا أقوي
						</p>				
					</div>

				</div>
			

				<div class="row clearfix">
					<div class="grid_12" >
						<div class="title margintop20" style="float:right;border:none">
							<h3 >ما يقدمه الموقع <span class="bold">لك</span> <span class="icon a">icon</span></h3>
						</div>
					</div>
					<div class="grid_8">
						<div class="grid_4 alpha">
                        <div class="row rotate">
								<img src="<?php echo base_url();?>images/3.png" style="float:right"  alt="" class="left" />
								<h5>الهدايا</h5>
								<p>اللهم لا تعلق قلبى بما ليس لى واجعل لى فيما أحببت نصيباواللهم دبرلى فأنى لا أحســـــن التدبير
								</p>
								<a href="#" class="more">معرفه المزيد</a>
							</div>
							
							<div class="rotate">
								<img src="<?php echo base_url();?>images/2.png" style="float:right"  alt="" class="left" />
								<h5>العضويه</h5>
								<p>اللهم لا تعلق قلبى بما ليس لى واجعل لى فيما أحببت نصيباواللهم دبرلى فأنى لا أحســـــن التدبير
								</p>
								<a href="#" class="more">معرفه المزيد</a>
							</div>
						</div>
						<div class="grid_4 omega">
							<div class="row rotate">
								<img src="<?php echo base_url();?>images/1.png" style="float:right"  alt="" class="left" />
								<h5 style="text-align:right">المدونات</h5>
								<p style="text-align:right">اللهم لا تعلق قلبى بما ليس لى واجعل لى فيما أحببت نصيباواللهم دبرلى فأنى لا أحســـــن التدبير
								</p>
								<a href="#" class="more">معرفه المزيد</a>
							</div>
							<div class="rotate">
								<img src="<?php echo base_url();?>images/4.png"style="float:right"  alt="" class="left" />
								<h5>الخدمات</h5>
								<p>اللهم لا تعلق قلبى بما ليس لى واجعل لى فيما أحببت نصيباواللهم دبرلى فأنى لا أحســـــن التدبير
								</p>
								<a href="#" class="more">معرفه المزيد</a>
							</div>
						</div>
					
					</div>

					<div class="grid_4" >
						<div class="video">
						<a href="http://www.youtube.com/watch?v=dm-8aFK_-Y8"  data-pretty="prettyPhoto[gallery1]" title="Video tour"><img src="<?php echo base_url();?>images/video.jpg" alt="" class="scale-grid" /></a>
						</div>
					</div>
                    
                    
                    
				</div>		




			
					


				<div class="row clearfix">
					<div class="grid_12">
						<div class="title">
							<h3>تصفح بعض الخدمات <span class="bold">التي يقدمها الموقع</span> <span class="icon a">icon</span></h3>
						</div>	
					</div>
					<div class="grid_3">
						<div class="box">
							<div class="box-image">
								<a href="<?php echo base_url();?>upload/img1.jpg"  data-pretty="prettyPhoto" title="تفاصيل الخدمه" class="thumb"><img src="<?php echo base_url();?>upload/img1.jpg" alt="" class="scale-grid"/></a>
							</div>
							<div class="box-desc center">
							<h5><a href="#"> تصميم موقع خلال خمس ايام</a></h5>
								<p>
								زى مقولتلك بقى متعملش اى بش تانى خالص لحد منا اخلص واقولك
								</p>
                                 <a href="#" id="ask">اطلب الخدمه</a>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="box">
							<div class="box-image">
								<a href="<?php echo base_url();?>upload/img2.jpg"  data-pretty="prettyPhoto" title="تفاصيل الخدمه" class="thumb"><img src="<?php echo base_url();?>upload/img2.jpg" alt="" class="scale-grid"/></a>
							</div>
							<div class="box-desc center">
							<h5><a href="#">تصميم موقع خلال خمس ايام</a></h5>
								<p>
								زى مقولتلك بقى متعملش اى بش تانى خالص لحد منا اخلص واقولك
								</p>
                                 <a href="#" id="ask">اطلب الخدمه</a>
							</div>
						</div>			
					</div>
					<div class="grid_3">
						<div class="box" >
							<div class="box-image">
								<a href="<?php echo base_url();?>upload/img3.jpg" data-pretty="prettyPhoto[video]" title="تفاصيل الخدمه" class="thumb"><img src="<?php echo base_url();?>upload/img3.jpg"  alt="" class="scale-grid"/></a>
							</div>
							<div class="box-desc center">
							<h5><a href="#">تصميم موقع خلال خمس ايام</a></h5>
								<p>
								زى مقولتلك بقى متعملش اى بش تانى خالص لحد منا اخلص واقولك
								</p>
                                 <a href="#" id="ask">اطلب الخدمه</a>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="box">
							<div class="box-image">
								<a href="<?php echo base_url();?>upload/img4.jpg"  data-pretty="prettyPhoto" title="تفاصيل الخدمه" class="thumb"><img src="<?php echo base_url();?>upload/img4.jpg"  alt="" class="scale-grid"/></a>
							</div>
							<div class="box-desc center">
							<h5><a href="#">تصميم موقع خلال خمس ايام</a></h5>
								<p>
								زى مقولتلك بقى متعملش اى بش تانى خالص لحد منا اخلص واقولك
								</p>
                              <a href="#" id="ask">اطلب الخدمه</a>
							</div>
						</div>			
					</div>					
				</div>		
				
				<div class="row clearfix">
					<div class="grid_12">
						<div class="framed center">

							
						</div>	
					</div>
				</div>

				
			</div>		
		</section>
		<!-- end of section middle -->

		<!-- start of section bottom -->
		<?php include('footer.php')?>
		<!-- end of section bottom -->
		
	</div>
	<!-- end of wrapper -->

	</body>
	</html>