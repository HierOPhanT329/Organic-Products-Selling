<?php 

	$client_heads = get_sub_field('apoc_headings');
	$client_sub_heads = get_sub_field('apoc_sub_headings');
	$client_icons = get_sub_field('apoc_icons');

?>

<?php if($client_heads || $client_sub_heads): ?>
		<section class="our-clients">
		            <div class="container">
		                <div class="section-title">
		                    <h2><?php echo $client_heads; ?></h2>
		                    <p><?php echo $client_sub_heads; ?></p>
		                    <div class="divider">
		                        <span class="divider-line"></span>
		                        <div class="divider-icon">
		                            <?php echo $client_icons; ?>
		                        </div>
		                        <span class="divider-line"></span>
		                    </div>
		                </div>
		                <?php echo do_shortcode( '[gslogo id=1]' ); ?>
		            </div>
		</section>
<?php endif; ?>