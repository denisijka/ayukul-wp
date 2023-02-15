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
	<!-- <div class="container pt-4 pb-4"> -->
		
		

			<?php if ( ! isset( $main_fetured_post ) ): // всего 1 пост в избранном ?>
				
					
					     
					     	<?php $post = $featured_posts[0]; setup_postdata($post); ?>
                        <div class="col-lg-6">
                            <div class="single-blog-lg-item wow move-up">
                                <!-- Post Feature Start -->
                                <a href="<?php the_permalink(); ?>" target="_blank">
                                    <div class="post-blog-thumbnail">
                                        <img class="img-fluid" src="<?php echo the_post_thumbnail_url( 'full' ) ?>" alt="Blog Images">
                                        <div class="post-meta mt-20">
                                            <div class="post-author">
                                                <?php echo ayukul_get_avatar(); ?> 
                                                <?php the_author(); ?> 
                                            </div>
                                            <div class="post-date">
                                                <span class="far fa-calendar meta-icon"></span>
                                                <?php echo ayukul_post_meta($post->ID); ?>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                                <!-- Post Feature End -->
                                <!-- ----------------------------------------------- -->
                                <!-- Post info Start --> 
                 
                                
                                <div class="post-info lg-blog-post-info mt-20">
                                    <h4 class="post-title">
                                        <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title() ?></a>
                                    </h4>
                                    <div class="post-excerpt mt-15">
                                        <?php the_content(''); ?>
                                    </div>
                                    <div class="btn-text mt-15">
                                        <a href="<?php the_permalink(); ?>" target="_blank"><?php esc_html_e('Read more', 'ayukul'); ?> <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                                    </div>
                                    <!-- securing-endpoints.html -->
                                </div>
                                
                                <!-- Post info End -->
                            </div>
                        </div>
                            <?php wp_reset_postdata(); ?>
                       
							<?php else: // более 1 поста в избранном ?>
				  
					     	
                     	
                        <div class="col-lg-6">
                            <div class="single-blog-lg-item wow move-up">
                                <?php $post = $main_fetured_post; setup_postdata($post); ?>
                                <!-- Post Feature Start -->
                                <a href="<?php the_permalink(); ?>" target="_blank">
                                    <div class="post-blog-thumbnail">
                                        <img class="img-fluid" src="<?php echo the_post_thumbnail_url( 'full' ) ?>" alt="Blog Images">
                                        <div class="post-meta mt-20">
                                            <div class="post-author">
                                                <?php echo ayukul_get_avatar(); ?> 
                                                <?php the_author(); ?> 
                                            </div>
                                            <div class="post-date">
                                                <span class="far fa-calendar meta-icon"></span>
                                                <?php echo ayukul_post_meta($post->ID); ?>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                                <!-- Post Feature End -->
                                <!-- ----------------------------------------------- -->
                                <!-- Post info Start --> 
                 
                                
                                <div class="post-info lg-blog-post-info mt-20">
                                    <h4 class="post-title">
                                        <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title() ?></a>
                                    </h4>
                                    <div class="post-excerpt mt-15">
                                        <?php the_content(''); ?>
                                    </div>
                                    <div class="btn-text mt-15">
                                        <a href="<?php the_permalink(); ?>" target="_blank"><?php esc_html_e('Read more', 'ayukul'); ?> <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                                    </div>
                                    <!-- securing-endpoints.html -->
                                </div>
                                
                                <!-- Post info End -->
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </div>    
                        <div class="col-lg-6 blog-list-service">                           
                            	<?php foreach ($featured_posts as $post): setup_postdata($post); ?>
                            <div class="single-blog-lg-list wow move-up">
                                	
                                <!-- Post Feature Start -->
                                <a href="<?php the_permalink(); ?>" target="_blank">
                                    <div class="post-blog-thumbnail">
                                        <img class="img-fluid" src="<?php echo the_post_thumbnail_url('full') ?>" alt="Blog Images">
                                        <div class="post-meta mt-20">
                                            <div class="post-author">
                                                <!-- <img class="img-fluid avatar-96" src="assets/images/blog/p-jain.png" alt="">  -->
                                                <?php echo ayukul_get_avatar(); ?> 
                                                <?php the_author(); ?> 

                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Post Feature End -->

                                <!-- Post info Start -->
                                <div class="post-info lg-blog-post-info">
                                    <div class="post-meta mb-10">
                                        <div class="post-date">
                                            <span class="far fa-calendar meta-icon"></span>
                                            <?php echo ayukul_post_meta($post->ID); ?>
                                        </div>
                                    </div>
                                    <h5 class="post-title">
                                        <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a>
                                    </h5>
                                </div>
                                <!-- Post info End -->
                            </div>
                              <?php endforeach;
								wp_reset_postdata(); ?>       
                           
                               
                			<?php endif; ?>

                		</div>

<?php endif; ?>

