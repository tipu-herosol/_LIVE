<!DOCTYPE html>

<html lang="en">



<head>

    <title><?= $page_title  ?> - <?= $settings->site_name ?></title>

    <?php $this->load->view('includes/site-master'); ?>

</head>



<body id="home-page">

    <?php $this->load->view('includes/header'); ?>

    <main>

        <section id="banner" style="background-image: url('<?= getImageSrc(UPLOADIMAGE . "/" . $content->image1) ?>');">

            <div class="contain">

                <div class="flex_blk">

                    <div class="content">

                        <h1><?= $content->header_heading ?></h1>

                        <p><?= $content->header_desc ?></p>

                        <div class="btn_blk">

                            <a href="<?= makeExternalUrl($content->header_btn_link) ?>" target="_blank" class="site_btn lg round"><?= ($content->header_btn_title) ?></a>

                        </div>

                    </div>

                </div>

                <div class="img"><img src="<?= getImageSrc(UPLOADIMAGE . "/" . $content->image2) ?>" alt=""></div>

            </div>

        </section>

        <!-- banner -->



        <?php if (!empty($uss)) { ?>

            <section id="why">

                <div class="contain text-center">

                    <div class="content">

                        <h2><?= $content->why_heading ?></h2>

                    </div>

                    <div class="flex_row center">

                        <?php foreach ($uss as $us) { ?>

                            <div class="col">

                                <div class="inner">

                                    <div class="img"><img src="<?= getImageSrc(UPLOADIMAGE . "/why_us/" . $us->image) ?>" alt=""></div>

                                    <div class="data">

                                        <h4><?= $us->title ?></h4>

                                        <p><?= $us->description ?></p>

                                    </div>

                                </div>

                            </div>

                        <?php } ?>



                    </div>

                    <div class="tagline">

                        <h3><?= $content->why_tagline ?></em></h3>

                    </div>

                </div>

            </section>

        <?php } ?>

        <!-- why -->



        <?php if (!empty($works)) { ?>

            <section id="works">

                <div class="contain">

                    <div class="content text-center">

                        <h2 class="heading"><?= $content->how_heading ?></h2>

                    </div>

                    <div class="main_row flex_row center text-center">

                        <?php foreach ($works as $work) { ?>

                            <div class="col">

                                <div class="inner">

                                    <div class="img"><img src="<?= getImageSrc(UPLOADIMAGE . "/how_it_works/" . $work->image) ?>" alt=""></div>

                                    <div class="txt">

                                        <h3><?= $work->title ?></h3>

                                        <p><?= $work->description ?></p>

                                    </div>

                                </div>

                            </div>

                        <?php } ?>

                    </div>

                    <div class="sub_row flex_row">

                        <div class="col">

                            <div class="img"><img src="<?= getImageSrc(UPLOADIMAGE . "/" . $content->image3) ?>" alt=""></div>

                        </div>

                        <div class="col">

                            <div class="txt">

                                <h6><?= $content->sec3_tagline ?></h6>

                                <h3><?= $content->sec3_heading ?></h3>

                                <p><?= $content->sec3_desc ?></p>

                            </div>

                        </div>

                    </div>

                    <div class="sub_row flex_row">

                        <div class="col">

                            <div class="img"><img src="<?= getImageSrc(UPLOADIMAGE . "/" . $content->image4) ?>" alt=""></div>

                        </div>

                        <div class="col">

                            <div class="txt">

                                <h6><?= $content->sec4_tagline ?></h6>

                                <h3><?= $content->sec4_heading ?></h3>

                                <p><?= $content->sec4_desc ?></p>

                            </div>

                        </div>

                    </div>

                    <div class="sub_row flex_row">

                        <div class="col">

                            <div class="img"><img src="<?= getImageSrc(UPLOADIMAGE . "/" . $content->image5) ?>" alt=""></div>

                        </div>

                        <div class="col">

                            <div class="txt">

                                <h6><?= $content->sec5_tagline ?></h6>

                                <h3><?= $content->sec5_heading ?></h3>

                                <p><?= $content->sec5_desc ?></p>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

        <?php } ?>

        <!-- works -->



        <?php if (!empty($socials)) { ?>

            <section id="social">

                <div class="contain">

                    <div class="content text-center">

                        <h2 class="heading"><?= $content->social_heading ?></h2>

                    </div>

                    <div class="flex_row center">

                        <?php foreach ($socials as $social) { ?>

                            <div class="col">

                                <div class="inner">

                                    <div class="img"><img src="<?= getImageSrc(UPLOADIMAGE . "/the_social/" . $social->image) ?>" alt=""></div>

                                    <div class="txt">

                                        <h4><?= $social->title ?></h4>

                                        <p><?= $social->description ?></p>

                                    </div>

                                </div>

                            </div>

                        <?php } ?>

                    </div>

                </div>

            </section>

        <?php } ?>

        <!-- social -->





        <section id="ready">

            <div class="contain text-center">

                <div class="inner">

                    <h2 class="heading"><?= $content->sec7_heading ?></h2>

                    <p><?= $content->sec7_desc ?></p>

                    <div class="btn_blk">

                        <a href="<?= makeExternalUrl($content->sec7_btn_link) ?>" target="_blank" class="site_btn long round"><?= $content->sec7_btn_title ?></a>

                    </div>

                    <div class="br"></div>

                    <h5><?= $content->sec7_tagline ?> <a href="mailto:<?= $settings->site_email ?>"> <?= $settings->site_email ?></a></h5>

                    <ul class="play_store">

                        <li><a><img src="<?= getImageSrc(UPLOADIMAGE . "/" . $content->image6) ?>" alt=""></a></li>

                        <li><a><img src="<?= getImageSrc(UPLOADIMAGE . "/" . $content->image7) ?>" alt=""></a></li>

                    </ul>

                </div>

            </div>

            <!-- <img src="<?= getImageSrc(UPLOADIMAGE . "/" . $content->image8) ?>" alt=""> -->

        </section>

        <!-- ready -->

    </main>



    <?php $this->load->view('includes/footer'); ?>

</body>



</html>