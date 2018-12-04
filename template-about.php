<?php

/*
Template Name: About Page
*/

get_header(); ?>




<!--****************************************************
************** Home page slider  Area **************
****************************************************-->


<div class="sliders-area owl-carousel" id="homepage-sliders">

    <?php
            $middle = new WP_Query(array(
            'post_type' => 'slider',
            'posts_per_page' => -1,
            ));
    ?>

 <?php while( $middle->have_posts()) : $middle->the_post(); ?>

	<div class="single-slider">
            <img src="<?php the_field('slider_image'); ?>" alt="">
    
		<!-- Home page Single Slider Content -->
		<div class="slider-content">
			<div class="container">
				<div class="row">
					<div class="col-12"> 
                        <?php the_field('slider_text'); ?>
						<!-- slider Button -->
                        <a class="btn" href="<?php the_field('slider_link'); ?>"> Learn More</a>
					</div>
				</div>
			</div>
		</div>
    </div>

 <?php endwhile; ?>
</div>

<!--****************************************************
************** Services Area **************
****************************************************--> 


<div class="services-area">
	<div class="container">
		<div class="row">



    <?php
            $middle = new WP_Query(array(
            'post_type' => 'Service',
            'posts_per_page' => -1,
            ));
    ?>

 <?php while( $middle->have_posts()) : $middle->the_post(); ?>


			<div class="col-lg-4 col-md-6">
				<!-- Single Service Box -->
				<div class="single-service-box">
					<div class="service-img">
						<img src="<?php the_field('image'); ?>">
                    </div>
                    <h3><?php the_title(); ?></h3>

                    <div class="service-dec">
                            <?php the_field('description'); ?>
                        <!-- Service Button -->
                    </div>

                    <div class="readmore">
                        <a class="btn" href='<?php the_field("link"); ?>'> MORE INFO </a>
                    </div>
                    
				</div>
            </div>


 <?php endwhile; ?>







		</div>
	</div>
</div>

<!--****************************************************
************** About Area **************
****************************************************--> 


<div class="about-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="about-text">
                <?php the_field('missonand_vission_home'); ?> 
			</div>
			<div class="col-md-6">
				<div class="about-box video">
                <iframe src="https://www.youtube.com/embed/prsg_SyKp1o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="about-text">
                                
            <?php the_field('values_left_home'); ?> 

				</div>
			</div>
			<div class="col-md-6">
				<div class="about-box">
<img src="<?php bloginfo('home')?>/wp-content/uploads/2018/11/ConnectionsPlace-Mental_Wellness-ColourMatched.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>



<!--****************************************************
************** Recent News Area **************
****************************************************--> 

<div class="r-news-area">
	<h2>Recent  <strong>News</strong></h2>
	<div class="container">
		<div class="recent-news-slider">
			<div id="recent-news-slider" class="row owl-carousel">


    <?php
            $middle = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            ));
    ?>

 <?php while( $middle->have_posts()) : $middle->the_post(); ?>

				<div class="col-lg-4">
					<!-- Single Recent News Box -->
					<div class="single-news-box">
                    <?php the_post_thumbnail(' post-image', array('class' => 'post-thumb')); ?>
						<div class="n-content">
							<h6><?php the_time('d/m/Y '); ?></h6>
							<h3><?php the_title() ?></h3>
							<?php the_excerpt(); ?>
							<!-- news Button -->
                            <a class="btn" href="<?php the_permalink(); ?>"> Read More </a>
                            
						</div>
					</div>
                </div> 
                
<?php endwhile; ?>


			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="more-post">
					<h3><a href="<?php bloginfo('home'); ?>/#">view more news posts</a></h3>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>