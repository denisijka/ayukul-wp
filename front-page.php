<?php
/*

Template Name: home page template

*/
?>
<?php get_header(); ?>
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- <ol class="carousel-indicators"> -->
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> -->
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> -->
  <!-- </ol> -->
  <div class="carousel-inner">
    <div class="carousel-item active firstbanner">
	  <a href="https://slidemonkey.ayukul.com/" target="_blank">
        <img class="d-block w-100 " src="<?= the_field('slide_image_1'); ?>" alt="First slide">
    </a>
    </div>
  <div class="carousel-item  firstbanner">
	  <img class="d-block w-100 deskbanner" src="<?= the_field('slide_image_2'); ?>" alt="Second slide">
	  <!-- <img class="d-block w-100 mobilebanner" src="<?= the_field('slide_image_2'); ?>" alt="Second slide"> -->
    </div>
    <div class="carousel-item  firstbanner">
	  <img class="d-block w-100 deskbanner" src="<?= the_field('slide_image_3'); ?>" alt="Third slide">
	  <!-- <img class="d-block w-100 mobilebanner" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/mobilebanner1.jpeg" alt="Third slide"> -->
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




        <div class="feature-images-wrapper feature-images-wrapper-new position-relative ">
            <div class="service-slider__container container-fluid">
                <?php if (have_rows('feature_post')):?>
                <div class="row service-slider__wrapper feature-images__three">
                    <?php while (have_rows('feature_post')): the_row();?>
                    <div class="col-lg-3 col-md-6">
                        <a href="<?= the_field('social_link_1'); ?>" class="ht-box-images style-03 wow move-up">
                            <div class="image-box-wrap">
                                <div class="box-image">
                                    <img class="img-fulid" src="<?php the_sub_field('feature_icon') ?>" alt="">
                                </div>
                                <div class="content">
                                    <h5 class="heading"><?php the_sub_field('feature_title') ?></h5>
                                    <div class="text"><?php the_sub_field('feature_text') ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
                <div class="swiper-pagination swiper-pagination-service section-space--mt_30"></div>
            </div>
        </div>
		
        <!--===========  Our Company History Start =============-->

        <div class="our-company-history section-space--ptb_100 pb-0" id="our-company">
            <div class="container-fluid">
                <div class="grid-wrapper">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                    <div class="line line-4"></div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-custom-col">
                            <!-- --------------------------------------- -->
                            <?php
                                $title_about_us = get_field('title_about_us');
                                if( $title_about_us ): ?>
                                
                                <div class="section-title-wrap">
                                    <h6 class="section-sub-title mb-20"><?= the_field('label_about_us'); ?></h6>
                                    <h3 class="heading"><?php echo $title_about_us['title_strong']; ?> <span class="text-color-primary text-color-primary-about-us"><?php echo $title_about_us['title_green']; ?></span></h3>
                                        <p class="text mt-30"><?= the_field('text_1_about_us'); ?></p>
                                        <p><?= the_field('text_2_about_us'); ?></p>
                                        <p><?= the_field('text_3_about_us'); ?></p>

                                        <div class="inner-button-box section-space--mt_60">
                                            <a href="#" class="ht-btn ht-btn-md">Find out more</a>
                                        </div>
                                </div>


                            <?php endif; ?>
                            <!-- ------------------------------- -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rv-video-section">

                            <div class="ht-banner-01 ">
                                <img class="img-fluid border-radus-5 animation_images one wow fadeInDown" src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/home-processing-video-intro-slider-slide-01-image-02.jpeg" alt="">
                            </div>

                            <div class="ht-banner-02">
                                <img class="img-fluid border-radus-5 animation_images two wow fadeInDown" src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/home-processing-video-intro-slider-slide-01-image-03.jpeg" alt="">
                            </div>

                            <div class="main-video-box video-popup">
                                <a  class="video-link  mt-30" style="cursor:initial;">
                                    <div class="single-popup-wrap">
                                        <img class="img-fluid border-radus-5" src="<?= the_field('image_about_us'); ?>" alt="">
                                        <div class="ht-popup-video video-button">
                                            <div class="video-mark">
                                                <div class="wave-pulse wave-pulse-1"></div>
                                                <div class="wave-pulse wave-pulse-2"></div>
                                            </div>
                                            <div class="video-button__two">
                                                <div class="video-play">
                                                    <span class="video-play-icon"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="ht-banner-03">
                                <img class="img-fluid border-radus-5 animation_images three wow fadeInDown" src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/home-processing-video-intro-slider-slide-01-image-04.jpeg" alt="">
                            </div>

                            <div class="ht-banner-04">
                                <img class="img-fluid border-radus-5 animation_images four wow fadeInDown" src="<?php echo get_template_directory_uri(); ?>/assets/images/banners/home-processing-video-intro-slider-slide-01-image-05.jpeg" alt="">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--===========  Our Company History Start  End =============-->

        <!--===========  feature-icon-wrapper  Start =============-->
        <div class="feature-icon-wrapper feature-icon-wrapper-new bg-gray section-space--ptb_100" id="services">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h6 class="section-sub-title mb-20"><?= the_field('label_our_solution'); ?></h6>
                            <?php
                                $title_our_solution = get_field('title_our_solution');
                                if( $title_our_solution ): ?>
                                
                                <h3 class="heading"><?php echo $title_our_solution['strong_title_our_solution']; ?><br> <?php echo $title_our_solution['strong_2_title_our_solution']; ?> <span class="text-color-primary"> <?php echo $title_our_solution['green_title_our_solution']; ?></span></h3>    


                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="feature-list__two">
                            <div class="row">
                    
                                <?php 
                                    $args = array ('post_type' => 'solution', 'posts_per_page' => 10 );
                                    $loop = new WP_Query( $args );
                                    while ( $loop -> have_posts() ) : $loop-> the_post(); ?>

                                    <div class="col-lg-3 col-md-6 wow move-up">
                                        <div class="ht-box-icon style-02 single-svg-icon-box">
                                            <div class="icon-box-wrap">
                                                <div class="icon">
                                                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading newsize"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h5>
                                                    <div class="text newtext"><?php the_excerpt(); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                          
                                  <?php endwhile; ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="feature-list-button-box mt-30 text-center">
                            <a href="#" class="ht-btn ht-btn-md">Talk to a consultant</a>
                            <a href="contact-us-html" class="ht-btn ht-btn-md ht-btn-outline">Contact us now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-icon-wrapper  End =============-->



        <!--====================  gradation process area ====================-->
        <div class="gradation-process-area section-space--ptb_100" id="work-flow">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="gradation-title-wrapper section-space--mb_60">
                            <div class="gradation-title-wrap ">
                                <h6 class="section-sub-title  mb-20"><?php the_field('workflow_label','options') ?></h6>
                                <?php
                                $title_our_workflow = get_field('title_our_workflow','options');
                                if( $title_our_workflow ): ?>
                                
                                <h4 class="heading"><?php echo $title_our_workflow['strong_our_workflow']; ?> <span class="text-color-primary"><?php echo $title_our_workflow['green_1_our_workflow']; ?> <br> <?php echo $title_our_workflow['green_2_our_workflow']; ?></span></h4>  

                                <?php endif; ?>
                                   
                            </div>


                            <div class="gradation-sub-heading">
                                <h3 class="heading"><mark>04</mark> Steps</h3>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <?php if (have_rows('workflow_repeater','options')):?>
                        <div class="ht-gradation style-01">
                            <?php while (have_rows('workflow_repeater','options')): the_row();?>
                            <div class="item item-1 animate  wow fadeInRight" data-wow-delay="<?php the_sub_field('data-wow-delay') ?>s">
                                <div class="line"></div>
                                <div class="circle-wrap">
                                    <div class="mask">
                                        <div class="wave-pulse wave-pulse-1"></div>
                                        <div class="wave-pulse wave-pulse-2"></div>
                                        <div class="wave-pulse wave-pulse-3"></div>
                                    </div>

                                    <h6 class="circle"><?php the_sub_field('circle_num') ?></h6>
                                </div>

                                <div class="content-wrap">

                                    <h6 class="heading"><?php the_sub_field('title_post_our_workflow') ?></h6>

                                    <div class="text"><?php the_sub_field('text_post_our_workflow') ?></div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of gradation process area  ====================-->



        <!--========== Call to Action Area Start ============-->
       <?php get_template_part( 'template-parts/contact-blog' ); ?>
        <!--========== Call to Action Area End ============-->
		
		
		<div class="service-projects-wrapper section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       <div class="section-title-wrap text-center section-space--mb_60">
                            <h3 class="heading">Latest Blog </h3>
                        </div>
                    </div>
                </div>
                <div class="latest-news-wrap">
                    <div class="row">
                        <!-- --------------------------------------- -->
                        <!-- other posts -->
                        <?php get_template_part( 'template-parts/featured_posts' ); ?>
                      
                    </div>
                </div>
            </div>
        </div>

        <!--============ Contact Us Area Start =================-->
        <div class="contact-us-area service-contact-bg section-space--ptb_100" id="contact-us">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-4">
                        <div class="contact-info sytle-one service-contact text-left">
                            <div class="contact-list-item">
                                <?php
                                $contact_list_item_form_area = get_field('contact_list_item_form_area');
                                if( $contact_list_item_form_area ): ?>
                                <a  class="single-contact-list" style="cursor:initial;">
                                    <div class="content-wrap">
                                        <div class="content">
                                            <div class="icon">
                                                <span class="fal fa-phone"></span>
                                            </div>
                                            <div class="main-content">
                                                <h6 class="heading mnheading"><?php echo $contact_list_item_form_area['label_contact_phone_form_area']; ?></h6>
                                                <a class="text mntext" href=tel:<?php echo $contact_list_item_form_area['href_contact_phone_form_area']; ?>><?php echo $contact_list_item_form_area['contact_phone_form_area']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="mailto:support@ayukul.com" class="single-contact-list">
                                    <div class="content-wrap">
                                        <div class="content">
                                            <div class="icon">
                                                <span class="fal fa-envelope"></span>
                                            </div>
                                            <div class="main-content">
                                                <h6 class="heading"><?php echo $contact_list_item_form_area['label_contact_mail_form_area']; ?></h6>
                                                <div class="text"”><?php echo $contact_list_item_form_area['mail_contact_form_area']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-7 ml-auto">
                        <div class="contact-form-service-wrap" >
                            <div class="contact-title text-center section-space--mb_40">
                                <?php
                                $title_group_contact_form_area = get_field('title_group_contact_form_area');
                                if( $title_group_contact_form_area ): ?>
                                <h3 class="mb-10"><?php echo $title_group_contact_form_area['title_contact_form_area']; ?></h3>
                                <p class="text"><?php echo $title_group_contact_form_area['label_contact_form_area']; ?></p>
                                <?php endif; ?>
                            </div>
                           <form id="writeUs" action="contact_process.php" method="post" name="writeUs">
                                <div class="contact-form__two">

                                    <?php echo do_shortcode('[contact-form-7 id="485" title="Contact form 1"]')?>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--============ Contact Us Area End =================-->
        <!--====================  brand logo slider area ====================-->
		
		
		
        <div class="brand-logo-slider-area section-space--ptb_60">
            <div class="container">
                <div class="row">
					<div class="section-title-wrap text-center section-space--mb_60" style="width:100%;">
						<h3 class="heading text-center"><?php the_field('title_brand_logo_sliders') ?></h3>
					</div>
                    <div class="col-lg-12">
                        <div class="brand-logo-slider__container-area ">
                            <div class="swiper-container brand-logo-slider__container">
                                <?php if (have_rows('brand_logo_sliders')):?>
                                <div class="swiper-wrapper brand-logo-slider__one">
									 <?php while (have_rows('brand_logo_sliders')): the_row();?>
									<div class="swiper-slide brand-logo brand-logo--slider">
											<a href="<?php the_sub_field('brand_logo_link') ?>" target="_blank">
												<img src="<?php the_sub_field('brand_logo_icon') ?>" class="img-fluid" alt="">
											</a>
									</div>
									 <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        

    </div>



</div>
 <?php get_footer(); ?>