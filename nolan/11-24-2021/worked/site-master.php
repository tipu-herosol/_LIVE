<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="title" content="Nolan">
<meta name="description" content="Discover Digital Artwork and Collect NFT">
<meta property="og:type" content="website">
<meta property="og:url" content="index.php">
<meta property="og:title" content="Nolan">
<meta property="og:description" content="Discover Digital Artwork and Collect NFT">
<meta property="og:image" content="images/thumbnail.jpg">
<meta property="twitter:card" content="thumbnail">
<meta property="twitter:url" content="index.php">
<meta property="twitter:title" content="Nolan">
<meta property="twitter:description" content="Discover Digital Artwork and Collect NFT">
<meta property="twitter:image" content="images/thumbnail.jpg">


<!-- Css files -->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/app.min.css">
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/fancybox.min.css">
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/animation.min.css">
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/countdown.css">


<!-- JS Files -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/fancybox.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/animation.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.countdown.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/lodash.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/lazyload.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("img.lazy").lazyload();
    });

    $(document).ready(function() {
        $(document).on("scroll", onScroll);

        //smoothscroll
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            $(document).off("scroll");

            $('a').each(function() {
                $(this).removeClass('active');
            })

            $(this).addClass('active');

            var target = this.hash,
                menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top + 2
            }, 500, 'swing', function() {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });

    function onScroll(event) {
        let scrollPos = $(document).scrollTop();
        $('ul#lst li a').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            currLink = $(this).parent();
            if (parseInt(refElement.position().top - 30) <= scrollPos && parseInt(refElement.position().top) + parseInt(refElement.height()) > scrollPos) {
                $('ul#lst li').removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    }
</script>
<script type="text/template" id="main-example-template">
    <div class="time <%= label %>">
        <span class="count curr top"><%= curr %></span>
        <span class="count next top"><%= next %></span>
        <span class="count next bottom"><%= next %></span>
        <span class="count curr bottom"><%= curr %></span>
        <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
    </div>
</script>

<style>
    header.fix {
        background: #000;
        top: 0;
        position: fixed;
    }
</style>
<!-- Favicon -->
<link type="image/png" rel="icon" href="<?= !empty($site_settings->site_icon) ? get_site_image_src("images", $site_settings->site_icon) : base_url() . 'assets/images/favicon.svg' ?>">