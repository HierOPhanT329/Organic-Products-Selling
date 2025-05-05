<?php 
    $team_title = get_sub_field('teams_title');
    $teams_sub_title = get_sub_field('teams_sub_titles');
    $teams_icons = get_sub_field('teams_icons'); 
?>

<?php if (!empty($team_title) || !empty($teams_sub_title)): ?>
    <section class="our-farmers">
        <div class="container">
            <div class="section-title">
                <h2><?php echo $team_title; ?></h2>
                <p><?php echo $teams_sub_title; ?></p>
                <div class="divider">
                    <span class="divider-line"></span>
                    <div class="divider-icon">
                        <?php if (!empty($teams_icons)) echo $teams_icons; ?>
                    </div>
                    <span class="divider-line"></span>
                </div>
            </div>

            <?php if (have_rows('teams_card')): ?>
                <div class="farmers-grid"> 
                    <?php while (have_rows('teams_card')): the_row(); ?>
                        <?php 
                            $t_img_card = get_sub_field('teams_images_cards');
                            $t_heads_card = get_sub_field('teams_headings_cards');
                            $t_desc_card = get_sub_field('teams_describe_cards');

                            $t_fb_icons_card = get_sub_field('teams_facebook_icons_cards');
                            $t_fb_link = get_sub_field('teams_facebook_icons_cards_link');

                            $t_x_icons_card = get_sub_field('teams_twitter_icons_cards');
                            $t_x_link = get_sub_field('teams_twitter_icons_cards_link');

                            $t_ig_icons_card = get_sub_field('teams_instagram_icons_cards');
                            $t_ig_link = get_sub_field('teams_instagram_icons_cards_link');

                            $t_linkin_icons_card = get_sub_field('teams_linkedin_icons_cards');
                            $t_linkin_link = get_sub_field('teams_linkedin_icons_cards_link');
                        ?>


                        <div class="farmer-card">
                            <div class="farmer-img">
                                <?php if (!empty($t_img_card) && isset($t_img_card['url'], $t_img_card['title'])): ?>
                                    <img src="<?php echo $t_img_card['url']; ?>" alt="<?php echo $t_img_card['title']; ?>">
                                <?php endif; ?>
                                <div class="farmer-social">
                                    <?php if (!empty($t_fb_icons_card) && !empty($t_fb_link)): ?>
                                        <a href="<?php echo $t_fb_link['url']; ?>">
                                            <i class="fab fa-facebook"></i> 
                                        </a>
                                    <?php endif; ?>

                                    <?php if (!empty($t_x_icons_card) && !empty($t_x_link)): ?>
                                        <a href="<?php echo $t_x_link['url']; ?>">
                                            <i class="fab fa-twitter"></i> 
                                        </a>
                                    <?php endif; ?>

                                    <?php if (!empty($t_ig_icons_card) && !empty($t_ig_link)): ?>
                                        <a href="<?php echo $t_ig_link['url']; ?>">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    <?php endif; ?>

                                    <?php if (!empty($t_linkin_icons_card) && !empty($t_linkin_link)): ?>
                                        <a href="<?php echo $t_linkin_link['url']; ?>">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="farmer-info">
                                <h3><?php echo $t_heads_card; ?></h3>
                                <p><?php echo $t_desc_card; ?></p>
                            </div>
                        </div>                    
                    <?php endwhile; ?>
                </div> 
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
