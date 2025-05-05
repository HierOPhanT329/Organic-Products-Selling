<?php 

	$counter_head = get_sub_field('tcts_heading');
	$counter_desc = get_sub_field('tcts_describe');
	$counter_btn_link = get_sub_field('tcts_link_button');

?>


<?php if($counter_head || $counter_desc): ?>


    <section class="hero-section-counter-time">
        <div class="content-wrapper-counter-time">
            <div class="hero-content-counter-time">
                <div class="text-content-counter-time">
                    <h1 class="h1-counter-time"><?php echo $counter_head; ?></h1>
                    <p class="subtitle-counter-time"><?php echo $counter_desc; ?></p>
                    <a href="<?php echo $counter_btn_link['url']; ?>" class="counter-time-btn"><?php echo $counter_btn_link['title']; ?></a>
                </div>
                
                <div class="stats-grid-counter-time">
                <?php if(have_rows('tcts_counter_time')): ?>
                	<?php while(have_rows('tcts_counter_time')) : the_row(); ?>
                		<?php 

                			$counter_number = get_sub_field('counter_number');
                			$counter_text = get_sub_field('counter_text');

                		?>
                		
                    		<div class="stat-box-counter-time">
                        		<div class="stat-number" data-target="<?php echo $counter_number; ?>">0</div>
                        		<div class="stat-label"><?php echo $counter_text; ?></div>
                    		</div>
                		
            		<?php endwhile; ?>
        		<?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

