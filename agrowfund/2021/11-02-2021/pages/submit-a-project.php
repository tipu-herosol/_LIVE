<main dash>
<?php $this->load->view('includes/sidebar'); ?>


        <section id="wallet">
            <div class="contain-fluid">
                <form action="" method="POST" class="frmProjAjax" id="frmProject">
                    <div class="blk">
                        <h4 class="subheading">Soumettre une demande de financement</h4>
                        <div class="formRow row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h6>Noms <sup>*</sup></h6>
                                <div class="txtGrp">
                                    <label for="name">Noms</label>
                                    <input type="text" name="name" id="name" class="txtBox" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h6>Courriel <sup>*</sup></h6>
                                <div class="txtGrp">
                                    <label for="email">Courriel</label>
                                    <input type="text" name="email" id="email" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h6>Téléphone <sup>*</sup></h6>
                                <div class="txtGrp">
                                    <label for="phone">Téléphone</label>
                                    <input type="text" name="phone" id="phone" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h6>Nom du projet <sup>*</sup></h6>
                                <div class="txtGrp">
                                    <label for="project_name">Nom du projet</label>
                                    <input type="text" name="project_name" id="project_name" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h6>Description du projet</h6>
                                <div class="txtGrp">
                                    <div class="ck-editor5" data-number="1">
                                        <div class="toolbar-container"></div>
                                        <div class="content-container">
                                            <div id="descp" class="scrollbar"></div>
                                            <!-- <textarea name="" id="descp" class="txtBox"></textarea> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h6>Localisation <sup>*</sup></h6>
                                <div class="txtGrp">
                                    <label for="location">Localisation</label>
                                    <input type="text" name="location" id="location" class="txtBox">
                                </div>
                            </div>
                        </div>
                        <div class="bTn formBtn">
                            <button type="submit" class="webBtn">Soumettre</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- wallet -->


        <!-- Ckeditor Js -->
        
        
    </main>