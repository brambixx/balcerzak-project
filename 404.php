<?php 
    get_header();
    get_template_part('template-parts/navbar');
?>
<div class="error">
    <h1>Przykro mi</h1>
    <h2>Strona, której szukasz nie istnieje.</h2>
    <a href="<?php echo home_url();?>">Powrót do strony głównej</a>
</div>