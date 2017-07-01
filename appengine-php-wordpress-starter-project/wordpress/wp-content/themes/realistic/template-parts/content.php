<?php
/**
 * Template part for displaying posts.
 *
 * @package Realistic
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('post-box demo-card-square mdl-card mdl-shadow--2dp'); ?>>
		<?php if ( is_sticky() ) {
			echo '<div class="featured"><i class="icon icon-star"></i></div>';
		} ?>	
		<div class="post-img mdl-card__title mdl-card--expand">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">		
				<img width="218" height="181" src="<?php echo realistic_get_thumbnail( 'featured' ); ?>" class="attachment-featured wp-post-image" alt="<?php the_title_attribute(); ?>">
				<?php $format = get_post_format( $post->ID );
				realistic_post_format_icon( $format ); ?>
			</a>
		</div>
		<div class="post-data">
		

	
			<?php the_title( sprintf( '<h2 class="entry-title post-title mdl-card__title-text"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<dl class="project-item">
				<dt>案件名</dt><dd></dd><dt>金額</dt><dd></dd><dt>場所</dt><dd></dd><dt>期間</dt><dd></dd>
			</dl>
			
			<div class="entry-content post-excerpt">
				<?php /* translators: %s: Name of current post */ ?>
				<span class="mdl-typography--font-light mdl-typography--subhead">
					<?php archives_excerpt(); ?>
				</span>
			</div><!-- .entry-content -->
			<hr class="border">
			<div class="moretag mdl-card--border">
				<a class="mdl-button mdl-js-button" href="<?php the_permalink(); ?>"><?php _e( '案件詳細へ', 'realistic' ); ?></a>
			</div>
		</div><!-- .post-data -->
	</article><!-- #post-## -->