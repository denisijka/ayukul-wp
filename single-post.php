<?php get_header(); ?>

<?php the_post(); ?>
 
  <div class="site-wrapper-reveal site-wrapper-reveal-blog-details" style="margin-bottom: 400px;">
        <!--====================  Blog Area Start ====================-->
        <div class="blog-pages-wrapper section-space--ptb_100 section-space--ptb_50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 order-lg-2 order-2">
                        <div class="page-sidebar-content-wrapper page-sidebar-right small-mt__40 tablet-mt__40">
                            <div class="sidebar-widget search-post wow move-up">
                                <div class="widget-title">
                                    <h4 class="sidebar-widget-title">Search</h4>
                                </div>
                                <form action="#" method="post">
                                    <div class="widget-search">
                                        <input type="text" placeholder="Enter search keyword…">
                                        <button type="submit" class="search-submit">
                                            <span class="search-btn-icon fa fa-search"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- === Sidebar Widget Start === -->
                            <div class="sidebar-widget widget-blog-recent-post wow move-up">
                                <h4 class="sidebar-widget-title">Recent Posts</h4>
                	
                                <!-- --------------------- -->
                                <ul>
                              <?php

								$main_post_cnt = get_option( 'main_post_cnt' );
								if ( $main_post_cnt ) {

                                    $exclude = '';
                                    if ( is_singular() ){
                                        $exclude = $post->ID;
                                    }

									$featured_posts = get_posts( array(
										'meta_key'       => 'is_featured',
										'posts_per_page' => $main_post_cnt < 4 ? $main_post_cnt : 4,
                                        'exclude'        => $exclude,
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
                        
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                            </li>
                            <?php wp_reset_postdata(); ?>
                       
							<?php else: // более 1 поста в избранном ?>
				  
					     	
                     			
                                
                                <?php $post = $main_fetured_post; setup_postdata($post); ?>
	                            <li>
	                                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
	                            </li>
                                <?php wp_reset_postdata(); ?>
                            
                                
                                                          
                            	<?php foreach ($featured_posts as $post): setup_postdata($post); ?>
	                           	<li>
	                                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
	                            </li>
                              <?php endforeach;
								wp_reset_postdata(); ?>       
                           
					                   <!-- </div> -->
								<?php endif; ?>

							

					<?php endif; ?>
                        </ul>

                            </div>
                            <!-- === Sidebar Widget End === -->
                            <!-- === Sidebar Widget Start === -->
                            <div class="sidebar-widget widget-images wow move-up">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/Ayukul-corporate-brochure.pdf" target="_blank">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/new/blog-sidebar-ads.jpeg" alt="">
                                </a>
                            </div>
                            <!-- === Sidebar Widget End === -->
                            <!-- === Sidebar Widget Start === -->
                            <div class="sidebar-widget widget-tag wow move-up">
                                <h4 class="sidebar-widget-title">Tags</h4>
                                <a href="#" class="ht-btn ht-btn-xs">business</a>
                                <a href="#" class="ht-btn ht-btn-xs">IT Security</a>
                                <a href="#" class="ht-btn ht-btn-xs"> IT Services</a>
                                <a href="#" class="ht-btn ht-btn-xs">Digital Transformation</a>
                            </div>
                            <!-- === Sidebar Widget End === -->
                        </div>
                    </div>
                    <div class="col-lg-8 order-lg-1 order-1 col-lg-8-post">
                        <div class="main-blog-wrap main_blog_details blogdetails_ERD">
                            <!--======= Single Blog Item Start ========-->
                            <div class="single-blog-item">
                                <!-- Post Feature Start -->
                                <h3 class="post-title post-title-main"><?php the_title(); ?></h3>
                                <div class="post-info lg-blog-post-info  wow move-up section-space--pb_50">
                                    <div class="post-meta mt-20">
                                        <div class="post-author">
                                            <a href="#" class="post-author-size">
                                                <?php echo ayukul_get_avatar(); ?>
                                            </a>
                                        </div>
                                        <div class="post-date">
                                            <span class="far fa-calendar meta-icon"></span>
                                            <?php echo ayukul_post_meta($post->ID); ?>
                                        </div>
                                        <div class="post-view">
                                            <span class="meta-icon far fa-eye"></span>
                                            <?php setPostViews(get_the_ID()); ?>
											<?php echo getPostViews(get_the_ID()); ?> views
                                        </div>
                                        <!-- <div class="post-comments"> -->
                                        <!-- <span class="far fa-comment-alt meta-icon"></span> -->
                                        <!-- <a href="#" class="smooth-scroll-link">0 Comments</a> -->
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="post-feature blog-thumbnail  wow move-up">
                                    <img class="img-fluid" src="<?php echo the_post_thumbnail_url( 'full' ) ?>" alt="Blog Images">
                                </div>
                                <!-- Post Feature End -->
                                <!-- Post info Start -->
                                <div class="post-info lg-blog-post-info  wow move-up">
                                    <!-- <div class="post-categories"> -->
                                    <!-- <a href="#"> Success Story, Tips</a> -->
                                    <!-- </div> -->
                                    <div class="post-excerpt mt-15">
                                        <!-- <p>I recently read through <a href="https://enterprise.verizon.com/resources/reports/dbir/" target="_blank"><u>Verizon's Data Breach Report</u></a> posted this year (2020), and it shows that close to 85% of all data thefts or breaches to a sensitive data is financially motivated. These threats prosecute to the company's financial data, intellectual property, health records, and, most importantly, customer identities, which sell on the dark web like a freshly baked apple pie.</p> -->
                                        <blockquote>
                                            <p class="p1"></p>
                                        </blockquote>
                                        <p><?php the_content(); ?></p>
                                        <!-- <h5>The question here is:Why is such a threat so scary to the enterprises? </h5>
                                        <p class="mt-15">The lack of rigor around the asset management is volcanic new threats as companies don't often analyse the current health aspect of their infrastructure. For some companies Asset Management can be as deep as marina trench in pacific leading to a partial or no protection against threats. </p>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <p>Reading through the same report, almost 24% of these threats or breaches were the ones involving Cloud assents. If you consult a Information Security officer or an EDR implementation expert, they would tell you that the most valuable lessonthey couldlearnfrom this time of pandemic is that they didn't migrate to the cloud quickly enough. While migrating to cloud does provide a strength to the workforce, they are also are penetrable to high risk levels.</p>
                                            </div>
                                            <div class="col-md-5">
                                                <p class="bg_green mt-10">While migrating to a cloud does provide a strength to the workforce, they also are penetrable to high risk levels.</p>
                                            </div>
                                        </div>
                                        <p class="mt-15">Today's environment requires a rule that CISO's prefer to have an on-premise cloud SIEM (Security Information and Event Management) and security applications. The future of cyber security relies on Cloud based endpoints and the number of applications they support since most of the enterprises are looking to migrate their work environments to cloud. </p>
                                        <p>Over 60% of the breaches within hacking involves brute force attacking or using lost credentials. The most valuable insights from the Verizon report suggests the priority of cybercriminals is placing personal access credentials. </p>
                                        <p>By keeping an endpoint software updated, monitoring the activity levels andchange of any configuration,you can try to shut down a potential breach which in a way can lead to more proprietary damage and compliance. </p>
                                        <p>What we need is more insightful analytical data on health of each system deployed and added to the company's infrastructure. There are multiple dashboards available that can fetch you the required data, however,I mostly rely on EDR that suit my business requirement and enhances the scalability of my resources. </p>
                                        <p>As a conclusion, I can foresay that Autonomous endpoints that can self assess, regenerate an OS and configure are the upmost future of cybersecurity. While the companies are focused on budget savings, the Information Security officers focus on anticipating and protecting the enterprise from these stealth level breaches.</p>
                                        <p>Bridging the gaps in asset management along with securing every endpoint is something that would leads to an uninterrupted and secure business practice today.</p>
                                        <p>To understand the difference between a secured Endpoint solution and an Anti Virus, here is a table that we can go through:
                                        </p> -->
                                       
                                        <div class="entry-post-share-wrap  border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-lg-7 col-md-7">
                                                    <div class="entry-post-tags">
                                                        <div class="tagcloud-icon">
                                                            <i class="far fa-tags"></i>
                                                        </div>
                                                        <div class="tagcloud">
                                                            <a href="#"> business</a>, <a href="#">IT Security</a>, <a href="#">IT Services</a> , <a href="#">Digital Transformation</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5">
                                                    <div id="entry-post-share" class="entry-post-share">
                                                        <div class="share-label">
                                                            Share this post
                                                        </div>
                                                        <div class="share-media">
                                                            <span class="share-icon far fa-share-alt"></span>
                                                            <div class="share-list">
                                                                <a class="hint--bounce hint--top hint--primary twitter" target="_blank" aria-label="WhatsApp" href="https://web.whatsapp.com/send?text=https://www.ayukul.com/securing-endpoints.html&amp;t=Driving Digital - The Human Touch" data-action="share/whatsapp/share" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" aria-label="WhatsApp">
                                                                    <i class="fab fa-whatsapp"></i>
                                                                </a>
                                                                <a class="hint--bounce hint--top hint--primary facebook" target="_blank" aria-label="Facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.ayukul.com/securing-endpoints.html&amp;t=Driving Digital - The Human Touch" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank">
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                                <a class="hint--bounce hint--top hint--primary linkedin" target="_blank" aria-label="Linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.ayukul.com/securing-endpoints.html&amp;t=Driving Digital - The Human Touch" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank">
                                                                    <i class="fab fa-linkedin"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-author">
                                            <div class="author-info">
                                                <div class="author-avatar">
                                                   <?php echo ayukul_get_avatar(); ?>
                                                    <div class="author-social-networks">
                                                        <div class="inner">
                                                            <a class="hint--bounce hint--top hint--primary" aria-label="Twitter" href="<?= the_field('social_link_1'); ?>" target="_blank">
                                                                <i class="fab fa-twitter"></i>
                                                            </a>
                                                            <a class="hint--bounce hint--top hint--primary" aria-label="Linkedin" href="<?= the_field('social_link_2'); ?>" target="_blank">
                                                                <i class="fab fa-linkedin" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="author-description">
                                                    <h6 class="author-name">Pankul Jain</h6>
                                                    <h6 class="designation">CEO</h6>
                                                    <div class="author-biographical-info">
                                                        Pankul has earned extensive experience with his decade long exposure to cybersecurity optimization and virtualization. His idea of Digital Transformation has led many to trust his analytical and resourceful decisions. He spends his time in philanthropy and gets his thrills by inventing ideas that accelerate business efficiencies.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                <!-- Post info End -->
                            </div>
                            <!--===== Single Blog Item End =========-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Blog Area End  ====================-->
        <!--========== Call to Action Area Start ============-->
     <?php get_template_part( 'template-parts/contact-blog' ); ?>
        <!--========== Call to Action Area End ============-->
    </div>

<?php get_footer(); ?>


