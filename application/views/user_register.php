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
	
	     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script src="<?php echo base_url();?>js/jquery.easing.1.3.js" type="text/javascript" ></script>

		
		<!-- prettyPhoto -->	
		<script src="<?php echo base_url();?>js/jquery.prettyPhoto.js" type="text/javascript" ></script> 	
		<script src="<?php echo base_url();?>js/setting-1.js"type="text/javascript"  ></script> 

		
		
	
	<script src="<?php echo base_url();?>js/site.js" type="text/javascript"></script>
		
		
	</head>
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
   
    <td> <?php echo form_input(array('name'=>'username','id'=>"name", 'value'=>$this->input->post('username') )); ?></td>
     <td><label for="name">اسم المستخدم</label></td>
  </tr>
  <tr>
   
    <td> <?php echo form_input(array('name'=>'email','id'=>"email",'value'=>$this->input->post('email'))); ?></td>
     <td><label for="email">البريد الالكتروني</label></td>
  </tr>
  <tr>
   
    <td>
     <select name="CmbCountry" id="CmbCountry" class="home" style="width:570px;text-align:right" >
    <option value="none" selected="selected" >اختار دولتك</option>
	<option value="أفغانستان">أفغانستان</option>
	<option value="البانيا">البانيا</option>
	<option value="الجزائر">الجزائر</option>
	<option value="ساموا الأمريكية">ساموا الأمريكية</option>
	<option value="اندورا">اندورا</option>
	<option value="انغولا">انغولا</option>
	<option value="انجولا">انجولا</option>
	<option value="انتركتيكا">انتركتيكا</option>
	<option value="انتيغوا وبربودا">انتيغوا وبربودا</option>
	<option value="الأرجنتين">الأرجنتين</option>
	<option value="ارمينيا">ارمينيا</option>
	<option value="اروبا">اروبا</option>
	<option value="جزيرة أسينشون">جزيرة أسينشون</option>
	<option value="استراليا">استراليا</option>
	<option value="النمسا">النمسا</option>
	<option value="اذربيجان">اذربيجان</option>
	<option value="BS">البهامز</option>
	<option value="البحرين">البحرين</option>
	<option value="بنجلادش">بنجلادش</option>
	<option value="بربادوس">بربادوس</option>
	<option value="بيلا روس">بيلا روس</option>
	<option value="بلجيكا">بلجيكا</option>
	<option value="بليز">بليز</option>
	<option value="بنن">بنن</option>
	<option value="برمودا">برمودا</option>
	<option value="بوتان">بوتان</option>
	<option value="بوليفيا">بوليفيا</option>
	<option value="البوسنة والهرسك">البوسنة والهرسك</option>
	<option value="بوتسوانا">بوتسوانا</option>
	<option value="جزيرة بوفيت">جزيرة بوفيت</option>
	<option value="البرازيل">البرازيل</option>
	<option value="بروناى دار السلام">بروناى دار السلام</option>
	<option value="بلغاريا">بلغاريا</option>
	<option value="بوركينا فاسو">بوركينا فاسو</option>
	<option value="بوروندي">بوروندي</option>
	<option value="كامبوديا">كامبوديا</option>
	<option value="كاميرون">كاميرون</option>
	<option value="كندا">كندا</option>
	<option value="كيب فردي">كيب فردي</option>
	<option value="جزر كايمان">جزر كايمان</option>
	<option value="جمهورية أفريقيا الوسطي">جمهورية أفريقيا الوسطي</option>
	<option value="تشاد">تشاد</option>
	<option value="تشيلي">تشيلي</option>
	<option value="الصين">الصين</option>
	<option value="زيرة كريسماس">جزيرة كريسما</option>
	<option value="جزر كوكس ( كيلنغ)">جزر كوكس ( كيلنغ)</option>
	<option value="كولومبيا">كولومبيا</option>
	<option value="جزر القمر">جزر القمر</option>
	<option value="الكونغو (جمهورية الكونغو الديموقراطية)">الكونغو (جمهورية الكونغو الديموقراطية)</option>
	<option value="جرز كوك">جرز كوك</option>
	<option value="كوستا ريكا">كوستا ريكا</option>
	<option value="كوت ديفوار">كوت ديفوار</option>
	<option value="كرواتيا">كرواتيا</option>
	<option value="كوبا">كوبا</option>
	<option value="قبرص">قبرص</option>
	<option value="الجمهورية التشيكية">الجمهورية التشيكية</option>
	<option value="الدنمارك">الدنمارك</option>
	<option value="جيبوتى">جيبوتى</option>
	<option value="دومينيكا">دومينيكا</option>
	<option value="الجمهورية الدومينكية">الجمهورية الدومينكية</option>
	<option value="تيمور الشرقية">تيمور الشرقية</option>
	<option value="الاكوادور">الاكوادور</option>
	
	<option value="السلفادور">السلفادور</option>
	<option value="غينيا الاستوائية">غينيا الاستوائية</option>
	<option value="اريتريا">اريتريا</option>
	<option value="استونيا">استونيا</option>
	<option value="اثيوبيا">اثيوبيا</option>
	<option value="جرز فوكلاند (مالفيناس)">جرز فوكلاند (مالفيناس)</option>
	<option value="جزر فارو">جزر فارو</option>
	<option value="فيجي">فيجي</option>
	<option value="فنلندا">فنلندا</option>
	<option value="فرنسا">فرنسا</option>
	<option value="غويانا الفرنسية">غويانا الفرنسية</option>
	<option value="بولينيزيا الفرنسية">بولينيزيا الفرنسية</option>
	<option value="الفرنسية الجنوبية وانتركاتيكا">الفرنسية الجنوبية وانتركاتيكا</option>
	<option value="الجابون">الجابون</option>
	<option value="غامبيا">غامبيا</option>
	<option value="جورجيا">جورجيا</option>
	<option value="المانيا">المانيا</option>
	<option value="غانا">غانا</option>
	<option value="جبل طارق">جبل طارق</option>
	<option value="اليونان">اليونان</option>
	<option value="الجزيرة الخضراء">الجزيرة الخضراء</option>
	<option value="غرينادا">غرينادا</option>
	<option value="غواديلوب">غواديلوب</option>
	<option value="جوام">جوام</option>
	<option value="جواتيمالا">جواتيمالا</option>
	<option value="جرنساي">جرنساي</option>
	<option value="غينيا بوساي">غينيا بوساي</option>
	<option value="غينيا">غينيا</option>
	<option value="غيانا">غيانا</option>
    <option  value="مصر">مصر</option>
	<option value="هايتي">هايتي</option>
	<option value="هندوراس">هندوراس</option>
	<option value="هونج كونج">هونج كونج</option>
	<option value="هنغاريا">هنغاريا</option>
	<option value="ايسلندا">ايسلندا</option>
	<option value="الهند">الهند</option>
	<option value="اندونيسيا">اندونيسيا</option>
	<option value="ايران">ايران</option>
	<option value="العراق">العراق</option>
	<option value="ايرلاندا">ايرلاندا</option>
	<option value="اسرائيل">اسرائيل</option>
	<option value="ايطاليا">ايطاليا</option>
	<option value="جامايكا">جامايكا</option>
	<option value="اليابان">اليابان</option>
	<option value="جيرزي">جيرزي</option>
	<option value="الاردن">الاردن</option>
	<option value="كازاخستان">كازاخستان</option>
	<option value="كينيا">كينيا</option>
	<option value="كيريباتي">كيريباتي</option>
	<option value="كوريا">كوريا</option>
	<option value="الكويت">الكويت</option>
	<option value="قيرغيزستان">قيرغيزستان</option>
	<option value="لواس">لواس</option>
	<option value="لاتفيا">لاتفيا</option>
	<option value="لبنان">لبنان</option>
	<option value="ليسوتو">ليسوتو</option>
	<option value="ليبيريا">ليبيريا</option>
	<option value="الجماهيرية الليبية">الجماهيرية الليبية</option>
	<option value="ليختننشتاين">ليختننشتاين</option>
	<option value="ليتوانيا">ليتوانيا</option>
	<option value="لوكسمبورج">لوكسمبورج</option>
	<option value="منطقة ماكاو الاداريه الخاصة">منطقة ماكاو الاداريه الخاصة</option>
	<option value="مقدونية">مقدونية</option>
	<option value="مدغشقر">مدغشقر</option>
	<option value="مالاوي">مالاوي</option>
	<option value="ماليزيا">ماليزيا</option>
	<option value="جزر المالديف">جزر المالديف</option>
	<option value="مالي">مالي</option>
	<option value="مالطا">مالطا</option>
	<option value="جزر المارشال">جزر المارشال</option>
	<option value="مارتينيك">مارتينيك</option>
	<option value="موريتانيا">موريتانيا</option>
	<option value="موريشيوس">موريشيوس</option>
	<option value="مايوت">مايوت</option>
	<option value="المكسيك">المكسيك</option>
	<option value="ماكرونيزيا">ماكرونيزيا</option>
	<option value="مولدوفا">مولدوفا</option>
	<option value="موناكو">موناكو</option>
	<option value="منغوليا">منغوليا</option>
	<option value="منتسيرات">منتسيرات</option>
	<option value="المغرب">المغرب</option>
	<option value="موزامبيق">موزامبيق</option>
	<option value="مايانمار">مايانمار</option>
	<option value="ناميبيا">ناميبيا</option>
	<option value="ناورو">ناورو</option>
	<option value="نيبال">نيبال</option>
	<option value="هولندا">هولندا</option>
	<option value="جزر الانتيل الهولندية">جزر الانتيل الهولندية</option>
	<option value="كالدونيا الجديدة">كالدونيا الجديدة</option>
	<option value="نيوزيلاندا">نيوزيلاندا</option>
	<option value="نيكاراجوا">نيكاراجوا</option>
	<option value="النيجر">النيجر</option>
	<option value="نيجيريا">نيجيريا</option>
	<option value="نيو">نيو</option>
	<option value="جزيرة نورفولك">جزيرة نورفولك</option>
	<option value="كوريا الشمالية">كوريا الشمالية</option>
	<option value="جزر ماريانا الشمالية">جزر ماريانا الشمالية</option>
	<option value="النرويج">النرويج</option>
	<option value="غير محددي الجنسي">غير محددي الجنسي</option>
	<option value="عمان">عمان</option>
	<option value="باكستان">باكستان</option>
	<option value="بالاو">بالاو</option>
	<option value="فلسطين">فلسطين</option>
	<option value="بنما">بنما</option>
	<option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
	<option value="باراغواي">باراغواي</option>
	<option value="بيرو">بيرو</option>
	<option value="الفليبين">الفليبين</option>
	<option value="جزر بيتكيرن">جزر بيتكيرن</option>
	<option value="بولندا">بولندا</option>
	<option value="برتغال">برتغال</option>
	<option value="بورتو ريكو">بورتو ريكو</option>
	<option value="قطر">قطر</option>
	<option value="ريونيون">ريونيون</option>
	<option value="رومانيا">رومانيا</option>
	<option value="روسيا الاتحادية">روسيا الاتحادية</option>
	<option value="رواندا">رواندا</option>
	<option value="سانت لوسيا">سانت لوسيا</option>
	<option value="سانت فنسينت">سانت فنسينت</option>
	<option value="ساموا">ساموا</option>
	<option value="سان مارينو">سان مارينو</option>
	<option value="ساو تومي وبرينسيبي">ساو تومي وبرينسيبي</option>
	<option value="المملكة العربية السعودية">المملكة العربية السعودية</option>
	<option value="السنغال">السنغال</option>
	<option value="صربيا والجبل الاسود">صربيا والجبل الاسود</option>
	<option value="سيشيل">سيشيل</option>
	<option value="سيراليون">سيراليون</option>
	<option value="سنغافورة">سنغافورة</option>
	<option value="سلوفاكيا">سلوفاكيا</option>
	<option value="سلوفينيا">سلوفينيا</option>
	<option value="جزر سليمان">جزر سليمان</option>
	<option value="الصومال">الصومال</option>
	<option value="جنوب أفريقيا">جنوب أفريقيا</option>
	<option value="جورجيا الجنوبية وجزر ساندويتش الجنوبية">جورجيا الجنوبية وجزر ساندويتش الجنوبية</option>
	<option value="اسبانيا">اسبانيا</option>
	<option value="سريلانكا">سريلانكا</option>
	<option value="سانت هيلانة">سانت هيلانة</option>
	<option value="سانت بيير وميكلون">سانت بيير وميكلون</option>
	<option value="السودان">السودان</option>
	<option value="سورينام">سورينام</option>
	<option value="سوازيلاند">سوازيلاند</option>
	<option value="سويسرا">سويسرا</option>
	<option value="سوريا">سوريا</option>
	<option value="تايوان">تايوان</option>
	<option value="طاجيكستان">طاجيكستان</option>
	<option value="تانزانيا">تانزانيا</option>
	<option value="تايلاند">تايلاند</option>
	<option value="توغو">توغو</option>
	<option value="توكيلاو">توكيلاو</option>
	<option value="تونجا">تونجا</option>
	<option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
	<option value="تونس">تونس</option>
	<option value="تركيا">تركيا</option>
	<option value="توركمنستان">توركمنستان</option>
	<option value="جزر تركس و كايكوس">جزر تركس و كايكوس</option>
	<option value="توفالو">توفالو</option>
	<option value="اوغندا">اوغندا</option>
	<option value="اوكرانيا">اوكرانيا</option>
	<option value="الامارات العربية المتحدة">الامارات العربية المتحدة</option>
	<option value="المملكة المتحدة">المملكة المتحدة</option>
	<option value="الولايات المتحدة">الولايات المتحدة</option>
	<option value="اوروغواي">اوروغواي</option>
	<option value="اوزبكستان">اوزبكستان</option>
	<option value="فانواتو">فانواتو</option>
	<option value="الفاتيكان">الفاتيكان</option>
	<option value="فنزويلا">فنزويلا</option>
	<option value="فيتنام">فيتنام</option>
	<option value="جزر فيرجن البريطانية">جزر فيرجن البريطانية</option>
	<option value="واليس وفوتونا">واليس وفوتونا</option>
	<option value="الصحراء الغربية">الصحراء الغربية</option>
	<option value="اليمن">اليمن</option>
	<option value="يوغوسلافيا">يوغوسلافيا</option>
	<option value="زائير">زائير</option>
	<option value="زامبيا">زامبيا</option>
	<option value="زيمبابوي">زيمبابوي</option>

</select></td>
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