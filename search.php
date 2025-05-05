<?php get_header(); ?>


<section class="search-result">
   <div class="container">
        <?php
        $s = get_search_query();
        $args = array(
            's' => $s
        );
        // The Query
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            _e("<h3>Suchergebnisse " . get_query_var('s') . "</h3>"); ?>
            <ul class="search-list">
                <?php
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php
                } ?>
            </ul>
        <?php
        } else {
        ?>
            <h2>Nothing found</h2>
        <?php } ?>
    </div>
</section>

<?php //get_sidebar(); 
?>
<?php get_footer(); ?>