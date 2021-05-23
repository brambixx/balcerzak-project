<?php
    /*
    * Template Name: Article
    * Template Post Type: post
    * @package Tomasz Balcerzak
    */
    get_header();
?>
<body>
<?php get_template_part('template-parts/navbar'); ?>
    <h1>
        <?php the_content();?>
    </h1>
</body>
</html>