<?php 
    $bg_head = get_sub_field('blog_head');
    $bg_subhead = get_sub_field('blog_subhead');
?>

<?php if ($bg_head || $bg_subhead) : ?>
    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <?php if ($bg_subhead) { ?>
                    <h6 class="text-primary text-uppercase"><?php echo $bg_subhead; ?></h6>
                <?php } ?>
                <?php if ($bg_head) { ?>
                    <h1 class="display-5"><?php echo $bg_head; ?></h1>
                <?php } ?>
            </div>
            <div class="row g-5">
                <?php if (have_rows('blog_image_card')) : ?>
                    <?php while (have_rows('blog_image_card')) : the_row();
                        $bg_img = get_sub_field('blog_image');
                        $bg_desc = get_sub_field('blog_describe');
                        $bg_date = get_sub_field('blog_date');
                    ?>
                        <div class="col-lg-4">
                            <div class="blog-item position-relative overflow-hidden">
                                <?php if ($bg_img) { ?>
                                    <img class="img-fluid" src="<?php echo $bg_img['url']; ?>" alt="<?php echo $bg_img['title']; ?>">
                                <?php } ?>
                                <a class="blog-overlay" href="#">
                                    <?php if ($bg_desc) { ?>
                                        <h4 class="text-white"><?php echo $bg_desc; ?></h4>
                                    <?php } ?>
                                    <?php if ($bg_date) { ?>
                                        <span class="text-white fw-bold"><?php echo $bg_date; ?></span>
                                    <?php } ?>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->
<?php endif; ?>
