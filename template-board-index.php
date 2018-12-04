<?php

/*
Template Name: Board Index
*/

get_header(); ?>


<?php if(have_posts()): ?> <?php while(have_posts()) : the_post(); ?>

<div class="title-bar">
	<div class="row">
		<div class="col">
			<div class="container clearfix">
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
		<?php $bannerImage = get_field('banner_image');
               if ($bannerImage) { ?>
					<?php
				   echo wp_get_attachment_image( $bannerImage, 'page-header', '', array ('class' => 'featured-image') ); ?> 
               	<?php } ?>
     <div class="team-grid">
      	<div class="row">
	<?php
		$query = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'team_members',
                'orderby' => 'order',
                'order' => 'ASC',
                'tax_query' => array(
				array(
					'taxonomy' => 'team-category',
					'field'    => 'slug',
					'terms'    => 'board-member',
				),
	),
            ));
            
            while($query->have_posts()) {
                $query->the_post();
                	get_template_part('template-parts/team', 'index');?>
          	<?php  }
        	?>
      </div>
      </div>
  </div>
</section>    


 <?php endwhile; ?>
    <?php else : ?>
<h3><?php _e('No team members found.'); ?></h3>
<?php endif; ?> 


<?php get_footer(); ?>