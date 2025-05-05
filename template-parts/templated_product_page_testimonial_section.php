<?php 
$testimonial_head = get_sub_field('tppts_testimonial_title');
$testimonial_sub_desc = get_sub_field('tppts_testimonial_sub_title');
?>

<?php if($testimonial_head || $testimonial_sub_desc || have_rows('tppts_testimonial')) : ?>
<!-- Testimonials Section -->
<section class="testimonials">
    <div class="testimonials-container">
        <?php if($testimonial_head || $testimonial_sub_desc) : ?>
        <div class="section-header">
            <?php if($testimonial_head) : ?>
                <h2><?php echo esc_html($testimonial_head); ?></h2>
            <?php endif; ?>
            <?php if($testimonial_sub_desc) : ?>
                <p><?php echo esc_html($testimonial_sub_desc); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        <?php if(have_rows('tppts_testimonial')): ?>
        <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
                <?php while(have_rows('tppts_testimonial')) : the_row(); 
                    $testimonial_text = get_sub_field('testimonial_text');
                    $customer_name = get_sub_field('customer_name');
                    $customer_title = get_sub_field('customer_title');
                    $customer_dp_photo = get_sub_field('customer_photo');
                    $rating = get_sub_field('star_rating') ? (int) get_sub_field('star_rating') : 5;

                ?>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <?php if($rating) : ?>
                                <div class="rating">
                                    <?php 
                                    for ($i = 1; $i <= $rating; $i++) {
                                        echo '<i class="fas fa-star"></i>';
                                    }
                                    for ($i = $rating + 1; $i <= 5; $i++) {
                                        echo '<i class="far fa-star"></i>';
                                    }
                                    ?>
                                </div>
                                <?php endif; ?>
                                
                                <?php if($testimonial_text) : ?>
                                    <p class="testimonial-text"><?php echo esc_html($testimonial_text); ?></p>
                                <?php endif; ?>
                                
                                <?php if($customer_name || $customer_dp_photo) : ?>
                                <div class="customer-info">
                                    <?php if($customer_dp_photo): ?>
                                        <img src="<?php echo esc_url($customer_dp_photo['url']); ?>" 
                                             alt="<?php echo esc_attr($customer_name ?: 'Customer photo'); ?>" 
                                             class="customer-avatar">
                                    <?php endif; ?>
                                    
                                    <?php if($customer_name || $customer_title) : ?>
                                    <div class="customer-details">
                                        <?php if($customer_name) : ?>
                                            <h4><?php echo esc_html($customer_name); ?></h4>
                                        <?php endif; ?>
                                        <?php if($customer_title) : ?>
                                            <p><?php echo esc_html($customer_title); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            
            <!-- Add Navigation -->
<!--             <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="swiper-pagination"></div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>