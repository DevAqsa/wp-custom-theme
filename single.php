<?php get_header(); 
the_post();
?>


    <h1><?php the_title();  ?></h1>
    <?php  $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'medium') ?>
    <img src="<?php echo $imagepath[0] ?>" width="50%" height="80%"/>
    <div><?php echo get_the_date();  ?></div>
    <h4><?php the_author();  ?></h4>
    <?php the_content();  ?>
    <?php comments_template();  ?>


<?php get_footer(); ?>