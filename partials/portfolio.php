	<!--  ================= Portfolio  ================= -->

    <section class="portfolio" id="portfolio">
							
                            <div class="container">
                
                                <div class="section-header">
                                    <h2 class="pseudo">Portfolio</h2>
                
                
                                    <div class="gallery-filters">
                                        <ul>

                                        <?php
                                            if(have_rows('p_filter_repeater')):
                                                while(have_rows('p_filter_repeater')):
                                                    the_row();
                                                    ?>
                                     
                                                    <li>
                                                        <button class="gallery-btn" data-filter="<?php the_sub_field('filter_category'); ?>">
                                                        <?php the_sub_field('filter_name'); ?>
                                                        </button>
                                                    </li>	
                                            
                                                    <?php
                                                endwhile;
                                            endif;

                                        ?>

                                    </div>
                
                                </div>
                
                                <div class="gallery-images flex-container">


                                <?php
                                    if(have_rows('p_gallery_repeater')):
                                        while(have_rows('p_gallery_repeater')):
                                            the_row();
                                            ?>
                                             <?php 
                                                $image = get_sub_field('image');
                                                // dump($image);
                                            ?>
                
                                                    <div class="img-block" data-filter="<?php the_sub_field('filter_category'); ?>">
                                                        <a data-fancybox="gallery" href="<?php echo $image['sizes']['full-hd']; ?>">
                                                            <img src="<?php echo $image['sizes']['gal-thumbnail']; ?>" alt="<?php the_sub_field('image_description'); ?>">
                                                        </a>
                                                    </div>

                                                <?php
                                            endwhile;
                                        endif;

                                    ?>
                
                                </div>
                
                            </div>
                        </section>	