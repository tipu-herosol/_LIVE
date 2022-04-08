<main dash>
    <?php $this->load->view('includes/sidebar'); ?>



    <section id="profile">
        <div class="contain-fluid">
            <div class="blk" data-aos="fade" data-aos-duration="1000">
                <h3 class="subheading">Détails du compte</h3>
                <form action="" method="post" autocomplete="off" class="frmAjax" id="frmSignup">
                    <div class="formRow row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h6>Confirmez votre mot de passe</h6>
                            <div class="txtGrp pasDv">
                                <label for="password">New Password</label>
                                <input type="password" name="password" id="password" class="txtBox">
                                <i class="icon-eye" id="eye"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h6>Confirmez votre mot de passe</h6>
                            <div class="txtGrp pasDv">
                                <label for="cpswd">Confirm Password</label>
                                <input type="password" name="cpswd" id="cpswd" class="txtBox">
                                <i class="icon-eye" id="eye"></i>
                            </div>
                        </div>

                    </div>
                    <div class="bTn formBtn">
                        <button type="submit" class="webBtn">Sauvegarder les modifications <i class="spinner hidden"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- profile -->


</main>