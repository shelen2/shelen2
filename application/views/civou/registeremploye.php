<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>تسجيل عامل</title>

        <meta name="keywords" content="content">

        <meta name="viewport" content="width=device-width; initial-scale=1.0">		


        <link rel="stylesheet" href="<?php echo base_url(); ?>css/stylesheet.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/angelina.css" type="text/css" >		
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/flexslider.css" type="text/css" >		
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/prettyPhoto.css" type="text/css" >	
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen">
        <!-- template skin -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/skin.css"type="text/css" >	

        <link href="<?php echo base_url(); ?>css/ticker-style.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js" type="text/javascript" ></script>

        <!-- FlexSlider -->	
        <script src="<?php echo base_url(); ?>js/jquery.flexslider.js" type="text/javascript" ></script> 	
        <script src="<?php echo base_url(); ?>js/function.js" type="text/javascript" ></script> 

        <!-- Ticker -->	
        <script src="<?php echo base_url(); ?>js/ticker.js" type="text/javascript" ></script> 	
        <script src="<?php echo base_url(); ?>js/setting.js"  type="text/javascript" ></script> 

        <!-- prettyPhoto -->	
        <script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js" type="text/javascript" ></script> 	
        <script src="<?php echo base_url(); ?>js/setting-1.js"type="text/javascript"  ></script> 

        <!-- ui totop -->	
        <script src="<?php echo base_url(); ?>js/smoothscroll.js"  type="text/javascript" ></script>
        <script src="<?php echo base_url(); ?>js/jquery.ui.totop.js"  type="text/javascript"></script>

        <script src="<?php echo base_url(); ?>js/jquery.ticker.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/site.js" type="text/javascript"></script>


    </head>
    <body>

        <!-- start of wrapper -->

            <section id="">	
                <div class="container totop30">
                    <section id="middle">
                        <div id="content">
                            <div id="left" style="background:#111">       
                                <div class="featured_form">
                                    <?php echo form_open('#'); ?>
                                    <div class="heading center">
                                        <h4><span class="bold">يجب ادخال جميع البيانات بشكل صحيح</span></h4>
                                        <div class="dotted"></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <label for="name">اسم المستخدم</label>
                                            <?php echo form_input(array('name' => 'username', 'id' => "name", 'onblur' => "if(this.value=='')this.value='اسم المستخدم';", 'onfocus' => "if(this.value=='اسم المستخدم')this.value='';", 'value' => "اسم المستخدم")); ?>

                                        </li>

                                        <li>
                                            <label for="email">البريد الالكتروني</label>

                                            <?php echo form_input(array('name' => 'email', 'id' => "email", 'onblur' => "if(this.value=='')this.value='البريد الالكتروني';", 'onfocus' => "if(this.value=='البريد الالكتروني')this.value='';", 'value' => "البريد الالكتروني")); ?>
                                        </li>
                                        <li>
                                            <label for="email">الدوله</label>
 </li> 
                                        <li>

                                            <label for="email">المدينه</label>

                                            <?php echo form_input(array('name' => 'city', 'id' => "email", 'onblur' => "if(this.value=='')this.value='المدينه';", 'onfocus' => "if(this.value=='المدينه')this.value='';", 'value' => "المدينه")); ?>
                                        </li> 
                                        <li>

                                            <label for="email">الرقم البريدي</label>

                                            <?php echo form_input(array('name' => 'zip_code', 'id' => "email", 'onblur' => "if(this.value=='')this.value='الرقم البريدي';", 'onfocus' => "if(this.value=='الرقم البريدي')this.value='';", 'value' => "الرقم البريدي")); ?>
                                        </li>

                                        <li>
                                            <label for="email">كلمه السر</label>

                                            <?php echo form_password(array('name' => 'password', 'id' => "email", 'onblur' => "if(this.value=='')this.value='البريد الالكتروني';", 'onfocus' => "if(this.value=='البريد الالكتروني')this.value='';", 'value' => "البريد الالكتروني")); ?>
                                        </li>
                                        <li>
                                            <label for="email">تأكيد كلمه السر</label>
                                            <?php echo form_password(array('name' => 'cpassword', 'id' => "email", 'onblur' => "if(this.value=='')this.value='البريد الالكتروني';", 'onfocus' => "if(this.value=='البريد الالكتروني')this.value='';", 'value' => "البريد الالكتروني")); ?>
                                        </li>
                                    </ul>
                                    <div class="centerdiv">
                                        <div class="cta-button optin small">
                                            <?php echo form_button(array('name' => 'button', 'class' => "cta1"), 'تسجيل') ?>

                                            <span class="text"> من فضلك ادخل جميع بياناتك صحيحه لانه في حاله معرفه انها بيانات خاطئه يتم إيقاف العضويه تلقائيا</span>

                                        </div>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>


                                </div>
                            </div>	
                    </section>

                </div>		
            </section>
            <!-- end of section middle -->
        </div>
        <!-- end of wrapper -->

    </body>
</html>