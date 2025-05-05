<!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">

            <div class="col-lg-8">

<!-- Blog Detail Start -->

                <?php 

                    $details_head = get_sub_field('blog_details_headings');
                    $details_desc_1 = get_sub_field('blog_details_describe_1');
                    $details_desc_2 = get_sub_field('blog_details_describe_2');
                    $details_desc_3 = get_sub_field('blog_details_describe_3');
                    $details_img_1 = get_sub_field('blog_details_images_1');
                    $details_img_2 = get_sub_field('blog_details_images_2');

                ?>
                    <div class="mb-5">
                        <div class="row g-5 mb-5">
                            <div class="col-md-6">
                                <?php if($details_img_1) { ?>
                                    <img class="img-fluid w-100" src="<?php echo $details_img_1['url']; ?>" alt="">
                                <?php } ?>                        
                            </div>
                            <div class="col-md-6">
                                <?php if($details_img_2) { ?>
                                    <img class="img-fluid w-100" src="<?php echo $details_img_2['url']; ?>" alt="">
                                <?php } ?>  
                            </div>
                        </div>

                        <?php if($details_head) { ?>
                            <h1 class="mb-4"><?php echo $details_head; ?></h1>
                        <?php } ?>

                        <?php if($details_desc_1) { ?>
                            <p><?php echo $details_desc_1; ?></p>
                        <?php } ?>

                        <?php if($details_desc_2) { ?>
                            <p><?php echo $details_desc_2; ?></p>
                        <?php } ?>

                        <?php if($details_desc_3) { ?>
                            <p><?php echo $details_desc_3; ?></p>
                        <?php } ?>
                    </div>

<!-- Blog Detail End -->





<!-- Comment List Start -->

        <?php 

            $comments_head = get_sub_field('blog_details_comments_heading');

            $comments_dp_img_1 = get_sub_field('blog_detail_comments_dp_images_1');
            $comments_dp_img_2 = get_sub_field('blog_detail_comments_dp_images_2');
            $comments_dp_img_3 = get_sub_field('blog_detail_comments_dp_images_3');

            $comments_dp_name_1 = get_sub_field('blog_detail_dp_name_1');
            $comments_dp_name_2 = get_sub_field('blog_detail_dp_name_2');
            $comments_dp_name_3 = get_sub_field('blog_detail_dp_name_3');

            $comments_dp_date_1 = get_sub_field('blog_detail_dp_date_1');
            $comments_dp_date_2 = get_sub_field('blog_detail_dp_date_2');
            $comments_dp_date_3 = get_sub_field('blog_detail_dp_date_3');

            $comments_desc_1 = get_sub_field('blog_detail_dp_describe_1');
            $comments_desc_2 = get_sub_field('blog_detail_dp_describe_2');
            $comments_desc_3 = get_sub_field('blog_detail_dp_describe_3');

            $comments_btn_reply_1 = get_sub_field('blog_detail_dp_button_link_1');
            $comments_btn_reply_2 = get_sub_field('blog_detail_dp_button_link_2'); 
            $comments_btn_reply_3 = get_sub_field('blog_detail_dp_button_link_3'); 

        ?>

            <div class="mb-5">
                
                <?php if($comments_head) { ?> 
                    <h2 class="mb-4"><?php echo $comments_head; ?></h2>
                <?php } ?>

                    <div class="d-flex mb-4">
                        <?php if($comments_dp_img_1) { ?>
                            <img src="<?php echo $comments_dp_img_1['url']; ?>" class="img-fluid" style="width: 45px; height: 45px;">
                        <?php } ?>

                            <div class="ps-3">
                                <h6><a href=""><?php echo $comments_dp_name_1; ?></a> <small><i><?php echo $comments_dp_date_1; ?></i></small></h6>
                            
                                <?php if($comments_desc_1) { ?>
                                    <p><?php echo $comments_desc_1; ?></p>
                                <?php } ?>

                                <?php if($comments_btn_reply_1) { ?>
                                    <button class="btn btn-sm btn-primary" src = "<?php echo $comments_btn_reply_1['url']; ?>"><?php echo $comments_btn_reply_1['title']; ?></button>
                                <?php } ?>

                            </div>
                    </div>

                    <div class="d-flex mb-4">
                        <?php if($comments_dp_img_2) { ?>
                            <img src="<?php echo $comments_dp_img_2['url']; ?>" class="img-fluid" style="width: 45px; height: 45px;">
                        <?php } ?>

                            <div class="ps-3">
                                <h6><a href=""><?php echo $comments_dp_name_2; ?></a> <small><i><?php echo $comments_dp_date_2; ?></i></small></h6>
                                
                                <?php if($comments_desc_2) { ?>
                                    <p><?php echo $comments_desc_2; ?></p>
                                <?php } ?>

                                <?php if($comments_btn_reply_2) { ?>
                                    <button class="btn btn-sm btn-primary" src = "<?php echo $comments_btn_reply_2['url']; ?>"><?php echo $comments_btn_reply_2['title']; ?></button>
                                <?php } ?>

                            </div>
                    </div>

                    <div class="d-flex ms-5 mb-4">
                        <?php if($comments_dp_img_3) { ?>
                            <img src="<?php echo $comments_dp_img_3['url']; ?>" class="img-fluid" style="width: 45px; height: 45px;">
                        <?php } ?>

                            <div class="ps-3">
                                <h6><a href=""><?php echo $comments_dp_name_3; ?></a> <small><i><?php echo $comments_dp_date_3; ?></i></small></h6>

                                <?php if($comments_desc_3) { ?>
                                    <p><?php echo $comments_desc_3; ?></p>
                                <?php } ?>

                                <?php if($comments_btn_reply_3) { ?>
                                    <button class="btn btn-sm btn-primary" src = "<?php echo $comments_btn_reply_3['url']; ?>"><?php echo $comments_btn_reply_3['title']; ?></button>
                                <?php } ?>

                            </div>
                    </div>
            </div>

<!-- Comment List End -->


<!-- Comment Form Start -->
             <!--     <div class="bg-primary p-5">
                    <h2 class="text-white mb-4">Leave a comment</h2>
                   <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-white border-0" placeholder="Website" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div>  -->
                <?php echo do_shortcode('[contact-form-7 id="afef17e" title="Comment Form"]'); ?>
<!-- Comment Form End -->
            </div>


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
            $cate_head = get_field('blog_details_category_head'); 
        ?>

   
            <div class="mb-5">
                 
                    <?php  if($cate_head) { ?>
                        <h2 class="mb-4"><?php echo $cate_head; ?></h2>
                    <?php } ?>

                <div class="d-flex flex-column justify-content-start bg-primary p-4">
                    <?php if (have_rows('blog_details_categories')): ?>
                    <?php while (have_rows('blog_details_categories')): the_row();
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
            $recent_head = get_sub_field('blog_details_recent_post_head');
        ?>

            <div class="mb-5">
                <?php if ($recent_head): ?>
                    <h2 class="mb-4"><?php echo $recent_head; ?></h2>
                <?php endif; ?>

                <?php if (have_rows('blog_details_recent_list')): ?>
                    <?php while (have_rows('blog_details_recent_list')): the_row(); 
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
            $post_img = get_sub_field('blog_details_post_images');
        ?>
              
            <div class="mb-5">
                <?php if($post_img) { ?>
                    <img src="<?php echo $post_img['url']; ?>" alt="<?php echo $post_img['title']; ?>" class="img-fluid rounded">
                <?php } ?>
            </div>

<!-- Image End -->




<!-- Tags Start -->

        <?php 
            $tag_head = get_sub_field('blog_details_tags_head');
        ?>

            <div class="mb-5">
                <?php if ($tag_head) { ?>
                    <h2 class="mb-4"><?php echo ($tag_head); ?></h2>
                <?php } ?>

                <?php if (have_rows('blog_details_tag_button')): ?>
                    <div class="d-flex flex-wrap m-n1">
                        <?php while (have_rows('blog_details_tag_button')) : the_row(); 
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
            $plain_head = get_sub_field('blog_details_plain_text_head');
            $plain_desc = get_sub_field('blog_details_plain_text_describe');
            $plain_link_btn = get_sub_field('blog_details_plain_text_button_link');
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
