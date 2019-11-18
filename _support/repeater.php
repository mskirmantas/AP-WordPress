<?php

    if(have_rows('repeater_laukas')):
        while(have_rows('repeater_laukas')):
            the_row();
            ?>

        <!-- HTML BLOKAS KURIS KARTOJASI -->

        <?php
        
        endwhile;
    endif;

?>