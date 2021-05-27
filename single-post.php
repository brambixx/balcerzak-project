<?php
    /*
    * Template Name: Article
    * Template Post Type: post
    * @package Tomasz Balcerzak
    */
    get_header();
?>
<body class="single-post">
<?php get_template_part('template-parts/navbar'); ?>
    <header class="header-article">
    <div class="container">
        <div class="article">
            <div class="article__start">
                <h1>
                    <?php the_title();?>
                </h1>
                <h2>
                    <?php echo get_field('subtitle');?>
                </h2>
            </div>
            <div class="article__text">
                <div class="article__post">
                    <div class="post__title">
                        <h2>Blog</h2>
                    </div>
                </div>
                <div class="article__post">
                    <div class="post__start">
                        <?php echo get_field('start-text');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
    <article class="article__content">
       
        <div class="container">
            <div class="content__text">
                <?php the_post_thumbnail();?>
                <?php the_content();?>
            </div>
            <div class="pagination">
                <?php previous_post_link( '%link', 'Poprzedni artykuł', TRUE, '13' ); ?>
                <?php next_post_link( '%link', 'Następny artykuł', TRUE ); ?>    
    </div>
        </div>
    </article>
    
<?php get_footer();?>
</body>
</html>