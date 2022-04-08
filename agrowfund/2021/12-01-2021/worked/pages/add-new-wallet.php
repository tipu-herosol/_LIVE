<main dash>
    <?php $this->load->view('includes/sidebar'); ?>


    <section id="wallet">
        <div class="contain-fluid">
            <div class="blk" data-aos="fade" data-aos-duration="1000">
                <div class="bTn">
                    <a href="?" class="webBtn simpleBtn borderBtn beforeBtn icoBtn"><img src="<?= base_url() ?>assets/images/chev-left.svg" alt=""> Retour au portefeuille</a>
                </div>
                <form action="" method="post" autocomplete="off" id="frmWalletPayment">
                    <div class="br"></div>
                    <div class="br"></div>
                    <h4 class="subheading">Entrez votre montant</h4>
                    <div class="enterRsBlk">
                        <strong>$ <small class="regular">USD</small></strong>
                        <input type="text" name="amount" id="amount" class="txtBox" required>
                        <span>.00</span>
                    </div>
                    <div class="br"></div>
                    <div class="br"></div>
                    <h4 class="subheading">Mode de paiement</h4>
                    <div data-payment>
                        <?php
                        if (!empty($payment_methods)) {
                        ?>
                            <div class="lblBtn">
                                <input type="radio" name="payment" id="saved-payment" class="tglBlk" value="saved-payment" checked="">
                                <label for="credit">Cartes enregistrées</label>
                                <div class="icon"><img src="<?= base_url() ?>assets/images/icon-wallet2.svg" alt=""></div>
                            </div>
                            <div class="insideBlk">
                                <div class="formRow row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                        <div class="txtGrp">
                                            <label for="" class="">Nom sur la carte</label>
                                            <select class="txtBox" name="method_id" required>
                                                <option value="">Select</option>
                                                <?php
                                                foreach ($payment_methods as $payment_method) {
                                                    if ($payment_method->payment_method == 'paypal') {
                                                ?>
                                                        <option value="<?= $payment_method->id ?>"><?= $payment_method->paypal_email ?></option>
                                                    <?php
                                                    } elseif ($payment_method->payment_method == 'credit-card') {
                                                    ?>
                                                        <option value="<?= $payment_method->id ?>">*** *** *** <?= $payment_method->card_number ?></option>
                                                <?php
                                                    }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        if (empty($payment_methods)) {
                            $checked = 'checked';
                        } else {
                            $checked = '';
                        }
                        ?>
                        <div class="lblBtn">
                            <input type="radio" name="payment" id="credit" class="tglBlk" value="credit-card" <?= $checked ?>>
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
                        <div class="lblBtn">
                            <input type="radio" name="payment" id="maxicash" class="tglBlk" value="maxicash">
                            <label for="maxicash">Maxicash</label>
                            <div class="icon"><img src="<?= base_url() ?>assets/images/maxicash.png" alt=""></div>
                        </div>
                        <div class="insideBlk">
                            <h6>Pay with Maxicash Wallet</h6>
                        </div>
                        <div class="lblBtn">
                            <input type="radio" name="payment" id="paypal" class="tglBlk" value="paypal">
                            <label for="paypal">Paypal</label>
                            <div class="icon"><img src="<?= base_url() ?>assets/images/paypal.svg" alt=""></div>
                        </div>
                        <div class="insideBlk">
                            <h6>Adresse PayPal</h6>
                            <div class="formRow row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="txtGrp">
                                        <label for="">Adresse PayPal</label>
                                        <input type="text" name="paypal_email" id="" class="txtBox">
                                    </div>
                                </div>
                            </div>
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

                    </div>
                    <span id="payment-errors"></span>
                    <div class="alertMsg"></div>
                    <div class="bTn formBtn">
                        <button type="submit" class="webBtn">Ajouter maintenant <i class="spinner hidden"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- wallet -->


</main>