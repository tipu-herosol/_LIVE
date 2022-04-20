<!doctype html>
<html>
<head>
<title><?= $row->title ?> - <?= $site_settings->site_name ?></title>
<?php $this->load->view('includes/site-master'); ?>
<!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
</head>
<body id="landing-page" class="blog-page-pop">
<?php $this->load->view('includes/header'); ?>
<main>
<section class="guideBanner" style="    background-position: center!important;background-repeat: no-repeat!important;background-size: cover!important;background: url(<?= getImageSrc(SITE_IMAGES."articles/", $row->banner_image) ?>);">
	<div class="contain">
		<div class="guideCntnt">
			<h1><?= $row->title ?></h1>
			<h3 class="regular">
				<?= $row->short_desc ?>
			</h3>
		</div>
	</div>
</section>
<section class="cmnSec">
	<div class="contain">
		<div class="guideLst ckEditor">
		    <div class="share-article-btns">
				
				<ul class="social flex">
					<li><a href="javascript:void(0)" target="_blank" class="facebook" onclick="shareFacebook('<?= base_url('singapore-property-guides/'.$row->slug)  ?>','<?= $row->title?>')"><i class="fa fa-facebook"></i></a></li>
					<li><a href="javascript:void(0)" target="_blank" onclick="shareTwitter('<?= base_url('singapore-property-guides/'.$row->slug) ?>','<?= $row->title?>')"><i class="fa fa-twitter"></i></a></li>
					<li><a href="javascript:void(0)" onclick="shareWhatsapp('<?= base_url('singapore-property-guides/'.$row->slug) ?>')"><i class="fa fa-whatsapp"></i></a></li>
					<li><a href="javascript:void(0)" target="_blank" onclick="shareLinkdin('<?= base_url('singapore-property-guides/'.$row->slug) ?>')"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="mailto:?subject=<?=$row->title ?>&body=<?= base_url('singapore-property-guides/'.$row->slug) ?>" ><i class="fa fa-envelope"></i></a></li>
					<li style="position: relative;"><a href="javascript:void(0)" class="cpybtn" data-link="<?= base_url('singapore-property-guides/'.$row->slug) ?>"><i class="fa fa-link"></i></a></li>
				</ul>
				<!-- <p><strong>76</strong> Shares</p> -->
			</div>
			<?= $row->details ?>

			<div class="share-article-btns">
				
				<ul class="social flex">
					<li><a href="javascript:void(0)" target="_blank" class="facebook" onclick="shareFacebook('<?= base_url('singapore-property-guides/'.$row->slug)  ?>','<?= $row->title?>')"><i class="fa fa-facebook"></i></a></li>
					<li><a href="javascript:void(0)" target="_blank" onclick="shareTwitter('<?= base_url('singapore-property-guides/'.$row->slug) ?>','<?= $row->title?>')"><i class="fa fa-twitter"></i></a></li>
					<li><a href="javascript:void(0)" onclick="shareWhatsapp('<?= base_url('singapore-property-guides/'.$row->slug) ?>')"><i class="fa fa-whatsapp"></i></a></li>
					<li><a href="javascript:void(0)" target="_blank" onclick="shareLinkdin('<?= base_url('singapore-property-guides/'.$row->slug) ?>')"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="mailto:?subject=<?=$row->title ?>&body=<?= base_url('singapore-property-guides/'.$row->slug) ?>" ><i class="fa fa-envelope"></i></a></li>
					<li style="position: relative;"><a href="javascript:void(0)" class="cpybtn" data-link="<?= base_url('singapore-property-guides/'.$row->slug) ?>"><i class="fa fa-link"></i></a></li>
				</ul>
				<!-- <p><strong>76</strong> Shares</p> -->
			</div>
		</div>
		<?php $related_articles_arr = explode(',', $row->related_articles); ?>
		<?php if(count($related_articles_arr)>0 and $related_articles_arr[0] >0): ?>
		<div class="related-article">
			<h2>Related Articles</h2>
			<div id="owl-articles"  class="owl-carousel owl-theme">
				<?php foreach ($related_articles_arr as $key => $related_id): ?>
					<?php $article_row = get_article($related_id);?>
					<div class="item">
						<a href="<?= base_url('singapore-property-guides/'.$article_row->slug) ?>" class="inner">
							<div class="image">
								<img src="<?= getImageSrc(SITE_IMAGES . "/articles/", $article_row->featured_image) ?>" alt="<?= $ra->title ?>">
							</div>
							<h4><?= $article_row->title ?></h4>
						</a>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	<?php endif; ?>
	</div>
</section>

<section class="cmnSec1 _get">
	<div class="contain">
		<div class="cmnGetStrip">
			<?= $row->alert_txt ?>
			<div class="text-center">
				<a href="<?= $row->alert_btn_link ?>" class="webBtn"><?= $row->alert_btn_txt ?></a>
			</div>
		</div>
	</div>
</section>
</main>
<div class="copy-url-tip">
    <p>URL Copied!</p>
</div>
<?php $this->load->view('includes/footer');?>
<div class="popup blog-popup" data-popup="blog-popup">
	<div class="tableDv">
		<div class="tableCell">
			<div class="contain">
				<div class="_inner">
					<div class="crosBtn"></div>
					<div class="wrap-content">
						<h2 style="margin-bottom:10px"><?= $content->popup_heading ?></h2>
						<div style="margin-bottom:15px" class="image">
							<img src="<?= getImageSrc(SITE_IMAGES."/", $content->popup_img) ?>" alt="<?= $content->popup_heading ?>">
						</div>
						<?= $content->popup_desc ?>
						<form class="frmAjax" method="post" action="<?=base_url('Ajax/guide_subscribe')?>">
						    <div class="alertMsg"></div>
						    <div class="row formRow">
						        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 txtGrp">
						            <input type="text" name="email" id="email" class="txtBox" placeholder="Email Address"/>
						        </div>
						        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 txtGrp">
									<button type="submit" class="webBtn colorBtn"><?= $content->popup_button ?></button>
								</div>
						    </div>
						</form>
						<div class="text-center"><a href="<?= $content->popup_link_url ?>" class="no_thanks"><?= $content->popup_link_text ?></a></div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>