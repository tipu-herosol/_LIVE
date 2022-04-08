<main dash>
    <?php $this->load->view('includes/sidebar'); ?>


    <section id="proj">
        <div class="contain-fluid" data-aos="fade-down" data-aos-duration="1000">
            <ul class="tabLst flex">
                <li class="active"><a data-toggle="tab" href="#Progress">En cours</a></li>
                <li><a data-toggle="tab" href="#Coming">Bientôt disponibles</a></li>
                <li><a data-toggle="tab" href="#Closed">Fermés</a></li>
            </ul>
            <div class="tab-content">
                <div id="Progress" class="tab-pane fade in active">
                    <div class="flexRow flex">
                        <?php
                        if (!empty($in_progress_projects)) {
                            foreach ($in_progress_projects as $in_projects) {
                        ?>
                                <div class="col">
                                    <div class="projBlk">
                                        <div class="fig">
                                            <div class="image"><img src="<?= get_site_image_src("projects", $in_projects->image, 'thumb_'); ?>" alt="<?= ($this->session->userdata('site_lang') == 'fr') ? $in_projects->fr_title : $in_projects->title ?>"></div>
                                            <div class="playBlk popBtn" data-popup="video" data-store="<?= vimeo_youtube($in_projects->video)['code'] ?>" data-video_type="<?= vimeo_youtube($in_projects->video)['type'] ?>"></div>
                                        </div>
                                        <div class="txt">
                                            <h5><a href="<?= ($this->session->userdata('site_lang') == 'fr') ? base_url('project-detail/' . doEncode($in_projects->id) . "/" . $in_projects->fr_slug) : base_url('project-detail/' . doEncode($in_projects->id) . "/" . $in_projects->slug) ?>"><?= ($this->session->userdata('site_lang') == 'fr') ? $in_projects->fr_title : $in_projects->title ?></a></h5>
                                            <p><?= ($this->session->userdata('site_lang') == 'fr') ? short_text($in_projects->fr_details, 80) : short_text($in_projects->details, 80) ?></p>
                                            <div class="btm">
                                                <span><?= format_amount(getTotalProjectDonations($in_projects->id, 'donate')) ?> Levés</span>
                                                <!-- <div class="range">
                                                    <input type="range" disabled class="form-range" id="" min="1" max="<?= $in_projects->project_amount ?>" value="<?= getTotalProjectDonations($in_projects->id, 'donate') ?>">
                                                </div> -->
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
                    <div class="flexRow flex">

                        <?php
                        if (!empty($coming_soon_projects)) {
                            foreach ($coming_soon_projects as $coming_soon_project) {
                        ?>
                                <div class="col">
                                    <div class="projBlk">
                                        <div class="fig">
                                            <div class="image"><img src="<?= get_site_image_src("projects", $coming_soon_project->image, 'thumb_'); ?>" alt="<?= ($this->session->userdata('site_lang') == 'fr') ? $coming_soon_project->fr_title : $coming_soon_project->title ?>"></div>
                                            <div class="playBlk popBtn" data-popup="video" data-store="<?= vimeo_youtube($coming_soon_project->video)['code'] ?>" data-video_type="<?= vimeo_youtube($coming_soon_project->video)['type'] ?>"></div>
                                        </div>
                                        <div class="txt">
                                            <h5><a href="<?= ($this->session->userdata('site_lang') == 'fr') ? base_url('project-detail/' . doEncode($coming_soon_project->id) . "/" . $coming_soon_project->fr_slug) : base_url('project-detail/' . doEncode($coming_soon_project->id) . "/" . $coming_soon_project->slug) ?>"><?= ($this->session->userdata('site_lang') == 'fr') ? $coming_soon_project->fr_title : $coming_soon_project->title ?></a></h5>
                                            <p><?= ($this->session->userdata('site_lang') == 'fr') ? short_text($coming_soon_project->fr_details, 80) : short_text($coming_soon_project->details, 80) ?></p>
                                            <div class="btm">
                                                <span><?= format_amount(getTotalProjectDonations($coming_soon_project->id, 'donate')) ?> Levés</span>
                                                <!-- <div class="range">
                                                    <input type="range" disabled class="form-range" id=""  min="1" max="<?= $coming_soon_project->project_amount ?>" value="<?= getTotalProjectDonations($coming_soon_project->id, 'donate') ?>">
                                                </div> -->
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
                    <div class="flexRow flex">

                        <?php
                        if (!empty($closed_projects)) {
                            foreach ($closed_project as $closed_project) {
                        ?>
                                <div class="col">
                                    <div class="projBlk">
                                        <div class="fig">
                                            <div class="image"><img src="<?= get_site_image_src("projects", $closed_project->image, 'thumb_'); ?>" alt="<?= ($this->session->userdata('site_lang') == 'fr') ? $closed_project->fr_title : $closed_project->title ?>"></div>
                                            <div class="playBlk popBtn" data-popup="video" data-store="<?= vimeo_youtube($closed_project->video)['code'] ?>" data-video_type="<?= vimeo_youtube($closed_project->video)['type'] ?>"></div>
                                        </div>
                                        <div class="txt">
                                            <h5><a href="<?= ($this->session->userdata('site_lang') == 'fr') ? base_url('project-detail/' . doEncode($closed_project->id) . "/" . $closed_project->fr_slug) : base_url('project-detail/' . doEncode($closed_project->id) . "/" . $closed_project->slug) ?>"><?= ($this->session->userdata('site_lang') == 'fr') ? $closed_project->fr_title : $closed_project->title ?></a></h5>
                                            <p><?= ($this->session->userdata('site_lang') == 'fr') ? short_text($closed_project->fr_details, 80) : short_text($closed_project->details, 80) ?></p>
                                            <div class="btm">
                                                <span><?= format_amount(getTotalProjectDonations($closed_project->id, 'donate')) ?> Levés</span>
                                                <!-- <div class="range">
                                                    <input type="range" disabled class="form-range" id=""  min="1" max="<?= $closed_project->project_amount ?>" value="<?= getTotalProjectDonations($closed_project->id, 'donate') ?>">
                                                </div> -->
                                                <div class="prog">
                                                    <div style="width: <?= projectPaymentPercentage($closed_project->project_amount, getTotalProjectDonations($closed_project->id, 'donate')) ?>%;"></div>
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
    <!-- proj -->


</main>