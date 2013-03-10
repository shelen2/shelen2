<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
    <head profile="http://gmpg.org/xfn/11">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
        <meta name="generator" content="WordPress 3.4.2" /> <!-- leave this for stats please -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

        <title>
            شيلينات دوت كوم  </title>





        <!--[if IE 8]>
        <link href="ie8-media.css" tppabs="http://demo.themeskingdom.com/dreamy/wp-content/themes/dreamy/style/ie8-media.css" media="screen and (min-width: 250px;)" rel="stylesheet"/>
        <![endif]-->

        <?php include 'tempelet/links.php'; ?>


    </head>

    <body class="page page-id-9 page-template page-template-_contact-php">


        <div id="container">



            <!-- HEADER -->
            <div class="header left">
                <div class="head-parallax">
                    <div id="parallax" class="parallax-viewport">
                        <ul>
                            <li class="parallax-layer">
                                <img src="<?php echo base_url(); ?>images/rays.png" alt="background rays" />
                            </li>
                        </ul>
                    </div>
                    <div class="bg-header-shadow left">
                        <div class="wrapper zindex">

                            <!--LOGO-->
                            <div class="logo left">
                                <a href="<?php echo base_url(); ?>site/" >
                                    <img src="<?php echo base_url(); ?>images/logo.png"  alt="logo" />
                                </a>
                            </div><!--/logo-->

                            <!--MENU-->
                            <div class="bg-menu right">
                                <div class="bg-menu-left left"></div>

                                <?php include('header.php'); ?>

                                <div class="bg-menu-right left"></div>
                            </div><!--/bg-menu-->


                        </div><!--/wrapper-->
                        <div class="bg-blue-top left"></div><!--/bg-blue-top-->

                    </div><!--/bg-header-shadow-->

                </div>
            </div><!--/header-->

            <!-- BG BLUE -->
            <div class="blue-page left">
                <div class="bg-blue-center-title left">
                    <div class="wrapper">
                        <div class="title-pages left" style="font-family:myfont;text-transform:capitalize"><?php
                                if (isset($username)) {
                                    echo $username;
                                }
                                ?></div><!--/wrapper-->
                        <div class="breadcrumbs-content"><ul>
                                <li><a href="<?php echo base_url(); ?>site/logout">تسجيل الخروج</a></li><li class="current"><?php
                            if (isset($username)) {
                                echo $username;
                            }
                                ?></li> <li><a href="<?php echo base_url(); ?>site/">الرئيسيه</a></li>  <li style="background: none; padding: 0;">: انت في</li>

                            </ul>
                        </div>            </div><!--/wrapper-->
                </div><!--/bg-blue-center-title-->
                <div class="bg-blue-down left"></div><!--/bg-blue-down-->
            </div><!--/blue-page-->






            <!-- CONTENT -->
            <div class="content left">
                <div class="wrapper">

                    <div class="left-page left">



                        <div class="blog-one left">


                            <div class="bg-map-contact left">

                                <div class="gallery-single-images left">
                                    <img src="<?php echo base_url(); ?>images/profile/thumb_profile/<?php
                                    if (isset($pic)) {
                                        echo $pic;
                                    }
                                ?>"   class="attachment-slider wp-post-image" />                  


                                    <table width="300" id="user_data" border="0">
                                        <tr>
                                            <td> <p id="user_name"><?php
                                         if (isset($username)) {
                                             echo $username;
                                         }
                                ?></p></td>
                                        </tr>
                                        <tr>
                                            <td>  <a href="<?php echo base_url(); ?>user/user_messages"  id="message"><span style="color:#F90">3</span> صندوق الرسائل</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="<?php echo base_url(); ?>user/edit_profile" id="edit">تعديل حسابي الشخصي</a></td>
                                        </tr>
                                        <tr>
                                            <td>  <p id="state"><?php
                                                    if (isset($country)) {
                                                        echo $country;
                                                    }
                                ?><span>,</span><?php
                                                    if (isset($city)) {
                                                        echo $city;
                                                    }
                                ?></p></td>
                                        </tr>
                                        <tr>
                                            <td>   <a href="#" id="message">شجره الاعضاء</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo form_open_multipart('user/upload_pic'); ?>
                                                <?php echo '<q>' . validation_errors() . '</q>'; ?>

                                                <div id='file_browse_wrapper'>
                                                    <?php echo form_upload(array('id' => 'file_browse', 'name' => 'userfile')); ?>
                                                </div>


                                                <?php echo form_submit(array('id' => 'upload_button', 'name' => 'post_upload2'), 'تحميل'); ?>
                                                <?php echo form_close(); ?></td>
                                        </tr>
                                    </table>
                                </div><!--/gallery-single-images-->

                            </div><!--/bg-map-contact-->
                            <div id="portfolio-loader2"></div>

                            <h3 style="text-align:right;font-family:myfont;margin-bottom:30px;">الخدمات المفضله</h3>


                            <div class="latest-news-home-one left" style="float:right;text-align:right">
                                <div class="latest-news-home-one-date left" style="float:right;text-align:right" >
                                    <a href="#">
                                        <span>16</span>
                                        <p>Nov</p>
                                    </a>
                                    <div class="latest-news-background"></div>
                                </div><!--/latest-news-home-one-date-->
                                <div class="latest-news-home-one-content right">
                                    <div class="latest-news-home-one-title left" style="float:right;text-align:right;font-family:myfont">تصميم اعلانات وبنرات بجميع المقاسات</div><!--/latest-news-home-one-title-->
                                    <div class="latest-news-home-one-category left">
                                        <ul>


                                            <li style="float:right;text-align:right">
                                                <a href="<?php echo base_url(); ?>site/market_details"  style="float:right;text-align:right" >
                                                    <a href="<?php echo base_url(); ?>site/market_deatils#comments" class="comments-link" style="float:right;text-align:right" > تعليقات 6 </a></a></li>
                                        </ul>
                                    </div><!--/latest-news-home-one-category-->
                                </div><!--/latest-news-home-one-content-->

                            </div><!--/latest-news-home-one-->
                            <!------------------------------------------------->
                            <div class="latest-news-home-one left" style="float:right;text-align:right;margin-top:20px;">
                                <div class="latest-news-home-one-date left" style="float:right;text-align:right" >
                                    <a href="#">
                                        <span>16</span>
                                        <p>Nov</p>
                                    </a>
                                    <div class="latest-news-background"></div>
                                </div><!--/latest-news-home-one-date-->
                                <div class="latest-news-home-one-content right">
                                    <div class="latest-news-home-one-title left" style="float:right;text-align:right;font-family:myfont">تصميم اعلانات وبنرات بجميع المقاسات</div><!--/latest-news-home-one-title-->
                                    <div class="latest-news-home-one-category left">
                                        <ul>


                                            <li style="float:right;text-align:right">
                                                <a href="<?php echo base_url(); ?>site/market_details"  style="float:right;text-align:right" >
                                                    <a href="<?php echo base_url(); ?>site/market_deatils#comments" class="comments-link" style="float:right;text-align:right" > تعليقات 6 </a></a></li>
                                        </ul>
                                    </div><!--/latest-news-home-one-category-->
                                </div><!--/latest-news-home-one-content-->

                                <br />




                            </div><!--/latest-news-home-one-->
                            <!----------------------------------------------->
                            <div class="latest-news-home-one left" style="float:right;text-align:right;margin-top:20px;">
                                <div class="latest-news-home-one-date left" style="float:right;text-align:right" >
                                    <a href="#">
                                        <span>16</span>
                                        <p>Nov</p>
                                    </a>
                                    <div class="latest-news-background"></div>
                                </div><!--/latest-news-home-one-date-->
                                <div class="latest-news-home-one-content right">
                                    <div class="latest-news-home-one-title left" style="float:right;text-align:right;font-family:myfont">تصميم اعلانات وبنرات بجميع المقاسات</div><!--/latest-news-home-one-title-->
                                    <div class="latest-news-home-one-category left">
                                        <ul>


                                            <li style="float:right;text-align:right">
                                                <a href="<?php echo base_url(); ?>site/market_details"  style="float:right;text-align:right" >
                                                    <a href="<?php echo base_url(); ?>site/market_deatils#comments" class="comments-link" style="float:right;text-align:right" > تعليقات 6 </a></a></li>
                                        </ul>
                                    </div><!--/latest-news-home-one-category-->
                                </div><!--/latest-news-home-one-content-->

                                <br />




                            </div><!--/latest-news-home-one-->

                        </div><!--/blog-one-->

                        <div id="portfolio-loader2"></div>

                        <h3 style="text-align:right;font-family:myfont;margin-bottom:30px;">الخدمات المشتريه</h3>


                        <div class="latest-news-home-one left" style="float:right;text-align:right">
                            <div class="latest-news-home-one-date left" style="float:right;text-align:right" >
                                <a href="#">
                                    <span>16</span>
                                    <p>Nov</p>
                                </a>
                                <div class="latest-news-background"></div>
                            </div><!--/latest-news-home-one-date-->
                            <div class="latest-news-home-one-content right">
                                <div class="latest-news-home-one-title left" style="float:right;text-align:right;font-family:myfont">تصميم اعلانات وبنرات بجميع المقاسات</div><!--/latest-news-home-one-title-->
                                <div class="latest-news-home-one-category left">
                                    <ul>


                                        <li style="float:right;text-align:right">
                                            <a href="<?php echo base_url(); ?>site/market_details"  style="float:right;text-align:right" >
                                                <a href="<?php echo base_url(); ?>site/market_deatils#comments" class="comments-link" style="float:right;text-align:right" > تعليقات 6 </a></a></li>
                                    </ul>
                                </div><!--/latest-news-home-one-category-->
                            </div><!--/latest-news-home-one-content-->

                        </div><!--/latest-news-home-one-->
                        <!------------------------------------------------->
                        <div class="latest-news-home-one left" style="float:right;text-align:right;margin-top:20px;">
                            <div class="latest-news-home-one-date left" style="float:right;text-align:right" >
                                <a href="#">
                                    <span>16</span>
                                    <p>Nov</p>
                                </a>
                                <div class="latest-news-background"></div>
                            </div><!--/latest-news-home-one-date-->
                            <div class="latest-news-home-one-content right">
                                <div class="latest-news-home-one-title left" style="float:right;text-align:right;font-family:myfont">تصميم اعلانات وبنرات بجميع المقاسات</div><!--/latest-news-home-one-title-->
                                <div class="latest-news-home-one-category left">
                                    <ul>


                                        <li style="float:right;text-align:right">
                                            <a href="<?php echo base_url(); ?>site/market_details"  style="float:right;text-align:right" >
                                                <a href="<?php echo base_url(); ?>site/market_deatils#comments" class="comments-link" style="float:right;text-align:right" > تعليقات 6 </a></a></li>
                                    </ul>
                                </div><!--/latest-news-home-one-category-->
                            </div><!--/latest-news-home-one-content-->

                            <br />




                        </div><!--/latest-news-home-one-->
                        <!----------------------------------------------->
                        <div class="latest-news-home-one left" style="float:right;text-align:right;margin-top:20px;">
                            <div class="latest-news-home-one-date left" style="float:right;text-align:right" >
                                <a href="#">
                                    <span>16</span>
                                    <p>Nov</p>
                                </a>
                                <div class="latest-news-background"></div>
                            </div><!--/latest-news-home-one-date-->
                            <div class="latest-news-home-one-content right">
                                <div class="latest-news-home-one-title left" style="float:right;text-align:right;font-family:myfont">تصميم اعلانات وبنرات بجميع المقاسات</div><!--/latest-news-home-one-title-->
                                <div class="latest-news-home-one-category left">
                                    <ul>


                                        <li style="float:right;text-align:right">
                                            <a href="<?php echo base_url(); ?>site/market_details"  style="float:right;text-align:right" >
                                                <a href="<?php echo base_url(); ?>site/market_deatils#comments" class="comments-link" style="float:right;text-align:right" > تعليقات 6 </a></a></li>
                                    </ul>
                                </div><!--/latest-news-home-one-category-->
                            </div><!--/latest-news-home-one-content-->

                            <br />




                        </div><!--/latest-news-home-one-->










                    </div><!--/wrapper-->


                    <!--SIDEBAR-->
                    <div class="bg-sidebar right">
                        <div class="sidebar-top left"></div><!--/sidebar-top-->


                        <div id="sidebar" class="right">
                            <div class="sidebar_widget_holder"><form method="get"  class="submit-search-form" action="http://demo.themeskingdom.com/dreamy/">
                                    <div class="search-wrap"><input type="text" name="s" class="search-input" onfocus="if(value==defaultValue)value=''" onblur="if(value=='')value=defaultValue" value=""/></div>
                                    <div class="searchform-right left"><input type="submit" class="submit-button" value="" /></div>
                                </form> </div>
                            <div class="sidebar_widget_holder">


                                <?php include 'tempelet/main_menu.php'; ?>


                                <div id="clear"></div>
                                <?php include 'tempelet/most_buy.php'; ?>

                                <div id="clear"></div>
                                <?php include 'tempelet/most_buy.php'; ?>
                                <!-- slide wrap -->
                            </div>



                            <script type="text/javascript">
                                jQuery(document).ready(function($){

                                    jQuery('.slide-wrap').flexslider({
                                        animation: 'fade',                         
                                        slideshow: false,
                                        useCSS: true,
                                        controlNav: false,
                                        prevText: "Prev",
                                        nextText: "Next"
                        
                                    });
                                });


                            </script></div><!--/#sidebar-->
                        <div class="sidebar-down left"></div><!--/sidebar-down-->
                    </div><!--/bg-sidebar-->

                </div>
            </div><!--/content-->





            <?php include('footer.php'); ?>



        </div>
        </div>
        <!--/container--> 

        <!-- Generated in 0.401 seconds. Made 34 queries to database and 29 cached queries. Memory used - 20.35MB --> 
        <!-- Cached by DB Cache Reloaded Fix -->
    </body>
</html>