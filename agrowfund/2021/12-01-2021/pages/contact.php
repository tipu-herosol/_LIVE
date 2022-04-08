<main common contact>


    <section id="layer">
        <div class="contain">
            <div class="content text-center" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="heading center"><?= $site_content['banner_title'] ?></h1>
            </div>
        </div>
    </section>
    <!-- layer -->


    <section id="contact">
        <div class="contain">
            <div id="googleMap" data-aos="fade-up" data-aos-duration="1000">
                <?= $site_settings->site_contact_map ?>
            </div>
            <div class="mainRow flexRow flex">
                <div class="col col1" data-aos="fade-left" data-aos-duration="1000">
                    <div class="cardRow flexRow flex">
                        <div class="col">
                            <div class="cardBlk">
                                <div class="icon"><img src="<?= base_url() ?>assets/images/icon-map-marker-fill.svg" alt=""></div>
                                <div class="txt">
                                    <h5><?= $site_content['address_heading'] ?></h5>
                                    <span><?= $site_content['address_details'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="cardBlk">
                                <div class="icon"><img src="<?= base_url() ?>assets/images/icon-phone.svg" alt=""></div>
                                <div class="txt">
                                    <h5><?= $site_content['phone_heading'] ?></h5>
                                    <?= $site_content['phone_details'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="cardBlk">
                                <div class="icon"><img src="<?= base_url() ?>assets/images/icon-envelope.svg" alt=""></div>
                                <div class="txt">
                                    <h5><?= $site_content['email_heading'] ?></h5>
                                    <a href="mailto:<?= $site_content['email_details'] ?>"><?= $site_content['email_details'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col2" data-aos="fade-right" data-aos-duration="1000">
                    <div class="content">
                        <h1 class="heading"><?= $site_content['main_heading'] ?></h1>
                        <?= $site_content['main_details'] ?>
                    </div>
                    <form action="" method="post" id="frmContact" class="frmAjax">
                        <div class="formRow row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h6><?= $site_content['name_label'] ?></h6>
                                <div class="formRow row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="txtGrp">
                                            <label for=""><?= $site_content['fname_placeholder'] ?></label>
                                            <input type="text" name="fname" id="" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="txtGrp">
                                            <label for=""><?= $site_content['lname_placeholder'] ?></label>
                                            <input type="text" name="lname" id="" class="txtBox">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h6><?= $site_content['email_label'] ?></h6>
                                <div class="txtGrp">
                                    <label for=""><?= $site_content['email_placeholder'] ?></label>
                                    <input type="text" name="email" id="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h6><?= $site_content['phone_label'] ?></h6>
                                <div class="txtGrp">
                                    <label for=""><?= $site_content['phone_placeholder'] ?></label>
                                    <input type="text" name="phone" id="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h6><?= $site_content['question_label'] ?></h6>
                                <div class="txtGrp">
                                    <label for=""><?= $site_content['question_placeholder'] ?></label>
                                    <textarea name="msg" id="" class="txtBox"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="bTn formBtn">
                            <button type="submit" class="webBtn"><i class="spinner hidden"></i> <?= $site_content['button_label'] ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->


    <section id="cover">
        <div class="contain">
            <div class="inside" style="background-image: url('<?= get_site_image_src("images/", $site_content['image1']) ?>');">
                <div class="content text-center" data-aos="fade-down" data-aos-duration="1000">
                    <h1 class="heading center"><?= $site_content['sixth_heading'] ?></h1>
                    <div class="bTn">
                        <a href="<?= $site_content['sixth_link_url'] ?>" class="webBtn"><?= $site_content['sixth_link_text'] ?></a>
                    </div>
                </div>
            </div>
            <div class="leaf left"><img src="<?= base_url() ?>assets/images/leaf_001.svg" alt=""></div>
            <div class="leaf right"><img src="<?= base_url() ?>assets/images/leaf_002.svg" alt=""></div>
        </div>
    </section>
    <!-- cover -->


</main>