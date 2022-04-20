<!doctype html>
<html>

<head>
    <title><?= $page_title ?> - <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page" class="transparent">
    <?php $this->load->view('includes/header'); ?>
    <main common typical about>
        <section id="sBanner">

        </section>
        <!-- sBanner -->
        <section id="property_form" class="cmnSec">
            <div class="contain text-center">
                <div class="content">
                    <h1 class="heading"><?= $content->section_heading ?></h1>
                    <p><?= $content->section_desc ?></p>
                </div>
                <form action="" method="post" class="new_design frmProperty" id="frmProperty">
                    <!--<h3 class="heading"><?= $content->section_form_heading ?></h3>-->
                    <div class="row formRow">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <label for="">Search property or any you need here</label>
                                <input type="text" placeholder="" name="address" id="address" class="txtBox">
                                <button type="submit" class="s_btn" id="search_btn"><i class="fi-search"></i></button>
                                <ul class="dropCnt dropLst" id="search_results">
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 hide" id="address_empty">
                            <div class="txtGrp pera">
                                <h5 class="regular">You must select an address</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xx-6 half_wide">
                            <div class="txtGrp">
                                <label for="">Floor number</label>
                                <input type="text" name="floor_number" id="floor_number" class="txtBox">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xx-6 half_wide">
                            <div class="txtGrp">
                                <label for="">Unit number</label>
                                <input type="text" name="unit_number" id="unit_number" class="txtBox">
                            </div>
                        </div>
                        <?php $types = getPropertyTypes(); ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <!-- <label for="">Property type</label> -->
                                <select name="service_request" id="service_request" class="txtBox" data-live-search="true">
                                    <option value="" selected="selected">Property type</option>
                                    <?php foreach ($types as $type) { ?>
                                        <option value="<?= $type->type ?>"> <?= $type->type ?> </option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 flex grid_flex_blk">
                            <div class="txtGrp flex_1">
                                <label for="">Floor area</label>
                                <input type="text" name="floor_area" id="floor_area" class="txtBox">
                            </div>
                            <div class="bTn area_main">
                                <label class="area_btn">Sqft <input type="radio" name="floor_param" class="hidden" value="Sqft" /></label>
                                <label class="area_btn area_active">M2 <input type="radio" name="floor_param" class="hidden" value="M2" checked /></label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 flex grid_flex_blk">
                            <div class="txtGrp flex_1">
                                <label for="">Land area (optional)</label>
                                <input type="text" name="land_area" id="land_area" class="txtBox">
                            </div>
                            <div class="bTn area_main">
                                <label class="area_btn">Sqft <input type="radio" name="land_param" class="hidden" value="Sqft" /></label>
                                <label class="area_btn area_active">M2 <input type="radio" name="land_param" class="hidden" value="M2" checked /></label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <h4 class="text-left center_text_sm big_txt_fnt"><?= $content->purpose_question ?></h4>
                            <div class="bTn btn_main flex_2_blk">
                                <label class="area_btn">Sale <input type="radio" name="purpose_valuation" class="hidden" value="Sale" /></label>
                                <label class="area_btn area_active">Purchase <input type="radio" name="purpose_valuation" class="hidden" value="Purchase" checked /></label>
                                <label class="area_btn">Refinance <input type="radio" name="purpose_valuation" class="hidden" value="Refinance" /></label>
                                <label class="area_btn">CPF Withdrawal <input type="radio" name="purpose_valuation" class="hidden" value="CPF Withdrawal" /></label>
                                <label class="area_btn">Transfer of Shares <input type="radio" name="purpose_valuation" class="hidden" value="Transfer of Shares" /></label>
                                <label class="area_btn">Audit/Financial Reporting <input type="radio" name="purpose_valuation" class="hidden" value="Audit/Financial Reporting" /></label>
                                <label class="area_btn">Stamp Duty <input type="radio" name="purpose_valuation" class="hidden" value="Stamp Duty" /></label>
                                <label class="area_btn">Estate Duty <input type="radio" name="purpose_valuation" class="hidden" value="Estate Duty" /></label>
                            </div>
                        </div>
                        <div class="row_">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                <div class="txtGrp">
                                    <h4 class="text-left big_txt_top">What do you expect it to be worth?</h4>
                                    <input type="text" name="worth_expectation" id="worth_expectation" class="txtBox">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="text_">
                            <h3><?= $content->details_heading ?></h3>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="txtBox">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                <label for="phone" class="not_move">Phone</label>
                                <input type="tel" name="phone" id="phone" class="txtBox">
                                <!-- <select name="phone" id="phone" class="txtBox selectpicker countrypicker" data-flag="true" data-countries="AT,BE,BG,HR,CY,CZ,DK,EE,FI,FR,DE,GR,HU,IE,IT,LV,LT,LU,MT,NL,PL,PT,RO,SK,SI,ES,SE"></select> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" class="txtBox">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                <label for="company">Company (optional)</label>
                                <input type="text" name="company" id="company" class="txtBox">
                            </div>
                        </div>
                        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <label for="">Comments</label>
                                <textarea name="" id="" class="txtBox"></textarea>
                            </div>
                        </div> -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="txtGrp">
                                <div class="lblBtn">
                                    <input type="checkbox" name="remember" id="remember" checked="">
                                    <label for="remember" class="popBtn" data-popup="terms"><?= $content->agree_heading ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="text_">
                                <h3><?= $content->notification_heading ?></h3>
                            </div>
                            <div class="flex">


                                <div class="lbl_mini_col">
                                    <div class="lblBtn">
                                        <label for="notification2">
                                            <img src="https://pinnacle.sg/assets/images/2_icon.png">
                                        </label>
                                        <input type="checkbox" name="notification[]" id="notification2" checked="" value="Email">

                                    </div>
                                </div>

                                <div class="lbl_mini_col">
                                    <div class="lblBtn">
                                        <label for="notification2">
                                            <img src="https://pinnacle.sg/assets/images/3_icon.png">
                                        </label>
                                        <input type="checkbox" name="notification[]" id="notification2" checked="" value="Message">

                                    </div>
                                </div>
                            </div>
                            <div class="small_mini_head_lbl text-center">
                                <p><?= $content->form_note ?>r</p>
                            </div>
                        </div>
                    </div>
                    <div class="alertMsg"></div>
                    <div class="bTn formBtn frm_full_wide_btn"><button type="submit" class="webBtn"><i class="spinner hidden"></i> <?= $content->form_btn_title ?></button></div>
                </form>
            </div>
            <div class="popup big-popup" data-popup="terms">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="contain">
                            <div class="_inner">
                                <div class="crosBtn"></div>
                                <h2 style="margin-bottom:10px">Terms & Conditions</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet earum dolor quasi, ex consequuntur qui maiores, sunt quae quaerat temporibus ipsum modi illo beatae nemo minus eligendi, numquam distinctio odio?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores corporis a dolore eligendi, culpa voluptatem odio labore enim perferendis cupiditate laboriosam fuga temporibus magni minima, voluptates molestias nisi deserunt asperiores.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus unde nihil maiores corrupti nisi qui molestias veniam aut ipsa. Nobis saepe praesentium cupiditate unde. Pariatur, excepturi. Reprehenderit molestiae quod tempore.</p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias distinctio debitis natus cupiditate, nesciunt optio placeat illum iusto sunt eum commodi at, inventore quibusdam? Quidem mollitia aut iste alias officia?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact -->
    </main>
    <?php $this->load->view('includes/footer'); ?>
    <script src="<?= base_url('assets/') ?>js/intlTelInput.js?v=<?= $site_settings->site_version ?>"></script>
    <script>
        $(window).on("load", function() {
            // init plugin
            var input = document.querySelector("#phone");
            window.intlTelInput(input, {
                initialCountry: "sg",
                preferredCountries: ["sg"],
                onlyCountries: ["sg", "my", "id", "cn", "us"],
                utilsScript: "<?= base_url('assets/') ?>js/intlTelInput.utils.js?v=<?= $site_settings->site_version ?>",
            });
        })
    </script>
</body>

</html>