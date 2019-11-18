<!-- ================= Testimonials ================= -->

<section class="testimonials">

    <div class="container">

        <div class="section-header">
            <h2 class="pseudo"><?php the_field('t_section_heading'); ?></h2>	
        </div>

        <div class="slider">

            <div class="owl-carousel owl-theme">


                <?php
                    if(have_rows('t_testimonial_repeater')):
                        while(have_rows('t_testimonial_repeater')):
                            the_row();
                            ?>

                            <div class="recommendation">
                                <p><?php the_sub_field('recommendation'); ?></p>
                                <h4>- <?php the_sub_field('name'); ?></h4>
                            </div>

                            <?php
                        endwhile;
                    endif;
                ?>

            </div>
        </div>
    </div>  
</section>
