    <?php 

        $head = get_sub_field('tppbs_heading');
        $subhead = get_sub_field('tppbs_sub_heading');
        $btnlink = get_sub_field('tppbs_button_link');
        $img = get_sub_field('tppbs_images');

    ?>



<?php if($head || $subhead): ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content-product-page">
            <div class="hero-text fade-in">
                <h1><?php echo $head; ?></h1>
                <p><?php echo $subhead; ?></p>
                <a class="cta-button-banner" href="<?php echo $btnlink['url']; ?>"><?php echo $btnlink['title']; ?></a>      
            </div>
            <div class="hero-image fade-in">
                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>">
            </div>
        </div>
    </section>
<?php endif; ?>