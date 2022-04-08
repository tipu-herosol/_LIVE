<?= $page = $this->uri->segment(1)?>
<header class="ease">
    <div class="contain">
        <div class="logo" data-aos="fade-left" data-aos-duration="1000">
            <a href="<?= base_url() ?>">
                <img src="<?= !empty($site_settings->site_logo) ? get_site_image_src("images", $site_settings->site_logo) : base_url().'assets/images/logo.svg' ?>" alt="">
            </a>
        </div>
        <button type="button" class="toggle"></button>
        <nav class="ease" data-aos="fade-right" data-aos-duration="1000">
            <div id="nav">
                <ul id="lst">
                    <li class="active">
                        <a href="#banner">Home</a>
                    </li>
                    <li class="">
                        <a href="#gallery">Gallery</a>
                    </li>
                    <li class="">
                        <a href="#merch">Merch</a>
                    </li>
                    <li class="">
                        <a href="#roadmap">RoadMap</a>
                    </li>
                    <li class="">
                        <a href="#faq">FAQ's</a>
                    </li>
                    <li class="">
                        <a href="#team">Team</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->