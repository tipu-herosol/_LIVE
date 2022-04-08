<aside>
    <ul>
        <li class="<?php if ($this->uri->segment(2) == "dashboard") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>vendor/dashboard">
                <img src="<?= base_url() ?>assets/images/icon-cog-fill.svg" alt="">
                <em>Account</em>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == "orders" || $this->uri->segment(2) == "order-detail") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>vendor/orders">
                <img src="<?= base_url() ?>assets/images/icon-list.svg" alt="">
                <em>Orders</em>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == "credits") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>vendor/credits">
                <img src="<?= base_url() ?>assets/images/icon-credit-card.svg" alt="">
                <em>Credits</em>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == "wallet") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>vendor/wallet">
                <img src="<?= base_url() ?>assets/images/icon-earnings.svg" alt="">
                <em>Wallet</em>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == "price-list") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>vendor/price-list">
                <img src="<?= base_url() ?>assets/images/icon-price-list.svg" alt="">
                <em>Price List</em>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == "bank-accounts") {
                        echo 'active';
                    } ?>">
            <a href="<?= base_url() ?>vendor/bank-accounts">
                <img src="<?= base_url() ?>assets/images/icon-price-list.svg" alt="">
                <em>Bank Accounts</em>
            </a>
        </li>
    </ul>
</aside>
<!-- aside -->