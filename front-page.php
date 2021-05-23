<?php
/*
    * Template Name: Homepage
    * @package Tomasz Balcerzak
    */
get_header();
?>

<body>
    <?php get_template_part('template-parts/navbar'); ?>
    <header class="header">
        <div class="header__bg">
            <div class="bg__tb">
                <svg xmlns="http://www.w3.org/2000/svg" width="480.411" height="601.714" viewBox="0 0 480.411 601.714">
                    <path id="Path_56" data-name="Path 56" d="M-3.473,26.169H162.549V510.454H309.12V26.169H476.938V-91.26H-3.473Z" transform="translate(3.473 91.26)" fill="#fff" opacity="0.091" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="480" height="601.714" viewBox="0 0 480 601.714">
                    <path id="Path_57" data-name="Path 57" d="M339.774,327.026c0,42.857-28.286,65.143-77.143,65.143h-108V259.311H260.917C309.774,259.311,339.774,284.169,339.774,327.026ZM325.2,89.6c0,41.143-26.571,62.571-74.571,62.571h-96v-126h96C298.631,26.169,325.2,48.454,325.2,89.6ZM488.06,346.74c0-68.571-45.429-130.286-115.714-144.857,58.286-17.143,102-64.286,102-137.143,0-95.143-72.857-156-195.429-156H8.06V510.454H288.346C415.2,510.454,488.06,446.168,488.06,346.74Z" transform="translate(-8.06 91.26)" fill="#fff" opacity="0.02" />
                </svg>
            </div>
            <div class="header__bg">
                <div class="bg__text">
                    <h1 class="text__homepage">TRUST MY</h1>
                    <h1 class="text__homepage">PROJECT</h1>
                </div>
                <div class="bg__text-mobile">
                    <h1 class="text__homepage">
                        TRUST MY PROJECT
                    </h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header__welcome">
                <div class="header__title">
                    <h1 class="title__name">
                        <?php echo get_field('header-title'); ?>
                    </h1>
                    <h2 class="title__desc">
                        <?php echo get_field('header-subtitle'); ?>
                    </h2>
                </div>
                <div class="header__btn">
                    <button>Zobacz ofertę</button>
                </div>
            </div>
            <div class="header__scrollDown">
                <a href="#" id="scrollDown">
                <svg xmlns="http://www.w3.org/2000/svg" width="49.127" height="77.722" viewBox="0 0 49.127 77.722">
                    <g id="Group_149" data-name="Group 149" transform="translate(1667.905 4173.809) rotate(180)">
                    <g id="Path_55" data-name="Path 55" transform="translate(1618.778 4124.683)" fill="none">
                    <path d="M24.563,0A24.563,24.563,0,1,1,0,24.563,24.563,24.563,0,0,1,24.563,0Z" stroke="none"/>
                    <path d="M 24.56333541870117 1.999996185302734 C 21.51642608642578 1.999996185302734 18.56171607971191 2.596286773681641 15.78127670288086 3.772315979003906 C 13.09468460083008 4.908645629882813 10.68146514892578 6.535823822021484 8.608646392822266 8.608646392822266 C 6.535823822021484 10.68146514892578 4.908645629882813 13.09468460083008 3.772315979003906 15.78127670288086 C 2.596286773681641 18.56171607971191 1.999996185302734 21.51642608642578 1.999996185302734 24.56333541870117 C 1.999996185302734 27.61024475097656 2.596286773681641 30.56495475769043 3.772315979003906 33.34539413452148 C 4.908645629882813 36.03197479248047 6.535816192626953 38.44519424438477 8.608646392822266 40.51802444458008 C 10.68146514892578 42.59084701538086 13.09468460083008 44.21801376342773 15.78127670288086 45.35434722900391 C 18.56171607971191 46.53037643432617 21.51642608642578 47.12666702270508 24.56333541870117 47.12666702270508 C 27.61024475097656 47.12666702270508 30.56495475769043 46.53037643432617 33.34539413452148 45.35434722900391 C 36.03197479248047 44.21801376342773 38.44519424438477 42.59084701538086 40.51802444458008 40.51802444458008 C 42.59084701538086 38.44519424438477 44.21801376342773 36.03197479248047 45.35434722900391 33.34539413452148 C 46.53037643432617 30.56495475769043 47.12666702270508 27.61024475097656 47.12666702270508 24.56333541870117 C 47.12666702270508 21.51642608642578 46.53037643432617 18.56171607971191 45.35434722900391 15.78127670288086 C 44.21801376342773 13.09468460083008 42.59084701538086 10.68146514892578 40.51802444458008 8.608646392822266 C 38.44519424438477 6.535816192626953 36.03197479248047 4.908645629882813 33.34539413452148 3.772315979003906 C 30.56495475769043 2.596286773681641 27.61024475097656 1.999996185302734 24.56333541870117 1.999996185302734 M 24.56333541870117 -3.814697265625e-06 C 38.12929534912109 -3.814697265625e-06 49.12666702270508 10.99737548828125 49.12666702270508 24.56333541870117 C 49.12666702270508 38.12929534912109 38.12929534912109 49.12666702270508 24.56333541870117 49.12666702270508 C 10.99737548828125 49.12666702270508 -3.814697265625e-06 38.12929534912109 -3.814697265625e-06 24.56333541870117 C -3.814697265625e-06 10.99737548828125 10.99737548828125 -3.814697265625e-06 24.56333541870117 -3.814697265625e-06 Z" stroke="none" fill="#fff"/>
                    </g>
                    <g id="Group_24" data-name="Group 24" transform="translate(1631.213 4096.087)">
                    <path id="Path_20" data-name="Path 20" d="M812.972,267.419l9.162-9.162v50.527a.954.954,0,0,0,1.908,0V258.256l9.162,9.162a.954.954,0,0,0,1.349-1.349l-10.789-10.791a.957.957,0,0,0-1.351,0L811.623,266.07a.954.954,0,0,0,1.349,1.349Z" transform="translate(-811.343 -255)" fill="#47bfa4"/>
                    </g>
                </g>
                </svg>
                <div class="text">
                    <span>Przewiń w dół</span>
                    <span>Przewiń w dół</span>
                </div>
                </a>
            </div>
        </div>
    </header>
    <section id="about-me" class="aboutme">
        <div class="container">
            <div class="content">
                <div class="aboutme__description">
                    <div class="aboutme__main">
                        <div class="main__title">
                            <h2>O mnie</h2>
                        </div>
                        <div class="main__desc">
                            <?php echo get_field('about-me'); ?>
                        </div>
                    </div>
                    <div class="aboutme__extra">
                        <div class="extra__title">
                            <h3>Co oferuję?</h3>
                        </div>
                        <div class="extra__desc">
                            <?php echo get_field('about-offer'); ?>
                        </div>
                    </div>
                    <div class="aboutme__extra">
                        <div class="extra__title">
                            <h3>Co zyskujesz?</h3>
                        </div>
                        <div class="extra__desc">
                            <?php echo get_field('about-profit'); ?>
                        </div>
                    </div>
                </div>
               <div class="aboutme__img">
                   <?php 
                   if(have_rows('about-ceo')):
                    while(have_rows('about-ceo')):the_row();
                ?>
                    <img src="<?php echo get_sub_field('ceo-photo');?>" alt="Tomasz Balcerzak"/>
                    <?php echo get_sub_field('ceo-signature')?>
                    <?php endwhile;
                endif;?>
               </div>
            </div>
        </div>
    </section>
    <section class="blog" id="blog">
        <div class="container">
            <div class="blog__title">
                <h2>Blog</h2>
            </div>
            <div class="blog__list">
                <?php
                    $posts = new WP_Query(
                        array('post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 4)
                    );
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
                    <?php endif;?>
                    <?php wp_reset_postdata();?>
            </div>
        </div>
        <div class="container">
            <div class="blog__btn">
                <a href="">Zobacz więcej</a>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="container">
            <div class="contact__info">
                <div class="contact__title">
                    <h2>
                        Kontakt
                    </h2>
                </div>
                <div class="contact__desc">
                    <?php $phone_number = get_field('phone_number');
                        $phone_number = chunk_split($phone_number, 3, ' ');
                    ?>
                    <h2><?php echo $phone_number;?></h2>
                    <h2><?php echo get_field('mail');?></h2>
                    <a href="<?php echo get_field('linkedin_href')?>">
                        <h2>
                            in
                        </h2>
                    </a>
                </div>
            </div>
            <div class="contact__info map__info">
                <div class="contact__title">
                    <h3>Jak dojechać</h3>
                </div>
                <div class="contact__map">
                    <!-- <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/map.png'?>" alt=""> -->
                </div>
            </div>
            <div class="contact__info">
                <div class="contact__title">
                    <h3>Adres</h3>
                </div>
                <div class="contact__desc">
                    <h2 class="contact__address">
                        <?php echo get_field('company_address')?>
                    </h2>
                </div>
            </div>
        </div>
    </section>
</body>
<?php get_footer(); ?>

</html>