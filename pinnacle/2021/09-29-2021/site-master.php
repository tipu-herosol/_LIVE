<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php if ($meta_info=='blog'): ?>
    <meta name="title" content="<?= $row->post_title ?>">
    <meta name="description" content="<?= short_desc($row->post_story) ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:title" content="<?= $row->post_title ?>">
    <meta property="og:description" content="<?= short_desc($row->post_story) ?>">
    <meta property="og:image" content="<?= getImageSrc(SITE_IMAGES.'blog/',$row->post_image); ?>">
    <meta property="twitter:card" content="thumbnail">
    <meta property="twitter:url" content="<?= current_url() ?>">
    <meta property="twitter:title" content="<?= $row->post_title ?>">
    <meta property="twitter:description" content="<?= short_desc($row->post_story) ?>">
    <meta property="twitter:image" content="<?= getImageSrc(SITE_IMAGES.'blog/',$row->post_image); ?>">
 <?php elseif($meta_info=='property'): ?>
 	<meta name="title" content="<?= $row->property_title  ?>">
    <meta name="description" content="<?= short_desc($row->details) ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:title" content="<?= $row->property_title  ?>">
    <meta property="og:description" content="<?= short_desc($row->details) ?>">
    <meta property="og:image" content="<?= getThumbSrc(SITE_IMAGES.'properties/thumbnails-600/',$row->featured_img) ?>">
    <meta property="twitter:card" content="thumbnail">
    <meta property="twitter:url" content="<?= current_url() ?>">
    <meta property="twitter:title" content="<?= $row->post_title ?>">
    <meta property="twitter:description" content="<?= short_desc($row->post_story) ?>">
    <meta property="twitter:image" content="<?= getThumbSrc(SITE_IMAGES.'properties/thumbnails-600/',$row->featured_img) ?>">
<?php elseif($meta_info=='article'): ?>
    <meta name="title" content="<?= $row->title  ?>">
    <meta name="description" content="<?= $row->short_desc ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:title" content="<?= $row->title  ?>">
    <meta property="og:description" content="<?= $row->short_desc ?>">
    <meta property="og:image" content="<?= getThumbSrc(SITE_IMAGES.'articles/thumbnails-600/',$row->featured_image) ?>">
    <meta property="twitter:card" content="thumbnail">
    <meta property="twitter:url" content="<?= current_url() ?>">
    <meta property="twitter:title" content="<?= $row->title ?>">
    <meta property="twitter:description" content="<?= $row->short_desc ?>">
    <meta property="twitter:image" content="<?= getThumbSrc(SITE_IMAGES.'articles/thumbnails-600/',$row->featured_image) ?>">
<?php elseif($meta_info=='district'): ?>
    <meta name="title" content="<?= $page_title  ?>">
    <meta name="description" content="<?= $row->short_desc ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:title" content="<?= $page_title  ?>">
    <meta property="og:description" content="<?= $row->short_desc ?>">
    <meta property="og:image" content="<?= getThumbSrc(SITE_IMAGES.'district/thumbnails-600/',$row->featured_image) ?>">
    <meta property="twitter:card" content="thumbnail">
    <meta property="twitter:url" content="<?= current_url() ?>">
    <meta property="twitter:title" content="<?= $page_title ?>">
    <meta property="twitter:description" content="<?= $row->short_desc ?>">
    <meta property="twitter:image" content="<?= getThumbSrc(SITE_IMAGES.'district/thumbnails-600/',$row->featured_image) ?>">
<?php elseif($meta_info=='hdb-estates'): ?>
    <meta name="title" content="<?= $page_title  ?>">
    <meta name="description" content="<?= $row->short_desc ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:title" content="<?= $page_title  ?>">
    <meta property="og:description" content="<?= $row->short_desc ?>">
    <meta property="og:image" content="<?= getThumbSrc(SITE_IMAGES.'hdb-estates/thumbnails-600/',$row->featured_image) ?>">
    <meta property="twitter:card" content="thumbnail">
    <meta property="twitter:url" content="<?= current_url() ?>">
    <meta property="twitter:title" content="<?= $page_title ?>">
    <meta property="twitter:description" content="<?= $row->short_desc ?>">
    <meta property="twitter:image" content="<?= getThumbSrc(SITE_IMAGES.'hdb-estates/thumbnails-600/',$row->featured_image) ?>">
<?php else:?>    
	<meta name="title" content="<?= $content->page_title ?>">
	<meta name="description" content="<?= $content->meta_desc ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?= current_url() ?>">
	<meta property="og:title" content="<?= $content->page_title ?>">
	<meta property="og:description" content="<?= $content->meta_desc ?>">
	<meta property="og:image" content="<?= getImageSrc(SITE_IMAGES, $content->meta_image) ?>">
	<meta property="twitter:card" content="thumbnail">
	<meta property="twitter:url" content="<?= current_url() ?>">
	<meta property="twitter:title" content="<?= $content->page_title ?>">
	<meta property="twitter:description" content="<?= $content->meta_desc ?>">
	<meta property="twitter:image" content="<?= getImageSrc(SITE_IMAGES, $content->meta_image) ?>">
<?php endif ?>
<!-- Css files -->
<!-- Bootstrap Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css?v=<?= $site_settings->site_version ?>">
<!-- Main Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url('assets/') ?>css/mycss.css?v=<?= $site_settings->site_version ?>">
<!-- <link type="text/css" rel="stylesheet" href="<?= base_url('assets/') ?>css/custom.css?v=<?= $site_settings->site_version ?>"> -->
<!-- Media-Query Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css?v=<?= $site_settings->site_version ?>">
<!-- commonCss Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url('assets/') ?>css/commonCss.css?v=<?= $site_settings->site_version ?>">
<link type="text/css" rel="stylesheet" href="<?= base_url('assets/') ?>css/lightgallery.min.css?v=<?= $site_settings->site_version ?>">
<link href="<?= base_url('assets/') ?>css/twentytwenty.css?v=<?= $site_settings->site_version ?>" rel="stylesheet" type="text/css" />
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "RealEstateAgent",
  "name": "Pinnacle Estate Agency",
  "image": "https://pinnacle.sg/assets/upload/images//image_1636746274_3865.jpg",
  "@id": "",
  "url": "https://pinnacle.sg/",
  "telephone": "",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "109 Bishan Street 12",
    "addressLocality": "Singapore",
    "postalCode": "570109",
    "addressCountry": "SG"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 1.3467612,
    "longitude": 103.8479386
  } ,
  "sameAs": [
    "https://www.facebook.com/pinnacleestateagency",
    "https://www.instagram.com/pinnacle.sg/",
    "https://www.linkedin.com/company/pinnacleestateagency/",
    "https://www.youtube.com/channel/UC8Uz4g38vFPS2Z5L7KWhD1w",
    "https://twitter.com/pinnacle_estate",
    "https://www.pinterest.com/pinnacleestateagency/_created/"
  ] 
}
</script>

<script type="text/javascript">
    base_url = '<?= base_url() ?>';
</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '581672892895606'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=581672892895606&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<!-- Favicon -->
<!-- <link type="image/png" rel="icon" href="<?= base_url('assets/') ?>images/favicon.png"> -->
<?php if (!empty($site_settings->site_scripts)): ?>
    <?= $site_settings->site_scripts?>
<?php endif ?>