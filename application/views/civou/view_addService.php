<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>اضافه خدمه  </title>
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

        <!--begin jquery  and  css code  to make  drop down bompobox   ------------------------------------->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.3.2.js"></script>
        <script type="text/javascript">

            $(document).ready(function() {
                $('#loader').hide();
                $('#show_heading').hide();
             
                $('#search_category_id').change(function(){
                    $('#show_sub_categories').fadeOut();
                    $('#loader').show();
                    $('#show_heading').show();
                    
                    $.post("<?php echo site_url('js/get_chid_categories.php') ?>", {
                        parent_id: $('#search_category_id').val()
                    }, function(response){			
                        setTimeout("finishAjax('show_sub_categories', '"+escape(response)+"')", 400);
                    });
                    return false;
                });
            });

            function finishAjax(id, response){
                $('#loader').hide();
                $('#show_heading').show();
                $('#'+id).html(unescape(response));
                $('#'+id).fadeIn();
            } 

            function alert_id()
            {
                if($('#sub_category_id').val() == '')
                    alert('Please select a sub category.');
                else
                    alert($('#sub_category_id').val());
                return false;
            }

        </script>
        <style>
            .both h4{ font-family:Arial, Helvetica, sans-serif; margin:0px; font-size:14px;}
            #search_category_id{ padding:3px; width:200px;}
            #sub_category_id{ padding:3px; width:200px;}
            .both{ float:left; margin:0 15px 0 0; padding:0px;}
        </style>        
        <!--end of drop down compobox    -- ---------------------------------------------------------  -->

    </head>
    <?php include('dbcon.php'); ?>
    <style type="text/css">
        .error{color:#F00;font-size:18px}

    </style>
    <body style="">

        <!-- start of wrapper -->

        <section id="">	
            <div class="container totop30">
                <section id="middle">
                    <div id="content">
                        <div id="left" style="background:#111">       
                            <div class="featured_form">
                                <?php echo form_open_multipart('civou/c_service/addservice'); ?>
                                <div class="heading center">
                                    <h4><span class="bold">اضافة خدمة جديده</span></h4>
                                    <div class="dotted"></div>
                                </div>
                                <ul>
                                    <li>
                                        <label for="name">اسم الخدمة</label>
                                        <?php echo form_input(array('name' => 'servicename', 'id' => "name")); ?>

                                    </li>


                                    <li>
                                        <label for="name">سعر الخدمة بالنقاط</label>
                                        <?php echo form_input(array('name' => 'serviceprice', 'id' => "name")); ?>

                                    </li>

                                    <li>
                                        <label for="name"> القسم</label>
                                        <div class="both">
                                            <select name="search_category"  id="search_category_id">
                                                <option value="none" selected="selected" >اختار القسم الرئيسى</option>
                                                <?php
                                                $query = "select * from category";
                                                $results = mysql_query($query);
                                                while ($rows = mysql_fetch_assoc(@$results)) {
                                                    ?>
                                                    <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                                                <?php }
                                                ?>
                                            </select>		
                                        </div>

                                        <div class="both">
                                            <div id="show_sub_categories" align="center">
                                                <img src="<?php echo base_url(); ?>images/loader.gif" style="margin-top:8px; float:left" id="loader" alt="" />
                                            </div>
                                        </div>
                                        <br clear="all" /><br clear="all" />

                                    </li>

                                    <li>
                                        <label for="name">وصف الخدمة </label>
                                        <?php echo form_textarea(array('name' => 'discription', 'id' => "name",'rows'=>5,'cols'=>100)); ?>
                                    </li>
                                    
                                    <li>
                                        <label for="name"> تعليمات للمشترى </label>
                                        <?php echo form_textarea(array('name' => 'instruction', 'id' => "name",'rows'=>5,'cols'=>100)); ?>
                                    </li>
                                    <li>
                                        <label for="name">صوره للخدمة</label>
                                        <?php echo form_upload('userfile'); ?>
                                        
                                    </li>
                                </ul>
                                <div class="centerdiv">
                                    <div class="cta-button optin small">
                                        <?php echo form_submit(array('name' => 'button', 'class' => "cta1"), 'تسجيل') ?>
                                    </div>
                                </div>

                                <div class="centerdiv">
                                    <div class="cta-button optin small">
                                        <label> 
                                            <?php
                                            if (isset($mes)) {
                                                echo $mes;
                                            }
                                            ?>
                                        </label>
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