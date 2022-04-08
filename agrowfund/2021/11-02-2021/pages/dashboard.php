<main dash>
    <?php $this->load->view('includes/sidebar'); ?>


    <section id="dash">
        <div class="contain-fluid">
            <div class="profBlk">
                <div class="ico"><img src="<?= get_site_image_src("members", $this->member->mem_image, 'thumb_') ?>" alt="<?= $this->member->mem_fname . ' ' . $this->member->mem_lname ?>"></div>
                <div class="txt">
                    <h1><span class="regular">Bienvenue, </span><?= $this->member->mem_fname . ' ' . $this->member->mem_lname ?></h1>
                    <p>Vous êtes connecté à votre tableau de bord</p>
                </div>
            </div>
            <div class="cardRow flex">
                <div class="col">
                    <div class="tileBlk">
                        <div class="top">
                            <div class="txt">
                                <span>Total des dons</span>
                                <div class="price" id="donation_value"><?= (!empty($this->session->donation)) ? $this->session->donation :  format_amount($total_donations) ?></div>
                            </div>
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-give.svg" alt=""></div>
                        </div>
                        <div class="btm">
                            <div class="switchBtn">
                                <div class="switch">
                                    <input type="checkbox" name="donation" id="donation" <?= ($this->session->donation_toggle == 'false') ? 'checked' :  '' ?>>
                                    <em></em>
                                </div>
                                <span>Cacher la balance</span>
                            </div>
                            <a href="?" class="webBtn learnBtn">Voir plus <img src="<?= base_url() ?>assets/images/arrow-right-sm.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="tileBlk">
                        <div class="top">
                            <div class="txt">
                                <span>Total investi</span>
                                <div class="price" id="investment_value"><?= (!empty($this->session->investment)) ? $this->session->investment :  format_amount($total_investments) ?></div>
                            </div>
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-give-money.svg" alt=""></div>
                        </div>
                        <div class="btm">
                            <div class="switchBtn">
                                <div class="switch">
                                    <input type="checkbox" name="investment" id="investment" <?= ($this->session->investment_toggle == 'false') ? 'checked' :  '' ?>>
                                    <em></em>
                                </div>
                                <span>Cacher la balance</span>
                            </div>
                            <a href="?" class="webBtn learnBtn">Voir plus <img src="<?= base_url() ?>assets/images/arrow-right-sm.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="tileBlk">
                        <div class="top">
                            <div class="txt">
                                <span>Solde disponible</span>
                                <div class="price">$******.00</div>
                            </div>
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-wallet.svg" alt=""></div>
                        </div>
                        <div class="btm">
                            <div class="switchBtn">
                                <div class="switch">
                                    <input type="checkbox" name="available_balance" id="available_balance">
                                    <em></em>
                                </div>
                                <span>Cacher la balance</span>
                            </div>
                            <a href="?" class="webBtn learnBtn">Voir plus <img src="<?= base_url() ?>assets/images/arrow-right-sm.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bnrRow flex">
                <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <div class="col">
                        <div class="bnr"><img src="<?= get_site_image_src("images/", $site_content['image' . $i]) ?>" alt=""></div>
                    </div>
                <?php endfor; ?>
            </div>
            <h4 class="subheading">Projets en cours</h4>
            <div class="flexRow flex">
                <?php
                if (!empty($in_progress_projects)) {
                    foreach ($in_progress_projects as $in_projects) {
                ?>
                        <div class="col">
                            <div class="projBlk">
                                <div class="fig">
                                    <div class="image"><img src="<?= get_site_image_src("projects", $in_projects->image, 'thumb_'); ?>" alt="<?= ($this->session->userdata('site_lang')=='fr') ? $in_projects->fr_title : $in_projects->title ?>"></div>
                                    <div class="playBlk popBtn" data-popup="video" data-store="<?=vimeo_youtube($in_projects->video)['code']?>" data-video_type="<?=vimeo_youtube($in_projects->video)['type']?>"></div>
                                </div>
                                <div class="txt">
                                    <h5><a href="<?=($this->session->userdata('site_lang')=='fr') ? base_url('project-detail/'.doEncode($in_projects->id)."/".$in_projects->fr_slug) : base_url('project-detail/'.doEncode($in_projects->id)."/".$in_projects->slug) ?>"><?= ($this->session->userdata('site_lang')=='fr') ? $in_projects->fr_title : $in_projects->title ?></a></h5>
                                    <p><?= ($this->session->userdata('site_lang')=='fr') ? short_text($in_projects->fr_details, 80) : short_text($in_projects->details, 80) ?></p>
                                    <div class="btm">
                                        <span><?= format_amount(getTotalProjectDonations($in_projects->id, 'donate')) ?> Levés</span>
                                        <!-- <div class="range">
                                            <input type="range" disabled class="form-range" id="" min="1" max="<?= $in_projects->project_amount ?>" value="<?= getTotalProjectDonations($in_projects->id, 'donate') ?>">
                                        </div> -->
                                        <div class="prog">
                                            <div style="width: <?=projectPaymentPercentage($in_projects->project_amount,getTotalProjectDonations($in_projects->id, 'donate'))?>%;"></div>
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
    <!-- dash -->


</main>