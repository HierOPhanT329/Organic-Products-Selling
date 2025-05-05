<?php get_header(); ?>
<?php if (is_single()) : ?>
    <div class="blog-wrapper">
        <div class="container">
            <?php $articleImg = wp_get_attachment_url(get_post_thumbnail_id());?>
            <div class="blog_content">
                <img class="articleImg" src="<?php echo $articleImg; ?>" alt="">
                <h3 class="blog_head "><?php the_title(); ?></h3>
                <p class="blog_para"><?php the_content(); ?></p>
            </div>
        </div>
    </div>

<?php endif; ?>
<?php get_footer(); ?>