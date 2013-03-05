<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>أضافة موضوع جديد</title>

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
        <div id="wrapper">

            <!-- start of section top -->
            <section id="top">
                <div id="top-wrapp">
                    <?php include('header.php') ?>

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
            <section id="">	
                <div class="container totop30">
                    <section id="middle">
                        <div id="content">
                            <div id="left" style="background:#111">       
                                <div class="featured_form">
                                    <?php echo form_open('#'); ?>
                                    <div class="heading center">
                                        <h4><span class="bold">أضافة موضوع جديد للمدونة</span></h4>
                                        <div class="dotted"></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <label for="name">عنوان الموضوع</label>
                                            <?php echo form_input(array('name' => 'title', 'id' => "name", 'onblur' => "if(this.value=='')this.value='اسم الموضوع';", 'onfocus' => "if(this.value=='اسم الموضوع')this.value='';", 'value' => "اسم الموضوع")); ?>

                                        </li>
                                        <li>
                                            <label for="name"> القسم</label>
                                            <div class="both">
                                                <select name="search_category"  id="search_category_id">
                                                    <option value="none" selected="selected" >اختار القسم الرئيسى</option>
                                                    <?php
                                                    $query = "select * from blog_category";
                                                    $results = mysql_query($query);
                                                    while ($rows = mysql_fetch_assoc(@$results)) {
                                                        ?>
                                                        <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                                                    <?php }
                                                    ?>
                                                </select>		
                                            </div>
                                        </li>
                                        
                                    <li>
                                        <label for="name">الموضوع كاملا</label>
                                        <?php echo form_textarea(array('name' => 'discription', 'id' => "name",'rows'=>5,'cols'=>100)); ?>
                                    </li>
                                        <li>
                                            <label for="name">صوره للموضوع</label>
                                            <?php echo form_upload('userfile'); ?>

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

                            <div id="right">

                                <div id="clear"></div>
                                <div id="adv_block" >
                                    <h3 style="margin-top:-10px;">الرعاه</h3>

                                    <div id="adv">
                                        <img src="<?php echo base_url(); ?>images/adv.gif"  />
                                        <img src="<?php echo base_url(); ?>images/adv.gif"  />
                                        <img src="<?php echo base_url(); ?>images/adv.gif"  />
                                        <img src="<?php echo base_url(); ?>images/adv.gif"  />
                                        <img src="<?php echo base_url(); ?>images/adv.gif"  />
                                        <img src="<?php echo base_url(); ?>images/adv.gif"  />
                                    </div>
                                </div>
                                <div id="clear"></div>

                                <div id="serv_block" >
                                    <h3 style="margin-top:-10px;">الخدمات الاكثر ربحا</h3>
                                    <div style="background-color:#5e8d03">
                                        <div id="most">
                                            <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                            <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                            <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                        </div>

                                        <div id="most">
                                            <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                            <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                            <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                        </div>

                                        <div id="most">
                                            <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                            <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                            <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                        </div>

                                        <div id="most">
                                            <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                            <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                            <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                        </div>

                                        <div id="most">
                                            <img src="<?php echo base_url(); ?>upload/img4.jpg"  width="60" height="50"/>
                                            <h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
                                            <p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
                                        </div>

                                    </div>
                                    <div id="clear"></div>

                                </div>
                            </div>	
                    </section>

                </div>		
            </section>
            <!-- end of section middle -->

            <!-- start of section bottom -->
            <?php include('footer.php') ?>
            <!-- end of section bottom -->

        </div>
        <!-- end of wrapper -->

    </body>
</html>