
<?php 
    $footer_content = get_footer_content();
    // pr($footer_content);
?>
<div class="preFt">
    <div class="contain">
       <div class="footerPer">
            <h2><?= $footer_content->footer_about_heading ?></h2>
            <?= $footer_content->footer_about_desc ?>
        </div>
    </div>
</div>
<footer>
    <div class="contain">
        <div class="flex">
            <div class="col">
                <div class="inner">
                    <h4><?= $footer_content->site_link_heading ?></h4>
                    <ul class="lst">
                        <!-- <li><a href="<?= base_url() ?>">Home</a></li> -->
                        <li><a href="<?= base_url('singapore-property-guides#selling-guides')?>">Selling Guides</a></li>
                        <li><a href="<?= base_url('sell-with-pinnacle')?>">Sell with Pinnacle</a></li>
                        <li><a href="<?= base_url('property-valuation')?>">Property Valuation</a></li>
                        <li><a href="<?= base_url('singapore-property-guides')?>">Buying Guides</a></li>
                        <li><a href="<?=  base_url('buy-with-pinnacle')?>">Buy with Pinnacle</a></li>
                        <li><a href="<?=  base_url('rent-with-pinnacle')?>">Renting Guides</a></li>
                        <li><a href="<?=  base_url('rent-with-pinnacle')?>">Rent with Pinnacle</a></li>
                        <li><a href="<?= base_url('track-records')?>">Track Record</a></li>
                        <li>
                            <a href="<?= base_url('our-management')?>">Our Management</a>
                        </li>
                        <li>
                        <a href="<?= base_url('property-listings')?>">Property Listings</a>
                        </li>
                        <!-- <li><a href="<?= base_url('mortgage-calculator')?>">Mortgage Calculator</a></li> -->
                        <li><a href="<?= base_url('singapore-property-guides')?>">Singapore Property Guides</a></li>
                        <!-- <li><a href="<?= base_url('districts')?>">Districts</a></li>
                        <li><a href="<?= base_url('hdb-estates')?>">HDB Estates</a></li>

                        <li><a href="<?= base_url('agreements-checklists')?>">Agreements & Checklists</a></li> -->
                        <li><a href="<?= base_url('mortgage')?>">Mortgage Guides</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col">
                <div class="inner">
                    <h4><?= $footer_content->contact_link_heading ?></h4>
                    <ul class="lst">
                        <li><a href="mailto:<?= $site_settings->site_display_email?>"><?= $site_settings->site_display_email?></a></li>
                        <li><a href="phoneto:<?= $site_settings->site_contact?>"><?= $site_settings->site_contact?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <h4><?= $footer_content->follow_link_heading ?></h4>
                    <ul class="social flex">
                       <?php if ($social_media_links['fb_link'] !=""): ?>
                            <li><a href="<?= $social_media_links['fb_link']  ?>" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <?php endif ?>
                       <?php if ($social_media_links['instagram_link'] !=""): ?>
                            <li><a href="<?= $social_media_links['instagram_link'] ?>" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <?php endif ?>
                       <?php if ($social_media_links['linkdin_link'] !=""): ?>
                            <li><a href="<?= $social_media_links['linkdin_link'] ?>" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <?php endif ?>
                       <?php if ($social_media_links['youtube_link'] !=""): ?>
                            <li><a href="<?= $social_media_links['youtube_link']?>" target="_blank" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                        <?php endif ?>
                        <?php if ($social_media_links['twitter_link'] !=""): ?>
                            <li><a href="<?= $social_media_links['twitter_link']?>" target="_blank" class="whatsapp"><i class="fa fa-twitter"></i></a></li>
                        <?php endif ?>
                        <?php if($social_media_links['pinterest_link']): ?>
                            <li><a href="<?= $social_media_links['pinterest_link'] ?>" target="_blank" class="whatsapp"><i class="fa fa-pinterest"></i></a></li>
                        <?php endif ?>
                        <?php if($social_media_links['google_business_link']): ?>
                        <li><a href="<?= $social_media_links['google_business_link'] ?>" target="_blank" class="whatsapp"><img style="padding: 4px;" src="<?= base_url('assets/images/google-business.png') ?>"></a></li>
                        <?php endif; ?>
                    </ul>
                    <ul class="list relative" style="margin-top: 20px;">
                        <li><a href="<?= base_url('privacy-policy')?>">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <h4><?= $footer_content->subsrcibe_heading ?></h4>
                    <form action="<?= site_url('ajax/subscribe') ?>" id="subFrm" class="frmAjax">
                        <div class="alertMsg"></div>
                        <label for="email">Stay up to date with the latest news and deals!</label>
                        <div class="inside">
                            <input type="text" name="semail" id="semail" class="txtBox" placeholder="Enter your email address">
                            <button type="submit" class="webBtn colorBtn"><i class="fa fa-spinner fa-spin hidden"></i> Subscribe!</button>
                        </div>
                    </form>
                    

                    
                </div>
            </div>
        </div>
        
    </div>
    <div class="copyright relative">
        <div class="contain">
            <div class="inner semi">
                <?= $footer_content->copyright ?>
            </div>
        </div>
    </div>
</footer>
<div class="hBtn">
<a href="#banner">
    <i class="fa fa-angle-up"></i>
</a>
</div>
<div class="callToActionMobileBtn">
<a href="<?= $footer_content->footer_get_touch_cta ?>" class="callToBtn">Get In Touch</a>
</div>
<div class="listDetailPageBtn">
<a href="https://wa.me/6592475188" class="callToBtn">Schedule a Viewing</a>
</div>
<?php $this->load->view('includes/commonjs'); ?>

