<div class="col-lg-3 col-md-6 col-sm-12 text-center item pb-4">
	<?php if ( has_post_thumbnail() )  {
	    $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id(), 'grid-lg' );
	    $imgwidth = $imgdata[1];                 
	    $minimum_width = 249; //change this minimum width to what you need
	    if ( ($imgwidth > $minimum_width ) ) { ?>
	    	<a href="<?php echo get_the_permalink();?>">
	       		<?php the_post_thumbnail('grid-lg'); ?>
	       	</a>
	   <?php } else { 
	        ?>
	    	<a href="<?php echo get_the_permalink();?>">
	       		<?php the_post_thumbnail('team-grid'); ?>
	       	</a>
	   <?php 
	        }
	}
?>
	<!-- <a href="<?php echo get_the_permalink();?>"><?php echo get_the_post_thumbnail( get_the_ID(), 'team-grid', array( 'class' => 'aligncenter team-grid-image' ) ); ?></a> -->
	<div class="member-title pt-2">
		<h3><a href="<?php echo get_the_permalink();?>"><?php the_title(); ?></a></h3>
    	<h4><?php the_field('position_title'); ?></h4>  
	</div>          		
</div>