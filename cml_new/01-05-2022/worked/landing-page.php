<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body data-page="index">
    <?php $this->load->view('includes/header'); ?>
    <main>


        <section id="banner" class="flex_box" style="background-image: url('<?= base_url('assets/images/laundry_service_banner.jpg') ?>');">
            <!-- <section id="banner" class="flex_box" style="background-image: url('<?= getImageSrc(UPLOAD_PATH . "images/", $content['image1']) ?>');"> -->
            <div class="flex_dv">
                <div class="contain">
                    <div class="outer">
                        <div class="content">
                            <h1><?= $content['banner_heading'] ?></h1>
                            <div class="btn_blk form_btn">
                                <a href="<?= base_url('buyer/signup') ?>" class="site_btn lg round simple">Sign up as Buyer</a>
                                <a href="<?= base_url('vendor/signup') ?>" class="site_btn lg round">Sign up as Vendor</a>
                            </div>
                        </div>
                        <div class="video">
                            <div class="video_blk">
                                <video loop="" muted="" autoplay=" true" playsinline="" controls="">
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
                <h2 class="heading">We are getting ready for lift off</h2>
                <div class="main-example" data-time="2022/01/31">
                    <div class="countdown-container" id="main-example"></div>
                </div>
                <h4>Why not register below to be notified</h4>
            </div>
        </section>
        <!-- countdown -->


        <section id="self">
            <div class="contain">
                <div class="main_row flex_row flex">
                    <div class="col">
                        <div class="in_col">
                            <div class="content">
                                <h1 class="heading">About Compare My Laundry</h1>
                                <div class="lines left"></div>
                                <h5>Compare My Laundry is here to help you find the cleaning you are looking at price you can be confident in.</h5>
                                <p>We are here to make it happen with our easy, convenient and stress free way to find and sell your cleaning. <strong>Amazing dealership website</strong> developed especially for cleaning sellers, dealers or washer retailers.</p>
                            </div>
                            <div class="icon_row flex_row flex">
                                <div class="col">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="<?= base_url('assets/images/vector-briefcase.svg') ?>" alt="">
                                        </div>
                                        <div class="txt">
                                            <h5>All brands </h5>
                                            <p>Mirum est notare </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="<?= base_url('assets/images/vector-support.svg') ?>" alt="">
                                        </div>
                                        <div class="txt">
                                            <h5>Free Support</h5>
                                            <p>Qui sequitur mutationem </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="<?= base_url('assets/images/vector-badge.svg') ?>" alt="">
                                        </div>
                                        <div class="txt">
                                            <h5>Dealership</h5>
                                            <p>Quam littera gothica</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="<?= base_url('assets/images/vector-thumbs-up.svg') ?>" alt="">
                                        </div>
                                        <div class="txt">
                                            <h5>Affordable</h5>
                                            <p>Parum claram dynamicus </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="fancy_image" style="background-image: url('<?= base_url('assets/images/shape_02.svg') ?>');">
                            <div class="fig"><img data-original="<?= base_url('assets/images/210915133905-how-to-do-laundry-lead.jpg') ?>" src="<?= base_url('assets/images/loading.gif') ?>" alt="" lazy></div>
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
                                <h3>Become a Buyer</h3>
                                <p>Sequi iusto, asperiores omnis excepturi unde eaque temporibus voluptatum eligendi eveniet tempora ipsam voluptas ipsum delectus sint, rerum porro dolorem neque veniam?</p>
                                <div class="btn_blk">
                                    <a href="<?= base_url('buyer/signup') ?>" class="site_btn simple">Become A Buyer</a>
                                </div>
                            </div>
                            <div class="icon"><img src="<?= base_url('assets/images/vector-washing.svg') ?>" alt=""></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner blackish">
                            <div class="txt">
                                <h3>Become a Vendor</h3>
                                <p>Corporis repellat possimus veniam officia quia. Eligendi, officia blanditiis corporis velit nobis doloribus inventore recusandae dolorem, obcaecati deleniti tempore assumenda.</p>
                                <div class="btn_blk">
                                    <a href="<?= base_url('vendor/signup') ?>" class="site_btn">Become A Vendor</a>
                                </div>
                            </div>
                            <div class="icon"><img src="<?= base_url('assets/images/vector-badge.svg') ?>" alt=""></div>
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
                            <div class="num">01</div>
                            <div class="txt">
                                <h3><?= $content['card1_heading'] ?></h3>
                                <p><?= $content['card1_details'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work_blk">
                            <div class="num">02</div>
                            <div class="txt">
                                <h3><?= $content['card2_heading'] ?></h3>
                                <p><?= $content['card2_details'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work_blk">
                            <div class="num">03</div>
                            <div class="txt">
                                <h3><?= $content['card3_heading'] ?></h3>
                                <p><?= $content['card3_details'] ?></p>
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
                    <!-- <h1 class="heading">What They’re <em>Saying</em></h1> -->
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
                                <img src="<?= base_url('assets/images/vector-like.svg') ?>" alt="">
                            </div>
                            <div class="txt">
                                <h6>Best Cleanings</h6>
                                <div class="counter c_0" data-targetnum="3968" data-before="+">3968</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="count_blk">
                            <div class="icon">
                                <img src="<?= base_url('assets/images/vector-review.svg') ?>" alt="">
                            </div>
                            <div class="txt">
                                <h6>Buyers Reviews</h6>
                                <div class="counter c_1" data-targetnum="5568" data-before="+">5568</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="count_blk">
                            <div class="icon">
                                <img src="<?= base_url('assets/images/vector-user2.svg') ?>" alt="">
                            </div>
                            <div class="txt">
                                <h6>Happy Customer</h6>
                                <div class="counter c_2" data-targetnum="8908" data-before="+">8908</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="count_blk">
                            <div class="icon">
                                <img src="<?= base_url('assets/images/vector-cup.svg') ?>" alt="">
                            </div>
                            <div class="txt">
                                <h6>Vendors & Buyers</h6>
                                <div class="counter c_3" data-targetnum="9968" data-before="+">9968</div>
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


        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/countdown.css">
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.countdown.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/lodash.min.js"></script>
        <script type="text/template" id="main-example-template">
            <div class="time <%= label %>">
            <span class="count curr top"><%= curr %></span>
            <span class="count next top"><%= next %></span>
            <span class="count next bottom"><%= next %></span>
            <span class="count curr bottom"><%= curr %></span>
            <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
        </div>
    </script>


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>