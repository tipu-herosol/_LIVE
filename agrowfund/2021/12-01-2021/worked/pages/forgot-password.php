<main logon>


    <section id="logon">
        <div class="contain">
            <div class="lSide" data-aos="fade" data-aos-duration="1000">
                <div class="image"><img src="<?= get_site_image_src("images/", $site_content['image1']) ?>" alt=""></div>
                <ul class="playStore">
                    <li><a href="?" target="_blank"><img src="<?= get_site_image_src("images/", $site_content['image2']) ?>" alt=""></a></li>
                    <li><a href="?" target="_blank"><img src="<?= get_site_image_src("images/", $site_content['image3']) ?>" alt=""></a></li>
                </ul>
            </div>
            <div class="rSide" data-aos="fade" data-aos-duration="1000">
                <form action="" method="post" autocomplete="off" class="frmAjax loginForm" id="frmForgot">
                    <h1 class="heading"><?= $site_content['banner_title'] ?></h1>
                    <?= $site_content['banner_details'] ?>
                    <div class="socialBtn">
                        <a href="<?= base_url() ?>google-login" class="webBtn gmBtn"><img src="<?= base_url() ?>assets/images/google-icon.svg" alt=""> <?= $site_content['google_btn_title'] ?></a>
                        <a href="<?= base_url() ?>facebook-login" class="webBtn fbBtn"><img src="<?= base_url() ?>assets/images/facebook-icon.svg" alt=""> <?= $site_content['facebook_btn_title'] ?></a>
                    </div>
                    <div class="oRLine"><span>or</span></div>
                    <div class="logBlk">
                        <div class="formRow row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h6><?= $site_content['email_heading'] ?></h6>
                                <div class="txtGrp">
                                    <input type="text" name="email" id="email" class="txtBox" placeholder="<?= $site_content['email_placeholder'] ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="bTn formBtn">
                            <button type="submit" class="webBtn blockBtn"><?= $site_content['button_heading'] ?> <i class="spinner hidden"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- logon -->


</main>