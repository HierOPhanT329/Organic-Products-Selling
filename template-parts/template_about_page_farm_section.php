<!-- ============== Farm Section ===================== -->



<?php 
$farm_section_headnig = get_sub_field('apfs_headings');
$farm_section_short_desc = get_sub_field('apfs_short_describe');
$farm_section_icons = get_sub_field('apfs_icons');
$farm_section_sub_headings = get_sub_field('apfs_sub_headings');
$farm_section_long_desc_1 = get_sub_field('apfs_long_describe');
$farm_section_main_images = get_sub_field('apfs_main_images');
$farm_section_gallery_items = get_sub_field('apfs_gallery_items');
?>

<?php if($farm_section_headnig || $farm_section_short_desc || $farm_section_sub_headings || $farm_section_long_desc_1): ?>

<section class="about-farm">
    <div class="container">
        <div class="section-title">
            <?php if($farm_section_headnig) { ?>
                <h2><?php echo $farm_section_headnig; ?></h2>
            <?php } ?>

            <?php if($farm_section_short_desc) { ?>
                <p><?php echo $farm_section_short_desc; ?></p>
            <?php } ?>

            <div class="divider">
                <span class="divider-line"></span>
                <div class="divider-icon">
                    <?php echo $farm_section_icons; ?>
                </div>
                <span class="divider-line"></span>
            </div>
        </div>

        <div class="about-content">
            <div class="about-img">
                <?php if($farm_section_main_images) { ?>
                    <img src="<?php echo $farm_section_main_images['url']; ?>" alt="<?php echo $farm_section_main_images['alt']; ?>">
                <?php } ?>
            </div>

            <div class="about-text">
                <?php if($farm_section_sub_headings) { ?>
                    <h2><?php echo $farm_section_sub_headings; ?></h2>
                <?php } ?>

                <?php if($farm_section_long_desc_1) { ?>
                    <?php echo $farm_section_long_desc_1; ?>
                <?php } ?>

                <?php if($farm_section_gallery_items): ?>    
                    <div class="art-gallery">
                        <?php foreach($farm_section_gallery_items as $item): ?>
                            <div class="art-piece">
                                <?php if($item['images']) { ?>
                                    <img src="<?php echo $item['images']['url']; ?>" alt="<?php echo $item['images']['alt']; ?>">
                                <?php } ?>

                                <div class="art-label">
                                    <?php if($item['title']) { ?>
                                        <h4><?php echo $item['title']; ?></h4>
                                    <?php } ?>

                                    <?php if($item['describe']) { ?>
                                        <p><?php echo $item['describe']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>