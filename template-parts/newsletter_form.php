   <?php 

    $section_title = get_sub_field('newsletter_section_title');
    $section_desc = get_sub_field('newsletter_description');
    $email_placeholder = get_sub_field('email_placeholder');
    $subscribe_btn_txt = get_sub_field('subscribe_button_text');
    $subscribe_btn_txt_icons = get_sub_field('subscribe_button_text_icons_code');
    $checkbox = get_sub_field('checkbox_label');
    $image = get_sub_field('newsletter_images');

   ?>


    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="newsletter-container">
            <div class="newsletter-content">
                <div class="newsletter-text">
                    <h2 class="gradient-text"><?php echo $section_title; ?></h2>
                    <p><?php echo $section_desc; ?></p>
                </div>
                <form class="newsletter-form">
                    <div class="input-group">
                        <input type="email" placeholder="<?php echo $email_placeholder; ?>" required>
                        <button type="submit" class="subscribe-btn">
                            <span><?php echo $subscribe_btn_txt; ?></span>
                            <?php echo $subscribe_btn_txt_icons; ?>
                        </button>
                    </div>
                    <div class="form-extras">
                        <label class="checkbox-container">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            <?php echo $checkbox; ?>
                        </label>
                        
                    </div>
                </form>
            </div>
            <div class="newsletter-image">
                <img src="<?php echo $image['url']; ?>" alt="Fresh Organic Produce">
            </div>
        </div>
    </section>