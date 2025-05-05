<?php get_header();

$i = 1;
if ( have_rows( "content" ) ) : while ( have_rows( "content" ) ) : the_row();
    get_template_part( "template-parts/" . get_row_layout() );
    $i ++;

endwhile; endif; 
?>
<div class="container-fluid py-5">
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>
 
<?php get_footer(); ?>



