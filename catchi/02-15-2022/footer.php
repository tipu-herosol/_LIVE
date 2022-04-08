<footer>

    <div class="contain">

        <div class="flex_row">

            <div class="col">

                <div class="in_col">

                    <h5>Coming soon</h5>

                    <ul class="play_store">

                        <li><a><img src="<?= getImageSrc( UPLOADIMAGE. "/". $settings->site_playstore) ?>" alt=""></a></li>

                        <li><a><img src="<?= getImageSrc( UPLOADIMAGE. "/". $settings->site_appstore) ?>" alt=""></a></li>

                    </ul>

                </div>

            </div>

            <div class="col">

                <div class="in_col">

                    <h5 class="drop">Product</h5>

                    <ul class="list">

                        <li><a href="#why" class="run_btn">Why CATCHI</a></li>

                        <li><a href="#works" class="run_btn">How it works</a></li>

                        <li><a href="#social" class="run_btn">The social</a></li>

                    </ul>

                </div>

            </div>

            <div class="col">

                <div class="in_col">

                    <h5 class="drop">Contact</h5>

                    <ul class="list">

                        <?php if(!empty($settings->site_phone)){ ?>

                        <li><a href="tel:<?=$settings->site_phone?>">Call : <?=$settings->site_phone?></a></li>

                        <?php }if(!empty($settings->site_email)){ ?>

                        <li><a href="mailto:<?=$settings->site_email?>">Mail : <?=$settings->site_email?></a></li>

                        <?php } ?>

                    </ul>

                </div>

            </div>

            <!-- <div class="col">

                <div class="in_col">

                    <h5 class="drop">Support</h5>

                    <ul class="list">

                        <li><a href="<?= $base_url ?>privacy-policy.php">Privacy Policy</a></li>

                        <li><a href="<?= $base_url ?>terms-and-conditions.php">Terms & conditions</a></li>

                        <li><a href="<?= $base_url ?>security.php">Security</a></li>

                    </ul>

                </div>

            </div> -->

            <div class="col">

                <div class="in_col">

                    <div class="logo_blk">

                        <div class="logo">

                            <a href="<?= base_url() ?>">

                                <img src="<?= getImageSrc( UPLOADIMAGE. "/". $settings->site_logo) ?>" alt="">

                            </a>

                        </div>

                    </div>

                    <ul class="social_links">

                        <?php if(!empty($settings->site_instagram)){?>

                            <li><a target="_blank" href="<?= makeExternalUrl($settings->site_instagram) ?>" style="display: block;"><img src="<?=base_url()?>assets/images/social-instagram.svg" alt=""></a></li>

                        <?php }if(!empty($settings->site_facebook)){?>

                            <li><a target="_blank" href="<?= makeExternalUrl($settings->site_facebook) ?>" style="display: block;"><img src="<?=base_url()?>assets/images/social-facebook.svg" alt=""></a></li>

                        <?php }if(!empty($settings->site_linkedin)){?>

                            <li><a target="_blank" href="<?= makeExternalUrl($settings->site_linkedin) ?>" style="display: block;"><img src="<?=base_url()?>assets/images/social-linkedin.svg" alt=""></a></li>

                        <?php }if(!empty($settings->site_twitter)){?>   

                            <li><a target="_blank" href="<?= makeExternalUrl($settings->site_twitter) ?>" style="display: block;"><img src="<?=base_url()?>assets/images/social-twitter.svg" alt=""></a></li>

                        <?php } ?>  

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <div class="copyright">

        <div class="contain">

            <p><?= $settings->site_copyright ?></p>

        </div>

    </div>

</footer>

<!-- footer -->





<!-- Main Js -->

<script src="<?= base_url() ?>assets/js/main.js"></script>