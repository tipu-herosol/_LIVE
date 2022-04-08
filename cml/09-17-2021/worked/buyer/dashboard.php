<!doctype html>
<html>

<head>
    <title>Dashboard — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-buyer'); ?>
    <main dash account>
        <?php $this->load->view('includes/sidebar-buyer'); ?>


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
                    <div class="ico" id="dp-image-head"><img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt=""></div>
                    <div class="txt">
                        <h3 id="name-head"><span class="regular">Welcome,</span> Dear, <?= $mem_data->mem_fname . ' ' . $mem_data->mem_lname ?>!<span class="regular">Nice to see you<?= $mem_data->mem_first_time_login == 'no' ? ' again.' : '.' ?></span></h3>
                    </div>
                    <div class="bTn">
                        <a href="<?= base_url() ?>buyer/orders" class="webBtn mdBtn simpleBtn">View Orders</a>
                    </div>
                </div>
                <?php if (!empty($mem_data->mem_verified) && $mem_data->mem_verified == 1) : ?>
                    <div class="blk">
                        <form action="" method="post" id="buyerProfileSettings" class="frmAjax">
                            <div class="alertMsg" style="display:none"></div>
                            <div class="txtGrp upLoadDp">
                                <div class="ico">
                                    <img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt="" id="uploadDpPreview">
                                </div>
                                <div class="text-center">
                                    <button type="button" class="webBtn smBtn uploadImg" data-upload="dp_image" data-text="Change Photo"></button>
                                    <input type="file" name="dp_image" id="dp_image" class="uploadFile" data-upload="dp_image" onchange="PreviewImage();">
                                </div>
                                <div class="noHats text-center">(Please upload your photo)</div>
                            </div>
                            <div class="inside">
                                <div class="formBlkOut">
                                    <div class="formBlk">
                                        <h4 class="subheading">Personal Information</h4>
                                        <div class="row formRow">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                <div class="txtGrp">
                                                    <label for="mem_fname">First Name</label>
                                                    <input type="text" name="mem_fname" id="mem_fname" value="<?= $mem_data->mem_fname ?>" class="txtBox">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                <div class="txtGrp">
                                                    <label for="mem_lname">Last Name</label>
                                                    <input type="text" name="mem_lname" id="mem_lname" value="<?= $mem_data->mem_lname ?>" class="txtBox">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                <div class="txtGrp">
                                                    <label for="mem_phone">Phone Number</label>
                                                    <input type="text" name="mem_phone" id="mem_phone" value="<?= $mem_data->mem_phone ?>" class="txtBox">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                <div class="txtGrp">
                                                    <label for="mem_email">Email Address</label>
                                                    <input type="text" id="mem_email" name="mem_email" value="<?= $mem_data->mem_email ?>" class="txtBox" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                <div class="txtGrp">
                                                    <label for="mem_dob">Date of birth</label>
                                                    <input type="text" name="mem_dob" id="mem_dob" value="<?= empty($mem_data->mem_dob) ? NULL : format_date($mem_data->mem_dob, 'm-d-Y') ?>" class="txtBox datepicker">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                <div class="txtGrp">
                                                    <label for="mem_sex" class="move">Gender</label>
                                                    <select name="mem_sex" id="mem_sex" class="txtBox">
                                                        <option value="">Select</option>
                                                        <?php foreach (gender() as $val) : ?>
                                                            <option value="<?= $val ?>" <?= $mem_data->mem_sex == $val ? 'selected' : '' ?>><?= ucfirst($val) ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formBlk">
                                        <div class="hotel-address-main txtGrp">
                                            <h4 class="subheading">Hotel Address Information</h4>
                                            <div class="row formRow">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <label for="mem_hotel_country" class="move">Country</label>
                                                        <select name="mem_hotel_country" id="mem_hotel_country" class="txtBox" onchange="fetchStates(this.value, 'mem_state')">
                                                            <option value="">Select</option>
                                                            <?php foreach (countries() as $country) : ?>
                                                                <?php if (in_array($country->name, ['United Kingdom'])) { ?>
                                                                    <option value="<?= $country->id ?>" <?= $mem_data->mem_hotel_country == $country->id ? 'selected' : '' ?>><?= $country->name ?></option>
                                                            <?php }
                                                            endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <label for="mem_hotel_state" class="move">State</label>
                                                        <select name="mem_hotel_state" id="mem_hotel_state" class="txtBox">
                                                            <option value="">Select</option>
                                                            <?php foreach (states_by_country($mem_data->mem_country) as $state) : ?>
                                                                <option value="<?= $state->id ?>" <?= $mem_data->mem_hotel_state == $state->id ? 'selected' : '' ?>><?= $state->name ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <label for="mem_hotel_city">City</label>
                                                        <input type="text" name="mem_hotel_city" id="mem_hotel_city" value="<?= $mem_data->mem_hotel_city ?>" class="txtBox">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <input type="hidden" name="mem_hotel_map_lat" id="mem_hotel_map_lat" value="<?= $mem_data->mem_hotel_map_lat ?>">
                                                        <input type="hidden" name="mem_hotel_map_lng" id="mem_hotel_map_lng" value="<?= $mem_data->mem_hotel_map_lng ?>">
                                                        <label for="mem_hotel_zip">Zip Code</label>
                                                        <input type="text" id="mem_hotel_zip" name="mem_hotel_zip" data-type="hotel" data-way="1" value="<?= $mem_data->mem_hotel_zip ?>" class="txtBox" onkeyup="getLocationAndInitMap(this)">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                                    <div class="txtGrp">
                                                        <label for="mem_hotel_address">Address</label>
                                                        <input type="text" id="mem_hotel_address" name="mem_hotel_address" value="<?= $mem_data->mem_hotel_address ?>" class="txtBox">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="office-address-main txtGrp">
                                            <h4 class="subheading">Office Address Information</h4>
                                            <div class="row formRow">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <label for="mem_business_country" class="move">Country</label>
                                                        <select name="mem_business_country" id="mem_business_country" class="txtBox" onchange="fetchStates(this.value, 'mem_state')">
                                                            <option value="">Select</option>
                                                            <?php foreach (countries() as $country) : ?>
                                                                <?php if (in_array($country->name, ['United Kingdom'])) { ?>
                                                                    <option value="<?= $country->id ?>" <?= $mem_data->mem_business_country == $country->id ? 'selected' : '' ?>><?= $country->name ?></option>
                                                            <?php }
                                                            endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <label for="mem_business_state" class="move">State</label>
                                                        <select name="mem_business_state" id="mem_business_state" class="txtBox">
                                                            <option value="">Select</option>
                                                            <?php foreach (states_by_country($mem_data->mem_country) as $state) : ?>
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
                                                        <input type="hidden" name="mem_business_map_lat" id="mem_business_map_lat" value="<?= $mem_data->mem_business_map_lat ?>">
                                                        <input type="hidden" name="mem_business_map_lng" id="mem_business_map_lng" value="<?= $mem_data->mem_business_map_lng ?>">
                                                        <label for="mem_business_zip">Zip Code</label>
                                                        <input type="text" id="mem_business_zip" name="mem_business_zip" data-type="office" data-way="1" value="<?= $mem_data->mem_business_zip ?>" class="txtBox" onkeyup="getLocationAndInitMap(this)">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                                    <div class="txtGrp">
                                                        <label for="mem_business_address">Address</label>
                                                        <input type="text" id="mem_business_address" name="mem_business_address" value="<?= $mem_data->mem_business_address ?>" class="txtBox">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-address-main txtGrp show">
                                            <h4 class="subheading">Home Address Information</h4>
                                            <div class="row formRow">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <label for="mem_country" class="move">Country</label>
                                                        <select name="mem_country" id="mem_country" class="txtBox" onchange="fetchStates(this.value, 'mem_state')">
                                                            <option value="">Select</option>
                                                            <?php foreach (countries() as $country) : ?>
                                                                <?php if (in_array($country->name, ['United Kingdom'])) { ?>
                                                                    <option value="<?= $country->id ?>" <?= $mem_data->mem_country == $country->id ? 'selected' : '' ?>><?= $country->name ?></option>
                                                            <?php }
                                                            endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <label for="mem_state" class="move">State</label>
                                                        <select name="mem_state" id="mem_state" class="txtBox">
                                                            <option value="">Select</option>
                                                            <?php foreach (states_by_country($mem_data->mem_country) as $state) : ?>
                                                                <option value="<?= $state->id ?>" <?= $mem_data->mem_state == $state->id ? 'selected' : '' ?>><?= $state->name ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <label for="mem_city">City</label>
                                                        <input type="text" name="mem_city" id="mem_city" value="<?= $mem_data->mem_city ?>" class="txtBox">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                                    <div class="txtGrp">
                                                        <input type="hidden" name="mem_map_lat" id="mem_map_lat" value="<?= $mem_data->mem_map_lat ?>">
                                                        <input type="hidden" name="mem_map_lng" id="mem_map_lng" value="<?= $mem_data->mem_map_lng ?>">
                                                        <label for="mem_zip">Zip Code</label>
                                                        <input type="text" id="mem_zip" name="mem_zip" data-type="home" data-way="1" value="<?= $mem_data->mem_zip ?>" class="txtBox" onkeyup="getLocationAndInitMap(this)">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                                    <div class="txtGrp">
                                                        <label for="mem_address">Address</label>
                                                        <input type="text" id="mem_address" name="mem_address" value="<?= $mem_data->mem_address ?>" class="txtBox">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formRow row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                                <div class="txtGrp">
                                                    <ul class="selectLst flex">
                                                        <li>
                                                            <div class="radioBtn" data-type="home" data-val="<?= $mem_data->mem_zip ?>" onclick="getLocationAndInitMap(this)">
                                                                <input type="radio" name="mem_address_type" id="address_type_home" checked <?php if ($mem_data->mem_address_type == 'home' || $mem_data->mem_address_type == '') {
                                                                                                                                                echo '';
                                                                                                                                            } ?> value="home">
                                                                <div class="inner">
                                                                    <div class="icon"><img src="<?= base_url() ?>assets/images/vector-home.svg" alt=""></div>
                                                                    <div class="txt">
                                                                        <p>Home</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="radioBtn" data-type="office" data-val="<?= $mem_data->mem_business_zip ?>" onclick="getLocationAndInitMap(this)">
                                                                <input type="radio" name="mem_address_type" id="address_type_office" value="office" <?php if ($mem_data->mem_address_type == 'office') {
                                                                                                                                                        echo '';
                                                                                                                                                    } ?>>
                                                                <div class="inner">
                                                                    <div class="icon"><img src="<?= base_url() ?>assets/images/vector-briefcase.svg" alt=""></div>
                                                                    <div class="txt">
                                                                        <p>Office</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="radioBtn" data-type="hotel" data-zip="<?= $mem_data->mem_zip ?>" data-val="<?= $mem_data->mem_hotel_zip ?>" onclick="getLocationAndInitMap(this)">
                                                                <input type="radio" name="mem_address_type" id="address_type_hotel" value="hotel" <?php if ($mem_data->mem_address_type == 'hotel') {
                                                                                                                                                        echo '';
                                                                                                                                                    } ?>>
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
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                                <div id="map-canvas">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bTn formBtn text-center">
                                    <button type="submit" class="webBtn"><i class="spinner hidden"></i>Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endif; ?>
                <div class="blk">
                    <div class="_header">
                        <h4 class="subheading">Change Password</h4>
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


        $(document).on("click", ".radioBtn", function(e) {
            var myVal = $(this).data('type');

            if (myVal == 'home') {
                $('.home-address-main').addClass('show');
                $('.office-address-main').removeClass('show');
                $('.hotel-address-main').removeClass('show');
            } else if (myVal == 'office') {
                $('.office-address-main').addClass('show');
                $('.home-address-main').removeClass('show');
                $('.hotel-address-main').removeClass('show');
            } else if (myVal == 'hotel') {
                $('.hotel-address-main').addClass('show');
                $('.office-address-main').removeClass('show');
                $('.home-address-main').removeClass('show');
            }
        });

        const getLocationAndInitMap = myThis => {

            var way = $(myThis).data('way');
            if (way == 1) {
                var value = $(myThis).val();
            } else {
                var value = $(myThis).data('val');
            }
            value = $.trim(value);
            var myType = $(myThis).data('type');
            // console.log('xx');
            // console.log(myType);
            // console.log(value);
            if (value.length == 0)
                return false;

            if (value == 'null') {
                $('#map-canvas').hide();
                return false;
            } else {
                $('#map-canvas').show();
            }

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
                    if (myType == 'hotel') {
                        $('#mem_hotel_map_lat').val(latitude);
                        $('#mem_hotel_map_lng').val(longitude);
                    } else if (myType == 'office') {
                        $('#mem_business_map_lat').val(latitude);
                        $('#mem_business_map_lng').val(longitude);
                    } else if (myType == 'home') {
                        $('#mem_map_lat').val(latitude);
                        $('#mem_map_lng').val(longitude);
                    }
                    startLat = latitude;
                    startLng = longitude;
                    startLatLng = new google.maps.LatLng(startLat, startLng);
                    init();
                } else {
                    console.log('err');
                    // $(myThis).css('background-color':'red');
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
                zoom: 14
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
    </script>
</body>

</html>