<!doctype html>
<html>

<head>
	<title><?= $content->page_title ?> - <?= $site_settings->site_name ?></title>
	<?php $this->load->view('includes/site-master'); ?>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body id="landing-page" class="blog-page-pop">
	<?php $this->load->view('includes/header'); ?>
	<main>
		<section class="_guideProperty">
			<div class="contain">
				<div class="flex guidProperyFlex">
					<div class="colL">
						<h2><?= $content->page_heading ?></h2>
						<h3 class="regular"><?= $content->header_desc ?></h3>
					</div>
					<div class="colR">
						<div class="image">
							<img src="<?= getImageSrc(SITE_IMAGES . "/", $content->header_background_img) ?>">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="_guidePropertyPage">

			<div class="contain">
				<div class="guideProperty">
					<a href="javascript:void(0)" class="mobilePropertyLst">Singapore Property Guides <i class="fa fa-angle-down"></i></a>
					<ul class="nav nav-tabs" id="property-tabs">
						<?php foreach ($rows as $key => $row) : ?>
							<li class=""><a class="a" data-toggle="tab" href="#<?= url_title(strtolower($row->cate_name)) ?>">
									<?= $row->cate_name ?></a>
							</li>
						<?php endforeach ?>
					</ul>
					<div class="tab-content">
						<?php foreach ($rows as $key => $row) : ?>
							<div id="property-<?= url_title(strtolower($row->cate_name)) ?>" class="tab-pane fade a">
								<div class="flex flex-3 listIng">
									<?php $articles_rows = get_featured_article($row->id); ?>
									<?php foreach ($articles_rows as $key => $ar) : ?>
										<div class="col">
											<div class="inner">
												<a href="<?= base_url('singapore-property-guides/' . $ar->slug) ?>" class="image">
													<img src="<?= getThumbSrc(SITE_IMAGES . "articles/thumbnails-600/", $ar->featured_image) ?>">
												</a>
												<div class="lisCntnt">
													<a href="<?= base_url('singapore-property-guides/' . $ar->slug) ?>">
														<h3><?= $ar->title ?></h3>
													</a>
													<a href="<?= base_url('singapore-property-guides/' . $ar->slug) ?>">Read More</a>
												</div>
											</div>
										</div>

									<?php endforeach ?>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
				<div class="flex afterFlex wrapp-guides">
					<div class="col">
						<div class="inner">
							<h3><?= $content->tip_heading_1 ?></h3>
							<?= $content->tip_desc_1 ?>
						</div>
					</div>
					<div class="col">
						<div class="inner">
							<h3><?= $content->tip_heading_2 ?></h3>
							<?= $content->tip_desc_2 ?>
						</div>
					</div>
					<div class="col">
						<div class="inner">
							<h3><?= $content->tip_heading_3 ?></h3>
							<?= $content->tip_desc_3 ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="cmnSec secAllArticle" id="property-guides">
			<div class="contain">
				<div class="one-section-title">
					<h2 class=""><?= $content->article_heading ?></h2>
				</div>
				<div class="flex _allArticle txtData">
					<?php foreach ($rows as $key => $row) : ?>
						<div class="col">
							<h3><?= $row->cate_name ?></h3>
							<?php $articles_rows = get_category_article($row->id); ?>
							<ul class="cmnLst">
								<?php foreach ($articles_rows as $key => $ar) : ?>
									<li><a href="<?= base_url('singapore-property-guides/' . $ar->slug) ?>"><?= $ar->title ?></a></li>
								<?php endforeach ?>
							</ul>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</section>
		<section class="cmnSec1 _get">
			<div class="contain">
				<div class="cmnGetStrip">
					<?= $content->tip_desc ?>
					<div class="text-center">
						<a href="<?= $content->tip_btn_link ?>" class="webBtn"><?= $content->tip_btn_txt ?></a>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php $this->load->view('includes/footer'); ?>
	<script type="text/javascript">
		$(function() {
			let hash = window.location.hash;
			if (hash != '') {
				$('ul.nav-tabs li:has(a[href="' + hash + '"])').addClass("active");
				// console.log("")
				console.log("#property-" + hash.replace("#", ""));
				$("#property-" + hash.replace("#", "")).addClass('active in');
			} else {
				$("ul.nav-tabs li:first").addClass("active").show();
				$(".tab-content div:first-child").addClass('active in');
			}
			$(document).on('click', '#property-tabs li a', function(e) {
				let href = $(this).prop('href');
				href = href.split('#')[1];
				window.location = '#' + href;
				/*$('.tab-content div.active').removeClass('active in')
				$("#property-"+href).addClass('active in');*/
			})
			window.onhashchange = function() {
				// alert();
				let href = window.location.hash;
				// window.location = href;
				$('.tab-content div.active').removeClass('active in');
				console.log(href.replace("#", ""));
				$('ul.nav-tabs li:has(a[href="' + href + '"])').addClass("active");
				$("#property-" + href.replace("#", "")).addClass('active in');
			}

		})
	</script>
	<div class="popup blog-popup" data-popup="blog-popup">
		<div class="tableDv">
			<div class="tableCell">
				<div class="contain">
					<div class="_inner">
						<div class="crosBtn"></div>
						<div class="wrap-content">
							<h2 style="margin-bottom:10px"><?= $content->popup_heading ?></h2>
							<div id="owl-guide" class="owl-carousel owl-theme">
								<div class="fig"><img src="https://pinnacle.sg/assets/upload/images/articles/thumbnails-600/thumb_image_1637624872_7540.png"></div>
								<div class="fig"><img src="https://pinnacle.sg/assets/upload/images/articles/thumbnails-600/thumb_image_1637624872_7540.png"></div>
								<div class="fig"><img src="https://pinnacle.sg/assets/upload/images/articles/thumbnails-600/thumb_image_1637624872_7540.png"></div>
								<div class="fig"><img src="https://pinnacle.sg/assets/upload/images/articles/thumbnails-600/thumb_image_1637624872_7540.png"></div>
								<div class="fig"><img src="https://pinnacle.sg/assets/upload/images/articles/thumbnails-600/thumb_image_1637624872_7540.png"></div>
							</div>
							<!-- <div style="margin-bottom:15px" class="image">
								<img src="<?= getImageSrc(SITE_IMAGES . "/", $content->popup_img) ?>" alt="<?= $content->popup_heading ?>">
							</div> -->
							<?= $content->popup_desc ?>
							<form class="frmAjax" method="post" action="<?= base_url('Ajax/guide_subscribe') ?>">
								<div class="alertMsg"></div>
								<div class="row formRow">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 txtGrp">
										<input type="text" name="email" id="email" class="txtBox" placeholder="Email Address" />
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