<!DOCTYPE html>

<html lang="en">



<head>

    <title><?= $page_title  ?> - <?= $settings->site_name ?></title>

    <?php $this->load->view('includes/site-master'); ?>

</head>



<body data-page="formal">

<?php $this->load->view('includes/header'); ?>

    <main>

        <section id="cover">

            <div class="contain">

                <div class="content">

                    <h1>Checkout</h1>

                </div>

            </div>

        </section>

        <!-- cover -->





        <section id="checkout">

            <div class="contain">
                <form action="<?=base_url('ajax/pay_now')?>" id="payment-form" method="POST">
                    <div class="flex_row">

                        <div class="col col1">

                            <div class="in_col">

                            
                                <?php if (empty($this->session->mem_id)){ ?>
                                    <div class="blk">

                                        <h4 class="subheading">Personal Information</h4>

                                        <p>Already have an account? <a href="javascript:void(0)" class="pop_btn" data-popup="signin">Sign in here</a></p>

                                        <div class="form_row row">

                                            <div class="col-xs-6">

                                                <h6>First Name <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" name="fname" id="" class="text_box" placeholder="eg: John">

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>Last Name <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" name="lname" id="" class="text_box" placeholder="eg: Wick">

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>Email Address <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="email" name="email" id="" class="text_box" placeholder="eg: sample@gmail.com">

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>Phone Number <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" name="phone" id="" class="text_box" placeholder="eg: +92300 0000 000">

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>Password <sup>*</sup></h6>

                                                <div class="form_blk pass_blk">

                                                    <input type="password" name="password" id="" class="text_box pr-password" placeholder="eg: PassLogin%7">

                                                    <i class="icon-eye" id="eye"></i>

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>Confirm Password <sup>*</sup></h6>

                                                <div class="form_blk pass_blk">

                                                    <input type="password" name="cpassword" id="" class="text_box" placeholder="eg: PassLogin%7">

                                                    <i class="icon-eye" id="eye"></i>

                                                </div>

                                            </div>

                                            <!-- <div class="col-xs-12">

                                                <div class="form_blk">

                                                    <div class="lbl_btn">

                                                        <input type="checkbox" name="notified" id="notified">

                                                        <label for="notified">Keep me up to date on news and exclusive offers</label>

                                                    </div>

                                                </div>

                                            </div> -->

                                        </div>

                                        <hr>

                                        <h4 class="subheading">Address Information</h4>

                                        <div class="form_row row">

                                            <div class="col-xs-6">

                                                <h6>Country <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" name="country" id="" class="text_box" placeholder="eg: United States">


                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>State <sup>*</sup></h6>

                                                <div class="form_blk">

                                                <input type="text" name="state" id="" class="text_box" placeholder="eg: Texas">

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>City <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" name="city" id="" class="text_box" placeholder="eg: California">

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>Zip Code <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" id="zip" name="zip" class="text_box" placeholder="eg: BL0 0WY">

                                                </div>

                                            </div>

                                            <div class="col-xs-12">

                                                <h6>Address <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" id="" name="address" class="text_box" placeholder="eg: 123 Main Street, California">

                                                </div>

                                            </div>

                                        </div>

                                        <hr>

                                        <h4 class="subheading">Other Information</h4>

                                        <div class="form_row row">

                                            <div class="col-xs-12">

                                                <h6>Your Comment <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <textarea name="comments" id="" class="text_box" placeholder="Type something here"></textarea>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                <?php }else{ ?>

                                    <div class="blk">

                                        <h4 class="subheading">Personal Information</h4>

                                        <p>Already have an account? <a href="javascript:void(0)" class="pop_btn" data-popup="signin">Sign in here</a></p>

                                        <div class="form_row row">

                                            <div class="col-xs-6">

                                                <h6>First Name <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" value="<?=$member->fname ?>" name="fname" id="" class="text_box" placeholder="eg: John">

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>Last Name <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" value="<?=$member->lname ?>" name="lname" id="" class="text_box" placeholder="eg: Wick">

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>Email Address <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="email" value="<?=$member->email ?>" name="email" id="" class="text_box" placeholder="eg: sample@gmail.com">

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>Phone Number <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" value="<?=$member->phone ?>" name="phone" id="" class="text_box" placeholder="eg: +92300 0000 000">

                                                </div>

                                            </div>

                                        </div>

                                        <hr>

                                        <h4 class="subheading">Address Information</h4>

                                        <div class="form_row row">

                                            <div class="col-xs-6">

                                                <h6>Country <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" id="" value="<?=$member->country ?>" name="country" class="text_box" placeholder="eg: United States">


                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>State <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" id="" value="<?=$member->state ?>" name="state" class="text_box" placeholder="eg: Texas">

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>City <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" value="<?=$member->city ?>" name="city" id="" class="text_box" placeholder="eg: California">

                                                </div>

                                            </div>

                                            <div class="col-xs-6">

                                                <h6>Zip Code <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" id="" value="<?=$member->zip ?>" name="zip" class="text_box" placeholder="eg: BL0 0WY">

                                                </div>

                                            </div>

                                            <div class="col-xs-12">

                                                <h6>Address <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <input type="text" id="" value="<?=$member->address ?>" name="address" class="text_box" placeholder="eg: 123 Main Street, California">

                                                </div>

                                            </div>

                                        </div>

                                        <hr>

                                        <h4 class="subheading">Other Information</h4>

                                        <div class="form_row row">

                                            <div class="col-xs-12">

                                                <h6>Your Comment <sup>*</sup></h6>

                                                <div class="form_blk">

                                                    <textarea name="comments" id="" class="text_box" placeholder="Type something here"></textarea>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                <?php } ?>

                            </div>

                        </div>

                        <div class="col col2">

                            <div class="in_col">

                                <div class="blk">

                                    <h4 class="subheading">Payment</h4>

                                    <p>All transactions are secure and encrypted.</p>
                                    <div class="images">
                                        <img src="<?=base_url('assets/images/card-maestro.svg')?>" style="margin:2%;width:20%;display:inline">
                                        <img src="<?=base_url('assets/images/card-mastercard.svg')?>" style="margin:2%;width:20%;display:inline">
                                        <img src="<?=base_url('assets/images/card-skrill.svg')?>" style="margin:2%;width:20%;display:inline">
                                        <img src="<?=base_url('assets/images/card-visa.svg')?>" style="margin:2%;width:20%;display:inline">
                                    </div>
                                    <div data-payment="wallet">

                                        <div class="lbl_btn">

                                            <input type="radio" name="payment_type" id="credit" class="tglBlk" value="credit-card" checked="">

                                            <label for="credit">Credit card</label>

                                        </div>

                                        <div class="inside_blk active">

                                            <div class="form_row row">

                                                <div class="col-xs-12">

                                                    <h6>Card Number <sup>*</sup></h6>

                                                    <div class="form_blk">

                                                        <input type="text" name="cardnumber" id="cardnumber" class="text_box" placeholder="eg: 1234567890">

                                                    </div>

                                                </div>

                                                <div class="col-xs-12">

                                                    <h6>Card Holder <sup>*</sup></h6>

                                                    <div class="form_blk">

                                                        <input type="text" name="card_holder_name" id="card_holder_name" class="text_box" placeholder="eg: John Wick">

                                                    </div>

                                                </div>

                                                <div class="col-xs-6">

                                                    <h6>Month <sup>*</sup></h6>

                                                    <div class="form_blk">
                                                        <select name="exp_month" id="exp_month" class="text_box">
                                                            <option>Select</option>
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

                                                <div class="col-xs-6">

                                                    <h6>Year <sup>*</sup></h6>
                                                        <div class="form_blk">
                                                            <select name="exp_year" id="exp_year" class="text_box">
                                                                <option>Select</option>
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
                                                                <option value="2032">2032</option>
                                                            </select>
                                                        </div>

                                                </div>

                                                <div class="col-xs-12">

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
                                        <div class="images">
                                            <img src="<?=base_url('assets/images/paypal.png')?>" style="width:30%;">
                                        </div>

                                    </div>

                                    <div class="br"></div>

                                    <div class="form_blk">

                                        <div class="lbl_btn">

                                            <input type="checkbox" name="confirm" id="confirm">

                                            <label for="confirm">

                                                I agree to <?= $settings->site_name ?>

                                                <a target="_blank" href="<?= base_url() ?>terms-and-conditions">Terms &amp; Conditions</a>

                                                and

                                                <a target="_blank" href="<?= base_url() ?>privacy-policy">Privacy Policy.</a>

                                            </label>

                                        </div>

                                    </div>

                                    <div class="btn_blk">

                                        <button type="submit" class="site_btn block">Place Order</button>

                                        <!-- <button type="button" class="site_btn block pop_btn" data-popup="contract">Place Order</button> -->

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </form>

            </div>

            <div class="popup sm" data-popup="signin">

                <div class="table_dv">

                    <div class="table_cell">

                        <div class="contain">

                            <div class="_inner">

                                <button type="button" class="x_btn"></button>

                                <h3>Sign in</h3>

                                <form action="<?= base_url('ajax/signin') ?>" class="frmAjax" method="POST">

                                    <div class="form_row row">

                                        <div class="col-xs-12">

                                            <h6>Email Address <sup>*</sup></h6>

                                            <div class="form_blk">

                                                <input type="text" name="email" id="email" class="text_box" placeholder="eg: sample@gmail.com">

                                            </div>

                                        </div>

                                        <div class="col-xs-12">

                                            <h6>Password <sup>*</sup></h6>

                                            <div class="form_blk pass_blk">

                                                <input type="password" name="password" id="password" class="text_box" placeholder="eg: PassLogin%7" autocomplete="new-password">

                                                <i class="icon-eye" id="eye"></i>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="btn_blk form_btn">

                                        <button type="submit" class="site_btn block"><i class="spinner hidden"></i>Sign in</button>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- checkout -->





    </main>

    <?php $this->load->view('includes/footer'); ?>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        $(document).on('submit','#payment-form',function(e){ 
            console.log('x');
            if ($('input[name="payment_type"]:checked').val() == 'paypal') {
                    e.preventDefault();
                    needToConfirm = true;
                    let sbtn = $('#payment-form').find("button[type='submit']");
                    sbtn.attr('disabled', true);
                    $(this).find('button[type="submit"] i.spinner').removeClass('hidden');
                    let form$ = $("#payment-form");
                    let frmIcon = form$.find("button[type='submit'] i.spinner");
                    let frmData = new FormData(form$[0]);
                    let frmMsg = form$.find("div.alertMsg:first");
                    sbtn.attr("disabled", true);
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
                            frmMsg.html(rs.msg).slideDown(500);
                            if (rs.status == 1) {
                                toastr.success(rs.msg, '', optsuccess);
                                setTimeout(function() {
                                    frmIcon.addClass("hidden");
                                    form$[0].reset();
                                    window.location.href = rs.redirect_url;
                                }, 3000);
                            } else {
                                toastr.error(rs.msg, '', optsuccess);
                                setTimeout(function() {
                                    frmIcon.addClass("hidden");
                                    sbtn.attr("disabled", false);
                                }, 3000);
                            }
                        },
                        error: function(rs) {
                            console.log(rs);
                            sbtn.attr("disabled", false);
                            toastr.error('<div>Please try again or refresh your page.Error occur due to sever response!</div>',"Error");
                        },
                        complete: function(rs) {
                            needToConfirm = false;
                        }
                    });
                } else if ($('input[name="payment_type"]:checked').val() == 'credit-card') {
                    
                    e.preventDefault();
                    $('button[type="submit"]').prop('disabled',true);
                    $('.spin').removeClass('hidden');
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
        Stripe.setPublishableKey('<?= get_public_key(); ?>');
        function stripeResponseHandler(status, response) {
                let form$ = $("#payment-form");
                let sbtn = form$.find("button[type='submit']");
                let frmIcon = form$.find("button[type='submit'] i.spinner");
            if (response.error) {
                console.log(response.error.message)
                toastr.error('<strong>Error:</strong> ' + response.error.message + '',"Error");
                $('button[type="submit"]').prop('disabled',false);
                $('.spin').addClass('hidden');
            } 
            else {
                let nonce = response['id'];
                let frmData = new FormData(form$[0]);
                let frmMsg = form$.find("div.alertMsg:first");
                frmData.append('nonce', nonce);
                
                object.append("<input type='hidden' name='nonce' value='" + nonce + "' />");
                console.log(nonce);
                $('.card_payment').prop('disabled',true);
                
                $.ajax({
                    url:'<?= site_url('ajax/pay_now')?>',
                    data:object.serialize(),
                    dataType:'JSON',
                    method:'POST',
                    error:function(er){
                        toastr.error('<div>Please try again or refresh your page.Error occur due to sever response!</div>',"Error");
                    },
                    success:function(rs){
                        if(rs.scroll_top)
                            $("html, body").animate({ scrollTop: 0 }, "slow");
                        if (rs.status == 1) {
                            toastr.success(rs.msg,"Success");
                            setTimeout(function () {
                            if(rs.hide_msg)
                                $('.alertMsg').slideUp(500);
                            if(rs.redirect_url)
                                window.location.href = rs.redirect_url;   
                            },3000)
                        }
                        else{
                            toastr.error(rs.msg,"Error");
                        }
                    },
                    complete:function(){
                        $('button[type="submit"]').prop('disabled',false);
                        $('.spin').addClass('hidden');
                    }
                })
            }
        }
    </script>
</body>



</html>