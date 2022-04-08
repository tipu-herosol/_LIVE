<!doctype html>

<html>



<head>

    <title>Order Detail — Compare My Laundry</title>

    <?php $this->load->view('includes/site-master'); ?>

</head>



<body id="home-page">

    <?php $this->load->view('includes/header-vendor'); ?>

    <main dash orders>

        <?php $this->load->view('includes/sidebar-vendor'); ?>





        <section id="orders">

            <div class="contain-fluid">

                <div class="blk topBlk">

                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, '300p_'); ?>" alt=""></div>

                    <div class="txt">

                        <h3><span class="regular">Welcome,</span> Dear, <?= $mem_data->mem_fname . ' ' . $mem_data->mem_lname ?>!<span class="regular">Nice to see you again.</span></h3>

                    </div>

                    <div class="toggleBlk">

                        <div class="switchBtn hidden">

                            <input type="checkbox" name="" id="" checked>

                            <em></em>

                            <small></small>

                        </div>

                    </div>

                </div>

                <div class="blk jobBlk">

                    <table>

                        <tbody>

                            <tr>

                                <td>

                                    <strong>Order No:</strong>

                                    <em class="red-color">#<?= num_size($order->order_id); ?></em>

                                </td>

                                <td width="5%" id="order-status-dropdown">

                                    <?php echo order_status_dropdown($order->order_status, $order->order_id) ?>

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

                                                <th>Customer Name</th>

                                            </tr>

                                            <tr>

                                                <td><?= $order->mem_fname . ' ' . $order->mem_lname ?></td>

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

                                                <th>Customer Phone</th>

                                            </tr>

                                            <tr>

                                                <td><?= $order->mem_phone ?></td>

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

                                                    <th>Customer Notes</th>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="txtGrp">

                                                            <label for="">Notes</label>

                                                            <textarea name="" id="" class="txtBox"></textarea>

                                                        </div>

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

                                                <th>Customer Email</th>

                                            </tr>

                                            <tr>

                                                <td><?= $order->mem_email ?></td>

                                            </tr>

                                            <tr>

                                                <td>&nbsp;</td>

                                            </tr>

                                            <?php if ($order->pick_and_drop_service == '1') : ?>

                                                <tr>

                                                    <th>Customer Notes</th>

                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="txtGrp">

                                                            <label for="">Notes</label>

                                                            <textarea name="" id="" class="txtBox"></textarea>

                                                        </div>

                                                    </td>

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

                                            <td class="semi">£<?= price_format($row->sub_service_price * $row->quantity) ?></td>

                                        </tr>

                                    <?php endforeach; ?>

                                </tbody>

                                <tfoot>

                                    <tr>

                                        <td colspan="4"></td>

                                        <td class="semi color">£<?= order_total_price($order->order_id, 'SERVICES') ?></td>

                                    </tr>

                                    <?php if ($order->pick_and_drop_service == '1') : ?>

                                        <?php if ($order->free_pick_and_drop_service == '0') : ?>

                                            <tr>

                                                <td colspan="4" class="color">Pickup & Delivery Charges</td>

                                                <td class="semi">£<?= price_format($order->pick_and_drop_charges) ?></td>

                                            </tr>

                                        <?php else : ?>

                                            <tr>

                                                <td colspan="4" class="color">Pickup & Delivery Charges</td>

                                                <td class="semi">Free</td>

                                            </tr>

                                        <?php endif; ?>

                                    <?php endif; ?>

                                    <?php if ($order->buyer_get_credit == '1') : ?>

                                        <!-- <tr>

                                            <td colspan="4" class="color">Original Order Price</td>

                                            <td class="semi">£<?= price_format($order->order_total_price + $order->buyer_credit_discount) ?></td>

                                        </tr> -->

                                        <tr>

                                            <td colspan="4" class="color">Get Discount <?= $order->buyer_credit_percentage ?>%</td>

                                            <td class="semi">£<?= order_total_price($order->order_id, 'DISCOUNT') ?></td>

                                        </tr>

                                        <tr>

                                            <td colspan="4" class="color">After Discount</td>

                                            <td class="semi">£<?= order_total_price($order->order_id, 'AFTER_DISCOUNT') ?></td>

                                        </tr>

                                    <?php else : ?>

                                        <!-- <tr>

                                            <td colspan="4" class="color">Total</td>

                                            <td>£<?= order_total_price($order->order_id) ?></td>

                                        </tr> -->

                                    <?php endif; ?>

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

                            <?php if (($order->order_status == 'New' || $order->order_status == 'In Progress')) : ?>

                                <div class="bTn formBtn" id="amend-invoice-div">

                                    <button type="button" class="webBtn mdBtn icoBtn popBtn" data-popup="amend-invoice"><img src="<?= base_url() ?>assets/images/icon-price-list.svg" alt=""> Amend Invoice</button>

                                </div>

                            <?php endif; ?>



                            <div class="popup sm" data-popup="amend-invoice">

                                <div class="tableDv">

                                    <div class="tableCell">

                                        <div class="contain">

                                            <div class="_inner">

                                                <div class="crosBtn"></div>

                                                <h3>Amend Invoice</h3>

                                                <form action="<?= base_url() ?>vendor/amend_invoice" method="post" id="frmAmendInvoice" class="frmAmendInvoice">

                                                    <div class="alertMsg" style="display:none"></div>

                                                    <input type="hidden" name="order_id" value="<?= doEncode($order->order_id) ?>" />

                                                    <div class="txtGrp">

                                                        <label for="sub_service_name">Title</label>

                                                        <input type="text" name="sub_service_name" id="sub_service_name" class="txtBox">

                                                    </div>

                                                    <div class="txtGrp">

                                                        <label for="quantity">Quantity</label>

                                                        <input type="text" name="quantity" id="quantity" class="txtBox">

                                                    </div>

                                                    <div class="txtGrp">

                                                        <label for="sub_service_price">Price</label>

                                                        <input type="text" name="sub_service_price" id="sub_service_price" class="txtBox">

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

                        </div>

                    </div>

                </div>

                <div id="delivery-proof">

                    <?php echo get_delivey_proof($order->order_id) ?>

                </div>

                <?php if ($delivery_proof && ($order->order_status == 'Delivered' || $order->order_status == 'In Progress')) : ?>

                    <div class="blk text-center" id="order-completion-section">

                        <p>When you have completed the job, please mark it as done.</p>

                        <div class="bTn">

                            <button type="button" class="webBtn popBtn" data-popup="mark-complete" data-status="<?= $order->order_status ?>">Yes it's Done</button>

                        </div>

                    </div>

                <?php endif; ?>

                <div class="br"></div>

                <?php if(!empty($review)): ?>
                    <div class="reviewBlk blk">

                        <div class="review">

                            <div class="ico"><img src="<?= get_site_image_src("members", $review->mem_image, 'thumb_'); ?>" alt=""></div>

                            <div class="txt">

                                <div class="icoTxt">

                                    <div class="title">

                                        <h5><?=$review->mem_fname.' '.$review->mem_lname?></h5>

                                        <div class="rateYo" data-rateyo-rating="<?= $review->rating ?>"></div>

                                    </div>

                                    <div class="date"><?=date_picker_format_date($review->review_date, 'D, d M Y', false)?></div>

                                </div>

                                <p><?=$review->review_comment?></p>

                            </div>

                        </div>

                    </div>
                <?php endif; ?>

            </div>

            <div class="popup" data-popup="mark-complete">

                <div class="tableDv">

                    <div class="tableCell">

                        <div class="contain">

                            <div class="_inner">

                                <div class="crosBtn"></div>

                                <h4>You have complete the job</h4>

                                <form action="<?= base_url() ?>vendor/complete_order" method="post" class="frmCompleteOrder">

                                    <div class="alertMsg" style="display:none"></div>

                                    <input type="hidden" name="order_id" value="<?= doEncode($order->order_id) ?>" />

                                    <div class="txtGrp">

                                        <label for="proof_image" class="move">Order Photo</label>

                                        <button type="button" class="txtBox uploadImg" data-upload="bag_pic" data-text="Choose file"></button>

                                        <input type="file" name="proof_image" id="proof_image" class="uploadFile" data-upload="bag_pic">

                                    </div>

                                    <div class="txtGrp">

                                        <label for="proof_comment">Comments</label>

                                        <textarea name="proof_comment" id="proof_comment" class="txtBox"></textarea>

                                    </div>

                                    <div class="bTn text-center"><button type="submit" class="webBtn"><i class="spinner hidden"></i>Submit</button></div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- orders -->



        <script>

            $(function() {

                $(document).on('click', '.order-status', function(e) {

                    e.preventDefault();

                    var current = $(this);

                    let statusToChange = current.data('status');

                    let order_id = current.data('order-id');

                    $.ajax({

                        url: base_url + 'vendor/change_order_status',

                        data: {

                            'statusToChange': statusToChange,

                            'order_id': order_id



                        },

                        dataType: 'JSON',

                        method: 'POST',

                        success: function(rs) {

                            if (rs.status == 'success')

                                location.reload();

                        },

                        complete: function() {



                        }

                    })

                })

            });

        </script>

    </main>

    <?php $this->load->view('includes/footer'); ?>

</body>



</html>