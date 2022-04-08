<main dash>
    <?php $this->load->view('includes/sidebar'); ?>


        <section id="wallet">
            <div class="contain-fluid">
                <div class="blk">
                    <div class="bTn">
                        <a href="?" class="webBtn simpleBtn borderBtn beforeBtn icoBtn"><img src="<?=base_url()?>assets/images/chev-left.svg" alt=""> Retour au portefeuille</a>
                    </div>
                    <form action="" method="post" autocomplete="off" id="frmWithdraw" class="frmAjax">
                        <h4 class="subheading">Disponible pour le retrait</h4>
                        <div class="enterRsBlk">
                            <strong>$ <small class="regular">USD</small></strong>
                            <input type="text" value="<?=getIncome($this->member->mem_id,'credit') - getIncome($this->member->mem_id,'debit')?>" id="" class="txtBox" readonly>
                            <span>.00</span>
                        </div>
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
                            
                            <div class="lblBtn">
                                <input type="radio" name="payment" id="paypal" class="tglBlk" value="paypal" checked>
                                <label for="paypal">Paypal</label>
                                <div class="icon"><img src="<?=base_url()?>assets/images/paypal.svg" alt=""></div>
                            </div>
                            <div class="insideBlk">
                                <h6>Adresse PayPal</h6>
                                <div class="formRow row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="txtGrp">
                                            <label for="">Adresse PayPal</label>
                                            <input type="text" name="paypal_email" id="" class="txtBox" required />
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
                                                <label for="">Bank Name</label>
                                                <input type="text" name="bank_name" id="" class="txtBox" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="txtGrp">
                                                <label for="">Account Number / IBAN Number</label>
                                                <input type="text" name="account_number" id="" class="txtBox"required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="txtGrp">
                                                <label for="">Bank Swift / Routing number</label>
                                                <input type="text" name="swift_routing" id="" class="txtBox" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="txtGrp">
                                                <label for="">Account Title</label>
                                                <input type="text" name="account_title" id="" class="txtBox"required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="txtGrp">
                                                <label for="">Country</label>
                                                <select name="country" id="country" class="txtBox " data-live-search="true" title="Please select something!" required>
                                                    <option value="">Select</option>
                                                    <?= get_countries_options('id', $this->member->mem_country_id) ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="txtGrp">
                                                <label for="">State</label>
                                                <input type="text" name="state" id="" class="txtBox" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="txtGrp">
                                                <label for="">City</label>
                                                <input type="text" name="city" id="" class="txtBox" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="bTn formBtn">
                            <button type="submit" class="webBtn">Ajouter maintenant <i class="spinner hidden"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- wallet -->


    </main>