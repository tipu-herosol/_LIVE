<?php
$page = $this->uri->segment(1);
?>
<header class="ease">
    <div class="contain">
        <div class="logo">
            <a href="<?= site_url() ?>"><img src="<?= SITE_IMAGES . '/images/' . $site_settings->site_logo . '?v-' . $site_settings->site_version ?>" alt=""></a>
        </div>
        <div class="toggle"><span></span></div>
        <?php
        if (empty($mem_data)) {
        ?>
            <nav class="ease">
                <div nav>
                    <ul id="nav">
                        <li class="<?php if ($page == "") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= base_url() ?>"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Acceuil' : 'Home' ?></a>
                        </li>
                        <li class="<?php if ($page == "business") {
                                        echo 'active';
                                    } ?> drop">
                            <a href="#"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Entreprise' : 'Buisness' ?></a>
                            <ul class="sub">
                                <li><a href="<?= base_url() ?>about-us"><?= ($this->session->userdata('site_lang') == 'fr') ? ' À propos' : 'About Us' ?></a></li>
                                <li><a href="<?= base_url() ?>our-team"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Notre équipe' : 'Our Team' ?></a></li>
                                <li><a href="<?= base_url() ?>careers"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Emplois' : 'Career' ?></a></li>
                                <li><a href="<?= base_url() ?>impact"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Impact' : 'Impact' ?></a></li>
                                <li><a href="<?= base_url() ?>media"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Media' : 'Media' ?></a></li>
                            </ul>
                        </li>
                        <li class="<?php if ($page == "projects") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= base_url() ?>projects"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Projets' : 'Projects' ?></a>
                        </li>
                        <li class="<?php if ($page == "support") {
                                        echo 'active';
                                    } ?> drop">
                            <a href="#"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Support' : 'Support' ?></a>
                            <ul class="sub">
                                <li><a href="<?= base_url() ?>contact-us"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Contactez-nous' : 'Contact Us' ?></a></li>
                                <li><a href="<?= base_url() ?>faqs"><?= ($this->session->userdata('site_lang') == 'fr') ? ' FAQs' : 'FAQs' ?></a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul id="cta">
                        <li class="<?php if ($page == "signin") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= site_url() ?>signin"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Connexion' : 'Signin' ?></a>
                        </li>
                        <li class="<?php if ($page == "signup") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= site_url() ?>signup" class="webBtn blankBtn borderBtn icoBtn"><?= ($this->session->userdata('site_lang') == 'fr') ? ' S’inscrire' : 'Signup' ?> <img src="<?= base_url() ?>assets/images/arrow-right.svg" alt=""></a>
                        </li>
                    </ul>

                </div>
            </nav>
        <?php
        } else {
        ?>
            <nav class="ease">
                <!-- <ul id="iconBtn">
                    <li id="notiBtn">
                        <a href="<?= base_url('notifications') ?>" class="iconBtn">
                            <img src="<?= base_url() ?>assets/images/icon-bell.svg" alt="">
                            <em class="miniLbl">7</em>
                        </a>
                    </li>
                </ul> -->
                <div class="proIco dropDown">
                    <div class="dropBtn">
                        <div class="name semi"><?= $this->member->mem_fname . ' ' . $this->member->mem_lname ?></div>
                        <div class="ico"><img src="<?= get_site_image_src("members", $this->member->mem_image, 'thumb_') ?>" alt="<?= $this->member->mem_fname . ' ' . $this->member->mem_lname ?>"></div>
                    </div>
                    <div class="dropCnt">
                        <ul class="dropLst">
                            <li><a href="<?= base_url('dashboard') ?>"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Acceuil' : 'Dashboard' ?></a></li>
                            <li><a href="<?= base_url('created-projects') ?>"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Projets' : 'Projects' ?></a></li>
                            <li><a href="<?= base_url('profile-settings') ?>"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Profil' : 'Profile Settings' ?></a></li>
                            <li><a href="<?= base_url('wallet') ?>"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Portefeuille' : 'Wallet' ?></a></li>
                            <li><a href="<?= base_url('withdrawal') ?>"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Retrait' : 'Withdrawal' ?></a></li>
                            <li><a href="javascript:void(0)" id="logout"><?= ($this->session->userdata('site_lang') == 'fr') ? ' Déconnexion' : 'Logout' ?></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        <?php
        }
        ?>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->