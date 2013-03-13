<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>المدونة</title>

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



            <div id="content">
                <div id="left">
                    <!---------------------------------------->

                    <?php
//                        $this->load->model('sitead');
                    if ($this->uri->segment(3) != '' && $this->uri->segment(4) != '') {
                        $c_id = $this->uri->segment(3);
                        $sc_id = $this->uri->segment(4);
                        $this->db->from('topic');
                        $this->db->where('sc_id', $sc_id);
                        $query = $this->db->get();
                    } else if ($this->uri->segment(3) != '') {
                        $c_id = (int) $this->uri->segment(3);
                        $this->db->from('topic');
                        $this->db->where('c_id', $c_id);
                        $query = $this->db->get();
                    } else {
                        $query = $this->db->get('topic');
                    }
                    if (isset($query)) {
                        if ($query->num_rows() > 0) {
                            $rows = $query->result();
                            foreach ($rows as $row) {
                                ?>
                                <!---------------------------------------------------------->                
                                <div id="blog" style="width: 780px;">
                                    <img src="<?php echo base_url(); ?>upload/topic/tumb/<?php echo $row->t_photo_name; ?>" width="190" height="160" /> 
                                    <h3> <a href="<?php echo base_url(); ?>site/blog_details/<?php echo $row->id; ?>"><?php echo $row->title; ?></a></h3>
                                    <p>
                                        <?php
                                        $this->db->from('user');
                                        $this->db->where('id', $row->user_id);
                                        $user_query = $this->db->get();
                                        if ($user_query->num_rows() > 0) {
                                            $user_rows = $user_query->result();
                                            foreach ($user_rows as $user_row) {
                                                ?>
                                            <p>تمت اضافته بواسطة <?php echo $user_row->username; ?></p>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </p>
                                    <?php echo $row->content; ?>
                                    </p>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>

                    <!----------------------------------------------->
                    <!------------------------------------------------------------->
                    <div id="serv_content">


                    </div></div>


                <div id="right">

                    <div class="main_menu" >

                        <ul class="nav2" style="margin-top:-10px">
                            <h3 id="dept">الاقسام</h3>
                            <?php
                            $query1 = $this->db->get('blog_category');
                            if ($query1->num_rows() > 0) {
                                $rows = $query1->result();
                                foreach ($rows as $row) {
                                    $base = base_url() . "site/blog/";
//                                    echo $rows->num_rows();
                                    $this->db->where('b_c_id', $row->id);
                                    $query2 = $this->db->get('blog_sub_categ');
                                    if ($query2->num_rows() > 0) {
                                        echo "<li><a>$row->name</a></li>";
                                        ?>
                                        <div class="sub_links" style="display: none; ">

                                            <?php
                                            $rowsSub = $query2->result();
                                            foreach ($rowsSub as $rowSub) {
                                                echo "<p><a href=\"$base$rowSub->b_c_id/$rowSub->id\">$rowSub->name</a></p> ";
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
                        <div id="serv_block2" >
                            <h3 style="margin-top:-10px;">الخدمات التي تم تسليمها</h3>

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
                    </div>	

                </div>

            </div>


            <!-- end of section middle -->

            <!-- start of section bottom -->
            <?php include('footer.php') ?>
            <!-- end of section bottom -->

        </div>
        <!-- end of wrapper -->

    </body>
</html>