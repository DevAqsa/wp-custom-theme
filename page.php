<?php get_header(); 
//the_post(); //this function treat the data as a post use this function if you'r working with old wordpress & website



?>

<?php get_sidebar(); ?>

<!-- companies section -->

<section class="companies-section">

    <div class="container">
        <div class="small-bold-text companies-header"><?php the_title(); ?></div>
        <?php the_post_thumbnail(array(1000,1000)); ?>
        <?php the_content(); ?>

        <div class="logos flex">
            <img src="<?php bloginfo('template_directory'); ?>./assets/client-logo-1.png" alt="" class="logo">
            <img src="<?php bloginfo('template_directory'); ?>./assets/client-logo-2.png" alt="" class="logo">
            <img src="<?php bloginfo('template_directory'); ?>./assets/client-logo-3.png" alt="" class="logo">
            <img src="<?php bloginfo('template_directory'); ?>./assets/client-logo-4 (1).png" alt="" class="logo">
            <img src="<?php bloginfo('template_directory'); ?>./assets/client-logo-1.png" alt="" class="logo">
        </div>
    </div>

</section>



<!-- features section  -->

<section class="features-section">
    <div class="container">
        <div class="features-header">
            <h2>Best User Research Products Are Available. </h2>
            <a href="#" class="secondary-btn">See All Products <i class="fa-solid fa-right-long"></i></a>
        </div>


        <div class="features-area flex">

            <div class="features-card flex">
                <img src="<?php bloginfo('template_directory'); ?>./assets/globe-free-img.png" alt="">
                <h3>Worldwide Shipping</h3>
                <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <a href="#" class="secondary-btn">Learn More <i class="fa-solid fa-right-long"></i></a>
            </div>


            <!-- 2 -->

            <div class="features-card flex">
                <img src="<?php bloginfo('template_directory'); ?>./assets/tag-free-img.png" alt="">
                <h3>Prototypes</h3>
                <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <a href="#" class="secondary-btn">Learn More <i class="fa-solid fa-right-long"></i></a>
            </div>


            <!-- 3 -->

            <div class="features-card flex">
                <img src="<?php bloginfo('template_directory'); ?>./assets/lock-free-img.png" alt="">
                <h3>Secure Payments</h3>
                <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <a href="#" class="secondary-btn">Learn More <i class="fa-solid fa-right-long"></i></a>
            </div>


            <!-- 4 -->

            <div class="features-card flex">
                <img src="<?php bloginfo('template_directory'); ?>./assets/globe-free-img.png" alt="">
                <h3>Best Offers</h3>
                <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <a href="#" class="secondary-btn">Learn More <i class="fa-solid fa-right-long"></i></a>
            </div>


            <!-- 5 -->


            <div class="features-card flex">
                <img src="<?php bloginfo('template_directory'); ?>./assets/quality-free-img.png" alt="">
                <h3>Best Quality</h3>
                <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <a href="#" class="secondary-btn">Learn More <i class="fa-solid fa-right-long"></i></a>
            </div>



            <!-- 6 -->


            <div class="features-card flex">
                <img src="<?php bloginfo('template_directory'); ?>./assets/tag-free-img.png" alt="">
                <h3>Preferences</h3>
                <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <a href="#" class="secondary-btn">Learn More <i class="fa-solid fa-right-long"></i></a>
            </div>
        </div>
    </div>
</section>



<!-- big features section -->


<section class="big-features-section">

    <div class="container  flex big-feature-container">

        <div class="feature-img">
            <img src="<?php bloginfo('template_directory'); ?>./assets/asset 6.jpeg" alt="">
        </div>
        <div class="feature-description  flex">
            <h4>Effortless Validation for</h4>
            <h3>Unique Designs</h3>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

        </div>
    </div>
</section>


<!-- 2 -->
<section class="big-features-section">

    <div class="container  flex big-feature-container" id="second-big-features">

        <div class="feature-img">
            <img src="<?php bloginfo('template_directory'); ?>./assets/asset 7.jpeg" alt="">
        </div>
        <div class="feature-description  flex">
            <h4>Effortless Validation for</h4>
            <h3>High-End Quality</h3>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

        </div>
    </div>
</section>


<!-- 3 -->


<section class="big-features-section">

    <div class="container  flex big-feature-container">

        <div class="feature-img">
            <img src="<?php bloginfo('template_directory'); ?>./assets/asset 6.jpeg" alt="">
        </div>
        <div class="feature-description  flex">
            <h4>Effortless Validation for</h4>
            <h3>Unique Designs</h3>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

        </div>
    </div>
</section>


<!-- examples section -->


<section class="examples-section">
    <div class="container">
            <div class="examples-header flex">
               <h2 class="examples-heading-text">New Arrivals of Products. </h2>
               <a href="#" class="secondary-btn">See more Products <i class="fa-solid fa-right-long"></i></a>
            </div>

            <div class="examples-area flex">
                <a href="#" class="examples-card">
                    <h3 class="card-text">Lorem ipsum dolor sit, amet consectetur qui doloremque enim nemo veniam mr.</h3>

                </a>


                <!-- 2 -->


                <a href="#" class="examples-card">
                    <h3 class="card-text">Lorem ipsum dolor sit, amet consectetur qui doloremque enim nemo veniam mr.</h3>

                </a>


                <!-- 3 -->


                <a href="#" class="examples-card">
                    <h3 class="card-text">Lorem ipsum dolor sit, amet consectetur qui doloremque enim nemo veniam mr.</h3>

                </a>


                <!-- 4 -->



                <a href="#" class="examples-card">
                    <h3 class="card-text">Lorem ipsum dolor sit, amet consectetur qui doloremque enim nemo veniam mr.</h3>

                </a>
            </div>
        </div>
</section>

   <!-- cta section -->

    <section class="cta-section">

        <div class="container flex cta-section-container">
            <h2>Start Trying Our Products Today</h2>
            <p>Take the guessWork out of design decisions</p>
            <a href="#" class="primary-btn" >Get Started</a>
        </div>
    </section>


<?php get_footer(); ?>

