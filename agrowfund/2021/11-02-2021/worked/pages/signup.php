<main logon>


    <section id="logon">
        <div class="contain">
            <div class="lSide" data-aos="fade-left" data-aos-duration="1000">
                <div class="image"><img src="<?= get_site_image_src("images/", $site_content['image1']) ?>" alt=""></div>
                <ul class="playStore">
                    <li><a href="?" target="_blank"><img src="<?= get_site_image_src("images/", $site_content['image2']) ?>" alt=""></a></li>
                    <li><a href="?" target="_blank"><img src="<?= get_site_image_src("images/", $site_content['image3']) ?>" alt=""></a></li>
                </ul>
            </div>
            <div class="rSide" data-aos="fade-right" data-aos-duration="1000">
                <form action="" method="post" autocomplete="off" class="frmSignup" id="frmSignup">
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
                                <h6><?= $site_content['name_heading'] ?></h6>
                                <div class="formRow row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="txtGrp">
                                            <label for=""><?= $site_content['lname_placeholder'] ?></label>
                                            <input type="text" name="lname" id="lname" class="txtBox" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="txtGrp">
                                            <label for=""><?= $site_content['fname_placeholder'] ?></label>
                                            <input type="text" name="fname" id="fname" class="txtBox" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h6><?= $site_content['email_heading'] ?></h6>
                                <div class="txtGrp">
                                    <label for=""><?= $site_content['email_placeholder'] ?></label>
                                    <input type="text" name="email" id="email" class="txtBox" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h6><?= $site_content['phone_heading'] ?></h6>
                                <div class="txtGrp">
                                    <label for=""><?= $site_content['phone_placeholder'] ?></label>
                                    <input type="text" name="phone" id="phone" class="txtBox" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h6><?= $site_content['password_heading'] ?></h6>
                                <div class="txtGrp pasDv">
                                    <label for=""><?= $site_content['password_placeholder'] ?></label>
                                    <input type="password" name="password" id="password" class="txtBox" required>
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h6><?= $site_content['c_password_heading'] ?></h6>
                                <div class="txtGrp pasDv">
                                    <label for=""><?= $site_content['c_password_placeholder'] ?></label>
                                    <input type="password" name="cpswd" id="cpswd" class="txtBox" required>
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 txtGrp pasDv">
                                <span class="error"></span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="txtGrp">
                                    <div class="lblBtn">
                                        <input type="checkbox" name="register_as" id="register_as" required>
                                        <label for="register_as"><?= $site_content['register_as_heading'] ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="txtGrp">
                                    <div class="lblBtn">
                                        <input type="checkbox" name="confirm" id="confirm" required>
                                        <label for="confirm"><?= $site_content['accept_heading'] ?></label>
                                    </div>
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