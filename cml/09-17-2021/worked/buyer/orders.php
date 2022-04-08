<!doctype html>
<html>

<head>
    <title>My Orders — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-buyer'); ?>
    <main dash account>
        <?php $this->load->view('includes/sidebar-buyer'); ?>


        <section id="orders">
            <div class="contain-fluid">
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, ''); ?>" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, <?= $mem_data->mem_fname . ' ' . $mem_data->mem_lname ?>!<span class="regular">Nice to see you<?= $mem_data->mem_first_time_login == 'no' ? ' again.' : '.' ?></span></h3>
                    </div>
                    <div class="bTn">
                        <a href="<?= base_url() ?>buyer/orders" class="webBtn mdBtn simpleBtn">My Orders</a>
                    </div>
                </div>
                <?php if (!empty($orders)) { ?>
                    <?php foreach ($orders as $order) {
                        $services = $order->services;
                        if (in_array($order->order_status, ['New'])) : ?>
                            <div class="flexRow flex">
                                <div class="col col1">
                                    <div class="orderBlk blk <?= $order->order_status == 'Completed' || $order->order_status == 'Cancelled' ? 'expire' : '' ?>">
                                        <div class="inside">
                                            <div class="lSide">
                                                <div class="_header">
                                                    <h3 class="odr_heading tipi">
                                                        <em><?= $order->order_status == 'Completed' || $order->order_status == 'Cancelled' ? 'Previous Order' : 'Current Order' ?></em>
                                                    </h3>
                                                    <div class="cmpnyLogo icon"><img src="<?= get_site_image_src("members", $order->mem_image, 'thumb_'); ?>" alt=""></div>
                                                </div>
                                                <h5>Quantity</h5>
                                                <ul class="itmLst flex">
                                                    <?php
                                                    $count = 0;
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <div class="progressbar" data-animate="false">
                                                                <div class="circle" data-percent="<?= $service->quantity ?>0">
                                                                    <strong><?= $service->quantity ?></strong>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php
                                                        if (++$count == 4) {
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                                <div class="br"></div>
                                                <h5>Items</h5>
                                                <ul class="itmLst flex">
                                                    <?php
                                                    $count = 0;
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <span class="badge"><?= ($service->sub_service_id) ? get_sub_service_name($service->sub_service_id) :  $service->sub_service_name ?></span>
                                                        </li>
                                                    <?php
                                                        if (++$count == 4) {
                                                            break;
                                                        }
                                                    }
                                                    ?>

                                                </ul>
                                            </div>
                                            <div class="rSide">
                                                <ul class="list">
                                                    <li class="semi">
                                                        <div>Service</div>
                                                        <div>Price</div>
                                                    </li>
                                                    <?php
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <div><?= ($service->sub_service_id) ? get_sub_service_name($service->sub_service_id) :  $service->sub_service_name ?></div>
                                                            <div>£<?= $service->sub_service_price * $service->quantity ?></div>
                                                        </li>
                                                    <?php
                                                    }
                                                    ?>
                                                    <li>
                                                        <hr>
                                                    </li>
                                                    <?php if ($order->pick_and_drop_service == '1') : ?>
                                                        <?php if ($order->free_pick_and_drop_service == '0') : ?>
                                                            <li>
                                                                <div>Collection & Delivery Charges</div>
                                                                <div>£<?= price_format($order->pick_and_drop_charges) ?></div>
                                                            </li>
                                                        <?php else : ?>
                                                            <li>
                                                                <div>Collection & Delivery Charges</div>
                                                                <div>Free</div>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if ($order->buyer_get_credit == '1') : ?>
                                                        <li>
                                                            <div>Total Price</div>
                                                            <div>£<?= price_format($order->order_total_price + $order->buyer_credit_discount) ?></div>
                                                        </li>
                                                        <li>
                                                            <div>Discount</div>
                                                            <div>£<?= price_format($order->buyer_credit_discount) ?></div>
                                                        </li>
                                                    <?php endif; ?>
                                                    <li>
                                                        <hr>
                                                    </li>
                                                    <li class="semi">
                                                        <div>Grand Total</div>
                                                        <div>£<?= order_total_price($order->order_id) ?></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="btm">
                                            <div class="status processed">Order <?= ($order->order_status) ?></div>
                                            <span>Order placed: <?= format_date($order->order_date) ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col2">
                                    <div class="otpBlk blk">
                                        <h3>OTP: <?= num_size($order->order_id) ?></h3>
                                        <ul class="pickDrop">
                                            <?php if ($order->address_type == 'office') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-briefcase.svg" alt=""></div>
                                                        <span>Office</span>
                                                    </div>
                                                </li>
                                            <?php } else if ($order->address_type == 'home') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-home.svg" alt=""></div>
                                                        <span>Home</span>
                                                    </div>
                                                </li>
                                            <?php } else if ($order->address_type == 'hotel') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-hotel.svg" alt=""></div>
                                                        <span>Hotel</span>
                                                    </div>
                                                </li>
                                            <?php } else { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Walk-in Address</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/icon-map-marker.svg" alt=""></div>
                                                        <span>
                                                            <?php
                                                            foreach (explode('@', $order->address) as $val) :
                                                                echo $val;
                                                                echo '<br>';
                                                            endforeach;
                                                            ?>
                                                        </span>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                        <h6>Contact No. <em class="regular"><?= $order->buyer_phone ?></em></h6>
                                        <?php if ($order->pick_and_drop_service == '1') : ?>
                                            <h6>Delivery Option. <em class="regular"><?= $order->drop_type ?></em></h6>
                                        <?php endif; ?>
                                        <div class="btm">
                                            <!-- <div class="icon"><img src="<?= base_url() ?>assets/images/vector-wait.svg" alt=""></div> -->
                                            <div class="bTn text-center">
                                                <a href="<?= base_url('buyer/order-detail/') . doEncode($order->order_id) ?>" class="webBtn mdBtn blankBtn borderBtn">More Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    }
                    ?>
                    <?php foreach ($orders as $order) {
                        $services = $order->services;
                        if (in_array($order->order_status, ['In Progress'])) : ?>
                            <div class="flexRow flex">
                                <div class="col col1">
                                    <div class="orderBlk blk <?= $order->order_status == 'Completed' || $order->order_status == 'Cancelled' ? 'expire' : '' ?>">
                                        <div class="inside">
                                            <div class="lSide">
                                                <div class="_header">
                                                    <h3 class="odr_heading"><em><?= $order->order_status == 'Completed' || $order->order_status == 'Cancelled' ? 'Previous Order' : 'Current Order' ?></em></h3>
                                                    <div class="cmpnyLogo icon"><img src="<?= get_site_image_src("members", $order->mem_image, 'thumb_'); ?>" alt=""></div>
                                                </div>
                                                <h5>Quantity</h5>
                                                <ul class="itmLst flex">
                                                    <?php
                                                    $count = 0;
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <div class="progressbar" data-animate="false">
                                                                <div class="circle" data-percent="<?= $service->quantity ?>0">
                                                                    <strong><?= $service->quantity ?></strong>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php
                                                        if (++$count == 4) {
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                                <div class="br"></div>
                                                <h5>Items</h5>
                                                <ul class="itmLst flex">
                                                    <?php
                                                    $count = 0;
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <span class="badge"><?= ($service->sub_service_id) ? get_sub_service_name($service->sub_service_id) :  $service->sub_service_name ?></span>
                                                        </li>
                                                    <?php
                                                        if (++$count == 4) {
                                                            break;
                                                        }
                                                    }
                                                    ?>

                                                </ul>
                                            </div>
                                            <div class="rSide">
                                                <ul class="list">
                                                    <li class="semi">
                                                        <div>Service</div>
                                                        <div>Price</div>
                                                    </li>
                                                    <?php
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <div><?= ($service->sub_service_id) ? get_sub_service_name($service->sub_service_id) :  $service->sub_service_name ?></div>
                                                            <div>£<?= $service->sub_service_price * $service->quantity ?></div>
                                                        </li>
                                                    <?php
                                                    }
                                                    ?>
                                                    <li>
                                                        <hr>
                                                    </li>
                                                    <?php if ($order->pick_and_drop_service == '1') : ?>
                                                        <?php if ($order->free_pick_and_drop_service == '0') : ?>
                                                            <li>
                                                                <div>Collection & Delivery Charges</div>
                                                                <div>£<?= price_format($order->pick_and_drop_charges) ?></div>
                                                            </li>
                                                        <?php else : ?>
                                                            <li>
                                                                <div>Collection & Delivery Charges</div>
                                                                <div>Free</div>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if ($order->buyer_get_credit == '1') : ?>
                                                        <li>
                                                            <div>Total Price</div>
                                                            <div>£<?= price_format($order->order_total_price + $order->buyer_credit_discount) ?></div>
                                                        </li>
                                                        <li>
                                                            <div>Discount</div>
                                                            <div>£<?= price_format($order->buyer_credit_discount) ?></div>
                                                        </li>
                                                    <?php endif; ?>
                                                    <li>
                                                        <hr>
                                                    </li>
                                                    <li class="semi">
                                                        <div>Grand Total</div>
                                                        <div>£<?= order_total_price($order->order_id) ?></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="btm">
                                            <div class="status processed">Order <?= ($order->order_status) ?></div>
                                            <span>Order placed: <?= format_date($order->order_date) ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col2">
                                    <div class="otpBlk blk">
                                        <h3>OTP: <?= num_size($order->order_id) ?></h3>
                                        <ul class="pickDrop">
                                            <?php if ($order->address_type == 'office') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-briefcase.svg" alt=""></div>
                                                        <span>Office</span>
                                                    </div>
                                                </li>
                                            <?php } else if ($order->address_type == 'home') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-home.svg" alt=""></div>
                                                        <span>Home</span>
                                                    </div>
                                                </li>
                                            <?php } else if ($order->address_type == 'hotel') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-hotel.svg" alt=""></div>
                                                        <span>Hotel</span>
                                                    </div>
                                                </li>
                                            <?php } else { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Walk-in Address</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/icon-map-marker.svg" alt=""></div>
                                                        <span>
                                                            <?php
                                                            foreach (explode('@', $order->address) as $val) :
                                                                echo $val;
                                                                echo '<br>';
                                                            endforeach;
                                                            ?>
                                                        </span>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                        <h6>Contact No. <em class="regular"><?= $order->buyer_phone ?></em></h6>
                                        <?php if ($order->pick_and_drop_service == '1') : ?>
                                            <h6>Delivery Option. <em class="regular"><?= $order->drop_type ?></em></h6>
                                        <?php endif; ?>
                                        <div class="btm">
                                            <!-- <div class="icon"><img src="<?= base_url() ?>assets/images/vector-wait.svg" alt=""></div> -->
                                            <div class="bTn text-center">
                                                <a href="<?= base_url('buyer/order-detail/') . doEncode($order->order_id) ?>" class="webBtn mdBtn blankBtn borderBtn">More Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    }
                    ?>
                    <?php foreach ($orders as $order) {
                        $services = $order->services;
                        if (in_array($order->order_status, ['Delivered'])) : ?>
                            <div class="flexRow flex">
                                <div class="col col1">
                                    <div class="orderBlk blk <?= $order->order_status == 'Completed' || $order->order_status == 'Cancelled' ? 'expire' : '' ?>">
                                        <div class="inside">
                                            <div class="lSide">
                                                <div class="_header">
                                                    <h3 class="odr_heading"><em><?= $order->order_status == 'Completed' || $order->order_status == 'Cancelled' ? 'Previous Order' : 'Current Order' ?></em></h3>
                                                    <div class="cmpnyLogo icon"><img src="<?= get_site_image_src("members", $order->mem_image, 'thumb_'); ?>" alt=""></div>
                                                </div>
                                                <h5>Quantity</h5>
                                                <ul class="itmLst flex">
                                                    <?php
                                                    $count = 0;
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <div class="progressbar" data-animate="false">
                                                                <div class="circle" data-percent="<?= $service->quantity ?>0">
                                                                    <strong><?= $service->quantity ?></strong>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php
                                                        if (++$count == 4) {
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                                <div class="br"></div>
                                                <h5>Items</h5>
                                                <ul class="itmLst flex">
                                                    <?php
                                                    $count = 0;
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <span class="badge"><?= ($service->sub_service_id) ? get_sub_service_name($service->sub_service_id) :  $service->sub_service_name ?></span>
                                                        </li>
                                                    <?php
                                                        if (++$count == 4) {
                                                            break;
                                                        }
                                                    }
                                                    ?>

                                                </ul>
                                            </div>
                                            <div class="rSide">
                                                <ul class="list">
                                                    <li class="semi">
                                                        <div>Service</div>
                                                        <div>Price</div>
                                                    </li>
                                                    <?php
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <div><?= ($service->sub_service_id) ? get_sub_service_name($service->sub_service_id) :  $service->sub_service_name ?></div>
                                                            <div>£<?= $service->sub_service_price * $service->quantity ?></div>
                                                        </li>
                                                    <?php
                                                    }
                                                    ?>
                                                    <li>
                                                        <hr>
                                                    </li>
                                                    <?php if ($order->pick_and_drop_service == '1') : ?>
                                                        <?php if ($order->free_pick_and_drop_service == '0') : ?>
                                                            <li>
                                                                <div>Collection & Delivery Charges</div>
                                                                <div>£<?= price_format($order->pick_and_drop_charges) ?></div>
                                                            </li>
                                                        <?php else : ?>
                                                            <li>
                                                                <div>Collection & Delivery Charges</div>
                                                                <div>Free</div>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if ($order->buyer_get_credit == '1') : ?>
                                                        <li>
                                                            <div>Total Price</div>
                                                            <div>£<?= price_format($order->order_total_price + $order->buyer_credit_discount) ?></div>
                                                        </li>
                                                        <li>
                                                            <div>Discount</div>
                                                            <div>£<?= price_format($order->buyer_credit_discount) ?></div>
                                                        </li>
                                                    <?php endif; ?>
                                                    <li>
                                                        <hr>
                                                    </li>
                                                    <li class="semi">
                                                        <div>Grand Total</div>
                                                        <div>£<?= order_total_price($order->order_id) ?></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="btm">
                                            <div class="status processed">Order <?= ($order->order_status) ?></div>
                                            <span>Order placed: <?= format_date($order->order_date) ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col2">
                                    <div class="otpBlk blk">
                                        <h3>OTP: <?= num_size($order->order_id) ?></h3>
                                        <ul class="pickDrop">
                                            <?php if ($order->address_type == 'office') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-briefcase.svg" alt=""></div>
                                                        <span>Office</span>
                                                    </div>
                                                </li>
                                            <?php } else if ($order->address_type == 'home') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-home.svg" alt=""></div>
                                                        <span>Home</span>
                                                    </div>
                                                </li>
                                            <?php } else if ($order->address_type == 'hotel') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-hotel.svg" alt=""></div>
                                                        <span>Hotel</span>
                                                    </div>
                                                </li>
                                            <?php } else { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Walk-in Address</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/icon-map-marker.svg" alt=""></div>
                                                        <span>
                                                            <?php
                                                            foreach (explode('@', $order->address) as $val) :
                                                                echo $val;
                                                                echo '<br>';
                                                            endforeach;
                                                            ?>
                                                        </span>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                        <h6>Contact No. <em class="regular"><?= $order->buyer_phone ?></em></h6>
                                        <?php if ($order->pick_and_drop_service == '1') : ?>
                                            <h6>Delivery Option. <em class="regular"><?= $order->drop_type ?></em></h6>
                                        <?php endif; ?>
                                        <div class="btm">
                                            <!-- <div class="icon"><img src="<?= base_url() ?>assets/images/vector-wait.svg" alt=""></div> -->
                                            <div class="bTn text-center">
                                                <a href="<?= base_url('buyer/order-detail/') . doEncode($order->order_id) ?>" class="webBtn mdBtn blankBtn borderBtn">More Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    }
                    ?>
                    <?php foreach ($orders as $order) {
                        $services = $order->services;
                        if (in_array($order->order_status, ['Completed'])) : ?>
                            <div class="flexRow flex">
                                <div class="col col1">
                                    <div class="orderBlk blk <?= $order->order_status == 'Completed' || $order->order_status == 'Cancelled' ? 'expire' : '' ?>">
                                        <div class="inside">
                                            <div class="lSide">
                                                <div class="_header">
                                                    <h3 class="odr_heading"><em><?= $order->order_status == 'Completed' || $order->order_status == 'Cancelled' ? 'Previous Order' : 'Current Order' ?></em></h3>
                                                    <div class="cmpnyLogo icon"><img src="<?= get_site_image_src("members", $order->mem_image, 'thumb_'); ?>" alt=""></div>
                                                </div>
                                                <h5>Quantity</h5>
                                                <ul class="itmLst flex">
                                                    <?php
                                                    $count = 0;
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <div class="progressbar" data-animate="false">
                                                                <div class="circle" data-percent="<?= $service->quantity ?>0">
                                                                    <strong><?= $service->quantity ?></strong>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php
                                                        if (++$count == 4) {
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                                <div class="br"></div>
                                                <h5>Items</h5>
                                                <ul class="itmLst flex">
                                                    <?php
                                                    $count = 0;
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <span class="badge"><?= ($service->sub_service_id) ? get_sub_service_name($service->sub_service_id) :  $service->sub_service_name ?></span>
                                                        </li>
                                                    <?php
                                                        if (++$count == 4) {
                                                            break;
                                                        }
                                                    }
                                                    ?>

                                                </ul>
                                            </div>
                                            <div class="rSide">
                                                <ul class="list">
                                                    <li class="semi">
                                                        <div>Service</div>
                                                        <div>Price</div>
                                                    </li>
                                                    <?php
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <div><?= ($service->sub_service_id) ? get_sub_service_name($service->sub_service_id) :  $service->sub_service_name ?></div>
                                                            <div>£<?= $service->sub_service_price * $service->quantity ?></div>
                                                        </li>
                                                    <?php
                                                    }
                                                    ?>
                                                    <li>
                                                        <hr>
                                                    </li>
                                                    <?php if ($order->pick_and_drop_service == '1') : ?>
                                                        <?php if ($order->free_pick_and_drop_service == '0') : ?>
                                                            <li>
                                                                <div>Collection & Delivery Charges</div>
                                                                <div>£<?= price_format($order->pick_and_drop_charges) ?></div>
                                                            </li>
                                                        <?php else : ?>
                                                            <li>
                                                                <div>Collection & Delivery Charges</div>
                                                                <div>Free</div>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if ($order->buyer_get_credit == '1') : ?>
                                                        <li>
                                                            <div>Total Price</div>
                                                            <div>£<?= price_format($order->order_total_price + $order->buyer_credit_discount) ?></div>
                                                        </li>
                                                        <li>
                                                            <div>Discount</div>
                                                            <div>£<?= price_format($order->buyer_credit_discount) ?></div>
                                                        </li>
                                                    <?php endif; ?>
                                                    <li>
                                                        <hr>
                                                    </li>
                                                    <li class="semi">
                                                        <div>Grand Total</div>
                                                        <div>£<?= order_total_price($order->order_id) ?></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="btm">
                                            <div class="status processed">Order <?= ($order->order_status) ?></div>
                                            <span>Order placed: <?= format_date($order->order_date) ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col2">
                                    <div class="otpBlk blk">
                                        <h3>OTP: <?= num_size($order->order_id) ?></h3>
                                        <ul class="pickDrop">
                                            <?php if ($order->address_type == 'office') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-briefcase.svg" alt=""></div>
                                                        <span>Office</span>
                                                    </div>
                                                </li>
                                            <?php } else if ($order->address_type == 'home') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-home.svg" alt=""></div>
                                                        <span>Home</span>
                                                    </div>
                                                </li>
                                            <?php } else if ($order->address_type == 'hotel') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-hotel.svg" alt=""></div>
                                                        <span>Hotel</span>
                                                    </div>
                                                </li>
                                            <?php } else { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Walk-in Address</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/icon-map-marker.svg" alt=""></div>
                                                        <span>
                                                            <?php
                                                            foreach (explode('@', $order->address) as $val) :
                                                                echo $val;
                                                                echo '<br>';
                                                            endforeach;
                                                            ?>
                                                        </span>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                        <h6>Contact No. <em class="regular"><?= $order->buyer_phone ?></em></h6>
                                        <?php if ($order->pick_and_drop_service == '1') : ?>
                                            <h6>Delivery Option. <em class="regular"><?= $order->drop_type ?></em></h6>
                                        <?php endif; ?>
                                        <div class="btm">
                                            <!-- <div class="icon"><img src="<?= base_url() ?>assets/images/vector-wait.svg" alt=""></div> -->
                                            <div class="bTn text-center">
                                                <a href="<?= base_url('buyer/order-detail/') . doEncode($order->order_id) ?>" class="webBtn mdBtn blankBtn borderBtn">More Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    }
                    ?>
                    <?php foreach ($orders as $order) {
                        $services = $order->services;
                        if (in_array($order->order_status, ['Cancelled'])) : ?>
                            <div class="flexRow flex">
                                <div class="col col1">
                                    <div class="orderBlk blk <?= $order->order_status == 'Completed' || $order->order_status == 'Cancelled' ? 'expire' : '' ?>">
                                        <div class="inside">
                                            <div class="lSide">
                                                <div class="_header">
                                                    <h3 class="odr_heading"><em><?= $order->order_status == 'Completed' || $order->order_status == 'Cancelled' ? 'Previous Order' : 'Current Order' ?></em></h3>
                                                    <div class="cmpnyLogo icon"><img src="<?= get_site_image_src("members", $order->mem_image, 'thumb_'); ?>" alt=""></div>
                                                </div>
                                                <h5>Quantity</h5>
                                                <ul class="itmLst flex">
                                                    <?php
                                                    $count = 0;
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <div class="progressbar" data-animate="false">
                                                                <div class="circle" data-percent="<?= $service->quantity ?>0">
                                                                    <strong><?= $service->quantity ?></strong>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php
                                                        if (++$count == 4) {
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                                <div class="br"></div>
                                                <h5>Items</h5>
                                                <ul class="itmLst flex">
                                                    <?php
                                                    $count = 0;
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <span class="badge"><?= ($service->sub_service_id) ? get_sub_service_name($service->sub_service_id) :  $service->sub_service_name ?></span>
                                                        </li>
                                                    <?php
                                                        if (++$count == 4) {
                                                            break;
                                                        }
                                                    }
                                                    ?>

                                                </ul>
                                            </div>
                                            <div class="rSide">
                                                <ul class="list">
                                                    <li class="semi">
                                                        <div>Service</div>
                                                        <div>Price</div>
                                                    </li>
                                                    <?php
                                                    foreach ($services as $service) {
                                                    ?>
                                                        <li>
                                                            <div><?= ($service->sub_service_id) ? get_sub_service_name($service->sub_service_id) :  $service->sub_service_name ?></div>
                                                            <div>£<?= $service->sub_service_price * $service->quantity ?></div>
                                                        </li>
                                                    <?php
                                                    }
                                                    ?>
                                                    <li>
                                                        <hr>
                                                    </li>
                                                    <?php if ($order->pick_and_drop_service == '1') : ?>
                                                        <?php if ($order->free_pick_and_drop_service == '0') : ?>
                                                            <li>
                                                                <div>Collection & Delivery Charges</div>
                                                                <div>£<?= price_format($order->pick_and_drop_charges) ?></div>
                                                            </li>
                                                        <?php else : ?>
                                                            <li>
                                                                <div>Collection & Delivery Charges</div>
                                                                <div>Free</div>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if ($order->buyer_get_credit == '1') : ?>
                                                        <li>
                                                            <div>Total Price</div>
                                                            <div>£<?= price_format($order->order_total_price + $order->buyer_credit_discount) ?></div>
                                                        </li>
                                                        <li>
                                                            <div>Discount</div>
                                                            <div>£<?= price_format($order->buyer_credit_discount) ?></div>
                                                        </li>
                                                    <?php endif; ?>
                                                    <li>
                                                        <hr>
                                                    </li>
                                                    <li class="semi">
                                                        <div>Grand Total</div>
                                                        <div>£<?= order_total_price($order->order_id) ?></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="btm">
                                            <div class="status processed">Order <?= ($order->order_status) ?></div>
                                            <span>Order placed: <?= format_date($order->order_date) ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col2">
                                    <div class="otpBlk blk">
                                        <h3>OTP: <?= num_size($order->order_id) ?></h3>
                                        <ul class="pickDrop">
                                            <?php if ($order->address_type == 'office') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-briefcase.svg" alt=""></div>
                                                        <span>Office</span>
                                                    </div>
                                                </li>
                                            <?php } else if ($order->address_type == 'home') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-home.svg" alt=""></div>
                                                        <span>Home</span>
                                                    </div>
                                                </li>
                                            <?php } else if ($order->address_type == 'hotel') { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Pick Up & Drop Off</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/vector-hotel.svg" alt=""></div>
                                                        <span>Hotel</span>
                                                    </div>
                                                </li>
                                            <?php } else { ?>
                                                <li>
                                                    <div class="inner">
                                                        <h5>Walk-in Address</h5>
                                                        <div class="icon"><img src="<?= base_url() ?>assets/images/icon-map-marker.svg" alt=""></div>
                                                        <span>
                                                            <?php
                                                            foreach (explode('@', $order->address) as $val) :
                                                                echo $val;
                                                                echo '<br>';
                                                            endforeach;
                                                            ?>
                                                        </span>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                        <h6>Contact No. <em class="regular"><?= $order->buyer_phone ?></em></h6>
                                        <?php if ($order->pick_and_drop_service == '1') : ?>
                                            <h6>Delivery Option. <em class="regular"><?= $order->drop_type ?></em></h6>
                                        <?php endif; ?>
                                        <div class="btm">
                                            <!-- <div class="icon"><img src="<?= base_url() ?>assets/images/vector-wait.svg" alt=""></div> -->
                                            <div class="bTn text-center">
                                                <a href="<?= base_url('buyer/order-detail/') . doEncode($order->order_id) ?>" class="webBtn mdBtn blankBtn borderBtn">More Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    }
                    ?>
                <?php

                } else {
                ?>
                    <div class="row">
                        <div class="alert alert-info alert-sm text-white">No order yet.</div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <!-- orders -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>