<main common careers>


    <section id="layer">
        <div class="contain">
            <div class="content text-center" data-aos="fade" data-aos-duration="1000">
                <h6 class="color"><?= $site_content['banner_short_title'] ?></h6>
                <h1 class="heading center"><?= $site_content['banner_title'] ?></h1>
            </div>
        </div>
    </section>
    <!-- layer -->


    <section id="careers">
        <div class="contain" data-aos="fade" data-aos-duration="1000">
            <div class="vidBlk popBtn" style="background-image: url('<?= get_site_image_src("images/", $site_content['image1']) ?>');" data-popup="video" data-store="<?= vimeo_youtube($site_content['video_code'])['code'] ?>"></div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <?= $site_content['banner_details'] ?>
                </div>
            </div>
        </div>
        <div class="popup" data-popup="video">
            <div class="tableDv">
                <div class="tableCell">
                    <div class="crosBtn"></div>
                    <div class="contain">
                        <div id="vidBlk" class="vidBlk inside">
                            <!-- <iframe src="https://www.youtube.com/embed/G3k0qlLag74"></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- careers -->


    <section id="join">
        <div class="contain">
            <div class="content" data-aos="fade" data-aos-duration="1000">
                <h6 class="color"><?= $site_content['first_short_heading'] ?></h6>
                <h1 class="heading"><?= $site_content['first_heading'] ?></h1>
                <?= $site_content['first_details'] ?>
            </div>
            <div class="flexRow flex full_height" data-aos="fade" data-aos-duration="1000">
                <?php
                if (!empty($careers)) {
                    foreach ($careers as $career) {
                ?>
                        <div class="col">
                            <div class="jobBlk">
                                <div class="icon"><img src="<?= base_url() ?>assets/images/icon-map-marker-fill.svg" alt=""></div>
                                <div class="txt">
                                    <h5><?= ($this->session->userdata('site_lang') == 'fr') ? $career->fr_title : $career->title ?></h5>
                                    <p><?= ($this->session->userdata('site_lang') == 'fr') ? $career->fr_location : $career->location ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>Aucune annonce de carrière n'a encore été ajoutée !</em></div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- join -->


    <section id="business">
        <div class="contain">
            <div class="flexRow flex">
                <div class="col col1" data-aos="fade" data-aos-duration="1000">
                    <div class="content">
                        <h6 class="color"><?= $site_content['second_short_heading'] ?></h6>
                        <h1 class="heading"><?= $site_content['second_heading'] ?></h1>
                        <?= $site_content['second_details'] ?>
                        <div class="bTn">
                            <a href="<?= $site_content['second_link_url'] ?>" class="webBtn">&nbsp; <?= $site_content['second_link_text'] ?> &nbsp;</a>
                        </div>
                    </div>
                </div>
                <div class="col col2" data-aos="fade" data-aos-duration="1000">
                    <div class="image">
                        <?php $count = 0;
                        for ($i = 2; $i <= 3; $i++) : ?>
                            <div class="fig">
                                <figure href="<?= get_site_image_src("images/", $site_content['image' . $i]) ?>" data-fancybox="business">
                                    <img src="<?= get_site_image_src("images/", $site_content['image' . $i]) ?>">
                                </figure>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- business -->


    <section id="cover">
        <div class="contain">
            <div class="inside" style="background-image: url('<?= get_site_image_src("images/", $site_content['image4']) ?>');">
                <div class="content text-center" data-aos="fade" data-aos-duration="1000">
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