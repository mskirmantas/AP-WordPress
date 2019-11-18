<!--  ================= Services =================  -->

<section class="services" id="services">
    <div class="container">

        <div class="section-header">	            
            <h2 class="pseudo"><?php the_field('s_section_heading'); ?></h2>	            
        </div>

        <div class="flex-container">
        
            <?php
                if(have_rows('s_services_repeater')):
                    while(have_rows('s_services_repeater')):
                        the_row();
                        ?>

                            <div class="column">
                                <i class="<?php the_sub_field('icon'); ?> fa-6x animated"></i>
                                <h3><?php the_sub_field('heading'); ?></h3>	
                                <p><?php the_sub_field('description'); ?></p>			
                            </div>

                        <?php
                    endwhile;
                endif;

            ?>
        
        </div>

    </div>	    
</section>

