<?php get_header(); ?>
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Blog</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal" style="margin-bottom: 400px;">

        <!--====================  Blog Area Start ====================-->
        <div class="blog-pages-wrapper blog_main_page section-space--pt_100 section-space--pb_70">
            <div class="container masonry-activation">
            <div class="row clearfix masonry-wrap">
                <!-- ------------------------- -->
                 <!-- ------------------------- -->
                  <!-- ------------------------- -->
                    
                <!-- ------------------------- --> 
                 <!-- ------------------------- -->
                  <!-- ------------------------- -->

                
                 <!-- ------------------------- --> 
                 <!-- ------------------------- -->
                  <!-- ------------------------- -->
					
                <?php

                $main_post_cnt = get_option( 'main_post_cnt' );
                if ( $main_post_cnt ) {
                    $featured_posts = get_posts( array(
                        'meta_key'       => 'is_featured',
                        'posts_per_page' => $main_post_cnt < 4 ? $main_post_cnt : 4,
                    ) );

                    if ( count( $featured_posts ) > 1 ) {
                        $main_fetured_post = array_shift( $featured_posts );
                    }
                }
                ?>

                    <?php if ( ! empty( $featured_posts ) ): ?>
  

                    <?php if ( ! isset( $main_fetured_post ) ): // всего 1 пост в избранном ?>
                
                    
                         
                            <?php $post = $featured_posts[0]; setup_postdata($post); ?>
                            <div class="col-lg-4 col-md-6 masonary-item wow move-up">
                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item blog-masonry">
                                    <!-- Post Feature Start -->
                                    <div class="post-feature blog-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="Blog Images">
                                        </a>
                                    </div>
                                    <!-- Post Feature End -->

                                    <!-- Post info Start -->
                                    <div class="post-info text-center">
                                        <div class="post-meta justify-content-center">
                                            <div class="post-date">
                                                <span class="far fa-calendar meta-icon"></span>
                                               <?php echo ayukul_post_meta($post->ID); ?>
                                            </div>
                                            <div class="post-view">
                                                <span class="meta-icon far fa-eye"></span>
                                                <?php setPostViews(get_the_ID()); ?>
                                            <?php echo getPostViews(get_the_ID()); ?> views
                                            </div>
                                        </div>


                                        <h5 class="post-title font-weight--bold">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h5>

                                        <div class="post-excerpt mb-20">
                                            <?php the_excerpt(); ?>
                                        </div>

                                        <div class="post-read-more">
                                            <a href="<?php the_permalink(); ?>" class="btn-read-more" target="_blank">
                                                <?php esc_html_e('Read more', 'ayukul'); ?>
                                                <i class="far fa-long-arrow-right ml-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Post info End -->
                                </div>
                                <!--===== Single Blog Item End =========-->
                            </div>
                            <?php wp_reset_postdata(); ?>
                       
                            <?php else: // более 1 поста в избранном ?>
                  
                            
                                
                                
                                <?php $post = $main_fetured_post; setup_postdata($post); ?>
                                <div class="col-lg-4 col-md-6 masonary-item wow move-up">
                                    <!--======= Single Blog Item Start ========-->
                                    <div class="single-blog-item blog-masonry">
                                        <!-- Post Feature Start -->
                                        <div class="post-feature blog-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="Blog Images">
                                            </a>
                                        </div>
                                        <!-- Post Feature End -->

                                        <!-- Post info Start -->
                                        <div class="post-info text-center">
                                            <div class="post-meta justify-content-center">
                                                <div class="post-date">
                                                    <span class="far fa-calendar meta-icon"></span>
                                                   <?php echo ayukul_post_meta($post->ID); ?>
                                                </div>
                                                <div class="post-view">
                                                    <span class="meta-icon far fa-eye"></span>
                                                    <?php setPostViews(get_the_ID()); ?>
                                            <?php echo getPostViews(get_the_ID()); ?> views
                                                </div>
                                            </div>


                                            <h5 class="post-title font-weight--bold">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h5>

                                            <div class="post-excerpt mb-20">
                                                <?php the_excerpt(); ?>
                                            </div>

                                            <div class="post-read-more">
                                                <a href="<?php the_permalink(); ?>" class="btn-read-more" target="_blank">
                                                    <?php esc_html_e('Read more', 'ayukul'); ?>
                                                    <i class="far fa-long-arrow-right ml-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Post info End -->
                                    </div>
                                    <!--===== Single Blog Item End =========-->
                                </div>
                                <?php wp_reset_postdata(); ?>
                           
                                
                                                          
                                <?php foreach ($featured_posts as $post): setup_postdata($post); ?>
                                <div class="col-lg-4 col-md-6 masonary-item wow move-up">
                                    <!--======= Single Blog Item Start ========-->
                                    <div class="single-blog-item blog-masonry">
                                        <!-- Post Feature Start -->
                                        <div class="post-feature blog-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="Blog Images">
                                            </a>
                                        </div>
                                        <!-- Post Feature End -->

                                        <!-- Post info Start -->
                                        <div class="post-info text-center">
                                            <div class="post-meta justify-content-center">
                                                <div class="post-date">
                                                    <span class="far fa-calendar meta-icon"></span>
                                                  <?php echo ayukul_post_meta($post->ID); ?>
                                                </div>
                                                <div class="post-view">
                                                    <span class="meta-icon far fa-eye"></span>
                                                    <?php setPostViews(get_the_ID()); ?>
                                            <?php echo getPostViews(get_the_ID()); ?> views
                                                </div>
                                            </div>


                                            <h5 class="post-title font-weight--bold">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h5>

                                            <div class="post-excerpt mb-20">
                                                <?php the_excerpt(); ?>
                                            </div>

                                            <div class="post-read-more">
                                                <a href="<?php the_permalink(); ?>" class="btn-read-more" target="_blank">
                                                    <?php esc_html_e('Read more', 'ayukul'); ?>
                                                    <i class="far fa-long-arrow-right ml-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Post info End -->
                                    </div>
                                    <!--===== Single Blog Item End =========-->
                                </div>
                              <?php endforeach;
                                wp_reset_postdata(); ?>       
                           
                   <!-- </div> -->
            <?php endif; ?>

        <!-- </div> -->

<?php endif; ?>


                </div>
            </div>
        </div>
        <!--====================  Blog Area End  ====================-->

        <!--========== Call to Action Area Start ============-->
    <?php get_template_part( 'template-parts/contact-blog' ); ?>

     <?php get_footer(); ?>