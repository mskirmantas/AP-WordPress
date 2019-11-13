    <!--  ================= About  ================= -->
    <?php 
        $image = get_field('a_background');
        // dump($image);
    ?>
			
	<section class="about" style="background-image: url(<?php echo $image['sizes']['full-hd']; ?>);" id="about">

		<div class="container">
				
			<div class="section-header">
				<h2 class="pseudo"><?php the_field('a_section_heading'); ?></h2>			
			</div>

			<div class="flex-container">

				<div class="social-column">
					
					<div><?php the_field('a_section_description'); ?></div>

				</div>

				<div class="social-column">

                <?php
                    if(have_rows('a_social_medias_repeater')):
                        while(have_rows('a_social_medias_repeater')):
                            the_row();
                            ?>

                            <?php
                                $link = get_sub_field('link');
                                // dump($link);
                            ?>
                         
                                <a href="<?php echo $link['url'] ?>" rel="nofollow" <?php echo $link['target'] ? 'target="_blank"' : '';?>>
                                    <i class="<?php the_sub_field('icon'); ?> fa-2x"></i>
                                </a>

                             <?php
                        endwhile;
                    endif;
                ?>

				</div>	
			</div>
		</div>
	</section>