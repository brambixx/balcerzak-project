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
    <header class="header-article" id="header">
    <div class="container">
        <div class="article">
        <div class="bg">
            <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/my-articles_bg.png'?>" alt="">
        </div>
            <div class="article__start">
                <h1>
                    <?php the_title();?>
                </h1>
                <div class="article__subtitle">
                    <?php echo get_field('subtitle');?>
                </div>
                
            </div>
            <div class="article__text">
                <div class="article__post">
                    <div class="post__title">
                        <h2>Blog</h2>
                        <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/blog.png'?>" alt="">
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
                <div class="list__bg">
                    <h1 class="bg__text">Blog</h1>
                </div>
                <div class="content__featured">
                    <?php the_post_thumbnail();?>
                </div>
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