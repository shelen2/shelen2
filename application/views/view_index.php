<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
    <head profile="http://gmpg.org/xfn/11">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
        
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

        <title>
            شيلينات دوت كوم </title>

        <?php include 'tempelet/links.php'; ?>


    </head>


    <div id="fb-root"></div>

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
                            <a href="#" >
                                <img src="<?php echo base_url(); ?>images/logo.png" alt="logo" />
                            </a>
                        </div>
                        <!--/logo-->
                        <!-- Login Starts Here -->
                        <?php include 'tempelet/login.php'; ?>
                        <!--/logo-->

                        <!-- Login Ends Here -->

                        <!--MENU-->
                        <?php include('tempelet/header.php'); ?>
                        <!--/bg-menu-->
                    </div>
                    <!--/wrapper-->
                    <div class="bg-blue-top left"></div>
                    <!--/bg-blue-top-->
                </div>
                <!--/bg-header-shadow-->

            </div>
        </div><!--/header-->

        <!-- BG BLUE -->
        <div class="blue-page left">

            <div class="bg-blue-center left">
                <div class="wrapper">

                    <!--/ start flexslider-->
                    <?php include 'tempelet/slider.php'; ?>
                    <!--/ End flexslider-->
                    <?php include 'tempelet/service.php'; ?>
                    <!--/bg-scroll-home-->
                </div><!--/wrapper-->
            </div><!--/bg-blue-center-->
            <div class="bg-blue-down left"></div><!--/bg-blue-down-->
        </div>
        <!--/blue-page-->


        <!-- CONTENT -->
        <div class="content left">
            <div class="wrapper">
                <div class="home-text left" style="font-family:myfont">انت تحتاج الي تحقيق الربح ؟؟ وبدون مجهود ؟؟<br />
                    "يوفر موقعنا لك ذالك وانت في منزلك"
                </div>
                <!--/home-text-->
                <?php include 'tempelet/left_page.php';?>
                <!--/left-page--> 

                <!--SIDBAR-->
               <?php include 'tempelet/right_page.php';?>
                <!--/bg-sidebar-->

                <div class="border-pages left"></div><!--/border-pages-->
                
                <?php include 'tempelet/last_service.php';?>
                <!--/wrapper--> 
            </div>
            <!--/content--> 
        </div>
        <?php include('tempelet/footer.php'); ?>
    </div>
    <!--/container--> 

    <!-- Generated in 0.401 seconds. Made 34 queries to database and 29 cached queries. Memory used - 20.35MB --> 
    <!-- Cached by DB Cache Reloaded Fix -->
</body>
</html>