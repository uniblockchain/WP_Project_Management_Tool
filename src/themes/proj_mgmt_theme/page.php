<?php
defined('ABSPATH') OR exit;
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */

get_header(); 
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>
    <div class="twelve columns alpha">
		<div id="primary" class="full-width">
			<div id="content">
           			<div class="main"> 

						<?php the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header><!-- .entry-header -->
        
                            <div class="entry-content">
                            	<?php if( has_post_thumbnail() ){
	                            	the_post_thumbnail('featured-image');
                            	}
                            	?>
                                <?php the_content(); ?>
                                <?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
                            </div><!-- .entry-content -->
                        </article><!-- #post-<?php the_ID(); ?> -->
					</div><!-- #main -->
			</div><!-- #content -->
		</div><!-- #primary -->
    </div>
   
<?php get_footer(); ?>