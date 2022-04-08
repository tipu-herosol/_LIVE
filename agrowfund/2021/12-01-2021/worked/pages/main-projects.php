<main common projects>


    <section id="layer">
        <div class="contain">
            <div class="content text-center" data-aos="fade" data-aos-duration="1000">
                <h6 class="color"><?= $site_content['banner_short_title'] ?></h6>
                <h1 class="heading center"><?= $site_content['banner_title'] ?></h1>
            </div>
        </div>
    </section>
    <!-- layer -->


    <section id="projects">
        <div class="contain">
            <div class="topHead" data-aos="fade" data-aos-duration="1000">
                <ul class="tabLst flex">
                    <li class="active"><a data-toggle="tab" href="#Progress"><?= $site_content['first_tab_heading1'] ?></a></li>
                    <li><a data-toggle="tab" href="#Coming"><?= $site_content['first_tab_heading2'] ?></a></li>
                    <li><a data-toggle="tab" href="#Closed"><?= $site_content['first_tab_heading3'] ?></a></li>
                </ul>
                <div class="miniBtn dropDown">
                    <div class="dropBtn">Filter <i class="chevron"></i></div>
                    <ul class="dropCnt dropLst right">
                        <li><span>Amount</span></li>
                        <li><span>Date</span></li>
                        <li><span>Action</span></li>
                        <li><span>Summary</span></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" data-aos="fade" data-aos-duration="1000">
                <div id="Progress" class="tab-pane fade in active">
                    <div class="flexRow flex full_height">
                        <?php
                        if (!empty($in_progress_projects)) {
                            foreach ($in_progress_projects as $in_projects) {
                        ?>
                                <div class="col">
                                    <div class="projBlk clm">
                                        <div class="fig">
                                            <div class="image">
                                                <a href="<?= ($this->session->userdata('site_lang') == 'fr') ? base_url('project-detail/' . doEncode($in_projects->id) . "/" . $in_projects->fr_slug) : base_url('project-detail/' . doEncode($in_projects->id) . "/" . $in_projects->slug) ?>">
                                                    <img src="<?= get_site_image_src("projects", $in_projects->image, 'thumb_'); ?>" alt="<?= ($this->session->userdata('site_lang') == 'fr') ? $in_projects->fr_title : $in_projects->title ?>">
                                                </a>
                                            </div>
                                            <div class="playBlk popBtn" data-popup="video" data-store="<?= vimeo_youtube($in_projects->video)['code'] ?>"></div>
                                        </div>
                                        <div class="txt">
                                            <h5><a href="<?= ($this->session->userdata('site_lang') == 'fr') ? base_url('project-detail/' . doEncode($in_projects->id) . "/" . $in_projects->fr_slug) : base_url('project-detail/' . doEncode($in_projects->id) . "/" . $in_projects->slug) ?>"><?= ($this->session->userdata('site_lang') == 'fr') ? $in_projects->fr_title : $in_projects->title ?></a></h5>
                                            <p><?= ($this->session->userdata('site_lang') == 'fr') ? short_text($in_projects->fr_details, 80) : short_text($in_projects->details, 80) ?></p>
                                            <div class="btm">
                                                <span><?= format_amount(getTotalProjectDonations($in_projects->id, 'donate')) ?> Levés</span>
                                                <div class="prog">
                                                    <div style="width: <?= projectPaymentPercentage($in_projects->project_amount, getTotalProjectDonations($in_projects->id, 'donate')) ?>%;"></div>
                                                </div>
                                                <div class="inr">
                                                    <small><?= get_date_difference($in_projects->project_last_date) ?> Restants</small>
                                                    <small>Objectif: <?= format_amount($in_projects->project_amount) ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>Aucun projet en cours n'a encore été trouvé !</em></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div id="Coming" class="tab-pane fade">
                    <div class="flexRow flex full_height">
                        <?php
                        if (!empty($coming_soon_projects)) {
                            foreach ($coming_soon_projects as $coming_soon_project) {
                        ?>
                                <div class="col">
                                    <div class="projBlk clm">
                                        <div class="fig">
                                            <div class="image">
                                                <a href="<?= ($this->session->userdata('site_lang') == 'fr') ? base_url('project-detail/' . doEncode($coming_soon_project->id) . "/" . $coming_soon_project->fr_slug) : base_url('project-detail/' . doEncode($coming_soon_project->id) . "/" . $coming_soon_project->slug) ?>">
                                                    <img src="<img src=" <?= get_site_image_src("projects", $coming_soon_project->image, 'thumb_'); ?>" alt="<?= ($this->session->userdata('site_lang') == 'fr') ? $coming_soon_project->fr_title : $coming_soon_project->title ?>">>
                                                </a>
                                            </div>
                                            <div class="playBlk popBtn" data-popup="video" data-store="<?= vimeo_youtube($coming_soon_project->video)['code'] ?>"></div>
                                        </div>
                                        <div class="txt">
                                            <h5><a href="project-detail.php"><?= ($this->session->userdata('site_lang') == 'fr') ? $coming_soon_project->fr_title : $coming_soon_project->title ?></a></h5>
                                            <p><?= ($this->session->userdata('site_lang') == 'fr') ? short_text($coming_soon_project->fr_details, 80) : short_text($coming_soon_project->details, 80) ?></p>
                                            <div class="btm">
                                                <span><?= format_amount(getTotalProjectDonations($coming_soon_project->id, 'donate')) ?> Levés</span>
                                                <div class="prog">
                                                    <div style="width: <?= projectPaymentPercentage($coming_soon_project->project_amount, getTotalProjectDonations($in_projects->id, 'donate')) ?>%;"></div>
                                                </div>
                                                <div class="inr">
                                                    <small><?= get_date_difference($coming_soon_project->project_last_date) ?> Restants</small>
                                                    <small>Objectif: <?= format_amount($coming_soon_project->project_amount) ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>Aucun projet à venir n'a encore été trouvé !</em></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div id="Closed" class="tab-pane fade">
                    <div class="flexRow flex full_height">
                        <?php
                        if (!empty($closed_projects)) {
                            foreach ($closed_project as $closed_project) {
                        ?>
                                <div class="col">
                                    <div class="projBlk clm">
                                        <div class="fig">
                                            <div class="image">
                                                <a href="<?= ($this->session->userdata('site_lang') == 'fr') ? base_url('project-detail/' . doEncode($closed_project->id) . "/" . $closed_project->fr_slug) : base_url('project-detail/' . doEncode($closed_project->id) . "/" . $closed_project->slug) ?>">
                                                    <img src="<img src=" <?= get_site_image_src("projects", $closed_project->image, 'thumb_'); ?>" alt="<?= ($this->session->userdata('site_lang') == 'fr') ? $closed_project->fr_title : $closed_project->title ?>">>
                                                </a>
                                            </div>
                                            <div class="playBlk popBtn" data-popup="video" data-store="<?= vimeo_youtube($closed_project->video)['code'] ?>"></div>
                                        </div>
                                        <div class="txt">
                                            <h5><a href="<?= ($this->session->userdata('site_lang') == 'fr') ? base_url('project-detail/' . doEncode($closed_project->id) . "/" . $closed_project->fr_slug) : base_url('project-detail/' . doEncode($closed_project->id) . "/" . $closed_project->slug) ?>"><?= ($this->session->userdata('site_lang') == 'fr') ? $closed_project->fr_title : $closed_project->title ?></a></h5>
                                            <p><?= ($this->session->userdata('site_lang') == 'fr') ? short_text($closed_project->fr_details, 80) : short_text($closed_project->details, 80) ?></p>
                                            <div class="btm">
                                                <span><?= format_amount(getTotalProjectDonations($closed_project->id, 'donate')) ?> Levés</span>
                                                <div class="prog">
                                                    <div style="width: <?= projectPaymentPercentage($closed_project->project_amount, getTotalProjectDonations($in_projects->id, 'donate')) ?>%;"></div>
                                                </div>
                                                <div class="inr">
                                                    <small><?= get_date_difference($closed_project->project_last_date) ?> Restants</small>
                                                    <small>Objectif: <?= format_amount($closed_project->project_amount) ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>Aucun projet fermé n'a encore été trouvé !</em></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- projects -->


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