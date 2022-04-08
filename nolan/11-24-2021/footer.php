<footer>
    <div class="contain text-center" data-aos="fade-down" data-aos-duration="1000">
        <div class="logo"><a href="<?= base_url() ?>"><img src="<?= !empty($site_settings->site_logo) ? get_site_image_src("images", $site_settings->site_logo) : base_url().'assets/images/logo.svg' ?>" alt=""></a></div>
        <ul class="social_links">
            <li><a target="_blank" href="<?=$site_settings->site_twitter?>"><img src="<?= base_url() ?>assets/images/Twitter.svg" alt=""></a></li>
            <li><a target="_blank" href="<?=$site_settings->site_telegram?>"><img src="<?= base_url() ?>assets/images/Telegram.svg" alt=""></a></li>
            <li><a target="_blank" href="<?=$site_settings->site_traced?>"><img src="<?= base_url() ?>assets/images/Traced.svg" alt=""></a></li>
            <li><a target="_blank" href="<?=$site_settings->site_subtract?>"><img src="<?= base_url() ?>assets/images/Subtract.svg" alt=""></a></li>
            <li><a target="_blank" href="<?=$site_settings->site_discord?>"><img src="<?= base_url() ?>assets/images/Discord.svg" alt=""></a></li>
        </ul>
        <p><?=$site_settings->site_copyright?></p>
    </div>
</footer>
<!-- footer -->


<!-- Main Js -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/main.js"></script>
<script type="text/javascript">
    $(window).on("load", function() {
        // AOS Js
        AOS.init({
            easing: "ease-in-out-sine",
            offset: 10,
            disable: window.innerWidth <= 991
        });
    });
</script>