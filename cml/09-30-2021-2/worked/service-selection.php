<!doctype html>
<html>

<head>
    <title><?= $page_title ?> — <?= $site_settings->site_name ?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common offer>


        <section id="sBanner">
            <div class="contain">
                <div class="content">
                    <h2 class="heading"><?= $content['heading'] ?></h2>
                    <p><?= $content['header_detail'] ?></p>
                </div>
            </div>
            <div class="image"><img src="<?= getImageSrc(UPLOAD_PATH . "images/", $content['image1']) ?>" alt=""></div>
        </section>
        <!-- sBanner -->


        <section id="offer">
            <div class="contain">
                <ul class="svcLst flex text-center">
                    <li class="active">
                        <a data-toggle="tab" href="#WashDry" style="display: block;">
                            <img src="<?= get_site_image_src("services", $wash_and_dry->image, ''); ?>" alt="">
                            <em><?= $wash_and_dry->name ?></em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#WashIron" style="display: block;">
                            <img src="<?= get_site_image_src("services", $wash_and_iron->image, ''); ?>" alt="">
                            <em><?= $wash_and_iron->name ?></em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#DryCleaning" style="display: block;">
                            <img src="<?= get_site_image_src("services", $dry_cleaning->image, ''); ?>" alt="">
                            <em><?= $dry_cleaning->name ?></em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#IronOnly" style="display: block;">
                            <img src="<?= get_site_image_src("services", $iron_only->image, ''); ?>" alt="">
                            <em><?= $iron_only->name ?></em>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#BulkyItems" style="display: block;">
                            <img src="<?= get_site_image_src("services", $buly_items->image, ''); ?>" alt="">
                            <em><?= $buly_items->name ?></em>
                        </a>
                    </li>
                </ul>
                <form action="" method="post" class="frmAjax">
                    <input type="hidden" name="zipcode" value="<?= $_GET['zipcode'] ?>">
                    <input type="hidden" name="lat" value="<?= $_GET['lat'] ?>">
                    <input type="hidden" name="long" value="<?= $_GET['long'] ?>">
                    <div class="smryMainBlk">
                        <div class="blk tab-content">
                            <div id="WashDry" class="tab-pane fade in active">
                                <h4><?= $wash_and_dry->name ?></h4>
                                <p><?= $wash_and_dry->details ?></p>
                                <hr>
                                <div class="serveBlk">
                                    <div class="icon"><img src="<?= get_site_image_src("services", $wash_and_dry->image, ''); ?>" alt=""></div>
                                    <div class="txt">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Item</th>
                                                    <td></td>
                                                    <th>Add To Basket</th>
                                                </tr>
                                                <?php
                                                foreach (get_sub_services($wash_and_dry->id) as $key => $sub_service) :
                                                ?>
                                                    <tr id="<?= $sub_service->id ?>">
                                                        <td><?= $sub_service->name ?></td>
                                                        <td></td>
                                                        <td><button type="button" id="<?= $sub_service->id ?>" class="actBtn addBtn left" data-subservice-id="<?= $sub_service->id ?>" data-name="<?= $sub_service->name ?>"></button></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="DryCleaning" class="tab-pane fade">
                                <h4><?= $dry_cleaning->name ?></h4>
                                <p><?= $dry_cleaning->details ?></p>
                                <hr>
                                <div class="serveBlk">
                                    <div class="icon"><img src="<?= get_site_image_src("services", $dry_cleaning->image, ''); ?>" alt=""></div>
                                    <div class="txt">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Item</th>
                                                    <td></td>
                                                    <th>Add To Basket</th>
                                                </tr>
                                                <?php
                                                foreach (get_sub_services($dry_cleaning->id) as $key => $sub_service) :
                                                ?>
                                                    <tr id="<?= $sub_service->id ?>">
                                                        <td><?= $sub_service->name ?></td>
                                                        <td></td>
                                                        <td><button type="button" id="<?= $sub_service->id ?>" class="actBtn addBtn left" data-subservice-id="<?= $sub_service->id ?>" data-name="<?= $sub_service->name ?>"></button></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="WashIron" class="tab-pane fade">
                                <h4><?= $wash_and_iron->name ?></h4>
                                <p><?= $wash_and_iron->details ?></p>
                                <hr>
                                <div class="serveBlk">
                                    <div class="icon"><img src="<?= get_site_image_src("services", $wash_and_iron->image, ''); ?>" alt=""></div>
                                    <div class="txt">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Item</th>
                                                    <td></td>
                                                    <th>Add To Basket</th>
                                                </tr>
                                                <?php
                                                foreach (get_sub_services($wash_and_iron->id) as $key => $sub_service) :
                                                ?>
                                                    <tr id="<?= $sub_service->id ?>">
                                                        <td><?= $sub_service->name ?></td>
                                                        <td></td>
                                                        <td><button type="button" id="<?= $sub_service->id ?>" class="actBtn addBtn left" data-subservice-id="<?= $sub_service->id ?>" data-name="<?= $sub_service->name ?>"></button></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="IronOnly" class="tab-pane fade">
                                <h4><?= $iron_only->name ?></h4>
                                <p><?= $iron_only->details ?></p>
                                <hr>
                                <div class="serveBlk">
                                    <div class="icon"><img src="<?= get_site_image_src("services", $iron_only->image, ''); ?>" alt=""></div>
                                    <div class="txt">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Item</th>
                                                    <td></td>
                                                    <th>Add To Basket</th>
                                                </tr>
                                                <?php
                                                foreach (get_sub_services($iron_only->id) as $key => $sub_service) :
                                                ?>
                                                    <tr id="<?= $sub_service->id ?>">
                                                        <td><?= $sub_service->name ?></td>
                                                        <td></td>
                                                        <td><button type="button" id="<?= $sub_service->id ?>" class="actBtn addBtn left" data-subservice-id="<?= $sub_service->id ?>" data-name="<?= $sub_service->name ?>"></button></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="BulkyItems" class="tab-pane fade">
                                <h4><?= $buly_items->name ?></h4>
                                <p><?= $buly_items->details ?></p>
                                <hr>
                                <div class="serveBlk">
                                    <div class="icon"><img src="<?= get_site_image_src("services", $buly_items->image, ''); ?>" alt=""></div>
                                    <div class="txt">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Item</th>
                                                    <td></td>
                                                    <th>Add To Basket</th>
                                                </tr>
                                                <?php
                                                foreach (get_sub_services($buly_items->id) as $key => $sub_service) :
                                                ?>
                                                    <tr id="<?= $sub_service->id ?>">
                                                        <td><?= $sub_service->name ?></td>
                                                        <td></td>
                                                        <td><button type="button" id="<?= $sub_service->id ?>" class="actBtn addBtn left" data-subservice-id="<?= $sub_service->id ?>" data-name="<?= $sub_service->name ?>"></button></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="Deals" class="tab-pane fade hidden">
                                <h4><?= $deals->name ?></h4>
                                <p><?= $deals->details ?></p>
                                <hr>
                                <div class="serveBlk">
                                    <div class="icon"><img src="<?= get_site_image_src("services", $deals->image, ''); ?>" alt=""></div>
                                    <div class="txt">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Item</th>
                                                    <td></td>
                                                    <th>Add To Basket</th>
                                                </tr>
                                                <?php
                                                foreach (get_sub_services($deals->id) as $key => $sub_service) :
                                                ?>
                                                    <tr id="<?= $sub_service->id ?>">
                                                        <td><?= $sub_service->name ?></td>
                                                        <td>Sapiente nemo aliquid aliquam eveniet blanditiis rem, unde expedita quibusdam veritatis sint, animi hic totam aut.</td>
                                                        <td></td>
                                                        <td><button type="button" id="<?= $sub_service->id ?>" class="actBtn addBtn left" data-subservice-id="<?= $sub_service->id ?>" data-name="<?= $sub_service->name ?>"></button></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blk smryBlk">
                            <div class="_header">
                                <h5>Basket Summary</h5>
                                <div class="bTn hidden">
                                    <button type="reset" class="webBtn labelBtn">Reset</button>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis quas libero totam illo hic.</p>
                            <div class="serveBlk">
                                <table class="sm pb data_list">
                                    <tbody id="selected_services">
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="bTn">
                                <button type="submit" class="webBtn blockBtn nextBtn"><i class="spinner hidden"></i>Get Quotes</button>
                            </div>
                            <br>
                            <div class="alertMsg" style="display:none"></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- offer -->
        <script>
            $(document).on("click", ".actBtn", function() {
                let selectedArea = $('#selected_services');
                $('.alertMsg').hide();
                if ($(this).hasClass("addBtn")) {
                    if ($(this).hasClass('left')) {
                        selectedArea.prepend(`<tr data-id="${$(this).data('subservice-id')}">
                            <td>${$(this).data('name')}</td>
                            <input type="hidden" name="selected_service[]" value="${$(this).data('subservice-id')}">
                            <td>
                                <div class="qtyBtn">
                                    <a class="qtyMinus"></a>
                                    <input type="text" name="qty[]" value="1" class="qty" readonly>
                                    <a class="qtyPlus"></a>
                                </div>
                            </td>
                            <td><button type="button" class="actBtn delBtn right" data-subservice-id="${$(this).data('subservice-id')}"></button></td>
                        </tr>`);
                    }
                    $(this).removeClass("addBtn").addClass("delBtn");
                } else {
                    if ($(this).hasClass('right')) {
                        $("td button").filter("[data-subservice-id='" + $(this).data('subservice-id') + "']").removeClass('delBtn').addClass('addBtn');
                        $(this).parent().parent().remove();
                    } else {
                        $("tr").filter("[data-id='" + $(this).data('subservice-id') + "']").remove();
                        $(this).removeClass("delBtn").addClass("addBtn");
                    }

                }
            });

            // This button will increment the value
            $(document).on("click", ".qtyPlus", function(e) {
                e.preventDefault();
                $('.servicesMessage').fadeOut();
                var parent = $(this).parent().children(".qty");
                var currentVal = parent.val();

                if (!isNaN(currentVal)) {
                    let incrementedVal = parseInt(currentVal) + 1;
                    parent.val(incrementedVal);
                } else {
                    parent.val(1);
                }

            });

            // This button will decrement the value till 0
            $(document).on("click", ".qtyMinus", function(e) {
                e.preventDefault();
                $('.servicesMessage').fadeOut();
                var parent = $(this).parent().children(".qty");
                var currentVal = parent.val();

                if (!isNaN(currentVal) && currentVal > 1) {
                    let decrementedVal = parseInt(currentVal) - 1;
                    parent.val(decrementedVal);
                } else {
                    parent.val(1);
                }

            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>