<main dash>
<?php $this->load->view('includes/sidebar'); ?>


        <section id="proj">
            <div class="contain-fluid">
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
                                        <div class="image"><img src="<?= get_site_image_src("projects", $in_projects->image, 'thumb_'); ?>" alt="<?=$in_projects->title?>"></div>
                                        <div class="playBlk popBtn" data-popup="video" data-store="<?=$in_projects->video?>"></div>
                                    </div>
                                    <div class="txt">
                                        <h5><a href="<?=$in_projects->link?>"><?=$in_projects->title?></a></h5>
                                        <p><?=short_text($in_projects->details,80)?></p>
                                        <div class="btm">
                                            <span><?=format_amount($in_projects->project_amount - getTotalProjectDonations($in_projects->id,'donate'))?> Levés</span>
                                            <div class="range">
                                                <input type="range" disabled class="form-range" id="" min="1" max="<?=$in_projects->project_amount?>" value="<?=getTotalProjectDonations($in_projects->id,'donate')?>">
                                            </div>
                                            <div class="inr">
                                                <small><?=get_date_difference($in_projects->project_last_date)?> Restants</small>
                                                <small>Objectif: <?=format_amount($in_projects->project_amount)?></small>
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
                                <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>No In Progress Project(s) found yet!</em></div>
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
                                        <div class="image"><img src="<?= get_site_image_src("projects", $coming_soon_project->image, 'thumb_'); ?>" alt="<?=$coming_soon_project->title?>"></div>
                                        <div class="playBlk popBtn" data-popup="video" data-store="<?=$coming_soon_project->video?>"></div>
                                    </div>
                                    <div class="txt">
                                        <h5><a href="<?=$coming_soon_project->link?>"><?=$coming_soon_project->title?></a></h5>
                                        <p><?=short_text($coming_soon_project->details,80)?></p>
                                        <div class="btm">
                                            <span><?=format_amount($coming_soon_project->project_amount - getTotalProjectDonations($coming_soon_project->id,'donate'))?> Levés</span>
                                            <div class="range">
                                                <input type="range" disabled class="form-range" id=""  min="1" max="<?=$coming_soon_project->project_amount?>" value="<?=getTotalProjectDonations($coming_soon_project->id,'donate')?>">
                                            </div>
                                            <div class="inr">
                                                <small><?=get_date_difference($coming_soon_project->project_last_date)?> Restants</small>
                                                <small>Objectif: <?=format_amount($coming_soon_project->project_amount)?></small>
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
                                <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>No Coming Soon Project(s) found yet!</em></div>
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
                                        <div class="image"><img src="<?=  get_site_image_src("projects", $closed_project->image, 'thumb_'); ?>" alt="<?=$closed_project->title?>"></div>
                                        <div class="playBlk popBtn" data-popup="video" data-store="<?=$closed_project->video?>"></div>
                                    </div>
                                    <div class="txt">
                                        <h5><a href="<?=$closed_project->link?>"><?=$closed_project->title?></a></h5>
                                        <p><?=short_text($closed_project->details,80)?></p>
                                        <div class="btm">
                                            <span><?=format_amount($closed_project->project_amount - getTotalProjectDonations($closed_project->id,'donate'))?> Levés</span>
                                            <div class="range">
                                                <input type="range" disabled class="form-range" id=""  min="1" max="<?=$closed_project->project_amount?>" value="<?=getTotalProjectDonations($closed_project->id,'donate')?>">
                                            </div>
                                            <div class="inr">
                                                <small><?=get_date_difference($closed_project->project_last_date)?> Restants</small>
                                                <small>Objectif: <?=format_amount($closed_project->project_amount)?></small>
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
                                <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>No Closed Project(s) found yet!</em></div>
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