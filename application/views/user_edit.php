<!DOCTYPE HTML>
	<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>شلينات دوت كوم</title>
		
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
	
	    
		<script src="<?php echo base_url();?>js/jquery.easing.1.3.js" type="text/javascript" ></script>

		<!-- FlexSlider -->	
		<script src="<?php echo base_url();?>js/jquery.flexslider.js" type="text/javascript" ></script> 	
		<script src="<?php echo base_url();?>js/function.js" type="text/javascript" ></script> 
        <script src="<?php echo base_url();?>js/custom.js" type="text/javascript" ></script> 
		<!-- Ticker -->	
		<script src="<?php echo base_url();?>js/ticker.js" type="text/javascript" ></script> 	
		<script src="<?php echo base_url();?>js/setting.js"  type="text/javascript" ></script> 

		<!-- prettyPhoto -->	
		<script src="<?php echo base_url();?>js/jquery.prettyPhoto.js" type="text/javascript" ></script> 	
		<script src="<?php echo base_url();?>js/setting-1.js"type="text/javascript"  ></script> 

		<!-- ui totop -->	
		<script src="<?php echo base_url();?>js/smoothscroll.js"  type="text/javascript" ></script>
		<script src="<?php echo base_url();?>js/jquery.ui.totop.js"  type="text/javascript"></script>
		
	<script src="<?php echo base_url();?>js/jquery.ticker.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/site.js" type="text/javascript"></script>
		
		
	</head>
    <style type="text/css">
    select{width:480px;}
	.edit_b{text-align:center}
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
		
			
				
			<div id="content">
						<div id="left">
                      <div id="profile_half1">
                      
                      
                      
      
     <div class="featured_form">
                                    
                                    <div class="heading center">
                                        <h4><span class="bold">يجب ادخال جميع البيانات بشكل صحيح</span></h4>
                                        <div class="dotted"></div>
                                        <p style="color:#0C0;font-size:16px;margin-bottom:20px;text-align:right;font-family:myfont2;"><?php if(isset($updated)){echo $updated ;}?></p>
                     <p style="color:#F00;margin-bottom:20px;text-align:right"><?php if(isset($not_updated)){echo $not_updated ;}?></p>
                     
                     <?php echo form_open('user/edit_user_validation');  ?>
    

                     
                      <ul>
    <li>                                 <table width="100%" border="0">
  <tr>
    <td width="84%"><?php
		 if(isset($username)){
			 
		  echo form_input(array('name'=>'username','id'=>"contactname", 'value'=>$this->input->post('username') ,'tabindex'=>"2",'value'=>$username));
		  } ?>
      </td>
    <td width="16%">  <label for="name">اسم المستخدم</label></td>
  </tr>
 
  <li>
  <tr>
    <td><?php
if(isset($email)){
echo form_input(array('name'=>'email','id'=>"contactname",'value'=>$this->input->post('email'),'value'=>$email)); }?></td>
<td> <label for="email">البريد الالكتروني</label></td>
  </tr>
  </li>
  <li>
  <tr>
    <td> <?php $options = array(
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

if(isset($country)){
echo form_dropdown('country', $options, $country);}
?></td>
    <td> <label for="email">الدوله</label></td>
  </tr>
  </li>
  <li>
  <tr>
    <td>
                                            <?php 
						 if(isset($city)){
						 echo form_input(array('name'=>'city','value'=>$this->input->post('city'),'value'=>$city));
						 }
						 ?></td>
    <td> <label for="email">المدينه</label></td>
  </tr>
  </li>
  <li>
  <tr>
    <td>
                                         <?php
						 if(isset($address)){
						 echo form_input(array('name'=>'address','value'=>$this->input->post('address'),'value'=>$address));} ?></td>
    <td>
    <label for="email">العنوان</label>
</td>
  </tr>
  </li>
  <li>
  <tr>
    <td> <?php
		if(isset($zip_code)){
		echo form_input(array('name'=>'zip_code','value'=>$this->input->post('zip_code'),'value'=>$zip_code)); }?></td>
    <td> <label for="email">الرقم البريدي</label></td>
  </tr>
  </li>
  <li>
  <tr>
    <td> <?php
						 if(isset($phone)){
						  echo form_input(array('name'=>'phone','value'=>$this->input->post('phone'),'value'=>$phone));} ?></td>
    <td>   <label for="email">الهاتف</label></td>
  </tr>
  </li>
</table>
                      
                                      
                                      
                                     
                                            <?php echo form_submit(array('name' => 'button', 'class' => "edit_b"), 'تعديل') ?>

                                          
                                    <?php echo form_close(); ?>
                                    </div>
                                    </div>
                      
                      </div>
                      
                      		
				</div>
                        
                        
                        <div id="right">
                      
    <div class="main_menu" >
  
    <ul class="nav2" style="margin-top:-10px">
    <h3 id="dept">الاقسام</h3>
<li><a href="#"> مدارس </a></li>
<li><a href="#"> مطاعم </a></li>
<div class="sub_links" style="display: none; ">

<p><a href="#">مطاعم تمراز</a></p>

<p><a href="#">مؤمن</a></p> 
</div>
<li><a href="#"> الاطباء </a></li>

<div class="sub_links" style="display: none; ">

<p><a href="#">جراحه</a></p>
<p><a href="#">جراحه</a></p> 

</div>

<li><a style="#"> خالد بدوى </a></li>

<div class="sub_links" style="display: none; ">
<p><a href="#">ابراهيم شديد</a></p> 
</div>                  

                  

    </ul>    
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
<div id="serv_block2" >
<h3 style="margin-top:-10px;">الخدمات التي تم تسليمها</h3>

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