<?php //echo get_template_directory_uri(); //took the path of the theme 
    //bloginfo('template_directory');
      wp_head(); 

?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="responsive.css">
    <title> <?php   bloginfo('name');  ?>
    <?php  wp_title() ?> |
    <?php if(is_front_page()) {bloginfo('description');} ?> </title>
</head>
<body <?php body_class();   ?>>
 
 <!-- Top-Banner -->
 <section class="top-banner">
    <div class="container">
     <div class="small-bold-text  banner-text"><i class="fa-sharp fa-solid fa-heart"></i> New to Antiques: Open and closed card sorting </div>
    </div>
   </section>

<!-- navbar menus -->

   <nav>
    <div class="container  main-nav  flex">
        <?php  $logoimg = get_header_image(); ?>
        <a href="#" class="company-logo">
            <img src="<?php bloginfo('template_directory'); 
            //echo $logoimg;  ?>./assets/asset 0.svg" alt="company logo">
        </a>



<div class="nav-links show" id="nav-links">
            <ul class="flex">
                <!-- <li><a href="#" class="hover-links">All Products</a></li>
                <li><a href="#" class="hover-links">About us</a></li>
                <li><a href="#" class="hover-links">Home Decore</a></li>
                <li><a href="#" class="hover-links">Garden Decore</a></li>
                <li><a href="#" class="hover-links">Customers</a></li> -->
                
            </ul>
            
            <?php
            
            wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'nav'))
            
            ?>
        </div> 
       <a href="#" class="hover-links secondary-btn">Sign in</a>
       <a href="#" class="hover-links primary-btn">Sing up</a>


       <a href="#" class="nav-toggle hover-links" id="nav-toggle">
            <i class="fa-solid fa-bars"></i>
        </a> 


        
        
    </div>
   </nav>
