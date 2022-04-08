<main dash>
    <?php $this->load->view('includes/sidebar'); ?>


    <section id="historical">
        <div class="contain-fluid">
            <div class="topHead">
                <ul class="tabLst flex">
                    <li class="active"><a data-toggle="tab" href="#Donations">Mes Dons</a></li>
                    <li><a data-toggle="tab" href="#Investments">Mes Investissements</a></li>
                </ul>

            </div>
            <div class="tab-content">
                <div id="Donations" class="tab-pane fade in active">
                    <div id="price" class="price text-right">Total des dons: <strong><?= format_amount($total_donations) ?></strong></div>
                    <div class="flexRow flex">
                        <?php
                        if (!empty($donate_projects)) {
                            foreach ($donate_projects as $donate_project) {
                        ?>
                                <div class="col">
                                    <div class="projBlk">
                                        <div class="fig">
                                        <div class="image"><img src="<?= get_site_image_src("projects", $donate_project->image, 'thumb_'); ?>" alt="<?= ($this->session->userdata('site_lang')=='fr') ? $donate_project->fr_title : $donate_project->title ?>"></div>
                                            <div class="playBlk popBtn" data-popup="video" data-store="<?=vimeo_youtube($donate_project->video)['code']?>" data-video_type="<?=vimeo_youtube($donate_project->video)['type']?>"></div>
                                        </div>
                                        <div class="txt">
                                        <h5><a href="<?=($this->session->userdata('site_lang')=='fr') ? base_url('project-detail/'.doEncode($donate_project->id)."/".$donate_project->fr_slug) : base_url('project-detail/'.doEncode($donate_project->id)."/".$donate_project->slug) ?>"><?= ($this->session->userdata('site_lang')=='fr') ? $donate_project->fr_title : $donate_project->title ?></a></h5>
                                            <p><?= ($this->session->userdata('site_lang')=='fr') ? short_text($donate_project->fr_details, 80) : short_text($donate_project->details, 80) ?></p>
                                            <span>Projet Fermé</span>
                                            <div class="btm">
                                                <div class="inr">
                                                    <span class="price">Dons: <strong><?= format_amount($donate_project->donation) ?></strong></span>
                                                    <a href="?" class="webBtn learnBtn">Voir plus <img src="<?= base_url() ?>assets/images/arrow-right-sm.svg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>Aucun projet trouvé pour le moment !</em></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div id="Investments" class="tab-pane fade">
                    <div id="price" class="price text-right">Total investi: <strong><?= format_amount($total_investments) ?></strong></div>
                    <div class="flexRow flex">

                        <?php
                        if (!empty($invest_projects)) {
                            foreach ($invest_projects as $invest_project) {
                        ?>
                                <div class="col">
                                    <div class="projBlk">
                                        <div class="fig">
                                        <div class="image"><img src="<?= get_site_image_src("projects", $invest_project->image, 'thumb_'); ?>" alt="<?= ($this->session->userdata('site_lang')=='fr') ? $invest_project->fr_title : $invest_project->title ?>"></div>
                                            <div class="playBlk popBtn" data-popup="video" data-store="<?=vimeo_youtube($invest_project->video)['code']?>" data-video_type="<?=vimeo_youtube($invest_project->video)['type']?>"></div>
                                        </div>
                                        <div class="txt">
                                        <h5><a href="<?=($this->session->userdata('site_lang')=='fr') ? base_url('project-detail/'.doEncode($invest_project->id)."/".$invest_project->fr_slug) : base_url('project-detail/'.doEncode($invest_project->id)."/".$invest_project->slug) ?>"><?= ($this->session->userdata('site_lang')=='fr') ? $invest_project->fr_title : $invest_project->title ?></a></h5>
                                            <p><?= ($this->session->userdata('site_lang')=='fr') ? short_text($invest_project->fr_details, 80) : short_text($invest_project->details, 80) ?></p>
                                            <span>Projet Fermé</span>
                                            <div class="btm">
                                                <div class="inr">
                                                    <span class="price">Dons: <strong><?= format_amount($invest_project->donation) ?></strong></span>
                                                    <a href="?" class="webBtn learnBtn">Voir plus <img src="<?= base_url() ?>assets/images/arrow-right-sm.svg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>Aucun projet trouvé pour le moment !</em></div>
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
    <!-- historical -->


</main>