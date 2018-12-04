<?php 
   // Template Name: Basic Page
   
   get_header(); ?>
<?php if(have_posts()): ?> <?php while(have_posts()) : the_post(); ?>
<div class="title-bar">
   <div class="container clearfix">
      <div class="row">
         <div class="col">
            <h1><?php the_title(); ?></h1>
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
            <?php $bannerImage = get_field('banner_image');
               if ($bannerImage) {
                 echo wp_get_attachment_image( $bannerImage, 'page-header', '', array ('class' => 'featured-image') );  
               }
               if( have_rows('annual_reports') ):
                  ?><ul class="pdf-links"><?php
                   while ( have_rows('annual_reports') ) : the_row(); ?>
                     <li>
                        <a class="pdf-file" href="<?php the_sub_field('pdf_file'); ?>" target="_blank"><?php the_sub_field('file_name'); ?></a>
                     </li>
                 <?php  endwhile; ?>
                 </ul>
              <?php else :

                   echo "No Annual Reports Found.";
               endif;
               $images = get_field('image_gallery');
               $size = 'portfolio';
               if( $images ): ?>
            <div class="gallery">
               <div class="row">
                  <?php foreach( $images as $image ): ?>
                  <div class="col-md-6 <?php the_field('columns')?> col-sm-12 item pb-4">
                     <div class="gallery-item">
                        <a class="lightbox" href="<?php echo wp_get_attachment_image_url($image['ID'], 'full');?>"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></a>
                     </div>
                  </div>
                  <?php endforeach; ?>
               </div>
            </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
<?php endwhile; ?>
<?php else : ?>
<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
<?php endif; ?> 
<?php get_footer(); ?>