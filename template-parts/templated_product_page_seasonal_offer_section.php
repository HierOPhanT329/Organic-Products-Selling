<?php 

        $sec_head = get_sub_field('tppsos_title');
        $sec_desc = get_sub_field('tppsos_sub_title');

?>

<?php if($sec_head || $sec_desc): ?>

<!-- Seasonal Offers Section -->
    <section class="seasonal-offers">
        <div class="floating-icon">🍎</div>
        <div class="floating-icon">🥕</div>
        <div class="floating-icon">🥬</div>
        <div class="floating-icon">🍊</div>
        <div class="floating-icon">🥦</div>
        <div class="floating-icon">🍇</div>

 
        <div class="section-header">
            <h2><?php echo $sec_head; ?></h2>
            <p><?php echo $sec_desc; ?></p>
        </div>

        <div class="product-showcase">
            <?php if(have_rows('tppsos_offer')): ?>
                <?php while(have_rows('tppsos_offer')) : the_row(); ?>

                    <?php 

                        $badge_text = get_sub_field('badge_text');
                        $product_image = get_sub_field('product_image');
                        $product_title = get_sub_field('product_title');
                        $original_price = get_sub_field('original_price');
                        $sale_price = get_sub_field('sale_price');
                        $product_link = get_sub_field('product_link');
                        $product_link_2 = get_sub_field('product_link_2');


                    ?>
                    <div class="showcase-item load-in">
                        <div class="offer-card">
                            <span class="organic-badge"><?php echo $badge_text; ?></span>
                            <img src="<?php echo $product_image['url']; ?>" class="product-image" alt="<?php echo $product_image['title']; ?>">
                            <div class="product-info-product-page">
                                <h3 class="product-title-product-page"><?php echo $product_title; ?></h3>
                                <p class="product-price-product-page-offer"><span class="original-price"><?php echo $sale_price; ?></span><?php echo $original_price; ?></p>
                                <div class="button-group">
                                    <button class="add-to-cart" src="<?php echo $product_link['url']; ?>"><?php echo $product_link['title']; ?></button>
                                    <button class="view-cart" src="<?php echo $product_link_2['url']; ?>"><?php echo $product_link_2['title']; ?></button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>