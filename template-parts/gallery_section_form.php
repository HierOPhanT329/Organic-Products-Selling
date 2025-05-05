<?php 
    $heading_gallery = get_sub_field('gsf_heading');
    $head_span_text = get_sub_field('gsf_span_colour_text');
    $heading_gallery_1 = get_sub_field('gsf_heading_1');
    $describes_gallery = get_sub_field('gsf_describeption');
    $button_link_gallery = get_sub_field('gsf_button_link');
?>

<?php if($heading_gallery || $describes_gallery) : ?>
    <div class="content">
        <div class="left-side">
            <h1 class="heading">
                <?php echo $heading_gallery; ?> 
                <span class="highlight"><?php echo $head_span_text; ?></span> 
                <?php echo $heading_gallery_1; ?>
            </h1>
            <p class="description">
                <?php echo $describes_gallery; ?>
            </p>
            <?php if($button_link_gallery): ?>
                <a class="cta-button-gallery" href="<?php echo $button_link_gallery['url']; ?>">
                    <?php echo $button_link_gallery['title']; ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>
            <?php endif; ?>
        </div>

        <div class="right-side">
            <div class="gallery-columns">
                        <div class="column column-up-one">
                            <div class="image-group">
                             <?php if(have_rows('gsf_gca_column_1_up')): ?>
                                <?php while(have_rows('gsf_gca_column_1_up')): the_row(); ?>
                                    <?php 

                                        $coulumn_up_one = get_sub_field('images_up_one');
                                        
                                    ?>

                                    
                                        <img src="<?php echo $coulumn_up_one['url']; ?>" alt="<?php echo $coulumn_up_one['title']; ?>">
                                    
                                <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                        </div>

                        <div class="column column-down">
                            <div class="image-group">
                            <?php if(have_rows('gsf_gca_column_down')): ?>
                                <?php while(have_rows('gsf_gca_column_down')): the_row(); ?>
                                    <?php 
                                        
                                        $coulumn_down = get_sub_field('images_down');
                                        
                                        ?>

                                    
                                        <img src="<?php echo $coulumn_down['url']; ?>" alt="<?php echo $coulumn_down['title']; ?>">
                                    
                                <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                        </div>

                        <div class="column column-up-two">
                            <div class="image-group">
                            <?php if(have_rows('gsf_gca_column_2_up')): ?>
                                <?php while(have_rows('gsf_gca_column_2_up')): the_row(); ?>
                                    <?php 
                                        
                                        $coulumn_up_two = get_sub_field('images_up_two');

                                        ?>

                                        
                                            <img src="<?php echo $coulumn_up_two['url']; ?>" alt="<?php echo $coulumn_up_two['title']; ?>">
                                        
                                <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                        </div>
            </div>
        </div>
    </div>
<?php endif; ?>
