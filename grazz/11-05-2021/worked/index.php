<!doctype html>
<html>

<head>
	<title>GrazzeHopper</title>
	<?php $this->load->view('includes/site-master') ?>
</head>

<body id="home-page">
	<?php $this->load->view('includes/header') ?>
	<main>
		<section id="cover">
			<div class="tableDv">
				<div class="tableCell">
					<div class="contain">
						<div class="wrap_blk">
							<div class="txt_blk">
								<h1><?= $row->heading1 ?></h1>
								<h4><?= $row->heading2 ?></h4>
								<form action="<?= base_url('ajax/signup') ?>" method="post" class="formAjax">
									<div class="txtGrp">
										<input type="text" placeholder="Full name" class="txtBox" name="full_name" value="">
									</div>
									<div class="txtGrp">
										<input type="text" placeholder="Email" class="txtBox" name="email" value="">
									</div>
									<div class="txtGrp">
										<input type="text" placeholder="Phone" class="txtBox" name="phone" value="">
									</div>
									<button type="submit" class="webBtn blockBtn"><?= $row->btn_text ?></button>
									<button class="buttonload webBtn" id="buttonload" style="display :none">
										<i class="fa fa-refresh fa-spin"></i>Loading
									</button>
								</form>
							</div>
							<div class="vid_blk">
								<video id='myVideo' preload="yes" autoplay="" muted="" playsinline loop="" src='uploads/videos/<?= $row->home_page_video ?>' width='100%' height='100%'>
									<source src="assets/images/intro1" type="video/mp4">
								</video>
								<span class="videoMute">
									<img src="assets/images/volume-mute.png" class="mute">
									<img src="assets/images/high-volume.png" class="volume">
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- cover -->
		<!-- <section id="banner">
			<div class="contain">
				<div class="videoBanner">
					<div class="left-color">
					</div>
					<video id='myVideo' preload="yes" autoplay="" muted="" playsinline loop="" src='uploads/videos/<?= $row->home_page_video ?>' width='100%' height='100%'>
						<source src="assets/images/intro1" type="video/mp4">
					</video>
					<span class="videoMute">
						<img src="assets/images/volume-mute.png" class="mute">
						<img src="assets/images/high-volume.png" class="volume">
					</span>
				</div>
				<div class="cntnt">
					<div class="inner-cntnt">
						<h1><?= $row->heading1 ?></h1>
						<h4><?= $row->heading2 ?></h4>
						<form action="<?= base_url('ajax/signup') ?>" method="post" class="formAjax">
							<div class="txtGrp">
								<input type="text" placeholder="Full name" class="txtBox" name="full_name" value="">
							</div>
							<div class="txtGrp">
								<input type="text" placeholder="Email" class="txtBox" name="email" value="">
							</div>
							<div class="txtGrp">
								<input type="text" placeholder="Phone" class="txtBox" name="phone" value="">
							</div>
							<button type="submit" class="webBtn"><?= $row->btn_text ?></button>
							<button class="buttonload webBtn" id="buttonload" style="display :none">
								<i class="fa fa-refresh fa-spin"></i>Loading
							</button>
						</form>
					</div>
				</div>
			</div>
		</section> -->
	</main>
	<?php $this->load->view('includes/commonjs') ?>
	<script>
		$(document).ready(function() {
			$(document).on('click', '.videoMute', function() {
				var video = document.getElementById("myVideo")
				if (video.muted) {
					video.muted = false;

					$(this).children('.volume').hide();
					$(this).children('.mute').show();
				} else {
					video.muted = true;
					$(this).children('.mute').hide();
					$(this).children('.volume').show();
				}
			});
		});
	</script>
</body>

</html>