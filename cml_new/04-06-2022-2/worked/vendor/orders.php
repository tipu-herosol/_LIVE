<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Orders — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body data-page="dash">
    <?php $this->load->view('includes/header'); ?>
    <main>


        <section id="orders">
            <div class="contain">
                <div class="top_head">
                    <h4>My Orders</h4>
                    <ul class="tab_list flex">
                        <li class="<?= doDecode($this->uri->segment(3)) == 'all' ? 'active' : '' ?>"><a href="<?= base_url() ?>vendor/orders/<?= doEncode('all') ?>">All</a></li>
                        <li class="<?= doDecode($this->uri->segment(3)) == 'New' ? 'active' : '' ?>"><a href="<?= base_url() ?>vendor/orders/<?= doEncode('New') ?>">New</a></li>
                        <li class="<?= doDecode($this->uri->segment(3)) == 'In Progress' ? 'active' : '' ?>"><a href="<?= base_url() ?>vendor/orders/<?= doEncode('In Progress') ?>">Pending</a></li>
                        <li class="<?= doDecode($this->uri->segment(3)) == 'Delivered' ? 'active' : '' ?>"><a href="<?= base_url() ?>vendor/orders/<?= doEncode('Delivered') ?>">Delivered</a></li>
                        <li class="<?= doDecode($this->uri->segment(3)) == 'Completed' ? 'active' : '' ?>"><a href="<?= base_url() ?>vendor/orders/<?= doEncode('Completed') ?>">Completed</a></li>
                        <li class="<?= doDecode($this->uri->segment(3)) == 'Cancelled' ? 'active' : '' ?>"><a href="<?= base_url() ?>vendor/orders/<?= doEncode('Cancelled') ?>">Cancelled</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="All" class="job_tbl tab-pane fade in active">
                        <table>
                            <tbody>
                                <?php if (empty($orders)) : ?>
                                    <tr>
                                        <td>No order yet.</td>
                                    </tr>
                                    <?php else : foreach ($orders as $key => $order) : ?>
                                        <tr class="<?= order_log($order->order_id) ?>">
                                            <td>
                                                <div class="ico_blk">
                                                    <div class="icon ico"><img src="<?= get_site_image_src("members", get_mem_image($order->buyer_id), 'thumb_'); ?>" alt=""></div>
                                                    <div class="txt">
                                                        <div class="head">
                                                            <h5>OTP: <?= num_size($order->order_id); ?></h5>
                                                            <span class="badge <?= get_order_status($order->order_status); ?>"><?= $order->order_status ?></span>
                                                        </div>
                                                        <!-- <?= $order->mem_fname . ' ' . $order->mem_lname ?> -->
                                                        <p>
                                                            <?= implode(' • ', $order->services); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <a href="<?= base_url() ?>vendor/order-detail/<?= doEncode($order->order_id) . '/' . doEncode(0) ?>" class="more_btn"></a>
                                            </td>
                                            <td class="qty">
                                                <strong>Items</strong> <?= count($order->services) ?>
                                                <a href="<?= base_url() ?>vendor/order-detail/<?= doEncode($order->order_id) . '/' . doEncode(0) ?>" class="more_btn"></a>
                                            </td>
                                            <?php if ($order->pick_and_drop_service == '1') : ?>
                                                <td class="date">
                                                    <strong>Collection</strong>
                                                    <span><?= date_picker_format_date($order->collection_date, 'D, d M Y', false) ?> - <?= $order->collection_time ?></espan>
                                                        <a href="<?= base_url() ?>vendor/order-detail/<?= doEncode($order->order_id) . '/' . doEncode(0) ?>" class="more_btn"></a>
                                                </td>
                                                <td class="date">
                                                    <strong>Delivery</strong>
                                                    <span><?= date_picker_format_date($order->delivery_date, 'D, d M Y', false) ?> - <?= $order->delivery_time ?></span>
                                                    <a href="<?= base_url() ?>vendor/order-detail/<?= doEncode($order->order_id) . '/' . doEncode(0) ?>" class="more_btn"></a>
                                                </td>
                                            <?php else : ?>
                                                <td class="date">
                                                    <strong>Address</strong>
                                                    <span>
                                                        <?php foreach (explode('@', $order->address) as $val) :
                                                            echo $val;
                                                            echo '<br>';
                                                        endforeach; ?>
                                                    </span>
                                                    <a href="<?= base_url() ?>vendor/order-detail/<?= doEncode($order->order_id) . '/' . doEncode(0) ?>" class="more_btn"></a>
                                                </td>
                                                <td class="date">
                                                    <strong>Drop Off Date:</strong>
                                                    <span><?= date_picker_format_date($order->delivery_date, 'D, d M Y', false) ?> - <?= $order->delivery_time ?></span>
                                                    <a href="<?= base_url() ?>vendor/order-detail/<?= doEncode($order->order_id) . '/' . doEncode(0) ?>" class="more_btn"></a>
                                                </td>
                                            <?php endif; ?>
                                            <td class="price">
                                                £<?= order_total_price($order->order_id) ?>
                                                <a href="<?= base_url() ?>vendor/order-detail/<?= doEncode($order->order_id) . '/' . doEncode(0) ?>" class="more_btn"></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <ul class="pagination">
                            <?php echo $pages; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- orders -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>