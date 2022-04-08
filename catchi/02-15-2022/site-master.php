<?php
$page = substr(basename($_SERVER['PHP_SELF']), 0, -4);
if ($_SERVER['HTTP_HOST'] != 'localhost') {
    $base_url = "https://www.herosolutions.com.pk/sadaan/catchi_new/";
} else {
    $base_url = "http://localhost/catchi-design/";
}
?>

<title><?= $page_title  ?> - <?= $settings->site_name ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="title" content="<?= $meta_title; ?>">
<meta name="description" content="<?= $meta_description; ?>">
<meta name="keywords" content="<?= $meta_keywords; ?>">
<meta property="og:type" content="<?= $settings->site_name ?>">
<meta property="og:url" content="<?= base_url() ?>">
<meta property="og:title" content="<?= $page_title  ?>">
<meta property="og:description" content="<?= $meta_description; ?>">
<meta property="og:image" content="<?= getImageSrc(UPLOADIMAGE . "/" . $meta_desc->og_image) ?>">
<meta property="twitter:card" content="thumbnail">
<meta property="twitter:url" content="<?= base_url() ?>">
<meta property="twitter:title" content="<?= $page_title  ?>">
<meta property="twitter:description" content="<?= $meta_description; ?>">
<meta property="twitter:image" content="<?= getImageSrc(UPLOADIMAGE . "/" . $meta_desc->twitter_image) ?>">


<!-- Css Files -->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
<!-- Main Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/app.min.css?v=0.3">


<!-- JS Files -->
<script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>


<!-- Favicon -->
<link type="image/png" rel="icon" href="<?= !empty($settings->site_fav) ? getImageSrc(UPLOADIMAGE . "/" . $settings->site_fav) : '' ?>">