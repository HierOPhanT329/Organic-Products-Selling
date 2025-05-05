<!-- Carousel Start -->
<?php if(have_rows('slides')): ?>
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                <?php 
                    $i = 1;
                    while(have_rows('slides') ) : the_row();
                    $slide_image = get_sub_field('image');
                    $slide_heading = get_sub_field('heading');
                    $slide_sub_heading = get_sub_field('sub_heading');
                    $slide_button_link_1 = get_sub_field('button_link_1');
                    $slide_button_link_2 = get_sub_field('button_link_2');
                ?>

                <div class="carousel-item <?php echo ($i == 1) ? "active" : ' '; ?>" >
                    <img class="w-100" src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['title']; ?>">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <?php if($slide_sub_heading) { ?>
                                <h3 class="text-white"><?php echo $slide_sub_heading; ?></h3>
                            <?php } ?>
                            <?php if($slide_heading) { ?>
                                <h1 class="display-1 text-white mb-md-4"><?php echo $slide_heading; ?></h1>
                            <?php } ?>
                            <?php if($slide_button_link_1) { ?>
                                <a href="<?php echo $slide_button_link_1['url']; ?>" class="btn btn-primary py-md-3 px-md-5 me-3"><?php echo $slide_button_link_1['title']; ?></a>
                            <?php } ?>
                            <?php if($slide_button_link_2) { ?>
                                <a href="<?php echo $slide_button_link_2['url']; ?>" class="btn btn-secondary py-md-3 px-md-5 me-3"><?php echo $slide_button_link_2['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php $i++; endwhile; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <?php endif; ?>