<main>


        <section id="booking">
            <div class="contain">
                <div class="blk">
                    <div class="order_blk">
                        <div class="ico"><img src="<?= get_site_image_src("vehicles", get_vehicle_image($row->v_id), 'thumb_')?>" alt="<?=get_vehicle_name($row->v_id)?>"></div>
                        <div class="txt">
                            <div class="top_head">
                                <h4>Booking No: <span><?=setInvoiceNo($row->id)?></span></h4>
                                <div class="status_btn_blk" id="btn_order_status">
                                    <?=getBookingStatus($row->booking_status)?>
                                </div>
                            </div>
                            <ul class="list">
                                <li>
                                    <strong>Name:</strong>
                                    <span><?=$row->fname." ".$row->lname?></span>
                                </li>
                                <li>
                                    <strong>Phone Number:</strong>
                                    <span><?=$row->phone?></span>
                                </li>
                                <li>
                                    <strong>Email Address:</strong>
                                    <span><?=$row->email?></span>
                                </li>
                                <li>
                                    <strong>Price:</strong>
                                    <span><?=format_amount($row->amount)?></span>
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
                                    <span><?=$row->address?>, <?=$row->city?>,<?=get_state_name($row->state)?>, <?=$row->zip_code?>, <?=get_country_name($row->country)?></span>
                                </li>
                                <li>
                                    <strong>Comments:</strong>
                                    <span><?=$row->comments?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- booking -->


    </main>