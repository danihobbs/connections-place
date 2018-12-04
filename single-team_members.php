<?php get_header(); ?>

<?php if(have_posts()): ?> <?php while(have_posts()) : the_post(); ?>

<!--****************************************************
   ************** Page Content main **************
   ****************************************************-->   

<div class="title-bar">
   <div class="container clearfix">
      <div class="row">
         <div class="col">
            <h1><?php the_title()?> &mdash; <?php the_field('position_title');?></h1>
            <?php if(get_field('position_title')) { ?>
            <?php } ?>
         </div>
      </div>
   </div>
</div>
<section class="pagecontent-area">
   <div class="container pagecontent clearfix">
      <div class="row">
         <div class="col-md-3">
            <?php echo get_the_post_thumbnail( $post_id, 'medium', array( 'class' => 'team-thumb' ) );?>
         </div>
         <div class="col-md-9">
            <?php the_content(); ?>
         </div>
      </div>
   </div>
</section>
<?php endwhile; ?>
<?php endif; ?> 

<?php get_footer(); ?>