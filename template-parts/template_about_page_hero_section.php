<?php 

	// $hero_section_images = get_sub_field('aphs_images');
	$hero_section_headnig = get_sub_field('aphs_heading');
	$hero_section_sub_headnig = get_sub_field('aphs_sub_heading');
	$hero_section_button_link = get_sub_field('aphs_button_link');

?>

<?php if($hero_section_headnig || $hero_section_sub_headnig): ?>

        <!-- ===== HERO SECTION ===== -->
        <section class="hero">
            <div class="hero-content">
            	<?php if($hero_section_headnig) { ?>
                	<h1><?php echo $hero_section_headnig; ?></h1>
                <?php } ?>

                <?php if($hero_section_sub_headnig) { ?>
                	<p><?php echo $hero_section_sub_headnig; ?></p>
                <?php } ?>

                <?php if($hero_section_button_link) { ?>
                	<a href="<?php echo $hero_section_button_link['url']; ?>" class="btn"><?php echo $hero_section_button_link['title']; ?></a>
                <?php } ?>
            </div>
        </section>


<?php endif; ?>