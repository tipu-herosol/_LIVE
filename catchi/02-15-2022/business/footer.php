<footer>

    <div class="contain">

        <div class="flex_row">

            <div class="col">

                <div class="in_col">

                    <h5><?= empty($site_settings->footer_heading1) ? '' : $site_settings->footer_heading1 ?></h5>

                    <!-- <ul class="play_store">

                        <li><a><img src="<?= getImageSrc('uploads/images/' . $site_settings->footer_image1) ?>" alt=""></a></li>

                        <li><a><img src="<?= getImageSrc('uploads/images/' . $site_settings->footer_image2) ?>" alt=""></a></li>

                    </ul> -->

                </div>

            </div>

            <div class="col">

                <div class="in_col">

                    <h5 class="drop"><?= empty($site_settings->footer_heading2) ? '' : $site_settings->footer_heading2 ?></h5>

                    <ul class="list">

                        <li><a href="#why" class="run_btn">Why CATCHI</a></li>

                        <li><a href="#works" class="run_btn">How it works</a></li>

                        <li><a href="#profile" class="run_btn">Your Profile</a></li>

                        <li><a href="#rewards" class="run_btn">Rewards</a></li>

                    </ul>

                </div>

            </div>

            <div class="col">

                <div class="in_col">

                    <h5 class="drop"><?= empty($site_settings->footer_heading3) ? '' : $site_settings->footer_heading3 ?></h5>

                    <ul class="list">

                        <li><a href="mailto:Hello@catchiapp.com"><?= empty($site_settings->site_email) ? '' : $site_settings->site_email ?></a></li>

                    </ul>

                </div>

            </div>

            <div class="col">

                <div class="in_col">

                    <h5 class="drop"><?= empty($site_settings->footer_heading4) ? '' : $site_settings->footer_heading4 ?></h5>

                    <ul class="list">

                        <li><a href="<?= base_url() ?>privacy-policy.php">Privacy Policy</a></li>

                        <li><a href="<?= base_url() ?>terms-and-conditions.php">Terms & conditions</a></li>

                        <li><a href="<?= base_url() ?>security.php">Security</a></li>

                    </ul>

                </div>

            </div>

            <div class="col">

                <div class="in_col">

                    <div class="logo_blk">

                        <div class="logo">

                            <a href="<?= base_url() ?>">

                                <img src="<?= getImageSrc('uploads/images/' . $site_settings->footer_image3) ?>" alt="">

                            </a>

                        </div>

                    </div>

                    <ul class="social_links">

                        <li><a href="<?= makeExternalUrl($site_settings->site_facebook) ?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-facebook.svg" alt=""></a></li>

                        <li><a href="<?= makeExternalUrl($site_settings->site_instagram) ?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-instagram.svg" alt=""></a></li>

                        <li><a href="<?= makeExternalUrl($site_settings->site_linkedin) ?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-linkedin.svg" alt=""></a></li>

                        <li><a href="<?= makeExternalUrl($site_settings->site_twitter) ?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-twitter.svg" alt=""></a></li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <div class="copyright">

        <div class="contain">

            <?= empty($site_settings->site_copyright) ? '' : $site_settings->site_copyright ?>

        </div>

    </div>

</footer>

<!-- footer -->





<!-- Main Js -->

<script src="<?= base_url() ?>assets/js/main.js"></script>