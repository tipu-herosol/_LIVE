<main common faq>


        <section id="layer">
            <div class="contain">
                <div class="content text-center">
                    <h6 class="color"><?= $site_content['banner_short_title'] ?></h6>
                    <h1 class="heading center"><?= $site_content['banner_title'] ?></h1>
                </div>
            </div>
        </section>
        <!-- layer -->


        <section id="faq">
            <div class="contain">
                <!-- <div class="vidBlk imgBlk" style="background-image: url('images/banner_05.jpg');"></div> -->
                <a href="<?=get_site_image_src("images/", $site_content['image1'])?>" class="vidBlk imgBlk" data-fancybox="faq">
                    <img src="<?=get_site_image_src("images/", $site_content['image1'])?>">
                </a>
                <div class="faqBox">
                    <div class="faqLst">
                        <?php
                            if (!empty($faqs)) {
                                foreach ($faqs as $faq) {
                                    ?>
                        <div class="faqBlk">
                            <h5><?= ($this->session->userdata('site_lang')=='fr') ? $faq->fr_question : $faq->question ?></h5>
                            <div class="txt">
                                <?= ($this->session->userdata('site_lang')=='fr') ? $faq->fr_answer : $faq->answer ?>
                            </div>
                        </div>
                        <?php
                                }
                            }
                            else{
                        ?>
                                <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>aucune faq trouvée !</em></div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq -->


        <section id="touch" style="background-image: url('<?=get_site_image_src("images/", $site_content['image2'])?>');">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="image">
                        <?php $count=0; for($i = 3; $i <= 4; $i++):?>
                            <div class="fig">
                                <figure href="<?=get_site_image_src("images/", $site_content['image'.$i])?>" data-fancybox="touch">
                                    <img src="<?=get_site_image_src("images/", $site_content['image'.$i])?>">
                                </figure>
                            </div>
                        <?php endfor; ?>    
                        </div>
                    </div>
                    <div class="col col2">
                        <h1 class="heading"><?= $site_content['second_heading'] ?></h1>
                        <form action="" method="post" class="frmAjax">
                            <div class="formRow row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <h6><?= $site_content['second_name_label'] ?></h6>
                                    <div class="txtGrp">
                                        <label for="name"><?= $site_content['second_name_placeholder'] ?></label>
                                        <input type="text" name="name" id="name" class="txtBox"required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <h6><?= $site_content['second_email_label'] ?></h6>
                                    <div class="txtGrp">
                                        <label for="email"><?= $site_content['second_email_placeholder'] ?></label>
                                        <input type="text" name="email" id="email" class="txtBox" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h6><?= $site_content['second_question_label'] ?></h6>
                                    <div class="txtGrp">
                                        <label for="question"><?= $site_content['second_question_placeholder'] ?></label>
                                        <textarea name="question" id="question" class="txtBox" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="bTn formBtn">
                                <button type="submit" class="webBtn"><i class="spinner hidden"></i> <?= $site_content['second_button_label'] ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- touch -->


        <section id="cover">
            <div class="contain">
                <div class="inside" style="background-image: url('<?=get_site_image_src("images/", $site_content['image5'])?>');">
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
