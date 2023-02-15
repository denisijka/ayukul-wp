<!--====================  footer area ====================-->
    <div class="footer-area-wrapper reveal-footer bg-gray">
        <div class="footer-area section-space--ptb_80">
            <div class="container">
                <div class="row footer-widget-wrapper">
                    <div class="col-lg-4 offset-4 col-md-6 col-sm-6 footer-widget">
                        <div class="footer-widget__logo text-center mb-10">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/ayukul-footer-logo.png" class="img-fluid" alt=""> -->
                             <?php if ( has_custom_logo() ): ?>
                                <?php the_custom_logo(); ?>
                                <?php else: ?>
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/ayukul-footer-logo.png" class="img-fluid" alt="">
                                <?php endif; ?>
                        </div>
                        <ul class="footer-widget__list text-center">
                            <li>P22, 24th Floor, Tower B, Etherea, Bhutani Alphathum,<br> Sector 93B, NOIDA - 201305</li>
                        </ul>
                    </div>
               
                </div>
            </div>
        </div>
        <div class="footer-copyright-area section-space--pb_30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-left">
                        <span class="copyright-text">&copy; 2023 <a href="#"> Ayukul Technologies Pvt. Ltd. </a> All Rights Reserved.  </span>
						
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <ul class="list ht-social-networks solid-rounded-icon">
                    

                            <?php if (have_rows('footer_repeater_links','options')):?>
                               <?php while (have_rows('footer_repeater_links','options')): the_row();?>
                            <li class="item">   
                                <a href="<?php echo the_sub_field('link') ?>" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                    <i class="<?php echo the_sub_field('icon') ?>"></i>
                                </a>   
                            </li>
                            <?php endwhile; ?>
                          <?php endif; ?>
                          <!--   <li class="item">  
                                <a href="<?php echo get_field('footer_link') ?>" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                    <i class="<?php echo get_field('footer_icon') ?>"></i>
                                </a> 
                            </li>  --> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of footer area  ====================-->
	
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- Start Toolbar -->
    <div class="demo-option-container">
        
        <!-- End Toolbar -->
        <!-- Start Quick Link -->
        <div class="demo-option-wrapper">
            <div class="demo-panel-header">
                <div class="title">
                    <h6 class="heading mt-30">IT Solutions Mitech - Technology, IT Solutions & Services Html5 Template</h6>
                </div>

                <div class="panel-btn mt-20">
                    <a class="ht-btn ht-btn-md" href="https://themeforest.net/item/mitech-it-solutions-html-template/24906742?ref=AslamHasib"><i class="far fa-shopping-cart mr-2"></i> Buy Now </a>
                </div>
            </div>
            <div class="demo-quick-option-list">
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-appointment.html" aria-label="Appointment">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-images/home-01.jpeg" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-infotechno.html" aria-label="Infotechno">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-images/home-02.jpeg" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-processing.html" aria-label="Processing">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-images/home-03.jpeg" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-services.html" aria-label="Services">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-images/home-04.jpeg" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-resolutions.html" aria-label="Resolutions">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-images/home-05.jpeg" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-cybersecurity.html" aria-label="Cybersecurity">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-images/home-06.jpeg" alt="Images">
                </a>
            </div>
        </div>
        <!-- End Quick Link -->
    </div>
    <!-- End Toolbar -->

    <!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
            <div class="mobile-menu-overlay__inner">
                <div class="mobile-menu-overlay__header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-8">
                                <!-- logo -->
                                <div class="logo">
                                <?php if ( has_custom_logo() ): ?>
                                <?php the_custom_logo(); ?>
                                <?php else: ?>
                                    <a href="<?php echo home_url('/'); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-dark.png" class="img-fluid" alt="">
                                    </a>
                                <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-4">
                                <!-- mobile menu content -->
                                <div class="mobile-menu-content text-right">
                                    <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-overlay__body">
                    <nav class="offcanvas-navigation">
                       <!--  <ul>
                            <li class="has-children">
                                                <a href="index.html"><span>Home</span></a>
                                            </li>
                                            <li class="has-children">
                                                <a href="index.html#our-company"><span>About Us</span></a>
                                            </li>
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="index.html#services"><span>Our Solutions</span></a>
                                            </li>
                                            <li class="has-children">
                                                <a href="index.html#work-flow"><span>Workflow</span></a>
                                            </li>
											 <li class="has-children has-children--multilevel-submenu active1">
                                                <a href="blog.html"><span> Blog</span></a>
                                            </li>
											<li class="has-children has-children--multilevel-submenu jighihover">
                                                <a href="https://jighi.com/" target="_blank"><span> Jighi</span></a>
                                            </li>
                           
                            <li class="has-children">
                                <a href="#">Our Divisions</a>
                                <ul class="sub-menu">
                                    <li><a href="https://slidemonkey.ayukul.com/" target="_blank"><span>SlideMonkey</span></a></li>
                                    <li><a href="https://sehyog.ayukul.club/" target="_blank"><span>Sehyog</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                                <a href="index.html#contact-us"><span>Contact Us</span></a>
                                            </li>  
                        </ul> -->
                        <?php wp_nav_menu(
                                            array(
                                                'theme_location' => 'header-menu',
                                                'container' => false,
                                                // 'walker' => new Ayukul_Menu(),
                           )
                        ) ?>
                    </nav>
                </div>
            </div>
        </div>
    <!--====================  End of mobile menu overlay  ====================-->

    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ml-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-right">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
	
	<?php wp_footer(); ?>
</body>
</html>