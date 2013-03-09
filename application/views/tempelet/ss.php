<?php
if ($this->uri->segment(3) != '') {
    $id = $this->uri->segment(3);
    $this->db->from('service');
    $this->db->where('id', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        $rows = $query->result();
        foreach ($rows as $row) {
            
        }
    } else {
        redirect('#');
    }
} else {
    redirect('#');
}
?>

<div class="blog-one left">
    <div class="bg-map-contact left">
        <div class="gallery-single-images left">
            <img src="<?php echo base_url(); ?>imagesService/<?php echo $row->photo_name; ?>"  class="attachment-slider wp-post-image" alt="s2" title="s2" />                            </div><!--/gallery-single-images-->
    </div><!--/bg-map-contact-->
    <div id="portfolio-loader2"></div>
    <div class="latest-news-home-one left" style="float:right;text-align:right">
        <div class="latest-news-home-one-date left" style="float:right;text-align:right" >
            <a href="#">
                <span>16</span>
                <p>Nov</p>
            </a>
            <div class="latest-news-background"></div>
        </div><!--/latest-news-home-one-date-->
        <div class="latest-news-home-one-content right">
            <div class="latest-news-home-one-title left" style="float:right;text-align:right;font-family:myfont"><?php echo $row->name;?></div><!--/latest-news-home-one-title-->
            <div class="latest-news-home-one-category left">
                <ul>
                    <li style="float:right;text-align:right">
                        <a href="<?php echo base_url(); ?>site/market_details"  style="float:right;text-align:right" >
                            <a href="<?php echo base_url(); ?>site/market_deatils#comments" class="comments-link" style="float:right;text-align:right" > تعليقات 6 </a></a></li>
                </ul>
            </div><!--/latest-news-home-one-category-->
        </div><!--/latest-news-home-one-content-->
        <br />
        <div class="blog-single-text shortcodes left">
            <p>
                <?php echo $row->detail; ?>
            </p>
            <div style="float:right;margin-top:50px;margin-right:0px;">
                <table width="200" border="0"  id="table_serv">
                    <tr>
                        <td width="45%" style=" color: #F30"><?php echo $row->price_point;?>نقطة</td>
                        <td width="55%" style="font-weight:bold;">: سعر الخدمه</td>
                    </tr>
                    <tr>
                        <td style=" color: #F30" >12/10/2013</td>
                        <td style="font-weight:bold">: تاريخ البدايه</td>
                    </tr>
                    <tr>
                        <td style=" color: #F30">13/10/2013</td>
                        <td style="font-weight:bold">: تاريخ الانتهاء</td>
                    </tr>
                    <tr>
                        <td style=" color: #F30">stars</td>
                        <td style="font-weight:bold">: تقيم الموظف</td>
                    </tr>
                    <tr>
                        <td style=" color: #F30">stars</td>
                        <td style="font-weight:bold">: تقيم الخدمه</td>
                    </tr>
                    <tr style="margin-top:20px;height:50px">
                        <td></td>
                        <td ></td>
                    </tr>
                </table>
            </div>
            <div id="clear"></div>
            <a href="<?php echo base_url();?>site/order/<?php echo $row->id ?>" class="ask" >طلب الخدمه</a>
        </div><!--/blog-single-text-->
    </div><!--/latest-news-home-one-->
</div><!--/blog-one-->


