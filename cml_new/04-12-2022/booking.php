<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
    <script>
        var cp_obj_1 = CraftyPostcodeCreate();
        cp_obj_1.set("access_token", "23d54-dc93e-f19eb-072fa"); // your token here
        cp_obj_1.set("result_elem_id", "crafty_postcode_result_display_1");
        // cp_obj_1.set("form", ""); // left blank, we will use element id's
        // cp_obj_1.set("elem_company"  , "companyname_1");
        // cp_obj_1.set("elem_street1"  , "address1_1");
        // cp_obj_1.set("elem_street2"  , "address2_1");
        // cp_obj_1.set("elem_street3"  , "address3_1");
        // cp_obj_1.set("elem_town"     , "town_1");
        cp_obj_1.set("elem_postcode", "zipcode");
    </script>
</head>

<body data-page="serve">
    <?php $this->load->view('includes/header'); ?>
    <main>


        <section id="booking">
            <div class="contain">
                <!-- <div class="content">
                    <h3 class="heading"><?= $vendor->mem_fname . ' ' . $vendor->mem_lname ?></h3>
                    <p><?= $content['header_detail'] ?></p>
                </div> -->
                <div class="alertMsg-form alert alert-danger alert-sm text-white" style="display:none"></div>
                <form action="" method="post" id="payment-form">
                    <div class="flex_row">
                        <div class="col col1">
                            <ul class="svc_lst svc_lst_blk">
                                <li data-name="vendor">
                                    <div class="inner">
                                        <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image2']) ?>" alt=""></div>
                                        <div class="txt">
                                            <strong><?= $content['step1_title'] ?></strong>
                                        </div>
                                    </div>
                                </li>
                                <li data-name="service">
                                    <div class="inner">
                                        <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image4']) ?>" alt=""></div>
                                        <div class="txt">
                                            <strong><?= $content['step3_title'] ?></strong>
                                        </div>
                                    </div>
                                </li>
                                <li data-name="address" class="<?= empty($this->session->mem_id) ? '' : 'hidden' ?>" id="address-left-side-option">
                                    <div class="inner">
                                        <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image5']) ?>" alt=""></div>
                                        <div class="txt">
                                            <strong id="address-signin-heading">Sign In</strong>
                                        </div>
                                    </div>
                                </li>
                                <li data-name="instructions">
                                    <div class="inner">
                                        <!-- <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image6']) ?>" alt=""></div> -->
                                        <div class="icon"><img src="<?= base_url() ?>assets/images/icon-instruction.svg" alt=""></div>
                                        <div class="txt">
                                            <strong>Instructions</strong>
                                        </div>
                                    </div>
                                </li>
                                <li data-name="payment">
                                    <div class="inner">
                                        <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image6']) ?>" alt=""></div>
                                        <div class="txt">
                                            <strong><?= $content['step5_title'] ?></strong>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col col2">
                            <div class="data_blk">
                                <fieldset data-name="vendor" id="vendor">
                                    <div class="srch_blk blk">
                                        <div class="icon"><img src="<?= get_site_image_src("members", $vendor->mem_image, 'thumb_'); ?>" alt=""></div>
                                        <div class="txt">
                                            <h5><?= $vendor->mem_company_name ?></h5>
                                            <div class="rating">
                                                <div class="rateYo" data-rateyo-rating="<?= get_mem_avg_rating($vendor_id) ?>"></div>
                                                <strong><?= get_mem_avg_rating($vendor_id) ?><em><?= count_mem_ratings($vendor_id) ?> <?= count_mem_ratings($vendor_id) > 1 ? 'ratings' : 'rating' ?></em></strong>
                                            </div>
                                            <small><?= $miles ?> Miles Away</small>
                                            <?php if ($vendor->mem_company_pickdrop == 'yes') : ?>
                                                <div class="delev_svc">
                                                    <div class="inr">
                                                        <strong>This Dry cleaner offers Pickup & Delivery Service</strong>
                                                        <div class="toggle_blk">
                                                            <strong>Use Service</strong>
                                                            <div class="switch">
                                                                <input type="checkbox" name="use_pickdrop" id="usePickAndDropService">
                                                                <em></em>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon"><img src="<?= base_url() ?>assets/images/vector-van.svg" alt=""></div>
                                                </div>
                                            <?php else : ?>
                                                <p>Pickup & Delivery Service Not Available</p>
                                            <?php endif; ?>
                                        </div>
                                        <?php if ($vendor->mem_company_pickdrop == 'yes') : ?>
                                            <div class="serve">
                                                <!-- <div class="symbol"><img src="<?= base_url() ?>assets/images/vector-wait.svg" alt=""></div> -->
                                            </div>
                                        <?php else : ?>
                                            <div class="serve">
                                                <!-- <div class="symbol"><img src="<?= base_url() ?>assets/images/vector-wait-cross.svg" alt=""></div> -->
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php //if (isset($selections['pick-or-facility']) && $selections['pick-or-facility'] == 'pickdrop') : 
                                    ?>
                                    <div class="top_head pickupAndDeliveryInfo hidden">
                                        <h4 class="heading"><?= $content['step2_heading'] ?></h4>
                                        <div class="btn_blk text-center">
                                            <button type="button" class="site_btn md block next_btn 1-step">Continue</button>
                                        </div>
                                    </div>
                                    <div class="blk pickupAndDeliveryInfo hidden">
                                        <div class="form_row row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <h6>Collection Date</h6>
                                                <div class="form_blk">
                                                    <select name="collection_date" id="collection_date" class="text_box selectpicker collection-date-end" data-container="body" onchange="fetchTimeByInterval(this.value, <?= $vendor_id ?>, 'collection_time'); appendSelectTextToId(this, 'collection-date-preview'); ; enableNextOptions(this)">
                                                        <option value="">Select</option>
                                                        <?= open_days_options($open_days_cd) ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <h6>Collection Time</h6>
                                                <div class="form_blk">
                                                    <select name="collection_time" id="collection_time" class="text_box selectpicker collection-time-end" data-container="body" onchange="appendSelectTextToId(this, 'collection-time-preview')" disabled>
                                                        <option value="">Select</option>
                                                    </select>
                                                    <span id="collection_time_status" class="fetch_status"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h6>Collects From</h6>
                                                <div class="form_blk">
                                                    <select name="collection_from" id="collection_from" class="text_box" onchange="appendValueSelect(this, 'collection-type')" disabled>
                                                        <option value="">Select</option>
                                                        <?php foreach (collection_types() as $val) : ?>
                                                            <option value="<?= $val ?>"><?= $val ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form_row row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <h6>Delivery Date</h6>
                                                <div class="form_blk">
                                                    <select name="delivery_date" id="delivery_date" class="text_box selectpicker delivery-date-end" data-container="body" onchange="fetchTimeByInterval(this.value, <?= $vendor_id ?>, 'delivery_time'); appendSelectTextToId(this, 'delivery-date-preview')" disabled>
                                                        <option value="">Select</option>
                                                        <?= open_days_options($open_days_cd) ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <h6>Delivery Time</h6>
                                                <div class="form_blk">
                                                    <select name="delivery_time" id="delivery_time" class="text_box selectpicker delivery-time-end" data-container="body" onchange="appendSelectTextToId(this, 'delivery-time-preview')" disabled>
                                                        <option value="">Select</option>
                                                        <!-- <?= $coming_day_times_cd ?> -->
                                                    </select>
                                                    <span id="delivery_time_status" class="fetch_status"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h6>Handover Type</h6>
                                                <div class="form_blk">
                                                    <select name="delivery_from" id="delivery_from" class="text_box" onchange="appendValueSelect(this, 'drop-type')" disabled>
                                                        <option value="">Select</option>
                                                        <?php foreach (drop_types() as $val) : ?>
                                                            <option value="<?= $val ?>"><?= $val ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h6>Collection or delivery instructions <small>(optional)</small></h6>
                                        <div class="form_blk">
                                            <input type="text" name="collection_or_delivery_notes" id="collection_or_delivery_notes" class="text_box" placeholder="Any special instructions">
                                        </div>
                                    </div>
                                    <?php //endif; 
                                    ?>
                                    <div class="top_head businessAddressInfo">
                                        <h4 class="heading">Address & Info</h4>
                                        <div class="btn_blk text-center">
                                            <button type="button" class="site_btn md block next_btn 1-step">Continue</button>
                                        </div>
                                    </div>
                                    <div class="blk businessAddressInfo">
                                        <div class="form_blk" id="businessAdress">
                                            <address><?= $vendor->mem_business_address ?> <br> <?= $vendor->mem_business_city ?> <br> <?= $vendor->mem_business_zip ?></address>
                                        </div>
                                        <h6 id="drop-delivery">Drop off</h6>
                                        <input type="hidden" name="dropoffAddress" value="<?= $vendor->mem_business_address . '@' . $vendor->mem_business_city . '@' . $vendor->mem_business_zip ?>">
                                        <div class="form_row row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form_blk">
                                                    <select name="dropoff_date" id="delivery_date" class="text_box selectpicker drop-off-date-end" data-container="body" onchange="fetchTime(this.value, <?= $vendor_id ?>, 'dropOff-time'); appendSelectTextToId(this, 'dropoff-date-preview')">
                                                        <option value="">Select</option>
                                                        <?= open_days_options($open_days) ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form_blk">
                                                    <select name="dropoff_time" id="dropOff-time" class="text_box selectpicker drop-off-time-end" data-container="body" onchange="appendSelectTextToId(this, 'dropoff-time-preview')" disabled>
                                                        <option value="">Select</option>
                                                        <!-- <?= $coming_day_times ?> -->
                                                    </select>
                                                    <span id="dropOff-time_status" class="fetch_status"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset data-name="service" id="service">
                                    <div class="top_head">
                                        <h4 class="heading"><?= $content['step3_heading'] ?></h4>
                                        <div class="btn_blk text-center">
                                            <button type="button" class="site_btn md light prev_btn"><img src="<?= base_url('assets/images/arrow-left-sm.svg') ?>" alt=""> Previous step</button>
                                            <button type="button" class="site_btn md next_btn 2-step">Continue</button>
                                        </div>
                                    </div>
                                    <div class="blk" id="WashDry">
                                        <h4><?= $wash_and_dry->name ?></h4>
                                        <p><?= $wash_and_dry->details ?></p>
                                        <hr>
                                        <div class="serve_blk">
                                            <div class="icon"><img src="<?= get_site_image_src("services", $wash_and_dry->image, ''); ?>" alt=""></div>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th class="nowrap">Price</th>
                                                        <th width="40" class="text-center">Action</th>
                                                    </tr>
                                                    <?php
                                                    $check = 0;
                                                    foreach (get_sub_services_active($wash_and_dry->id) as $key => $sub_service) :
                                                        $row = sub_service_price($sub_service->id, $vendor_id);
                                                        if ($row->price != '' && $row->price != '0' && $row->price != '0.00') :
                                                            $check++;
                                                    ?>
                                                            <tr id="<?= $sub_service->id ?>">
                                                                <td><?= $sub_service->name ?></td>
                                                                <td class="nowrap">£<?= $row->price ?></td>
                                                                <td class="text-center"><button type="button" id="<?= $sub_service->id ?>" class="act_btn <?= service_selected_status($services, $sub_service->id) ?> left" data-service="<?= get_parent_service($sub_service->service_id) ?>" data-subservice-id="<?= $sub_service->id ?>" data-price="<?= $row->price ?>" data-name="<?= $sub_service->name ?>"></button></td>
                                                            </tr>
                                                        <?php
                                                        endif;
                                                    endforeach;
                                                    if ($check === 0) :
                                                        ?>
                                                        <tr>
                                                            <td colspan="3">
                                                                <p>Vendor service not available.</p>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="blk" id="DryCleaning">
                                        <h4><?= $dry_cleaning->name ?></h4>
                                        <p><?= $dry_cleaning->details ?></p>
                                        <hr>
                                        <div class="serve_blk">
                                            <div class="icon"><img src="<?= get_site_image_src("services", $dry_cleaning->image, ''); ?>" alt=""></div>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th class="nowrap">Price</th>
                                                        <th width="40" class="text-center">Action</th>
                                                    </tr>
                                                    <?php
                                                    $check = 0;
                                                    foreach (get_sub_services($dry_cleaning->id) as $key => $sub_service) :
                                                        $row = sub_service_price($sub_service->id, $vendor_id);
                                                        if ($row->price != '' && $row->price != '0' && $row->price != '0.00') :
                                                            $check++;
                                                    ?>
                                                            <tr id="<?= $sub_service->id ?>">
                                                                <td><?= $sub_service->name ?></td>
                                                                <td class="nowrap">£<?= $row->price ?></td>
                                                                <td class="text-center"><button type="button" id="<?= $sub_service->id ?>" class="act_btn <?= service_selected_status($services, $sub_service->id) ?> left" data-service="<?= get_parent_service($sub_service->service_id) ?>" data-subservice-id="<?= $sub_service->id ?>" data-price="<?= $row->price ?>" data-name="<?= $sub_service->name ?>"></button></td>
                                                            </tr>
                                                        <?php
                                                        endif;
                                                    endforeach;
                                                    if ($check === 0) :
                                                        ?>
                                                        <tr>
                                                            <td colspan="3">
                                                                <p>Vendor service not available.</p>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="blk" id="WashIron">
                                        <h4><?= $wash_and_iron->name ?></h4>
                                        <p><?= $wash_and_iron->details ?></p>
                                        <hr>
                                        <div class="serve_blk">
                                            <div class="icon"><img src="<?= get_site_image_src("services", $wash_and_iron->image, ''); ?>" alt=""></div>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th class="nowrap">Price</th>
                                                        <th width="40" class="text-center">Action</th>
                                                    </tr>
                                                    <?php
                                                    $check = 0;
                                                    foreach (get_sub_services($wash_and_iron->id) as $key => $sub_service) :
                                                        $row = sub_service_price($sub_service->id, $vendor_id);
                                                        if ($row->price != '' && $row->price != '0' && $row->price != '0.00') :
                                                            $check++;
                                                    ?>
                                                            <tr id="<?= $sub_service->id ?>">
                                                                <td><?= $sub_service->name ?></td>
                                                                <td class="nowrap">£<?= $row->price ?></td>
                                                                <td class="text-center"><button type="button" id="<?= $sub_service->id ?>" class="act_btn <?= service_selected_status($services, $sub_service->id) ?> left" data-service="<?= get_parent_service($sub_service->service_id) ?>" data-subservice-id="<?= $sub_service->id ?>" data-price="<?= $row->price ?>" data-name="<?= $sub_service->name ?>"></button></td>
                                                            </tr>
                                                        <?php
                                                        endif;
                                                    endforeach;
                                                    if ($check === 0) :
                                                        ?>
                                                        <tr>
                                                            <td colspan="3">
                                                                <p>Vendor service not available.</p>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="blk" id="IronOnly">
                                        <h4><?= $iron_only->name ?></h4>
                                        <p><?= $iron_only->details ?></p>
                                        <hr>
                                        <div class="serve_blk">
                                            <div class="icon"><img src="<?= get_site_image_src("services", $iron_only->image, ''); ?>" alt=""></div>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th class="nowrap">Price</th>
                                                        <th width="40" class="text-center">Action</th>
                                                    </tr>
                                                    <?php
                                                    $check = 0;
                                                    foreach (get_sub_services($iron_only->id) as $key => $sub_service) :
                                                        $row = sub_service_price($sub_service->id, $vendor_id);
                                                        if ($row->price != '' && $row->price != '0' && $row->price != '0.00') :
                                                            $check++;
                                                    ?>
                                                            <tr id="<?= $sub_service->id ?>">
                                                                <td><?= $sub_service->name ?></td>
                                                                <td class="nowrap">£<?= $row->price ?></td>
                                                                <td class="text-center"><button type="button" id="<?= $sub_service->id ?>" class="act_btn <?= service_selected_status($services, $sub_service->id) ?> left" data-service="<?= get_parent_service($sub_service->service_id) ?>" data-subservice-id="<?= $sub_service->id ?>" data-price="<?= $row->price ?>" data-name="<?= $sub_service->name ?>"></button></td>
                                                            </tr>
                                                        <?php
                                                        endif;
                                                    endforeach;
                                                    if ($check === 0) :
                                                        ?>
                                                        <tr>
                                                            <td colspan="3">
                                                                <p>Vendor service not available.</p>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="blk" id="BulkyItems">
                                        <h4><?= $buly_items->name ?></h4>
                                        <p><?= $buly_items->details ?></p>
                                        <hr>
                                        <div class="serve_blk">
                                            <div class="icon"><img src="<?= get_site_image_src("services", $buly_items->image, ''); ?>" alt=""></div>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th class="nowrap">Price</th>
                                                        <th width="40" class="text-center">Action</th>
                                                    </tr>
                                                    <?php
                                                    $check = 0;
                                                    foreach (get_sub_services($buly_items->id) as $key => $sub_service) :
                                                        $row = sub_service_price($sub_service->id, $vendor_id);
                                                        if ($row->price != '' && $row->price != '0' && $row->price != '0.00') :
                                                            $check++;
                                                    ?>
                                                            <tr id="<?= $sub_service->id ?>">
                                                                <td><?= $sub_service->name ?></td>
                                                                <td class="nowrap">£<?= $row->price ?></td>
                                                                <td class="text-center"><button type="button" id="<?= $sub_service->id ?>" class="act_btn <?= service_selected_status($services, $sub_service->id) ?> left" data-service="<?= get_parent_service($sub_service->service_id) ?>" data-subservice-id="<?= $sub_service->id ?>" data-price="<?= $row->price ?>" data-name="<?= $sub_service->name ?>"></button></td>
                                                            </tr>
                                                        <?php
                                                        endif;
                                                    endforeach;
                                                    if ($check === 0) :
                                                        ?>
                                                        <tr>
                                                            <td colspan="3">
                                                                <p>Vendor service not available.</p>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="blk" id="Deals">
                                        <h4><?= $deals->name ?></h4>
                                        <p><?= $deals->details ?></p>
                                        <hr>
                                        <div class="serve_blk">
                                            <div class="icon"><img src="<?= get_site_image_src("services", $deals->image, ''); ?>" alt=""></div>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th class="nowrap">Price</th>
                                                        <th width="40" class="text-center">Action</th>
                                                    </tr>
                                                    <?php
                                                    $check = 0;
                                                    foreach (get_sub_services($deals->id) as $key => $sub_service) :
                                                        $row = sub_service_price($sub_service->id, $vendor_id);
                                                        if ($row->price != '' && $row->price != '0' && $row->price != '0.00') :
                                                            $check++;
                                                    ?>
                                                            <tr id="<?= $sub_service->id ?>">
                                                                <td>
                                                                    <?= $sub_service->name ?>
                                                                    <p>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</p>
                                                                </td>
                                                                <td class="nowrap">£<?= $row->price ?></td>
                                                                <td class="text-center"><button type="button" id="<?= $sub_service->id ?>" class="act_btn <?= service_selected_status($services, $sub_service->id) ?> left" data-service="<?= get_parent_service($sub_service->service_id) ?>" data-subservice-id="<?= $sub_service->id ?>" data-price="<?= $row->price ?>" data-name="<?= $sub_service->name ?>"></button></td>
                                                            </tr>
                                                        <?php
                                                        endif;
                                                    endforeach;
                                                    if ($check === 0) :
                                                        ?>
                                                        <tr>
                                                            <td colspan="3">
                                                                <p>Vendor service not available.</p>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="btn_blk form_btn text-center">
                                        <button type="button" class="site_btn light prev_btn"><img src="<?= base_url('assets/images/arrow-left-sm.svg') ?>" alt=""> Previous step</button>
                                        <button type="button" class="site_btn next_btn 2-step">Continue</button>
                                    </div>
                                </fieldset>
                                <fieldset data-name="address" id="address-field-set">
                                    <?php if (empty($this->session->mem_id)) : ?>
                                        <div id="account-info">
                                            <div class="top_head">
                                                <h4 class="heading">Account Info</h4>
                                                <div class="btn_blk text-center">
                                                    <button type="button" class="site_btn md light prev_btn"><img src="<?= base_url('assets/images/arrow-left-sm.svg') ?>" alt=""> Previous step</button>
                                                    <button type="button" class="site_btn md next_btn 3-step">Continue</button>
                                                </div>
                                            </div>
                                            <div class="blk">
                                                <span id="logged-in-error" style="color: red"></span>
                                                <p>Already have an account? <a href="javascript:void(0)" class="pop_btn" data-popup="signin">Sign in here</a></p>
                                                <div class="form_row row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <h6>First Name <sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="mem_fname" id="mem_fname" class="text_box" onkeyup="appendName()" placeholder="eg: John">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <h6>Last Name <sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="mem_lname" id="mem_lname" class="text_box" onkeyup="appendName()" placeholder="eg: Doe">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <h6>Email Address <sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="email" name="mem_email" id="mem_email" class="text_box" onkeyup="appendValue(this.value, 'customer-email')" placeholder="eg: john.doe@address.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <h6>Phone Number <sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="mem_phone" id="mem_phone" class="text_box" onkeyup="appendValue(this.value, 'customer-phone')" placeholder="eg: +44 123456789">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <h6>Password <sup>*</sup></h6>
                                                        <div class="form_blk pass_blk">
                                                            <input type="password" name="password" id="password" class="text_box pr-password" placeholder="eg: PassLogin%7">
                                                            <i class="icon-eye" id="eye"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <h6>Confirm Password <sup>*</sup></h6>
                                                        <div class="form_blk pass_blk">
                                                            <input type="password" name="cpassword" id="cpassword" class="text_box" placeholder="eg: PassLogin%7">
                                                            <i class="icon-eye" id="eye"></i>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form_blk">
                                                            <div class="lbl_btn">
                                                                <input type="checkbox" name="notified" id="notified">
                                                                <label for="notified">Keep me up to date on news and exclusive offers</label>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="br"></div>
                                    <?php endif; ?>
                                    <div class="top_head">
                                        <h4 class="heading <?= empty($this->session->mem_id) ? 'hidden' : '' ?>" id="address-section-heading-a"><?= $content['step4_heading'] ?></h4>
                                        <div class="btn_blk text-center" id="continue-buttons">
                                            <?php if ($this->session->mem_id) : ?>
                                                <button type="button" class="site_btn md light prev_btn"><img src="<?= base_url('assets/images/arrow-left-sm.svg') ?>" alt=""> Previous step</button>
                                                <button type="button" class="site_btn md next_btn 3-step">Continue</button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="blk <?= empty($this->session->mem_id) ? 'hidden' : '' ?>" id="address-section-a">
                                        <!-- <h6>Enter Postcode</h6>
                                        <div class="form_blk">
                                            <input type="text" class="text_box" id="zipcode" value="<?= $zipcode ?>" readonly placeholder="eg: BL0 0WY">
                                        </div>
                                        <hr> -->
                                        <div class="form_row row">
                                            <?php if (!empty($this->session->mem_id)) : ?>
                                                <div id="select-address" class="col-xs-12">
                                                    <h4 class="subheading">Select your address</h4>
                                                    <div class="form_row row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <h6>Address <sup>*</sup></h6>
                                                            <div class="flex_blk">
                                                                <div class="form_blk">
                                                                    <select name="address" id="address" class="text_box" onchange="setAddress()">
                                                                        <option value="">Select</option>
                                                                        <?php if (!empty($mem_data->mem_city) && !empty($mem_data->mem_address) && !empty($mem_data->mem_zip)) : ?>
                                                                            <option value="<?= $mem_data->mem_address . ' @@ ' . $mem_data->mem_city . ' @@ ' . $mem_data->mem_zip ?>" data-type="home" data-lat="<?= $mem_data->mem_map_lat ?>" data-long="<?= $mem_data->mem_map_lng ?>" data-full-address="<?= 'Home: <br/> ' . $mem_data->mem_address . ' <br/> ' . $mem_data->mem_city . ' <br/> ' . $mem_data->mem_zip ?>">
                                                                                <?= 'Home: ' . $mem_data->mem_address . ' - ' . $mem_data->mem_city . ' - ' . $mem_data->mem_zip ?>
                                                                            </option>
                                                                        <?php endif; ?>
                                                                        <?php if (!empty($mem_data->mem_business_city) && !empty($mem_data->mem_business_address) && !empty($mem_data->mem_business_zip)) : ?>
                                                                            <option value="<?= $mem_data->mem_business_address . ' @@ ' . $mem_data->mem_business_city . ' @@ ' . $mem_data->mem_business_zip ?>" data-type="office" data-lat="<?= $mem_data->mem_business_map_lat ?>" data-long="<?= $mem_data->mem_business_map_lng ?>" data-full-address="<?= 'Office: <br/> ' . $mem_data->mem_business_address . ' <br/> ' . $mem_data->mem_business_city . ' <br/> ' . $mem_data->mem_business_zip ?>">
                                                                                <?= 'Office: ' . $mem_data->mem_business_address . ' - ' . $mem_data->mem_business_city . ' - ' . $mem_data->mem_business_zip ?>
                                                                            </option>
                                                                        <?php endif; ?>
                                                                        <?php if (!empty($mem_data->mem_hotel_city) && !empty($mem_data->mem_hotel_address) && !empty($mem_data->mem_hotel_zip)) : ?>
                                                                            <option value="<?= $mem_data->mem_hotel_address . ' @@ ' . $mem_data->mem_hotel_city . ' @@ ' . $mem_data->mem_hotel_zip ?>" data-type="hotel" data-lat="<?= $mem_data->mem_hotel_map_lat ?>" data-long="<?= $mem_data->mem_hotel_map_lng ?>" data-full-address="<?= 'Hotel: <br/> ' . $mem_data->mem_hotel_address . ' <br/> ' . $mem_data->mem_hotel_city . ' <br/> ' . $mem_data->mem_hotel_zip ?>">
                                                                                <?= 'Hotel: ' . $mem_data->mem_hotel_address . ' - ' . $mem_data->mem_hotel_city . ' - ' . $mem_data->mem_hotel_zip ?>
                                                                            </option>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                </div>
                                                                <?php if (empty($mem_data->mem_zip) || empty($mem_data->mem_business_zip) || empty($mem_data->mem_hotel_zip)) : ?>
                                                                    <div class="btn_blk">
                                                                        <button type="button" class="site_btn light" id="addAddressRuntime">Add Address</button>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php else : ?>
                                                <div id="enter-address" class="col-xs-12">
                                                    <h4 class="subheading">Enter your address</h4>
                                                    <div class="form_row row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            <h6>Country <sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <select name="address_country" id="address_country" class="text_box" onchange="fetchStates(this.value, 'address_state')">
                                                                    <option value="">Select</option>
                                                                    <?php foreach (countries() as $country) : ?>
                                                                        <?php if (in_array($country->name, ['United Kingdom'])) { ?>
                                                                            <option value="<?= $country->id ?>"><?= $country->name ?></option>
                                                                    <?php }
                                                                    endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            <h6>State <sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <select name="address_state" id="address_state" class="text_box">
                                                                    <option value="">Select</option>
                                                                    <?php foreach (states_by_country($mem_data->mem_country) as $state) : ?>
                                                                        <option value="<?= $state->id ?>"><?= $state->name ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            <h6>City <sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <input type="text" name="address_city" id="address_city" value="" class="text_box" onkeyup="appendCollectionDeliveryAddress()" placeholder="eg: California">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            <h6>Zip Code <sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <input type="hidden" name="mem_map_lat" id="mem_map_lat" value="">
                                                                <input type="hidden" name="mem_map_lng" id="mem_map_lng" value="">
                                                                <input type="text" id="address_zip" name="address_zip" data-type="hotel" data-way="1" value="" class="text_box" onkeyup="getLocationAndInitMap(this.value); appendCollectionDeliveryAddress()" placeholder="eg: BL0 0WY">
                                                                <span style="color:red" id="invalid_zip"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                            <h6>Address <sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <input type="text" id="address_field" name="address_field" value="" class="text_box" onkeyup="appendCollectionDeliveryAddress()" placeholder="eg: 123 Main Street, California">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <div id="select-address-after-login" class="col-xs-12 hidden">

                                            </div>
                                            <div id="enter-address-runtime" class="col-xs-12 hidden">
                                                <div class="blk">
                                                    <h4 class="subheading">Enter your address</h4>
                                                    <div class="form_row row">
                                                        <div class="col-xs-6">
                                                            <h6>Country <sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <select name="address_country_runtime" id="address_country_runtime" class="text_box" onchange="fetchStates(this.value, 'address_state_runtime')">
                                                                    <option value="">Select</option>
                                                                    <?php foreach (countries() as $country) : ?>
                                                                        <?php if (in_array($country->name, ['United Kingdom'])) { ?>
                                                                            <option value="<?= $country->id ?>"><?= $country->name ?></option>
                                                                    <?php }
                                                                    endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <h6>State <sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <select name="address_state_runtime" id="address_state_runtime" class="text_box">
                                                                    <option value="">Select</option>
                                                                    <?php foreach (states_by_country($mem_data->mem_country) as $state) : ?>
                                                                        <option value="<?= $state->id ?>"><?= $state->name ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <h6>City <sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <input type="text" name="address_city_runtime" id="address_city_runtime" value="" class="text_box" placeholder="eg: California">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <h6>Zip Code <sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <input type="hidden" name="mem_map_lat_runtime" id="mem_map_lat_runtime" value="">
                                                                <input type="hidden" name="mem_map_lng_runtime" id="mem_map_lng_runtime" value="">
                                                                <input type="text" id="address_zip_runtime" name="address_zip_runtime" data-type="hotel" data-way="1" value="" class="text_box" placeholder="eg: BL0 0WY">
                                                                <span style="color:red" id="invalid_zip_runtime"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <h6>Address Type <sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <select name="address_type_runtime" id="address_type_runtime" class="text_box">
                                                                    <option value="">Select</option>
                                                                    <?php if (empty($mem_data->mem_zip)) : ?>
                                                                        <option value="home">Home</option>
                                                                    <?php endif; ?>
                                                                    <?php if (empty($mem_data->mem_business_zip)) : ?>
                                                                        <option value="office">Office</option>
                                                                    <?php endif; ?>
                                                                    <?php if (empty($mem_data->mem_hotel_zip)) : ?>
                                                                        <option value="hotel">Hotel</option>
                                                                    <?php endif; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <h6>Address <sup>*</sup></h6>
                                                            <div class="form_blk">
                                                                <input type="text" id="address_field_runtime" name="address_field_runtime" value="" class="text_box" placeholder="eg: 123 Main Street, California">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn_blk form_btn text-center">
                                                        <button type="button" class="site_btn md long" id="saveRuntimeAddress"><i class="spinner hidden"></i>Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <h6>Specify any extra address</h6>
                                                <div class="form_blk">
                                                    <input type="text" name="extra_address_detail" id="extra_address_detail" class="text_box" placeholder="eg: Apartment name, number, floor">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="subheading <?= empty($this->session->mem_id) ? 'hidden' : '' ?>" id="address-type-heading">Address Type <sup>*</sup></h4>
                                    <span id="address_type_error" style="color:red"></span>
                                    <ul class="select_lst flex <?= empty($this->session->mem_id) ? 'hidden' : '' ?>" id="address-types-checkboxes">
                                        <li>
                                            <label class="inner">
                                                <input type="radio" name="address_type" id="address_type_home" value="home" <?= empty($this->session->mem_id) ? 'checked' : '' ?>>
                                                <strong>Home</strong>
                                                <span class="icon"><img src="<?= base_url() ?>assets/images/vector-home.svg" alt=""></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="inner">
                                                <input type="radio" name="address_type" id="address_type_office" value="office">
                                                <strong>Office</strong>
                                                <span class="icon"><img src="<?= base_url() ?>assets/images/vector-briefcase.svg" alt=""></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="inner">
                                                <input type="radio" name="address_type" id="address_type_hotel" value="hotel">
                                                <strong>Hotel</strong>
                                                <div class="icon"><img src="<?= base_url() ?>assets/images/vector-hotel.svg" alt=""></div>
                                            </label>
                                        </li>
                                    </ul>
                                    <div id="map-area" class="hidden">
                                        <div id="map-canvas"></div>
                                    </div>
                                </fieldset>
                                <fieldset data-name="instructions" id="instructions">
                                    <div class="blk">
                                        <h4 class="subheading">Vendor Instruction</h4>
                                        <div class="flex_row instruction_row">
                                            <div class="col">
                                                <div class="instruction_blk">
                                                    <div class="icon"><img src="<?= base_url('assets/images/fi-bag.svg') ?>" alt=""></div>
                                                    <div class="txt">
                                                        <h5>Allow one service per bag</h5>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex sit explicabo amet facilis, repellat quis anim.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="instruction_blk">
                                                    <div class="icon"><img src="<?= base_url('assets/images/fi-tag.svg') ?>" alt=""></div>
                                                    <div class="txt">
                                                        <h5>Tag or label the bags</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga inventore illo dolorum odio quia adipisci doloribus, amet quas?</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="instruction_blk">
                                                    <div class="icon"><img src="<?= base_url('assets/images/fi-check.svg') ?>" alt=""></div>
                                                    <div class="txt">
                                                        <h5>Help service providers avoid mistakes</h5>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, velit iusto!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blk">
                                        <h4 class="subheading">Instructions to Vendor</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem provident magni eos ab, iste doloribus nobis dolor earum expedita enim neque, aliquam ducimus esse suscipit velit fuga a, debitis ea.</p>
                                        <div class="form_blk">
                                            <textarea name="note_for_vendor" id="note-for-vendor" onkeyup="appendValue(this.value, 'note-for-vendor-preview')" class="text_box" placeholder="Please add any special washing instruction or request here..."></textarea>
                                        </div>
                                    </div>
                                    <div class="btn_blk form_btn text-center">
                                        <button type="button" class="site_btn light prev_btn"><img src="<?= base_url('assets/images/arrow-left-sm.svg') ?>" alt=""> Previous step</button>
                                        <button type="button" class="site_btn next_btn 4-step">Continue</button>
                                    </div>
                                </fieldset>
                                <fieldset data-name="payment" id="payment">
                                    <div class="blk">
                                        <h4 class="subheading"><?= $content['step5_heading'] ?></h4>
                                        <ul class="list flex">
                                            <li>
                                                <strong>Vendor</strong>
                                                <span id="customer-name-bckup"><?= $vendor->mem_company_name ?></span>
                                            </li>
                                            <li>
                                                <strong>Phone Number</strong>
                                                <span id="customer-phone-bckup"><?= empty($vendor->mem_company_phone) ? 'n/a' : $vendor->mem_company_phone ?></span>
                                            </li>
                                            <li>
                                                <strong>Email Address</strong>
                                                <span id="customer-email-bckup"><?= $vendor->mem_email ?></span>
                                            </li>
                                        </ul>
                                        <hr>
                                        <ul class="list flex hidden" id="pickup-delivery-preview">
                                            <li>
                                                <strong>Collection Address</strong>
                                                <span id="collection-address"></span>
                                            </li>
                                            <li>
                                                <strong>Delivery Address</strong>
                                                <span id="delivery-address"></span>
                                            </li>
                                            <li>
                                                <strong>Collection Date & Time</strong>
                                                <div>
                                                    <span id="collection-date-preview"><?= $selected_day ?></span> & <span id="collection-time-preview"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <strong>Delivery Date & Time</strong>
                                                <div>
                                                    <span id="delivery-date-preview"><?= $selected_day ?></span> & <span id="delivery-time-preview"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <strong>Collection Type</strong>
                                                <span id="collection-type"></span>
                                                <input type="hidden" name="collection_type" id="collection-type-value" value="">
                                            </li>
                                            <li>
                                                <strong>Handover Type</strong>
                                                <span id="drop-type"></span>
                                                <input type="hidden" name="drop_type" id="drop-type-value" value="">
                                            </li>
                                        </ul>
                                        <ul class="list flex" id="vendor-address-preview">
                                            <li class="full">
                                                <strong>Vendor Address</strong>
                                                <span><?= $vendor->mem_business_address . '<br>' . $vendor->mem_business_city . '<br>' . $vendor->mem_business_zip ?></span>
                                            </li>
                                            <li>
                                                <strong>Drop-off Date & Time</strong>
                                                <div>
                                                    <span id="dropoff-date-preview"><?= $selected_day ?></span> & <span id="dropoff-time-preview"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <hr>
                                        <ul class="list flex">
                                            <li class="full">
                                                <strong>Instructions note for vendor</strong>
                                                <p id="note-for-vendor-preview">N/A</p>
                                            </li>
                                        </ul>
                                        <hr>
                                        <h4 class="subheading">Order Summary</h4>
                                        <div class="serve_blk">
                                            <table class="sumryTblLst">
                                                <thead>
                                                    <tr>
                                                        <th>Service</th>
                                                        <th class="text-center">Item</th>
                                                        <th class="text-center">Qty</th>
                                                        <th class="price text-center">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="item_preview_area">
                                                    <?php
                                                    foreach ($services as $index => $id) :
                                                        $row = get_sub_service($id, $vendor_id);
                                                    ?>
                                                        <tr id="preview-item-<?= $row->id ?>">
                                                            <td><?= $row->service_name ?></td>
                                                            <td class="text-center"><?= $row->name ?></td>
                                                            <td class="text-center" id="item-qty-<?= $row->id ?>"><?= $qty[$index] ?></td>
                                                            <td class="price text-center" id="item-price-<?= $row->id ?>">£<?= price_format($row->price * $qty[$index]) ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <tr>
                                                        <td colspan="4">
                                                            <hr>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $pickup = price_format($vendor->mem_charges_per_miles * 2);
                                                    ?>
                                                    <tr>
                                                        <td colspan="4">
                                                            <?php if (!empty($this->session->mem_id) && $buyer_credits == 9) : ?>
                                                                <div class="buyer_credit_discount alert" id="buyer-credit-discount-preview">
                                                                    <p>Congratulations!</p>
                                                                    <p><span class="dark_color">Since this is your 10th order you have now</span> <?= $site_settings->site_buyer_credit_percentage ?>% off this order</p>
                                                                </div>
                                                            <?php else : ?>
                                                                <div class="buyer_credit_discount alert" id="buyer-credit-discount-preview" style="display:none"></div>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                    <tr class="hidden" id="pickup-and-delivery-preview">
                                                        <th colspan="3" class="text-right">Pickup & Delivery Charges:&nbsp;&nbsp;</th>
                                                        <th class="price text-center">£<?= price_format($vendor->mem_charges_per_miles * 2) ?></th>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <th colspan="3" class="color text-right">Items Total:&nbsp;&nbsp;</th>
                                                        <th class="price text-center" id="items-total-preview" data-total="<?= price_format($estimated_total) ?>">£<?= price_format($estimated_total) ?></th>
                                                    </tr>
                                                    <tr class="hidden" id="freepickup-alert-preview-section">
                                                        <th colspan="4">
                                                            <div class="freePickupAndDelivery alert">Free Pickup & Delivery Service</div>
                                                        </th>
                                                    </tr>
                                                    <tr class="hidden" id="minimum-order-fee-preview-section">
                                                        <th colspan="3" class="text-right">Minimum Order Fee:&nbsp;&nbsp;</th>
                                                        <th class="price text-center" id="minimum-order-fee-preview"></th>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th colspan="3" class="color text-right">Estimated Total:&nbsp;&nbsp;</th>
                                                        <th class="price color text-center" id="estimated-total-preview">£<?= price_format($estimated_total) ?></th>
                                                    </tr>
                                                    <?php if (!empty($this->session->mem_id) && $buyer_credits == 9) : ?>
                                                        <tr>
                                                            <th colspan="3" class="color text-right">Estimated Total After Discount:&nbsp;&nbsp;</th>
                                                            <th class="price color text-center" id="estimated-total-after-discount-preview">£<?= price_format($esitimated_total_after_discount) ?></th>
                                                        </tr>
                                                    <?php else : ?>
                                                        <tr id="after-discount-section-preview" style="display: none">
                                                            <th colspan="3" class="color text-right">Estimated Total After Discount:&nbsp;&nbsp;</th>
                                                            <th class="price color text-center" id="estimated-total-after-discount-preview"></th>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="blk">
                                        <h4>Payment</h4>
                                        <p>All transactions are secure and encrypted.</p>
                                        <div data-payment="wallet">
                                            <div class="lbl_btn">
                                                <input type="radio" name="payment_type" id="credit" class="tglBlk" value="credit-card" checked="">
                                                <label for="credit">Credit card</label>
                                            </div>
                                            <div class="inside_blk active">
                                                <div class="form_row row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <h6>Card Number <sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="cardnumber" id="cardnumber" class="text_box" placeholder="eg: 1234567890">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <h6>Card Holder <sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="card_holder_name" id="card_holder_name" class="text_box" placeholder="eg: John Wick">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <h6>Month <sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <select name="exp_month" id="exp_month" class="text_box">
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
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <h6>Year <sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <select name="exp_year" id="exp_year" class="text_box">
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
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <h6>CVC? <sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <input type="text" name="cvc" id="cvc" class="text_box" placeholder="eg: 1234">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lbl_btn">
                                                <input type="radio" name="payment_type" id="paypal" class="tglBlk" value="paypal">
                                                <label for="paypal">Paypal Address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn_blk form_btn text-center">
                                        <button type="button" class="site_btn light prev_btn"><img src="<?= base_url('assets/images/arrow-left-sm.svg') ?>" alt=""> Previous step</button>
                                        <button type="submit" class="site_btn"><i class="spinner hidden"></i>Place Order</button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col col3">
                            <div class="estimate_blk blk" id="basket-summary-div">
                                <div class="scrollbar">
                                    <h5>Searched Zipcode</h5>
                                    <div class="form_blk">
                                        <input type="text" class="text_box" id="zipcode" value="<?= $zipcode ?>" readonly placeholder="eg: BL0 0WY">
                                    </div>
                                    <div class="top_head">
                                        <h6 class="heading">Basket Summary</h6>
                                        <div class="btn_blk hidden">
                                            <button type="reset" class="site_btn text">Reset</button>
                                        </div>
                                        <button type="button" class="cross_btn"></button>
                                    </div>
                                    <div class="servicesMessage alert alert-danger alert-sm text-white" style="display:none"></div>
                                    <div class="serve_blk">
                                        <table>
                                            <tbody id="selected_services">
                                                <?php
                                                foreach ($services as $index => $id) :
                                                    $row = get_sub_service($id, $vendor_id);
                                                ?>
                                                    <tr data-id="<?= $row->id ?>">
                                                        <td>
                                                            <small><?= $row->name ?></small>
                                                            <button type="button" class="act_btn del_btn right" data-subservice-id="<?= $row->id ?>"></button>
                                                        </td>
                                                        <input type="hidden" name="selected_service[]" value="<?= $row->id ?>" data-price="<?= $row->price ?>">
                                                        <td width="40">
                                                            <div class="qty_btn">
                                                                <a class="qty_minus"></a>
                                                                <input type="text" id="qty-<?= $row->id ?>" name="qty[]" value="<?= $qty[$index] ?>" class="qty" data-price="<?= $row->price ?>" data-id="<?= $row->id ?>" readonly>
                                                                <a class="qty_plus"></a>
                                                            </div>
                                                        </td>
                                                        <td class="price text-right" id="price-<?= $row->id ?>">£<?= price_format($row->price * $qty[$index]) ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                <tr>
                                                    <td colspan="3">
                                                        <?php if (!empty($this->session->mem_id) && $buyer_credits == 9) : ?>
                                                            <div id="buyer-credit-discount" class="buyer_credit_discount alert">You will have <?= $site_settings->site_buyer_credit_percentage ?>% discount on this order.</div>
                                                        <?php else : ?>
                                                            <div id="buyer-credit-discount" class="buyer_credit_discount alert" style="display:none"></div>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <hr>
                                                    </td>
                                                </tr>
                                                <?php if ($buyer_credits !== 9) : ?>
                                                    <tr id="promo-code-section">
                                                        <td colspan="3">
                                                            <h6 class="color text-center">Apply Discount Or Referral Code</h6>
                                                            <input class="text_box center" type="text" id="promo_code" name="promo_code" placeholder="Code eg: CMLWASH10" />
                                                            <span id="promo-code-result"></span>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                                <tr class="hidden minimum_order">
                                                    <td colspan="2">Minimum Order:</td>
                                                    <td class="price text-right">£<?= price_format($vendor->mem_charges_min_order) ?></td>
                                                </tr>
                                                <tr class="hidden pickdrop_charges">
                                                    <td colspan="2">Pickup & Delivery Charges:</td>
                                                    <td class="price text-right">£<?= price_format($vendor->mem_charges_per_miles * 2) ?></td>
                                                </tr>
                                                <tr class="hidden freePickupServiceOver">
                                                    <td colspan="2" class="color">Free Pickup Service Over:</td>
                                                    <td class="price text-right">£<?= price_format($vendor->mem_charges_free_over) ?></td>
                                                </tr>
                                                <tr class="hidden">
                                                    <td colspan="2" class="color">Items Total:</td>
                                                    <th class="price text-right" id="items-total" data-total="<?= price_format($estimated_total) ?>">£<?= price_format($estimated_total) ?></th>
                                                </tr>
                                                <tr class="hidden" id="minimum-order-fee-section">
                                                    <td colspan="2" class="color">Minimum Order Fee:</td>
                                                    <th class="price text-right" id="minimum-order-fee">£<?= price_format_zero_check($vendor->mem_charges_min_order - $estimated_total) ?></th>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <?php if (price_format($estimated_total) > price_format($vendor->mem_charges_free_over)) : ?>
                                                            <div class="freePickupAndDelivery alert">Free Pickup & Delivery Service</div>
                                                        <?php else : ?>
                                                            <div class="freePickupAndDelivery alert" style="display:none"></div>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr id="before-promo-code-discount" class="hidden">
                                                    <th colspan="2" class="color">Before Applied:&nbsp;&nbsp;</th>
                                                    <th class="color text-right" id="before-promo-code-discount-val"></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="color">Estimated Total:&nbsp;&nbsp;</th>
                                                    <th class="color text-right" id="estimated-total" data-total="<?= price_format($estimated_total) ?>">£<?= price_format($estimated_total) ?></th>
                                                </tr>
                                                <?php if (!empty($this->session->mem_id) && $buyer_credits == 9) : ?>
                                                    <tr>
                                                        <th colspan="2" class="color">Estimated Total After Discount:&nbsp;&nbsp;</th>
                                                        <th class="color text-right" id="estimated-total-after-discount" data-total="<?= price_format($esitimated_total_after_discount) ?>">£<?= price_format($esitimated_total_after_discount) ?></th>
                                                    </tr>
                                                <?php else : ?>
                                                    <tr id="after-discount-section" style="display: none">
                                                        <th colspan="2" class="color">Estimated Total After Discount:&nbsp;&nbsp;</th>
                                                        <th class="color text-right" id="estimated-total-after-discount"></th>
                                                    </tr>
                                                <?php endif; ?>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="br"></div>
                                    <p class="small">Please note that final price may vary and it will be calculated after the cleaning process.</p>
                                </div>
                            </div>
                            <div class="help_blk blk hidden">
                                <div class="image" style="background-image: url('<?= base_url('assets/images/call_center.jpg') ?>');"></div>
                                <div class="txt">
                                    <h4>Call us if you face any problem placing an order?</h4>
                                    <p>Tempora nihil temporibus! Eligendi, fuga, delectus odio optio incidunt architecto sit atque ipsa totam cum sunt provident labore.</p>
                                    <div class="btn_blk">
                                        <a href="<?= base_url('contact') ?>" class="site_btn block">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="estimate_btn_blk" class="btn_blk">
                        <button type="button" id="estimate_btn" class="site_btn block">View Basket Summary</button>
                    </div>
                </form>
            </div>
            <div class="popup sm" data-popup="signin">
                <div class="table_dv">
                    <div class="table_cell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="cross_btn"></div>
                                <h3>Sign in</h3>
                                <form action="<?= base_url() . 'index/runTimeSignin' ?>" method="post" id="frmSignin" class="runTimeSignin">
                                    <div class="alertMsg" style="display:none"></div>
                                    <div class="form_row row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h6>Email Address <sup>*</sup></h6>
                                            <div class="form_blk">
                                                <input type="text" name="email" id="email" class="text_box" placeholder="eg: sample@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h6>Password <sup>*</sup></h6>
                                            <div class="form_blk pass_blk">
                                                <input type="password" name="password" id="password" class="text_box" placeholder="eg: PassLogin%7" autocomplete="new-password">
                                                <i class="icon-eye" id="eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn_blk form_btn text-center">
                                        <button type="submit" class="site_btn block"><i class="spinner hidden"></i>Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- booking -->


        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmqmsf3pVEVUoGAmwerePWzjUClvYUtwM&libraries=geometry,places&ext=.js"></script>
        <script src="https://js.stripe.com/v2/"></script>
        <script>
            var promo_code_applied = false;
            var promo_discount_type, promo_discount_val;
            var is_10th_order;
            var discount_percentage = parseInt('<?= $this->data['site_settings']->site_buyer_credit_percentage ?>');
            <?php if (!empty($this->session->mem_id) && $buyer_credits == 9) : ?>
                is_10th_order = 1;
            <?php else : ?>
                is_10th_order = 0;
            <?php endif; ?>
            $(document).ready(function() {
                let collection_time = $('#collection_time').find(':selected').text();
                let delivery_time = $('#delivery_time').find(':selected').text();
                $('#collection-time-preview').text(collection_time);
                $('#delivery-time-preview').text(delivery_time);
                $('#dropoff-time-preview').text(delivery_time);
            });

            $(document).on('click', '#usePickAndDropService', (e) => {
                let pickdrop_charges = $('.pickdrop_charges');
                let pcharges = '<?= $vendor->mem_charges_per_miles * 2 ?>';
                if ($(e.target).is(':checked')) {
                    $('#address-left-side-option').removeClass('hidden');
                    $('.businessAddressInfo').addClass('hidden');
                    $('.pickupAndDeliveryInfo').removeClass('hidden');
                    $('.minimum_order').removeClass('hidden');
                    $('.freePickupServiceOver').removeClass('hidden');
                    pickdrop_charges.removeClass('hidden');
                    $('#drop-delivery').html('Delivery');
                    $('#pickup-delivery-preview').removeClass('hidden');
                    $('#vendor-address-preview').addClass('hidden');
                    $('#address-section-a').removeClass('hidden');
                    $('#address-section-heading-a').removeClass('hidden');
                    $('#address-type-heading').removeClass('hidden');
                    $('#address-types-checkboxes').removeClass('hidden');
                    $('#address-signin-heading').html('Address');
                    calculateEstimatedAmount();
                } else {
                    if (is_mem_logged_in) {
                        $('#address-left-side-option').addClass('hidden');
                    }
                    $('#address-signin-heading').html('Sign In');
                    $('#address-section-a').addClass('hidden');
                    $('#address-section-heading-a').addClass('hidden');
                    $('#address-type-heading').addClass('hidden');
                    $('#address-types-checkboxes').addClass('hidden');
                    $('.businessAddressInfo').removeClass('hidden');
                    $('.pickupAndDeliveryInfo').addClass('hidden');
                    $('.minimum_order').addClass('hidden');
                    $('.freePickupServiceOver').addClass('hidden');
                    pickdrop_charges.addClass('hidden');
                    $('#drop-delivery').html('Drop off');
                    $('#pickup-delivery-preview').addClass('hidden');
                    $('#vendor-address-preview').removeClass('hidden');
                    calculateEstimatedAmount();
                }
            });

            $(document).ready(function() {
                $('a').click(function() {
                    let url = $(this).attr('href');
                    let newTab = $(this).attr('target');
                    let shouldAllow = ['javascript:void(0)', undefined, ''];
                    if (!shouldAllow.includes(url) && newTab === undefined) {
                        let answer = confirm("If you leave this page, you will have to repeat all the process again from start. Click Ok to leave!");
                        if (answer) {
                            document.location.href = url;
                        } else {
                            return false;
                        }
                    }
                });
            });

            var pickupDeliveryCharges = '<?= price_format($vendor->mem_charges_per_miles * 2) ?>';
            $(window).on("load", function() {
                $('.svc_lst > li:first').addClass("done");
                $('#booking form fieldset:first').addClass("active");

                $(document).on("click", ".svc_lst > li.done", function() {
                    var list_name = $(this).attr("data-name");
                    $("#booking form fieldset").hide().removeClass("active");
                    $("#booking form fieldset[data-name=" + list_name + "]").show().addClass("active");
                })

                $(document).on('click', '.next_btn', function() {
                    currBtn = $(this);
                    let check = true;
                    let errHtml;
                    if (currBtn.hasClass('1-step')) {
                        let pickdrop = $('#usePickAndDropService').is(':checked');
                        if (pickdrop) {
                            let collection_date = $('.collection-date-end');
                            let collection_time = $('.collection-time-end');
                            let collection_from = $('#collection_from');
                            let delivery_date = $('.delivery-date-end');
                            let delivery_time = $('.delivery-time-end');
                            let delivery_from = $('#delivery_from');
                            if (collection_date.val() == '') {
                                collection_date.addClass('error');
                                check = false;
                            } else {
                                collection_date.removeClass('error');
                            }
                            if (collection_time.val() == '') {
                                collection_time.addClass('error');
                                check = false;
                            } else {
                                collection_time.removeClass('error');
                            }
                            if (collection_from.val() == '') {
                                collection_from.addClass('error');
                                check = false;
                            } else {
                                collection_from.removeClass('error');
                            }
                            if (delivery_date.val() == '') {
                                delivery_date.addClass('error');
                                check = false;
                            } else {
                                delivery_date.removeClass('error');
                            }
                            if (delivery_time.val() == '') {
                                delivery_time.addClass('error');
                                check = false;
                            } else {
                                delivery_time.removeClass('error');
                            }
                            if (delivery_from.val() == '') {
                                delivery_from.addClass('error');
                                check = false;
                            } else {
                                delivery_from.removeClass('error');
                            }
                        } else {
                            let dropoff_date = $('.drop-off-date-end');
                            let dropoff_time = $('.drop-off-time-end');
                            if (dropoff_date.val() == '') {
                                dropoff_date.addClass('error');
                                check = false;
                            } else {
                                dropoff_date.removeClass('error');
                            }
                            if (dropoff_time.val() == '') {
                                dropoff_time.addClass('error');
                                check = false;
                            } else {
                                dropoff_time.removeClass('error');
                            }
                        }

                        if (!check) {
                            $('html, body').animate({
                                scrollTop: $(".error").eq(0).offset().top
                            }, 500);
                            return false;
                        }
                    }
                    if (currBtn.hasClass('2-step')) {
                        let pickdrop = $('#usePickAndDropService').is(':checked');
                        let services = $('input[name="selected_service[]"]').length;
                        if (services == '0') {
                            $('.servicesMessage').html(`Please select some items`);
                            $('.servicesMessage').fadeIn();
                            return false;
                        } else {
                            $('.servicesMessage').fadeOut();
                            // CHECK MINIMUM ORDER
                            var total = 0;
                            let index;
                            let qty;
                            $('input[name="selected_service[]"]').each(function() {
                                index = $(this).val();
                                total += parseFloat($(this).data('price')) * parseInt($('#qty-' + index).val());
                            });
                            let minimumOrder = '<?= price_format($vendor->mem_charges_min_order) ?>';
                        }
                    }
                    if (currBtn.hasClass('3-step')) {
                        let logged_in = parseInt(<?= (int)$this->session->mem_id ?>);
                        let pickup = $('#usePickAndDropService').is(':checked');
                        if ($('#account-info').length > 0) {
                            let mem_fname = $('#mem_fname');
                            let mem_lname = $('#mem_lname');
                            let mem_phone = $('#mem_phone');
                            let mem_email = $('#mem_email');
                            let password = $('#password');
                            let cpassword = $('#cpassword');
                            if (pickup && !is_mem_logged_in) {
                                let address_country = $('#address_country');
                                let address_state = $('#address_state');
                                let address_city = $('#address_city');
                                let address_zip = $('#address_zip');
                                let address_field = $('#address_field');
                                let address_type = $('#address_type');
                                if (address_country.val() == '') {
                                    address_country.addClass('error');
                                    check = false;
                                } else {
                                    address_country.removeClass('error');
                                }
                                if (address_state.val() == '') {
                                    address_state.addClass('error');
                                    check = false;
                                } else {
                                    address_state.removeClass('error');
                                }
                                if ($.trim(address_city.val()).length == 0) {
                                    address_city.addClass('error');
                                    check = false;
                                } else {
                                    address_city.removeClass('error');
                                }
                                if ($.trim(address_zip.val()).length == 0) {
                                    address_zip.addClass('error');
                                    check = false;
                                } else {
                                    address_zip.removeClass('error');
                                }
                                if ($.trim(address_field.val()).length == 0) {
                                    address_field.addClass('error');
                                    check = false;
                                } else {
                                    address_field.removeClass('error');
                                }
                                if ($('input[name="address_type"]:checked').length == 0) {
                                    $('#address_type_error').html('please select one.');
                                    check = false;
                                } else {
                                    $('#address_type_error').html('');
                                }
                            } else {
                                if (is_mem_logged_in) {
                                    $('#logged-in-error').html('');
                                } else {
                                    $('#logged-in-error').html('Sign in Required. Please sign in here to continue.');
                                    check = false;
                                }
                            }
                        } else {
                            if (pickup) {
                                let address = $('#address');
                                if (address.val() == '') {
                                    address.addClass('error');
                                    check = false;
                                } else {
                                    address.removeClass('error');
                                }
                            }
                        }
                        if (!check) {
                            // $('html, body').animate({
                            //     scrollTop: $(".error").offset().top - 30
                            // }, 500);
                            return false;
                        }


                        $(".estimate_blk").addClass("hidden");
                        $(".help_blk").removeClass("hidden");
                        $("#estimate_btn_blk").addClass("hidden");
                    }
                    // if (currBtn.hasClass('4-step')) {
                    //     let note_for_vendor = $('#note-for-vendor');
                    //     if($.trim(note_for_vendor.val()).length == 0)
                    //     {
                    //         note_for_vendor.addClass('error');
                    //         check = false;
                    //     }
                    //     else
                    //     {
                    //         note_for_vendor.removeClass('error');
                    //     }
                    // }

                    if (check) {
                        currentSet = $(this).parents('fieldset').data('name');
                        if (currentSet == 'vendor') {
                            $('#vendor').hide();
                            $('#service').fadeIn();
                            $('.svc_lst > li[data-name=service]').addClass("done");
                        } else if (currentSet == 'service') {
                            let if_address_hidden = $('#address-left-side-option').hasClass('hidden');
                            $('#service').hide();
                            if (if_address_hidden) {
                                $('#instructions').fadeIn();
                                $('.svc_lst > li[data-name=instructions]').addClass("done");
                            } else {
                                $('#address-field-set').fadeIn();
                                $('.svc_lst > li[data-name=address]').addClass("done");
                            }
                        } else if (currentSet == 'address') {
                            $('#address-field-set').hide();
                            $('#instructions').fadeIn();
                            $('.svc_lst > li[data-name=instructions]').addClass("done");
                        } else if (currentSet == 'instructions') {
                            $('#instructions').hide();
                            $('#payment').fadeIn();
                            $('.svc_lst > li[data-name=payment]').addClass("done");
                        }
                        // field_name = $(this).parents("fieldset").next("fieldset").attr("data-name");
                        // currStep = $(this).parents("fieldset");
                        // nextStep = currStep.next("fieldset");
                        // currStep.hide();
                        // nextStep.fadeIn();
                        // $(window).scrollTop(0);
                    } else {
                        return false;
                    }
                });
                $(document).on('click', '.prev_btn', function() {
                    currentSet = $(this).parents('fieldset').data('name');
                    if (currentSet == 'service') {
                        $('#service').hide();
                        $('#vendor').fadeIn();
                    } else if (currentSet == 'address') {
                        $('#address-field-set').hide();
                        $('#service').fadeIn();
                    } else if (currentSet == 'instructions') {
                        let if_address_hidden = $('#address-left-side-option').hasClass('hidden');
                        $('#instructions').hide();
                        if (if_address_hidden) {
                            $('#service').fadeIn();
                        } else {
                            $('#address-field-set').fadeIn();
                        }
                    } else if (currentSet == 'payment') {
                        $('#payment').hide();
                        $('#instructions').fadeIn();
                    }
                    // currStep = $(this).parents("fieldset");
                    // prevStep = currStep.prev("fieldset");
                    // currStep.hide();
                    // prevStep.fadeIn();
                    $(window).scrollTop(0);
                    $(".help_blk").addClass("hidden");
                    $(".estimate_blk").removeClass("hidden");
                    $("#estimate_btn_blk").removeClass("hidden");
                });
            });
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
                            // frmMsg.html(rs.msg).slideDown(500);
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
            });

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
                    console.log(nonce);
                    $('.card_payment').prop('disabled', true);
                    $('.card_payment').parent().hide();
                    $.ajax({
                        url: form$.attr('action'),
                        data: object.serialize(),
                        dataType: 'JSON',
                        method: 'POST',
                        error: function(er) {
                            toastr.error('<div>Please try again or refresh your page.Error occur due to sever response!</div>', "Error");
                            sbtn.attr("disabled", false);
                        },
                        success: function(rs) {
                            if (rs.scroll_top)
                                $("html, body").animate({
                                    scrollTop: 0
                                }, "slow");
                            if (rs.status == 1) {
                                $("html, body").animate({
                                    scrollTop: 100
                                }, "slow");
                                toastr.success(rs.msg, "Success");
                                setTimeout(function() {
                                    if (rs.hide_msg)
                                        $('.alertMsg').slideUp(500);
                                    if (rs.redirect_url)
                                        window.location.href = rs.redirect_url;
                                    sbtn.attr("disabled", false);
                                }, 3000)
                            } else {
                                toastr.error(rs.msg, "Error");
                                sbtn.attr("disabled", false);
                            }
                        },
                        complete: function() {
                            frmIcon.addClass('hidden');
                        }
                    })
                }
            }
            $(document).on("click", ".act_btn", function() {
                $('.servicesMessage').fadeOut();
                let selectedArea = $('#selected_services');
                let item_preview_area = $('#item_preview_area');
                $('.alertMsg').hide();
                if ($(this).hasClass("add_btn")) {
                    if ($(this).hasClass('left')) {
                        selectedArea.prepend(`<tr data-id="${$(this).data('subservice-id')}">
                                                <td>
                                                    <small>${$(this).data('name')}</small>
                                                    <button type="button" class="act_btn del_btn right" data-subservice-id="${$(this).data('subservice-id')}"></button>
                                                </td>
                                                <input type="hidden" name="selected_service[]" value="${$(this).data('subservice-id')}" data-price="${$(this).data('price')}">
                                                <td>
                                                    <div class="qty_btn">
                                                        <a class="qty_minus"></a>
                                                        <input type="text" id="qty-${$(this).data('subservice-id')}" name="qty[]" value="1" class="qty" data-price="${$(this).data('price')}" data-id="${$(this).data('subservice-id')}" readonly>
                                                        <a class="qty_plus"></a>
                                                    </div>
                                                </td>
                                                <td class="price text-right" id="price-${$(this).data('subservice-id')}">£${$(this).data('price')}</td>
                                            </tr>`);
                        item_preview_area.prepend(`<tr id="preview-item-${$(this).data('subservice-id')}">
                                                <td>${$(this).data('service')}</td>
                                                <td class="text-center">${$(this).data('name')}</td>
                                                <td class="text-center" id="item-qty-${$(this).data('subservice-id')}">1</td>
                                                <td id="item-price-${$(this).data('subservice-id')}" class="text-center">£${$(this).data('price')}</td>
                                            </tr>`);
                    }
                    $(this).removeClass("add_btn").addClass("del_btn");
                } else {
                    if ($(this).hasClass('right')) {
                        $("td button").filter("[data-subservice-id='" + $(this).data('subservice-id') + "']").removeClass('del_btn').addClass('add_btn');
                        $('#preview-item-' + $(this).data('subservice-id')).remove();
                        $(this).parent().parent().remove();
                    } else {
                        $("tr").filter("[data-id='" + $(this).data('subservice-id') + "']").remove();
                        $('#preview-item-' + $(this).data('subservice-id')).remove();
                        $(this).removeClass("del_btn").addClass("add_btn");
                    }
                }
                calculateEstimatedAmount();
            });
            // This button will increment the value
            $(document).on("click", ".qty_plus", function(e) {
                e.preventDefault();
                $('.servicesMessage').fadeOut();
                var parent = $(this).parent().children(".qty");
                var currentVal = parent.val();
                var price = parent.data('price');
                var service_id = parent.data('id');
                if (!isNaN(currentVal)) {
                    let incrementedVal = parseInt(currentVal) + 1;
                    parent.val(incrementedVal);
                    $('#price-' + service_id).text(`£${(price*incrementedVal).toFixed(2)}`);
                    $('#item-qty-' + service_id).text(`${incrementedVal}`);
                    $('#item-price-' + service_id).text(`£${(price*incrementedVal).toFixed(2)}`);
                } else {
                    parent.val(1);
                    $('#price-' + service_id).text(`£${(price*1).toFixed(2)}`);
                    $('#item-qty-' + service_id).text(1);
                    $('#item-price-' + service_id).text(`£${(price*1).toFixed(2)}`);
                }
                calculateEstimatedAmount();
            });
            // This button will decrement the value till 0
            $(document).on("click", ".qty_minus", function(e) {
                e.preventDefault();
                $('.servicesMessage').fadeOut();
                var parent = $(this).parent().children(".qty");
                var currentVal = parent.val();
                var price = parent.data('price');
                var service_id = parent.data('id');
                if (!isNaN(currentVal) && currentVal > 1) {
                    let decrementedVal = parseInt(currentVal) - 1;
                    parent.val(decrementedVal);
                    $('#price-' + service_id).text(`£${(price*decrementedVal).toFixed(2)}`);
                    $('#item-qty-' + service_id).text(`${decrementedVal}`);
                    $('#item-price-' + service_id).text(`£${(price*decrementedVal).toFixed(2)}`);
                } else {
                    parent.val(1);
                    $('#price-' + service_id).text(`£${(price*1).toFixed(2)}`);
                    $('#item-qty-' + service_id).text(1);
                    $('#item-price-' + service_id).text(`£${(price*1).toFixed(2)}`);
                }
                calculateEstimatedAmount();
            });

            /// APPENDING TO FIELDS
            const appendName = () => {
                let fname = $.trim($('#mem_fname').val());
                let lname = $.trim($('#mem_lname').val());
                $('#customer-name').text(fname + ' ' + lname);
            }
            const appendCollectionDeliveryAddress = () => {
                let city = $('#address_city').val();
                let zip = $('#address_zip').val();
                let address = $('#address_field').val();
                let type = $("input[name='address_type']:checked").val();
                if (type != undefined && type != '') {
                    type = ucfirst(type, false);
                }
                $('#collection-address').text(`${type}: <br/> ${address} <br/> ${city} <br/> ${zip}`);
                $('#delivery-address').text(`${type}: <br/> ${address} <br/> ${city} <br/> ${zip}`);
            }
            const appendValue = (value, appendTo) => {
                $('#' + appendTo).text($.trim(value));
            }
            const appendValueSelect = (obj, appendTo) => {
                let value = $(obj).find('option:selected').val();
                if (appendTo == 'drop-type') {
                    $('#drop-type-value').val(value);
                }
                $('#' + appendTo).text($.trim(value));
            }
            const appendSelectTextToId = (obj, appendTo) => {
                let value = $(obj).find('option:selected').text();
                $('#' + appendTo).text($.trim(value));
            }
            const enableNextOptions = obj => {
                let index = $('option:selected', obj).data('index');
                $.each($('.delivery-date-end option'), function() {
                    if (parseInt(index) >= parseInt($(this).data('index')))
                        $(this).addClass('hidden');
                    else
                        $(this).removeClass('hidden');
                });
                $('.delivery-date-end').removeAttr('disabled');
                // $('.collection-time-end').removeAttr('disabled');
                $('#collection_from').removeAttr('disabled');
                // $('.delivery-time-end').removeAttr('disabled');
                $('#delivery_from').removeAttr('disabled');
            }
            /// MAP FUNCTION
            var map, bounds, startLat = "",
                startLng = "";
            var startLatLng = new google.maps.LatLng(startLat, startLng);
            var image = {
                url: base_url + "assets/images/marker.png", // url
                scaledSize: new google.maps.Size(40, 40), // scaled size
                origin: new google.maps.Point(0, 0), // origin
                anchor: new google.maps.Point(25, 50) // anchor
            };
            const setAddress = () => {
                let obj = $('#address');
                let option = obj.find('option:selected');
                let value = option.data('type');
                let startLat = option.data('lat');
                let startLng = option.data('long');
                let full_address = option.data('full-address');
                $('#collection-address').html(full_address);
                $('#delivery-address').html(full_address);
                // $('#step-address').text(full_address);
                $('#address_type_' + value).prop('checked', true);
                $('#address_type_' + value).removeAttr('disabled');
                $('input[name="address_type"]').not(':checked').prop('disabled', true);
                $('#map-area').removeClass('hidden');
                startLatLng = new google.maps.LatLng(startLat, startLng);
                init();
            }
            const getLocationAndInitMap = value => {
                value = $.trim(value);
                $('#invalid_zip').html('');
                if ($.trim(value).length == 0)
                    return false;
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    componentRestrictions: {
                        country: 'gb',
                        postalCode: value
                    }
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        latitude = results[0].geometry.location.lat();
                        longitude = results[0].geometry.location.lng();
                        $('#mem_map_lat').val(latitude);
                        $('#mem_map_lng').val(longitude);
                        startLat = latitude;
                        startLng = longitude;
                        $('#map-area').removeClass('hidden');
                        startLatLng = new google.maps.LatLng(startLat, startLng);
                        init();
                    } else {
                        $('#invalid_zip').html('Please enter valid zipcode.');
                        $('#map-area').addClass('hidden');
                    }
                });
            }

            function init() {
                map = new google.maps.Map(document.getElementById('map-canvas'), {
                    center: startLatLng,
                    zoom: 18
                });
                bounds = new google.maps.LatLngBounds();
                var user_icon = {
                    url: base_url + "assets/images/user_marker.svg", // url
                    scaledSize: new google.maps.Size(50, 50), // scaled size
                    origin: new google.maps.Point(0, 0), // origin
                    anchor: new google.maps.Point(25, 50) // anchor
                };
                searchAreaMarker = new google.maps.Marker({
                    position: startLatLng,
                    map: map,
                    draggable: false,
                    icon: user_icon,
                    animation: google.maps.Animation.DROP,
                    title: 'My Location'
                });
            }

            function closeInfos() {
                if (infowindows.length > 0) {
                    for (var i = 0; i < infowindows.length; i++) {
                        infowindows[i].close();
                    }
                }
            }

            function closeMarks() {
                if (markers.length > 0) {
                    for (var i = 0; i < markers.length; i++) {
                        markers[i].setMap(null);
                    }
                }
            }

            $(document).on("click", "#addAddressRuntime", function(e) {
                e.preventDefault();
                let btn = $(this);
                let blk = $('#enter-address-runtime');
                if (blk.hasClass('hidden')) {
                    blk.removeClass('hidden');
                    btn.text('Cancel');
                } else {
                    blk.addClass('hidden');
                    btn.text('Add Address');
                }
            });

            $(document).on("click", "#saveRuntimeAddress", function(e) {
                e.preventDefault();
                let check = true;
                let sbtn = $(this);
                sbtn.attr('disabled', true);
                $(this).find('i.spinner').removeClass('hidden');

                let address_country = $('#address_country_runtime');
                let address_state = $('#address_state_runtime');
                let address_city = $('#address_city_runtime');
                let address_zip = $('#address_zip_runtime');
                let address_field = $('#address_field_runtime');
                let address_type = $('#address_type_runtime');
                if (address_country.val() == '') {
                    address_country.addClass('error');
                    check = false;
                } else {
                    address_country.removeClass('error');
                }
                if (address_state.val() == '') {
                    address_state.addClass('error');
                    check = false;
                } else {
                    address_state.removeClass('error');
                }
                if ($.trim(address_city.val()).length == 0) {
                    address_city.addClass('error');
                    check = false;
                } else {
                    address_city.removeClass('error');
                }
                if ($.trim(address_zip.val()).length == 0) {
                    address_zip.addClass('error');
                    check = false;
                } else {
                    address_zip.removeClass('error');
                }
                if ($.trim(address_field.val()).length == 0) {
                    address_field.addClass('error');
                    check = false;
                } else {
                    address_field.removeClass('error');
                }
                if (address_type.val() == '') {
                    address_type.addClass('error');
                    check = false;
                } else {
                    address_type.removeClass('error');
                }

                if (check) {

                    value = $.trim(address_zip.val());
                    $('#invalid_zip_runtime').html('');
                    if ($.trim(value).length == 0)
                        return false;
                    var geocoder = new google.maps.Geocoder();
                    geocoder.geocode({
                        componentRestrictions: {
                            country: 'gb',
                            postalCode: value
                        }
                    }, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            latitude = results[0].geometry.location.lat();
                            longitude = results[0].geometry.location.lng();
                            $('#mem_map_lat_runtime').val(latitude);
                            $('#mem_map_lng_runtime').val(longitude);
                            startLat = latitude;
                            startLng = longitude;
                            $.ajax({
                                url: base_url + 'buyer/save_address',
                                data: {
                                    'mem_map_lat': latitude,
                                    'mem_map_lng': longitude,
                                    'address_country': address_country.val(),
                                    'address_state': address_state.val(),
                                    'address_city': address_city.val(),
                                    'address_zip': address_zip.val(),
                                    'address_field': address_field.val(),
                                    'address_type': address_type.val()
                                },
                                dataType: 'JSON',
                                method: 'POST',
                                success: function(rs) {
                                    let mem = rs.mem_data;
                                    let select_address = '';
                                    select_address += `<h4>Select your address</h4>
                                    <div class="flex_blk"><div class="form_blk">
                                    <label for="address" class="move">Address</label>
                                    <select name="address" id="address" class="text_box" onchange="setAddress(this)">
                                    <option value="">Select</option>`;
                                    if ($.trim(mem.mem_city).length != 0 && $.trim(mem.mem_address).length != 0 && $.trim(mem.mem_zip).length != 0) {
                                        select_address += `<option data-type="home" value="${mem.mem_address} @@ ${mem.mem_city} @@ ${mem.mem_zip}" data-lat="${mem.mem_map_lat}" data-long="${mem.mem_map_lng}" data-full-address="Home: <br/> ${mem.mem_address} <br/> ${mem.mem_city} <br/> ${mem.mem_zip}" ${address_type.val() == 'home' ? 'selected' : ''}>
                                        Home: ${mem.mem_address} - ${mem.mem_city} - ${mem.mem_zip}
                                        </option>`;
                                    }
                                    if ($.trim(mem.mem_business_city).length != 0 && $.trim(mem.mem_business_address).length != 0 && $.trim(mem.mem_business_zip).length != 0) {
                                        select_address += ` <option data-type="office" value="${mem.mem_business_address} @@ ${mem.mem_business_city} @@ ${mem.mem_business_zip}" data-lat="${mem.mem_business_map_lat}" data-long="${mem.mem_business_map_lng}" data-full-address="Office: <br/> ${mem.mem_business_address} <br/> ${mem.mem_business_city} <br/> ${mem.mem_business_zip}" ${address_type.val() == 'office' ? 'selected' : ''}>
                                        Office: ${mem.mem_business_address} - ${mem.mem_business_city} - ${mem.mem_business_zip}
                                        </option>`;
                                    }
                                    if ($.trim(mem.mem_hotel_city).length != 0 && $.trim(mem.mem_hotel_address).length != 0 && $.trim(mem.mem_hotel_zip).length != 0) {
                                        select_address += `<option data-type="hotel" value="${mem.mem_hotel_address} @@ ${mem.mem_hotel_city} @@ ${mem.mem_hotel_zip}" data-lat="${mem.mem_hotel_map_lat}" data-long="${mem.mem_hotel_map_lng}" data-full-address="Hotel: <br/> ${mem.mem_hotel_address} <br/> ${mem.mem_hotel_city} <br/> ${mem.mem_hotel_zip}" ${address_type.val() == 'hotel' ? 'selected' : ''}>
                                        Hotel: ${mem.mem_hotel_address} - ${mem.mem_hotel_city} - ${mem.mem_hotel_zip}
                                        </option>`;
                                    }
                                    select_address += `</select></div>`;
                                    if ($.trim(mem.mem_zip).length == 0 || $.trim(mem.mem_business_zip).length == 0 || $.trim(mem.mem_hotel_zip).length == 0) {
                                        select_address += `<div class="btn_blk">
                                            <button type="button" class="site_btn light" id="addAddressRuntime">Add Address</button>
                                        </div>`;
                                    }

                                    select_address += `</div><div class="br"></div>`;
                                    $('#select-address').html(select_address);
                                    $('#enter-address-runtime').addClass('hidden');

                                    let address_types_dropdown;
                                    address_types_dropdown += `<option value="">Select</option>`;
                                    if ($.trim(mem.mem_zip) == 0) {
                                        address_types_dropdown += `<option value="home">Home</option>`;
                                    }
                                    if ($.trim(mem.mem_business_zip) == 0) {
                                        address_types_dropdown += `<option value="office">Office</option>`;
                                    }
                                    if ($.trim(mem.mem_hotel_zip) == 0) {
                                        address_types_dropdown += `<option value="hotel">Hotel</option>`;
                                    }

                                    $('#address_type_' + address_type.val()).prop('checked', true);
                                    $('#collection-address').html(`${capitalize(address_type.val())}: <br/> ${address_field.val()} <br/> ${address_city.val()} <br/> ${address_zip.val()}`);
                                    $('#delivery-address').html(`${capitalize(address_type.val())}: <br/> ${address_field.val()} <br/> ${address_city.val()} <br/> ${address_zip.val()}`);
                                    $('#map-area').removeClass('hidden');
                                    $('#address_type_runtime').html(address_types_dropdown);
                                    toastr.success("Address Save Successfully.", "Success");
                                    sbtn.attr('disabled', false);
                                    sbtn.find('i.spinner').addClass('hidden');
                                    startLatLng = new google.maps.LatLng(startLat, startLng);
                                    init();

                                },
                                complete: function() {}
                            })
                        } else {
                            $('#invalid_zip_runtime').html('Please enter valid zipcode.');
                            sbtn.attr('disabled', false);
                            sbtn.find('i.spinner').addClass('hidden');
                        }
                    });
                } else {
                    sbtn.attr('disabled', false);
                    sbtn.find('i.spinner').addClass('hidden');
                    return false;
                }
            });

            const capitalize = (s) => {
                if (typeof s !== 'string') return ''
                return s.charAt(0).toUpperCase() + s.slice(1)
            }
        </script>
        <script>
            $(window).on("load", function() {
                $(document).on("click", "#estimate_btn", function() {
                    $(".estimate_blk").addClass("active");
                });
                $(document).on("click", ".estimate_blk .cross_btn", function() {
                    $(".estimate_blk").removeClass("active");
                });
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
    <script type="text/javascript">
        const calculateEstimatedAmount = () => {
            var total = 0;
            let index;
            let qty;
            let discoun_is;
            let before_code_discount;
            let pickup = $('#usePickAndDropService').is(':checked');
            $('input[name="selected_service[]"]').each(function() {
                index = $(this).val();
                total += parseFloat($(this).data('price')) * parseInt($('#qty-' + index).val());
            });
            if (promo_code_applied) {
                if (promo_discount_type == 'percentage') {
                    discoun_is = total / 100 * promo_discount_val;
                    total = total - discoun_is;
                } else {
                    total = total - promo_discount_val;
                }
            }
            let freePickupAmount = '<?= price_format($vendor->mem_charges_free_over) ?>';
            let estimated_total_after_discount;
            let final_amount;
            if (pickup) {
                let min_order = parseFloat('<?= price_format($vendor->mem_charges_min_order) ?>');
                let min_order_fee = parseFloat(min_order - total);
                min_order_fee = min_order_fee < 0 ? 0 : (parseFloat(min_order_fee)).toFixed(2);
                $('#minimum-order-fee').text(`£${parseFloat(min_order_fee).toFixed(2)}`);
                $('#minimum-order-fee-preview').text(`£${parseFloat(min_order_fee).toFixed(2)}`);
                total += parseFloat(min_order_fee);
                $('#minimum-order-fee-section').removeClass('hidden');
                $('#minimum-order-fee-preview-section').removeClass('hidden');
                if (parseFloat(total.toFixed(2)) > parseFloat(freePickupAmount)) {
                    $('#freepickup-alert-preview-section').removeClass("hidden");
                    $('.freePickupAndDelivery').html(`Free Pickup & Delivery Service`);
                    $('.freePickupAndDelivery').fadeIn();
                    $('.pickdrop_charges').addClass('hidden');
                    $('#pickup-and-delivery-preview').addClass('hidden');
                    $('#estimated-total').text(`£${(parseFloat(total)).toFixed(2)}`);
                    $('#estimated-total-preview').text(`£${(parseFloat(total)).toFixed(2)}`);
                    final_amount = (parseFloat(total)).toFixed(2);
                    $('#basket-summary-div').stop().animate({
                        scrollTop: $('#basket-summary-div')[0].scrollHeight
                    }, 800);
                } else {
                    $('.freePickupAndDelivery').fadeOut();
                    $('.pickdrop_charges').removeClass('hidden');
                    $('#pickup-and-delivery-preview').removeClass('hidden');
                    $('#estimated-total').text(`£${(parseFloat(total) + parseFloat(pickupDeliveryCharges)).toFixed(2)}`);
                    $('#estimated-total-preview').text(`£${(parseFloat(total) + parseFloat(pickupDeliveryCharges)).toFixed(2)}`);
                    final_amount = (parseFloat(total) + parseFloat(pickupDeliveryCharges)).toFixed(2);
                }
            } else {
                $('#freepickup-alert-preview-section').addClass("hidden");
                $('#minimum-order-fee-section').addClass('hidden');
                $('#minimum-order-fee-preview-section').addClass('hidden');
                $('.freePickupAndDelivery').fadeOut();
                $('#pickup-and-delivery-preview').addClass('hidden');
                $('#estimated-total').text(`£${(parseFloat(total)).toFixed(2)}`);
                $('#estimated-total-preview').text(`£${(parseFloat(total)).toFixed(2)}`);
                final_amount = (parseFloat(total)).toFixed(2);
            }

            if (promo_code_applied) {
                if (promo_discount_type == 'percentage') {
                    before_code_discount = parseFloat(final_amount) + parseFloat(discoun_is);
                } else {
                    before_code_discount = parseFloat(final_amount) + parseFloat(promo_discount_val);
                    console.log(final_amount, promo_discount_val);
                }
                $('#before-promo-code-discount').removeClass('hidden');
                $('#before-promo-code-discount-val').html(`£${parseFloat(before_code_discount).toFixed(2)}`);
            }

            if (is_10th_order) {
                estimated_total_after_discount = final_amount / 100 * discount_percentage;
                estimated_total_after_discount = parseFloat(final_amount - estimated_total_after_discount).toFixed(2);
                $('#estimated-total-after-discount').html(`£${estimated_total_after_discount}`);
                $('#estimated-total-after-discount-preview').html(`£${estimated_total_after_discount}`);
            }

        }
    </script>
    <script type="text/javascript">
        $(document).on('keyup', '#promo_code', function(e) {
            $('#promo-code-result').empty();
            let $promo = $(this);
            let $promo_code = $.trim($promo.val());
            if ($promo_code.length == 0) {
                return false;
            }

            $.ajax({
                url: base_url + 'booking/check_valid_promo_code',
                data: {
                    'promo_code': $promo_code
                },
                dataType: 'JSON',
                method: 'POST',
                success: function(rs) {
                    if (rs.status) {
                        promo_code_applied = true;
                        promo_discount_type = rs.type;
                        promo_discount_val = promo_discount_type == 'percentage' ? parseInt(rs.discount_val) : parseFloat(rs.discount_val);
                        $('#promo-code-result').html(`Applied: ${promo_discount_type == 'percentage' ? promo_discount_val+'% discount applied on total services price' : '£'+promo_discount_val+' is deducted as discount applied on total services price'}`);
                        $('#promo-code-result').css({
                            'color': 'green'
                        });
                        calculateEstimatedAmount();
                    } else {
                        promo_code_applied = false;
                        $('#promo-code-result').html(rs.msg);
                        $('#promo-code-result').css({
                            'color': 'red'
                        });
                        calculateEstimatedAmount();
                    }
                },
                complete: function() {

                }
            })
        });
    </script>
</body>

</html>