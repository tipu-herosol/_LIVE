<?php
$page = $this->uri->segment(1);
?>
<aside data-aos="fade-left" data-aos-duration="1000">
    <div class="logo">
        <a href="<?= site_url('') ?>"><img src="<?= SITE_IMAGES . '/images/' . $site_settings->site_logo . '?v-' . $site_settings->site_version ?>" alt=""></a>
    </div>
    <div class="toggle"><span></span></div>
    <div class="inside">
        <ul>
            <li class="<?php if ($page == "dashboard") {
                            echo 'active';
                        } ?>">
                <a href="<?= site_url('dashboard') ?>">
                    <img src="<?= base_url() ?>assets/images/icon-home.svg" alt="">
                    <em>Acceuil</em>
                </a>
            </li>
            <li class="<?php if ($page == "created-projects") {
                            echo 'active';
                        } ?>">
                <a href="<?= site_url('created-projects') ?>">
                    <img src="<?= base_url() ?>assets/images/icon-grid.svg" alt="">
                    <em>Projets</em>
                </a>
            </li>
            <li class="<?php if ($page == "historical") {
                            echo 'active';
                        } ?>">
                <a href="<?= site_url('historical') ?>">
                    <img src="<?= base_url() ?>assets/images/icon-history.svg" alt="">
                    <em>Historique</em>
                </a>
            </li>
            <li class="<?php if ($page == "favorites") {
                            echo 'active';
                        } ?>">
                <a href="<?= site_url('favorites') ?>">
                    <img src="<?= base_url() ?>assets/images/icon-heart.svg" alt="">
                    <em>Favoris</em>
                </a>
            </li>
            <li class="<?php if ($page == "profile-settings") {
                            echo 'active';
                        } ?>">
                <a href="<?= site_url('profile-settings') ?>">
                    <img src="<?= base_url() ?>assets/images/icon-user.svg" alt="">
                    <em>Profil</em>
                </a>
            </li>
            <li class="<?php if ($page == "wallet") {
                            echo 'active';
                        } ?>">
                <a href="<?= site_url('wallet') ?>">
                    <img src="<?= base_url() ?>assets/images/icon-wallet.svg" alt="">
                    <em>Portefeuille</em>
                </a>
            </li>
            <li class="<?php if ($page == "withdrawal") {
                            echo 'active';
                        } ?>">
                <a href="<?= site_url('withdrawal') ?>">
                    <img src="<?= base_url() ?>assets/images/icon-atm.svg" alt="">
                    <em>Retrait</em>
                </a>
            </li>
        </ul>
        <ul>
            <li class="<?php if ($page == "submit-a-project") {
                            echo 'active';
                        } ?>">
                <a href="<?= site_url('submit-a-project') ?>">
                    <img src="<?= base_url() ?>assets/images/icon-create.svg" alt="">
                    <em>Soumetttre un projet</em>
                </a>
            </li>
            <!-- <li class="<?php if ($page == "help-support") {
                                echo 'active';
                            } ?>">
                <a href="<?= site_url('help-support') ?>">
                    <img src="<?= base_url() ?>assets/images/icon-support.svg" alt="">
                    <em>Aide & support</em>
                </a>
            </li> -->
            <li class="<?php if ($page == "logout") {
                            echo 'active';
                        } ?>">
                <a href="javascript:void(0)" id="logout">
                    <img src="<?= base_url() ?>assets/images/icon-logout.svg" alt="">
                    <em>Déconnexion</em>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- aside -->