<!doctype html>
<html>

<head>
    <title>Dashboard — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master'); ?>
    <style type="text/css">
        img[src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png"] {
            display: none;
        }
    </style>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-vendor'); ?>
    <main dash account>
        <?php $this->load->view('includes/sidebar-vendor'); ?>


        <section id="account">
            <div class="contain-fluid">
                <?php echo showMsg(); ?>
                <?php if (empty($mem_data->mem_verified) || $mem_data->mem_verified == 0) : ?>
                    <div id="verify">
                        <div class="inBlk blk">
                            <h3 class="heading">Email Verification</h3>
                            <div id="resndCntnt">
                                <p>Please verify your email address, As you are currently signed in with email : <span id="currently-signin-email" class="color"><strong><?= $mem_data->mem_email ?></strong></span>. We've sent a verify email to your email address. If you don't see the email, check your spam folder. If you didn't get email click on resend email link, or if you want to change email address click link below.</p>
                                <p><a href="javascript:void(0)" id="rsnd-email">Resend Email</a> OR <a href="javascript:void(0)" class="popBtn" data-popup="change-email">Change Email</a>
                                </p>
                            </div>
                            <div class="appLoad hide">
                                <div class="appLoader"><span class="spiner"></span></div>
                            </div>
                            <div class="popup small-popup" data-popup="change-email">
                                <div class="tableDv">
                                    <div class="tableCell">
                                        <div class="contain">
                                            <div class="_inner">
                                                <div class="crosBtn"></div>
                                                <h4>Change your Email</h4>
                                                <form action="<?= base_url() . 'index/change_email' ?>" method="post" autocomplete="off" class="frmAjax" id="frmChangeEmail">
                                                    <div class="alertMsg" style="display:none"></div>
                                                    <div class="txtGrp">
                                                        <label for="email">Email Address</label>
                                                        <input type="email" id="email" name="email" class="txtBox">
                                                    </div>
                                                    <div class="bTn text-center mb-1">
                                                        <button type="submit" class="webBtn"><i class="spinner hidden"></i>Change your Email</button>
                                                    </div>
                                                    <br>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="blk topBlk">
                    <div class="ico" id="dp-image-head"><img src="<?= get_site_image_src("members", $mem_data->mem_image, '300p_'); ?>" alt=""></div>
                    <div class="txt">
                        <h3 id="name-head"><span class="regular">Welcome,</span> Dear, <?= $mem_data->mem_fname . ' ' . $mem_data->mem_lname ?>!<span class="regular">Nice to see you<?= $mem_data->mem_first_time_login == 'no' ? ' again.' : '.' ?></span></h3>
                    </div>
                    <div class="toggleBlk">
                        <div class="switchBtn hidden">
                            <input type="checkbox" name="" id="" checked>
                            <em></em>
                            <small></small>
                        </div>
                    </div>
                </div>
                <?php if (!empty($mem_data->mem_verified) && $mem_data->mem_verified == 1) : ?>
                    <div class="blk">
                        <form action="" method="post" id="vendorProfileSettings" class="frmAjax">
                            <div class="txtGrp upLoadDp">
                                <div class="ico">
                                    <img src="<?= get_site_image_src("members", $mem_data->mem_image, '300p_'); ?>" alt="" id="uploadDpPreview">
                                </div>
                                <div class="text-center">
                                    <button type="button" class="webBtn smBtn uploadImg" data-upload="dp_image" data-text="Change Photo"></button>
                                    <input type="file" name="dp_image" id="dp_image" class="uploadFile" data-upload="dp_image" onchange="PreviewImage();">
                                </div>
                                <div class="noHats text-center">(Please upload your photo)</div>
                            </div>
                            <div class="inside">
                                <div class="alertMsg" style="display:none"></div>
                                <h5>Personal Information</h5>
                                <div class="row formRow">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="mem_fname">First Name</label>
                                            <input type="text" name="mem_fname" id="mem_fname" value="<?= $mem_data->mem_fname ?>" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="mem_lname">Last Name</label>
                                            <input type="text" name="mem_lname" id="mem_lname" value="<?= $mem_data->mem_lname ?>" class="txtBox">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h5>Company Information</h5>
                                <div class="row formRow">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="mem_company_name">Company Name</label>
                                            <input type="text" name="mem_company_name" id="mem_company_name" value="<?= $mem_data->mem_company_name ?>" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="mem_company_email">Contact Email</label>
                                            <input type="text" name="mem_company_email" id="mem_company_email" value="<?= $mem_data->mem_company_email ?>" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="mem_company_phone">Phone Number</label>
                                            <input type="text" name="mem_company_phone" id="mem_company_phone" value="<?= $mem_data->mem_company_phone ?>" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="mem_company_order_email">Order Email</label>
                                            <input type="text" id="mem_company_order_email" name="mem_company_order_email" value="<?= $mem_data->mem_company_order_email ?>" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="mem_company_website">Website URL</label>
                                            <input type="text" name="mem_company_website" id="mem_company_website" value="<?= $mem_data->mem_company_website ?>" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="mem_company_trustpilot">Trustpilot or Google Review URL</label>
                                            <input type="text" name="mem_company_trustpilot" id="mem_company_trustpilot" value="<?= $mem_data->mem_company_trustpilot ?>" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="mem_company_walkin_facility" class="move">Walk in facility?</label>
                                            <select name="mem_company_walkin_facility" id="mem_company_walkin_facility" class="txtBox" onchange="getFacilityHours(this.value)">
                                                <option value="">Select</option>
                                                <?php foreach (yes_no() as $val) : ?>
                                                    <option value="<?= $val ?>" <?= $mem_data->mem_company_walkin_facility == $val ? 'selected' : '' ?>><?= ucfirst($val) ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="facilityAddressAndHours" <?= $mem_data->mem_company_walkin_facility == 'yes' ? '' : 'style="display:none"' ?>>
                                    <hr>
                                    <h5>Business Address</h5>
                                    <div class="row formRow">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                            <div class="txtGrp">
                                                <label for="mem_business_country" class="move">Country</label>
                                                <select name="mem_business_country" id="mem_business_country" class="txtBox" onchange="fetchStates(this.value, 'mem_business_state')">
                                                    <option value="">Select</option>
                                                    <?php foreach (countries() as $country) : ?>
                                                        <option value="<?= $country->id ?>" <?= $mem_data->mem_business_country == $country->id ? 'selected' : '' ?>><?= $country->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                            <div class="txtGrp">
                                                <label for="mem_business_state" class="move">State</label>
                                                <select name="mem_business_state" id="mem_business_state" value="<?= $mem_data->mem_business_state ?>" class="txtBox">
                                                    <option value="">Select</option>
                                                    <?php foreach (states_by_country($mem_data->mem_business_country) as $state) : ?>
                                                        <option value="<?= $state->id ?>" <?= $mem_data->mem_business_state == $state->id ? 'selected' : '' ?>><?= $state->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                            <div class="txtGrp">
                                                <label for="mem_business_city">City</label>
                                                <input type="text" name="mem_business_city" id="mem_business_city" value="<?= $mem_data->mem_business_city ?>" class="txtBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                            <div class="txtGrp">
                                                <label for="mem_business_zip">Zip Code</label>
                                                <input type="text" id="mem_business_zip" name="mem_business_zip" value="<?= $mem_data->mem_business_zip ?>" class="txtBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                            <div class="txtGrp">
                                                <label for="mem_business_address">Address</label>
                                                <input type="text" id="mem_business_address" name="mem_business_address" value="<?= $mem_data->mem_business_address ?>" class="txtBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <div id="calendar">
                                                <div class="tblBlock">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Day</th>
                                                                <th>Opening Time</th>
                                                                <th>Closing Time</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Mon</td>
                                                                <td>
                                                                    <select name="mon_opening" id="mon_opening" class="txtBox" data-day="mon" data-action="opening" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->mon_opening == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->mon_opening == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="mon_closing" id="mon_closing" class="txtBox" data-day="mon" data-action="closing" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->mon_closing == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->mon_closing == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tue</td>
                                                                <td>
                                                                    <select name="tue_opening" id="tue_opening" class="txtBox" data-day="tue" data-action="opening" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->tue_opening == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->tue_opening == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="tue_closing" id="tue_closing" class="txtBox" data-day="tue" data-action="closing" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->tue_closing == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->tue_closing == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Wed</td>
                                                                <td>
                                                                    <select name="wed_opening" id="wed_opening" class="txtBox" data-day="wed" data-action="opening" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->wed_opening == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->wed_opening == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="wed_closing" id="wed_closing" class="txtBox" data-day="wed" data-action="closing" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->wed_closing == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->wed_closing == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Thu</td>
                                                                <td>
                                                                    <select name="thu_opening" id="thu_opening" class="txtBox" data-day="thu" data-action="opening" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->thu_opening == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->thu_opening == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="thu_closing" id="thu_closing" class="txtBox" data-day="thu" data-action="closing" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->thu_closing == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->thu_closing == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Fri</td>
                                                                <td>
                                                                    <select name="fri_opening" id="fri_opening" class="txtBox" data-day="fri" data-action="opening" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->fri_opening == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->fri_opening == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="fri_closing" id="fri_closing" class="txtBox" data-day="fri" data-action="closing" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->fri_closing == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->fri_closing == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sat</td>
                                                                <td>
                                                                    <select name="sat_opening" id="sat_opening" class="txtBox" data-day="sat" data-action="opening" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->sat_opening == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->sat_opening == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="sat_closing" id="sat_closing" class="txtBox" data-day="sat" data-action="closing" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->sat_closing == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->sat_closing == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sun</td>
                                                                <td>
                                                                    <select name="sun_opening" id="sun_opening" class="txtBox" data-day="sun" data-action="opening" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->sun_opening == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->sun_opening == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="sun_closing" id="sun_closing" class="txtBox" data-day="sun" data-action="closing" onchange="valid_open_close(this)">
                                                                        <option value="">Select</option>
                                                                        <option value="closed" <?= $facility_hours->sun_closing == 'closed' ? 'selected' : '' ?>>Closed</option>
                                                                        <?php foreach (halfHourTimes() as $key => $value) : ?>
                                                                            <option value="<?= $value ?>" <?= $facility_hours->sun_closing == $value ? 'selected' : '' ?>><?= $value ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <hr> -->
                                <div class="br"></div>
                                <h5>Pickup & Collection Area</h5>
                                <div class="row formRow">
                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 col-xx-6">
                                        <div class="txtGrp">
                                            <label for="mem_company_pickdrop" class="move">Provide pickup & drop off services?</label>
                                            <select name="mem_company_pickdrop" id="mem_company_pickdrop" class="txtBox" onchange="getPickupDetail(this.value)">
                                                <option value="">Select</option>
                                                <?php foreach (yes_no() as $val) : ?>
                                                    <option value="<?= $val ?>" <?= $mem_data->mem_company_pickdrop == $val ? 'selected' : '' ?>><?= ucfirst($val) ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="pickupdetails" <?= $mem_data->mem_company_pickdrop == 'yes' ? '' : 'style="display:none"' ?>>
                                    <div class="row formRow">
                                        <!-- <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 col-xx-6">
                                    <div class="txtGrp">
                                        <label for="mem_company_pickdrop" class="move">Provide pickup & drop off services?</label>
                                        <select name="mem_company_pickdrop" id="mem_company_pickdrop" class="txtBox"  onchange="getPickupDetail(this.value)">
                                            <option value="">Select</option>
                                            <?php foreach (yes_no() as $val) : ?>
                                                <option value="<?= $val ?>" <?= $mem_data->mem_company_pickdrop == $val ? 'selected' : '' ?>><?= ucfirst($val) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div> -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="pickup_zip">Zip Code</label>
                                                <input type="text" id="pickup_zip" name="pickup_zip" value="<?= $mem_data->pickup_zip ?>" class="txtBox" onkeyup="getLocationAndInitMap(this.value)">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-xx-12">
                                            <div class="txtGrp">
                                                <label for="mem_travel_radius">Travel Distance?</label>
                                                <input type="hidden" name="mem_map_lat" id="mem_map_lat" value="<?= $mem_data->mem_map_lat ?>">
                                                <input type="hidden" name="mem_map_lng" id="mem_map_lng" value="<?= $mem_data->mem_map_lng ?>">
                                                <input type="text" id="mem_travel_radius" name="mem_travel_radius" value="<?= $mem_data->mem_travel_radius ?>" class="txtBox" onkeyup="travel_distance(this.value)">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                            <div id="map-canvas">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5>Charges Information</h5>
                                    <div class="row formRow">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp">
                                                <label for="mem_charges_per_miles">Charges per mile for pickup & drop off?</label>
                                                <input type="text" name="mem_charges_per_miles" id="mem_charges_per_miles" value="<?= $mem_data->mem_charges_per_miles ?>" class="txtBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp">
                                                <label for="mem_charges_free_over">Free for over</label>
                                                <input type="text" name="mem_charges_free_over" id="mem_charges_free_over" value="<?= $mem_data->mem_charges_free_over ?>" class="txtBox">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                            <div class="txtGrp">
                                                <label for="mem_charges_min_order">Minimum order value?</label>
                                                <input type="text" name="mem_charges_min_order" id="mem_charges_min_order" value="<?= $mem_data->mem_charges_min_order ?>" class="txtBox">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 hidden">
                                            <div class="txtGrp">
                                                <label for="mem_show_cancellation" class="move">Show cancellation policy?</label>
                                                <select name="mem_show_cancellation" id="mem_show_cancellation" class="txtBox">
                                                    <option value="">Select</option>
                                                    <?php foreach (yes_no() as $val) : ?>
                                                        <option value="<?= $val ?>" <?= $mem_data->mem_show_cancellation == $val ? 'selected' : '' ?>><?= ucfirst($val) ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="bTn formBtn text-center">
                                    <button type="submit" class="webBtn submit" title="Please make any change to enable save button."><i class="spinner hidden"></i>Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endif; ?>
                <div class="blk">
                    <div class="_header">
                        <h4>Change Password</h4>
                        <div class="info">
                            <strong><em>Strong Password</em></strong>
                            <div class="infoIn ckEditor">
                                <p>Your password must contain the following:</p>
                                <ol>
                                    <li>At least 8 characters in length (a strong password has at least 8 characters)</li>
                                    <li>At least 1 capital letter, 1 small letter, 1 number and 1 symbol.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <form action="<?= base_url() ?>index/change_password" method="post" id="changePassword" class="frmAjax">
                        <div class="alertMsg" style="display:none"></div>
                        <div class="inside">
                            <div class="row formRow">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp pasDv">
                                        <label for="pswd">Current password</label>
                                        <input type="password" name="pswd" id="pswd" class="txtBox">
                                        <i class="icon-eye" id="eye"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp pasDv">
                                        <label for="npswd">New password</label>
                                        <input type="password" name="npswd" id="npswd" class="txtBox pr-password">
                                        <i class="icon-eye" id="eye"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp pasDv">
                                        <label for="cpswd">Confirm new password</label>
                                        <input type="password" name="cpswd" id="cpswd" class="txtBox">
                                        <i class="icon-eye" id="eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="bTn formBtn text-center">
                                <button type="submit" class="webBtn"><i class="spinner hidden"></i>Change</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- account -->

        <script>
            function PreviewImage() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("dp_image").files[0]);

                oFReader.onload = function(oFREvent) {
                    document.getElementById("uploadDpPreview").src = oFREvent.target.result;
                };
            };

            const getFacilityHours = value => {
                if (value == 'no' || value == '')
                    $('#facilityAddressAndHours').hide();
                else
                    $('#facilityAddressAndHours').show();
            }

            const valid_open_close = obj => {
                obj = $(obj);
                let day = obj.data('day');
                let open_close = obj.data('action');

                if (open_close == 'opening') {
                    value = $('#' + day + '_' + open_close).val();
                    if (value == 'closed') {
                        $('#' + day + '_closing option[value="closed"]').prop('selected', true);
                    }
                } else {
                    value = $('#' + day + '_' + open_close).val();
                    if (value == 'closed') {
                        $('#' + day + '_opening option[value="closed"]').prop('selected', true);
                    }
                }

                if (open_close == 'opening') {
                    value = $('#' + day + '_' + open_close).val();
                    if (value == '') {
                        $('#' + day + '_closing option[value=""]').prop('selected', true);
                    }
                } else {
                    value = $('#' + day + '_' + open_close).val();
                    if (value == '') {
                        $('#' + day + '_opening option[value=""]').prop('selected', true);
                    }
                }

                if (open_close == 'opening') {
                    value = $('#' + day + '_' + open_close).val();
                    if (value != '' && value != 'closed') {
                        if ($('#' + day + '_closing').val() == 'closed')
                            $('#' + day + '_closing option[value=""]').prop('selected', true);
                    }
                } else {
                    value = $('#' + day + '_' + open_close).val();
                    if (value != '' && value != 'closed') {
                        if ($('#' + day + '_opening').val() == 'closed')
                            $('#' + day + '_opening option[value=""]').prop('selected', true);
                    }
                }

            }

            $(function() {
                $(document).on('click', '#rsnd-email', function(e) {
                    e.preventDefault();

                    var btn = $(this);
                    if (btn.data("disabled"))
                        return false;

                    $("#resndCntnt").addClass('hide');
                    $('.appLoad').removeClass('hide');

                    btn.data("disabled", "disabled");
                    $.ajax({
                        url: base_url + 'resend-email',
                        data: {
                            'cmd': 'resend'
                        },
                        dataType: 'JSON',
                        method: 'POST',
                        success: function(rs) {
                            $('#resndCntnt').find('.alertMsg').remove().end().append(rs.msg);
                        },
                        complete: function() {
                            btn.removeData("disabled");
                            setTimeout(function() {
                                $('.appLoad').addClass('hide');
                                $('#resndCntnt').removeClass('hide');
                            }, 1500)
                        }
                    })
                })
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmqmsf3pVEVUoGAmwerePWzjUClvYUtwM&libraries=geometry,places&ext=.js"></script>
    <script>
        var map, bounds, startLat = "<?= $mem_data->mem_map_lat == '' ? '51.509865' : $mem_data->mem_map_lat; ?>",
            startLng = "<?= $mem_data->mem_map_lng == '' ? '-0.118092' : $mem_data->mem_map_lng; ?>";

        const getLocationAndInitMap = value => {
            value = $.trim(value);
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
                    console.log()
                    $('#mem_map_lat').val(latitude);
                    $('#mem_map_lng').val(longitude);
                    startLat = latitude;
                    startLng = longitude;
                    startLatLng = new google.maps.LatLng(startLat, startLng);
                    init();
                } else {
                    alert("Request failed.")
                }
            });
        }

        const travel_distance = miles => {
            miles = $.trim(miles);
            let meters = getMeters(miles);
            if (!isInt(miles) || miles == 0 || miles.length == 0)
                return false;

            radiusCircle = true;
            radiusMeters = meters;
            init();
        }

        function getMeters(i) {
            return i * 1609.344;
        }

        function isInt(value) {
            return !isNaN(value) &&
                parseInt(Number(value)) == value &&
                !isNaN(parseInt(value, 10));
        }

        var markers = [];
        var infowindows = [];
        var haveGeoLocation = false;
        var radiusCircle = <?= $mem_data->mem_travel_radius == '0' ? 'false' : 'true' ?>;
        var radiusMeters = getMeters(<?= $mem_data->mem_travel_radius ?>);
        var startLatLng = new google.maps.LatLng(startLat, startLng);
        var image = {
            url: base_url + "assets/images/marker.png", // url
            scaledSize: new google.maps.Size(40, 40), // scaled size
            origin: new google.maps.Point(0, 0), // origin
            anchor: new google.maps.Point(25, 50) // anchor
        };

        function init() {
            map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: startLatLng,
                zoom: 10
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

            if (radiusCircle) {
                // setMarkers(map, locations);
                var marker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(startLat, startLng),
                    title: 'Some location'
                });

                // Add circle overlay and bind to marker
                var circle = new google.maps.Circle({
                    map: map,
                    radius: radiusMeters, // 10 miles in metres
                    fillColor: '#efeb7e'
                });
                circle.bindTo('center', marker, 'position');
            }
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

        google.maps.event.addDomListener(window, 'load', init);

        const getPickupDetail = value => {
            if (value == 'no' || value == '')
                document.getElementById('pickupdetails').style.display = "none";
            else
                document.getElementById('pickupdetails').style.display = "block";
        }
    </script>


</body>

</html>