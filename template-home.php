<?php

/*
Template Name: HomePage
*/

get_header(); ?>



<!--****************************************************
************** Home page slider  Area **************
****************************************************-->


<div class="sliders-area owl-carousel" id="homepage-sliders">        
<?php
    if( have_rows('single_slider') ): 
        while ( have_rows('single_slider') ) : the_row(); ?>


        <div class="single-slider">
        <?php
            $image = get_sub_field('slider_image');
            $size = 'slider'; 

            if( $image ) {

                ?>
                    <div class="slider-bg" style="background: url(<?php echo wp_get_attachment_image_url( $image, $size ); ?>); height: 500px; background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>
                <?php 

            }
            
        ?>
        <div class="slider-overlay"></div>
                <!--<img src="<?php the_sub_field('slider_image'); ?>" alt="">-->
        
            <!-- Home page Single Slider Content -->
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12"> 
                            <h2><?php the_sub_field('slider_heading'); ?></h2>
                            <p class="slider-text"><?php the_sub_field('slider_text'); ?></p>
                            <!-- slider Button -->
                            <a class="btn" href="<?php the_sub_field('slider_link'); ?>"> Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php endwhile;
            endif;  ?>





</div>

<!--****************************************************
************** Services Area **************
****************************************************--> 


<div class="services-area">
	<div class="container">
		<div class="row">


<?php
    if( have_rows('service_item') ): 
        while ( have_rows('service_item') ) : the_row(); ?>
			<div class="col-lg-4 col-md-6">
				<!-- Single Service Box -->
				<div class="single-service-box">
					<div class="service-img">
						<img src="<?php the_sub_field('upload_icon'); ?>">
                    </div>
                    <h3> <?php the_sub_field('feature_title'); ?> </h3>

                    <div class="service-desc">
                            <?php the_sub_field('feature_description'); ?>
                        <!-- Service Button -->
                    </div>

                    <div class="readmore">
                        <a class="btn" href='<?php the_sub_field("feature_link"); ?>'> MORE INFO </a>
                    </div>
                    
				</div>
            </div>

    <?php endwhile;
            endif;  ?>



		</div>
	</div>
</div>

<!--****************************************************
************** About Area **************
****************************************************--> 


<div class="about-area">
	<div class="container">
		<div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="about-text">
                        <?php the_field('missonand_vission_home'); ?> 
                    </div>
                    <div class="about-text">                               
                        <?php the_field('values_left_home'); ?> 
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="about-box video">
                        <?php if(get_field('video_thumbnail')) { ?>
                            <a class="trigger" href="#" data-toggle="modal" data-target="#vidModal" data-theVideo="<?php echo get_field('video', false, false);?>">
                                <img src="<?php the_field('video_thumbnail'); ?>">
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="vidModal" tabindex="-1" role="dialog" aria-labelledby="vidModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-body">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <?php the_field('video'); ?> 
                                  </div>
                                </div>
                              </div>
                            </div>
                        <?php } else 
                        {
                            the_field('video');    
                        }?>
                    </div>
                    <div class="about-box image">
                    <img src="<?php the_field('mental_img'); ?>" alt="">
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
            'posts_per_page' => 9,
            ));
    ?>

 <?php while( $middle->have_posts()) : $middle->the_post(); ?>

				<div class="col-lg-4">
					<!-- Single Recent News Box -->
					<div class="single-news-box">
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('blog_preview', array('class' => 'post-thumb')); ?></a>
						<div class="n-content">
							<h6><?php the_time('d/m/Y '); ?></h6>
							<h3><a style="color: inherit;" href="<?php the_permalink();?>"><?php the_title() ?></a></h3>
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