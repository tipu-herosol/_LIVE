<script type="text/javascript" src="<?= base_url('assets/') ?>js/commonJs.js?v=<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/parallax.js?v=<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/lightslider.min.js?v=<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/lightgallery-all.min.js?v=<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/jquery.mousewheel.min.js?v=<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/clipboard.min.js?v=<?= $site_settings->site_version ?>"></script>


<script type="text/javascript">
    $(window).on('load', function() {

        $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            auto: true,
            loop: true,
            speed: 2500,
            pause: 8000,
            slideMargin: 0,
            // vertical: true,
            enableDrag: false,
            thumbItem: 8
        });
        $('.lightGallery').lightGallery({
            thumbnail: true
        });

        'use strict';
        $(".miniSlider").delay(500).css("opacity", "1");
    });
     var clipboard = new Clipboard('.cpybtn', {
            text: function(e) {
                var link = e.getAttribute('data-link');
                e.className += ' copied';
                // e.classList.remove("copied");
                setTimeout(function(){
                e.classList.remove("Copy URL");
                },1500)
                return link;
            }
            });
            var clipboard = new Clipboard('.cpybtn');
            clipboard.on('success', function(e) {
                console.log(e);
            });
            clipboard.on('error', function(e) {
                console.log(e);
            });
</script>
<script src="<?= base_url('assets/') ?>js/jquery.event.move.js?v=<?= $site_settings->site_version ?>"></script>
<script src="<?= base_url('assets/') ?>js/jquery.twentytwenty.js?v=<?= $site_settings->site_version ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(".partition").twentytwenty({
            default_offset_pct: 0.5,
            click_to_move: false,
            no_overlay: true

        });
    });
</script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/main.js?v=<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>?v=<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.validate.min.js') ?>?v=<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/validation.js') ?>?v=<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/custom-validation.js?v-' . $site_settings->site_version) ?>"></script>