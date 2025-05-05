<?php 

    $phead = get_sub_field('product_head');
    $psubhead = get_sub_field('product_subhead');
    $sele_product = get_sub_field('select_products');

?>

<?php if($phead || $psubhead) : ?>

<!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <?php if($psubhead) { ?>
                    <h6 class="text-primary text-uppercase"><?php echo $psubhead; ?></h6>
                <?php } ?>
                <?php if($phead) { ?>
                    <h1 class="display-5"><?php echo $phead; ?></h1>
                <?php } ?>
            </div>

            <?php if(!empty($sele_product)) : ?>
            <div class="owl-carousel product-carousel px-5">
                <?php foreach($sele_product as $product) {

                    $product_data = wc_get_product( $product->ID );
                    $permalink = $product_data->get_permalink(); // detail page for link
                    $image_id  = $product_data->get_image_id();

                    $ptitle = get_the_title($product->ID);
                    $price = $product_data->get_price();
                    $img_url = wp_get_attachment_image_url($image_id, 'full');
                ?>

                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <?php if($img_url) : ?>
                            <img class="img-fluid mb-4" src="<?php echo $img_url; ?>" alt="">
                        <?php endif; ?>
                        <h6 class="mb-3"><?php echo $ptitle; ?></h6>
                        <?php if($price) : ?>
                            <h5 class="text-primary mb-0"><span>₹</span><?php echo ($price); ?></h5>
                        <?php endif; ?>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3"  href="<?php echo wc_get_cart_url(); ?>"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href="<?php echo $permalink; ?>"><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>  
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Products End -->
<?php endif; ?>
