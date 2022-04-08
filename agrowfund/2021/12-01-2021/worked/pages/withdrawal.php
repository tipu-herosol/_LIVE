<main dash>
    <?php $this->load->view('includes/sidebar'); ?>


    <section id="wallet">
        <div class="contain-fluid" data-aos="fade" data-aos-duration="1000">
            <div class="flexRow cardRow full_height">
                <div class="col">
                    <div class="tileBlk">
                        <div class="top">
                            <div class="txt">
                                <span>Disponible pour le retrait</span>
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
                                <span>Montant total du retrait</span>
                                <div class="price"><?= format_amount(getWithdrawals($this->member->mem_id)) ?></div>
                            </div>
                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-transfer.svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="br"></div>
            <div class="br"></div>
            <div class="topHead">
                <h4>Résumé des retraits</h4>
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
                                <th>Statut</th>
                                <!-- <th>Résumé</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($withdrawals)) {
                                $count = 0;
                                foreach ($withdrawals as $withdrawal) {
                            ?>
                                    <tr>
                                        <td><?= ++$count ?></td>
                                        <td><?= format_amount($withdrawal->amount) ?></td>
                                        <td><?= format_date($withdrawal->created_date, 'M d, Y') ?></td>
                                        <td><?= getWithdrawalStatus($withdrawal->status) ?></td>
                                        <!-- <td>Solde ajouté via <?= get_payment_method($withdrawal->payment_method) ?></td> -->
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="3">
                                        <div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>aucune demande de retrait trouvée !</em></div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
            if (getIncome($this->member->mem_id, 'credit') - getIncome($this->member->mem_id, 'debit') > 0) {
            ?>
                <div class="bTn formBtn">
                    <a href="<?= base_url('withdrawal-request') ?>" class="webBtn">Demande de retrait</a>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
    <!-- wallet -->


</main>