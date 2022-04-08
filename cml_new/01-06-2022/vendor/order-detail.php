<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order Detail — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body data-page="dash">
    <?php $this->load->view('includes/header'); ?>
    <main>


        <section id="orders">
            <div class="contain">
                <div class="btn_blk form_blk">
                    <a href="<?= base_url() ?>vendor/orders" class="site_btn learn"><img src="<?= base_url('assets/images/arrow-left-sm.svg') ?>" alt=""> Back</a>
                </div>
                <div class="blk">
                    <div class="order_blk">
                        <div class="icon"><img src="<?= base_url('assets/images/partners/1.png') ?>" alt=""></div>
                        <div class="txt">
                            <div class="top_head">
                                <h3>Order No: <span>#<?= num_size($order->order_id) ?></span></h3>
                                <div class="status_btn_blk" id="order-status-dropdown">
                                    <?php echo order_status_dropdown($order->order_status, $order->order_id) ?>
                                </div>
                            </div>
                            <ul class="list">
                                <li>
                                    <strong>Customer Name:</strong>
                                    <span><?= $order->mem_fname . ' ' . $order->mem_lname ?></span>
                                </li>
                                <li>
                                    <strong>Phone Number:</strong>
                                    <span><?= $order->mem_phone ?></span>
                                </li>
                                <li>
                                    <strong>Email Address:</strong>
                                    <span><?= $order->mem_email ?></span>
                                </li>
                            </ul>
                            <hr>
                            <ul class="list">
                                <?php if ($order->pick_and_drop_service == '1') : ?>
                                    <li>
                                        <strong>Collection Address:</strong>
                                        <span>
                                            <?php 
                                                $cIndexes = explode(' @@ ', $order->collection_from); 
                                                echo ucfirst($order->address_type).':<br/>'.$cIndexes[0].'<br/>'.$cIndexes[1].'<br/>'.$cIndexes[2]; 
                                                
                                            ?>
                                        </span>
                                    </li>
                                    <li>
                                        <strong>Delivery Address:</strong>
                                        <span></span>
                                            <?php 
                                                $cIndexes = explode(' @@ ', $order->delivery_to); 
                                                echo ucfirst($order->address_type).':<br/>'.$cIndexes[0].'<br/>'.$cIndexes[1].'<br/>'.$cIndexes[2]; 
                                                
                                            ?>
                                        </span>
                                    </li>
                                    <li>
                                        <strong>Collection & Delivery Information:</strong>
                                        <span>
                                            <strong>Collection Date & Time:</strong> <br>
                                            <?= date_picker_format_date($order->collection_date, 'D, d M Y', false) ?> & <?= $order->collection_time ?>
                                        </span>
                                        <span>
                                            <strong>Delivery Date & Time:</strong> <br>
                                            <?= date_picker_format_date($order->delivery_date, 'D, d M Y', false) ?> & <?= $order->delivery_time ?>
                                        </span>
                                    </li>
                                    <li>
                                        <strong>Handover Type:</strong>
                                        <span><?= $order->drop_type ?></span>
                                    </li>
                                    <?php if (!empty($order->collection_or_delivery_notes)) : ?>
                                        <li>
                                            <strong>Collection or delivery instructions:</strong>
                                            <span><?= $order->collection_or_delivery_notes ?></span>
                                        </li>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <li>
                                        <strong>Walk-in Address:</strong>
                                        <span>
                                            <?php
                                            foreach (explode('@', $order->address) as $val) :
                                                echo $val;
                                                echo '<br>';
                                            endforeach;
                                            ?>
                                        </span>
                                    </li>
                                    <li>
                                        <strong>Handover Date & Time:</strong>
                                        <span><?= date_picker_format_date($order->delivery_date, 'D, d M Y', false) ?> - <?= $order->delivery_time ?></span>
                                    </li>
                                <?php endif; ?>
                                <?php if (!empty($order->extra_address_detail)) : ?>
                                    <li>
                                        <strong>Extra Address:</strong>
                                        <span><?= $order->extra_address_detail ?></span>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <strong>Customer Notes:</strong>
                                    <span>
                                        <textarea name="customer_notes" id="customer_notes" class="text_box form_blk" placeholder="Type Notes"><?= $order->order_note ?></textarea>
                                        <button type="button" class="site_btn md" id="save-notes" data-o-id="<?= doEncode($order->order_id) ?>">Save Notes</button>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="top_head">
                    <h4 class="heading">Order Summary - Invoice</h4>
                    <?php if (($order->order_status == 'New' || $order->order_status == 'In Progress')) : ?>
                        <div class="btn_blk" id="amend-invoice-div">
                            <button type="button" class="site_btn md light pop_btn" data-popup="amend-invoice"><img src="<?= base_url() ?>assets/images/icon-price-list.svg" alt=""> Amend Invoice</button>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="blk">
                    <div class="tbl_blk">
                        <table>
                            <thead>
                                <tr>
                                    <th width="30%">Service</th>
                                    <th width="30%" class="text-center">Item</th>
                                    <th width="15%" class="price text-center">Unit Price</th>
                                    <th width="15%" class="text-center">Qty</th>
                                    <th width="10%" class="price text-center">Total Price</th>
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
                                        <td><?= $service->service_name ?></td>
                                        <td class="text-center"><?= $service->name ?></td>
                                        <td class="price text-center">£<?= price_format($row->sub_service_price) ?></td>
                                        <td class="text-center"><?= $row->quantity ?></td>
                                        <td class="price text-center">£<?= price_format($row->sub_service_price * $row->quantity) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tbody class="foot_rows">
                                <?php if ($order->pick_and_drop_service == '1') : ?>
                                    <?php if ($order->free_pick_and_drop_service == '0') : ?>
                                        <tr>
                                            <th colspan="4" class="color text-right">Pickup & Delivery Charges</th>
                                            <th class="price color text-center">£<?= price_format($order->pick_and_drop_charges) ?></th>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <th colspan="4" class="color text-right">Pickup & Delivery Charges</th>
                                            <th class="price color text-center">Free</th>
                                        </tr>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if ($order->buyer_get_credit == '1') : ?>
                                    <tr>
                                        <th colspan="4" class="color text-right">Get Discount <?= $order->buyer_credit_percentage ?>%</th>
                                        <th class="price text-center">£<?= order_total_price($order->order_id, 'DISCOUNT') ?></th>
                                    </tr>
                                    <tr>
                                        <th colspan="4" class="color text-right">After Discount</th>
                                        <th class="price text-center">£<?= order_total_price($order->order_id, 'AFTER_DISCOUNT') ?></th>
                                    </tr>
                                <?php else : ?>
                                <?php endif; ?>
                            </tbody>
                            <tbody id="amended-invoice">
                                <?php echo amended_invoice($order->order_id, $amended); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php echo get_delivey_proof($order->order_id) ?>
                <?php if ($delivery_proof && ($order->order_status == 'Delivered' || $order->order_status == 'In Progress')) : ?>
                    <div class="blk text-center" id="order-completion-section">
                        <h4>When you have completed the job, please mark it as done.</h4>
                        <div class="btn_blk form_btn">
                            <button type="button" class="site_btn pop_btn" data-popup="mark-complete" data-status="<?= $order->order_status ?>">Yes it's Done</button>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($review)) : ?>
                    <div class="review_blk blk">
                        <div class="review">
                            <div class="ico"><img src="<?= get_site_image_src("members", $review->mem_image, 'thumb_'); ?>" alt=""></div>
                            <div class="txt">
                                <div class="ico_txt">
                                    <div class="title">
                                        <h5><?= $review->mem_fname . ' ' . $review->mem_lname ?></h5>
                                        <div class="rateYo" data-rateyo-rating="<?= $review->rating ?>"></div>
                                    </div>
                                    <div class="date"><?= date_picker_format_date($review->review_date, 'D, d M Y', false) ?></div>
                                </div>
                                <p><?= $review->review_comment ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="popup lg" data-popup="amend-invoice">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="cross_btn"></div>
                                <h3>Amend Invoice</h3>
                                <form action="<?= base_url() ?>vendor/amend_invoice" method="post" id="frmAmendInvoice" class="frmAmendInvoice">
                                    <div class="alertMsg" style="display:none"></div>
                                    <input type="hidden" name="order_id" value="<?= doEncode($order->order_id) ?>" />
                                    <div class="form_row row" id="amend-item-rows">
                                        <div class="col-xs-12">
                                            <div class="form_row row">
                                                <div class="col-xs-4">
                                                    <h6>Service <sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <select name="service_id[]" id="sub_service_id0" class="text_box">
                                                            <option value="">Select</option>
                                                            <?php foreach($services as $index => $service): ?>
                                                                <option value="<?=$service->id?>"><?=$service->name?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <h6>Item <sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <input type="text" name="sub_service_name[]" id="sub_service_name0" class="text_box" placeholder="eg: Lorem Ipsum">
                                                    </div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <h6>Quantity <sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <input type="text" name="quantity[]" id="quantity0" class="text_box" placeholder="eg: 5">
                                                    </div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <h6>Unit Price <sup>*</sup></h6>
                                                    <div class="form_blk">
                                                        <input type="text" name="sub_service_price[]" id="sub_service_price0" class="text_box" placeholder="eg: 10">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn_blk mt text-right">
                                        <button type="button" id="add-amendment-row" class="site_btn text">Add new</button>
                                    </div>
                                    <div class="br"></div>
                                    <div class="form_row row">
                                        <div class="col-xs-12">
                                            <h6>Reason for invoice amendment</h6>
                                            <div class="form_blk">
                                                <textarea name="amendment_reason" id="amendment_reason" class="text_box" placeholder="Type something here"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn_blk form_btn text-center">
                                        <button type="submit" class="site_btn long"><i class="spinner hidden"></i>Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup" data-popup="mark-complete">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="cross_btn"></div>
                                <h3>You have complete the job</h3>
                                <form action="<?= base_url() ?>vendor/complete_order" method="post" class="frmCompleteOrder">
                                    <div class="alertMsg" style="display:none"></div>
                                    <input type="hidden" name="order_id" value="<?= doEncode($order->order_id) ?>" />
                                    <div class="form_row row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h6>Order Photo <sup>*</sup></h6>
                                            <div class="form_blk">
                                                <button type="button" class="text_box uploadImg" data-upload="bag_pic" data-text="Choose file"></button>
                                                <a class="image-proof">
                                                    <img src="" alt="" data-src="" id="uploadProofImage">
                                                </a>
                                                <input type="file" name="proof_image" id="proof_image" class="uploadFile" data-upload="bag_pic" onchange="PreviewImage();">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h6>Comments</h6>
                                            <div class="form_blk">
                                                <textarea name="proof_comment" id="proof_comment" class="text_box" placeholder="Type something here"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn_blk form_btn text-center"><button type="submit" class="site_btn long"><i class="spinner hidden"></i>Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- orders -->


        <script>
            function PreviewImage() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("proof_image").files[0]);
                oFReader.onload = function(oFREvent) {
                    document.getElementById("uploadProofImage").src = oFREvent.target.result;
                    $("#uploadProofImage").attr('data-src', oFREvent.target.result);
                };
            };

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
                        complete: function() {}
                    })
                })
            });

            $(function() {
                $(document).on('click', '#save-notes', function(e) {
                    e.preventDefault();
                    var current = $(this);
                    let order_id = current.data('o-id');
                    let notes = $('#customer_notes').val();
                    $.ajax({
                        url: base_url + 'vendor/save_notes',
                        data: {
                            'notes': notes,
                            'order_id': order_id
                        },
                        dataType: 'JSON',
                        method: 'POST',
                        success: function(rs) {
                            if (rs.status == 'success')
                                toastr.success("Notes saved successfully.", "Success");
                        },
                        complete: function() {}
                    })
                })
            });


            $(function() {
                $(document).on('click', '#add-amendment-row', function(e) {
                    e.preventDefault();
                    let rowIndex = 1;
                    let html = `<div class="col-xs-12" id="row-${rowIndex}">
                                    <div class="form_row row">
                                        <div class="col-xs-4">
                                            <h6>Service <sup>*</sup></h6>
                                            <div class="form_blk">
                                                <select name="service_id[]" id="sub_service_id${rowIndex}" class="text_box">
                                                    <option value="">Select</option>
                                                    <?php foreach($services as $index => $service): ?>
                                                        <option value="<?=$service->id?>"><?=$service->name?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <h6>Item <sup>*</sup></h6>
                                            <div class="form_blk">
                                                <input type="text" name="sub_service_name[]" id="sub_service_name${rowIndex}" class="text_box" placeholder="eg: Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <h6>Quantity <sup>*</sup></h6>
                                            <div class="form_blk">
                                                <input type="text" name="quantity[]" id="quantity${rowIndex}" class="text_box" placeholder="eg: 5">
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <h6>Unit Price <sup>*</sup></h6>
                                            <div class="form_blk">
                                                <input type="text" name="sub_service_price[]" id="sub_service_price${rowIndex}" class="text_box" placeholder="eg: 10">
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                    $('#amend-item-rows').append(html);
                    rowIndex++;
                })
            });

            
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>