<?php 

$head_title = get_sub_field('tppcss_headings');
$sub_head = get_sub_field('tppcss_describe');

?>

<?php if($head_title || $sub_head): ?>

<!-- Categories Section -->
<section class="categories-section">

    <div class="section-header">
        <?php if($head_title) { ?>
            <h2><?php echo $head_title; ?></h2>
        <?php } ?>

        <?php if($sub_head) { ?>
            <p><?php echo $sub_head; ?></p>
        <?php } ?>
    </div>

    <?php if(have_rows('tppcss_icons_repeater')): ?>
        <div class="swiper category-swiper">
            <div class="swiper-wrapper">
                <?php while(have_rows('tppcss_icons_repeater')): the_row(); ?>

                    <?php 
                        $icons_code_text = get_sub_field('tppcss_icons_code');
                        $icons_head = get_sub_field('tppcss_icons_heads');
                        $icons_sub_head = get_sub_field('tppcss_icons_sub_head');
                    ?>

                    <div class="swiper-slide" >
                        <div class="category-card">
                            <?php echo $icons_code_text; ?>
                            <div class="category-content">
                                <h3><?php echo $icons_head; ?></h3>
                                <p><?php echo $icons_sub_head; ?></p>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        </div> 
    <?php endif; ?>

</section>

<?php endif; ?>
