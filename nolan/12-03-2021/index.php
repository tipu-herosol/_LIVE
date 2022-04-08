<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $page_title ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body data-page="index">
    <?php $this->load->view('includes/header'); ?>
    <main>


        <section id="banner" style="background-image: url('<?= !empty($content['image1']) ? get_site_image_src("images", $content['image1']) : base_url().'assets/images/banner.jpg' ?>');">
            <div class="contain">
                <div class="flex_row">
                    <div class="col col1" data-aos="fade-down" data-aos-duration="1000">
                        <div class="content">
                            <h1><?=$content['banner_heading']?> <span><?=$content['banner_heading_colored']?></span></h1>
                            <div class="btn_blk">
                                <a href="<?=$content['left_btn_link']?>" class="site_btn"><?=$content['left_btn_heading']?></a>
                                <a href="<?=$content['right_btn_link']?>" class="site_btn blank border"><?=$content['right_btn_heading']?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="image"><img class="lazy" data-original="<?= !empty($content['image3']) ? get_site_image_src("images", $content['image3']) : base_url().'assets/images/banner_img.jpg' ?>" src="<?=base_url('assets/images/loading.gif')?>" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="fig"><img class="lazy" data-original="<?= !empty($content['image2']) ? get_site_image_src("images", $content['image2']) : base_url().'assets/images/13.png' ?>" src="<?=base_url('assets/images/loading.gif')?>" alt=""></div>
        </section>
        <!-- banner -->


        <section id="intro">
            <div class="contain">
                <div class="flex_row">
                    <div class="col col1" data-aos="fade-left" data-aos-duration="1000">
                        <div class="image"><img class="lazy" data-original="<?= !empty($content['image4']) ? get_site_image_src("images", $content['image4']) : base_url().'assets/images/intro_01.jpg' ?>" src="<?=base_url('assets/images/loading.gif')?>" alt=""></div>
                    </div>
                    <div class="col col2" data-aos="fade-right" data-aos-duration="1000">
                        <div class="content">
                            <h1><?=$content['section2_heading']?></h1>
                            <?=$content['section2_detail']?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- intro -->


        <section id="gallery">
            <div class="contain text-center" data-aos="fade-down" data-aos-duration="1000">
                <div class="content">
                    <h1><?=$content['section3_heading']?></h1>
                </div>
                <ul class="gallery_lst flex">
                    <?php foreach($gallery as $image): ?>
                        <li class="col"><a href="<?=get_site_image_src("gallery", $image->image)?>" data-fancybox="gallery"><img class="lazy" data-original="<?=get_site_image_src("gallery", $image->image)?>" src="<?=base_url('assets/images/loading.gif')?>" alt=""></a></li>
                    <?php endforeach; ?>
                </ul>
                <?php if(count($gallery) > 6): ?>
                    <div class="btn_blk more-less-gallery">
                        <button class="site_btn" onclick="loadMore();">View More</button>
                    </div>  
                <?php endif; ?>
            </div>
        </section>
        <!-- gallery -->


        <section id="merch">
            <div class="contain">
                <div class="flex_row">
                    <div class="col col1" data-aos="fade-left" data-aos-duration="1000">
                        <div class="content">
                            <h1><?=$content['section4_heading']?></h1>
                            <?=$content['section4_detail']?>
                        </div>
                    </div>
                    <div class="col col2" data-aos="fade-right" data-aos-duration="1000">
                        <div class="image"><img class="lazy" data-original="<?= !empty($content['image5']) ? get_site_image_src("images", $content['image5']) : base_url().'assets/images/shirt.png' ?>" src="<?=base_url('assets/images/loading.gif')?>" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- merch -->


        <section id="soon" style="background-image: url('<?= base_url() ?>assets/images/soon.jpg');">
            <div class="contain text-center" data-aos="fade-down" data-aos-duration="1000">
                <div class="inner">
                    <div class="main-example" data-time="<?=$content['section5_timer_date']?>">
                        <div class="countdown-container" id="main-example"></div>
                    </div>
                    <p><?=$content['section5_heading']?></p>
                    <div class="btn_blk">
                        <a href="<?=$content['section5_btn_link']?>" class="site_btn"><?=$content['section5_btn_heading']?></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- soon -->


        <section id="roadmap">
            <div class="contain" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="text-center"><?=$content['section6_heading']?></h1>
                <div class="roadmap">
                    <?php foreach($phases as $phase): ?>
                        <div class="road_blk">
                            <div class="txt">
                                <h5><?=$phase->name?></h5>
                                <p><?=$phase->detail?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- roadmap -->


        <section id="faq">
            <div class="contain" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="text-center"><?=$content['section7_heading']?></h1>
                <div class="faq_lst">
                    <?php foreach($faqs as $faq): ?>
                        <div class="faq_blk">
                            <h4><?=$faq->question?></h4>
                            <div class="txt">
                                <?=$faq->answer?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- faq -->


        <section id="team">
            <div class="contain text-center" data-aos="fade-down" data-aos-duration="1000">
                <h1><?=$content['section8_heading']?></h1>
                <div class="flex_row full_height">
                    <?php foreach($team as $member): ?>
                        <div class="col">
                            <div class="inner">
                                <div class="ico"><img class="lazy" data-original="<?=get_site_image_src("team", $member->image, 'thumb_')?>" src="<?=base_url('assets/images/loading.gif')?>" alt=""></div>
                                <div class="txt">
                                    <h4><?=$member->name?></h4>
                                    <p><?=$member->tagline?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- team -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
    <script type="text/javascript">
        var total = '<?= count($gallery) ?>';
        var size_quotes = $(".gallery_lst .col").length;
        var append_size = 3;
        var x = 6;
        $(document).ready(function() {
            $('.gallery_lst .col').hide().filter(':lt(' + x + ')').show();
        });

        const loadMore = () => {
            x = (x + append_size <= size_quotes) ? x + append_size : size_quotes;
            $('.gallery_lst .col').hide().filter(':lt(' + x + ')').show();
            if (x == total) {
                $('.more-less-gallery').empty().append(`<button onclick="showLess();" class="site_btn">Show Less</button>`);
            }
        }

        const showLess = () => {
            x = 6;
            $('.gallery_lst .col').not(':lt(' + x + ')').hide();
            $('.more-less-gallery').empty().append(`<button onclick="loadMore();" class="site_btn">View More</button>`);
        }
</script>
</body>

</html>