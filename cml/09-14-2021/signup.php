<!doctype html>

<html>



<head>

    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>

    <?php $this->load->view('includes/site-master'); ?>

</head>



<body id="home-page">

    <?php $this->load->view('includes/header'); ?>

    <main logon>





        <section id="logon">

            <div class="contain">

                <div class="flexRow flex">

                    <div class="col col1">

                        <div class="content">

                            <h2 class="heading"><?= $content['heading'] ?></h2>

                            <p><?= $content['detail'] ?></p>

                        </div>

                        <div class="image image2"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image1']) ?>" alt=""></div>

                    </div>

                    <div class="col col2">

                        <div class="logBlk">

                            <form action="" method="post" id="frmSignup" class="frmAjax">

                                <h2 class="heading"> <?=$as == 'Vendor' ?  $content['form_heading2'] :  $content['form_heading1'] ;?></h2>

                                <div class="alertMsg" style="display:none"></div>

                                <h6>First Name</h6>

                                <div class="txtGrp">

                                    <label for="mem_fname">eg: John</label>

                                    <input type="text" name="mem_fname" id="mem_fname" class="txtBox">

                                </div>

                                <h6>Last Name</h6>

                                <div class="txtGrp">

                                    <label for="mem_lname">eg: Wick</label>

                                    <input type="text" name="mem_lname" id="mem_lname" class="txtBox">

                                </div>

                                <h6>Email Address</h6>

                                <div class="txtGrp">

                                    <label for="mem_email">eg: sample@gmail.com</label>

                                    <input type="text" name="mem_email" id="mem_email" class="txtBox">

                                </div>

                                <h6>Password</h6>

                                <div class="txtGrp pasDv">

                                    <label for="password">password</label>

                                    <input type="password" name="password" id="password" class="txtBox pr-password">

                                    <i class="icon-eye" id="eye"></i>

                                </div>

                                <h6>Confirm Password</h6>

                                <div class="txtGrp pasDv">

                                    <label for="cpassword">confirm password</label>

                                    <input type="password" name="cpassword" id="cpassword" class="txtBox">

                                    <i class="icon-eye" id="eye"></i>

                                </div>

                                <div class="txtGrp flex">

                                    <div class="lblBtn">

                                        <input type="checkbox" name="confirm" id="confirm">

                                        <label for="confirm">I agree to CML's

                                            <a target="_blank" href="<?= base_url() ?>terms-conditions">Terms & Conditions</a>

                                            and

                                            <a target="_blank" href="<?= base_url() ?>privacy-policy">Privacy Policy.</a>

                                        </label>

                                    </div>

                                    <span id="confirm-error" class="validation-error"></span>

                                </div>

                                <div class="bTn text-center">

                                    <button type="submit" class="webBtn lgBtn blockBtn"><i class="spinner hidden"></i>Sign up</button>

                                </div>

                                <div class="haveAccount text-center">

                                    <span>Already have an account?</span>

                                    <a href="<?= base_url() ?>signin">Sign in</a>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- logon -->





        <!-- Main Js -->

        <script type="text/javascript" src="<?= base_url() ?>assets/js/main.js"></script>

        <script type="text/javascript" src="<?= base_url('assets/js/custom-validation.js') ?>"></script>

        <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>

    </main>

</body>



</html>