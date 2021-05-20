<?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    
?>
<nav class="navbar">
    <div class="container">
        <div class="navbar__logo">
           <img src="<?php echo $image[0]?>" alt="Trust My Project" class="logo__image">
        </div>
        <div class="navbar__buttons">
            <h3>Navigation</h3>
        </div>
    </div>
</nav>