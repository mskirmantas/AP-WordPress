<!-- =================  Contact  ================= -->

<?php 
    $image = get_field('c_background');
    // dump($image);
?>

<section class="contact" style="background-image: url(<?php echo $image['sizes']['full-hd']; ?>);" id="contact">
			
    <div class="container">

        <div class="section-header">					
            <h2 class="pseudo"><?php the_field('c_section_heading'); ?></h2>					
        </div>	

        <div class="contact-form">

            <?php echo do_shortcode(get_field('c_form_shortcode')); ?>

        </div>

    </div>
</section>
        
       