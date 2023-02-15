<?php get_header(); ?>

<div class="site-wrapper-reveal site-wrapper-reveal-one" style="margin-bottom: 426px;">
        <div class="about-banner-wrap banner-space bg-img service1_bg" data-bg="<?php the_field('main_background_image') ?>">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 ml-auto mr-auto">
                        <div class="about-banner-content text-center">
                            <h1 class="mb-15 text-white"><?php the_title(); ?></h1>
                            <h5 class="font-weight--normal text-white"><?php the_field('label') ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-large-images-wrapper  Start =============-->
        <div class="feature-large-images-wrapper section-space--ptb_100">
            <div class="container">
            
        <?php if ( $content_heading = get_field( 'content_heading' ) ) : ?>                
                <div class="cybersecurity-about-box">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="conact-us-wrap-one managed-it">
                                <h5 class="heading ">
                                    <?php echo  $content_heading; ?>
                                </h5>
                            </div>
                        </div>
                        <?php if ( $content_text = get_field( 'content_text' ) ) : ?>
                            <div class="col-lg-7 offset-lg-1">
                                <div class="cybersecurity-about-text">
                                    <?php echo $content_text; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>                
            <?php endif; ?>
            </div>

            <div class="service_section_new  services__content services__content-no-bottom">
                <?php the_content(); ?>
            </div>
</div>
</div>

<!--======================= Why Managed Backup Solutions? Start ===============================-->
        <?php if ( $why_title = get_field( 'why_title' ) ) : ?>    
        <div class="our_offer_section section-space--ptb_100 pb-0 gray_background">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">

                            <h3 class="heading"><?php echo  $why_title; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">   
                        <p class="text mt-20"><?php  echo get_field( 'why_text' ) ?></p>                                   
                        <p class="text mt-20"><?php  echo get_field( 'why_text_list' ) ?></p> 
                        
                        <ul>
                            <?php while ( have_rows( 'managed_backup_repeater_list' ) ) :
                                the_row(); ?>
                            <li><?php the_sub_field('text') ?></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- ------------------------------------------------------------ -->
        <div class="feature-images-wrapper  service-manage service-manage-auto section-space--ptb_100 pt-0 gray_background">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="feature-images__one">
                            <div class="row">
                            <?php while ( have_rows( 'managed_backup_repeater_features' ) ) :
                                the_row(); ?>
                                <div class="col-lg-4 col-md-6 wow move-up animated" style="visibility: visible;">
                                    <div class="ht-box-images style-01">
                                        <div class="image-box-wrap">
                                            <div class="box-image">
                                                <img class="img-fulid" src="<?php  the_sub_field('icon') ?>" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="heading"><?php  the_sub_field('title') ?></h5>
                                                <div class="text"><?php  the_sub_field('text') ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<!--========================== Why Managed Backup Solutions? End ==============================-->

        <!--========= Our Backup Services Offer Start ===========-->
        <?php if ( $our_backup_title = get_field( 'our_backup_title' ) ) : ?>    
        <div class="about-delivering-wrapper  section-space--ptb_100 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="heading"><?php echo $our_backup_title ?></h3>
                            <p class="text text1"><?php echo get_field('our_backup_text') ?> </p>
                        </div>
                    </div>
                </div>
                <div class="row list-stylilng">
                    <div class="col-lg-6">
                        <ul>
                        <?php while ( have_rows( 'our_backup_reapet_left' ) ) :
                        the_row(); ?>
                            <li> <?php the_sub_field('text') ?></li>
                        <?php endwhile; ?>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                        <?php while ( have_rows( 'our_backup_reapet_right' ) ) :
                        the_row(); ?>
                            <li> <?php the_sub_field('text') ?></li>
                        <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="delivering-optimal-wrap">
                            <?php while ( have_rows( 'our_backup_reapet_feature_left' ) ) :
                                the_row(); ?>
                                <div class="list-item">
                                    <div class="marker"></div>
                                    <div class="title-wrap">
                                        <h5 class="title"><?php the_sub_field('title') ?></h5>
                                        <div class="desc"><?php the_sub_field('text') ?> </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="delivering-optimal-wrap">
                            <?php while ( have_rows( 'our_backup_reapet_feature_right' ) ) :
                                the_row(); ?>
                                <div class="list-item">
                                    <div class="marker"></div>
                                    <div class="title-wrap">
                                        <h5 class="title"><?php the_sub_field('title') ?></h5>
                                        <div class="desc"><?php the_sub_field('text') ?> </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!--========= Our Backup Services Offer End ===========-->
    
        <!--===========  Why Managed IT  Start =============-->
        <?php if ( $features_post_title = get_field( 'features_post_title' ) ) : ?>    
            <div class="about-delivering-wrapper pt-0 section-space--ptb_100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title-wrap section-title-wrap-no-bottom text-center section-space--mb_20">
                                    <h3 class="heading"><?php echo  $features_post_title; ?></h3>
                                    <p class="text1"><?php echo get_field('features_post_descr'); ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="delivering-optimal-wrap">
                                <?php while ( have_rows( 'features_post_item_left' ) ) :
                                    the_row(); ?>
                                    <div class="list-item">
                                        <div class="marker"></div>
                                        <div class="title-wrap">

                                        <?php if ( $title = get_sub_field( 'title_left' ) ) : ?>
                                            <h5 class="title"><?php echo $title ?> </h5>
                                        <?php endif; ?>

                                        <?php if ( $text = get_sub_field( 'text_left' ) ) : ?>
                                        <div class="desc"><?php echo $text ?> </div>
                                        </div>
                                        <?php endif; ?>

                                    </div>
                                <?php endwhile; ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="delivering-optimal-wrap">
                                <?php while ( have_rows( 'features_post_item_right' ) ) :
                                    the_row(); ?>
                                    <div class="list-item">
                                        <div class="marker"></div>
                                        <div class="title-wrap">

                                        <?php if ( $title = get_sub_field( 'title_right' ) ) : ?>
                                            <h5 class="title"><?php echo $title ?> </h5>
                                        <?php endif; ?>

                                        <?php if ( $text = get_sub_field( 'text_right' ) ) : ?>
                                        <div class="desc"><?php echo $text ?> </div>
                                        </div>
                                        <?php endif; ?>

                                    </div>
                                <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        <?php endif; ?>
        <!--===========  Why Managed IT  End =============-->



            </div>
        </div>
        <!--===========  feature-large-images-wrapper  End =============-->

        <!--===========  Why Managed Storage Services?  Start =============-->

    <?php if ( $why_managed_title = get_field( 'why_managed_title' ) ) : ?>
        <div class="feature-icon-wrapper pt-0 section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap section-title-wrap-no-bottom text-center section-space--mb_20">
                                <h3 class="heading"><?php echo $why_managed_title; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="feature-list__three">
                                <div class="row">
                                    <?php while ( have_rows( 'why_managed_repeater' ) ) :
                                        the_row(); ?>
                                    <div class="col-lg-6">
                                        <div class="grid-item animate">
                                            <div class="ht-box-icon style-03">
                                                <div class="icon-box-wrap">
                                                    <div class="content-header">
                                                        <div class="icon">
                                                            <img src="<?php the_sub_field('why_managed_icon') ?>">
                                                        </div>
                                                        <h5 class="heading">
                                                           <?php the_sub_field('why_managed_subtitle') ?>
                                                        </h5>
                                                    </div>
                                                    <div class="content">
                                                        <div class="text"><?php the_sub_field('why_managed_text') ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        <?php endif; ?>

        <!--===========  Why Managed Storage Services?  End =============-->

        <!--===========  Our Offer    Start =============-->
        <?php if ( $our_offer_title = get_field( 'our_offer_title' ) ) : ?>
        <div class="about-delivering-wrapper  section-space--ptb_100 pt-0 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap section-title-wrap-no-bottom text-center section-space--mb_20">
                            <h3 class="heading"><?php echo $our_offer_title; ?></h3>
                        
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-lg-6">
                        <div class="delivering-optimal-wrap">
                        <?php while ( have_rows( 'our_offer_repeater_left' ) ) :
                            the_row(); ?>
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <div class="desc"><?php the_sub_field('our_offer_text_left') ?> </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="delivering-optimal-wrap">
                        <?php while ( have_rows( 'our_offer_repeater_right' ) ) :
                        the_row(); ?>
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <div class="desc"><?php the_sub_field('our_offer_text_right') ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!--===========  Our Offer    End =============-->

        <!--===========  We offer a complete set of features    Start =============-->
        <?php if ( $we_offer_title = get_field( 'we_offer_title' ) ) : ?>
        <div class="benefits_section section-space--ptb_80 pt-0">
            <div class="container">
                <div class="row">
                        <div class="section-title-wrap text-center section-space--mb_40" style="width:100%;">
                            <h3 class="heading text-center"><?php echo $we_offer_title; ?></h3>
                        </div>
                    <div class="col-lg-6">
                        <ul>
                        <?php while ( have_rows( 'we_offer_left_repeater' ) ) :
                        the_row(); ?>
                            <li><?php the_sub_field('we_offer_left_repeater_list') ?></li>
                        <?php endwhile; ?>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                        <?php while ( have_rows( 'we_offer_right_repeater' ) ) :
                        the_row(); ?>
                            <li><?php the_sub_field('we_offer_right_repeater_list') ?></li>
                        <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!--===========  We offer a complete set of features    End =============-->

        <!--========== Cloud Services "Why Cloud Services?" Start ==============-->

        <?php if ( have_rows( 'why_us_items' ) ) : ?>
            <div class="feature-images-wrapper service-manage service-manage-could-manage service_one section-space--ptb_100">

            
                    <div class="container">
                        <?php if ( $why_section_title = get_field( 'why_section_title' ) ) : ?>
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <!-- section-title-wrap Start -->
                                <div class="section-title-wrap text-center">
                                    
                                    <h3 class="heading"><?php echo esc_html( $why_section_title ); ?></h3>
                                </div>
                                <!-- section-title-wrap Start -->
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="feature-images__one">
                                    <div class="row">
                                    <?php while ( have_rows( 'why_us_items' ) ) :
                                        the_row(); ?>
                                        <div class="col-lg-3 col-md-6 wow move-up">
                                            <!-- ht-box-icon Start -->
                                            <div class="ht-box-images style-01">
                                                <div class="image-box-wrap">
                                                    <div class="box-image">
                                                        <img class="img-fulid" src="<?php the_sub_field('image') ?>" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="heading"><?php the_sub_field('title') ?></h5>
                                                        <div class="text"><?php the_sub_field('text') ?>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ht-box-icon End -->
                                        </div>
                                    <?php endwhile; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        <?php endif; ?>
        <!--========== Cloud Services "Why Cloud Services?" End ==============-->

        <!--========= Download Start ===========-->

        <?php if ( $download_section_title = get_field( 'download_section_title' ) ) : ?>
            <div class="about-resources-wrapper">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="resources-left-box">
                                <div class="resources-inner">
                                  
                                    <h3 class="heading"><?php echo $download_section_title; ?></h3>
                                    <div class="button mt-30">

                                    <?php if ( $file = get_field( 'file' ) ) : ?>
                                        <?php if ( $download_section_button_text = get_field( 'download_section_button_text' ) ) : ?>
                                        <a  href="<?php echo $file['url'] ?>" download class="ht-btn ht-btn-md"><?php echo esc_html( $download_section_button_text ); ?></a>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="resources-right-box">
                                <div class="resources-right-inner text-center">
                                    <div class="resources-images">
                                        <img class="img-fluid" src="<?php echo esc_url( get_field( 'download_section_img' ) ); ?>" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!--========= Download End ===========-->

        <!--===========  Managed Wi-Fi Services with Ayukul Technologies  Start =============-->
        <?php if ( $managed_wifi_services_title = get_field( 'managed_wifi_services_title' ) ) : ?>  
        <div class="our_offer_section section-space--ptb_100  gray_background">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="heading"><?php echo $managed_wifi_services_title; ?></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text"><?php echo get_field( 'text_1' ); ?></p>
                        <p class="text mt-20"><?php echo get_field( 'text_2' ); ?> </p>
                    
                        <ul>
                            <li><?php echo get_field( 'list_1' ); ?> </li>
                            <li><?php echo get_field( 'list_2' ); ?> </li>
                        
                        </ul>
                        <p class="text mt-20"><?php echo get_field( 'text_3' ); ?></p>
                    </div>
                </div>
                
            </div>
        </div>
        <?php endif; ?>
<!--========================  Managed Wi-Fi Services with Ayukul Technologies  End ==========================-->

<!--===================================  Managed Video Solutions  Start ===================================-->

<!-------------------------------------  Managed Video Solutions "We Offer"  Start --------------------------->
<?php if ( $manage_video_we_offer_title = get_field( 'manage_video_we_offer_title' ) ) : ?>
<div class="feature-images-wrapper  service-manage service-manage-seven section-space--ptb_100 gray_background">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_40">
                    <h3 class="heading"><?php echo $manage_video_we_offer_title ?></h3>
                    <p class="text text1"><?php echo get_field('we_offer_text'); ?></p>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="feature-images__one">
                    <div class="row">
                    <?php while ( have_rows( 'we_offer_features_repeater' ) ) :
                         the_row(); ?>
                        <div class="col-lg-4 col-md-6 wow move-up">
                            <!-- ht-box-icon Start -->
                            <div class="ht-box-images style-01">
                                <div class="image-box-wrap">
                                    <div class="box-image">
                                        <img class="img-fulid" src="<?php the_sub_field('icon'); ?>" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading"><?php the_sub_field('title'); ?> </h5>
                                        <div class="text"><?php the_sub_field('text'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ht-box-icon End -->
                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!-------------------------------------  Managed Video Solutions "We Offer"  End --------------------------->

<!-------------------------------------  Managed Video Solutions "Benefits"  Start -------------------------->
<?php if ( $benefits_title = get_field( 'benefits_title' ) ) : ?> 
<div class="benefits_section section-space--ptb_80">
    <div class="container">
        <div class="row">
            <div class="section-title-wrap text-center section-space--mb_40" style="width:100%;">
                <h3 class="heading text-center"><?php echo $benefits_title; ?></h3>
            </div>
            <div class="col-lg-6">
                <ul>
                    <?php while ( have_rows( 'benefits_list' ) ) :
                         the_row(); ?>
                        <li> <?php the_sub_field('text'); ?> </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo esc_url( get_field( 'benefits_picture' ) ); ?>" class="img-responsive">
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!-------------------------------------  Managed Video Solutions "Benefits"  End --------------------------->

<!--===================================  Managed Video Solutions  End =====================================-->

<!--===================== End-to-End Web Solutions "Our Offer" Start ==================================-->
<?php if ( $end_to_end_title = get_field( 'end_to_end_title' ) ) : ?> 
<div class="feature-icon-wrapper end-to-end section-space--pt_100 section-space--pb_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrap section-title-wrap-no-bottom text-center section-space--mb_20">
                    <h3 class="heading"> <?php echo $end_to_end_title; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="feature-list__three">
                    <div class="row">
                        <?php while ( have_rows( 'end_to_end_features' ) ) :
                         the_row(); ?>
                            <div class="col-lg-4">
                                <div class="grid-item animate">
                                    <div class="ht-box-icon style-03">
                                        <div class="icon-box-wrap">
                                            <div class="content-header">
                                                <div class="icon">
                                                    <img class="img-fulid" src="<?php the_sub_field('icon'); ?>" alt="">
                                                </div>
                                                <h5 class="heading">
                                                    <?php the_sub_field('text'); ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="benefits_section ">
                    <div class="row ">
                        <div class="col-lg-12 mb-20">
                            <p class="text mt-40"><?php echo get_field('end_to_end_text_1'); ?></p>
                            <p class="text"><?php echo get_field('end_to_end_text_2'); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="list-group-wrap">
                                <div class="separator-list-wrap">
                                    <ul class="circle-list">
                                        <?php while ( have_rows( 'end_to_end_repeater_left_list' ) ) :
                                            the_row(); ?>
                                            <li class="list-item"><?php the_sub_field('text'); ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="list-group-wrap">
                                <div class="separator-list-wrap">
                                    <ul class="circle-list">
                                        <?php while ( have_rows( 'end_to_end_repeater_right_list' ) ) :
                                            the_row(); ?>
                                            <li class="list-item"><?php the_sub_field('text'); ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text mt-20"><?php echo get_field('end_to_end_text_3'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--===================== End-to-End Web Solutions "Our Offer" End ====================================-->

<!--===================== Infrastructure Modernization "Our Offer" Start ==================================-->
        <?php if ( $infrastructure_title = get_field( 'infrastructure_title' ) ) : ?> 
        <div class="our_offer_section section-space--ptb_100 gray_background">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap section-title-wrap-no-bottom text-center section-space--mb_40">
                            <h3 class="heading"><?php echo $infrastructure_title; ?></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text"><?php echo get_field( 'infrastructure_text_1' ); ?> </p>
                        <p class="text mt-20"><?php echo get_field( 'infrastructure_text_2' ); ?></p>
                        <p class="text mt-20"><strong><?php echo get_field( 'infrastructure_feature_list_title' ); ?></strong></p>
                        <div class="row section">
                        <?php while ( have_rows( 'infrastructure_features_repeater' ) ) :
                         the_row(); ?>
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="<?php the_sub_field('feature_icon') ?>">
                                </div>
                                <div class="content">
                                    <p class="text"><?php the_sub_field('feature_text') ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                        
                        <p class="text pt-30 infastr-pt-30"><?php echo get_field( 'infrastructure_text_3' ); ?> </p>
                        <ul>
                        <?php while ( have_rows( 'infrastructure_feature_item_repeater' ) ) :
                         the_row(); ?>
                            <li><?php the_sub_field('list_text') ?></li>
                        <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- ----------- -->
        <?php if ( $infrastructure_label = get_field( 'infrastructure_label' ) ) : ?> 
        <div class="section-space--ptb_100">
            <div class="container">
                <div class="row">
             
                   
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap  text-center">
                             <h3 class="heading section-title-wrap-line-height"><?php echo $infrastructure_label['strong_text']; ?>  
                             <span class="text-color-primary"> <?php echo $infrastructure_label['green_text']; ?></span></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                
                </div>
            </div>
        </div>
            <?php endif; ?>
    <?php endif; ?>

      <!--========== Infrastructure Modernization "Our Offer" End ============-->

      

        <!--========== Cloud Services "Managed Cloud Services Provided by Us?" Start ==============-->

        <?php if ( $managed_title = get_field( 'managed_title' ) ) : ?>
            <div class="cloud_service_01 feature-images-wrapper service-manage section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center pb-30">
                                <h3 class="heading "><?php echo $managed_title; ?></h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="text-color-primary"><img src="<?php echo esc_url( get_field( 'managed_icon_left' ) ); ?>" class="img-responsive image1"><?php echo get_field( 'managed_subtitle_left' ); ?></h5>
                            <img src="<?php echo esc_url( get_field( 'pic_left' ) ); ?>" class="img-responsive">
                        </div>
                        <div class="col-lg-6">
                            <h5 class="text-color-primary"><img src="<?php echo esc_url( get_field( 'managed_icon_right' ) ); ?>" class="img-responsive image1"><?php echo get_field( 'managed_subtitle_right'); ?></h5>
                            <img src="<?php echo esc_url( get_field( 'pic_right' ) ); ?>" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!--========== Cloud Services "Managed Cloud Services Provided by Us?" End ==============-->

    <!--========== Call to Action Area "Contact Blog" Start ============-->
       <?php get_template_part( 'template-parts/contact-blog' ); ?>
    <!--========== Call to Action Area "Contact Blog" End ============-->
    </div>


 


<?php get_footer(); ?>


