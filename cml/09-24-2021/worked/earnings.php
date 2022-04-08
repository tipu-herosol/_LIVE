<!doctype html>
<html>

<head>
    <title>My Earnings — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-vendor'); ?>
    <main dash trans>
        <?php $this->load->view('includes/sidebar-vendor'); ?>


        <section id="trans">
            <div class="contain-fluid">
                <div class="blk blansBlk">
                    <ul class="blans">
                        <li>Deliveries: <span><?= $deliveries ?></span></li>
                        <li>Payouts: <span class="price">£<?= price_format($payouts) ?></span></li>
                        <li>Current Balance: <span class="price">£<?= price_format($availBalance) ?></span></li>
                        <li>Requested Balance: <span class="price">£<?= price_format($requested) ?></span></li>
                        <?php if (price_format($availBalance) >= 1) : ?>
                            <li><button type="button" class="webBtn smBtn simpleBtn popBtn" data-popup="withdraw-funds">Withdraw Funds</button></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="blk blockLst">
                    <table>
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th width="140">Amount</th>
                                <th>Date</th>
                                <th width="80">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($earnings)) : ?>
                                <tr>
                                    <td>No earning yet.</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php
                            else :
                                foreach ($earnings as $key => $value) : ?>
                                    <tr>
                                        <td><?= $value->cfname . ' ' . $value->clname ?></td>
                                        <td class="price">$<?= price_format($value->amount) ?></td>
                                        <td><?= date_picker_format_date($value->date, 'D, d M Y', false) ?></td>
                                        <td><span class="badge <?= earning_status_badge($value->status) ?>"><?= earning_status($value->status) ?></span></td>
                                    </tr>
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="popup" data-popup="withdraw-funds">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="crosBtn"></div>
                                <h3>Add Payment method</h3>
                                <form action="<?= base_url() ?>earnings/withdraw_request" method="post" id="withdrawForm" class="withdrawForm">
                                    <div class="alertMsg" style="display:none"></div>
                                    <input type="hidden" name="bank_check" id="bank_check" value="0" />
                                    <div data-payment>
                                        <div class="lblBtn">
                                            <input type="radio" name="payment_method" id="bank" class="tglBlk" value="bank-account" checked="">
                                            <label for="bank">Bank Account</label>
                                        </div>
                                        <div class="insideBlk active">
                                            <div class="flexGrp txtGrp">
                                                <div class="txtGrp">
                                                    <label for="selected_bank" class="move">Bank Account</label>
                                                    <select name="selected_bank" id="selected_bank" class="txtBox">
                                                        <option value="">Select</option>
                                                        <?php foreach ($bank_accounts as $key => $bank) : ?>
                                                            <option value="<?= $bank->id ?>"><?= $bank->bank_name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="bTn">
                                                    <button type="button" id="addOrCancelBank" class="webBtn lightBtn">Add Bank</button>
                                                </div>
                                            </div>
                                            <div class="blk hidden addFormBlk">
                                                <div class="inside">
                                                    <div class="alertMsg" style="display:none"></div>
                                                    <h5>Bank Account Detail</h5>
                                                    <div id="form-bank-account">
                                                        <?= mem_bank_form() ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="lblBtn">
                                            <input type="radio" name="payment_method" id="paypal" class="tglBlk" value="paypal">
                                            <label for="paypal">Paypal</label>
                                        </div>
                                        <div class="insideBlk">
                                            <div class="txtGrp">
                                                <label for="paypal_address">PayPal Address</label>
                                                <input type="paypal_address" name="paypal_address" id="paypal_address" class="txtBox">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bTn formBtn text-center">
                                        <button type="submit" class="webBtn"><i class="spinner hidden"></i>Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trans -->
        <script>
            $(document).on("click", "#addOrCancelBank", function(e) {
                e.preventDefault();
                let btn = $(this);
                let blk = $('.addFormBlk');
                if (blk.hasClass('hidden')) {
                    blk.removeClass('hidden');
                    btn.text('Cancel');
                    $('#bank_check').val(1);
                } else {
                    blk.addClass('hidden');
                    btn.text('Add Bank');
                    $('#bank_check').val(0);
                }

            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>