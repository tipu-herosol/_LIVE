<main formal typical detail>


        <section id="detail">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                    <?php
                            if ($brand->plan!=1) {
                                ?>
                        <div id="owl-brand" class="owl-carousel owl-theme">
                        <?php
                            $images=get_brand_images($brand->id);
                                if (!empty($images)) {
                                    foreach ($images as $key=>$image) {
                                        ?>
                            <div class="image" data-hash="item<?=$key?>">
                                <img src="<?=get_site_image_src("brands", $image->image, 'thumb_')?>" alt="">
                            </div>
                            <?php
                                    }
                                } ?>
                        </div>
                        <div id="owl-thumbnail" class="owl-carousel owl-theme">
                        <?php
                            $images=get_brand_images($brand->id);
                                if (!empty($images)) {
                                    foreach ($images as $key=>$image) {
                                        ?>
                            <a href="#item<?=$key?>"><img src="<?=get_site_image_src("brands", $image->image, 'thumb_')?>" alt=""></a>
                            <?php
                                    }
                                } ?>
                        </div>
                    <?php
                            }
                    ?>
                    <?php
                        if($this->member->mem_id!=$brand->mem_id){
                    ?>
                        <div class="bTn formBtn txtGrp"><button type="button" class="webBtn simpleBtn blockBtn borderBtn popBtn" data-popup="write-review">Write a Review</button></div>
                        <div class="bTn formBtn txtGrp"><button type="button" class="webBtn simpleBtn blockBtn borderBtn popBtn" data-popup="write-message">Send Message</button></div>
                    <?php
                        }
                    ?>
                        <div class="blk">
                            <ul class="infoLst">
                                <?php
                                     if ($brand->plan==3) {
                                         ?>
                                <li><img src="<?=base_url()?>assets/images/icon-envelope-fill.svg" alt=""><a href="mailto:<?=$brand->contact_email?>"><?=$brand->contact_email?></a></li>
                                <?php
                                     }
                                ?>
                                <li><img src="<?=base_url()?>assets/images/icon-website.svg" alt=""><a href="<?=$brand->website?>" target="_blank"><?=$brand->website?></a></li>
                            </ul>
                        </div>
                        <?php
                            if ($brand->plan!=1) {
                                ?>
                        <ul class="social flex">
                            <?php 
                                if(!empty($brand->instagram)){
                            ?>
                            <li><a href="<?=$brand->instagram?>"><img src="<?=base_url()?>assets/images/social-instagram.svg" alt=""></a></li>
                            <?php 
                                }
                                if(!empty($brand->facebook)){
                            ?>
                            <li><a href="<?=$brand->facebook?>"><img src="<?=base_url()?>assets/images/social-facebook.svg" alt=""></a></li>
                            <?php 
                                }
                                if(!empty($brand->youtube)){
                            ?>
                            <li><a href="<?=$brand->youtube?>"><img src="<?=base_url()?>assets/images/social-youtube.svg" alt=""></a></li>
                            <?php 
                                }
                                if(!empty($brand->twitter)){
                            ?>
                            <li><a href="<?=$brand->twitter?>"><img src="<?=base_url()?>assets/images/social-twitter.svg" alt=""></a></li>
                            <?php 
                                }
                            ?>
                        </ul>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="col col2">
                        <div class="blk">
                            <div class="content">
                                <div class="topBlk">
                                    <div class="title">
                                        <h3><?=$brand->title?>: <?=$brand->short_details?></h3>
                                        <div class="rateYo" data-rateyo-rating="<?=get_avg_rating($brand->id)?>"></div>
                                        <!-- <div class="price">£36.76 <del>£45.95</del></div> -->
                                    </div>
                                    <div class="progress" data-percent="<?=$brand->eco_friendly?>">
                                        <span class="left"><span></span></span>
                                        <span class="right"><span></span></span>
                                    </div>
                                </div>
                                <?=$brand->description?>
                                <?php
                                            if ($brand->plan!=1) {
                                                ?>
                                <p><a href="<?=base_url()?>signin" class="red-color">Click here to get  <?=$brand->discount_percentage?>% discount.</a></p>
                                <?php
                                            }
                                ?>
                            </div>
                            <?php
                                 if ($brand->plan==3) {
                            ?>
                            <div class="br"></div>
                            <div class="vidBlk">
                                <iframe src="<?=$brand->video_url?>"></iframe>
                            </div>
                            <?php
                                 }
                            ?>
                            <!-- <hr>
                            <div class="proCon">
                                <h4>Eco Pros and Cons</h4>
                                <div class="outer flex">
                                    <div class="inter">
                                        <ul class="pros">
                                            <li>Biodegradable</li>
                                            <li>Compostable</li>
                                            <li>Locally Produced</li>
                                            <li>Reusable</li>
                                        </ul>
                                    </div>
                                    <div class="inter">
                                        <ul class="cons">
                                            <li>Plastic Packaging</li>
                                            <li>Made with Cotton</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <hr>
                            <?php
                                 if ($brand->plan==3) {
                                     ?>
                            <div class="faqBox">
                                <h4>FAQ's</h4>
                                <div class="faqLst">
                                <?php
                                    $faqs=get_brand_question($brand->id);
                                    if (!empty($faqs)) {
                                        foreach ($faqs as $faq) {
                                            ?>
                                    <div class="faqBlk">
                                        <h5><?=$faq->question?></h5>
                                        <div class="txt">
                                            <p><?=$faq->answer?></p>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                
                            </div>
                            <?php
                                 }
                                ?> 
                            <hr>
                            <?php
                                if(!empty($reviews)){
                            ?>
                            <div class="reviews">
                                <div class="_header">
                                    <h4><?=count($reviews)?> Reviews</h4>
                                    <div class="rateYo" data-rateyo-rating="<?=get_avg_rating($brand->id)?>"></div>
                                </div>
                                <?php 
                                    foreach($reviews as $review){
                                ?>
                                <div class="review">
                                    <div class="ico"><img src="<?=get_site_image_src("members", get_mem_image($review->mem_id), 'thumb_')?>" alt="<?=get_mem_name($review->mem_id)?>"></div>
                                    <div class="txt">
                                        <div class="icoTxt">
                                            <div class="title">
                                                <h5><?=get_mem_name($review->mem_id)?></h5>
                                                <div class="rateYo" data-rateyo-rating="<?=$review->ratings?>"></div>
                                            </div>
                                            <div class="date"><?=format_date($review->created_date, 'M, Y')?></div>
                                        </div>
                                        <p><?=$review->description?></p>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <?php 
                                }
                            ?>  
                        </div>
                    </div>
                </div>
                <div class="popup sm" data-popup="write-review">
                    <div class="tableDv">
                        <div class="tableCell">
                            <div class="contain">
                                <div class="_inner">
                                    <div class="crosBtn"></div>
                                    <h3>Write a Review</h3>
                                    <form action="<?=base_url('page/send_review')?>" method="post" class="frmAjax">
                                        <div class="txtGrp">
                                            <h5>Leave Review</h5>
                                           <div class="" id="rateYo" data-rateyo-rating="0" data-rateyo-star-width="20px" data-rateyo-read-only="false"></div>
                                            <input type="hidden" name="ratings" id="rating_val" />
                                            <input type="hidden" name="b_id" value="<?=$brand->id?>" />
                                        </div>
                                        <div class="txtGrp">
                                            <label for="">Write a little description</label>
                                            <textarea name="description" id="description" class="txtBox" required=""></textarea>
                                        </div>
                                        <div class="bTn text-center">
                                            <button type="submit" class="webBtn"><i class="spinner hidden"></i> Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup" data-popup="write-message">
                    <div class="tableDv">
                        <div class="tableCell">
                            <div class="contain">
                                <div class="_inner">
                                    <div class="crosBtn"></div>
                                    <h3>Write a message</h3>
                                    <form action="<?=base_url('page/send_message')?>" method="post" class="frmAjax">
                                        <div class="txtGrp">
                                            <label for="">Write a Message</label>
                                            <textarea name="message" id="message" class="txtBox" required=""></textarea>
                                            <input type="hidden" name="mem_id" value="<?=$brand->mem_id?>" />
                                            <input type="hidden" name="b_id" value="<?=$brand->id?>" />
                                        </div>
                                        <div class="bTn text-center">
                                            <button type="submit" class="webBtn"><i class="spinner hidden"></i> Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- detail -->


    </main>
