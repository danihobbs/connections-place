
<?php get_header(); ?>



<?php if(have_posts()): ?> <?php while(have_posts()) : the_post(); ?>


<!--****************************************************
************** Page Content main **************
****************************************************-->   
<div class="title-bar"><div class="container clearfix"><div class="row"><div class="col"><h1><?php the_title()?></h1></div></div></div></div>
<section class="pagecontent-area">
    <div class="container pagecontent clearfix">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="clearfix">
                    <?php echo get_the_post_thumbnail( $post_id, 'large', array( 'class' => 'center featured-image' ) );?>
                    <div class="postdate">Posted on <?php the_date('M d, Y') ?> by <?php the_author_nickname(); ?></div>
                    <?php the_content(); ?>
                </div>
            </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="clearfix">
                <?php get_sidebar('main-sidebar');?></div>
            </div>
        </div>
    </div>
</section>    

 <?php endwhile; ?>
<?php endif; ?> 


<?php get_footer(); ?>

        

