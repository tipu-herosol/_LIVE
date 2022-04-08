<main>


        <section id="trans">
            <div class="contain">
                <div class="top_head">
                    <h4>Information on payment methods</h4>
                    <div class="btn_blk">
                        <button type="button" class="site_btn sm pop_btn" data-popup="withdraw-funds">Add New Pay Method</button>
                    </div>
                </div>
                <div class="flex_row info_row full_height">
                    <?php
                        if (!empty($payment_methods)) {
                            foreach ($payment_methods as $payment_method) {
                                if ($payment_method->payment_method=='paypal') {
                                    ?>
                    <div class="col">
                        <div class="pay_blk">
                            <div class="inr">
                                <div class="txt">
                                    <div class="head">
                                        <div class="icon"><img src="<?= base_url() ?>assets/images/paypal.svg" alt=""></div>
                                    </div>
                                    <div class="cvc"><?= $payment_method->paypal_email ?></div>
                                    <div class="date">Added on <?= format_date($payment_method->created_date, 'M d, Y'); ?></div>
                                </div>
                            </div>
                            <div class="btm">
                                <ul class="action_btn">
                                    <!-- <li><a href="?"><img src="<?= base_url() ?>assets/images/icon-edit.svg" alt=""> Edit</a></li> -->
                                    <li><a href="<?=base_url('owner/delete_payment_method/'.doEncode($payment_method->id))?>" onclick="return confirm('Are you sure?');"><img src="<?= base_url() ?>assets/images/icon-trash.svg" alt=""> Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                                }
                                else{
                                    ?>
                    <div class="col">
                        <div class="pay_blk">
                            <div class="inr">
                                <div class="txt">
                                    <div class="head">
                                        <div class="icon"><img src="<?= base_url() ?>assets/images/bank.svg" alt=""></div>
                                    </div>
                                    <div class="cvc"><?= $payment_method->bank_name ?> / <?= $payment_method->account_number ?> / <?= $payment_method->account_title ?></div>
                                    <div class="date">Added on <?= format_date($payment_method->created_date, 'M d, Y'); ?></div>
                                </div>
                            </div>
                            <div class="btm">
                                <ul class="action_btn">
                                    <!-- <li><a href="?"><img src="<?= base_url() ?>assets/images/icon-edit.svg" alt=""> Edit</a></li> -->
                                    <li><a href="<?=base_url('owner/delete_payment_method/'.doEncode($payment_method->id))?>" onclick="return confirm('Are you sure?');"><img src="<?= base_url() ?>assets/images/icon-trash.svg" alt=""> Delete</a></li>
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
                <div class="flex_row card_row full_height">
                    <div class="col">
                        <div class="tile_blk">
                            <div class="top">
                                <div class="txt">
                                    <span>Deliveries</span>
                                    <div class="price"><?=count_owner_bookings($this->member->mem_id)?></div>
                                </div>
                                <div class="icon"><img src="<?= base_url() ?>assets/images/vector-handover.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tile_blk">
                            <div class="top">
                                <div class="txt">
                                    <span>Payouts</span>
                                    <div class="price"><?=format_amount(getMemTotalEarnings($this->member->mem_id,'debit'))?></div>
                                </div>
                                <div class="icon"><img src="<?= base_url() ?>assets/images/vector-payouts.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tile_blk">
                            <a href="javascript:void(0)" class="badge site_btn sm pop_btn" data-popup="withdraw-amount">Withdrawal</a>
                            <div class="top">
                                <div class="txt">
                                    
                                    <span>Current balance</span>
                                    <div class="price"><?=format_amount(getMemTotalEarnings($this->member->mem_id,'credit') - getMemTotalEarnings($this->member->mem_id,'debit'))?></div>
                                </div>
                                <div class="icon"><img src="<?= base_url() ?>assets/images/vector-wallet.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="br"></div>
                <h4 class="subheading">Wallet summary</h4>
                <div class="blk">
                    <div class="tbl_blk">
                        <table>
                            <thead>
                                <tr>
                                    <th>Order No.</th>
                                    <th>Customer Name</th>
                                    <th width="140">Amount</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th width="80">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(!empty($rows)){
                                        foreach($rows as $row){
                                            $vehicle=get_vehicle($row->v_id);
                                ?>
                                <tr>
                                    <td><a href="javascript:void(0)"><?=setInvoiceNo($row->id)?></a></td>
                                    <td><?=get_mem_name($row->mem_id)?></td>
                                    <td class="price"><?=format_amount($row->price)?></td>
                                    <td><?= get_earning_type($row->type) ?></td>
                                    <td><?= format_date($row->created_date, 'M d, Y') ?></td>
                                    <td><?=getEarningStatus($row->status)?></td>
                                </tr>
                                <?php
                                                }
                                            }
                                            else{
                                        ?>
                                        <tr>
                                            <td colspan="5"><div class="alert danger-alert cmn-alert"><span><i class="fi-cross"></i></span><em>No record(s) found yet!</em></div></td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="withdraw-funds">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="cross_btn"></div>
                                <h3>Add Payment method</h3>
                                <form action="<?=base_url('owner/add_payment_method')?>" method="post" class="frmAjax" id="frmPaymentMethod">
                                    <div data-payment="wallet">
                                        <div class="lbl_btn">
                                            <input type="radio" name="payment" id="bank" class="tglBlk" value="bank" checked="">
                                            <label for="bank">Bank Account</label>
                                        </div>
                                        <div class="inside_blk active">
                                            <div class="form_blk">
                                                <label for="" class="">Bank Name</label>
                                                <input type="text" name="bank_name" id="" class="text_box">
                                            </div>
                                            <div class="form_blk">
                                                <label for="" class="move">Account Number / IBAN Number</label>
                                                <input type="text" name="account_number" id="" class="text_box">
                                            </div>
                                            <div class="form_blk">
                                                <label for="" class="move">Bank Swift / Routing number</label>
                                                <input type="text" name="swift_routing" id="" class="text_box">
                                            </div>
                                            <div class="form_blk">
                                                <label for="" class="move">Account Title</label>
                                                <input type="text" name="account_title" id="" class="text_box">
                                            </div>
                                            <div class="form_blk">
                                                <label for="" class="move">Country</label>
                                                <select name="country" id="country" class="text_box " data-live-search="true" title="Please select something!" required="">
                                                    <option value="">Select</option>
                                                    <?= get_countries_options('id', $mem_data->mem_country_id) ?>
                                                </select>
                                            </div>
                                            <div class="form_blk">
                                                <label for="" class="move">State</label>
                                                <select name="state" id="state" class="text_box">
                                                    <option value="">Select</option>
                                                    <?= get_states_options('id', $mem_data->mem_state_id, $mem_data->mem_country_id) ?>
                                                </select>
                                            </div>
                                            <div class="form_blk">
                                                <label for="" class="move">City</label>
                                                <input type="text" name="city" id="" class="text_box">
                                            </div>
                                        </div>
                                        <div class="lbl_btn">
                                            <input type="radio" name="payment" id="paypal" class="tglBlk" value="paypal">
                                            <label for="paypal">Paypal</label>
                                        </div>
                                        <div class="inside_blk">
                                            <div class="form_blk">
                                                <label for="paypal_email">PayPal Address</label>
                                                <input type="email" name="paypal_email" id="paypal_email" class="text_box">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn_blk form_btn text-center">
                                        <button type="submit" class="site_btn long">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="withdraw-amount">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="cross_btn"></div>
                                <h3>Withdraw Amount</h3>
                                <form action="<?=base_url('owner/withdraw_amount')?>" method="post" class="frmAjax" id="frmPaymentWithdraw">
                                        
                                        <div class="inside_blk active">
                                            <div class="form_blk">
                                                <label for="" class="move">Available Amount</label>
                                                <div class="text_box"><?=format_amount(getMemTotalEarnings($this->member->mem_id,'credit') - getMemTotalEarnings($this->member->mem_id,'debit'))?></div>
                                            </div>
                                            <div class="form_blk">
                                                <label for="" class="">Amount to withdraw</label>
                                                <input type="text" name="amount" id="amount" class="text_box">
                                            </div>
                                            <select name="account_details" id="" class="text_box">
                                                <option value="">Select</option>
                                                <?php
                                                foreach ($payment_methods as $card) {
                                                    if ($card->payment_method == 'paypal') {
                                                ?>
                                                        <option value="<?= $card->paypal_email ?>">Paypal: <?= $card->paypal_email ?></option>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="Bank Name: <?= $card->bank_name . "/ Account Number: " . $card->account_number . "/ Account Title: " . $card->account_title ?>">Bank Name: <?= $card->bank_name . "/ Account Number: " . $card->account_number . "/ Account Title: " . $card->account_title ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    <div class="btn_blk form_btn text-center">
                                        <button type="submit" class="site_btn long">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- trans -->


    </main>