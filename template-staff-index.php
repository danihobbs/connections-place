<?php

/*
Template Name: Staff Index
*/

get_header(); ?>


<?php while(have_posts()) : the_post(); ?>

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
                'orderby' => 'title',
                'order' => 'ASC',
                'tax_query' => array(
				array(
					'taxonomy' => 'team-category',
					'field'    => 'slug',
					'terms'    => 'staff-member',
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



<?php get_footer(); ?>