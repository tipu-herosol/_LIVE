<main dash>
    <?php $this->load->view('includes/sidebar'); ?>



    <section id="profile">
        <div class="contain-fluid" data-aos="fade-down" data-aos-duration="1000">
            <div class="blk">
                <h3 class="subheading">Détails du profil</h3>
                <form action="" method="post" autocomplete="off" class="frmAjax" id="frmSetting">
                    <div class="progress" style="display: none;" id="progress-contain">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" id="myBar"></div>
                    </div>
                    <div class="topBlk">
                        <div class="ico"><img id="userImage" src="<?= get_site_image_src("members", $this->member->mem_image, 'thumb_') ?>" alt="<?= $this->member->mem_fname . ' ' . $this->member->mem_lname ?>"></div>
                        <div class="txt">
                            <div class="bTn">
                                <button type="button" class="webBtn smBtn uploadImg" data-upload="dp_image" data-text="Charger"></button>
                                <input type="file" id="uploadFile" name="uploadFile" class="uploadFile" data-file="image" data-upload="dp_image" data-profile="true" accept="image/*">
                                <div class="verify"><img src="<?= base_url() ?>assets/images/icon-verify.svg" alt=""> Non-verifié</div>
                                <!-- <div class="verify checked"><img src="images/icon-verify.svg" alt=""> Verifié</div> -->
                            </div>
                            <div class="br"></div>
                            <div>Acceptable seulement jpg, png</div>
                            <div>La taille max des fichiers est de 500 kb et la taille mini de 80 kb.</div>
                        </div>
                    </div>
                    <div class="formRow row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6>Noms</h6>
                            <div class="formRow row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="txtGrp">
                                        <label for="">Nom</label>
                                        <input type="text" name="lname" id="lname" class="txtBox" value="<?= $this->member->mem_lname ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="txtGrp">
                                        <label for="">Prénom</label>
                                        <input type="text" name="fname" id="fname" class="txtBox" value="<?= $this->member->mem_fname ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6>Pays</h6>
                            <div class="txtGrp">
                                <label for="country">Sélectionnez votre pays</label>
                                <select name="country" id="country" class="txtBox " data-live-search="true" title="Please select something!" required>
                                    <option value="">Sélectionnez</option>
                                    <?= get_countries_options('id', $this->member->mem_country_id) ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6>Adresse</h6>
                            <div class="formRow row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="txtGrp">
                                        <label for="address1">Ligne d'adresse 1</label>
                                        <input type="text" name="address1" id="address1" class="txtBox" value="<?= $this->member->mem_address1 ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="txtGrp">
                                        <label for="mem_address2">Ligne d'adresse 2</label>
                                        <input type="text" name="mem_address2" id="mem_address2" class="txtBox" value="<?= $this->member->mem_address1 ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h6>Localité / Ville</h6>
                            <div class="txtGrp">
                                <label for="city">Localité / Ville</label>
                                <input type="text" name="city" value="<?= $this->member->mem_city ?>" id="city" class="txtBox" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h6>Localité / Ville</h6>
                            <div class="txtGrp">
                                <label for="state">Localité / Ville</label>
                                <select name="state" id="state" class="txtBox" required>
                                    <option value="">Sélectionnez</option>
                                    <?= get_states_options('id', $mem_data->mem_state_id, $mem_data->mem_country_id) ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h6>Code postal / ZIP</h6>
                            <div class="txtGrp">
                                <label for="">Code</label>
                                <input type="text" id="" name="zip_code" value="<?= $this->member->mem_zip ?>" class="txtBox" required>
                            </div>
                        </div>
                    </div>
                    <div class="bTn formBtn">
                        <button type="submit" class="webBtn">Sauvegarder les modifications <i class="spinner hidden"></i></button>
                    </div>
                </form>
            </div>
            <div class="blk">
                <h3 class="subheading">Détails du compte</h3>
                <form action="<?= base_url('change-password') ?>" method="post" autocomplete="off" class="frmAjax" id="frmChangePass">
                    <div class="formRow row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h6>Courriel</h6>
                            <div class="txtGrp">
                                <label for="email">Votre courriel</label>
                                <input type="text" name="email" id="email" class="txtBox" value="<?= $this->member->mem_email ?>" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h6>+1 12345-6789</h6>
                            <div class="txtGrp">
                                <label for="phone"></label>
                                <input type="text" name="phone" id="phone" class="txtBox" value="<?= $this->member->mem_phone ?>">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h6>Mot de passe</h6>
                            <div class="txtGrp pasDv">
                                <label for="pswd">Old Password</label>
                                <input type="password" name="pswd" id="pswd" class="txtBox">
                                <i class="icon-eye" id="eye"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h6>Confirmez votre mot de passe</h6>
                            <div class="txtGrp pasDv">
                                <label for="npswd">New Password</label>
                                <input type="password" name="npswd" id="npswd" class="txtBox">
                                <i class="icon-eye" id="eye"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h6>Confirmez votre mot de passe</h6>
                            <div class="txtGrp pasDv">
                                <label for="cpswd">Confirm Password</label>
                                <input type="password" name="cpswd" id="cpswd" class="txtBox">
                                <i class="icon-eye" id="eye"></i>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="switchBtn">
                                    <span>Lorem Ipsum is simply dummy text of the printing.</span>
                                    <div class="switch">
                                        <input type="checkbox" name="" id="">
                                        <em></em>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="switchBtn">
                                    <span>Lorem Ipsum is simply dummy text of the printing.</span>
                                    <div class="switch">
                                        <input type="checkbox" name="" id="">
                                        <em></em>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="switchBtn">
                                    <span>Lorem Ipsum is simply dummy text of the printing.</span>
                                    <div class="switch">
                                        <input type="checkbox" name="" id="">
                                        <em></em>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                    <div class="bTn formBtn">
                        <button type="submit" class="webBtn">Sauvegarder les modifications</button>
                    </div>
                </form>
            </div>
            <!-- <div class="blk">
                    <h3 class="subheading">Documents investisseur</h3>
                    <form action="" method="post">
                        <div class="formRow row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <h6>Pièce d’identité</h6>
                                <div class="fileBlk">
                                    <div class="ico"><img src="images/file.jpg" alt=""></div>
                                    <button class="webBtn blockBtn">Téléverser</button>
                                    <small>simply-dummy-text.pdf</small>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <h6>Document title here</h6>
                                <div class="fileBlk">
                                    <div class="ico"><img src="images/file.jpg" alt=""></div>
                                    <button class="webBtn blockBtn">Téléverser</button>
                                    <small>simply-dummy-text.pdf</small>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <h6>Document title here</h6>
                                <div class="fileBlk">
                                    <div class="ico"><img src="images/file.jpg" alt=""></div>
                                    <button class="webBtn blockBtn">Téléverser</button>
                                    <small>simply-dummy-text.pdf</small>
                                </div>
                            </div>
                        </div>
                        <div class="br"></div>
                        <div>Acceptable only jpg, png only</div>
                        <div>Max file size is 500kb and min size 80kb</div>
                        <div class="bTn formBtn">
                            <button type="submit" class="webBtn">Sauvegarder les modifications</button>
                        </div>
                    </form>
                </div> -->
        </div>
    </section>
    <!-- profile -->


</main>