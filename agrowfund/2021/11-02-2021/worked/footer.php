<footer>
    <div class="contain">
        <div class="flexRow" data-aos="fade-up" data-aos-duration="1000">
            <div class="col">
                <div class="footerLogo">
                    <a href="index.php">
                        <img src="<?= SITE_IMAGES . '/images/' . $site_settings->site_logo . '?v-' . $site_settings->site_version ?>" alt="">
                    </a>
                </div>
                <p class="small"><?= ($this->session->userdata('site_lang') == 'fr') ? $site_settings->site_about_fr : $site_settings->site_about ?></p>
                <!-- <form action="" method="post">
                    <div class="inside">
                        <div class="txtGrp">
                            <label for="">Entrez votre email</label>
                            <input type="text" name="" id="" class="txtBox">
                        </div>
                        <div class="bTn">
                            <button type="submit" class="webBtn">S’abonner</button>
                        </div>
                    </div>
                </form> -->
                <ul class="social">
                    <?php
                    if (!empty($site_settings->site_facebook)) {
                    ?>
                        <li><a href="<?= $site_settings->site_facebook ?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-facebook.svg" alt=""></a></li>
                    <?php
                    }
                    if (!empty($site_settings->site_twitter)) {
                    ?>
                        <li><a href="<?= $site_settings->site_twitter ?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-twitter.svg" alt=""></a></li>
                    <?php
                    }
                    if (!empty($site_settings->site_instagram)) {
                    ?>
                        <li><a href="<?= $site_settings->site_instagram ?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-instagram.svg" alt=""></a></li>
                    <?php
                    }
                    if (!empty($site_settings->site_linkedin)) {
                    ?>
                        <li><a href="<?= $site_settings->site_linkedin ?>" target="_blank"><img src="<?= base_url() ?>assets/images/social-linkedin.svg" alt=""></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="col">
                <h4>Entreprise</h4>
                <ul class="lst">
                    <li><a href="<?= base_url() ?>about-us"><?= ($this->session->userdata('site_lang') == 'fr') ? ' À propos' : 'About Us' ?></a></li>
                    <li><a href="<?= base_url() ?>our-team"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Notre équipe' : 'Our Team' ?></a></li>
                    <li><a href="<?= base_url() ?>careers"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Emplois' : 'Career' ?></a></li>
                    <li><a href="<?= base_url() ?>impact"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Impact' : 'Impact' ?></a></li>
                    <li><a href="<?= base_url() ?>media"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Media' : 'Media' ?></a></li>
                </ul>
            </div>
            <div class="col">
                <h4>Liens utiles</h4>
                <ul class="lst">
                    <li><a href="<?= base_url() ?>contact-us"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Contactez-nous' : 'Contact Us' ?></a></li>
                    <li><a href="<?= base_url() ?>faqs"><?= ($this->session->userdata('site_lang') == 'fr') ? ' FAQs' : 'FAQs' ?></a></li>
                    <li><a href="<?= base_url() ?>privacy-policy"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Politique de confidentialité' : 'Privacy Policy' ?></a></li>
                    <li><a href="<?= base_url() ?>terms-and-conditions"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Termes et conditions' : 'Terms and conditions' ?></a></li>
                </ul>
            </div>
            <div class="col">
                <h4><?= ($this->session->userdata('site_lang') == 'fr') ? ' Téléchargement' : 'Download' ?></h4>
                <p class="small"> <?= ($this->session->userdata('site_lang') == 'fr') ? "Téléchargez l'app AgrowFund" : 'Download the AgrowFund app' ?></p>
                <ul class="playStore">
                    <li><a href="?" target="_blank"><img src="<?= base_url() ?>assets/images/google-play-store.svg" alt=""></a></li>
                    <li><a href="?" target="_blank"><img src="<?= base_url() ?>assets/images/apple-app-store.svg" alt=""></a></li>
                </ul>
                <!-- <div class="dropDown footerDrop" style="margin-top:20px">
                    <h4><?= ($this->session->userdata('site_lang') == 'fr') ? ' changer de langue' : 'Change Language' ?></h4>
                    <div class="inside dropBtn">
                        <a href="javascript:void(0)">
                            <div class="flex">
                                <?php
                                if ($this->session->userdata('site_lang') == 'fr') {
                                ?>
                                    <img src="<?= base_url() ?>assets/images/flag-fr.png"> François
                                <?php
                                } else {
                                ?>
                                    <img src="<?= base_url() ?>assets/images/flag-en.png"> English
                                <?php
                                }
                                ?>
                            </div>
                        </a>
                    </div>
                    <ul class="proDrop dropCnt">
                        <?php
                        if ($this->session->userdata('site_lang') == 'fr') {
                        ?>
                            <li>
                                <a href="<?= base_url('index/selectLang/fr') ?>">
                                    <img src="<?= base_url() ?>assets/images/flag-fr.png"> François
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('index/selectLang/eng') ?>">
                                    <img src="<?= base_url() ?>assets/images/flag-en.png"> English
                                </a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li>
                                <a href="<?= base_url('index/selectLang/eng') ?>">
                                    <img src="<?= base_url() ?>assets/images/flag-en.png"> English
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('index/selectLang/fr') ?>">
                                    <img src="<?= base_url() ?>assets/images/flag-fr.png"> François
                                </a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div> -->
            </div>
        </div>
        <div class="copyright relative" data-aos="fade-down" data-aos-duration="1000">
            <div class="inner">
                <!-- <ul class="smLst flex">
                    <li><a href="<?= base_url() ?>privacy-policy"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Politique de confidentialité' : 'Privacy Policy' ?></a></li>
                    <li><a href="<?= base_url() ?>terms-and-conditions"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Termes et conditions' : 'Terms and conditions' ?></a></li>
                </ul> -->
                <p><?= ($this->session->userdata('site_lang') == 'fr') ? $site_settings->site_copyright_fr : $site_settings->site_copyright ?></p>
                <div class="dropDown langDrop">
                    <button type="button" class="webBtn smBtn simpleBtn borderBtn dropBtn">
                        <?php
                        if ($this->session->userdata('site_lang') == 'fr') {
                        ?>
                            <img src="<?= base_url() ?>assets/images/flag-fr.png"> François
                        <?php
                        } else {
                        ?>
                            <img src="<?= base_url() ?>assets/images/flag-en.png"> English
                        <?php
                        }
                        ?>
                    </button>
                    <ul class="dropCnt dropLst select">
                        <?php
                        if ($this->session->userdata('site_lang') == 'fr') {
                        ?>
                            <li>
                                <a href="<?= base_url('index/selectLang/fr') ?>">
                                    <img src="<?= base_url() ?>assets/images/flag-fr.png"> François
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('index/selectLang/eng') ?>">
                                    <img src="<?= base_url() ?>assets/images/flag-en.png"> English
                                </a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li>
                                <a href="<?= base_url('index/selectLang/eng') ?>">
                                    <img src="<?= base_url() ?>assets/images/flag-en.png"> English
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('index/selectLang/fr') ?>">
                                    <img src="<?= base_url() ?>assets/images/flag-fr.png"> François
                                </a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->


<?php $this->load->view('includes/scripts'); ?>