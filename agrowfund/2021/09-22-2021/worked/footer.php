<footer>
    <div class="contain">
        <div class="flexRow">
            <div class="col">
                <div class="footerLogo">
                    <a href="index.php">
                        <img src="<?= SITE_IMAGES . '/images/' . $site_settings->site_logo . '?v-' . $site_settings->site_version ?>" alt="">
                    </a>
                </div>
                <p class="small"><?= $site_settings->site_about ?></p>
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
                    <li><a href="<?= WP_URL ?>about-us">À propos</a></li>
                    <li><a href="<?= WP_URL ?>our-team">Notre équipe</a></li>
                    <li><a href="<?= WP_URL ?>careers">Emplois</a></li>
                    <li><a href="<?= WP_URL ?>impact">Impact</a></li>
                    <li><a href="<?= WP_URL ?>media">Media</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>Liens utiles</h4>
                <ul class="lst">
                    <li><a href="<?= WP_URL ?>contact-us">Contactez-nous</a></li>
                    <li><a href="<?= WP_URL ?>faqs">FAQs</a></li>
                    <li><a href="<?= WP_URL ?>privacy-policy">Privacy Policy</a></li>
                    <li><a href="<?= WP_URL ?>terms-and-conditions">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>Téléchargement</h4>
                <p class="small">Téléchargez l'app AgrowFund</p>
                <ul class="playStore">
                    <li><a href="?" target="_blank"><img src="<?= base_url() ?>assets/images/google-play-store.svg" alt=""></a></li>
                    <li><a href="?" target="_blank"><img src="<?= base_url() ?>assets/images/apple-app-store.svg" alt=""></a></li>
                </ul>
            </div>
        </div>
        <div class="copyright relative">
            <div class="inner">
                <ul class="smLst flex">
                    <li><a href="<?= WP_URL ?>privacy-policy">Privacy Policy</a></li>
                    <li><a href="<?= WP_URL ?>terms-and-conditions">Terms & Conditions</a></li>
                </ul>
                <p>Copyright © <?= date('Y') ?> <a href="<?= WP_URL ?>"><?= $site_settings->site_name ?></a>. Tous droits réservés.</p>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->
<?php
$this->load->view('includes/scripts');
?>