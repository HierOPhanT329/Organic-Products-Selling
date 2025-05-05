<!-- ===== HERO SECTION ===== -->

<?php 
    $abt_img = get_sub_field('about_banner_images');
    $abt_head = get_sub_field('about_banner_head');
    $abt_button_1 = get_sub_field('about_banner_button_1');
    $abt_button_2 = get_sub_field('about_banner_button_2');
?>

<?php if($abt_head): ?>
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" 
        style="background-image: url('<?php echo $abt_img['url']; ?>'); ">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <?php if($abt_head) { ?>
                        <h1 class="display-1 text-white mb-md-4"><?php echo $abt_head; ?></h1>
                    <?php } ?>

                    <?php if($abt_button_1): ?>
                        <a href="<?php echo $abt_button_1['url']; ?>" class="btn btn-primary py-md-3 px-md-5 me-3">
                            <?php echo $abt_button_1['title']; ?>
                        </a>
                    <?php endif; ?>

                    <?php if($abt_button_2): ?>
                        <a href="<?php echo $abt_button_2['url']; ?>" class="btn btn-secondary py-md-3 px-md-5">
                            <?php echo $abt_button_2['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    
       
      

<?php endif; ?>
