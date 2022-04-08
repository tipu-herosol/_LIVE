<!doctype html>

<html>



<head>

    <title>Order Detail — <?= $site_settings->site_name ?></title>

    <?php $this->load->view('includes/site-master'); ?>

</head>



<body id="home-page">

    <?php $this->load->view('includes/header-buyer'); ?>

    <main dash account>

        <?php $this->load->view('includes/sidebar-buyer'); ?>

        <section id="orders">

            <div class="contain-fluid">

                <div class="blk topBlk">

                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt=""></div>

                    <div class="txt">

                        <h3><span class="regular">Welcome,</span> Dear, <?= $mem_data->mem_fname . ' ' . $mem_data->mem_lname ?>!<span class="regular">Nice to see you again.</span></h3>

                    </div>

                    <div class="bTn">

                        <a href="<?= base_url() ?>buyer/orders" class="webBtn mdBtn simpleBtn">View Orders</a>

                    </div>

                </div>

                <div class="blk jobBlk">

                    <table>

                        <tbody>

                            <tr>

                                <td>

                                    <strong>Order No:</strong>

                                    <em class="red-color">#<?= num_size($order->order_id) ?></em>

                                </td>

                                <td width="5%">

                                    <div class="bTn" id="btn_order_status">

                                        <span class="webBtn mdBtn blockBtn <?= get_order_status($order->order_status) ?>"><?= ucfirst($order->order_status) ?></span>

                                    </div>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                    <div class="br"></div>

                    <table>

                        <tbody>

                            <tr>

                                <td>

                                    <table class="sm">

                                        <tbody>

                                            <tr>

                                                <th>Name</th>

                                            </tr>

                                            <tr>

                                                <td><?= $order->buyer_fname . ' ' . $order->buyer_lname ?></td>

                                            </tr>

                                            <tr>

                                                <td>&nbsp;</td>

                                            </tr>

                                            <?php if ($order->pick_and_drop_service == '1') : ?>

                                                <tr>

                                                    <th>Collection Address</th>

                                                </tr>

                                                <tr>

                                                    <td><?= $order->collection_from ?></td>

                                                </tr>

                                            <?php else : ?>

                                                <tr>

                                                    <th>Walk-in Address</th>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <?php

                                                        foreach (explode('@', $order->address) as $val) :

                                                            echo $val;

                                                            echo '<br>';

                                                        endforeach;

                                                        ?>

                                                    </td>

                                                </tr>

                                            <?php endif; ?>

                                        </tbody>

                                    </table>

                                </td>

                                <td>

                                    <table class="sm">

                                        <tbody>

                                            <tr>

                                                <th>Phone</th>

                                            </tr>

                                            <tr>

                                                <td><?= $order->buyer_phone ?></td>

                                            </tr>

                                            <tr>

                                                <td>&nbsp;</td>

                                            </tr>

                                            <?php if ($order->pick_and_drop_service == '1') : ?>

                                                <tr>

                                                    <th>Delivery Address</th>

                                                </tr>

                                                <tr>

                                                    <td><?= $order->delivery_to ?></td>

                                                </tr>

                                            <?php else : ?>

                                                <tr>

                                                    <th>Notes</th>

                                                </tr>

                                                <tr>

                                                    <td></td>

                                                </tr>

                                            <?php endif; ?>

                                        </tbody>

                                    </table>

                                </td>

                                <td>

                                    <table class="sm">

                                        <tbody>

                                            <tr>

                                                <th>Email</th>

                                            </tr>

                                            <tr>

                                                <td><?= $order->buyer_email ?></td>

                                            </tr>

                                            <tr>

                                                <td>&nbsp;</td>

                                            </tr>

                                            <?php if ($order->pick_and_drop_service == '1') : ?>

                                                <tr>

                                                    <th>Notes</th>

                                                </tr>

                                                <tr>

                                                    <td></td>

                                                </tr>

                                            <?php endif; ?>

                                        </tbody>

                                    </table>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                    <hr>

                    <h4>Order Summary - Invoice</h4>

                    <div class="itemRow flex">

                        <div class="col col1">

                            <table class="sm pb data_list">

                                <thead>

                                    <tr>

                                        <th>Items</th>

                                        <th>Service</th>

                                        <th>Qty</th>

                                        <th>Unit Price</th>

                                        <th>Price</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php

                                    $services_total = 0;

                                    foreach ($order_detail as $key => $row) :

                                        $service = get_sub_service($row->sub_service_id, $order->vendor_id);

                                        $services_total += $row->sub_service_price * $row->quantity;

                                    ?>

                                        <tr>

                                            <td><?= $service->name ?></td>

                                            <td><?= $service->service_name ?></td>

                                            <td><?= $row->quantity ?></td>

                                            <td>£<?= price_format($row->sub_service_price) ?></td>

                                            <td>£<?= price_format($row->sub_service_price * $row->quantity) ?></td>

                                        </tr>

                                    <?php endforeach; ?>

                                </tbody>

                                <tfoot>

                                    <tr>

                                        <td colspan="4"></td>

                                        <td class="color">£<?= order_total_price($order->order_id, 'SERVICES') ?></td>

                                    </tr>

                                    <?php if ($order->pick_and_drop_service == '1') : ?>

                                        <?php if ($order->free_pick_and_drop_service == '0') : ?>

                                            <tr>

                                                <td colspan="4" class="color">Pickup & Delivery Charges</td>

                                                <td>£<?= price_format($order->pick_and_drop_charges) ?></td>

                                            </tr>

                                        <?php else : ?>

                                            <tr>

                                                <td colspan="4" class="color">Pickup & Delivery Charges</td>

                                                <td>Free</td>

                                            </tr>

                                        <?php endif; ?>

                                    <?php endif; ?>

                                    <?php if ($order->buyer_get_credit == '1') : ?>

                                        <!-- <tr>

                                            <td colspan="4" class="color">Total Price</td>

                                            <td>£<?= price_format($order->order_total_price + $order->buyer_credit_discount) ?></td>

                                        </tr> -->

                                        <tr>

                                            <td colspan="4" class="color">Get Discount <?= $order->buyer_credit_percentage ?>%</td>

                                            <td>£<?= order_total_price($order->order_id, 'DISCOUNT') ?></td>

                                        </tr>

                                        <tr>

                                            <td colspan="4" class="color">After Discount</td>

                                            <td>£<?= order_total_price($order->order_id, 'AFTER_DISCOUNT') ?></td>

                                        </tr>

                                    <?php endif; ?>

                                    <!-- <tr>

                                            <td colspan="4" class="color">Total</td>

                                            <td>£<?= order_total_price($order->order_id) ?></td>

                                        </tr> -->

                                </tfoot>

                            </table>

                            <div id="amended-invoice">

                                <?php echo amended_invoice($order->order_id, $amended); ?>

                            </div>

                        </div>

                        <div class="col col2">

                            <table class="sm">

                                <tbody>

                                    <?php if ($order->pick_and_drop_service == '1') : ?>

                                        <tr>

                                            <th>Collection Date:</th>

                                            <td><?= date_picker_format_date($order->collection_date, 'D, d M Y', false) ?></td>

                                        </tr>

                                        <tr>

                                            <th>Collection Time:</th>

                                            <td><?= $order->collection_time ?></td>

                                        </tr>

                                        <tr>

                                            <td>&nbsp;</td>

                                        </tr>

                                        <tr>

                                            <th>Delivery Date:</th>

                                            <td><?= date_picker_format_date($order->delivery_date, 'D, d M Y', false) ?></td>

                                        </tr>

                                        <tr>

                                            <th>Delivery Time:</th>

                                            <td><?= $order->delivery_time ?></td>

                                        </tr>

                                        <tr>

                                            <td>&nbsp;</td>

                                        </tr>

                                        <tr>

                                            <th colspan="2"><?= $order->drop_type ?></th>

                                        </tr>

                                    <?php else : ?>

                                        <tr>

                                            <th>Drop Off Date:</th>

                                            <td><?= date_picker_format_date($order->delivery_date, 'D, d M Y', false) ?></td>

                                        </tr>

                                        <tr>

                                            <th>Drop Off Time:</th>

                                            <td><?= $order->delivery_time ?></td>

                                        </tr>

                                    <?php endif; ?>

                                </tbody>

                            </table>

                            <div class="br"></div>

                            <?php if ($order->pick_and_drop_service == '1') : ?>

                                <div class="icon deliverIcon"><img src="<?= base_url() ?>assets/images/vector-wait.svg" alt=""></div>

                            <?php endif; ?>

                            <div class="alertMsg" style="display:none"></div>

                        </div>

                    </div>

                    <!-- <hr>

                    <div class="txtGrp">

                        <label for="">Comments</label>

                        <textarea name="" id="" class="txtBox"></textarea>

                    </div> -->

                </div>

                <?php if (!empty($delivery_proof)) { ?>

                    <div class="blk jobBlk" id="delivery_proof">

                        <div class="doneBlk">

                            <div class="image"><img src="<?= get_site_image_src("orders", $delivery_proof->proof_image); ?>" alt=""></div>

                            <div class="txt">

                                <h5>Comments</h5>

                                <p><?= $delivery_proof->proof_comment ?></p>

                            </div>

                        </div>

                    </div>

                    <div class="blk text-center" id="deliveryProofRequest">

                        <p>You've received your order, please accept or decline.</p>

                        <div class="bTn">

                            <button type="button" class="webBtn popBtn lightBtn" data-popup="reject-proof">Decline</button>

                            <button type="button" class="webBtn popBtn" data-popup="leave-review">Accept</button>

                        </div>

                    </div>

                <?php } ?>

            </div>

            <div class="popup" data-popup="reject-proof">

                <div class="tableDv">

                    <div class="tableCell">

                        <div class="contain">

                            <div class="_inner">

                                <div class="crosBtn"></div>

                                <h4 class=" text-center" style="margin:20px 0px 40px;">Are You Sure you want to Reject it ? </h4>

                                <form action="<?= base_url('buyer/reject_proof_delivery/'); ?>" method="post" id="rejectDeliveryAndRating" class="rejectDeliveryAndRating">

                                    <div class="alertMsg" style="display:none"></div>

                                    <input type="hidden" name="proof_id" value="<?= doEncode($delivery_proof->proof_id) ?>" />

                                    <div class="bTn text-center" style="padding:10px 0px 30px;">

                                        <button type="submit" class="webBtn"><i class="spinner hidden"></i>Yes</button>

                                        <!-- <button type="reset" data-dismiss="modal" class="webBtn lightBtn">No</button> -->

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="popup" data-popup="leave-review">

                <div class="tableDv">

                    <div class="tableCell">

                        <div class="contain">

                            <div class="_inner">

                                <div class="crosBtn"></div>

                                <h4>Leave Review</h4>

                                <form action="<?= base_url() ?>buyer/accept_proof_delivery" method="post" id="acceptDeliveryAndRating" class="acceptDeliveryAndRating">

                                    <div class="alertMsg" style="display:none"></div>

                                    <input type="hidden" name="rating" value="4" />

                                    <input type="hidden" name="proof_id" value="<?= doEncode($delivery_proof->proof_id) ?>" />

                                    <div class="txtGrp">

                                        <div class="rateYo" id="rating" data-rateyo-rating="1" data-rateyo-star-width="20px" data-rateyo-read-only="false"></div>

                                    </div>

                                    <div class="txtGrp">

                                        <label for="review_comment">Write a little description</label>

                                        <textarea name="review_comment" id="review_comment" class="txtBox"></textarea>

                                    </div>

                                    <div class="bTn text-center"><button type="submit" class="webBtn"><i class="spinner hidden"></i>Submit</button></div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="popup" data-popup="pay-amend-invoice">

                <div class="tableDv">

                    <div class="tableCell">

                        <div class="contain">

                            <div class="_inner">

                                <div class="crosBtn"></div>

                                <h3>Pay Amended Amount</h3>

                                <hr />

                                <form action="<?= base_url() ?>buyer/pay_amend_invoice" method="post" id="payment-form">

                                    <p>All transactions are secure and encrypted.</p>

                                    <div class="alertMsg" style="display:none"></div>

                                    <div data-payment>

                                        <div class="lblBtn">

                                            <input type="radio" name="payment_type" id="credit" class="tglBlk" value="credit-card" checked="">

                                            <label for="credit">Credit card</label>

                                        </div>

                                        <div class="insideBlk active">

                                            <div class="row formRow">

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">

                                                    <div class="txtGrp">

                                                        <label for="cardnumber">Card Number</label>

                                                        <input type="text" name="cardnumber" id="cardnumber" class="txtBox">

                                                    </div>

                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">

                                                    <div class="txtGrp">

                                                        <label for="card_holder_name">Card Holder</label>

                                                        <input type="text" name="card_holder_name" id="card_holder_name" class="txtBox">

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">

                                                    <div class="txtGrp">

                                                        <label for="exp_month" class="move">Month</label>

                                                        <select name="exp_month" id="exp_month" class="txtBox">

                                                            <option value="">Select</option>

                                                            <option value="01">01</option>

                                                            <option value="02">02</option>

                                                            <option value="03">03</option>

                                                            <option value="04">04</option>

                                                            <option value="05">05</option>

                                                            <option value="06">06</option>

                                                            <option value="07">07</option>

                                                            <option value="08">08</option>

                                                            <option value="09">09</option>

                                                            <option value="10">10</option>

                                                            <option value="11">11</option>

                                                            <option value="12">12</option>

                                                        </select>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">

                                                    <div class="txtGrp">

                                                        <label for="exp_year" class="move">Year</label>

                                                        <select name="exp_year" id="exp_year" class="txtBox">

                                                            <option value="">Select</option>

                                                            <option value="2021">2021</option>

                                                            <option value="2022">2022</option>

                                                            <option value="2023">2023</option>

                                                            <option value="2024">2024</option>

                                                            <option value="2025">2025</option>

                                                            <option value="2026">2026</option>

                                                            <option value="2027">2027</option>

                                                            <option value="2028">2028</option>

                                                            <option value="2029">2029</option>

                                                            <option value="2030">2030</option>

                                                            <option value="2031">2031</option>

                                                        </select>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">

                                                    <div class="txtGrp">

                                                        <label for="cvc">CVC?</label>

                                                        <input type="text" name="cvc" id="cvc" class="txtBox">

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <hr>

                                        <div class="lblBtn">

                                            <input type="radio" name="payment_type" id="paypal" class="tglBlk" value="paypal">

                                            <label for="paypal">Paypal</label>

                                        </div>

                                    </div>

                                    <div class="bTn formBtn text-center">

                                        <button type="submit" class="webBtn"><i class="spinner hidden"></i>Pay</button>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- orders -->

        <script src="https://js.stripe.com/v2/"></script>

        <script>
            $(document).on('submit', '#payment-form', function(e) {

                e.preventDefault();

                let sbtn = $('#payment-form').find("button[type='submit']");

                sbtn.attr('disabled', true);

                $(this).find('button[type="submit"] i.spinner').removeClass('hidden');

                let form$ = $("#payment-form");

                let frmIcon = form$.find("button[type='submit'] i.spinner");

                let frmData = new FormData(form$[0]);

                let frmMsg = $('.alertMsg-form');

                sbtn.attr("disabled", true);

                if ($('input[name="payment_type"]:checked').val() == 'paypal') {

                    needToConfirm = true;

                    $.ajax({

                        url: form$.attr('action'),

                        data: frmData,

                        dataType: 'JSON',

                        method: 'POST',

                        processData: false,

                        contentType: false,

                        success: function(rs) {

                            $("html, body").animate({

                                scrollTop: 100

                            }, "slow");

                            frmMsg.html(rs.msg).slideDown(500);

                            if (rs.status == 1) {

                                toastr.success(rs.msg, "Success");

                                setTimeout(function() {

                                    frmIcon.addClass("hidden");

                                    form$[0].reset();

                                    window.location.href = rs.redirect_url;

                                }, 3000);

                            } else {

                                toastr.error(rs.msg, "Error");

                                setTimeout(function() {

                                    frmIcon.addClass("hidden");

                                    sbtn.attr("disabled", false);

                                }, 3000);

                            }

                        },

                        error: function(rs) {

                            // console.log(rs);

                            sbtn.attr("disabled", false);

                            toastr.error('Please try again or refresh your page.Error occur due to sever response!', "Error");

                        },

                        complete: function(rs) {

                            needToConfirm = false;

                        }

                    });

                } else if ($('input[name="payment_type"]:checked').val() == 'credit-card') {

                    object = $(this);

                    Stripe.card.createToken({

                        number: $('#cardnumber').val(),

                        cvc: $('#cvc').val(),

                        exp_month: $('#exp_month').val(),

                        exp_year: $('#exp_year').val(),

                        name: $('#card_holder_name').val()



                    }, stripeResponseHandler);

                    return false;

                }

            })

            Stripe.setPublishableKey('<?= API_PUBLIC_KEY; ?>');



            function stripeResponseHandler(status, response) {

                let form$ = $("#payment-form");

                let sbtn = form$.find("button[type='submit']");

                let frmIcon = form$.find("button[type='submit'] i.spinner");

                if (response.error) {

                    console.log(response.error.message)

                    toastr.error('<strong>Error:</strong> ' + response.error.message + '', "Error");

                    $('button[type="submit"]').prop('disabled', false);

                    frmIcon.addClass('hidden');

                } else {

                    let nonce = response['id'];

                    let frmData = new FormData(form$[0]);

                    let frmMsg = $('.alertMsg-form');

                    frmData.append('nonce', nonce);



                    object.append("<input type='hidden' name='nonce' value='" + nonce + "' />");

                    object.append("<input type='hidden' name='order_id' value='<?= doEncode($order->order_id) ?>' />");

                    $('.card_payment').prop('disabled', true);

                    $('.card_payment').parent().hide();

                    $.ajax({

                        url: form$.attr('action'),

                        data: object.serialize(),

                        dataType: 'JSON',

                        method: 'POST',

                        error: function(er) {

                            toastr.error('<div>Please try again or refresh your page.Error occur due to sever response!</div>', "Error");

                        },

                        success: function(rs) {

                            if (rs.scroll_top)

                                $("html, body").animate({

                                    scrollTop: 0

                                }, "slow");

                            if (rs.status == 1) {

                                toastr.success(rs.msg, "Success");

                                setTimeout(function() {

                                    $(".popup").fadeOut();

                                    $("html").removeClass("flow");

                                    $('#amended-invoice').empty().append(rs.html);

                                    if (rs.hide_msg)

                                        $('.alertMsg').slideUp(500);

                                    if (rs.redirect_url)

                                        window.location.href = rs.redirect_url;

                                }, 3000)

                            } else {

                                toastr.error(rs.msg, "Error");

                            }

                        },

                        complete: function() {

                            sbtn.attr("disabled", false);

                            frmIcon.addClass('hidden');

                        }

                    })

                }

            }
        </script>

    </main>

    <?php $this->load->view('includes/footer'); ?>

</body>



</html>