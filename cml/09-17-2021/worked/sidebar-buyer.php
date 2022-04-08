<aside>
    <ul>
        <li class="<?php if ($this->uri->segment(2) == "dashboard") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>buyer/dashboard">
                <img src="<?= base_url() ?>assets/images/icon-cog-fill.svg" alt="">
                <em>Account</em>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == "orders" || $this->uri->segment(2) == "order-detail") {
                        echo 'active';
                    } ?> new_odr">
            <a href="<?= base_url() ?>buyer/orders">
                <img src="<?= base_url() ?>assets/images/icon-list.svg" alt="">
                <em>Orders</em>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == "credits") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>buyer/credits">
                <img src="<?= base_url() ?>assets/images/icon-credit-card.svg" alt="">
                <em>Credits</em>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == "transactions") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>buyer/transactions">
                <img src="<?= base_url() ?>assets/images/icon-transaction.svg" alt="">
                <em>Wallet</em>
            </a>
        </li>
    </ul>
</aside>
<!-- aside -->