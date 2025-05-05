<?php 
    $serv_title = get_sub_field('tppss_service_title');
    $serv_sub_title = get_sub_field('tppss_service_sub_title');
?>

<?php if($serv_title || $serv_sub_title) : ?>
    <!-- Services Section -->
    <section class="services-section">
        <h2 class="service_title_h2"><?php echo $serv_title; ?></h2>
        <p class="service_title_p"><?php echo $serv_sub_title; ?></p>

        <?php if(have_rows('tppss_service_card')): ?>
            <div class="services-grid">
                <?php while(have_rows('tppss_service_card')): the_row(); ?>
                    <?php 
                        $serv_icons_code = get_sub_field('service_icons');
                        $serv_head = get_sub_field('service_heads');
                        $serv_sub_head = get_sub_field('service_sub_heads');
                    ?>
                    <div class="service-card fade-in">
                        <?php echo $serv_icons_code; ?>
                        <h3><?php echo $serv_head; ?></h3>
                        <p><?php echo $serv_sub_head; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>