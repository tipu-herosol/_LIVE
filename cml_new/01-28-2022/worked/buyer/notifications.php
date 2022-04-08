<!DOCTYPE html>
<html lang="en">

<head>
    <title>Notifications — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body data-page="dash">
    <?php $this->load->view('includes/header'); ?>
    <main>


        <section id="notify">
            <div class="contain">
                <div class="blk noti_blk">
                    <h4 class="subheading">Your Notifications</h4>
                    <?php if (count($notifications) === 0) : ?>
                        <div class="inner">
                            You have 0 notification.
                        </div>
                        <?php
                    else :
                        foreach ($notifications as $index => $notif) :
                        ?>
                            <div class="inner">
                                <div class="ico icon">
                                    <a>
                                        <img src="<?= get_site_image_src("members", get_mem_image($notif->from_id), 'thumb_'); ?>" alt="">
                                    </a>
                                </div>
                                <div class="txt">
                                    <div class="cnt">
                                        <h6><?= makeNotifHeading($notif->cat) ?> From <?= get_mem_name($notif->from_id) ?></h6>
                                        <p><?= makeNotifText($notif->txt) ?></p>
                                    </div>
                                    <span class="time"><?= time_ago($notif->date) ?></span>
                                </div>
                            </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <!-- notify -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>