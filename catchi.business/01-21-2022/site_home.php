<?php echo showMsg(); ?>
<?php echo getBredcrum(ADMIN, array('#' => 'Home Page')); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <!-- <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>About Page</strong></h2> -->
        <h2 class="no-margin"><i class="fa fa-cogs"></i> <strong>Home Page</strong></h2>
    </div>
    
</div>
<hr>
<div class="row col-md-12">
    <form role="form" class="form-horizontal" action="<?= base_url(ADMIN) ?>/home-page" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                <h3><i class="fa fa-bars"></i> Page Title</h3>
                <hr class="hr-short">
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label"> Page Title <span class="symbol required"></span></label>
                        <input type="text" name="page_title" value="<?php if (isset($row->page_title)) echo $row->page_title; ?>" class="form-control" >
                    </div>
                </div>
                <h3><i class="fa fa-bars"></i> Meta Tags</h3>
                <hr class="hr-short">
                <div class="form-group">
                    <div class="col-md-3">
                        <label class="control-label"> Meta Title <span class="symbol required"></span></label>
                        <input type="text" name="meta_title" value="<?php if (isset($row->meta_title)) echo $row->meta_title; ?>" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="control-label"> Meta Keywords <span class="symbol required"></span></label>
                        <input type="text" name="meta_keyword" value="<?php if (isset($row->meta_keyword)) echo $row->meta_keyword; ?>" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label class="control-label"> Meta Description <span class="symbol required"></span></label>
                        <input type="text" name="meta_description" value="<?php if (isset($row->meta_description)) echo $row->meta_description; ?>" class="form-control" >
                    </div>
                </div>
            </div>
        </div>
        <h3><i class="fa fa-bars"></i> Banner Section (Section 1) </h3>
        
        <hr class="hr-short">
        <div class="row">
            <div class="col-md-6">
                <div style="margin:15px 0px" class="">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                   Banner Background Image 
                                </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <?php
                            get_site_image_src("images", $row->image1);
                        ?>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                            <img src="<?= !empty($row->image1) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image1) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                            <span class="btn btn-black btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image1" accept="image/*" <?php if(empty($row->image1)){echo 'required=""';}?>>
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
            
        
        
        <div class="row">
            <div class="col-md-6">
                    <label class="control-label">Banner Heading <span class="symbol required"></span></label>
                    <input type="text" name="banner_heading" value="<?php if (isset($row->banner_heading)) echo $row->banner_heading; ?>" class="form-control" >
                    
                    
            </div>
            <div class="col-md-6">
                <label class="control-label">Banner Description  <span class="symbol required"></span></label>
                <textarea rows="5" name="banner_desc" class="ckeditor" ><?php if (isset($row->banner_desc)) echo $row->banner_desc; ?></textarea>
                    
                    
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-4">
                <div style="margin:15px 0px" class="">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                   Banner Image 1
                                </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <?php
                            get_site_image_src("images", $row->image2);
                        ?>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                            <img src="<?= !empty($row->image2) ? getImageSrc(UPLOADIMAGE ."images/".$row->image2) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                            <span class="btn btn-black btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image2" accept="image/*" <?php if(empty($row->image2)){echo 'required=""';}?>>
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div style="margin:15px 0px" class="">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                   Banner Image 2
                                </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <?php
                            get_site_image_src("images", $row->image3);
                        ?>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                            <img src="<?= !empty($row->image3) ? getImageSrc(UPLOADIMAGE ."images/".$row->image3) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                            <span class="btn btn-black btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image3" accept="image/*" <?php if(empty($row->image3)){echo 'required=""';}?>>
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div style="margin:15px 0px" class="">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                   Banner Image 3
                                </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <?php
                            get_site_image_src("images", $row->image4);
                        ?>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                            <img src="<?= !empty($row->image4) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image4) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                            <span class="btn btn-black btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image4" accept="image/*" <?php if(empty($row->image4)){echo 'required=""';}?>>
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <h3><i class="fa fa-bars"></i> Get Discovered Section (Section 2)</h3>
        <hr class="hr-short">
        <div class="row">
            <div class="col-md-12">
                
                    
                <label class="control-label"> Heading <span class="symbol required"></span></label>
                <input type="text" name="second_sec_heading" value="<?php if (isset($row->second_sec_heading)) echo $row->second_sec_heading; ?>" class="form-control" >
                        
                
            </div> 
                        
     
        </div>
        <div class="row">
            <div class="col-md-4">
                <div style="margin:15px 0px" class="">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                Second Section Left Image 
                                </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <?php
                            get_site_image_src("images", $row->image5);
                        ?>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                            <img src="<?= !empty($row->image5) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image5) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                            <span class="btn btn-black btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image5" accept="image/*" <?php if(empty($row->image5)){echo 'required=""';}?>>
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                          

            </div>
            
           <div class="col-md-4">
                <label class="control-label">Second Left Section Heading <span class="symbol required"></span></label>
                <input type="text" name="second_left_sec_heading" value="<?php if (isset($row->second_left_sec_heading)) echo $row->second_left_sec_heading; ?>" class="form-control" >
           </div>
           <div class="col-md-4">
                <label class="control-label">Second Left Section Description <span class="symbol required"></span></label>
                <input type="text" name="second_left_sec_desc" value="<?php if (isset($row->second_left_sec_desc)) echo $row->second_left_sec_desc; ?>" class="form-control" >
           </div>
     
        </div>

        <div class="row">
            <div class="col-md-4">
                <div style="margin:15px 0px" class="">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                Second Section Right Image 
                                </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <?php
                            get_site_image_src("images", $row->image6);
                        ?>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                            <img src="<?= !empty($row->image6) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image6) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                            <span class="btn btn-black btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image6" accept="image/*" <?php if(empty($row->image6)){echo 'required=""';}?>>
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    
            </div>
            
           <div class="col-md-4">
                <label class="control-label">Second Right Section Heading <span class="symbol required"></span></label>
                <input type="text" name="second_right_sec_heading" value="<?php if (isset($row->second_right_sec_heading)) echo $row->second_right_sec_heading; ?>" class="form-control" >
           </div>
           <div class="col-md-4">
                <label class="control-label">Second Right Section Description <span class="symbol required"></span></label>
                <input type="text" name="second_right_sec_desc" value="<?php if (isset($row->second_right_sec_desc)) echo $row->second_right_sec_desc; ?>" class="form-control" >
           </div>
     
        </div>
        <h3><i class="fa fa-bars"></i>Section 3 (How It Works)</h3>
        
        <hr class="hr-short">
        <div class="row">
            
                
                    <div class="col-md-6">
                        <label class="control-label"> Heading </label>
                        <input type="text" name="sec3_heading" value="<?php if (isset($row->sec3_heading)) echo $row->sec3_heading; ?>" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label class="control-label"> Description </label>
                        <textarea rows="3" name="sec3_desc" class="ckeditor" ><?php if (isset($row->sec3_desc)) echo $row->sec3_desc; ?></textarea>
                    </div>
              
        </div>
        <div class="row">
            <div class="col-md-4">
                <div style="margin:15px 0px" class="">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                Third Section Left Image 
                                </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <?php
                            get_site_image_src("images", $row->image7);
                        ?>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                            <img src="<?= !empty($row->image7) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image7) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                            <span class="btn btn-black btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image7" accept="image/*" <?php if(empty($row->image7)){echo 'required=""';}?>>
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    
            </div>
            <div class="col-md-4">
                <label class="control-label"> Left Heading </label>
                <input type="text" name="sec3_left_heading" value="<?php if (isset($row->sec3_left_heading)) echo $row->sec3_left_heading; ?>" class="form-control" >
                
            </div> 
            <div class="col-md-4">
                <label class="control-label"> Left Description </label>
                <input type="text" name="sec3_left_desc" value="<?php if (isset($row->sec3_left_desc)) echo $row->sec3_left_desc; ?>" class="form-control" >
                
            </div>               
        </div>
        <div class="row">
            <div class="col-md-4">
                <div style="margin:15px 0px" class="">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                Third Section Middle Image 
                                </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <?php
                            get_site_image_src("images", $row->image8);
                        ?>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                            <img src="<?= !empty($row->image8) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image8) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                            <span class="btn btn-black btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image8" accept="image/*" <?php if(empty($row->image8)){echo 'required=""';}?>>
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    
            </div>
            <div class="col-md-4">
                <label class="control-label"> Middle Heading </label>
                <input type="text" name="sec3_middle_heading" value="<?php if (isset($row->sec3_middle_heading)) echo $row->sec3_middle_heading; ?>" class="form-control" >
                
            </div> 
            <div class="col-md-4">
                <label class="control-label"> Middle Description </label>
                <input type="text" name="sec3_middle_desc" value="<?php if (isset($row->sec3_middle_desc)) echo $row->sec3_middle_desc; ?>" class="form-control" >
                
            </div>               
        </div>
        <div class="row">
            <div class="col-md-4">
                <div style="margin:15px 0px" class="">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                Third Section Right Image 
                                </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <?php
                            get_site_image_src("images", $row->image9);
                        ?>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                            <img src="<?= !empty($row->image9) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image9) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                            <span class="btn btn-black btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image9" accept="image/*" <?php if(empty($row->image9)){echo 'required=""';}?>>
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    
            </div>
            <div class="col-md-4">
                <label class="control-label"> Right Heading </label>
                <input type="text" name="sec3_right_heading" value="<?php if (isset($row->sec3_right_heading)) echo $row->sec3_right_heading; ?>" class="form-control" >
                
            </div> 
            <div class="col-md-4">
                <label class="control-label"> Right Description </label>
                <input type="text" name="sec3_right_desc" value="<?php if (isset($row->sec3_right_desc)) echo $row->sec3_right_desc; ?>" class="form-control" >
                
            </div>               
        </div>
        <div class="row">
            <div class="col-md-6">
                <div style="margin:15px 0px" class="">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                Third Section Bottom Image 
                                </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <?php
                            get_site_image_src("images", $row->image10);
                        ?>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                            <img src="<?= !empty($row->image10) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image10) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                            <span class="btn btn-black btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image10" accept="image/*" <?php if(empty($row->image10)){echo 'required=""';}?>>
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    
            </div>
            <div class="col-md-6">
                <label class="control-label"> Bottom Heading 1</label>
                <input type="text" name="sec3_bottom_heading1" value="<?php if (isset($row->sec3_bottom_heading1)) echo $row->sec3_bottom_heading1; ?>" class="form-control" >
                
            </div> 
                           
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="control-label"> Bottom Heading 2</label>
                <input type="text" name="sec3_bottom_heading2" value="<?php if (isset($row->sec3_bottom_heading2)) echo $row->sec3_bottom_heading2; ?>" class="form-control" >
                
            </div> 
            <div class="col-md-6">
                <label class="control-label"> Bottom Description </label>
                <textarea rows="3" name="sec3_bottom_desc" class="ckeditor" ><?php if (isset($row->sec3_bottom_desc)) echo $row->sec3_bottom_desc; ?></textarea>
                
            </div>
        </div>
        <h3><i class="fa fa-bars"></i> Section 4 (Claim And Manage Business)</h3>
        
        <hr class="hr-short">
            <div class="row">
            
                
                <div class="col-md-12">
                    <label class="control-label"> Heading </label>
                    <input type="text" name="sec4_heading" value="<?php if (isset($row->sec4_heading)) echo htmlentities($row->sec4_heading); ?>" class="form-control" >
                    
                </div>
             
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div style="margin:15px 0px" class="">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                    Fourth Section Left Image 
                                    </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <?php
                                get_site_image_src("images", $row->image11);
                            ?>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                <img src="<?= !empty($row->image11) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image11) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                <span class="btn btn-black btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="image11" accept="image/*" <?php if(empty($row->image11)){echo 'required=""';}?>>
                                </span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
        
                </div>
                <div class="col-md-4">
                    <label class="control-label"> Left Heading </label>
                    <input type="text" name="sec4_left_heading" value="<?php if (isset($row->sec4_left_heading)) echo $row->sec4_left_heading; ?>" class="form-control" >
                    
                </div> 
                <div class="col-md-4">
                    <label class="control-label"> Left Description </label>
                    <input type="text" name="sec4_left_desc" value="<?php if (isset($row->sec4_left_desc)) echo $row->sec4_left_desc; ?>" class="form-control" >
                    
                </div>               
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div style="margin:15px 0px" class="">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                    Fourth Section Middle Image 
                                    </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <?php
                                get_site_image_src("images", $row->image12);
                            ?>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                <img src="<?= !empty($row->image12) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image12) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                <span class="btn btn-black btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="image12" accept="image/*" <?php if(empty($row->image12)){echo 'required=""';}?>>
                                </span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
        
                </div>
                <div class="col-md-4">
                    <label class="control-label"> Middle Heading </label>
                    <input type="text" name="sec4_middle_heading" value="<?php if (isset($row->sec4_middle_heading)) echo $row->sec4_middle_heading; ?>" class="form-control" >
                    
                </div> 
                <div class="col-md-4">
                    <label class="control-label"> Middle Description </label>
                    <input type="text" name="sec4_middle_desc" value="<?php if (isset($row->sec4_middle_desc)) echo $row->sec4_middle_desc; ?>" class="form-control" >
                    
                </div>               
            </div>
            <div class="row">
                    <div class="col-md-4">
                        <div style="margin:15px 0px" class="">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                    Fourth Section Right Image 
                                    </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <?php
                                get_site_image_src("images", $row->image13);
                            ?>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                <img src="<?= !empty($row->image13) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image13) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-black btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image13" accept="image/*" <?php if(empty($row->image13)){echo 'required=""';}?>>
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                </div>
                <div class="col-md-4">
                    <label class="control-label"> Right Heading </label>
                    <input type="text" name="sec4_right_heading" value="<?php if (isset($row->sec4_right_heading)) echo $row->sec4_right_heading; ?>" class="form-control" >
                    
                </div> 
                <div class="col-md-4">
                    <label class="control-label"> Right Description </label>
                    <input type="text" name="sec4_right_desc" value="<?php if (isset($row->sec4_right_desc)) echo $row->sec4_right_desc; ?>" class="form-control" >
                    
                </div>               
            </div>
            
            
        </div>
         
        <h3><i class="fa fa-bars"></i> Section 5 (Take Your Business To Next Level)</h3>
        
        <hr class="hr-short">
        <div class="row">
               
            <div class="col-md-6">
                <label class="control-label">Section 5 Main Heading </label>
                <input type="text" name="sec5_heading" value="<?php if (isset($row->sec5_heading)) echo $row->sec5_heading; ?>" class="form-control" >
            </div>
            <div class="col-md-6">
                <div style="margin:15px 0px" class="">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                 Section 5 Left Image 
                                </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <?php
                            get_site_image_src("images", $row->image14);
                        ?>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                            <img src="<?= !empty($row->image14) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image14) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                            <span class="btn btn-black btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image14" accept="image/*" <?php if(empty($row->image14)){echo 'required=""';}?>>
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                </div>
            </div>
            </div>
    
            </div>
              
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Section 5 Right Heading 1</label>
                <input type="text" name="sec5_right_heading1" value="<?php if (isset($row->sec5_right_heading1)) echo $row->sec5_right_heading1; ?>" class="form-control" >
            </div>
            <div class="col-md-6">
                <label class="control-label">Section 5 Right Heading 2</label>
                <input type="text" name="sec5_right_heading2" value="<?php if (isset($row->sec5_right_heading2)) echo $row->sec5_right_heading2; ?>" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label class="control-label">Section 5 Right Description</label>
                <textarea rows="3" name="sec5_right_desc" class="ckeditor" ><?php if (isset($row->sec5_right_desc)) echo $row->sec5_right_desc; ?></textarea>
            </div>
            
        </div>
        
        <h3><i class="fa fa-bars"></i> Section 6 (Catchi Is Your Gateway)</h3>
        <div class="row">
            <div class="col-md-12">
                <label class="control-label">Main Heading </label>
                <input type="text" name="sec6_heading" value="<?php if (isset($row->sec6_heading)) echo $row->sec6_heading; ?>" class="form-control" >
            </div>
            
                    
        </div>
        <h4>Sub Sections</h4>
        <div class="row">
                    <div class="col-md-6">
                        <label class="control-label">Sub Section 1 Percentage </label>
                        <input type="text" name="sec6_heading1" value="<?php if (isset($row->sec6_heading1)) echo $row->sec6_heading1; ?>" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Sub Section 1 Detail</label>
                        <input type="text" name="sec6_desc1" value="<?php if (isset($row->sec6_desc1)) echo $row->sec6_desc1; ?>" class="form-control" >
                    </div>

                    <div class="col-md-6">
                        <label class="control-label">Sub Section 2 Percentage </label>
                        <input type="text" name="sec6_heading2" value="<?php if (isset($row->sec6_heading2)) echo $row->sec6_heading2; ?>" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Sub Section 2 Detail</label>
                        <input type="text" name="sec6_desc2" value="<?php if (isset($row->sec6_desc2)) echo $row->sec6_desc2; ?>" class="form-control" >
                    </div>

                    <div class="col-md-6">
                        <label class="control-label">Sub Section 3 Percentage </label>
                        <input type="text" name="sec6_heading3" value="<?php if (isset($row->sec6_heading3)) echo $row->sec6_heading3; ?>" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Sub Section 3 Detail</label>
                        <input type="text" name="sec6_desc3" value="<?php if (isset($row->sec6_desc3)) echo $row->sec6_desc3; ?>" class="form-control" >
                    </div>

                    <div class="col-md-6">
                        <label class="control-label">Sub Section 4 Percentage </label>
                        <input type="text" name="sec6_heading4" value="<?php if (isset($row->sec6_heading4)) echo $row->sec6_heading4; ?>" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Sub Section 4 Detail</label>
                        <input type="text" name="sec6_desc4" value="<?php if (isset($row->sec6_desc4)) echo $row->sec6_desc4; ?>" class="form-control" >
                    </div>
                    
        </div>
        <h3><i class="fa fa-bars"></i> Section 7 (Ready To Try Catchi?)</h3>
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Main Heading </label>
                <input type="text" name="sec7_main_heading" value="<?php if (isset($row->sec7_main_heading)) echo $row->sec7_main_heading; ?>" class="form-control" >
            </div>
            <div class="col-md-6">
                <label class="control-label">Description</label>
                <input type="text" name="sec7_desc" value="<?php if (isset($row->sec7_desc)) echo $row->sec7_desc; ?>" class="form-control" >
            </div>
                    
        </div>
        <div class="row">
            <div class="col-md-4">
                <label class="control-label">Button Link </label>
                <input type="text" name="sec7_btn_link" value="<?php if (isset($row->sec7_btn_link)) echo $row->sec7_btn_link; ?>" class="form-control" >
            </div>
            <div class="col-md-4">
                <label class="control-label">Button Text</label>
                <input type="text" name="sec7_btn_text" value="<?php if (isset($row->sec7_btn_text)) echo $row->sec7_btn_text; ?>" class="form-control" >
            </div>
            <div class="col-md-4">
                <label class="control-label">Section 7 Heading 2</label>
                <textarea rows="3" name="sec7_heading" class="ckeditor" ><?php if (isset($row->sec7_heading)) echo $row->sec7_heading; ?></textarea>
            </div>
                    
        </div>

        <div class="row">
            <div class="col-md-4">
                <div style="margin:15px 0px" class="">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                             Section 7 Image 1 
                            </div>
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>
                    <?php
                        get_site_image_src("images", $row->image15);
                    ?>
                    <div class="panel-body">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                        <img src="<?= !empty($row->image15) ? getImageSrc(UPLOADIMAGE ."images/".$row->image15) : 'http://placehold.it/3000x1000' ?>" alt="--">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                        <div>
                        <span class="btn btn-black btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="image15" accept="image/*" <?php if(empty($row->image15)){echo 'required=""';}?>>
                        </span>
                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
            </div>
            <div class="col-md-4">
                    <div style="margin:15px 0px" class="">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                     Section 7 Image 2
                                    </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <?php
                                get_site_image_src("images", $row->image16);
                            ?>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                <img src="<?= !empty($row->image16) ? getImageSrc(UPLOADIMAGE ."images/".$row->image16) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                <span class="btn btn-black btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="image16" accept="image/*" <?php if(empty($row->image16)){echo 'required=""';}?>>
                                </span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
        
                </div>
                <div class="col-md-4">
                    <div style="margin:15px 0px" class="">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                     Section 7 Image 3
                                    </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <?php
                                get_site_image_src("images", $row->image17);
                            ?>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                <img src="<?= !empty($row->image17) ? getImageSrc(UPLOADIMAGE ."images/thumb_".$row->image17) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                <span class="btn btn-black btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="image17" accept="image/*" <?php if(empty($row->image17)){echo 'required=""';}?>>
                                </span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
        
                </div>
                    
        </div>
        
        <div class="clearfix"></div>
            <div class="col-md-12"><hr class="hr-short">
                <div class="form-group text-right">
                    <div style="margin-top:25px;" class="col-md-12">
                        <input type="submit" class="btn btn-green btn-lg" value="Update Page">
                    </div>
                </div>
            </div>
        <br><br>
        </form>
    </div>