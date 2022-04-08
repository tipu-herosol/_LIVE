<!-- JS Files -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js?v-<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js?v-<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-ui.min.js?v-<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.validate.min.js?v-' . $site_settings->site_version) ?>"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/js/datepicker.min.js?v-<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/owl.carousel.min.js?v-<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/masonry.pkgd.min.js?v-<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/animation.min.js?v-<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/fancybox.min.js?v-<?= $site_settings->site_version ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/toastr.min.js?v-' . $site_settings->site_version) ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/main.js?v-' . $site_settings->site_version) ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/custom-validation.js?v-' . $site_settings->site_version) ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/custom.js?v-' . $site_settings->site_version) ?>"></script>

<?php
if ($ckeditor) {
?>
    <script type="text/javascript" src="<?= base_url('assets/js/ckeditor5.js?v-' . $site_settings->site_version) ?>"></script>
    <script type="text/javascript">
        DecoupledEditor
            .create(document.querySelector('#descp'), {})
            .then(editor => {
                const toolbarContainer = document.querySelector('[data-number="1"] .toolbar-container');
                toolbarContainer.prepend(editor.ui.view.toolbar.element);

                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
<?php
}
if ($checkout) {
?>
    <script type="text/javascript" src="<?= base_url('assets/js/checkout.js?v-' . $site_settings->site_version) ?>"></script>
<?php
}
?>
<?php
if ($wallet) {
?>
    <script type="text/javascript" src="<?= base_url('assets/js/wallet.js?v-' . $site_settings->site_version) ?>"></script>
<?php
}
?>
<script type="text/javascript">
    $(window).on('load', function() {
        $('.datepicker').datepicker({
            // multidate: true,
            format: 'mm-dd-yyyy',
            todayHighlight: true,
            multidateSeparator: ',  ',
            templates: {
                leftArrow: '<i class="fi-arrow-left"></i>',
                rightArrow: '<i class="fi-arrow-right"></i>'
            }
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $(document).on('click', 'aside > .webBtn', function() {
            $('aside ul').slideToggle();
        });
    });
</script>

<script type="text/javascript">
    $(window).on('load', function() {
        $(document).on("click", "#results .tabLst > li > a", function() {
            var masonary = setInterval(function() {
                $("[masonary_parent]").masonry({
                    percentPosition: true,
                    itemSelector: "[masonary]"
                });
                clearInterval(masonary);
            }, 500);
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $(document).on("click", "#detail .dataBtn", function() {
            $("#detail .flexRow > .col2").addClass("active");
        });
        $(document).on("click", "#detail .sideBlk .crosBtn", function() {
            $("#detail .flexRow > .col2").removeClass("active");
        });
    });
</script>
<script type="text/javascript">
    $(window).on("load", function() {
        // AOS Js
        AOS.init({
            easing: "ease-in-out-sine",
            offset: 10,
            disable: window.innerWidth <= 991
        });
    });
</script>