<!doctype html>



<html>







<head>



    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>



    <?php $this->load->view('includes/site-master'); ?>



</head>







<body id="home-page">



    <?php $this->load->view('includes/header'); ?>



    <main common quotes>


        <section id="sBanner">



            <div class="contain">



                <div class="content">



                    <h2 class="heading"><?= $content['heading'] ?></h2>



                    <p><?= $content['header_detail'] ?></p>



                </div>



            </div>



            <div class="image"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image1']) ?>" alt=""></div>



        </section>



        <!-- sBanner -->











        <section id="quotes">



            <div class="contain">



                <h2 class="heading text-center">Best Deals in your Area</h2>



                <?php if (empty($vendors)) : ?>



                    <div class="alert alert-info alert-sm text-white">No quote available.</div>



                <?php else : ?>



                    <div class="flexRow flex quotes">



                        <?php foreach ($vendors as $key => $row) : ?>



                            <div class="col" style="display:none">



                                <div class="srchBlk">



                                    <div class="icoBlk">



                                        <div class="icon"><img src="<?= get_site_image_src("members", $row->mem_image, 'thumb_'); ?>" alt=""></div>



                                        <h6><?= $row->mem_fname . ' ' . $row->mem_lname ?></h6>



                                        <div class="rateYo" data-rateyo-rating="<?= get_mem_avg_rating($row->mem_id) ?>"></div>



                                        <small><?= round($row->distance, 2) ?> Miles Away</small>



                                        <?php if ($row->mem_company_pickdrop == 'yes') : ?>



                                            <div class="fig"><img src="<?= base_url() ?>assets/images/vector-wait.svg" alt=""></div>



                                            <p class="small">Pickup & Delivery Service Available</p>



                                        <?php else : ?>



                                            <div class="fig"><img src="<?= base_url() ?>assets/images/vector-wait-cross.svg" alt=""></div>



                                            <p class="small">Pickup & Delivery Service Not Available</p>



                                        <?php endif; ?>



                                        <div class="priceBlk">



                                            <strong>Estimated Price</strong>



                                            <div class="price">£<?= $row->estimated_price ?></div>



                                            <div class="bTn">



                                                <a href="<?= base_url() ?>vendor-detail/<?= doEncode($row->mem_id) ?>/<?= doEncode(round($row->distance, 2)) ?>" class="webBtn mdBtn blockBtn">View Detail</a>



                                            </div>



                                        </div>



                                    </div>



                                </div>



                            </div>



                    <?php



                        endforeach;



                    endif; ?>



                    </div>



                    <?php if (count($vendors) > 4) : ?>



                        <div class="bTn formBtn text-center more-less-quotes">



                            <button onclick="loadMore();" class="webBtn lightBtn">More Quotes <i class="fi-arrow-right"></i></button>



                        </div>



                    <?php endif; ?>



            </div>



        </section>



        <!-- quotes -->



        <script>
            var total = '<?= count($vendors) ?>';



            var size_quotes = $(".quotes .col").length;



            var append_size = 4;



            var x = 4;



            $(document).ready(function() {



                $('.quotes .col:lt(' + x + ')').show();



            });







            const loadMore = () => {



                x = (x + append_size <= size_quotes) ? x + append_size : size_quotes;



                $('.quotes .col:lt(' + x + ')').show();



                if (x == total) {



                    $('.more-less-quotes').empty().append(`<button onclick="showLess();" class="webBtn lightBtn">Show Less <i class="fi-arrow-right"></i></button>`);



                }



            }







            const showLess = () => {



                x = 4;



                $('.quotes .col').not(':lt(' + x + ')').hide();



                $('.more-less-quotes').empty().append(`<button onclick="loadMore();" class="webBtn lightBtn">More Quotes <i class="fi-arrow-right"></i></button>`);



            }
        </script>







    </main>



    <?php $this->load->view('includes/footer'); ?>



</body>







</html>