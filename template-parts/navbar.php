<?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    
?>
<nav class="navbar">
    <div class="container">
        <div class="navbar__logo">
           <a href="<?php echo get_site_url()?>"> 
                <img src="<?php echo $image[0]?>" alt="Trust My Project" class="logo__image">
                <img src="<?php echo get_template_directory_uri().'/assets/img/logo_footer.png'?>" class="footer_disabled" alt="">
</a>
        </div>
        <div class="navbar__buttons">
        <?php
                wp_nav_menu(
                    array(
                        'menu' => 'Główne menu',
                        'container' => '',
                        'items_wrap' => '<ul id="" class="nav__links">%3$s</ul>',
                        'add_li_class' => 'nav__buttons'
                    )
                )
              ?>
            
        </div>
        <div class="nav__call">
            <a class="phone" href="#">Zadzwoń do mnie</a>
        </div>
        <div class="navbar__mobile">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>