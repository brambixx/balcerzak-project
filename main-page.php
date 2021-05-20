<?php
    /*
    * Template Name: Homepage
    * @package Tomasz Balcerzak
    */
    get_header();
?>
<body>
    <?php get_template_part('template-parts/navbar');?>
    <header class="header">
        <div class="header__bg">
            <div class="bg__tb">
            <svg xmlns="http://www.w3.org/2000/svg" width="480.411" height="601.714" viewBox="0 0 480.411 601.714">
                <path id="Path_56" data-name="Path 56" d="M-3.473,26.169H162.549V510.454H309.12V26.169H476.938V-91.26H-3.473Z" transform="translate(3.473 91.26)" fill="#fff" opacity="0.091"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="480" height="601.714" viewBox="0 0 480 601.714">
                <path id="Path_57" data-name="Path 57" d="M339.774,327.026c0,42.857-28.286,65.143-77.143,65.143h-108V259.311H260.917C309.774,259.311,339.774,284.169,339.774,327.026ZM325.2,89.6c0,41.143-26.571,62.571-74.571,62.571h-96v-126h96C298.631,26.169,325.2,48.454,325.2,89.6ZM488.06,346.74c0-68.571-45.429-130.286-115.714-144.857,58.286-17.143,102-64.286,102-137.143,0-95.143-72.857-156-195.429-156H8.06V510.454H288.346C415.2,510.454,488.06,446.168,488.06,346.74Z" transform="translate(-8.06 91.26)" fill="#fff" opacity="0.02"/>
            </svg>
  
            </div>
        </div>
        <div class="container">
            <div class="header__welcome">
                <div class="header__title">
                    <h1 class="title__name">
                        <?php echo get_field('header-title');?>
                    </h1>
                    <h2 class="title__desc">
                        <?php echo get_field('header-subtitle');?>
                    </h2>
                </div>
            </div>
        </div>
    </header>
</body>
<?php get_footer();?>
</html>