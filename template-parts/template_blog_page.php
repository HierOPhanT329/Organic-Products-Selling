<!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                	<?php if (have_rows('blog_images_grid')) : ?>
                    <?php while (have_rows('blog_images_grid')) : the_row();
                        $bg_img = get_sub_field('blog_images');
                        $bg_desc = get_sub_field('blog_descibe');
                        $bg_date = get_sub_field('blog_date');
                    ?>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                        	<?php if ($bg_img) { ?>
                            	<img class="img-fluid"  src="<?php echo $bg_img['url']; ?>" alt="<?php echo $bg_img['title']; ?>">
                            <?php } ?>
                            <a class="blog-overlay" href="">
                            <?php if ($bg_desc) { ?>
                                <h4 class="text-white"><?php echo $bg_desc; ?></h4>
                            <?php } ?>
                            <?php if ($bg_date) { ?>
                                <span class="text-white fw-bold"><?php echo $bg_date; ?></span>
                           	<?php } ?>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
               <?php endif; ?>

            <!-- permalink -->
                   <div class="col-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg justify-content-center m-0">
                            <li class="page-item disabled">
                              <a class="page-link rounded-0" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link rounded-0" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                              </a>
                            </li>
                          </ul>
                        </nav>

                    </div>

                </div>
            </div>
            <!-- Blog list End -->



<!-- Sidebar Start -->
            <div class="col-lg-4">
                
<!-- Search Form Start -->

                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>

<!-- Search Form End -->


<!-- Category Start -->

        <?php 
            $cate_head = get_field('blog_category_head'); 
        ?>

   
            <div class="mb-5">
                 
                    <?php  if($cate_head) { ?>
                        <h2 class="mb-4"><?php echo $cate_head; ?></h2>
                    <?php } ?>

                <div class="d-flex flex-column justify-content-start bg-primary p-4">
                    <?php if (have_rows('blog_categories')): ?>
                    <?php while (have_rows('blog_categories')): the_row();
                        $category_text = get_sub_field('blog_category_text');
                        $category_link_url = get_sub_field('blog_category_sub_head_link');
                    ?>
                        <a class="fs-5 fw-bold text-white mb-2" href="<?php echo $category_link_url; ?>">
                            <i class="bi bi-arrow-right me-2"></i><?php echo $category_text; ?>
                        </a>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

<!-- Category End -->




<!-- Recent Post Start -->

        <?php 
            $recent_head = get_sub_field('blog_recent_post_head');
        ?>

            <div class="mb-5">
                <?php if ($recent_head): ?>
                    <h2 class="mb-4"><?php echo $recent_head; ?></h2>
                <?php endif; ?>

                <?php if (have_rows('blog_recent_list')): ?>
                    <?php while (have_rows('blog_recent_list')): the_row(); 
                        $recent_img = get_sub_field('blog_recent_images');
                        $recent_text = get_sub_field('blog_recent_text_link');
                    ?>
                    <div class="bg-primary p-4">
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="<?php echo $recent_img['url']; ?>" style="width: 75px;" alt="">
                            <a href="<?php echo $recent_text['url']; ?>" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">
                                <?php echo $recent_text['title']; ?>
                            </a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

<!-- Recent Post End -->




<!-- Image Start -->

        <?php 
            $post_img = get_sub_field('blog_post_images');
        ?>
              
            <div class="mb-5">
                <?php if($post_img) { ?>
                    <img src="<?php echo $post_img['url']; ?>" alt="<?php echo $post_img['title']; ?>" class="img-fluid rounded">
                <?php } ?>
            </div>

<!-- Image End -->




<!-- Tags Start -->

        <?php 
            $tag_head = get_sub_field('blog_tags_head');
        ?>

            <div class="mb-5">
                <?php if ($tag_head) { ?>
                    <h2 class="mb-4"><?php echo ($tag_head); ?></h2>
                <?php } ?>

                <?php if (have_rows('blog_tag_button')): ?>
                    <div class="d-flex flex-wrap m-n1">
                        <?php while (have_rows('blog_tag_button')) : the_row(); 
                            $tag_link = get_sub_field('blog_tags_button_link');
                            if ($tag_link && isset($tag_link['url'], $tag_link['title'])): ?>
                                <a class="btn btn-primary m-1" href="<?php echo ($tag_link['url']); ?>">
                                    <?php echo ($tag_link['title']); ?>
                                </a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

<!-- Tags End -->


               

<!-- Plain Text Start -->

        <?php 
            $plain_head = get_sub_field('blog_plain_text_head');
            $plain_desc = get_sub_field('blog_plain_text_describe');
            $plain_link_btn = get_sub_field('blog_plain_text_button_link');
        ?>

            <div>
                <?php if($plain_head) { ?>
                    <h2 class="mb-4"><?php echo $plain_head; ?></h2>
                <?php } ?>

                <div class="bg-primary text-center text-white" style="padding: 30px;">
                    <?php if($plain_desc) { ?>
                        <p><?php echo $plain_desc; ?></p>
                    <?php } ?>
                    <?php if($plain_link_btn) { ?>
                        <a href="<?php echo $plain_link_btn['url']; ?>" class="btn btn-secondary py-2 px-4"><?php echo $plain_link_btn['title']; ?></a>
                    <?php } ?>
                </div>
            </div>

<!-- Plain Text End -->

        </div>
            <!-- Sidebar End -->
        </div>
    </div>
<!-- Blog End -->

