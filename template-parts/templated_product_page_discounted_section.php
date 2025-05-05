<?php 

	$title_1 = get_sub_field('tppds_title_1');
	$btn_link_1 = get_sub_field('tppds_button_link_1');
	$title_2 = get_sub_field('tppds_title_2');
	$btn_link_2 = get_sub_field('tppds_button_link_2');
	$title_3 = get_sub_field('tppds_title_3');
	$btn_link_3 = get_sub_field('tppds_button_link_3');
	$title_4 = get_sub_field('tppds_title_4');	
	$btn_link_4 = get_sub_field('tppds_button_link_4');

?>


<?php if($title_1 || $title_2 || $title_3 || $title_4): ?>

<div class="container-product-page">
		<section class="categories-product-page">
            <div class="category-card-product-page super-healthy">
                <div class="category-content-product-page">
                	<?php if($title_1) { ?>
                    	<h3><?php echo $title_1; ?></h3>
                    <?php } ?>
                    <?php if($btn_link_1) { ?>
                    	<button class="btn-small-product-page" src="<?php echo $btn_link_1['url']; ?>"><?php echo $btn_link_1['title']; ?></button>
                    <?php } ?>
                </div>
            </div>
            <div class="category-card-product-page fresh-fruits">
                <div class="category-content-product-page">
                    <?php if($title_2) { ?>
                    	<h3><?php echo $title_2; ?></h3>
                    <?php } ?>
                    <?php if($btn_link_2) { ?>
                    	<button class="btn-small-product-page" src="<?php echo $btn_link_2['url']; ?>"><?php echo $btn_link_2['title']; ?></button>
                    <?php } ?>
                </div>
            </div>
            <div class="category-card-product-page fresh-vegetables">
                <div class="category-content-product-page">
                    <?php if($title_3) { ?>
                    	<h3><?php echo $title_3; ?></h3>
                    <?php } ?>
                    <?php if($btn_link_3) { ?>
                    	<button class="btn-small-product-page" src="<?php echo $btn_link_3['url']; ?>"><?php echo $btn_link_3['title']; ?></button>
                    <?php } ?>
                </div>
            </div>
            <div class="category-card-product-page organic">
                <div class="category-content-product-page">
                    <?php if($title_4) { ?>
                    	<h3><?php echo $title_4; ?></h3>
                    <?php } ?>
                    <?php if($btn_link_4) { ?>
                    	<button class="btn-small-product-page" src="<?php echo $btn_link_4['url']; ?>"><?php echo $btn_link_4['title']; ?></button>
                    <?php } ?>
                </div>
            </div>
        </section>
</div>


<?php endif; ?>