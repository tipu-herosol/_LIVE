<main common media>


    <section id="layer">
        <div class="contain">
            <div class="content text-center" data-aos="fade-down" data-aos-duration="1000">
                <h6 class="color"><?= $site_content['banner_short_title'] ?></h6>
                <h1 class="heading center"><?= $site_content['banner_title'] ?></h1>
            </div>
        </div>
    </section>
    <!-- layer -->


    <section id="media">
        <div class="contain" data-aos="fade-up" data-aos-duration="1000">
            <!-- <div class="vidBlk imgBlk" style="background-image: url('images/banner_03.jpg');"></div> -->
            <a href="<?= get_site_image_src("images/", $site_content['image1']) ?>" class="vidBlk imgBlk" data-fancybox="media">
                <img src="<?= get_site_image_src("images/", $site_content['image1']) ?>">
            </a>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <?= $site_content['banner_details'] ?>
                </div>
            </div>
        </div>
    </section>
    <!-- media -->


    <section id="results">
        <div class="contain">
            <div class="content text-center" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="heading center"><?= $site_content['first_heading'] ?></h1>
                <ul class="tabLst flex">
                    <li class="active"><a data-toggle="tab" href="#Awards"><?= $site_content['first_tab_heading1'] ?></a></li>
                    <li><a data-toggle="tab" href="#Photos"><?= $site_content['first_tab_heading2'] ?></a></li>
                    <li><a data-toggle="tab" href="#Videos"><?= $site_content['first_tab_heading3'] ?></a></li>
                </ul>
            </div>
            <div class="tab-content" data-aos="fade-up" data-aos-duration="1000">
                <div id="Awards" class="tab-pane fade in active">
                    <div class="awardRow flexRow flex full_height">
                        <?php
                        if (!empty($posts)) {
                            foreach ($posts as $post) {
                        ?>
                                <div class="col">
                                    <div class="awardBlk">
                                        <div class="ico"><img src="<?= get_site_image_src('media', $post->post_image, 'thumb_', true); ?>" alt=""></div>
                                        <div class="txt">
                                            <h5><?= ($this->session->userdata('site_lang') == 'fr') ? $post->fr_post_title : $post->post_title; ?></h5>
                                            <?= ($this->session->userdata('site_lang') == 'fr') ? $post->fr_post_details : $post->post_details ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>aucun média de publication trouvé !</em></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div id="Photos" class="tab-pane fade">
                    <div class="photoRow flexRow flex" masonary_parent>
                        <?php
                        if (!empty($images)) {
                            foreach ($images as $image) {
                        ?>
                                <div class="col" masonary>
                                    <a href="<?= get_site_image_src('media', $image->image, 'thumb_', true); ?>" class="image" data-fancybox="gallery">
                                        <img src="<?= get_site_image_src('media', $image->image, 'thumb_', true); ?>" alt="">
                                    </a>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>aucun support d'image trouvé !</em></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div id="Videos" class="tab-pane fade">
                    <div class="videoRow flexRow flex full_height">
                        <?php
                        if (!empty($videos)) {
                            foreach ($videos as $video) {
                        ?>
                                <div class="col">
                                    <div class="projBlk clm">
                                        <div class="fig">
                                            <div class="image">
                                                <img src="<?= get_site_image_src('media', $video->video_poster, 'thumb_', true); ?>" alt="">
                                            </div>
                                            <div class="playBlk popBtn" data-popup="video" data-store="<?= get_site_video('media', $video->video_file) ?>"></div>
                                        </div>
                                        <div class="txt">
                                            <h5><?= ($this->session->userdata('site_lang') == 'fr') ? $video->fr_video_title : $video->video_title ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>aucun média vidéo trouvé !</em></div>
                        <?php
                        }
                        ?>
                    </div>
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
    <!-- results -->


    <section id="business">
        <div class="contain">
            <div class="flexRow flex">
                <div class="col col1" data-aos="fade-left" data-aos-duration="1000">
                    <div class="content">
                        <h6 class="color"><?= $site_content['second_short_heading'] ?></h6>
                        <h1 class="heading"><?= $site_content['second_heading'] ?></h1>
                        <?= $site_content['second_details'] ?>
                        <div class="bTn">
                            <a href="<?= $site_content['second_link_url'] ?>" class="webBtn"><?= $site_content['second_link_text'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col col2" data-aos="fade-right" data-aos-duration="1000">
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