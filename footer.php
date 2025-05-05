<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="footer">

    <!-- Footer Start -->
    <div class="container-fluid bg-footer bg-primary text-white mt-5"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/footer.png);">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-white mb-4"><?php echo get_field('headings', 'options'); ?></h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0"><?php echo get_field('sub_headings_address', 'options'); ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0"><?php echo get_field('sub_heading_emails', 'options'); ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="text-white mb-0"><?php echo get_field('sub_heading_phone', 'options'); ?></p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-secondary btn-square rounded-circle me-2"
                                    href="<?php echo get_field('twitter_link', 'options'); ?>"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2"
                                    href="<?php echo get_field('facebook_link', 'options'); ?>"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2"
                                    href="<?php echo get_field('linkedin_link', 'options'); ?>"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle"
                                    href="<?php echo get_field('instagram_link', 'options'); ?>"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-1',
                                    'menu_class' => 'd-flex flex-column justify-content-start',
                                    'container' => false,
                                    'link_before' => '<i class="bi bi-arrow-right text-white me-2"></i>',
                                ));
                                ?>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Popular Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-2',
                                    'menu_class' => 'd-flex flex-column justify-content-start',
                                    'container' => false,
                                    'link_before' => '<i class="bi bi-arrow-right text-white me-2"></i>',
                                ));
                                ?>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-secondary p-5">
                        <h4 class="text-white">Newsletter</h4>
                        <h6 class="text-white">Subscribe Our Newsletter</h6>
                        <p>Stay rooted in the good stuff. Subscribe now.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="email" class="form-control border-white p-3" placeholder="Your Email"
                                    required>
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <?php if ($copyright = get_field('copyright', 'options')): ?>
                <p class="mb-0"><?php echo $copyright; ?></p>
            <?php endif; ?>
        </div>
    </div>
    <!-- Footer End -->

</footer> <!-- Footer end here -->
</div> <!-- Wrapper end here -->

<a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>