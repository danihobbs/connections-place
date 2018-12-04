<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>



<section class="pagecontent-area pagemain">
  <div class="container pagecontent clearfix">
      <div class="row">
          <div class="clearix">
              <?php get_search_form(); ?>
              <?php if ( have_posts() ) : ?>
                  <?php while ( have_posts() ) : the_post(); ?>
                        <span class="search-post-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></span>
                        <span class="search-post-excerpt"><?php the_excerpt(); ?></span>
                        <span class="search-post-link"><a href="<?php the_permalink(); ?>">Read More</a></span>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <p>There are no search results for <?php echo get_search_query(); ?>.</p>
            <?php endif; ?>
          </div>
      </div>
  </div>
</section>    



<?php get_footer(); ?>