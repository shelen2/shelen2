<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>اضافة قسم فرعى</title>

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
                                <?php echo form_open('civou/c_subcategory/addSubCategory'); ?>
                                <div class="heading center">
                                    <h4><span class="bold">تسجيل قسم فرعى</span></h4>
                                    <div class="dotted"></div>
                                </div>
                                <ul>
                                    <li>
                                        <label for="name">اسم القسم</label>
                                        <?php echo form_input(array('name' => 'categoryname', 'id' => "name")); ?>

                                    </li>

                                    <li>

                                        <label for="name">اسم القسم التابع له</label>

                                        <select name="categoryid" id="CmbCountry" class="home" style="width:570px;text-align:right" >

                                            <option value="none" selected="selected" >اختار القسم </option>
                                            <?php
                                            $this->load->model('sitead');
                                            $rows = $this->sitead->SelectCategory();
                                            foreach ($rows as $row) {
                                                echo "<option value=\"$row->id\">$row->name</option>";
                                            }
                                            ?>
                                        </select>
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