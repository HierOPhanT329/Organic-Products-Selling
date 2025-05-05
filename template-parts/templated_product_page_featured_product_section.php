<?php 

$head = get_sub_field('tppfps_title');
$dsc = get_sub_field('tppfps_sub_title');
$products = get_sub_field('tppfps_select_products'); 

?>

<?php if ($head || $dsc): ?>

<!-- Featured Products -->
<section class="featured-section-product-page">
    <div class="section-header">
        <h2><?php echo $head; ?></h2>
        <p><?php echo $dsc; ?></p>
    </div>

    <?php if ($products): ?>
    <div class="product-grid-product-page">

        <?php foreach ($products as $post): 
            setup_postdata($post);
            $product = wc_get_product($post->ID);

            $badge_title = get_field('is_organic', $post->ID); 

            $product_img = get_the_post_thumbnail_url($post->ID, 'medium');
            $product_title = get_the_title($post->ID);
            $product_price = $product->get_price_html();

            $add_to_cart_url = $product->add_to_cart_url();
            $view_cart_url = wc_get_cart_url();

            $add_to_cart_text = __('Add to Cart', 'woocommerce');
            $view_cart_text = __('View Cart', 'woocommerce');
        ?>

        <div class="product-card-product-page fade-in">
            <?php if ($badge_title): ?>
                <span class="organic-badge"><?php echo $badge_title; ?></span>
            <?php endif; ?>

            <img src="<?php echo $product_img; ?>" class="product-image" alt="<?php echo $product_title; ?>">
            
            <div class="product-info-product-page">
                <h3 class="product-title-product-page"><?php echo $product_title; ?></h3>
                <p class="product-price-product-page"><?php echo $product_price; ?></p>
                <div class="button-group">
                    <a href="<?php echo $add_to_cart_url; ?>" class="add-to-cart"><?php echo $add_to_cart_text; ?></a>
                    <a href="<?php echo $view_cart_url; ?>" class="view-cart"><?php echo $view_cart_text; ?></a>
                </div>
            </div>
        </div>

        <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <?php endif; ?>
</section>

<?php endif; ?>
