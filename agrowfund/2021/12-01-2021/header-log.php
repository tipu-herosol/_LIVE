<header class="ease">
    <div class="contain-fluid">
        <nav class="ease">
           <!--  <ul id="iconBtn">
                <li id="notiBtn">
                    <a href="notifications.php" class="iconBtn">
                        <img src="images/icon-bell.svg" alt="">
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
                            <li><a href="<?= base_url('dashboard') ?>"><?=($this->session->userdata('site_lang')=='fr') ?' Acceuil' : 'Dashboard' ?></a></li>
                            <li><a href="<?= base_url('created-projects') ?>"><?=($this->session->userdata('site_lang')=='fr') ?' Projets' : 'Projects' ?></a></li>
                            <li><a href="<?= base_url('profile-settings') ?>"><?=($this->session->userdata('site_lang')=='fr') ?' Profil' : 'Profile Settings' ?></a></li>
                            <li><a href="<?= base_url('wallet') ?>"><?=($this->session->userdata('site_lang')=='fr') ?' Portefeuille' : 'Wallet' ?></a></li>
                            <li><a href="<?= base_url('withdrawal') ?>"><?=($this->session->userdata('site_lang')=='fr') ?' Retrait' : 'Withdrawal' ?></a></li>
                            <li><a href="javascript:void(0)" id="logout"><?=($this->session->userdata('site_lang')=='fr') ?' Déconnexion' : 'Logout' ?></a></li>
                        </ul>
                    </div>
                </div>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->