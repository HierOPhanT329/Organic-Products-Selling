
<?php 
	$about_head = get_sub_field('about_head');
    $about_sub_head = get_sub_field('about_sub_head');
    $about_image = get_sub_field('about_image');
    $about_describe = get_sub_field('about_describe');
    $about_icon_1 = get_sub_field('about_icon_1');
    $about_icon_head_1 = get_sub_field('about_icon_head_1');
    $about_icon_describe_1 = get_sub_field('about_icon_describe_1');
    $about_icon_2 = get_sub_field('about_icon_2');
    $about_icon_head_2 = get_sub_field('about_icon_head_2');
    $about_icon_descibe_2 = get_sub_field('about_icon_descibe_2');
?>
<?php if($about_head) { ?>
<!-- About Start -->
    <div class="container-fluid about pt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">
                    	<?php if($about_image) { ?>
                        	<img class="img-fluid mt-auto mx-auto" src="<?php echo $about_image['url']; ?>">
                    	<?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                    	<?php // if($about_sub_head) { ?>
                        	<!-- <h6 class="text-primary text-uppercase"><?php // echo $about_sub_head; ?></h6> -->
                    	<?php // } ?>
                    	<?php if($about_head) { ?>
                        	<h1 class="display-5"><?php echo $about_head; ?></h1>
                    	<?php } ?>
                    </div>
                    	<?php if($about_describe) { ?>
                    		<p class="mb-4"><?php echo $about_describe; ?></p>
                		<?php } ?>
                    <div class="row gx-5 gy-4">
                        <div class="col-sm-6">
                        	<?php if($about_icon_1) { ?>
                            	<i class="fa fa-seedling display-1 text-secondary"></i>
                        	<?php } ?>
                           	<?php if($about_icon_head_1) { ?>
                            	<h4><?php echo $about_icon_head_1; ?></h4>
                        	<?php } ?>
                        	<?php if($about_icon_describe_1) { ?>
                            	<p class="mb-0"><?php echo $about_icon_describe_1; ?></p>
                        	<?php } ?>
                        </div>
                        <div class="col-sm-6">
                        	<?php  if($about_icon_2) { ?>
                            	<i class="fa fa-award display-1 text-secondary"></i>
                      		<?php } ?>
                            <?php if($about_icon_head_2) { ?>
                            	<h4><?php echo $about_icon_head_2; ?></h4>
                       		<?php } ?>
                       		<?php if($about_icon_descibe_2) { ?>
                            	<p class="mb-0"><?php echo $about_icon_descibe_2; ?></p>
                       		<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
<?php } ?>