	<?php 
        $ctitle_1 = get_sub_field('count_title_1');
        $cnum_1 = get_sub_field('count_num_1');
        $cicon_1 = get_sub_field('count_icon_1');
        $ctitle_2 = get_sub_field('count_title_2');
        $cnum_2 = get_sub_field('count_num_2');
        $cicon_2 = get_sub_field('count_icon_2');
        $ctitle_3 = get_sub_field('count_title_3');
        $cnum_3 = get_sub_field('count_num_3');
        $cicon_3 = get_sub_field('count_icon_3');
        $ctitle_4 = get_sub_field('count_title_4');
        $cnum_4 = get_sub_field('count_num_4');
        $cicon_4 = get_sub_field('count_icon_4');
    ?>

<?php 
    if($ctitle_1 || $ctitle_2 || $ctitle_3 || $ctitle_4) :
?>
    <!-- Facts Start -->
    <div class="container-fluid bg-primary facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <?php if($cicon_1) { ?>
                                <?php echo $cicon_1; ?>
                            <?php } ?>
                        </div>
                        <div class="ps-4">
                            <?php if($ctitle_1) { ?>
                                <h5 class="text-white"><?php echo $ctitle_1; ?></h5>
                            <?php } ?>
                            <?php if($cnum_1) { ?>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up"><?php echo $cnum_1; ?></h1>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <?php if($cicon_2) { ?>
                                <?php echo $cicon_2; ?>
                            <?php } ?>
                        </div>
                        <div class="ps-4">
                            <?php if($ctitle_2) { ?>
                                <h5 class="text-white"><?php echo $ctitle_2;  ?></h5>
                            <?php } ?>
                            <?php if($cnum_2) { ?>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up"><?php echo $cnum_2; ?></h1>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <?php if($cicon_3) { ?>
                                <?php echo $cicon_3; ?>
                            <?php } ?>
                        </div>
                        <div class="ps-4">
                            <?php if($ctitle_3) { ?>
                                <h5 class="text-white"> <?php echo $ctitle_3; ?></h5>
                            <?php } ?>
                            <?php if($cnum_3) { ?>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up"><?php echo $cnum_3; ?></h1>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                             <?php if($cicon_4) { ?>
                                <?php echo $cicon_4; ?>
                            <?php } ?>
                        </div>
                        <div class="ps-4">
                            <?php if($ctitle_4) { ?>
                                <h5 class="text-white"><?php echo $ctitle_4; ?></h5>
                            <?php } ?>
                            <?php if($cnum_4) { ?>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up"><?php echo $cnum_4; ?></h1>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
    <?php endif; ?>