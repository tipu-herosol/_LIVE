<main common projects>


    <section id="layer">
        <div class="contain">
            <div class="content" data-aos="fade" data-aos-duration="1000">
                <h1 class="heading"><?= ($this->session->userdata('site_lang') == 'fr') ? $row->fr_title : $row->title ?></h1>
            </div>
        </div>
    </section>
    <!-- layer -->


    <section id="detail">
        <div class="contain">
            <div class="flexRow flex">
                <div class="col col1" data-aos="fade" data-aos-duration="1000">
                    <div id="owl-gallery" class="owl-carousel owl-theme">
                        <?php
                        if (!empty($images)) {
                            foreach ($images as $image) {
                        ?>
                                <div class="vidBlk popBtn" style="background-image: url('<?= get_site_image_src('projects/', $image->image); ?>');" data-hash="item1" data-popup="video" data-store="<?= vimeo_youtube($row->video)['code'] ?>"></div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="vidBlk popBtn" style="background-image: url('<?= get_site_image_src("projects/", $row->image, 'thumb_') ?>');" data-hash="item1" data-popup="video" data-store="<?= vimeo_youtube($row->video)['code'] ?>"></div>
                        <?php
                        }
                        ?>
                    </div>
                    <div id="owl-thumbs" class="owl-carousel owl-theme">
                        <?php
                        if (!empty($images)) {
                            foreach ($images as $image) {
                        ?>
                                <a href="#item1" class="icon"><img src="<?= get_site_image_src('projects/', $image->image); ?>" alt=""></a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="locateBtn">
                        <div class="icon"><img src="<?= base_url() ?>assets/images/icon-map-marker.svg" alt=""></div> <?= ($this->session->userdata('site_lang') == 'fr') ? $row->fr_location : $row->location ?>
                    </div>
                    <ul class="smTag flex">
                        <li><?= get_date_difference($row->project_last_date) ?> restants</li>
                        <li><img src="<?= base_url() ?>assets/images/icon-tag.svg" alt=""> <?= ($this->session->userdata('site_lang') == 'fr') ? $row->fr_project_type : $row->project_type ?></li>
                    </ul>
                    <ul class="tabList flex">
                        <li class="active"><a data-toggle="tab" href="#Histoire"><?= $site_content['tab1_text'] ?></a></li>
                        <li><a data-toggle="tab" href="#Faqs"><?= $site_content['tab2_text'] ?></a></li>
                        <li><a data-toggle="tab" href="#Commentaires"><?= $site_content['tab3_text'] ?></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="Histoire" class="tab-pane fade in active">
                            <?= ($this->session->userdata('site_lang') == 'fr') ? $row->fr_details : $row->details ?>
                        </div>
                        <div id="Faqs" class="tab-pane fade">
                            <h3>Foire Aux Questions</h3>
                            <div class="faqBox">
                                <div class="faqLst">
                                    <?php
                                    if (!empty($faqs)) {
                                        foreach ($faqs as $faq) {
                                    ?>
                                            <div class="faqBlk">
                                                <h5><?= ($this->session->userdata('site_lang') == 'fr') ? $faq->fr_question : $faq->question ?></h5>
                                                <div class="txt">
                                                    <p><?= ($this->session->userdata('site_lang') == 'fr') ? $faq->fr_answer : $faq->answer ?></p>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>aucune faq trouvée pour ce projet !</em></div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div id="Commentaires" class="tab-pane fade">
                            <div class="reviews">
                                <?php
                                if (!empty($projectComments)) {
                                    foreach ($projectComments as $projectComment) {
                                ?>
                                        <div class="review">
                                            <div class="ico"><img src="<?= get_site_image_src("members", get_mem_image($projectComment->mem_id), 'thumb_') ?>" alt="<?= get_mem_name($projectComment->mem_id) ?>"></div>
                                            <div class="txt">
                                                <h5><?= get_mem_name($projectComment->mem_id) ?> donated <strong><?= format_amount($projectComment->amount) ?></strong></h5>
                                                <p><?= $projectComment->comment ?></p>
                                                <div class="date"><?= format_date($projectComment->created_date, 'M d, Y') ?></div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>aucun commentaire trouvé !</em></div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col2" data-aos="fade" data-aos-duration="1000">
                    <div class="sideBlk blk">
                        <div class="crosBtn"></div>
                        <div class="price"><?= format_amount(getTotalProjectDonations($row->id, 'donate')) ?> <small>Financés sur <?= format_amount($row->project_amount) ?></small></div>
                        <div class="prog">
                            <div style="width: <?= projectPaymentPercentage($row->project_amount, getTotalProjectDonations($row->id, 'donate')) ?>%;"></div>
                        </div>
                        <ul class="numLst flex">
                            <li>
                                <div class="cnt"><?= count_project_shares($row->id) ?> <small>Partages</small></div>
                            </li>
                            <li>
                                <div class="cnt"><?= getTotalProjectMembers($row->id, 'donate') ?> <small>Donateurs</small></div>
                            </li>
                            <li>
                                <div class="cnt"><?= getTotalProjectMembers($row->id, 'invest') ?> <small>Investisseurs</small></div>
                            </li>
                            <li>
                                <div class="cnt"><?= format_amount($package->min_price) ?> <small>Invest. Min</small></div>
                            </li>
                            <li>
                                <div class="cnt"><?= format_amount($package->max_price) ?> <small>Invest max</small></div>
                            </li>
                            <li>
                                <div class="cnt">10-30% <small>Retour sur Invest</small></div>
                            </li>
                            <li>
                                <div class="cnt"><?= getTotalProjectPeople($row->id) ?> personnes ont fait un don</div>
                            </li>
                        </ul>
                        <div class="br"></div>
                        <?php
                        if (!empty($lastDonar)) {
                        ?>

                            <div class="donorBlk">
                                <div class="ico"><img src="<?= base_url() ?>assets/images/placeholder_black.svg" alt=""></div>
                                <div class="txt">
                                    <div class="name"><?= ucfirst($lastDonar->fname . " " . $lastDonar->lname) ?></div>
                                    <div class="small"><strong><?= format_amount($lastDonar->amount) ?></strong><em> • </em><u class="popDonor" data-popup="donors" data-donars='<?= json_encode($allDonars) ?>'>Don Recent</u></div>
                                </div>
                            </div>
                        <?php
                        }
                        if (!empty($highPaid)) {
                        ?>
                            <div class="donorBlk">
                                <div class="ico"><img src="<?= base_url() ?>assets/images/placeholder_color.svg" alt=""></div>
                                <div class="txt">
                                    <div class="name"><?= ucfirst($highPaid->fname . " " . $highPaid->lname) ?></div>
                                    <div class="small"><strong><?= format_amount($highPaid->amount) ?></strong><em> • </em><u class="popDonor" data-popup="donors" data-donars='<?= json_encode($topDonars) ?>'>Top Don</u></div>
                                </div>
                            </div>
                            <hr>
                        <?php
                        }
                        ?>

                        <div class="smBtn">
                            <button type="button" class="shareBtn popProBtn" data-popup="share" data-share="true" data-id="<?= $row->id ?>">
                                <figure><img src="<?= base_url() ?>assets/images/icon-share.svg" alt=""></figure> <?= $site_content['share_text'] ?>
                            </button>
                            <button type="button" class="likeBtn" id="pLikeBtn" data-id="<?= doEncode($row->id) ?>">
                                <?php
                                if (!empty(favoriteRow($row->id, $this->member->mem_id))) {
                                ?>
                                    <figure><img src="<?= base_url() ?>assets/images/icon-heart-alt.svg" alt="" id="likedImg"></figure> <?= $site_content['follow_text'] ?>
                                <?php
                                } else {
                                ?>
                                    <figure><img src="<?= base_url() ?>assets/images/icon-heart.svg" alt="" id="likedImg"></figure> <?= $site_content['follow_text'] ?>
                                <?php
                                }
                                ?>

                            </button>
                        </div>
                        <?php
                        if ($row->project_status == 'in_progress') {
                        ?>
                            <div class="bTn">
                                <a href="<?= base_url('checkout-donate/' . $row->project_code) ?>" class="webBtn blankBtn borderBtn"><?= $site_content['donation_btn'] ?></a>
                                <a href="<?= base_url('checkout-invest/' . $row->project_code) ?>" class="webBtn"><?= $site_content['invest_btn'] ?></a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="bTn dataBtn" data-aos="fade" data-aos-duration="1000">
                <button type="button" class="webBtn blockBtn">Voir le financement</button>
            </div>
        </div>
        <div class="popup sm" data-popup="donors">
            <div class="tableDv">
                <div class="tableCell">
                    <div class="contain">
                        <div class="_inner">
                            <div class="crosBtn"></div>
                            <h4>Tous les donateurs</h4>
                            <div class="donorOuter scrollbar" id="donarHtml">

                            </div>
                            <!-- <div class="bTn formBtn">
                                <a href="?" class="webBtn blockBtn">Voir les top donateurs</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup" data-popup="share">
            <div class="tableDv">
                <div class="tableCell">
                    <div class="contain">
                        <div class="_inner">
                            <div class="crosBtn"></div>
                            <h2>Partagez le projet </h2>
                            <p>Augmentez la visibilité du projet en le partageant autour de vous et ainsi faites profiter de cette opportunité à vos proches. </p>
                            <hr>
                            <ul class="socialLst flex">
                                <li>
                                    <a href="javascript:void(0)">
                                        <figure class="icon"><img src="<?= base_url() ?>assets/images/social-facebook.svg" alt=""></figure>Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <figure class="icon"><img src="<?= base_url() ?>assets/images/social-instagram.svg" alt=""></figure>Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <figure class="icon"><img src="<?= base_url() ?>assets/images/social-twitter.svg" alt=""></figure>Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <figure class="icon"><img src="<?= base_url() ?>assets/images/social-linkedin.svg" alt=""></figure>Linkedin
                                    </a>
                                </li>
                            </ul>
                            <hr>
                            <div class="frmGrp">

                                <div class="txtGrp">
                                    <label for="" class="move">Lien</label>
                                    <input type="text" name="" id="project_link" class="txtBox" value="<?= ($this->session->userdata('site_lang') == 'fr') ? base_url('project-detail/' . doEncode($row->id) . "/" . $row->fr_slug) : base_url('project-detail/' . doEncode($row->id) . "/" . $row->slug) ?>" disabled>
                                </div>
                                <div class="bTn">
                                    <button type="button" class="webBtn" onclick="copyToClipboard('project_link')">Copier le lien</button>
                                </div>

                            </div>
                            <di id="copied" style="color: #01e5aa;"></di>
                        </div>
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
                            <!-- <iframe src="https://www.youtube.com/embed/G3k0qlLag74"></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- detail -->


    <section id="cover">
        <div class="contain">
            <div class="inside" style="background-image: url('<?= get_site_image_src("images/", $site_content['image1']) ?>');">
                <div class="content text-center" data-aos="fade" data-aos-duration="1000">
                    <h1 class="heading center"><?= $site_content['sixth_heading'] ?></h1>
                    <div class="bTn">
                        <a href="<?= $site_content['sixth_link_url'] ?>" class="webBtn"><?= $site_content['sixth_link_text'] ?></a>
                    </div>
                </div>
            </div>
            <div class="leaf left"><img src="<?= base_url() ?>assets/images/leaf_001.svg" alt=""></div>
            <div class="leaf right"><img src="<?= base_url() ?>assets/images/leaf_002.svg" alt=""></div>
        </div>
    </section>
    <!-- cover -->



</main>