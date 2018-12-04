<?php 
   // Template Name: Basic Page
   
   get_header(); ?>
<div class="title-bar">
   <div class="container clearfix">
      <div class="row">
         <div class="col">
            <h1>News</h1>
         </div>
      </div>
   </div>
</div>
<!-- =================================================
   ================= Header Area =============
   =========================================================--> 
<section class="pagecontent-area pagemain">
   <div class="container pagecontent clearfix">
      <div class="row">
         <div class="col-md-12">
   <div class="container">
<div class="row">
    <?php
            $middle = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'paged'          => $paged
            ));
    ?>

 <?php while( $middle->have_posts()) : $middle->the_post(); ?>

            <div class="col-lg-4 mb-4">
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
      <div class="row">
         <div class="col-12 text-center">
           <?php the_posts_pagination( array(
   'mid_size'  => 2,
) );?>
         </div>
      </div>
   </div>
   </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>