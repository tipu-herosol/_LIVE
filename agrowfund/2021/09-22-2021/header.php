<?php
    $page=$this->uri->segment(1);
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
                    <li class="<?php if ($page == "index") {
                            echo 'active';
                        } ?>">
                        <a href="<?= WP_URL ?>">Home</a>
                    </li>
                    <li class="<?php if ($page == "business") {
                            echo 'active';
                        } ?>">
                        <a href="#">Company</a>
                    </li>
                    <li class="<?php if ($page == "projects") {
                            echo 'active';
                        } ?>">
                        <a href="<?= WP_URL ?>projects">Projets</a>
                    </li>
                    <li class="<?php if ($page == "support") {
                            echo 'active';
                        } ?>">
                        <a href="#">Support</a>
                    </li>
                </ul>
                
                <ul id="cta">
                    <li class="<?php if ($page == "signin") {
                            echo 'active';
                        } ?>">
                        <a href="<?= site_url() ?>signin">Connexion</a>
                    </li>
                    <li class="<?php if ($page == "signup") {
                            echo 'active';
                        } ?>">
                        <a href="<?= site_url() ?>signup" class="webBtn blankBtn borderBtn icoBtn">S’inscrire <img src="<?=base_url()?>assets/images/arrow-right.svg" alt=""></a>
                    </li>
                </ul>
                
            </div>
        </nav>
        <?php
                    }
                    else{
        ?>
        <nav class="ease">
            <!-- <ul id="iconBtn">
                <li id="notiBtn">
                    <a href="<?=base_url('notifications')?>" class="iconBtn">
                        <img src="<?=base_url()?>assets/images/icon-bell.svg" alt="">
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
                        <li><a href="<?=base_url('dashboard')?>">Acceuil</a></li>
                        <li><a href="<?=base_url('projects')?>">Projets</a></li>
                        <li><a href="<?=base_url('profile-settings')?>">Profil</a></li>
                        <li><a href="javascript:void(0)" id="logout">Déconnexion</a></li>
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