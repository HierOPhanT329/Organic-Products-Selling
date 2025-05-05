    <?php 

        $heads = get_sub_field('tppfss_headings');
        $subheads = get_sub_field('tppfss_sub_headings');
        $btn = get_sub_field('tppfss_button');

    ?>

    <?php if($heads || $subheads) : ?>

    <section class="farm-story">
        <div class="story-content load-in">
            <h2><?php echo $heads; ?></h2>
            <p><?php echo $subheads; ?></p>
            <button class="cta-button-banner" src="<?php echo $btn['url']; ?>"><?php echo $btn['title']; ?></button>
        </div>
    </section>

    <?php endif; ?>