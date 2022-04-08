<main index>

    
        <section id="banner" class="flexBox">
            
            <!-- <section id="banner" class="flexBox" style="background-image: url('images/animal_1866808_1920.jpg');"> -->
            <div class="flexDv">
                <div class="contain">

                    <div class="content text-center">
                        <h1><?= $site_content['banner_heading'] ?></h1>
                        <p><?= $site_content['banner_detail'] ?></p>
                        <form action="<?= site_url() ?>search" method="get" class="srchBar" autocomplete="off">
                            <div class="txtGrp dropDown">
                                <!-- <label for="query" class="query">What are you looking for?</label> -->
                                <input type="text" name="query" id="query" class="txtBox" placeholder="What are you looking for?">
                                <img src="<?= base_url()?>assets/images/icon-search.svg" alt="">
                                <ul class="dropCnt dropLst" id="brand_suggesstions">
                                    
                                </ul>
                            </div>
                            <div class="txtGrp">
                                <!-- <label for="country" class="move">Category</label> -->
                                <select name="category[]" class="txtBox catSelectpicker" data-live-search="true" multiple>
                                    <!-- <option value="">Select Category</option> -->
                                    <?php
                                        foreach($site_categories as $search_cat){
                                    ?>
                                            <option value="<?=$search_cat->id?>"><?=ucfirst($search_cat->title)?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                
                            </div>
                            <div class="txtGrp">
                                <!-- <label for="country">In which country are you located?</label> -->
                                <input type="text" name="country" id="countryBrand" class="txtBox" placeholder="In which country are you located?">
                                <img src="<?= base_url()?>assets/images/icon-map-marker.svg" alt="">
                                <ul class="dropCnt dropLst" id="countrySuggesstions">
                                    
                                </ul>
                            </div>
                            <div class="bTn">
                                <button type="submit" class="webBtn">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner -->


        <section id="partner">
            <div class="contain text-center">
                <ul class="lst flex">
                <?php 
                $sec1s = getMultiText('home-sec1'); 
                if (count($sec1s) > 0) {
                    $sec1s_count = 1;
                    foreach ($sec1s as $sec1) {
                        ?>
                    <li>
                        <div class="icon"><img src="<?php echo getImageSrc('./uploads/logos/'.$sec1->image); ?>" alt=""></div>
                    </li>
                <?php
                    }
                }
                ?>
                </ul>
            </div>
        </section>
        <!-- partner -->

        <?php
            if (!empty($site_categories)) {
                ?>
        <section id="category">
            <div class="contain text-center">
                <div class="content">
                    <h1 class="heading"><?= $site_content['second_heading'] ?></h1>
                    <p><?= $site_content['second_detail'] ?></p>
                </div>
                <div id="owl-category" class="owl-carousel owl-theme">
                    <?php
                        foreach ($site_categories as $cat) {
                            ?>
                    <!-- <div class="inner"> -->
                        <a href="<?=base_url('category/'.doEncode($cat->id)."/".toSlugUrl($cat->title))?>" class="inner">
                            <div class="image"><img src="<?=  get_site_image_src("categories", $cat->image, 'thumb_'); ?>" alt="<?=$cat->title?>"></div>
                            <div class="txt">
                                <h4><?=$cat->title?></h4>
                            </div>
                        </a>
                    <!-- </div> -->
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        <!-- category -->
        <?php
            }
            if(!empty($brands)){
        ?>

        <section id="featured">
            <div class="contain">
                <div class="content text-center">
                    <h1 class="heading"><?= $site_content['third_heading'] ?></h1>
                </div>
                <div id="owl-items" class="owl-carousel owl-theme owl-items">
                    <?php
                        foreach ($brands as $brand) {
                    ?>
                    <div class="itmBlk sm">
                        <div class="image"><a href="<?= base_url('brand-details/'.doEncode($brand->id)."/".toSlugUrl($brand->title)) ?>"><img src="<?= get_site_image_src("brands", $brand->thumbnail, 'thumb_')?>" alt="<?=ucfirst($brand->title)?>"></a></div>
                        <div class="txt">
                            <div class="topBlk">
                                <div class="rateYo" data-rateyo-rating="<?=get_avg_rating($brand->id)?>"></div>
                                <strong><?=$brand->eco_friendly?>% Eco Friendly</strong>
                            </div>
                            <h4><a href="<?= base_url('brand-details/'.doEncode($brand->id)."/".toSlugUrl($brand->title)) ?>"><?=ucfirst($brand->title)?>: <?=ucfirst($brand->short_details)?></a></h4>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        </section>
        <!-- featured -->
        <?php
            }
        ?>

        <section id="role">
            <div class="contain">
                <div class="content text-center">
                    <h1 class="heading"><?= $site_content['fourth_heading'] ?></h1>
                </div>
                <div class="flexRow flex">
                <?php for($i = 1; $i <= 6; $i++):?>
                    <div class="col">
                        <div class="blk">
                            <div class="icon"><img src="<?=get_site_image_src("images/", $site_content['fourth_image'.$i])?>" alt="<?= $site_content['fourth_heading'.$i] ?>"></div>
                            <div class="txt">
                                <h4><?= $site_content['fourth_heading'.$i] ?></h4>
                                <p><?= $site_content['fourth_text'.$i] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>    
                </div>
            </div>
        </section>
        <!-- role -->

        <?php
            if (!empty($testimonials)) {
                ?>
        <section id="folio">
            <div class="contain text-center">
                <h1 class="heading"><?= $site_content['fifth_heading'] ?></h1>
                <div class="owlBlock">
                    <div id="owl-folio" class="owl-carousel owl-theme">
                        <?php
                            foreach ($testimonials as $testi) {
                                ?>
                        <div class="inner">
                            <div class="content">
                                <p><?=$testi->detail?></p>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= get_site_image_src('testimonials', $testi->image, 'thumb_', true); ?>" alt="<?=$testi->name?>"></div>
                                    <h5><?=$testi->name?> <span><?=$testi->designation?></span></h5>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- folio -->
        <?php
            }
        ?>

        <section id="intro">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="vidBlk popBtn" data-popup="video" data-store="<?= $site_content['sixth_video'] ?>" style="background-image: url('<?=get_site_image_src("images/", $site_content['image3'])?>')"></div>
                    </div>
                    <div class="col col2">
                        <div class="content">
                            <h1 class="heading"><?= $site_content['sixth_heading'] ?></h1>
                            <p><?= $site_content['sixth_detail'] ?></p>
                            <div class="bTn"><a href="<?= $site_content['sixth_button_link'] ?>" class="webBtn"><?= $site_content['sixth_button_text'] ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="video">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="crosBtn"></div>
                        <div class="contain">
                            <div id="vidBlk" class="vidBlk inside">
                                <!-- <iframe src="https://www.youtube.com/embed/X_zf0n0PC-w"></iframe> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- intro -->


        <!-- <section id="listing">
            <div class="contain-fluid">
                <div class="flexRow flex">
                    <div class="col">
                        <div class="inner">
                            <div class="ico"><img src="<?= base_url()?>assets/images/icon-play.svg" alt=""></div>
                            <h4>Over 130,000 video courses on career and personal skills</h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="ico"><img src="<?= base_url()?>assets/images/icon-star.svg" alt=""></div>
                            <h4>Choose from top industry instructors across the world</h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inner">
                            <div class="ico"><img src="<?= base_url()?>assets/images/icon-lifetime.svg" alt=""></div>
                            <h4>Learn at your own pace, with lifetime access on mobile and desktop</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- listing -->


        <section id="subscribe">
            <div class="contain">
                <div class="content">
                    <div class="txt text-center">
                        <h2 class="heading"><?= $site_content['last_heading'] ?></h2>
                    </div>
                    <form action="<?= base_url('page/subscribe') ?>" method="post" id="frmNewsletter" class="frmAjax">
                        <div class="txtGrp">
                            <img src="<?= base_url()?>assets/images/icon-envelope-fill.svg" alt="">
                            <label for="">Email Address</label>
                            <input type="text" name="email" id="email" class="txtBox">
                            <button type="submit" class="webBtn icoBtn"><i class="spinner hidden"></i> Submit <img src="<?= base_url()?>assets/images/icon-send.svg"></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- subscribe -->


    </main>
