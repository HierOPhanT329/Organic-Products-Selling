<?php 
    $servhead = get_sub_field('service_form_head');
    $servsubhead = get_sub_field('service_form_subhead');
    $servdesc = get_sub_field('service_form_describe');
    $servbtn = get_sub_field('service_form_button');
?>

<?php if($servhead) { ?>
<!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                        <?php // if($servsubhead) { ?>
                            <!-- <h6 class="text-primary text-uppercase"><?php // echo $servsubhead; ?></h6> -->
                        <?php // } ?>
                        <?php if($servhead) { ?>
                            <h1 class="display-5"><?php echo $servhead; ?></h1>
                        <?php } ?>
                    </div>
                    <?php if($servdesc) { ?>
                        <p class="mb-4"><?php echo $servdesc; ?><p>
                    <?php } ?>
                    <?php if($servbtn) { ?>
                        <a href="<?php echo $servbtn['url']; ?>" class="btn btn-primary py-md-3 px-md-5"><?php echo $servbtn['title']; ?></a>
                    <?php } ?>
                </div>


                <?php if(have_rows('service_card')) : ?>
                    <?php while(have_rows('service_card')) : the_row(); ?>
                        <?php 
                            $icons = get_sub_field('service_icon_card');
                            $heads = get_sub_field('service_card_head');
                            $describes = get_sub_field('service_card_describe');
                        ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item bg-light text-center p-5">
                                <?php if($icons) { ?>
                                    <?php echo $icons; ?>
                                <?php } ?>
                                <?php if($heads) { ?>
                                    <h4><?php echo $heads; ?></h4>
                                <?php } ?>
                                <?php if($describes) { ?>
                                    <p class="mb-0"><?php echo $describes; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif;  ?>
            </div>
        </div>  
    </div>



    <!-- Services End -->
<?php } ?>