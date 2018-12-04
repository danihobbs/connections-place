
<?php get_header(); ?>



<?php if(have_posts()): ?> <?php while(have_posts()) : the_post(); ?>


<!--****************************************************
************** Page Content main **************
****************************************************-->   
<div class="title-bar"><h1><?php the_title()?></h1></div>
<section class="pagecontent-area">
	<div class="container pagecontent clearfix">
		<div class="row">

			<?php the_content(); ?>

		</div>
	</div>
</section>	

 <?php endwhile; ?>
    <?php else : ?>
<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
<?php endif; ?> 


<?php get_footer(); ?>

		

