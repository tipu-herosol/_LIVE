<?php $slug = $this->uri->segment(1); ?>
<header class="ease">
    <div class="contain">
        <div class="logo">
            <a href="<?= base_url() ?>">
                <img src="<?= getImageSrc(UPLOADIMAGE . 'images/', $site_settings->site_logo) ?>" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease">
            <div id="header-nav" nav>
                <ul id="nav">
                    <li class="<?php if ($slug == "index") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="<?php if ($slug == "promotions-offers") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url('promotions-offers') ?>">Promotions & Offers</a>
                    </li>
                    <li class="<?php if ($slug == "contact") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= base_url('contact') ?>">Contact us</a>
                    </li>
                </ul>
                <?php if (empty($this->session->mem_id)) : ?>
                    <ul id="cta">
                        <li class="<?php if ($slug == "signin") {
                                        echo 'active';
                                    } ?>">
                            <?php if ($slug == 'order-booking') : ?>
                                <a href="javascript:void(0)" class="popBtn" data-popup="signin">Sign in</a>
                            <?php else : ?>
                                <a href="<?= base_url() ?>signin">Sign in</a>
                            <?php endif; ?>
                        </li>
                        <li class="<?php if ($slug == "signup") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= base_url() ?>signup-as" class="webBtn mdBtn simpleBtn">Sign up</a>
                        </li>
                    </ul>
                <?php else : ?>
            </div>
            <div class="proIco dropDown">
                <div class="ico dropBtn"><img src="<?= get_site_image_src("members", $mem_data->mem_image, 'thumb_'); ?>" alt=""></div>
                <div class="proDrop dropCnt">
                    <ul class="dropLst">
                        <li><a href="<?= base_url() . $this->session->mem_type ?>/dashboard">Dashboard <small>See and Manage Data</small></a></li>
                        <li><a href="<?= base_url() . $this->session->mem_type ?>/orders">My Orders <small>View Order Details</small></a></li>
                        <?php if ($this->session->mem_type == 'vendor') : ?>
                            <li><a href="<?= base_url() ?>vendor/wallet">My Earnings <small>See & Mange Your Earnings</small></a></li>
                        <?php else : ?>
                            <li><a href="<?= base_url() ?>buyer/transactions">My Transactions <small>See & Mange Your Payouts</small></a></li>
                        <?php endif; ?>
                        <li><a href="<?= base_url() ?>index/logout">Sign out</a></li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->

<!-- 
<div class="upperlay"></div>
<div id="pageloader">
    <span class="loader"></span>
</div> -->