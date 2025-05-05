<?php 
	$creative_title = get_field('animated_section_for_backgroud'); 
	echo $creative_title;

    $title_1 = get_sub_field('title_line_1');
    $title_2 = get_sub_field('title_line_2');
    $accent = get_sub_field('title_accent');

?>

	
<div class="creative-header">
    <div class="animated-background"></div>
    <div class="header-content">
        <div class="creative-title">
            <span class="title-line"><?php echo $title_1; ?></span>
            <span class="title-line"><?php echo $title_2; ?></span>
            <span class="title-accent"><?php echo $accent; ?></span>
        </div>
        <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div>
                <div class="shape shape-5"></div>
                <div class="shape shape-6"></div>
                <div class="shape shape-7"></div>
            </div>
    </div>
</div>


