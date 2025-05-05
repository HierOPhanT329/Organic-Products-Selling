 <main class="contact-container">

<!-- 3 card Section for like email, phone & map -->

    <?php if (have_rows('cpfs_get_in_touch')) : ?>
        <div class="contact-info-bar">
            <?php while (have_rows('cpfs_get_in_touch')) : the_row(); ?>
                    <?php 

                        $icons = get_sub_field('cpfs_icons');
                        $heads = get_sub_field('cpfs_heading');
                        $sub_heads = get_sub_field('cpfs_sub_heading');

                    ?>
                        <div class="info-card">
                            <div class="info-icon">
                                <div class="icon-circle">
                                    <span class="icon"><?php echo $icons; ?></span>
                                </div>
                            </div>
                            <div class="info-content">
                                <h3><?php echo $heads; ?></h3>
                                <p><?php echo $sub_heads; ?></p>
                                <div class="hover-effect"></div>
                            </div>
                        </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
        

<!-- Contact form Responsive -->

    <?php echo do_shortcode('[contact-form-7 id="34f6a74" title="Contact form 1"]'); ?>

</main>

<!-- FAQs Section -->

<?php 

    $heads = get_sub_field('cpfs_faqs_title');
    $sub_heads = get_sub_field('cpfs_faqs_sub_title');

?>
    
    <?php if($heads || $sub_heads): ?>
        <div class="faq-section-background">
            <div class="faq-section">
                <h2><?php echo $heads; ?></h2>
                <p><?php echo $sub_heads; ?></p>

                <?php if (have_rows('cpfs_faqs_section')) : ?>
                <div class="faq-grid">
                    <?php while (have_rows('cpfs_faqs_section')) : the_row(); ?>
                        <?php 

                            $question = get_sub_field('faqs_question');
                            $answer = get_sub_field('faqs_answer');

                        ?>
                        <div class="faq-item">
                            <div class="faq-header">
                                <h3><?php echo $question; ?></h3>
                                <div class="faq-toggle">+</div>
                            </div>
                            <div class="faq-answer">
                                <?php echo $answer; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    

