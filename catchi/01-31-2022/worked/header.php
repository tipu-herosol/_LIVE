<header class="ease">
    <div class="contain-fluid">
        <div class="logo">
            <a href="<?= base_url() ?>">
                <img src="<?= getImageSrc(UPLOADIMAGE . "/" . $settings->site_logo) ?>" alt="">
            </a>
        </div>
        <button type="button" class="toggle"></button>
        <nav class="ease">
            <div id="nav">
                <ul id="lst">
                    <li><a href="<?= base_url() ?>#why" class="run_btn">Why CATCHI?</a></li>
                    <li><a href="<?= base_url() ?>#works" class="run_btn">How it works</a></li>
                    <li><a href="<?= base_url() ?>#social" class="run_btn">The Social</a></li>
                </ul>
                <!-- <ul id="cta">
                    <li><a target="_blank" href="<?= makeExternalUrl($settings->site_download_link) ?>" class="site_btn md long round">Download</a></li>
                </ul> -->
            </div>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->


<script>
    $(function() {
        // header fix
        offSet = $('body').offset().top;
        offSet = offSet + 5;
        $(window).scroll(function() {
            scrollPos = $(window).scrollTop();
            if (scrollPos >= offSet) {
                $('header').addClass('fix');
            } else {
                $('header').removeClass('fix');
            }
        });
    });
</script>