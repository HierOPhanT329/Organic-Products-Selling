<?php
    $box_head = get_sub_field('box_head');
    $box_describe = get_sub_field('box_describe');
    $box_image = get_sub_field('box_image');
    $box_link = get_sub_field('box_link');
    $box_head_1 = get_sub_field('box_head_1');
    $box_describe_1 = get_sub_field('box_describe_1');
    $box_image_1 = get_sub_field('box_image_1');
    $box_link_1 = get_sub_field('box_link_1');

    
?>

<?php if( $box_head || $box_head_1) : ?>
<!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <?php if($box_head): ?>
                    <div class="col-md-6">
                        <div class="bg-primary bg-vegetable d-flex flex-column justify-content-center p-5" style="height: 300px; background: linear-gradient(rgba(52, 173, 84, .2), rgba(52, 173, 84, .2)), url(<?php echo $box_image['url']; ?>) bottom right no-repeat">
                            <?php if($box_head){ ?>
                                <h3 class="text-white mb-3"><?php echo $box_head; ?></h3>
                            <?php } ?>
                            <p class="text-white"><?php echo $box_describe; ?></p>
                            <?php if($box_link){ ?>
                                <a class="text-white fw-bold" href="<?php echo $box_link['url']; ?>"><?php echo $box_link['title']; ?><i class="bi bi-arrow-right ms-2"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($box_head_1): ?>
                    <div class="col-md-6">
                        <div class="bg-secondary bg-vegetable d-flex flex-column justify-content-center p-5" style="height: 300px; background: linear-gradient(rgba(52, 173, 84, .2), rgba(52, 173, 84, .2)), url(<?php echo $box_image_1['url']; ?>) bottom right no-repeat">
                            <?php if($box_head_1){ ?>
                                <h3 class="text-white mb-3"><?php echo $box_head_1; ?></h3>
                            <?php } ?>
                            <p class="text-white"><?php echo $box_describe_1; ?></p>
                            <?php if($box_link_1){ ?>
                                <a class="text-white fw-bold" href="<?php echo $box_link_1['url']; ?>"><?php echo $box_link_1['title']; ?><i class="bi bi-arrow-right ms-2"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<!-- Banner End -->
<?php endif; ?>