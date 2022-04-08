<main checkout>


    <section id="checkout">
        <div class="contain" data-aos="fade-down" data-aos-duration="1000">
            <div class="bTn">
                <a href="javascript:void(0)" class="webBtn simpleBtn borderBtn beforeBtn icoBtn goBack"><img src="<?= base_url() ?>assets/images/chev-left.svg" alt=""> Retour à la page du projet</a>
            </div>
            <div class="br"></div>
            <form action="" method="post" autocomplete="off" id="frmPayment">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="blk">
                            <div class="projItm">
                                <div class="fig">
                                    <div class="image"><img src="<?= get_site_image_src("projects", $project->image, 'thumb_'); ?>" alt="<?= $project->title ?>"></div>
                                </div>
                                <div class="txt">
                                    <h4><?= $project->title ?></h4>
                                    <p><?= short_text($project->details, 100) ?></p>
                                    <input type="hidden" name="p_id" value="<?= doEncode($project->id) ?>" />
                                </div>
                            </div>
                            <hr>
                            <h4 class="subheading">Détails personnels</h4>
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
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h6>Courriel</h6>
                                    <div class="txtGrp">
                                        <label for="email">Entrez votre courriel</label>
                                        <input type="text" name="email" id="email" class="txtBox checkout_email" value="<?= $this->member->mem_email ?>" required>
                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h6>Téléphone</h6>
                                    <div class="txtGrp">
                                        <label for="phone">Phone number</label>
                                        <input type="text" name="phone" id="phone" class="txtBox" value="<?= $this->member->mem_phone ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pswdField hide">
                                    <div class="email_error"></div>
                                    <h6>Mot de passe</h6>
                                    <div class="txtGrp">
                                        <label for="phone">Password</label>
                                        <input type="password" name="password" id="checkout_password" class="txtBox" value="" required>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h6>Pays</h6>
                                    <div class="txtGrp">
                                        <label for="country" class="move">Pays</label>
                                        <select name="country" id="" class="txtBox" required>
                                            <option value="">Sélectionnez</option>
                                            <?= get_countries_options('id', $this->member->mem_country_id) ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h6>Code postal</h6>
                                    <div class="txtGrp">
                                        <label for="postal_code">Code postal</label>
                                        <input type="text" name="postal_code" id="postal_code" value="<?= $this->member->mem_zip ?>" class="txtBox" required>
                                    </div>
                                </div> -->
                            </div>
                            <hr>
                            <h4 class="subheading">Séléctionner votre package</h4>
                            <div class="txtGrp">
                                <label for="">Votre package</label>
                                <select type="text" name="package" id="package" class="txtBox" required>
                                    <option value="">Séléctionnez</option>
                                    <?php
                                    $packages = getPackages($project->id);
                                    foreach ($packages as $pkg) {
                                    ?>
                                        <option value="<?= $pkg->id ?>" data-min_price="<?= $pkg->min_price ?>" data-max_price="<?= $pkg->max_price ?>" data-details='<?= json_encode(getPlanFeatures($pkg->id)) ?>'><?= $pkg->title ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div id="pkgDetails" class="hide">

                            </div>

                            <hr>
                            <h4 class="subheading">Entrez votre montant</h4>
                            <div class="enterRsBlk">
                                <strong>$ <small class="regular">USD</small></strong>
                                <input type="text" name="price" id="invest_price" class="txtBox" required onkeypress="return isNumberKey(event)">
                                <span>.00</span>
                            </div>
                            <div class="br"></div>
                            <div class="price_error" style="color:red"></div>
                            <p class="pkg_bw_price"></p>
                            <input type="hidden" id="pkg_min_price" name="pkg_min_price" />
                            <input type="hidden" id="pkg_max_price" name="pkg_max_price" />
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="blk">
                            <h4 class="subheading">Mode de paiement</h4>
                            <div data-payment>
                                <div class="lblBtn">
                                    <input type="radio" name="payment" id="credit" class="tglBlk" value="credit-card" checked="">
                                    <label for="credit">Utiliser une carte de crédit ou de débit</label>
                                    <div class="icon"><img src="<?= base_url() ?>assets/images/visa.svg" alt=""></div>
                                </div>
                                <div class="insideBlk">
                                    <div class="formRow row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <div id="card-element"></div>
                                            <div id="card-errors" role="alert"></div>
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="lblBtn">
                                    <input type="radio" name="payment" id="paypal" class="tglBlk" value="paypal">
                                    <label for="paypal">Paypal</label>
                                    <div class="icon"><img src="<?= base_url() ?>assets/images/paypal.svg" alt=""></div>
                                </div>
                                <div class="insideBlk">
                                    <h6>Adresse PayPal</h6>
                                    <div class="formRow row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="txtGrp">
                                                <label for="paypal_email">Adresse PayPal</label>
                                                <input type="text" name="paypal_email" id="paypal_email" class="txtBox" required>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="lblBtn">
                                    <input type="radio" name="payment" id="maxicash" class="tglBlk" value="maxicash">
                                    <label for="maxicash">Maxicash</label>
                                    <div class="icon"><img src="<?= base_url() ?>assets/images/maxicash.png" alt=""></div>
                                </div>
                                <div class="insideBlk">
                                    <h6>Pay with Maxicash Wallet</h6>
                                </div>
                                <div class="lblBtn">
                                    <input type="radio" name="payment" id="bank" class="tglBlk" value="bank">
                                    <label for="bank">Utiliser le transfert bancaire</label>
                                    <div class="icon"><img src="<?= base_url() ?>assets/images/bank.svg" alt=""></div>
                                </div>
                                <div class="insideBlk">
                                    <div class="formRow row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="txtGrp">
                                                <div class="_list">
                                                    <?= $site_settings->site_bank_details ?>
                                                </div>
                                            </div>
                                            <div class="txtGrp">
                                                <label for="transaction_id">Entrez le numéro ID de votre transaction</label>
                                                <input type="text" name="transaction_id" id="transaction_id" class="txtBox" required>
                                                <input type="hidden" name="bank_proof" id="bankFile">
                                            </div>
                                            <div class="progress" style="display: none;" id="progress-contain">
                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" id="myBar"></div>
                                            </div>
                                            <div class="flex" style="align-items: center;">
                                                <div class="fileBlk">
                                                    <div class="ico" style="" id="userImage"> <img src="<?= get_site_image_src("brands", '') ?>" /></div>
                                                    <div class="bTn">
                                                        <button type="button" class="webBtn smBtn uploadImg" data-upload="dp_image" data-text="Téléverser"></button>
                                                        <input type="file" id="uploadBankFile" name="uploadFile" class="uploadFile" data-file="image" data-upload="dp_image" data-bankFile="true" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php
                                $available_balance = getIncome($this->member->mem_id, 'credit') - getIncome($this->member->mem_id, 'debit');
                                if (!empty($this->member) && $available_balance > 0) {
                                ?>
                                    <div class="lblBtn">
                                        <input type="radio" name="payment" id="balance" class="tglBlk" value="balance">
                                        <label for="bank">Solde disponible</label>
                                        <div class="icon"><img src="<?= base_url() ?>assets/images/dollar.png" alt=""></div>
                                    </div>
                                    <div class="insideBlk">
                                        <div class="formRow row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="txtGrp">
                                                    <div class="enterRsBlk">
                                                        <strong>$ <small class="regular">USD</small></strong>
                                                        <input type="text" value="<?= getIncome($this->member->mem_id, 'credit') - getIncome($this->member->mem_id, 'debit') ?>" id="" class="txtBox" readonly>
                                                        <span>.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="br"></div>
                            <h4 class="subheading">Autres informations</h4>
                            <div class="txtGrp">
                                <div class="lblBtn">
                                    <input type="checkbox" name="confirm" id="confirm" required>
                                    <label for="confirm">J’accepte les <a href="<?= base_url('terms-and-conditions') ?>">Termes et Conditions</a> et <a href="<?= base_url('privacy-policy') ?>">Politique de Confidentalité</a>.</label>
                                </div>
                            </div>
                            <span id="payment-errors"></span>
                            <div class="alertMsg"></div>
                            <div class="bTn formBtn">
                                <button type="submit" class="webBtn blockBtn">Suivant <i class="spinner hidden"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- wallet -->


</main>