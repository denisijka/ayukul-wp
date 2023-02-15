<div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="cta-content md-text-center">
                               <?php
                                $title_contact = get_field('title_contact','options');
                                if( $title_contact ): ?>
                                
                                <h3 class="heading text-white"><?php echo $title_contact['title_strong_contact']; ?> <span class="text-color-primary"><?php echo $title_contact['title_green_contact']; ?></span></h3>

                                <?php endif; ?>
                            
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="cta-button-group--one text-center">
                              <?php
                                $links_contact = get_field('links_contact','options');
                                if( $links_contact ): ?>
                           <!-- <p class="btn btn--white btn2 btn-two" id="status">
                                    <a href="#" class="btn-icon mr-2">
                                        <i class="far fa-comment-alt-dots"></i>
                                    </a> <?php echo $links_contact['links_text_talk_contact']; ?>
                                </p> -->
                                <a href="#" class="btn btn--white btn2 btn-two btn-icon" class=" mr-2"> 
                                    <i class="far fa-envelope"></i> <?php echo $links_contact['links_text_talk_contact']; ?>
                                </a>
                                 <a href="<?php echo $links_contact['links_message_contact']; ?>" class="btn btn--white btn2 btn-two btn-icon" class=" mr-2"> 
                                    <i class="far fa-envelope"></i> <?php echo $links_contact['links_text_message_contact']; ?>
                                </a>
                                <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
</div>