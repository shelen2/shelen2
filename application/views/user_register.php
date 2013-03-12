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
		<!-- template skin -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/skin.css"type="text/css" >	
		
        <link href="<?php echo base_url();?>css/ticker-style.css" rel="stylesheet" type="text/css" />
	
	    
	
	
	<script src="<?php echo base_url();?>js/site.js" type="text/javascript"></script>
		
		
	</head>
    <style type="text/css">
   
    </style>
	<body>
	
	<!-- start of wrapper -->
	<div id="wrapper">
	
		<!-- start of section top -->
		<section id="top">
			<div id="top-wrapp">
					<?php include('header.php')?>
				
					
						
					
                   
			</div>
		</section>
		<!-- end of section top -->

		<!-- start of section middle -->
        <div id="news" > 
        <ul id="js-news" class="js-hidden">
		<li class="news-item"><a href="fa.hrml">محمود شعبان يقدم برنامج هاتولى راجل على قناة الحافظ</a></li>
		<li class="news-item">jQuery News Ticker now has support for right-to-left languages!</li>
		<li class="news-item">jQuery News Ticker now has support for loading content via an RSS feed!</li>
		<li class="news-item">jQuery News Ticker now has an optional fade effect between items!</li>
		<li class="news-item">New updates have been made to jQuery News Ticker! Check below for more details!</li>
		<li class="news-item">jQuery News Ticker is now compatible with jQuery 1.3.2! See below for further details and for latest download.</li>
		<li class="news-item">Further updates to jQuery News Ticker are coming soon!</li>
	</ul>
        </div>
			
			<div class="container totop30">
		
			<div id="content">
			    <div id="left" >       
                <div class="featured_form">
                        
									 <?php echo form_open('site/sign_user_validation');  ?>
                                     
									<div class="heading center">
										<h4><span class="bold">يجب ادخال جميع البيانات بشكل صحيح</span></h4>
										<div class="dotted"></div>
									</div>
                                     <div style="color:#FC3;margin-right:140px;">
									 <?php if(isset($regist)){echo '<p style="margin-left:30px;color:#3C3;">'.$regist.'</p>' ;}else{ 
                                                                             echo validation_errors()  ;
									 if( isset($$country) && empty($country)){echo '<p style="margin-left:500px;">يجب اختيار الدوله</p>'; } } ?></div>
                                     
                                     
                                     <table width="750" border="0">
  <tr>
   
    <td width="554"> <?php echo form_input(array('name'=>'username','id'=>"name", 'value'=>$this->input->post('username') )); ?></td>
     <td width="186"><label for="name">اسم المستخدم</label></td>
  </tr>
  <tr>
   
    <td> <?php echo form_input(array('name'=>'email','id'=>"email",'value'=>$this->input->post('email'))); ?></td>
     <td><label for="email">البريد الالكتروني</label></td>
  </tr>
  <tr>
   
    <td>
    
                                           <?php $options = array(
                  ''  => 'اختار دولتك',
				  'JO'  => 'الأردن',
				  'AE'=>'الإمارات',
                  'BH'=>'البحرين',
				  'SA'=>'السعودية',
				  'DZ'=>'الجزائر',
				  'SD'=> 'السودان',
				  'SO'=>'الصومال',
				  'IQ'=>'العراق',
				  'KW'=>'الكويت',
				  'MA'=>'المغرب',
				  'YE'=>'اليمن',
				  'TN'=>'تونس',
				  'KM'=>'جزر القمر',
				  'DJ'=>'جيبوتي',
				  'OM'=>'سلطنة عمان',
				  'SY'=>'سوريا',
				  'PS'=>'فلسطين',
				  'QA'=>'قطر',
				  'LB'=>'لبنان',
				  'LY'=>'ليبيا',
				  'EG'=>'مصر',
				  'MR'=>'موريتانيا',
				  
		
                );


echo form_dropdown('country', $options, 'country');
?> 
    </td>
 <td><label for="email">الدوله</label></td>
  </tr>
  <tr>
    
    <td> <?php echo form_input(array('name'=>'city','id'=>"email",'value'=>$this->input->post('city'))); ?></td>
    <td><label for="email">المدينه</label></td>
  </tr>
  <tr>
    
    <td> <?php echo form_input(array('name'=>'address','id'=>"email",'value'=>$this->input->post('address'))); ?></td>
    <td><label for="email">العنوان</label></td>
  </tr>
  <tr>
   
    <td> <?php echo form_input(array('name'=>'phone','id'=>"email",'value'=>$this->input->post('phone'))); ?></td>
     <td><label for="email">التليفون</label></td>
  </tr>
  <tr>
   
    <td> <?php echo form_input(array('name'=>'zip_code','id'=>"email",'value'=>$this->input->post('zip_code'))); ?></td>
     <td><label for="email">الرقم البريدي</label></td>
  </tr>
  <tr>
    
    <td> <?php echo form_input(array('name'=>'parent_link','id'=>"email",'value'=>$this->input->post('parent_link'))); ?></td>
    <td><label for="email">رابط العميل</label></td>
  </tr>
  <tr>
  
    <td> <?php echo form_password(array('name'=>'password','id'=>"email")); ?></td>
      <td><label for="email">كلمه السر</label></td>
  </tr>
  <tr>

    <td> <?php echo form_password(array('name'=>'c_password','id'=>"email",)); ?></td>
        <td> <label for="email">تأكيد كلمه السر</label></td>
  </tr>
</table>

                                     
                                     
                                     
							
										<div class="centerdiv">
										<div class="cta-button optin small">
                                         <button type="submit" class="cta1">تسجيل</button>
                                      
											<span class="text"> من فضلك ادخل جميع بياناتك صحيحه لانه في حاله معرفه انها بيانات خاطئه يتم إيقاف العضويه تلقائيا</span>
											
										</div>
										</div>
									  <?php echo form_close();?>
								</div>
                </div>
                        
                        <div id="right">
                                             
    <div id="clear"></div>
<div id="adv_block" >
<h3 style="margin-top:-10px;">الرعاه</h3>

<div id="adv">
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
</div>
</div>
<div id="clear"></div>
                        
                        <div id="serv_block" >
<h3 style="margin-top:-10px;">الخدمات الاكثر ربحا</h3>
<div style="background-color:#5e8d03">
<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

</div>
<div id="clear"></div>

                        </div>
				</div>	
		
				
			</div>		
		
		<!-- end of section middle -->

		<!-- start of section bottom -->
		<?php include('footer.php')?>
		<!-- end of section bottom -->
		
	</div>
	<!-- end of wrapper -->

	</body>
	</html>