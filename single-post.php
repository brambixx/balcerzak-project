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
    <div class="container">
        <h1><?php the_title();?></h1>
        <div class="article__text">
            <?php the_content();?>
        </div>
    </div>
    <div class="container">
        <?php the_post_thumbnail()?>
    <?php previous_post_link( '%link', 'Poprzedni artykuł', TRUE, '13' ); ?>
    <?php next_post_link( '%link', 'Następny artykuł', TRUE ); ?>
    </div>
<?php get_footer();?>
</body>
</html>