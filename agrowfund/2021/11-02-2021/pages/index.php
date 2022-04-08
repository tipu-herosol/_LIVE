<main index>


        <section id="banner">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="content">
                            <?= $site_content['banner_detail'] ?>
                            <div class="bTn">
                                <a href="<?= $site_content['banner_button_link'] ?>" class="webBtn"><?= $site_content['banner_button_text'] ?></a>
                                <a href="<?= $site_content['banner_button_link2'] ?>" class="webBtn blankBtn"><?= $site_content['banner_button_text2'] ?> <img src="<?= base_url() ?>assets/images/arrow-right-sm.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="image">
                            <div class="fig">
                            <?php for($i = 1; $i <= 2; $i++):?>
                                <figure href="<?=get_site_image_src("images/", $site_content['image'.$i])?>" data-fancybox="banner">
                                    <img src="<?=get_site_image_src("images/", $site_content['image'.$i])?>">
                                </figure>
                            <?php endfor; ?>    
                            </div>
                            <div class="fig">
                            <?php for($i = 3; $i <= 4; $i++):?>
                                <figure href="<?=get_site_image_src("images/", $site_content['image'.$i])?>" data-fancybox="banner">
                                    <img src="<?=get_site_image_src("images/", $site_content['image'.$i])?>">
                                </figure>
                            <?php endfor; ?>  
                            </div>
                            <div class="leaf"><img src="<?= base_url() ?>assets/images/leaf_000.svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner -->


        <section id="recent">
            <div class="contain">
                <div class="content text-center">
                    <h6 class="color"><?= $site_content['first_short_heading'] ?></h6>
                    <h1 class="heading center"><?= $site_content['first_heading'] ?></h1>
                </div>
                <div class="topHead">
                    <ul class="tabLst flex">
                        <li class="active"><a data-toggle="tab" href="#Progress"><?= $site_content['first_tab_1'] ?></a></li>
                        <li><a data-toggle="tab" href="#Coming"><?= $site_content['first_tab_2'] ?></a></li>
                        <li><a data-toggle="tab" href="#Closed"><?= $site_content['first_tab_3'] ?></a></li>
                    </ul>
                    <div class="bTn">
                        <a href="<?= $site_content['first_link_url'] ?>" class="webBtn learnBtn"><?= $site_content['first_link_text'] ?> <img src="<?= base_url() ?>assets/images/arrow-right-sm.svg" alt=""></a>
                    </div>
                </div>
                <div class="tab-content">
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
                                            <a href="<?=($this->session->userdata('site_lang')=='fr') ? base_url('project-detail/'.doEncode($in_projects->id)."/".$in_projects->fr_slug) : base_url('project-detail/'.doEncode($in_projects->id)."/".$in_projects->slug) ?>">
                                                <img src="<?= get_site_image_src("projects", $in_projects->image, 'thumb_'); ?>" alt="<?= ($this->session->userdata('site_lang')=='fr') ? $in_projects->fr_title : $in_projects->title ?>">
                                            </a>
                                        </div>
                                        <div class="playBlk popBtn" data-popup="video" data-store="<?=vimeo_youtube($in_projects->video)['code']?>"></div>
                                    </div>
                                    <div class="txt">
                                        <h5><a href="<?=($this->session->userdata('site_lang')=='fr') ? base_url('project-detail/'.doEncode($in_projects->id)."/".$in_projects->fr_slug) : base_url('project-detail/'.doEncode($in_projects->id)."/".$in_projects->slug) ?>"><?= ($this->session->userdata('site_lang')=='fr') ? $in_projects->fr_title : $in_projects->title ?></a></h5>
                                        <p><?= ($this->session->userdata('site_lang')=='fr') ? short_text($in_projects->fr_details, 80) : short_text($in_projects->details, 80) ?></p>
                                        <div class="btm">
                                            <span><?= format_amount(getTotalProjectDonations($in_projects->id, 'donate')) ?> Levés</span>
                                            <div class="prog">
                                                <div  style="width: <?=projectPaymentPercentage($in_projects->project_amount,getTotalProjectDonations($in_projects->id, 'donate'))?>%;"></div>
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
                                }
                                else{
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
                                <div class="projBlk clm">
                                    <div class="fig">
                                        <div class="image">
                                           <a href="<?=($this->session->userdata('site_lang')=='fr') ? base_url('project-detail/'.doEncode($coming_soon_project->id)."/".$coming_soon_project->fr_slug) : base_url('project-detail/'.doEncode($coming_soon_project->id)."/".$coming_soon_project->slug) ?>">
                                                <img src="<?= get_site_image_src("projects", $coming_soon_project->image, 'thumb_'); ?>" alt="<?= ($this->session->userdata('site_lang')=='fr') ? $coming_soon_project->fr_title : $coming_soon_project->title ?>">
                                            </a>
                                        </div>
                                        <div class="playBlk popBtn" data-popup="video" data-store="<?=vimeo_youtube($coming_soon_project->video)['code']?>"></div>
                                    </div>
                                    <div class="txt">
                                        <h5><a href="project-detail.php"><?= ($this->session->userdata('site_lang')=='fr') ? $coming_soon_project->fr_title : $coming_soon_project->title ?></a></h5>
                                        <p><?= ($this->session->userdata('site_lang')=='fr') ? short_text($coming_soon_project->fr_details, 80) : short_text($coming_soon_project->details, 80) ?></p>
                                        <div class="btm">
                                            <span><?= format_amount(getTotalProjectDonations($coming_soon_project->id, 'donate')) ?> Levés</span>
                                            <div class="prog">
                                                <div style="width: <?=projectPaymentPercentage($coming_soon_project->project_amount,getTotalProjectDonations($coming_soon_project->id, 'donate'))?>%;"></div>
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
                            foreach ($closed_projects as $closed_project) {
                        ?>
                            <div class="col">
                                <div class="projBlk clm">
                                    <div class="fig">
                                        <div class="image">
                                            <a href="<?=($this->session->userdata('site_lang')=='fr') ? base_url('project-detail/'.doEncode($closed_project->id)."/".$closed_project->fr_slug) : base_url('project-detail/'.doEncode($closed_project->id)."/".$closed_project->slug) ?>">
                                                <img src="<?= get_site_image_src("projects", $closed_project->image, 'thumb_'); ?>" alt="<?= ($this->session->userdata('site_lang')=='fr') ? $closed_project->fr_title : $closed_project->title ?>">
                                            </a>
                                        </div>
                                        <div class="playBlk popBtn" data-popup="video" data-store="<?=vimeo_youtube($closed_project->video)['code']?>"></div>
                                    </div>
                                    <div class="txt">
                                        <h5><a href="<?=($this->session->userdata('site_lang')=='fr') ? base_url('project-detail/'.doEncode($closed_project->id)."/".$closed_project->fr_slug) : base_url('project-detail/'.doEncode($closed_project->id)."/".$closed_project->slug) ?>"><?= ($this->session->userdata('site_lang')=='fr') ? $closed_project->fr_title : $closed_project->title ?></a></h5>
                                        <p><?= ($this->session->userdata('site_lang')=='fr') ? short_text($closed_project->fr_details, 80) : short_text($closed_project->details, 80) ?></p>
                                        <div class="btm">
                                            <span><?= format_amount(getTotalProjectDonations($closed_project->id, 'donate')) ?> Levés</span>
                                            <div class="prog">
                                                <div style="width: <?=projectPaymentPercentage($closed_project->project_amount,getTotalProjectDonations($closed_project->id, 'donate'))?>%;"></div>
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
        <!-- recent -->


        <section id="steps" style="background-image: url('<?=get_site_image_src("images/", $site_content['image5'])?>');">
            <div class="contain">
                <div class="mainRow flexRow flex">
                    <div class="col col1">
                        <h6><?= $site_content['second_short_heading'] ?></h6>
                        <h1 class="heading"><?= $site_content['second_heading'] ?></h1>
                        <div class="stepRow flexRow flex">
                        <?php for($i = 1; $i <= 4; $i++):?>
                            <div class="col">
                                <div class="inner">
                                    <div class="icon"><img src="<?=get_site_image_src("images/", $site_content['third_image'.$i])?>" alt="<?= $site_content['third_heading'.$i] ?>"></div>
                                    <div class="txt">
                                        <h4><?= $site_content['third_heading'.$i] ?></h4>
                                        <p><?= $site_content['third_text'.$i] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endfor?>    
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="image">
                            <div class="fig">
                                <figure href="<?=get_site_image_src("images/", $site_content['image6'])?>" data-fancybox="steps">
                                    <img src="<?=get_site_image_src("images/", $site_content['image6'])?>">
                                </figure>
                            </div>
                            <div class="fig">
                                <figure href="<?=get_site_image_src("images/", $site_content['image7'])?>" data-fancybox="steps">
                                    <img src="<?=get_site_image_src("images/", $site_content['image7'])?>">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- steps -->


        <section id="future">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="image">
                            <div class="fig">
                            <?php $third_count=0; for($i = 8; $i <= 9; $i++):?>
                                <figure href="<?=get_site_image_src("images/", $site_content['image'.$i])?>" data-fancybox="future">
                                    <img src="<?=get_site_image_src("images/", $site_content['image'.$i])?>">
                                </figure>
                                
                            <?php
                                endfor;
                            ?>
                            </div>
                            <div class="fig">
                            <?php $third_count=0; for($i = 10; $i <= 11; $i++):?>
                                <figure href="<?=get_site_image_src("images/", $site_content['image'.$i])?>" data-fancybox="future">
                                    <img src="<?=get_site_image_src("images/", $site_content['image'.$i])?>">
                                </figure>
                                
                            <?php
                                endfor;
                            ?>
                            </div>
                            <div class="leaf"><img src="<?= base_url() ?>assets/images/leaf_003.svg" alt=""></div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="content">
                            <h6 class="color"><?= $site_content['third_short_heading'] ?></h6>
                            <h1 class="heading">Semons l’avenir avec AGROWFUND</h1>
                            <?= $site_content['third_detail'] ?>
                            <div class="bTn"><a href="<?= $site_content['third_button_link'] ?>" class="webBtn">&nbsp;&nbsp;&nbsp; <?= $site_content['third_button_text'] ?> &nbsp;&nbsp;&nbsp;</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- future -->

        <?php
            if (!empty($testimonials)) {
                ?>
        <section id="folio">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="content">
                            <h1 class="heading"><?= $site_content['fourth_heading'] ?></h1>
                            <?= $site_content['fourth_detail'] ?>
                        </div>
                    </div>
                    <div class="col col2">
                        <div id="owl-folio" class="owl-carousel owl-theme">
                            <?php
                                foreach ($testimonials as $testi) {
                                    ?>
                            <div class="inside">
                                <div class="txtBlk">
                                    <p><?=$testi->detail?></p>
                                </div>
                                <div class="icoBlk">
                                    <div class="ico"><img src="<?= get_site_image_src('testimonials', $testi->image, 'thumb_', true); ?>" alt="<?=$testi->name?>"></div>
                                    <h5><?=$testi->name?></h5>
                                    <small><?=$testi->designation?></small>
                                </div>
                            </div>
                            <?php
                                } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- folio -->
<?php
            }
?>

        <section id="business">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="content">
                            <h6 class="color"><?= $site_content['fifth_short_heading'] ?></h6>
                            <h1 class="heading"><?= $site_content['fifth_heading'] ?></h1>
                            <?= $site_content['fifth_detail'] ?>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="image">
                        <?php $fifth_count=0; for($i = 12; $i <= 13; $i++):?>
                            <div class="fig">
                                <figure><img src="<?=get_site_image_src("images/", $site_content['image'.$i])?>" alt="<?= $site_content['fifth_short_heading'] ?>"></figure>
                            </div>
                        <?php
                        endfor;
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- business -->


        <section id="cover">
            <div class="contain">
                <div class="inside" style="background-image: url('<?=get_site_image_src("images/", $site_content['image14'])?>');">
                    <div class="content text-center">
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