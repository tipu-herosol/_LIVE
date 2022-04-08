<main common terms>


    <section id="layer">
        <div class="contain">
            <div class="content text-center" data-aos="fade" data-aos-duration="1000">
                <h6 class="color"><?= $site_content['banner_short_title'] ?></h6>
                <h1 class="heading center"><?= $site_content['banner_title'] ?></h1>
            </div>
        </div>
    </section>
    <!-- layer -->


    <section id="terms">
        <div class="contain">
            <div class="blk ckEditor" data-aos="fade" data-aos-duration="1000">
                <?= $site_content['details'] ?>
            </div>
        </div>
    </section>
    <!-- terms -->


    <section id="cover">
        <div class="contain">
            <div class="inside" style="background-image: url('<?= get_site_image_src("images/", $site_content['image1']) ?>');">
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