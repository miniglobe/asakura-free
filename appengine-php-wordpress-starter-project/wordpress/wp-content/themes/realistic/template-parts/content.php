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
		<div class="post-data  mdl-cell mdl-cell--8-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
		
			<?php if ( current_user_can( 'edit_posts' ) ) { ?>
				<button id="post-actions<?php the_ID(); ?>" class="post-actions mdl-button mdl-js-button mdl-button--icon">
					<i class="material-icons">more_vert</i>
				</button>	
				<ul class="post-actions-menu mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="post-actions<?php the_ID(); ?>">
					<?php edit_post_link( __( 'Edit', 'realistic' ), '<li class="mdl-menu__item">', '</li>'); ?>
					<?php $post_type = get_post_type($post);
					$delLink = wp_nonce_url( admin_url() . "post.php?post=" . $post->ID . "&action=delete", 'delete-' . $post_type . '_' . $post->ID); ?>
					<li class="mdl-menu__item">
						<a href="<?php echo $delLink; ?>"><?php _e( 'Delete', 'realistic' ); ?></a>
					</li>
				</ul>
			<?php }
	
			the_title( sprintf( '<h2 class="entry-title post-title mdl-card__title-text"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			
			<?php realistic_archives_meta( $post->ID ); ?>
			<div class="entry-content post-excerpt">
				<?php /* translators: %s: Name of current post */ ?>
				<span class="mdl-typography--font-light mdl-typography--subhead">
					<?php archives_excerpt(); ?>
				</span>
			</div><!-- .entry-content -->
			<div class="moretag mdl-card--border">
				<a class="mdl-button mdl-js-button" href="<?php the_permalink(); ?>"><?php _e( '案件詳細へ', 'realistic' ); ?></a>
			</div>
		</div><!-- .post-data -->
	</article><!-- #post-## -->