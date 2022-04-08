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
                         <div class="price text-right">Total des dons: <strong><?=format_amount($total_donations)?></strong></div>
                        <div class="flexRow flex">
                            <?php
                                if(!empty($donate_projects)){
                                    foreach($donate_projects as $donate_project){
                            ?>
                            <div class="col">
                                <div class="projBlk">
                                    <div class="fig">
                                        <div class="image"><img src="<?= get_site_image_src("projects", $donate_project->image, 'thumb_'); ?>" alt="<?=$donate_project->title?>"></div>
                                        <div class="playBlk popBtn" data-popup="video" data-store="<?=$donate_project->video?>"></div>
                                    </div>
                                    <div class="txt">
                                        <h5><a href="<?=$donate_project->link?>"><?=$donate_project->title?></a></h5>
                                        <p><?=short_text($donate_project->details,80)?></p>
                                        <span>Projet Fermé</span>
                                        <div class="btm">
                                            <div class="inr">
                                                <span class="price">Dons: <strong><?=format_amount($donate_project->donation)?></strong></span>
                                                <a href="?" class="webBtn learnBtn">Voir plus <img src="<?=base_url()?>assets/images/arrow-right-sm.svg" alt=""></a>
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
                                <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>No Project(s) found yet!</em></div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div id="Investments" class="tab-pane fade">
                         <div class="price text-right">Total investi: <strong><?=format_amount($total_investments)?></strong></div>
                        <div class="flexRow flex">
                            
                        <?php
                                if(!empty($invest_projects)){
                                    foreach($invest_projects as $invest_project){
                            ?>
                            <div class="col">
                                <div class="projBlk">
                                    <div class="fig">
                                        <div class="image"><img src="<?= get_site_image_src("projects", $invest_project->image, 'thumb_'); ?>" alt="<?=$invest_project->title?>"></div>
                                        <div class="playBlk popBtn" data-popup="video" data-store="<?=$invest_project->video?>"></div>
                                    </div>
                                    <div class="txt">
                                        <h5><a href="<?=$invest_project->link?>"><?=$invest_project->title?></a></h5>
                                        <p><?=short_text($invest_project->details,80)?></p>
                                        <span>Projet Fermé</span>
                                        <div class="btm">
                                            <div class="inr">
                                                <span class="price">Dons: <strong><?=format_amount($invest_project->donation)?></strong></span>
                                                <a href="?" class="webBtn learnBtn">Voir plus <img src="<?=base_url()?>assets/images/arrow-right-sm.svg" alt=""></a>
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
                                <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>No Project(s) found yet!</em></div>
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
