<main common about>


        <section id="layer">
            <div class="contain">
                <div class="content text-center">
                    <h6 class="color"><?= $site_content['banner_short_title'] ?></h6>
                    <h1 class="heading center"><?= $site_content['banner_title'] ?></h1>
                </div>
            </div>
        </section>
        <!-- layer -->


        <section id="about">
            <div class="contain">
                <div class="vidBlk popBtn" style="background-image: url('<?=get_site_image_src("images/", $site_content['image1'])?>');" data-popup="video" data-store="<?= vimeo_youtube($site_content['video_code'])['code'] ?>"></div>
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
        <!-- about -->


        <section id="blocks">
            <div class="contain">
                <div class="flexRow flex">
                <?php for($i = 1; $i <= 2; $i++):?>
                    <div class="col">
                        <div class="content">
                            <h1 class="heading"><?= $site_content['section1_heading'.$i] ?></h1>
                            <p><?= $site_content['section1_text'.$i] ?></p>
                        </div>
                    </div>
                <?php endfor; ?>    
                </div>
            </div>
        </section>
        <!-- blocks -->


        <section id="why">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="image">
                        <?php $count=0; for($i = 2; $i <= 3; $i++):?>
                            <div class="fig">
                                <figure href="<?=get_site_image_src("images/", $site_content['image'.$i])?>" data-fancybox="why">
                                    <img src="<?=get_site_image_src("images/", $site_content['image'.$i])?>">
                                </figure>
                            </div>
                        <?php endfor; ?>    
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="content">
                            <h6 class="color"><?= $site_content['second_short_heading'] ?></h6>
                            <h1 class="heading"><?= $site_content['second_heading'] ?></h1>
                            <?= $site_content['second_details'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- why -->


        <section id="cover">
            <div class="contain">
                <div class="inside" style="background-image: url('<?=get_site_image_src("images/", $site_content['image4'])?>');">
                    <div class="content text-center">
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