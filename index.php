<?php 
 /* 
    Template Post Type: post
    @package Tomasz Balcerzak

*/
    get_header();
    ?>
<body class="articles-page">
    <?php get_template_part('template-parts/navbar');?>
    <section class="articles">
        <div class="container"> 
            <div class="articles__start">
                <h1>
                    Moje artykuły
                </h1>
                <h2>
                    Pisze o <strong>project managament</strong> 
                    na moim bloku u styku zarządzania i nauki.
                </h2>
            </div>
            <div class="articles__list">
                <div class="list__title">
                    <h2>Blog</h2>
                </div>
                <div class="list__posts">
                    <?php 

                    $ourCurrentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $posts_per_page = 6;
                    $posts = new WP_Query(
                        array(
                        'post_type' => 'post',
                        'posts_per_page' => $posts_per_page,
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'paged' => $ourCurrentPage
                    ));
                    
                    ?>
                    <?php if ($posts -> have_posts()):?>
                    <ul>
                    <?php while($posts -> have_posts()) : $posts->the_post();?>
                        <li>
                            <div class="blog__article">
                                <div class="article__info">
                                    <h2>
                                        <?php the_title();?>
                                    </h2>
                                    <a href="<?php the_permalink();?>">
                                            Zobacz więcej
                                    </a>
                                    <div class="article__date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.074" height="20.074" viewBox="0 0 20.074 20.074">
                                    <g id="Group_52" data-name="Group 52" transform="translate(-635 -2023)">
                                        <g id="Group_51" data-name="Group 51" transform="translate(635 2023)">
                                        <path id="Path_50" data-name="Path 50" d="M267.5,144.062v-4.106a.456.456,0,0,1,.456-.456h18.249a.456.456,0,0,1,.456.456v4.106Z" transform="translate(-267.044 -136.306)" fill="#fff" opacity="0.4"/>
                                        <path id="Path_53" data-name="Path 53" d="M.456,0H3.194A.456.456,0,0,1,3.65.456V3.194a.456.456,0,0,1-.456.456H.456A.456.456,0,0,1,0,3.194V.456A.456.456,0,0,1,.456,0Z" transform="translate(4.106 12.318)" fill="#fff" opacity="0.4"/>
                                        <g id="Group_50" data-name="Group 50" transform="translate(0 0)">
                                            <path id="Path_51" data-name="Path 51" d="M271.912,153.562h2.737a.913.913,0,0,0,.912-.912v-2.737a.913.913,0,0,0-.912-.912h-2.737a.913.913,0,0,0-.912.912v2.737A.913.913,0,0,0,271.912,153.562Zm0-3.65h2.737v2.737h-2.737Z" transform="translate(-267.35 -137.138)" fill="#fff"/>
                                            <path id="Path_52" data-name="Path 52" d="M286.161,138.737H281.6v-2.281a.456.456,0,1,0-.912,0v2.281h-7.3v-2.281a.456.456,0,1,0-.912,0v2.281h-4.562a.913.913,0,0,0-.912.912v15.512a.913.913,0,0,0,.912.912h18.249a.913.913,0,0,0,.912-.912V139.65A.913.913,0,0,0,286.161,138.737Zm0,16.424H267.912V144.212h18.249Zm0-11.862H267.912v-3.65h18.249Z" transform="translate(-267 -136)" fill="#fff"/>
                                        </g>
                                        </g>
                                    </g>
                                    </svg>

                                        <p>
                                            <?php echo get_the_date('d.m.Y');?>
                                        </p>
                                    </div>
                                </div>    
                                <?php the_post_thumbnail();?>
                            </div>
                        </li>
                        <?php endwhile;?>
                    </ul>
                    <?php 
                    
                    $published_posts = wp_count_posts()->publish;
                    $pages = ceil($published_posts / $posts_per_page);
                    echo $paged;
                    ?>
                    <?php endif;?>
                </div>
            </div>
            <div class="articles__pagination">
            <?php next_posts_link('Next page', $posts->max_num_pages);?>
            <?php previous_posts_link('Poprzednia', $posts->max_num_pages);?>
            <?php?>
            </div>
            	
            
        </div>        
    </section>
    <?php get_footer();?>
</body>