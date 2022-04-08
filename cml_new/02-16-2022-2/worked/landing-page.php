<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body data-page="index">
    <?php $this->load->view('includes/header-landing'); ?>
    <main>


        <section id="banner" class="flex_box land_banner" style="background-image: url('<?= getImageSrc(UPLOAD_PATH . "images/", $content['image1']) ?>');">
            <div class="flex_dv">
                <div class="contain">
                    <div class="outer">
                        <div class="content text-center">
                            <h1><?= $content['banner_heading'] ?></h1>
                            <!-- <h1><span>Dry Cleaning <em>&</em> Laundry</span> <strong>comparison</strong> Services</h1> -->
                        </div>
                        <div class="video">
                            <div class="video_blk">
                                <video loop="" controls autoplay muted poster="<?= base_url('assets/images/kevasinate.png') ?>" data-src="<?= base_url('assets/videos/Y2Mate.is - Compare My Laundry Ad 2021-3QizMwl6ozI-1080p-1641375030851.mp4') ?>">
                                    <source src="<?= base_url('assets/videos/Y2Mate.is - Compare My Laundry Ad 2021-3QizMwl6ozI-1080p-1641375030851.mp4') ?>" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner -->


        <section id="countdown">
            <div class="contain text-center">
                <!-- <h2 class="heading"><?= $content['timer_heading'] ?></h2> -->
                <div id="timer">
                    <div class="main-example" data-time="<?= format_date($content['time_date'], 'Y/m/d') ?>">
                        <div class="countdown-container" id="main-example"></div>
                        <strong class="heading">Till Launch Date</strong>
                    </div>
                </div>
                <h4>
                    <a href="#boxes" class="run_btn">
                        <?= $content['timer_detail'] ?>
                        <svg x="0px" y="0px" width="71.2051163px" height="67.1052475px" viewBox="0 0 71.2051163 67.1052475" style="enable-background:new 0 0 71.2051163 67.1052475;">
                            <g>
                                <path fill="#fff" d="M31.1489182,40.0548019L1.8457919,10.7563944c-2.4609158-2.4605188-2.4610765-6.4501801-0.0003588-8.9108982 l0.0000634-0.0000634c2.4603949-2.4603949,6.4494185-2.4606042,8.9100723-0.0004678l24.8484383,24.8432217L60.4493713,1.8454331 c2.4606171-2.460357,6.4498215-2.4602523,8.9103088,0.0002339l0.0000076,0.0000089 c2.4606476,2.4606476,2.4605637,6.45017-0.0001831,8.9107189L40.058918,40.0546227 C37.5984535,42.5148926,33.6094818,42.5149727,31.1489182,40.0548019z" />
                            </g>
                            <g>
                                <path fill="#fff" d="M31.1489182,65.2601776L1.8457919,35.9617691c-2.4609158-2.4605179-2.4610765-6.4501801-0.0003588-8.9108982 l0.0000634-0.0000629c2.4603949-2.4603958,6.4494185-2.4606037,8.9100723-0.0004673l24.8484383,24.8432217L60.4493713,27.050808 c2.4606171-2.4603577,6.4498215-2.4602528,8.9103088,0.0002346l0.0000076,0.0000076 c2.4606476,2.4606476,2.4605637,6.4501705-0.0001831,8.9107189L40.058918,65.2599945 C37.5984535,67.7202682,33.6094818,67.7203445,31.1489182,65.2601776z" />
                            </g>
                        </svg>
                    </a>
                </h4>
            </div>
        </section>
        <!-- countdown -->


        <section id="self">
            <div class="contain">
                <div class="main_row flex_row flex">
                    <div class="col">
                        <div class="in_col">
                            <div class="content">
                                <h1 class="heading"><?= $content['section3_heading'] ?></h1>
                                <div class="lines left"></div>
                                <?= $content['section3_detail'] ?>
                            </div>
                            <div class="icon_row flex_row flex">
                                <div class="col">
                                    <div class="inner">
                                        <div class="icon">
                                            <img data-original="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image4']) ?>" src="<?= base_url('assets/images/loading.gif') ?>" alt="" lazy>
                                        </div>
                                        <div class="txt">
                                            <h5><?= $content['deal1_heading'] ?></h5>
                                            <p><?= $content['deal1_details'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="icon">
                                            <img data-original="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image5']) ?>" src="<?= base_url('assets/images/loading.gif') ?>" alt="" lazy>
                                        </div>
                                        <div class="txt">
                                            <h5><?= $content['deal2_heading'] ?></h5>
                                            <p><?= $content['deal2_details'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="icon">
                                            <img data-original="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image6']) ?>" src="<?= base_url('assets/images/loading.gif') ?>" alt="" lazy>
                                        </div>
                                        <div class="txt">
                                            <h5><?= $content['deal3_heading'] ?></h5>
                                            <p><?= $content['deal3_details'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="icon">
                                            <img data-original="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image7']) ?>" src="<?= base_url('assets/images/loading.gif') ?>" alt="" lazy>
                                        </div>
                                        <div class="txt">
                                            <h5><?= $content['deal4_heading'] ?></h5>
                                            <p><?= $content['deal4_details'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="fancy_image" style="background-image: url('<?= base_url('assets/images/shape_02.svg') ?>');">
                            <div class="fig"><img data-original="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image3']) ?>" src="<?= base_url('assets/images/loading.gif') ?>" alt="" lazy></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- self -->


        <section id="boxes">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col">
                        <div class="inner bluish">
                            <div class="txt">
                                <h3><?= $content['reg_left_heading'] ?></h3>
                                <p><?= $content['reg_left_detail'] ?></p>
                                <div class="btn_blk">
                                    <a href="<?= base_url($content['reg_left_button_link']) ?>" class="site_btn simple"><?= $content['reg_left_button_text'] ?></a>
                                </div>
                            </div>
                            <div class="icon"><img data-original="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image8']) ?>" src="<?= base_url('assets/images/loading.gif') ?>" alt="" lazy></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner blackish">
                            <div class="txt">
                                <h3><?= $content['reg_right_heading'] ?></h3>
                                <p><?= $content['reg_right_detail'] ?></p>
                                <div class="btn_blk">
                                    <a href="<?= base_url($content['reg_right_button_link']) ?>" class="site_btn"><?= $content['reg_right_button_text'] ?></a>
                                </div>
                            </div>
                            <div class="icon"><img data-original="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image9']) ?>" src="<?= base_url('assets/images/loading.gif') ?>" alt="" lazy></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- boxes -->


        <section id="works" style="background-image: url('<?= base_url('assets/images/shape_04.svg') ?>');">
            <div class="contain text-center">
                <div class="content">
                    <h1 class="heading"><?= $content['card_heading'] ?></h1>
                </div>
                <div class="flex_row">
                    <div class="col">
                        <div class="work_blk">
                            <div class="num"><?= $content['steps1_no'] ?></div>
                            <div class="txt">
                                <h3><?= $content['steps1_heading'] ?></h3>
                                <p><?= $content['steps1_details'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work_blk">
                            <div class="num"><?= $content['steps2_no'] ?></div>
                            <div class="txt">
                                <h3><?= $content['steps2_heading'] ?></h3>
                                <p><?= $content['steps2_details'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work_blk">
                            <div class="num"><?= $content['steps3_no'] ?></div>
                            <div class="txt">
                                <h3><?= $content['steps3_heading'] ?></h3>
                                <p><?= $content['steps3_details'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- works -->


        <?php if (!empty($testimonials)) { ?>
            <section id="folio">
                <div class="contain text-center">
                    <h1 class="heading"><?= $content['testimonials_heading'] ?></h1>

                    <div id="owl-folio" class="owl-carousel owl-theme">
                        <?php foreach ($testimonials as $testimonial) { ?>
                            <div class="folio_blk">
                                <div class="ico"><img src="<?= getImageSrc(UPLOAD_PATH . "testimonials/", $testimonial->image) ?>" alt=""></div>
                                <p><?= $testimonial->detail ?></p>
                                <h4><?= $testimonial->name ?> <span><?= $testimonial->city ?></span></h4>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        <?php } ?>
        <!-- folio -->


        <section id="counter">
            <div class="contain text-center">
                <div class="flex_row" id="counters_1">
                    <div class="col">
                        <div class="count_blk">
                            <div class="icon">
                                <img data-original="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image10']) ?>" src="<?= base_url('assets/images/loading.gif') ?>" alt="" lazy>
                            </div>
                            <div class="txt">
                                <h6><?= $content['stat_card1_heading'] ?></h6>
                                <div class="counter c_0" data-targetnum="<?= $content['stat_card1_number'] ?>" data-before="+"><?= $content['stat_card1_number'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="count_blk">
                            <div class="icon">
                                <img data-original="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image11']) ?>" src="<?= base_url('assets/images/loading.gif') ?>" alt="" lazy>
                            </div>
                            <div class="txt">
                                <h6><?= $content['stat_card2_heading'] ?></h6>
                                <div class="counter c_1" data-targetnum="<?= $content['stat_card2_number'] ?>" data-before="+"><?= $content['stat_card2_number'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="count_blk">
                            <div class="icon">
                                <img data-original="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image12']) ?>" src="<?= base_url('assets/images/loading.gif') ?>" alt="" lazy>
                            </div>
                            <div class="txt">
                                <h6><?= $content['stat_card3_heading'] ?></h6>
                                <div class="counter c_2" data-targetnum="<?= $content['stat_card3_number'] ?>" data-before="+"><?= $content['stat_card3_number'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="count_blk">
                            <div class="icon">
                                <img data-original="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image13']) ?>" src="<?= base_url('assets/images/loading.gif') ?>" alt="" lazy>
                            </div>
                            <div class="txt">
                                <h6><?= $content['stat_card4_heading'] ?></h6>
                                <div class="counter c_3" data-targetnum="<?= $content['stat_card4_number'] ?>" data-before="+"><?= $content['stat_card4_number'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter -->


        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmqmsf3pVEVUoGAmwerePWzjUClvYUtwM&libraries=geometry,places&ext=.js"></script>
        <script type="text/javascript">
            $(document).on('click', '#searchZipForm', function() {
                $('#invalidZip').html('');
                let zipcode = $.trim($('#zip').val());
                if (zipcode.length == 0)
                    return false;

                let frmIcon = $(this).find("i.spinner");
                let btn = $(this);
                frmIcon.removeClass("hidden");
                btn.prop('disabled', true);


                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    componentRestrictions: {
                        country: 'gb',
                        postalCode: zipcode
                    }
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        $('#invalidZip').html('');
                        latitude = results[0].geometry.location.lat();
                        longitude = results[0].geometry.location.lng();
                        window.location = base_url + 'service-selection?zipcode=' + zipcode + '&lat=' + latitude + '&long=' + longitude;
                    } else {
                        frmIcon.addClass("hidden");
                        btn.prop('disabled', false);
                        $('#invalidZip').html('Please enter a valid zip.');
                    }
                });
            });
        </script>


        <script>
            // $(window).on("load", function() {
            //     src = $("#banner video").attr("data-src");
            //     $("#banner video").attr('src', src).prop('muted', false);
            // })
        </script>
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/countdown.css">
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.countdown.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/lodash.min.js"></script>
        <script type="text/template" id="main-example-template">
            <div class="time <%= label %>">
                <span class="count curr top"><%= curr %></span>
                <span class="count next top"><%= next %></span>
                <span class="count next bottom"><%= next %></span>
                <span class="count curr bottom"><%= curr %></span>
                <span class="label"><%= label.length < 6 ? label : label.substr(0, 6)  %></span>
            </div>
        </script>


    </main>
    <?php $this->load->view('includes/footer-landing'); ?>
</body>

</html>