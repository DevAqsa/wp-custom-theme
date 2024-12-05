<?php
//Template Name:home
get_header();
?>
 
 <section class="features-section">
    <div class="container">
        <div class="features-header">
            <h2>Best User Research Products Are Available. </h2>
            <a href="#" class="secondary-btn">See All News <i class="fa-solid fa-right-long"></i></a>
        </div>


        <div class="features-area flex">
<?php
 $wpnew=array(
    'post_type' => 'news',
    'post_status' => 'publish'
 );
 $newsquery=new Wp_Query($wpnew);
 while($newsquery->have_posts()){
    $newsquery->the_post();

    $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'medium')
?>
            <div class="features-card flex">
                <img src="<?php echo $imagepath[0]; ?>">
                <h3> <?php the_title(); ?> </h3>
                <p> <?php echo get_the_date(); ?> </p>
                <a href="#" class="secondary-btn">Learn More <i class="fa-solid fa-right-long"></i></a>
               

            </div> 
        </div> 
        
        
<?php } ?>    


    

