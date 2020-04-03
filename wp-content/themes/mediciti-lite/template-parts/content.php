<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mediciti-lite
 */

global $post;
$mediciti_lite_settings = mediciti_lite_get_theme_options();
$mediciti_lite_blog_meta = $mediciti_lite_settings['mediciti_lite_entry_meta_blog'];
$mediciti_lite_post_format = get_post_format($post->ID);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php  
if($mediciti_lite_post_format == 'gallery'){
	mediciti_lite_blog_post_format($mediciti_lite_post_format, $post->ID); }?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() && ($mediciti_lite_blog_meta == 'show-meta') ) :
			?>
			<div class="entry-meta">
				<?php
				mediciti_lite_posted_on();
				mediciti_lite_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php mediciti_lite_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
        if(is_single()){
            		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mediciti-lite' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
        }
        else{
            echo wp_kses_post(mediciti_lite_get_excerpt($post->ID,400 ));
        }


		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mediciti-lite' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <?php         if(!is_single()){
        ?>
        <a class="more-link" title="" href="<?php echo esc_url(get_the_permalink()) ?>"><?php echo esc_html__('Read More','mediciti-lite');?></a>
		<?php } //mediciti_lite_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
