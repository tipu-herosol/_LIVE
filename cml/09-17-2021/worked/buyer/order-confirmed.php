<!doctype html>
<html>

<head>
    <title>Order Confirmed — Compare My Laundry</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common confirm>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <h2 class="heading">Order Confirmed</h2>
                    <p>Deleniti iste earum sed est distinctio corporis dolore autem, omnis facere amet blanditiis velit!</p>
                </div>
            </div>
            <div class="image"><img src="<?= base_url() ?>assets/images/illustration_terms.svg" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="place">
            <div class="contain text-center">
                <h2 class="heading">Order Confirmed</h2>
                <div class="blk">
                    <h3 class="color">Thank You For Your Order</h3>
                    <p>Your Order Number is:</p>
                    <h1><a href="<?= base_url() ?>buyer/order-detail/<?= $order_id ?>">#<?= num_size(doDecode($order_id)) ?></a></h1>
                    <div class="br"></div>
                    <p>If you have any query then contact with <em class="color semi"><?= $vendor->mem_fname . ' ' . $vendor->mem_lname ?></em> on Email <a href="tel:<?= $vendor->mem_email ?>"><?= $vendor->mem_email ?></a> or Phone <a href="mailto:<?= $vendor->mem_company_phone ?>"><?= $vendor->mem_company_phone ?></a>.</p>
                </div>
            </div>
        </section>
        <!-- place -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>