<main dash>
    <?php $this->load->view('includes/sidebar'); ?>


    <section id="wallet">
        <div class="contain-fluid" data-aos="fade-down" data-aos-duration="1000">
            <h4 class="subheading">Informations sur les modes de paiement</h4>
            <div class="flexRow infoRow full_height">
                <?php
                if (!empty($payment_methods)) {
                    foreach ($payment_methods as $payment_method) {
                        if ($payment_method->payment_method == 'paypal') {
                ?>
                            <div class="col">
                                <div class="payBlk">
                                    <div class="inr">
                                        <div class="txt">
                                            <div class="head">
                                                <div class="icon"><img src="<?= base_url() ?>assets/images/paypal.svg" alt=""></div>
                                            </div>
                                            <div class="cvc"><?= $payment_method->paypal_email ?></div>
                                            <div class="date">Ajouté le <?= format_date($payment_method->created_date, 'M d, Y') ?></div>
                                        </div>
                                    </div>
                                    <div class="btm">
                                        <ul class="actionBtn">
                                            <li><a href="javascript:void(0)" class="payBtn" data-popup="edit-paypal" data-paypal_email="<?= $payment_method->paypal_email ?>" data-id="<?= $payment_method->id ?>"><img src="<?= base_url() ?>assets/images/icon-edit.svg" alt=""> Éditer</a></li>
                                            <li><a href="<?= base_url('ajax/delete_method/' . $payment_method->id) ?>" onclick="return confirm('Are you sure?');"><img src="<?= base_url() ?>assets/images/icon-cross.svg" alt=""> Supprimer</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="col">
                                <div class="payBlk">
                                    <div class="inr">
                                        <div class="txt">
                                            <div class="head">
                                                <div class="icon"><img src="<?= base_url() ?>assets/images/visa.svg" alt=""></div>
                                            </div>
                                            <div class="cvc">*** *** *** <?= $payment_method->card_number ?></div>
                                            <div class="date">Ajouté le <?= format_date($payment_method->created_date, 'M d, Y') ?></div>
                                        </div>
                                    </div>
                                    <div class="btm">
                                        <ul class="actionBtn">
                                            <!-- <li><a href="?"><img src="<?= base_url() ?>assets/images/icon-edit.svg" alt=""> Éditer</a></li> -->
                                            <li><a href="<?= base_url('ajax/delete_method/' . $payment_method->id) ?>" onclick="return confirm('Are you sure?');"><img src="<?= base_url() ?>assets/images/icon-cross.svg" alt=""> Supprimer</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
            <div class="br"></div>
            <div class="br"></div>
            <div class="flexRow cardRow full_height">
                <div class="col">
                    <div class="tileBlk">
                        <div class="top">
                            <div class="txt">
                                <span>Available balance</span>
                                <div class="price"><?= format_amount(getIncome($this->member->mem_id, 'credit') - getIncome($this->member->mem_id, 'debit')) ?></div>
                            </div>
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-wallet.svg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="tileBlk">
                        <div class="top">
                            <div class="txt">
                                <span>Used balance</span>
                                <div class="price"><?= format_amount(getUsedIncome($this->member->mem_id)) ?></div>
                            </div>
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-money.svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="br"></div>
            <div class="br"></div>
            <div class="topHead">
                <h4>Wallet summary</h4>
                <!-- <div class="miniBtn dropDown">
                        <div class="dropBtn">Filter <i class="chevron"></i></div>
                        <ul class="dropCnt dropLst right">
                            <li><span>Amount</span></li>
                            <li><span>Date</span></li>
                            <li><span>Action</span></li>
                            <li><span>Summary</span></li>
                        </ul>
                    </div> -->
            </div>
            <div class="blk">
                <div class="tblBlk">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Montant</th>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Transaction Type</th>
                                <th>Statut</th>
                                <th>Résumé</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($earnings)) {
                                $count = 0;
                                foreach ($earnings as $earning) {
                            ?>
                                    <tr>
                                        <td><?= ++$count; ?></td>
                                        <td><?= format_amount($earning->price) ?></td>
                                        <td><?= format_date($earning->created_date, 'M d, Y') ?></td>
                                        <td><?= getEarningType($earning->e_type) ?></td>
                                        <td><?= ucfirst($earning->type) ?></td>
                                        <td><?= getPayStatus($earning->status) ?></td>
                                        <td>Solde ajouté via <?= get_payment_method($earning->payment_method) ?></td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">
                                        <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>aucune entrée de portefeuille trouvée!</em></div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bTn formBtn">
                <a href="<?= base_url('add-new-wallet') ?>" class="webBtn">Ajoutez un nouveau solde</a>
            </div>
        </div>
        <div class="popup" data-popup="edit-paypal">
            <div class="tableDv">
                <div class="tableCell">
                    <div class="contain">
                        <div class="_inner">
                            <div class="crosBtn"></div>
                            <h3>Add new Payment method</h3>
                            <form action="<?= base_url('ajax/updatePaypal') ?>" method="post" class="frmAjax">
                                <div class="insideBlk">
                                    <div class="txtGrp">
                                        <label for="">PayPal Address</label>
                                        <input type="email" name="paypal_email" id="paypalEmail" class="txtBox" required>
                                        <input type="hidden" name="payment_id" id="payment_id">
                                    </div>
                                </div>
                                <div class="bTn formBtn text-center">
                                    <button type="submit" class="webBtn">Submit <i class="spinner hidden"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wallet -->


</main>