<!doctype html>

<html>



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



<body id="home-page">

    <?php $this->load->view('includes/header'); ?>

    <main common booking>





        <section id="sBanner">

            <div class="contain">

                <div class="content">

                    <h2 class="heading"><?= $vendor->mem_fname . ' ' . $vendor->mem_lname ?></h2>

                    <p><?= $content['header_detail'] ?></p>

                </div>

            </div>

            <div class="image"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image1']) ?>" alt=""></div>

        </section>

        <!-- sBanner -->





        <section id="booking">

            <div class="contain">

                <ul class="smryLst flex text-center">

                    <li class="current">

                        <div class="blk">

                            <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image2']) ?>" alt=""></div>

                            <div class="txt">

                                <h6><?= $content['step1_title'] ?></h6>

                                <p class="small"></p>

                            </div>

                        </div>

                    </li>

                    <li>

                        <div class="blk">

                            <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image3']) ?>" alt=""></div>

                            <div class="txt">

                                <h6><?= $content['step2_title'] ?></h6>

                                <p class="small"></p>

                            </div>

                        </div>

                    </li>

                    <?php if (isset($selections['pick-or-facility']) && $selections['pick-or-facility'] == 'pickdrop') : ?>

                        <li>

                            <div class="blk">

                                <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image4']) ?>" alt=""></div>

                                <div class="txt">

                                    <h6><?= $content['step3_title'] ?></h6>

                                    <p class="small"></p>

                                </div>

                            </div>

                        </li>

                    <?php endif; ?>

                    <li>

                        <div class="blk">

                            <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image5']) ?>" alt=""></div>

                            <div class="txt">

                                <h6><?= $content['step4_title'] ?></h6>

                                <p class="small"></p>

                            </div>

                        </div>

                    </li>

                    <li>

                        <div class="blk">

                            <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image6']) ?>" alt=""></div>

                            <div class="txt">

                                <h6><?= $content['step5_title'] ?></h6>

                                <p class="small"></p>

                            </div>

                        </div>

                    </li>

                    <li class="hidden">

                        <div class="blk">

                            <div class="icon"><img src="<?= $base_url ?>images/icon-credit-card.svg" alt=""></div>

                            <div class="txt">

                                <h6><?= $content['heading'] ?></h6>

                                <p class="small"></p>

                            </div>

                        </div>

                    </li>

                </ul>



                <div class="alertMsg-form alert alert-danger alert-sm text-white" style="display:none"></div>

                <form action="" method="post" id="payment-form" class="">

                    <fieldset>

                        <div class="br"></div>

                        <div class="br"></div>

                        <h3 class="heading"><?= $content['step1_heading'] ?></h3>

                        <ul class="stepLst flex text-center">

                            <li>

                                <div class="inner">

                                    <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image7']) ?>" alt=""></div>

                                    <div class="txt">

                                        <h5><?= $content['instruction1_heading'] ?></h5>

                                        <p><?= $content['instruction1_detail'] ?></p>

                                    </div>

                                </div>

                            </li>

                            <li>

                                <div class="inner">

                                    <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image8']) ?>" alt=""></div>

                                    <div class="txt">

                                        <h5><?= $content['instruction2_heading'] ?></h5>

                                        <p><?= $content['instruction2_detail'] ?></p>

                                    </div>

                                </div>

                            </li>

                            <li>

                                <div class="inner">

                                    <div class="icon"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image9']) ?>" alt=""></div>

                                    <div class="txt">

                                        <h5><?= $content['instruction3_heading'] ?></h5>

                                        <p><?= $content['instruction3_detail'] ?></p>

                                    </div>

                                </div>

                            </li>

                        </ul>

                        <div class="bTn formBtn text-center">

                            <button type="button" class="webBtn nextBtn">Continue</button>

                        </div>

                    </fieldset>

                    <fieldset>

                        <?php if (empty($this->session->mem_id)) : ?>

                            <div id="account-info">

                                <h3 class="heading">Account Info</h3>

                                <div class="blk">

                                    <p>Already have an account? <a href="javascript:void(0)" class="popBtn" data-popup="signin">Sign in here</a></p>

                                    <div class="formRow row">

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">

                                            <div class="txtGrp">

                                                <label for="mem_fname">First Name</label>

                                                <input type="text" name="mem_fname" id="mem_fname" class="txtBox" onkeyup="appendName()">

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">

                                            <div class="txtGrp">

                                                <label for="mem_lname">Last Name</label>

                                                <input type="text" name="mem_lname" id="mem_lname" class="txtBox" onkeyup="appendName()">

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">

                                            <div class="txtGrp">

                                                <label for="mem_phone">Phone Number</label>

                                                <input type="text" name="mem_phone" id="mem_phone" class="txtBox" onkeyup="appendValue(this.value, 'customer-phone')">

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">

                                            <div class="txtGrp">

                                                <label for="mem_email">Email Address</label>

                                                <input type="email" name="mem_email" id="mem_email" class="txtBox" onkeyup="appendValue(this.value, 'customer-email')">

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">

                                            <div class="txtGrp pasDv">

                                                <label for="password">Password</label>

                                                <input type="password" name="password" id="password" class="txtBox pr-password">

                                                <i class="icon-eye" id="eye"></i>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">

                                            <div class="txtGrp pasDv">

                                                <label for="cpassword">Confirm Password</label>

                                                <input type="password" name="cpassword" id="cpassword" class="txtBox">

                                                <i class="icon-eye" id="eye"></i>

                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">

                                            <div class="txtGrp">

                                                <div class="lblBtn">

                                                    <input type="checkbox" name="notified" id="notified">

                                                    <label for="notified">Keep me up to date on news and exclusive offers</label>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="br"></div>

                        <?php endif; ?>

                        <h3 class="heading"><?= $content['step2_heading'] ?></h3>

                        <div class="blk">

                            <div class="_header">

                                <h4>Tell us about your location</h4>

                            </div>

                            <h6>Enter your Postcode</h6>

                            <div class="txtGrp">

                                <label for="zipcode">Enter Postcode</label>

                                <input type="text" class="txtBox" id="zipcode" value="<?= $zipcode ?>">

                                <br />

                                <button type="button" onclick="cp_obj_1.doLookup()" class="webBtn smBtn">Find Addresses</button>

                                <br />

                                <span id="crafty_postcode_result_display_1">&nbsp;</span>

                                <br />

                            </div>

                            <div id="select-address">

                                <?php if (!empty($this->session->mem_id)) : ?>

                                    <h6>Select your address</h6>

                                    <div class="txtGrp">

                                        <label for="address" class="move">Address</label>

                                        <select name="address" id="address" class="txtBox" onchange="setAddress()">

                                            <option value="">Select</option>

                                            <?php if (!empty($mem_data->mem_city) && !empty($mem_data->mem_address) && !empty($mem_data->mem_zip)) : ?>

                                                <option value="<?= $mem_data->mem_city . ' - ' . $mem_data->mem_address . ' - ' . $mem_data->mem_zip ?>" data-type="home" data-lat="<?= $mem_data->mem_map_lat ?>" data-long="<?= $mem_data->mem_map_lng ?>" data-full-address="<?= 'Home: ' . $mem_data->mem_city . ' - ' . $mem_data->mem_address . ' - ' . $mem_data->mem_zip ?>">

                                                    <?= 'Home: ' . $mem_data->mem_city . ' - ' . $mem_data->mem_address . ' - ' . $mem_data->mem_zip ?>

                                                </option>

                                            <?php endif; ?>

                                            <?php if (!empty($mem_data->mem_business_city) && !empty($mem_data->mem_business_address) && !empty($mem_data->mem_business_zip)) : ?>

                                                <option value="<?= $mem_data->mem_business_city . ' - ' . $mem_data->mem_business_address . ' - ' . $mem_data->mem_business_zip ?>" data-type="office" data-lat="<?= $mem_data->mem_business_map_lat ?>" data-long="<?= $mem_data->mem_business_map_lng ?>" data-full-address="<?= 'Office: ' . $mem_data->mem_business_city . ' - ' . $mem_data->mem_business_address . ' - ' . $mem_data->mem_business_zip ?>">

                                                    <?= 'Office: ' . $mem_data->mem_business_city . ' - ' . $mem_data->mem_business_address . ' - ' . $mem_data->mem_business_zip ?>

                                                </option>

                                            <?php endif; ?>

                                            <?php if (!empty($mem_data->mem_business_city) && !empty($mem_data->mem_business_address) && !empty($mem_data->mem_business_zip)) : ?>

                                                <option value="<?= $mem_data->mem_hotel_city . ' - ' . $mem_data->mem_hotel_address . ' - ' . $mem_data->mem_hotel_zip ?>" data-type="hotel" data-lat="<?= $mem_data->mem_hotel_map_lat ?>" data-long="<?= $mem_data->mem_hotel_map_lng ?>" data-full-address="<?= 'Hotel: ' . $mem_data->mem_hotel_city . ' - ' . $mem_data->mem_hotel_address . ' - ' . $mem_data->mem_hotel_zip ?>">

                                                    <?= 'Hotel: ' . $mem_data->mem_hotel_city . ' - ' . $mem_data->mem_hotel_address . ' - ' . $mem_data->mem_hotel_zip ?>

                                                </option>

                                            <?php endif; ?>

                                        </select>

                                    </div>

                                <?php else : ?>

                            </div>

                            <div id="enter-address">

                                <h6>Enter your address</h6>

                                <div class="row formRow">

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">

                                        <div class="txtGrp">

                                            <label for="address_country" class="move">Country</label>

                                            <select name="address_country" id="address_country" class="txtBox" onchange="fetchStates(this.value, 'address_state')">

                                                <option value="">Select</option>

                                                <?php foreach (countries() as $country) : ?>

                                                    <?php if (in_array($country->name, ['United Kingdom'])) { ?>

                                                        <option value="<?= $country->id ?>"><?= $country->name ?></option>

                                                <?php }

                                                endforeach; ?>

                                            </select>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">

                                        <div class="txtGrp">

                                            <label for="address_state" class="move">State</label>

                                            <select name="address_state" id="address_state" class="txtBox">

                                                <option value="">Select</option>

                                                <?php foreach (states_by_country($mem_data->mem_country) as $state) : ?>

                                                    <option value="<?= $state->id ?>"><?= $state->name ?></option>

                                                <?php endforeach; ?>

                                            </select>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">

                                        <div class="txtGrp">

                                            <label for="address_city">City</label>

                                            <input type="text" name="address_city" id="address_city" value="" class="txtBox" onkeyup="appendCollectionDeliveryAddress()">

                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">

                                        <div class="txtGrp">

                                            <input type="hidden" name="mem_map_lat" id="mem_map_lat" value="">

                                            <input type="hidden" name="mem_map_lng" id="mem_map_lng" value="">

                                            <label for="address_zip">Zip Code</label>

                                            <input type="text" id="address_zip" name="address_zip" data-type="hotel" data-way="1" value="" class="txtBox" onkeyup="getLocationAndInitMap(this.value); appendCollectionDeliveryAddress()">

                                            <span style="color:red" id="invalid_zip"></span>

                                        </div>

                                    </div>

                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">

                                        <div class="txtGrp">

                                            <label for="address_field">Address</label>

                                            <input type="text" id="address_field" name="address_field" value="" class="txtBox" onkeyup="appendCollectionDeliveryAddress()">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <br>

                        <?php endif; ?>

                        <h6>Specify any extra address details</h6>

                        <div class="txtGrp">

                            <label for="extra_address_detail">Apartment name, number, floor</label>

                            <input type="text" name="extra_address_detail" id="extra_address_detail" class="txtBox">

                        </div>

                        <h6>Address type</h6>

                        <div class="txtGrp">

                            <span id="address_type_error" style="color:red"></span>

                            <ul class="selectLst flex">

                                <li>

                                    <div class="radioBtn">

                                        <input type="radio" name="address_type" id="address_type_home" value="home" <?= empty($this->session->mem_id) ? 'checked' : '' ?> onclick="appendCollectionDeliveryAddress(); setAddress()">

                                        <div class="inner">

                                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-home.svg" alt=""></div>

                                            <div class="txt">

                                                <p>Home</p>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="radioBtn">

                                        <input type="radio" name="address_type" id="address_type_office" value="office" onclick="appendCollectionDeliveryAddress(); setAddress()">

                                        <div class="inner">

                                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-briefcase.svg" alt=""></div>

                                            <div class="txt">

                                                <p>Office</p>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="radioBtn">

                                        <input type="radio" name="address_type" id="address_type_hotel" value="hotel" onclick="appendCollectionDeliveryAddress(); setAddress()">

                                        <div class="inner">

                                            <div class="icon"><img src="<?= base_url() ?>assets/images/vector-hotel.svg" alt=""></div>

                                            <div class="txt">

                                                <p>Hotel</p>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                            </ul>

                        </div>

                        </div>

                        <div id="map-area" class="hidden">

                            <h4 class="heading"><?= $content['step2_map_heading'] ?></h4>

                            <div id="map-canvas"></div>

                        </div>

                        <div class="bTn formBtn text-center">

                            <button type="button" class="webBtn labelBtn prevBtn">Back</button>

                            <button type="button" class="webBtn nextBtn 1-step">Continue</button>

                        </div>

                    </fieldset>

                    <?php if (isset($selections['pick-or-facility']) && $selections['pick-or-facility'] == 'pickdrop') : ?>

                        <fieldset>

                            <h3 class="heading"><?= $content['step3_heading'] ?></h3>

                            <div class="blk">

                                <h4>Collection</h4>

                                <div class="formRow row">

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">

                                        <div class="txtGrp">

                                            <label for="collection_date">Date</label>

                                            <input type="text" name="collection_date" id="collection_date" value="<?= $selections['place-order']['collection_date'] ?>" class="txtBox datepicker" readonly>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">

                                        <div class="txtGrp">

                                            <label for="collection_time" class="move">Time</label>

                                            <select name="collection_time" id="collection_time" class="txtBox">

                                                <?= oneHourTimeByGiven($selections['place-order']['collection_time'], $collection_opening, $collection_closing) ?>

                                            </select>

                                        </div>

                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">

                                        <div class="txtGrp">

                                            <label for="collection_from" class="move">Collects From</label>

                                            <select name="collection_from" id="collection_from" class="txtBox">

                                                <option value="">Select</option>

                                                <?php foreach (collection_types() as $val) : ?>

                                                    <option value="<?= $val ?>"><?= $val ?></option>

                                                <?php endforeach; ?>

                                            </select>

                                        </div>

                                    </div>

                                </div>

                                <hr>

                                <h4>Delivery</h4>

                                <div class="formRow row">

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">

                                        <div class="txtGrp">

                                            <label for="delivery_date">Date</label>

                                            <input type="text" name="delivery_date" id="delivery_date" class="txtBox datepicker" value="<?= $selections['place-order']['delivery_date'] ?>" readonly>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">

                                        <div class="txtGrp">

                                            <label for="delivery_time" class="move">Time</label>

                                            <select name="delivery_time" id="delivery_time" class="txtBox">

                                                <?= oneHourTimeByGiven($selections['place-order']['delivery_time'], $delivery_opening, $delivery_closing) ?>

                                            </select>

                                        </div>

                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">

                                        <div class="txtGrp">

                                            <label for="delivery_from" class="move">Collects Drops</label>

                                            <select name="delivery_from" id="delivery_from" class="txtBox" onchange="appendValueSelect(this, 'drop-type')">

                                                <option value="">Select</option>

                                                <?php foreach (drop_types() as $val) : ?>

                                                    <option value="<?= $val ?>"><?= $val ?></option>

                                                <?php endforeach; ?>

                                            </select>

                                        </div>

                                    </div>

                                </div>

                                <hr>

                                <h6>Collection or delivery instructions (optional)</h6>

                                <div class="txtGrp">

                                    <label for="collection_or_delivery_notes">Any special instructions</label>

                                    <input type="text" name="collection_or_delivery_notes" id="collection_or_delivery_notes" class="txtBox">

                                </div>

                            </div>

                            <div class="bTn formBtn text-center">

                                <button type="button" class="webBtn labelBtn prevBtn">Back</button>

                                <button type="button" class="webBtn nextBtn 2-step">Continue</button>

                            </div>

                        </fieldset>

                    <?php endif; ?>

                    <fieldset>

                        <h3 class="heading"><?= $content['step4_heading'] ?></h3>

                        <ul class="svcLst flex text-center">

                            <li class="active">

                                <a data-toggle="tab" href="#WashDry">

                                    <img src="<?= get_site_image_src("services", $wash_and_dry->image, ''); ?>" alt="">

                                    <em><?= $wash_and_dry->name ?></em>

                                </a>

                            </li>

                            <li>

                                <a data-toggle="tab" href="#WashIron">

                                    <img src="<?= get_site_image_src("services", $wash_and_iron->image, ''); ?>" alt="">

                                    <em><?= $wash_and_iron->name ?></em>

                                </a>

                            </li>

                            <li>

                                <a data-toggle="tab" href="#DryCleaning">

                                    <img src="<?= get_site_image_src("services", $dry_cleaning->image, ''); ?>" alt="">

                                    <em><?= $dry_cleaning->name ?></em>

                                </a>

                            </li>

                            <li>

                                <a data-toggle="tab" href="#IronOnly">

                                    <img src="<?= get_site_image_src("services", $iron_only->image, ''); ?>" alt="">

                                    <em><?= $iron_only->name ?></em>

                                </a>

                            </li>

                            <li>

                                <a data-toggle="tab" href="#BulkyItems">

                                    <img src="<?= get_site_image_src("services", $buly_items->image, ''); ?>" alt="">

                                    <em><?= $buly_items->name ?></em>

                                </a>

                            </li>

                            <li>

                                <a data-toggle="tab" href="#Deals">

                                    <img src="<?= get_site_image_src("services", $deals->image, ''); ?>" alt="">

                                    <em><?= $deals->name ?></em>

                                </a>

                            </li>

                        </ul>

                        <div class="smryMainBlk">

                            <div class="blk tab-content">

                                <div id="WashDry" class="tab-pane fade in active">

                                    <div class="serveBlk">

                                        <div class="icon"><img src="<?= get_site_image_src("services", $wash_and_dry->image, ''); ?>" alt=""></div>

                                        <div class="txt">

                                            <h4><?= $wash_and_dry->name ?></h4>

                                            <p><?= $wash_and_dry->details ?></p>

                                        </div>

                                    </div>

                                    <hr>

                                    <div class="serveBlk">

                                        <div class="txt">

                                            <table>

                                                <tbody>

                                                    <tr>

                                                        <th>Item</th>

                                                        <th>Price</th>

                                                        <th>Add To Basket</th>

                                                    </tr>

                                                    <?php

                                                    $check = 0;

                                                    foreach (get_sub_services($wash_and_dry->id) as $key => $sub_service) :

                                                        $row = sub_service_price($sub_service->id, $vendor_id);

                                                        if ($row->price != '' && $row->price != '0' && $row->price != '0.00') :

                                                            $check++;

                                                    ?>

                                                            <tr id="<?= $sub_service->id ?>">

                                                                <td><?= $sub_service->name ?></td>

                                                                <td>£<?= $row->price ?></td>

                                                                <td><button type="button" id="<?= $sub_service->id ?>" class="actBtn <?= service_selected_status($services, $sub_service->id) ?> left" data-service="<?= get_parent_service($sub_service->service_id) ?>" data-subservice-id="<?= $sub_service->id ?>" data-price="<?= $row->price ?>" data-name="<?= $sub_service->name ?>"></button></td>

                                                            </tr>

                                                        <?php

                                                        endif;

                                                    endforeach;

                                                    if ($check === 0) :

                                                        ?>

                                                        <tr>

                                                            <td colspan="3">

                                                                <div class="alert alert-info alert-sm text-white">Vendor service not available.</div>

                                                            </td>

                                                        </tr>

                                                    <?php endif; ?>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                                <div id="DryCleaning" class="tab-pane fade">

                                    <div class="serveBlk">

                                        <div class="icon"><img src="<?= get_site_image_src("services", $dry_cleaning->image, ''); ?>" alt=""></div>

                                        <div class="txt">

                                            <h4><?= $dry_cleaning->name ?></h4>

                                            <p><?= $dry_cleaning->details ?></p>

                                        </div>

                                    </div>

                                    <hr>

                                    <div class="serveBlk">

                                        <div class="txt">

                                            <table>

                                                <tbody>

                                                    <tr>

                                                        <th>Item</th>

                                                        <th>Price</th>

                                                        <th>Select</th>

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

                                                                <td>£<?= $row->price ?></td>

                                                                <td><button type="button" id="<?= $sub_service->id ?>" class="actBtn <?= service_selected_status($services, $sub_service->id) ?> left" data-service="<?= get_parent_service($sub_service->service_id) ?>" data-subservice-id="<?= $sub_service->id ?>" data-price="<?= $row->price ?>" data-name="<?= $sub_service->name ?>"></button></td>

                                                            </tr>

                                                        <?php

                                                        endif;

                                                    endforeach;

                                                    if ($check === 0) :

                                                        ?>

                                                        <tr>

                                                            <td colspan="3">

                                                                <div class="alert alert-info alert-sm text-white">Vendor service not available.</div>

                                                            </td>

                                                        </tr>

                                                    <?php endif; ?>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                                <div id="WashIron" class="tab-pane fade">

                                    <div class="serveBlk">

                                        <div class="icon"><img src="<?= get_site_image_src("services", $wash_and_iron->image, ''); ?>" alt=""></div>

                                        <div class="txt">

                                            <h4><?= $wash_and_iron->name ?></h4>

                                            <p><?= $wash_and_iron->details ?></p>

                                        </div>

                                    </div>

                                    <hr>

                                    <div class="serveBlk">

                                        <div class="txt">

                                            <table>

                                                <tbody>

                                                    <tr>

                                                        <th>Item</th>

                                                        <th>Price</th>

                                                        <th>Select</th>

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

                                                                <td>£<?= $row->price ?></td>

                                                                <td><button type="button" id="<?= $sub_service->id ?>" class="actBtn <?= service_selected_status($services, $sub_service->id) ?> left" data-service="<?= get_parent_service($sub_service->service_id) ?>" data-subservice-id="<?= $sub_service->id ?>" data-price="<?= $row->price ?>" data-name="<?= $sub_service->name ?>"></button></td>

                                                            </tr>

                                                        <?php

                                                        endif;

                                                    endforeach;

                                                    if ($check === 0) :

                                                        ?>

                                                        <tr>

                                                            <td colspan="3">

                                                                <div class="alert alert-info alert-sm text-white">Vendor service not available.</div>

                                                            </td>

                                                        </tr>

                                                    <?php endif; ?>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                                <div id="IronOnly" class="tab-pane fade">

                                    <div class="serveBlk">

                                        <div class="icon"><img src="<?= get_site_image_src("services", $iron_only->image, ''); ?>" alt=""></div>

                                        <div class="txt">

                                            <h4><?= $iron_only->name ?></h4>

                                            <p><?= $iron_only->details ?></p>

                                        </div>

                                    </div>

                                    <hr>

                                    <div class="serveBlk">

                                        <div class="txt">

                                            <table>

                                                <tbody>

                                                    <tr>

                                                        <th>Item</th>

                                                        <th>Price</th>

                                                        <th>Select</th>

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

                                                                <td>£<?= $row->price ?></td>

                                                                <td><button type="button" id="<?= $sub_service->id ?>" class="actBtn <?= service_selected_status($services, $sub_service->id) ?> left" data-service="<?= get_parent_service($sub_service->service_id) ?>" data-subservice-id="<?= $sub_service->id ?>" data-price="<?= $row->price ?>" data-name="<?= $sub_service->name ?>"></button></td>

                                                            </tr>

                                                        <?php

                                                        endif;

                                                    endforeach;

                                                    if ($check === 0) :

                                                        ?>

                                                        <tr>

                                                            <td colspan="3">

                                                                <div class="alert alert-info alert-sm text-white">Vendor service not available.</div>

                                                            </td>

                                                        </tr>

                                                    <?php endif; ?>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                                <div id="BulkyItems" class="tab-pane fade">

                                    <div class="serveBlk">

                                        <div class="icon"><img src="<?= get_site_image_src("services", $buly_items->image, ''); ?>" alt=""></div>

                                        <div class="txt">

                                            <h4><?= $buly_items->name ?></h4>

                                            <p><?= $buly_items->details ?></p>

                                        </div>

                                    </div>

                                    <hr>

                                    <div class="serveBlk">

                                        <div class="txt">

                                            <table>

                                                <tbody>

                                                    <tr>

                                                        <th>Item</th>

                                                        <th>Price</th>

                                                        <th>Select</th>

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

                                                                <td>£<?= $row->price ?></td>

                                                                <td><button type="button" id="<?= $sub_service->id ?>" class="actBtn <?= service_selected_status($services, $sub_service->id) ?> left" data-service="<?= get_parent_service($sub_service->service_id) ?>" data-subservice-id="<?= $sub_service->id ?>" data-price="<?= $row->price ?>" data-name="<?= $sub_service->name ?>"></button></td>

                                                            </tr>

                                                        <?php

                                                        endif;

                                                    endforeach;

                                                    if ($check === 0) :

                                                        ?>

                                                        <tr>

                                                            <td colspan="3">

                                                                <div class="alert alert-info alert-sm text-white">Vendor service not available.</div>

                                                            </td>

                                                        </tr>

                                                    <?php endif; ?>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                                <div id="Deals" class="tab-pane fade">

                                    <div class="serveBlk">

                                        <div class="icon"><img src="<?= get_site_image_src("services", $deals->image, ''); ?>" alt=""></div>

                                        <div class="txt">

                                            <h4><?= $deals->name ?></h4>

                                            <p><?= $deals->details ?></p>

                                        </div>

                                    </div>

                                    <hr>

                                    <div class="serveBlk">

                                        <div class="txt">

                                            <table>

                                                <tbody>

                                                    <tr>

                                                        <th>Name</th>

                                                        <th>Description</th>

                                                        <th>Price</th>

                                                        <th>Select</th>

                                                    </tr>

                                                    <?php

                                                    $check = 0;

                                                    foreach (get_sub_services($deals->id) as $key => $sub_service) :

                                                        $row = sub_service_price($sub_service->id, $vendor_id);

                                                        if ($row->price != '' && $row->price != '0' && $row->price != '0.00') :

                                                            $check++;

                                                    ?>

                                                            <tr id="<?= $sub_service->id ?>">

                                                                <td><?= $sub_service->name ?></td>

                                                                <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>

                                                                <td>£<?= $row->price ?></td>

                                                                <td><button type="button" id="<?= $sub_service->id ?>" class="actBtn <?= service_selected_status($services, $sub_service->id) ?> left" data-service="<?= get_parent_service($sub_service->service_id) ?>" data-subservice-id="<?= $sub_service->id ?>" data-price="<?= $row->price ?>" data-name="<?= $sub_service->name ?>"></button></td>

                                                            </tr>

                                                        <?php

                                                        endif;

                                                    endforeach;

                                                    if ($check === 0) :

                                                        ?>

                                                        <tr>

                                                            <td colspan="4">

                                                                <div class="alert alert-info alert-sm text-white">Vendor service not available.</div>

                                                            </td>

                                                        </tr>

                                                    <?php endif; ?>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="blk smryBlk">

                                <div class="_header">

                                    <h5>Price Estimator</h5>

                                    <div class="bTn hidden">

                                        <button type="reset" class="webBtn labelBtn">Reset</button>

                                    </div>

                                </div>

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis quas libero totam illo hic.</p>

                                <div class="serveBlk">

                                    <table class="sm pb data_list">

                                        <tbody id="selected_services">

                                            <?php

                                            foreach ($services as $index => $id) :

                                                $row = get_sub_service($id, $vendor_id);



                                            ?>

                                                <tr data-id="<?= $row->id ?>">

                                                    <td><?= $row->name ?></td>

                                                    <input type="hidden" name="selected_service[]" value="<?= $row->id ?>" data-price="<?= $row->price ?>">

                                                    <td>

                                                        <div class="qtyBtn">

                                                            <a class="qtyMinus"></a>

                                                            <input type="text" id="qty-<?= $row->id ?>" name="qty[]" value="<?= $qty[$index] ?>" class="qty" data-price="<?= $row->price ?>" data-id="<?= $row->id ?>" readonly>

                                                            <a class="qtyPlus"></a>

                                                        </div>

                                                    </td>

                                                    <td id="price-<?= $row->id ?>">£<?= price_format($row->price * $qty[$index]) ?></td>

                                                    <td><button type="button" class="actBtn delBtn right" data-subservice-id="<?= $row->id ?>"></button></td>

                                                </tr>

                                            <?php endforeach; ?>

                                        </tbody>

                                    </table>

                                </div>

                                <hr>

                                <div class="serveBlk">

                                    <table class="sm pb data_list">

                                        <tbody>

                                            <!-- <tr>

                                                <td colspan="4">

                                                    <hr>

                                                </td>

                                            </tr> -->

                                            <tr>

                                                <td colspan="">Minimum Order:</td>

                                                <td class="semi">£<?= price_format($vendor->mem_charges_min_order) ?></td>

                                            </tr>

                                            <?php

                                            $pickup = 0;

                                            if (isset($selections['pick-or-facility']) && $selections['pick-or-facility'] == 'pickdrop') :

                                                $pickup = price_format($vendor->mem_charges_per_miles * 2);

                                            ?>

                                                <tr>

                                                    <td colspan="">Pickup & Delivery Charges:</td>

                                                    <td class="semi">£<?= price_format($vendor->mem_charges_per_miles * 2) ?></td>

                                                </tr>

                                                <tr>

                                                    <td colspan="" class="color">Free Pickup Service Over:</td>

                                                    <td class="semi">£<?= price_format($vendor->mem_charges_free_over) ?></td>

                                                </tr>

                                            <?php endif; ?>

                                            <tr>

                                                <td colspan="" class="color">Items Total:</td>

                                                <th class="semi" id="items-total" data-total="<?= price_format($estimated_total) ?>">£<?= price_format($estimated_total) ?></th>

                                            </tr>

                                            <tr>

                                                <td colspan="2">

                                                    <?php if (isset($selections['pick-or-facility']) && $selections['pick-or-facility'] == 'pickdrop') : ?>

                                                        <div class="freePickupAndDelivery alert" style="display:none"></div>

                                                    <?php endif; ?>

                                                </td>

                                            </tr>

                                            <tr>

                                                <th colspan="" class="color">Estimated Total:&nbsp;&nbsp;</th>

                                                <th class="semi color" id="estimated-total">£<?= price_format($estimated_total + $pickup) ?></th>

                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                                <br>

                                <div class="servicesMessage alert alert-danger alert-sm text-white" style="display:none"></div>

                                <p class="small">Please note that final price may vary and it will be calculated after the cleaning process.</p>

                            </div>

                        </div>

                        <div class="bTn formBtn text-center">

                            <button type="button" class="webBtn labelBtn prevBtn">Back</button>

                            <button type="button" class="webBtn nextBtn 3-step">Continue</button>

                        </div>

                    </fieldset>

                    <fieldset>

                        <h3 class="heading"><?= $content['step5_heading'] ?></h3>

                        <div class="blk jobBlk">

                            <table class="mainTbl">

                                <tbody>

                                    <tr>

                                        <td>

                                            <table class="sm">

                                                <tbody>

                                                    <tr>

                                                        <th>Customer Name</th>

                                                    </tr>

                                                    <tr>

                                                        <td id="customer-name"><?= $mem_data->mem_fname . ' ' . $mem_data->mem_lname ?></td>

                                                    </tr>

                                                    <tr>

                                                        <td>&nbsp;</td>

                                                    </tr>

                                                    <tr>

                                                        <th>Collection Address</th>

                                                    </tr>

                                                    <tr>

                                                        <td id="collection-address"></td>

                                                    </tr>

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

                                                        <td id="customer-phone"><?= $mem_data->mem_phone ?></td>

                                                    </tr>

                                                    <tr>

                                                        <td>&nbsp;</td>

                                                    </tr>

                                                    <tr>

                                                        <th>Delivery Address</th>

                                                    </tr>

                                                    <tr>

                                                        <td id="delivery-address"></td>

                                                    </tr>

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

                                                        <td id="customer-email"><?= $mem_data->mem_email ?></td>

                                                    </tr>

                                                    <tr>

                                                        <td>&nbsp;</td>

                                                    </tr>

                                                    <tr>

                                                        <th>Customer Notes</th>

                                                    </tr>

                                                    <tr>

                                                        <td></td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                            <hr>

                            <h4>Order Summary</h4>

                            <div class="itemRow flex">

                                <div class="col col1">

                                    <table class="sm pb data_list sumryTblLst">

                                        <thead>

                                            <tr>

                                                <th>Items</th>

                                                <th>Service</th>

                                                <th>Qty</th>

                                                <th>Price</th>

                                            </tr>

                                        </thead>

                                        <tbody id="item_preview_area">

                                            <?php

                                            foreach ($services as $id) :

                                                $row = get_sub_service($id, $vendor_id);



                                            ?>

                                                <tr id="preview-item-<?= $row->id ?>">

                                                    <td><?= $row->name ?></td>

                                                    <td><?= $row->service_name ?></td>

                                                    <td id="item-qty-<?= $row->id ?>">1</td>

                                                    <td class="semi" id="item-price-<?= $row->id ?>">£<?= price_format($row->price) ?></td>

                                                </tr>

                                            <?php endforeach; ?>

                                            <tr>

                                                <td colspan="4">

                                                    <hr>

                                                </td>

                                            </tr>

                                            <?php

                                            $pickup = 0;

                                            if (isset($selections['pick-or-facility']) && $selections['pick-or-facility'] == 'pickdrop') :

                                                $pickup = price_format($vendor->mem_charges_per_miles * 2);

                                            ?>

                                                <tr id="pickup-and-delivery-preview">

                                                    <td colspan="3">Pickup & Delivery Charges:&nbsp;&nbsp;</td>

                                                    <td class="semi">£<?= price_format($vendor->mem_charges_per_miles * 2) ?></td>

                                                </tr>

                                            <?php endif; ?>

                                            <tr>

                                                <td colspan="3" class="color">Items Total:&nbsp;&nbsp;</td>

                                                <th class="semi" id="items-total-preview" data-total="<?= price_format($estimated_total) ?>">£<?= price_format($estimated_total) ?></th>

                                            </tr>

                                            <tr>

                                                <td colspan="4">

                                                    <?php if (isset($selections['pick-or-facility']) && $selections['pick-or-facility'] == 'pickdrop') : ?>

                                                        <div class="freePickupAndDelivery alert" style="display:none"></div>

                                                    <?php endif; ?>

                                                </td>

                                            </tr>

                                            <tr>

                                                <th colspan="3" class="color">Estimated Total:&nbsp;&nbsp;</th>

                                                <th class="semi color" id="estimated-total-preview">£<?= price_format($estimated_total + $pickup) ?></th>

                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                                <div class="col col2">

                                    <table class="sm">

                                        <tbody>

                                            <?php if ($selections['place-order']['use_pickdrop'] == 'on') : ?>

                                                <tr>

                                                    <th>Collection Date:</th>

                                                    <td><?= date_picker_format_date($selections['place-order']['collection_date'], 'D, d M Y') ?></td>

                                                </tr>

                                                <tr>

                                                    <th>Collection Time:</th>

                                                    <td><?= $selections['place-order']['collection_time'] ?></td>

                                                </tr>

                                                <tr>

                                                    <td>&nbsp;</td>

                                                </tr>

                                                <tr>

                                                    <th>Delivery Date:</th>

                                                    <td><?= date_picker_format_date($selections['place-order']['delivery_date'], 'D, d M Y') ?></td>

                                                </tr>

                                                <tr>

                                                    <th>Delivery Time:</th>

                                                    <td><?= $selections['place-order']['delivery_time'] ?></td>

                                                </tr>

                                                <tr>

                                                    <td>&nbsp;</td>

                                                </tr>

                                                <tr>

                                                    <th colspan="2" id="drop-type"></th>

                                                    <input type="hidden" name="drop_type" id="drop-type-value" value="">

                                                </tr>

                                            <?php else : ?>

                                                <tr>

                                                    <td>

                                                        <?php

                                                        foreach (explode('@', $selections['place-order']['dropoffAddress']) as $val) :

                                                            echo $val;

                                                            echo '<br>';

                                                        endforeach;

                                                        ?>

                                                    </td>

                                                    <th></th>

                                                </tr>

                                                <tr>

                                                    <td>&nbsp;</td>

                                                </tr>

                                                <tr>

                                                    <th>Drop Off Date:</th>

                                                    <td><?= date_picker_format_date($selections['place-order']['delivery_date'], 'D, d M Y') ?></td>

                                                </tr>

                                                <tr>

                                                    <th>Drop Off Time:</th>

                                                    <td><?= $selections['place-order']['delivery_time'] ?></td>

                                                </tr>

                                            <?php endif; ?>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                            <!-- <hr> -->

                            <!--<?php if (isset($selections['pick-or-facility']) && $selections['pick-or-facility'] == 'pickdrop') : ?>

                                <div class="freePickupAndDelivery alert alert-info alert-sm text-white" style="display:none"></div>

                            <?php endif; ?>

                            <table>

                                <tbody>

                                    <?php

                                    $pickup = 0;

                                    if (isset($selections['pick-or-facility']) && $selections['pick-or-facility'] == 'pickdrop') :

                                        $pickup = price_format($vendor->mem_charges_per_miles * 2);

                                    ?>

                                        <tr id="pickup-and-delivery-preview">

                                            <td>Pickup & Delivery Charges:&nbsp;&nbsp;</td>

                                            <td>£<?= price_format($vendor->mem_charges_per_miles * 2) ?></td>

                                        </tr>

                                    <?php endif; ?>

                                    <tr>

                                        <td class="color">Items Total:&nbsp;&nbsp;</td>

                                        <th id="items-total-preview" data-total="<?= price_format($estimated_total) ?>">£<?= price_format($estimated_total) ?></th>

                                    </tr>

                                    <tr>

                                        <td>&nbsp;</td>

                                        <td></td>

                                    </tr>

                                    <tr>

                                        <th class="color">Estimated Total:&nbsp;&nbsp;</th>

                                        <th id="estimated-total-preview">£<?= price_format($estimated_total + $pickup) ?></th>

                                    </tr>

                                </tbody>

                            </table> -->

                            <div class="br"></div>

                            <div class="blk">

                                <h4>Payment</h4>

                                <p>All transactions are secure and encrypted.</p>

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

                            </div>

                            <div class="bTn formBtn text-center">

                                <button type="button" class="webBtn labelBtn prevBtn">Back</button>

                                <button type="submit" class="webBtn"><i class="spinner hidden"></i>Place Order</button>

                            </div>

                    </fieldset>

                </form>



                <div class="popup sm" data-popup="signin">

                    <div class="tableDv">

                        <div class="tableCell">

                            <div class="contain">

                                <div class="_inner">

                                    <div class="crosBtn"></div>

                                    <h4>Sign in</h4>

                                    <form action="<?= base_url() . 'index/runTimeSignin' ?>" method="post" id="frmSignin" class="runTimeSignin">

                                        <div class="alertMsg" style="display:none"></div>

                                        <div class="txtGrp">

                                            <label for="email">Email Address</label>

                                            <input type="text" name="email" id="email" class="txtBox">

                                        </div>

                                        <div class="txtGrp pasDv">

                                            <label for="password">Password</label>

                                            <input type="password" name="password" id="password" class="txtBox">

                                            <i class="icon-eye" id="eye"></i>

                                        </div>

                                        <div class="bTn text-center">

                                            <button type="submit" class="webBtn blockBtn"><i class="spinner hidden"></i>Sign in</button>

                                        </div>

                                    </form>

                                </div>

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
            <?php if (isset($selections['pick-or-facility']) && $selections['pick-or-facility'] == 'pickdrop') : ?>

                var pickupDeliveryCharges = '<?= price_format($vendor->mem_charges_per_miles * 2) ?>';

            <?php else : ?>

                var pickupDeliveryCharges = '0.00';

            <?php endif; ?>

            $(function() {

                blk = $('.smryLst > li:first');

                $(".nextBtn").click(function() {

                    currBtn = $(this);

                    let check = true;

                    let errHtml;

                    if (currBtn.hasClass('1-step')) {

                        if ($('#account-info').length > 0) {



                            let mem_fname = $('#mem_fname');

                            let mem_lname = $('#mem_lname');

                            let mem_phone = $('#mem_phone');

                            let mem_email = $('#mem_email');

                            let password = $('#password');

                            let cpassword = $('#cpassword');



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

                            let address = $('#address');



                            if (address.val() == '') {

                                address.addClass('error');

                                check = false;

                            } else {

                                address.removeClass('error');

                            }



                        }



                        if (!check)

                            return false;



                    } else if (currBtn.hasClass('2-step')) {

                        let collection_date = $('#collection_date');

                        let collection_time = $('#collection_time');

                        let collection_from = $('#collection_from');

                        let delivery_date = $('#delivery_date');

                        let delivery_time = $('#delivery_time');

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



                        if (!check)

                            return false;

                    } else if (currBtn.hasClass('3-step')) {

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

                            if (parseFloat(total.toFixed(2)) < parseFloat(minimumOrder)) {

                                $('.servicesMessage').html(`Please order atleast price of £${parseFloat(minimumOrder).toFixed(2)}`);

                                $('.servicesMessage').fadeIn();

                                return false;

                            } else {

                                $('.servicesMessage').fadeOut();

                            }

                        }

                    }

                    if (check) {

                        currStep = $(this).parents("fieldset");

                        nextStep = currStep.next("fieldset");

                        currStep.hide();

                        nextStep.fadeIn();

                        blk = blk.next('li');

                        blk.addClass('current');

                    } else {

                        return false;

                    }

                });

                $(".prevBtn").click(function() {

                    blk.removeClass('current');

                    blk.nextAll().removeClass('current');

                    blk = blk.prev('li');



                    currStep = $(this).parents("fieldset");

                    prevStep = currStep.prev("fieldset");

                    currStep.hide();

                    prevStep.fadeIn();

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

                            }

                        },

                        complete: function() {

                            frmIcon.addClass('hidden');

                        }

                    })

                }

            }



            $(document).on("click", ".actBtn", function() {

                $('.servicesMessage').fadeOut();

                let selectedArea = $('#selected_services');

                let item_preview_area = $('#item_preview_area');

                $('.alertMsg').hide();

                if ($(this).hasClass("addBtn")) {

                    if ($(this).hasClass('left')) {

                        selectedArea.prepend(`<tr data-id="${$(this).data('subservice-id')}">

                                                <td>${$(this).data('name')}</td>

                                                <input type="hidden" name="selected_service[]" value="${$(this).data('subservice-id')}" data-price="${$(this).data('price')}">

                                                <td>

                                                    <div class="qtyBtn">

                                                        <a class="qtyMinus"></a>

                                                        <input type="text" id="qty-${$(this).data('subservice-id')}" name="qty[]" value="1" class="qty" data-price="${$(this).data('price')}" data-id="${$(this).data('subservice-id')}" readonly>

                                                        <a class="qtyPlus"></a>

                                                    </div>

                                                </td>

                                                <td id="price-${$(this).data('subservice-id')}">£${$(this).data('price')}</td>
                                                <td><button type="button" class="actBtn delBtn right" data-subservice-id="${$(this).data('subservice-id')}"></button></td>

                                            </tr>`);

                        item_preview_area.prepend(`<tr id="preview-item-${$(this).data('subservice-id')}">

                                                <td>${$(this).data('name')}</td>

                                                <td>${$(this).data('service')}</td>

                                                <td id="item-qty-${$(this).data('subservice-id')}">1</td>

                                                <td id="item-price-${$(this).data('subservice-id')}">£${$(this).data('price')}</td>

                                            </tr>`);

                    }

                    $(this).removeClass("addBtn").addClass("delBtn");

                } else {

                    if ($(this).hasClass('right')) {

                        $("td button").filter("[data-subservice-id='" + $(this).data('subservice-id') + "']").removeClass('delBtn').addClass('addBtn');

                        $(this).parent().parent().remove();

                    } else {

                        $("tr").filter("[data-id='" + $(this).data('subservice-id') + "']").remove();

                        $('#preview-item-' + $(this).data('subservice-id')).remove();

                        $(this).removeClass("delBtn").addClass("addBtn");

                    }



                }



                calculateEstimatedAmount();

            });



            // This button will increment the value

            $(document).on("click", ".qtyPlus", function(e) {

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

            $(document).on("click", ".qtyMinus", function(e) {

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



            const calculateEstimatedAmount = () => {

                var total = 0;

                let index;

                let qty;

                $('input[name="selected_service[]"]').each(function() {

                    index = $(this).val();

                    total += parseFloat($(this).data('price')) * parseInt($('#qty-' + index).val());

                });

                $('#items-total').text(`£${total.toFixed(2)}`);

                $('#items-total-preview').text(`£${total.toFixed(2)}`);



                let pickupcharges = '<?= price_format($vendor->mem_charges_free_over) ?>';

                if (parseFloat(total.toFixed(2)) > parseFloat(pickupcharges)) {

                    $('.freePickupAndDelivery').html(`Free Pickup & Delivery Service`);

                    $('.freePickupAndDelivery').fadeIn();

                    $('#pickup-and-delivery-preview').hide();

                    $('#estimated-total').text(`£${(parseFloat(total)).toFixed(2)}`);

                    $('#estimated-total-preview').text(`£${(parseFloat(total)).toFixed(2)}`);

                } else {

                    $('.freePickupAndDelivery').fadeOut();

                    $('#pickup-and-delivery-preview').show();

                    $('#estimated-total').text(`£${(parseFloat(total) + parseFloat(pickupDeliveryCharges)).toFixed(2)}`);

                    $('#estimated-total-preview').text(`£${(parseFloat(total) + parseFloat(pickupDeliveryCharges)).toFixed(2)}`);

                }





            }



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



                $('#collection-address').text(`${type}: ${city} - ${address} - ${zip}`);

                $('#delivery-address').text(`${type}: ${city} - ${address} - ${zip}`);

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

                $('#collection-address').text(full_address);

                $('#delivery-address').text(full_address);

                $('#step-address').text(full_address);

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

                    url: base_url + "assets/images/user_marker.png", // url

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
        </script>

    </main>

    <?php $this->load->view('includes/footer'); ?>

</body>



</html>