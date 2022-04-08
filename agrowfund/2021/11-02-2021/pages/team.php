<main common team>


        <section id="layer">
            <div class="contain">
                <div class="content text-center">
                    <h6 class="color"><?= $site_content['banner_short_title'] ?></h6>
                    <h1 class="heading center"><?= $site_content['banner_title'] ?></h1>
                </div>
            </div>
        </section>
        <!-- layer -->


        <section id="team">
            <div class="contain">
                <!-- <div class="imgBlk vidBlk" style="background-image: url('images/banner_08.jpg');"></div> -->
                <a href="<?=get_site_image_src("images/", $site_content['image1'])?>" class="imgBlk vidBlk" data-fancybox="team">
                    <img src="<?=get_site_image_src("images/", $site_content['image1'])?>">
                </a>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <?= $site_content['banner_details'] ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- team -->

        <?php
            if (!empty($leaders)) {
                ?>
        <section id="member">
            <div class="contain">
                <div class="content">
                    <h1 class="heading"><?= $site_content['first_heading'] ?></h1>
                    <?= $site_content['first_details'] ?>
                </div>
                <div class="flexRow flex full_height">
                    <?php
                        foreach ($leaders as $leader) {
                            ?>
                    <div class="col">
                        <div class="teamBlk">
                            <div class="image" href="<?= get_site_image_src('team', $leader->image, 'thumb_', true); ?>" data-fancybox="member">
                                <img src="<?= get_site_image_src('team', $leader->image, 'thumb_', true); ?>" alt="">
                            </div>
                            <div class="txt">
                                <h5><?=$leader->name?></h5>
                                <p><?=($this->session->userdata('site_lang')=='fr') ? $leader->fr_designation : $leader->designation?></p>
                                <ul class="socialLnk flex">
                                    <?php
                                        if (!empty($leader->facebook)) {
                                            ?>
                                    <li>
                                        <a href="<?=$leader->facebook?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-facebook.svg" alt=""></a>
                                    </li>
                                    <?php
                                        }
                                        if (!empty($leader->twitter)) {
                                    ?>
                                    <li>
                                        <a href="<?=$leader->twitter?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-instagram.svg" alt=""></a>
                                    </li>
                                    <?php
                                        }
                                        if (!empty($leader->linkedin)) {
                                    ?>
                                    <li>
                                        <a href="<?=$leader->linkedin?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-linkedin.svg" alt=""></a>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        <!-- member -->
        <?php
            }
        ?>
        <?php
            if (!empty($directors)) {
                ?>
        <section id="founder">
            <div class="contain">
                <h1 class="heading"><?= $site_content['second_heading'] ?></h1>
                <div class="flexRow flex full_height">
                <?php
                        foreach ($directors as $director) {
                            ?>
                    <div class="col">
                        <div class="teamBlk">
                            <div class="image" href="<?= get_site_image_src('team', $director->image, 'thumb_', true); ?>" data-fancybox="member">
                                <img src="<?= get_site_image_src('team', $director->image, 'thumb_', true); ?>" alt="">
                            </div>
                            <div class="txt">
                                <h5><?=$director->name?></h5>
                                <p><?=($this->session->userdata('site_lang')=='fr') ? $director->fr_designation : $director->designation?></p>
                                <ul class="socialLnk flex">
                                    <?php
                                        if (!empty($director->facebook)) {
                                            ?>
                                    <li>
                                        <a href="<?=$director->facebook?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-facebook.svg" alt=""></a>
                                    </li>
                                    <?php
                                        }
                            if (!empty($director->twitter)) {
                                ?>
                                    <li>
                                        <a href="<?=$director->twitter?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-instagram.svg" alt=""></a>
                                    </li>
                                    <?php
                            }
                            if (!empty($director->linkedin)) {
                                ?>
                                    <li>
                                        <a href="<?=$director->linkedin?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-linkedin.svg" alt=""></a>
                                    </li>
                                    <?php
                            } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                        } ?>
                </div>
            </div>
        </section>
        <?php
            }
            if (!empty($advisers)) {
                ?>
        <!-- member -->
        <section id="founder">
            <div class="contain">
                <h1 class="heading"><?= $site_content['third_heading'] ?></h1>
                <div class="flexRow flex full_height">
                <?php
                        foreach ($advisers as $adviser) {
                            ?>
                    <div class="col">
                        <div class="teamBlk">
                            <div class="image" href="<?= get_site_image_src('team', $adviser->image, 'thumb_', true); ?>" data-fancybox="member">
                                <img src="<?= get_site_image_src('team', $adviser->image, 'thumb_', true); ?>" alt="">
                            </div>
                            <div class="txt">
                                <h5><?=$adviser->name?></h5>
                                <p><?=($this->session->userdata('site_lang')=='fr') ? $adviser->fr_designation : $adviser->designation?></p>
                                <ul class="socialLnk flex">
                                    <?php
                                        if (!empty($adviser->facebook)) {
                                            ?>
                                    <li>
                                        <a href="<?=$adviser->facebook?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-facebook.svg" alt=""></a>
                                    </li>
                                    <?php
                                        }
                            if (!empty($adviser->twitter)) {
                                ?>
                                    <li>
                                        <a href="<?=$adviser->twitter?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-instagram.svg" alt=""></a>
                                    </li>
                                    <?php
                            }
                            if (!empty($adviser->linkedin)) {
                                ?>
                                    <li>
                                        <a href="<?=$adviser->linkedin?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-linkedin.svg" alt=""></a>
                                    </li>
                                    <?php
                            } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                        } ?>
                </div>
            </div>
        </section>
        <!-- member -->
        <?php
            }
        ?>
         <section id="member">
            <div class="contain">
                <?php
                    if (!empty($advisers) && !empty($leaders) && !empty($directors)) {
                        ?>
                                <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>Aucune équipe ajoutée pour le moment !</em></div>
                <?php
                    }
                ?>
            </div>
         </section>
         <section id="cover">
            <div class="contain">
                <div class="inside" style="background-image: url('<?=get_site_image_src("images/", $site_content['image2'])?>');">
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