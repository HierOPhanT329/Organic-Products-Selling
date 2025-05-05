<?php 
    $benfits_heads = get_sub_field('apwcu_headings');
    $benfits_subtitles = get_sub_field('apwcu_subtitles');
    $benfits_icons = get_sub_field('apwcu_icons');
    $benfits_images = get_sub_field('apwcu_images_center');
?>

<section class="why-choose">
    <div class="container">
        <div class="section-title">
            <?php if($benfits_heads) { ?>
                <h2><?php echo $benfits_heads; ?></h2>
            <?php } ?>

            <?php if($benfits_subtitles) { ?>
                <p><?php echo $benfits_subtitles; ?></p>
            <?php } ?>

            <div class="divider">
                <span class="divider-line"></span>
                <div class="divider-icon">
                    <?php echo $benfits_icons; ?>
                </div>
                <span class="divider-line"></span>
            </div>
        </div>

        <div class="why-content-wrapper">
            <div class="benefits-left">
                <?php if(have_rows('apwcu_benefits')): ?>
                    <?php 
                    $count = 0;
                    $all_benefits = array();
                    // First store all benefits in an array
                    while(have_rows('apwcu_benefits')): the_row(); 
                        $all_benefits[] = array(
                            'icons' => get_sub_field('benefits_icons'),
                            'title' => get_sub_field('benefits_title'),
                            'desc' => get_sub_field('benefits_describe')
                        );
                    endwhile;
                    
                    // Display first 3 benefits on left
                    for($i = 0; $i < min(3, count($all_benefits)); $i++): ?>
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <?php echo $all_benefits[$i]['icons']; ?>
                            </div>
                            <div class="benefit-content">
                                <?php if($all_benefits[$i]['title']) { ?>
                                    <h3><?php echo $all_benefits[$i]['title']; ?></h3>
                                <?php } ?>
                                <?php if($all_benefits[$i]['desc']) { ?>
                                    <p><?php echo $all_benefits[$i]['desc']; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>

            <div class="center-image">
                <?php if($benfits_images): ?>
                    <img src="<?php echo $benfits_images['url']; ?>" alt="<?php echo $benfits_images['alt']; ?>">
                <?php else: ?>
                    <img src="https://organik-4437.kxcdn.com/wp-content/uploads/2016/08/about-pic-01.png" alt="Organic Vegetables">
                <?php endif; ?>
            </div>

            <div class="benefits-right">
                <?php if(!empty($all_benefits)): ?>
                    <?php 
                    // Display next 3 benefits on right (items 4-6)
                    for($i = 3; $i < min(6, count($all_benefits)); $i++): ?>
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <?php echo $all_benefits[$i]['icons']; ?>
                            </div>
                            <div class="benefit-content">
                                <?php if($all_benefits[$i]['title']) { ?>
                                    <h3><?php echo $all_benefits[$i]['title']; ?></h3>
                                <?php } ?>
                                <?php if($all_benefits[$i]['desc']) { ?>
                                    <p><?php echo $all_benefits[$i]['desc']; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>