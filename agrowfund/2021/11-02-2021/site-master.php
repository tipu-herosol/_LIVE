<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <?php
        $page_title = empty($site_content['page_title']) ? $page_title." - ".$site_settings->site_name : $site_content['page_title'] . ' - ' . $site_settings->site_name;
        $meta_description = empty($site_content['meta_description']) ? $site_settings->site_meta_desc : $site_content['meta_description'];
        $meta_keywords = empty($site_content['meta_keywords']) ? $site_settings->site_meta_keyword : $site_content['meta_keywords'];
        $meta_image = empty($site_content['meta_image']) ? SITE_IMAGES . '/images/' . $site_settings->site_thumb . '?v-' . $site_settings->site_version : $site_content['meta_image'];
        ?>
        <meta name="title" content="<?= $page_title ?>">
        <meta name="description" content="<?= $meta_description ?>">
        <meta name="keywords" content="<?= $meta_keywords ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?= currentURL() ?>">
        <meta property="og:title" content="<?= $page_title ?>">
        <meta property="og:description" content="<?= $meta_description ?>">
        <meta property="og:image" content="<?= $meta_image ?>">
        <meta property="twitter:card" content="thumbnail">
        <meta property="twitter:url" content="<?= currentURL() ?>">
        <meta property="twitter:title" content="<?= $page_title ?>">
        <meta property="twitter:description" content="<?= $meta_description ?>">
        <meta property="twitter:image" content="<?= $meta_image ?>">
<!-- Css files -->
<!-- Bootstrap Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css?v-<?=$site_settings->site_version?>">
<!-- App Scss -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/app.min.css?v-<?=$site_settings->site_version?>">
<!-- Owl Carousel Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css?v-<?=$site_settings->site_version?>">
<!-- Owl Theme Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css?v-<?=$site_settings->site_version?>">
<!-- Fancybox Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/fancybox.min.css?v-<?=$site_settings->site_version?>">
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/custom.css?v-<?=$site_settings->site_version?>">
<!-- Datepicker Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/datepicker.min.css?v-<?=$site_settings->site_version?>">
<!-- Font-Icon Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/font-icon.min.css?v-<?=$site_settings->site_version?>">


        <!-- Toaster Css -->
        <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/toastr.min.css?v-<?=$site_settings->site_version?>">
        <title><?= $page_title  ?></title>
        <script src="https://js.stripe.com/v3/"></script>
        <!-- JS Files -->
        <script type="text/javascript">
            var base_url = "<?= base_url() ?>";
            var api_key = "<?= $site_settings->site_stripe_type == 1 ? $site_settings->site_stripe_testing_api_key : $site_settings->site_stripe_live_api_key ; ?>";
            var stripe = Stripe('<?= $site_settings->site_stripe_type == 1 ? $site_settings->site_stripe_testing_api_key : $site_settings->site_stripe_live_api_key ; ?>');
        </script>
        
        <!-- Favicon -->
        <link type="image/png" rel="icon" href="<?= SITE_IMAGES . '/images/' . $site_settings->site_icon . '?v-' . $site_settings->site_version ?>">
    </head>
    <body id="home-page">
	<?php
            if($page_404!=true && $loggedHeader==true){
            	$this->load->view('includes/header-log');
            }
            else if($page_404!=true){
                    $this->load->view('includes/header');
            }		    
    ?>
    <?php echo showMsg(); ?>
        <?php $this->load->view($pageView); ?>
    <?php
    if($page_404!=true && $footer==true)
		$this->load->view('includes/footer');
	?>
    <?php
    if($script==true)
		$this->load->view('includes/scripts');
	?>
    
    </body>
</html>