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
                        <div class="image"><img src="<?= getImageSrc(UPLOAD_PATH."images/", $content['image1']) ?>" alt=""></div>
                    </div>
                    <div class="col col2">
                        <div class="logBlk">
                            <form action="" method="post" id="frmSignin" class="frmAjax">
                                <h2 class="heading"><?= $content['form_heading'] ?></h2>
                                <div class="alertMsg" style="display:none"></div>
                                <h6>Email Address</h6>
                                <div class="txtGrp">
                                    <label for="email">eg: sample@gmail.com</label>
                                    <input type="text" name="email" id="email" class="txtBox">
                                </div>
                                <h6>Password</h6>
                                <div class="txtGrp pasDv">
                                    <label for="password">password</label>
                                    <input type="password" name="password" id="password" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                                <div class="txtGrp flex">
                                    <div class="lblBtn">
                                        <input type="checkbox" name="remember" id="remember">
                                        <label for="remember">Remember me</label>
                                    </div>
                                    <a href="<?= base_url() ?>forgot-password" id="pass">Forgot Password?</a>
                                </div>
                                <div class="bTn text-center">
                                    <button type="submit" class="webBtn lgBtn blockBtn"><i class="spinner hidden"></i><?= $content['btn_title'] ?></button>
                                </div>
                                <div class="haveAccount text-center">
                                    <span>Don’t have an account?</span>
                                    <a href="<?= base_url() ?>signup-as">Sign up</a>
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