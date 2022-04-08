<!doctype html>
<html>

<head>
    <title>My Orders — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-vendor'); ?>
    <main dash orders>
        <?php $this->load->view('includes/sidebar-vendor'); ?>


        <section id="orders">
            <div class="contain-fluid">
                <div class="blk topBlk">
                    <div class="ico"><img src="<?= get_site_image_src("members", $mem_data->mem_image, '300p_'); ?>" alt=""></div>
                    <div class="txt">
                        <h3><span class="regular">Welcome,</span> Dear, <?= $mem_data->mem_fname . ' ' . $mem_data->mem_lname ?>!<span class="regular">Nice to see you<?= $mem_data->mem_first_time_login == 'no' ? ' again.' : '.' ?></span></h3>
                    </div>
                    <div class="toggleBlk">
                        <div class="switchBtn hidden">
                            <input type="checkbox" name="" id="" checked>
                            <em></em>
                            <small></small>
                        </div>
                    </div>
                </div>
                <?php if (empty($orders)) : ?>
                    <div class="alert alert-info alert-sm text-white">No order yet.</div>
                    <?php
                else :
                    foreach ($orders as $key => $order) : ?>
                        <div class="blk jobBlk">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class="sm">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <strong class="odr_heading tipi"><em>Order No:</em></strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="red-color">#<?= num_size($order->order_id); ?></etd>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Customer Name</th>
                                                    </tr>
                                                    <tr>
                                                        <td><?= $order->mem_fname . ' ' . $order->mem_lname ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="sm">
                                                <tbody>
                                                    <?php if ($order->pick_and_drop_service == '1') : ?>
                                                        <tr>
                                                            <th>Collection Date:</th>
                                                            <td><?= date_picker_format_date($order->collection_date, 'D, d M Y', false) ?></etd>
                                                        </tr>
                                                        <tr>
                                                            <th>Collection Time:</th>
                                                            <td><?= $order->collection_time ?></etd>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Delivery Date:</th>
                                                            <td><?= date_picker_format_date($order->delivery_date, 'D, d M Y', false) ?></etd>
                                                        </tr>
                                                        <tr>
                                                            <th>Delivery Time:</th>
                                                            <td><?= $order->delivery_time ?></etd>
                                                        </tr>
                                                    <?php else : ?>
                                                        <tr>
                                                            <th>Address</th>
                                                            <td>
                                                                <?php
                                                                foreach (explode('@', $order->address) as $val) :
                                                                    echo $val;
                                                                    echo '<br>';
                                                                endforeach;
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Drop Off Date:</th>
                                                            <td><?= date_picker_format_date($order->delivery_date, 'D, d M Y', false) ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Drop Off Time:</th>
                                                            <td><?= $order->delivery_time ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="sm">
                                                <tbody>
                                                    <tr>
                                                        <th>Order Service</th>
                                                    </tr>
                                                    <tr>
                                                        <td><?= implode(', ', $order->services) ?></etd>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="price">£<?= order_total_price($order->order_id) ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td width="5%">
                                            <div class="bTn">
                                                <span class="webBtn mdBtn blockBtn <?= get_order_status($order->order_status); ?> "><?= $order->order_status ?></span>
                                                <a href="<?= base_url() ?>vendor/order-detail/<?= doEncode($order->order_id) ?>" class="webBtn mdBtn blockBtn">View Detail</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                <?php
                    endforeach;
                endif; ?>
            </div>
        </section>
        <!-- orders -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>