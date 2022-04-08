<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $page_title ?></title>
    <?php $this->load->view('includes/site-master'); ?>

</head>

<body data-page="index">
    <?php $this->load->view('includes/header'); ?>

    <main>


        <section id="banner" style="background-image: url('<?= getImageSrc('uploads/images/thumb_' . $row->image1) ?>');">
            <!-- <div class="image"><img src="<?= getImageSrc('uploads/images/thumb_' . $row->image1) ?>" alt=""></div> -->
            <div class="contain">
                <div class="flex_blk">
                    <div class="content">
                        <h1><?= empty($row->banner_heading) ? '' : $row->banner_heading ?></h1>
                        <?= empty($row->banner_desc) ? '' : $row->banner_desc ?>
                        <div class="btn_blk">
                            <a href="<?= empty($site_settings->header_btn_link) ? '' : $site_settings->header_btn_link ?>" class="site_btn lg round"><?= empty($site_settings->header_btn_text) ? '' : $site_settings->header_btn_text ?></a>
                        </div>
                        <!-- <ul class="play_store">
                            <li><a><img src="<?= getImageSrc('uploads/images/' . $row->image2) ?>" alt=""></a></li>
                            <li><a><img src="<?= getImageSrc('uploads/images/' . $row->image3) ?>" alt=""></a></li>
                        </ul> -->
                    </div>
                </div>
                <!-- <div class="img"><img src="<?= getImageSrc('uploads/images/thumb_' . $row->image4) ?>" alt=""></div> -->
            </div>
        </section>
        <!-- banner -->


        <section id="why">
            <div class="contain text-center">
                <div class="content">
                    <h2><?= empty($row->second_sec_heading) ? '' : $row->second_sec_heading ?></h2>
                </div>
                <div class="flex_row center">
                    <div class="col">
                        <div class="inner">
                            <div class="img"><img src="<?= getImageSrc('uploads/images/thumb_' . $row->image5) ?>" alt=""></div>
                            <div class="data">
                                <h4><?= empty($row->second_left_sec_heading) ? '' : $row->second_left_sec_heading ?></h4>
                                <p><?= empty($row->second_left_sec_desc) ? '' : $row->second_left_sec_desc ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="img"><img src="<?= getImageSrc('uploads/images/thumb_' . $row->image6) ?>" alt=""></div>
                            <div class="data">
                                <h4><?= empty($row->second_right_sec_heading) ? '' : $row->second_right_sec_heading ?></h4>
                                <p><?= empty($row->second_right_sec_desc) ? '' : $row->second_right_sec_desc ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- why -->


        <section id="works">
            <div class="contain">
                <div class="content text-center">
                    <h2><?= empty($row->sec3_heading) ? '' : $row->sec3_heading ?></h2>
                    <?= empty($row->sec3_desc) ? '' : $row->sec3_desc ?>
                </div>
                <div class="main_row flex_row center text-center">
                    <div class="col">
                        <div class="inner">
                            <div class="img"><img src="<?= getImageSrc('uploads/images/thumb_' . $row->image7) ?>" alt=""></div>
                            <div class="txt">
                                <h3><?= empty($row->sec3_left_heading) ? '' : $row->sec3_left_heading ?></h3>
                                <p><?= empty($row->sec3_left_desc) ? '' : $row->sec3_left_desc ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="img"><img src="<?= getImageSrc('uploads/images/thumb_' . $row->image8) ?>" alt=""></div>
                            <div class="txt">
                                <h3><?= empty($row->sec3_middle_heading) ? '' : $row->sec3_middle_heading ?></h3>
                                <p><?= empty($row->sec3_middle_desc) ? '' : $row->sec3_middle_desc ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="img"><img src="<?= getImageSrc('uploads/images/thumb_' . $row->image9) ?>" alt=""></div>
                            <div class="txt">
                                <h3><?= empty($row->sec3_right_heading) ? '' : $row->sec3_right_heading ?></h3>
                                <p><?= empty($row->sec3_right_desc) ? '' : $row->sec3_right_desc ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub_row flex_row">
                    <div class="col">
                        <div class="img"><img src="<?= getImageSrc('uploads/images/thumb_' . $row->image10) ?>" alt=""></div>
                    </div>
                    <div class="col">
                        <div class="txt">
                            <h6><?= empty($row->sec3_bottom_heading1) ? '' : $row->sec3_bottom_heading1 ?></h6>
                            <h3><?= empty($row->sec3_bottom_heading2) ? '' : $row->sec3_bottom_heading2 ?></h3>
                            <?= empty($row->sec3_bottom_desc) ? '' : $row->sec3_bottom_desc ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- works -->


        <section id="profile">
            <div class="contain">
                <div class="content text-center">
                    <h2><?= empty($row->sec4_heading) ? '' : $row->sec4_heading ?></h2>
                </div>
                <div class="flex_row center">
                    <div class="col">
                        <div class="inner">
                            <div class="img"><img src="<?= getImageSrc('uploads/images/thumb_' . $row->image11) ?>" alt=""></div>
                            <div class="txt">
                                <h5><?= empty($row->sec4_left_heading) ? '' : $row->sec4_left_heading ?></h5>
                                <p><?= empty($row->sec4_left_desc) ? '' : $row->sec4_left_desc ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="img"><img src="<?= getImageSrc('uploads/images/thumb_' . $row->image12) ?>" alt=""></div>
                            <div class="txt">
                                <h5><?= empty($row->sec4_middle_heading) ? '' : $row->sec4_middle_heading ?></h5>
                                <p><?= empty($row->sec4_middle_heading) ? '' : $row->sec4_middle_heading ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="img"><img src="<?= getImageSrc('uploads/images/thumb_' . $row->image13) ?>" alt=""></div>
                            <div class="txt">
                                <h5><?= empty($row->sec4_right_heading) ? '' : $row->sec4_right_heading ?></h5>
                                <p><?= empty($row->sec4_right_desc) ? '' : $row->sec4_right_desc ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- profile -->


        <section id="rewards">
            <div class="contain">
                <div class="content text-center">
                    <h2><?= empty($row->sec5__heading) ? '' : $row->sec5__heading ?></h1>
                </div>
                <div class="flex_row">
                    <div class="col">
                        <div class="img"><img src="<?= getImageSrc('uploads/images/thumb_' . $row->image14) ?>" alt=""></div>
                    </div>
                    <div class="col">
                        <div class="txt">
                            <h6><?= empty($row->sec5_right_heading1) ? '' : $row->sec5_right_heading1 ?></h6>
                            <h3><?= empty($row->sec5_right_heading2) ? '' : $row->sec5_right_heading2 ?></h3>
                            <?= empty($row->sec5_right_desc) ? '' : $row->sec5_right_desc ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- rewards -->


        <section id="gateway">
            <div class="contain">
                <div class="content text-center">
                    <h2><?= empty($row->sec6_heading) ? '' : $row->sec6_heading ?></h2>
                </div>
                <div class="outer">
                    <div class="inner">
                        <div class="num"><?= empty($row->sec6_heading1) ? '' : $row->sec6_heading1 ?><small>%</small></div>
                        <p><?= empty($row->sec6_desc1) ? '' : $row->sec6_desc1 ?></p>
                    </div>
                    <div class="inner">
                        <div class="num"><?= empty($row->sec6_heading2) ? '' : $row->sec6_heading2 ?><small>%</small></div>
                        <p><?= empty($row->sec6_desc2) ? '' : $row->sec6_desc2 ?></p>
                    </div>
                    <div class="inner">
                        <div class="num"><?= empty($row->sec6_heading3) ? '' : $row->sec6_heading3 ?><small>%</small></div>
                        <p><?= empty($row->sec6_desc3) ? '' : $row->sec6_desc3 ?></p>
                    </div>
                    <div class="inner">
                        <div class="num"><?= empty($row->sec6_heading4) ? '' : $row->sec6_heading4 ?><small>%</small></div>
                        <p><?= empty($row->sec6_desc4) ? '' : $row->sec6_desc4 ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- gateway -->


        <section id="ready">
            <div class="contain text-center">
                <div class="inner">
                    <h2><?= empty($row->sec7_main_heading) ? '' : $row->sec7_main_heading ?></h2>
                    <p><?= empty($row->sec7_desc) ? '' : $row->sec7_desc ?></p>
                    <div class="btn_blk">
                        <a href="<?= empty($row->sec7_btn_link) ? '' : $row->sec7_btn_link ?>" class="site_btn long round"><?= empty($row->sec7_btn_text) ? '' : $row->sec7_btn_text ?></a>
                    </div>
                    <div class="br"></div>
                    <?= empty($row->sec7_heading) ? '' : $row->sec7_heading ?>
                    <ul class="play_store">
                        <li><a><img src="<?= getImageSrc('uploads/images/' . $row->image15) ?>" alt=""></a></li>
                        <li><a><img src="<?= getImageSrc('uploads/images/' . $row->image16) ?>" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <!-- <img src="<?= getImageSrc('uploads/images/thumb_' . $row->image17) ?>" alt=""> -->
        </section>
        <!-- ready -->


    </main>
    <?php $this->load->view('includes/footer'); ?>

</body>

</html>