<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>تسويق الكتروني</title>

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
        <script src="<?php echo base_url(); ?>js/custom.js" type="text/javascript" ></script> 
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
                            <div id="left">       
                                <div id="serv_content">
                                    <?php
                                    if ($this->uri->segment(3) != '') {
                                        $id = $this->uri->segment(3);
                                        $this->db->from('service');
                                        $this->db->where('id', $id);
                                        $query = $this->db->get();
                                        if ($query->num_rows() > 0) {
                                            $rows = $query->result();
                                            foreach ($rows as $row) {
                                                ?>
                                                <div id="serv_details">
                                                    <p id="serv_name"><?php echo $row->name; ?></p>
                                                    <img id="serv_img" src="<?php echo base_url(); ?>imagesService/<?php echo $row->photo_name; ?>" width="800" height="500"/>
                                                    <p id="serv_name"><?php echo $row->name;?></p>
                                                    <table style="margin-left:70px;"  border="0">
                                                        <tr>
                                                            <td>محمد جادو</td>
                                                            <td>: اسم الموظف</td>
                                                        </tr>
                                                        <tr>
                                                            <td>24 ساعه</td>
                                                            <td>: وقت التسليم</td>
                                                        </tr>
                                                        <tr>
                                                            <td>stars</td>
                                                            <td>: تقيم الموظف</td>
                                                        </tr>
                                                        <tr>
                                                            <td>stars</td>
                                                            <td>: تقيم الخدمه</td>
                                                        </tr>

                                                    </table>

                                                    <table  border="0">
                                                        <tr>
                                                            <td><?php echo $row->price_point;?></td>
                                                            <td>: سعر الخدمه</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>: عدد الطلبات</td>
                                                        </tr>
                                                        <tr>
                                                            <td>13/3/2013</td>
                                                            <td>: تاريخ العرض</td>
                                                        </tr>
                                                        <tr>
                                                            <td>13/3/2013</td>
                                                            <td>: تاريخ الانتهاء </td>
                                                        </tr>
                                                    </table>

                                                    <table width="600" border="0" style="margin-top:3px;">
                                                        <tr>

                                                            <td><p id="serv_desc">
                                                                    <?php echo $row->detail;?>
                                                                </p></td>
                                                            <td width="60">: التفاصيل</td>

                                                        </tr>
                                                    </table>
                                                    </br>
                                                    </br>
                                                    </br>
                                                    </br>
                                                    </br>
                                                    </br>
                                                    </br>
                                                    </br>
                                                    </br>

                                                    <a href="<?php echo base_url();?>site/order/<?php echo $row->id ?>" id="ask2">أطلب الخدمه</a>
                                                    </br>
                                                    <div id="clear"></div>   
                                                    <div id="comments"> 
                                                        <h3>التعليقات</h3>
                                                        <div id="comment">
                                                            <a href="#"> <img src="<?php echo base_url(); ?>images/adv.gif" width="70" height="60" /></a>
                                                            <h6><a href="#"> mohamedtemraz</a></h6>
                                                            <p class="comment">أوضح لك كيف تكتب عنوانك بشكل صحيح و كيفية شحن السلع المشتراة الى باب منزلك ، سأشرح لك أيضا كيف تحسب الجمارك </p>
                                                        </div></div>

                                                </div>


                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                            <div id="right">

                                <div class="main_menu" >
                                    <ul class="nav2" style="margin-top:-10px">
                                        <h3 id="dept">الاقسام</h3>
                                        <?php
                                        $query1 = $this->db->get('category');
                                        if ($query1->num_rows() > 0) {
                                            $rows = $query1->result();
                                            foreach ($rows as $row) {
                                                $base = base_url() . "site/market/";
//                                    echo $rows->num_rows();
                                                $this->db->where('c_id', $row->id);
                                                $query2 = $this->db->get('sub_categ');
                                                if ($query2->num_rows() > 0) {
                                                    echo "<li><a>$row->name</a></li>";
                                                    ?>
                                                    <div class="sub_links" style="display: none; ">

                                                        <?php
                                                        $rowsSub = $query2->result();
                                                        foreach ($rowsSub as $rowSub) {
                                                            echo "<p><a href=\"$base$rowSub->c_id/$rowSub->id\">$rowSub->name</a></p> ";
                                                        }
                                                        ?> 
                                                    </div>

                                                    <?php
                                                } else {
                                                    echo "<li><a href=\"$base$row->id\">$row->name</a></li>";
                                                }
                                            }
                                        }
                                        ?>
                                    </ul>    
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