<?php 
    $feathead = get_sub_field('feature_form_head');
    $featsubhead = get_sub_field('feature_form_subhead');
    $featdesc = get_sub_field('feature_form_describe');
    $featimg = get_sub_field('feature_form_image');
?>

<?php if ($feathead || $featsubhead || $featdesc): ?>
    <!-- Features Start -->
    <div class="container-fluid bg-primary feature py-5 pb-lg-0">
        <div class="container py-5 pb-lg-0">
            <div class="mx-auto text-center mb-3 pb-2" style="max-width: 500px;">
                <?php // if ($featsubhead): ?>
                    <!-- <h6 class="text-uppercase text-secondary"><?php // echo $featsubhead; ?></h6> -->
                <?php // endif; ?>
                <?php if ($feathead): ?>
                    <h1 class="display-5 text-white"><?php echo $feathead; ?></h1>
                <?php endif; ?>
            </div>
            <div class="row g-5">
                <div class="col-lg-3">
                    <?php if (have_rows('feature_card')): ?>
                        <?php $i = 0; while (have_rows('feature_card')): the_row();
                            $i++;
                            $ftitle = get_sub_field('feature_title');
                            $fdesc = get_sub_field('feature_describe');
                            $ficon = get_sub_field('feature_icon');
                        ?>


                        <?php if (($i % 2) != 0): ?>
                            <div class="text-white <?php echo ($i == 1) ? "mb-5" : ''; ?>">
                                <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                    <?php echo $ficon; ?>
                                </div>
                                <h4 class="text-white"><?php echo $ftitle; ?></h4>
                                <p class="mb-0"><?php echo $fdesc; ?></p>
                            </div>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="col-lg-6">
                    <div class="d-block bg-white h-100 text-center p-5 pb-lg-0">
                        <p><?php echo $featdesc; ?></p>
                        <?php if ($featimg): ?>
                            <img class="img-fluid" src="<?php echo $featimg['url']; ?>" alt="<?php echo $featimg['title']; ?>">
                        <?php endif; ?>
                    </div>
                </div>



                <div class="col-lg-3">
                    <?php if (have_rows('feature_card')): ?>
                        <?php $j = 0; while (have_rows('feature_card')): the_row();
                            $j++;
                            $ftitle = get_sub_field('feature_title');
                            $fdesc = get_sub_field('feature_describe');
                            $ficon = get_sub_field('feature_icon');
                        ?>
                        <?php if (($j % 2) == 0): ?>
                            <div class="text-white <?php echo ($j == 2) ? "mb-5" : ''; ?>">
                                <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                    <?php echo $ficon; ?>
                                </div>
                                <h4 class="text-white"><?php echo $ftitle; ?></h4>
                                <p class="mb-0"><?php echo $fdesc; ?></p>
                            </div>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
<?php endif; ?>
