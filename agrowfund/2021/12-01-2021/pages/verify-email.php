<main common logon id="verify">
    <section class="blocks cmnSec" id="email_verification">

        <div class="contain" data-aos="fade-down" data-aos-duration="1000">

            <div id="verifyEmail">

                <h3>Bonjour! <?= format_name($mem_data->mem_fname, $mem_data->mem_lname) ?>, Bienvenue sur notre site web</h3>

                <div class="blk">

                    <div class="_header">

                        <h3>Vérification de l'e-mail</h3>

                    </div>

                    <div id="resndCntnt">

                        <?= showMsg() ?>

                        <p>Nous vous avons envoyé un e-mail à l'adresse indiquée pour vérification. Veuillez vérifier votre e-mail pour vérifier et activer votre compte.</p>

                        <p>

                            <a href="javascript:void(0)" id="rsnd-email" class="webBtn">Renvoyer le courriel</a>

                            <!--<a href="javascript:void(0)" class="popBtn" data-popup="change-email">Change Email</a>-->

                        </p>

                    </div>

                    <div class="appLoad hide">

                        <div class="appLoader"><span class="spiner"></span></div>

                    </div>

                </div>

                <div class="popup small-popup" data-popup="change-email">

                    <div class="tableDv">

                        <div class="tableCell">

                            <div class="contain">

                                <div class="_inner">

                                    <div class="crosBtn"></div>

                                    <h3>Change your Email</h3>

                                    <form action="" method="post" autocomplete="off" class="frmAjax" id="frmChangeEmail">

                                        <div class="txtGrp">

                                            <input type="email" id="email" name="email" class="txtBox" placeholder="Email" autofocus>

                                        </div>

                                        <div class="bTn text-center">

                                            <button type="submit" class="webBtn colorBtn lgBtn">Change your Email <i class="spinner hidden"></i></button>

                                        </div>

                                        <div class="alertMsg" style="display:none"></div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- dash -->

</main>