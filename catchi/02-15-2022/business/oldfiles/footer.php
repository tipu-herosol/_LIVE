<footer>
    <div class="contain">
        <div class="flex">
            <div class="colL">
                <div class="footer-logo">
                    <a href="<?= base_url()?>"><img src="<?= !empty($settings->site_logo) ? get_site_image_src("images", $settings->site_logo) : 'http://placehold.it/1000x1000' ?>" alt=""></a>
                </div>
                <p><?= $settings->site_about?> </p>
                <ul class="social flex">
                    <!-- <li><a href="?" target="_blank" class=""><i class="fa fa-twitter"></i></a></li> -->
                    <?php if(!empty($settings->site_facebook)){ ?>
                        <li><a href="<?= $settings->site_facebook ?>" target="_blank" class=""><i class="fa fa-facebook"></i></a></li>
                    <?php } if(!empty($settings->site_instagram)){ ?>
                        <li><a href="<?= $settings->site_instagram ?>" target="_blank" class=""><i class="fa fa-instagram"></i></a></li>
                    <?php } if(!empty($settings->site_linkedin)){ ?>
                        <li><a href="<?= $settings->site_linkedin ?>" target="_blank" class=""><i class="fa fa-linkedin"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="colM col">
                <h4>The Product</h4>
                <ul class="lst">
                    <li><a href="#why-catchi">Why Catchi</a></li>
                    <li><a href="#how-it-work">How it Works</a></li>
                    <li><a href="#benefits">The Benefits</a></li>
                    <li><a href="#feature">Features</a></li>
                </ul>
            </div>
            <div class="colR col">
                <h4>Contact Us</h4>
                <ul class="lst">
                    <li><a href="mailto:<?= $settings->site_email?>"><?= $settings->site_email?></a></li>
                    <!-- <li><a href="tel:<?= $settings->site_phone?>"><?= $settings->site_phone?></a></li> -->
                </ul>
            </div>
        </div>
    </div>

    <div class="copyright relative">
        <div class="contain">
            <div class="inner">
                <p><?= $settings->site_copyright?></p>
                <?php if(!empty($row->privacy_link)){ ?>
                    <ul class="lst">
                        <li><a href="<?= makeExternalUrl($row->privacy_link) ?>">Privacy Policy</a></li>
                    </ul>
                <?php } ?>
            </div>

        </div>
    </div>
</footer>

<div class="show-pop-subscribe-btn">
    <div class="inner-pop-btn">
        <div class="subscribe-btn">
            <i class="fa fa-envelope"></i>
        </div>
        <h4>Subscribe!</h4>
    </div>
</div>
<div class="popup news-letr" data-popup="quote" style="display:none;">
	<div class="tableDv">
		<div class="tableCell">
			<div class="contain">
				<div class="_inner newsLtr">
					<div class="crosBtn new-cross"></div>
					<div class="upside cmnHeadingSec">
                        <h2><?= $row->modal_heading ?></h2>
                        <p><?= $row->modal_desc ?></p>
                        <form action="<?=base_url('Ajax/subscribe')?>" class="frmAjax" method="post">
                            <div class="txtGrp">
                                <input type="text" name="name" id="name" class="txtBox" placeholder="Enter your name">
                            </div>
                            <div class="txtGrp">
                                <input type="text" name="email" id="email" class="txtBox" placeholder="Enter your email">
                                
                            </div>
                            <button type="submit" class="webBtn colorBtn">Subscribe!</button>
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>




<?php  $this->load->view('includes/commonjs'); ?>







