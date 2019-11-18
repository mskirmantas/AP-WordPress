	<!--  ================= Navbar =================  -->
<header>
    <div class="container">	

        <nav>

            <div class="logo">
                <?php
                    $image = get_field('logo', 'option');
                ?>
                <img src="<?php echo $image ['sizes']['logo']; ?>" id="logo" alt="<?php bloginfo('name'); ?>">
            </div>

            <div class="top-nav navigation"> 	

                <?php 
                    $menu_settings = [
                        'menu_class' => 'nav-links',
                        'container' => false,
                        'theme_location' => 'primary-navigation'
                    ];
                    wp_nav_menu($menu_settings);
                ?>

            </div>		

            <div class="burger">
                <div class="lines line1"></div>
                <div class="lines line2"></div>
                <div class="lines line3"></div>
            </div>	

        </nav>

    </div>
</header>