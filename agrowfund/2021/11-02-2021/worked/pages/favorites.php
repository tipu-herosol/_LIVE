<main dash>
    <?php $this->load->view('includes/sidebar'); ?>


    <section id="favorite">
        <div class="contain-fluid" data-aos="fade-down" data-aos-duration="1000">
            <div class="flexRow flex">
                <?php
                if (!empty($favorites)) {
                    foreach ($favorites as $project) {
                        $in_projects = get_project_row($project->p_id);
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
                                    <span>Projet <?= get_Project_Status($in_projects->project_status) ?></span>
                                    <div class="btm">
                                        <div class="inr">
                                            <span class="price">Dons: <strong><?= format_amount(getTotalProjectDonations($in_projects->id, 'donate')) ?></strong></span>
                                            <a href="<?= ($this->session->userdata('site_lang') == 'fr') ? base_url('project-detail/' . doEncode($in_projects->id) . "/" . $in_projects->fr_slug) : base_url('project-detail/' . doEncode($in_projects->id) . "/" . $in_projects->slug) ?>" class="webBtn learnBtn">Voir plus <img src="<?= base_url() ?>assets/images/arrow-right-sm.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>aucun projet trouvé dans les favoris !</em></div>
                <?php
                }
                ?>
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
    <!-- favorite -->


</main>