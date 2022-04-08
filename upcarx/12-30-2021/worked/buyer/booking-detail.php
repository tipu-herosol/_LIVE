<main>


    <section id="booking">
        <div class="contain">
            <div class="blk">
                <div class="order_blk">
                    <div class="ico"><img src="<?= get_site_image_src("vehicles", get_vehicle_image($row->v_id), 'thumb_') ?>" alt="<?= get_vehicle_name($row->v_id) ?>"></div>
                    <div class="txt">
                        <div class="top_head">
                            <h4>Booking No: <span><?= setInvoiceNo($row->id) ?></span></h4>
                            <div class="status_btn_blk" id="btn_order_status">
                                <?= getBookingStatus($row->booking_status) ?>
                            </div>
                        </div>
                        <ul class="list">
                            <li>
                                <strong>Name:</strong>
                                <span><?= $row->fname . " " . $row->lname ?></span>
                            </li>
                            <li>
                                <strong>Phone Number:</strong>
                                <span><?= $row->phone ?></span>
                            </li>
                            <li>
                                <strong>Email Address:</strong>
                                <span><?= $row->email ?></span>
                            </li>
                            <li>
                                <strong>Price:</strong>
                                <span><?= format_amount($row->amount) ?></span>
                            </li>
                            <li>
                                <strong>From Date:</strong>
                                <span><?= format_date($row->book_from, 'M d, Y') ?></span>
                            </li>
                            <li>
                                <strong>Until Date:</strong>
                                <span><?= format_date($row->book_to, 'M d, Y') ?></span>
                            </li>
                            <li>
                                <strong>Address:</strong>
                                <span><?= $row->address ?>, <?= $row->city ?>,<?= get_state_name($row->state) ?>, <?= $row->zip_code ?>, <?= get_country_name($row->country) ?></span>
                            </li>
                            <li>
                                <strong>Comments:</strong>
                                <span><?= $row->comments ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blk review">
                <div class="ico"><img src="<?= base_url() ?>assets/images/users/1.jpg" alt=""></div>
                <div class="txt">
                    <form action="" method="post">
                        <div class="form_blk">
                            <h5>Leave Review</h5>
                            <div class="rateYo" data-rateyo-star-width="20px" data-rateyo-read-only="false"></div>
                        </div>
                        <div class="form_blk">
                            <label for="">Write a little description</label>
                            <textarea name="" id="" class="text_box"></textarea>
                        </div>
                        <div class="btn_blk">
                            <button type="submit" class="site_btn long">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="blk review">
                <div class="ico"><img src="<?= base_url() ?>assets/images/users/1.jpg" alt=""></div>
                <div class="txt">
                    <div class="ico_txt">
                        <div class="title">
                            <h5>Jennifer Kem</h5>
                            <div class="rateYo"></div>
                        </div>
                        <div class="date">February 2018</div>
                    </div>
                    <p>Had a short stay with my dad and younger sis. Very comfortable and cozy room. The host Jeka is nice and prepared snacks for us in advance. The location is good and we particularly like the view of the room. Strongly recommend:)</p>
                    <div class="review">
                        <div class="ico"><img src="<?= base_url() ?>assets/images/users/1.jpg" alt=""></div>
                        <div class="txt">
                            <h6>Owner's Response</h6>
                            <p>Thank you for your kind comment, I will be waiting for your next call, hope we work for a long time together.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- booking -->


</main>