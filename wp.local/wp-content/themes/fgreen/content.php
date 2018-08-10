<?php
/**
 * The default template for displaying content
 *
 * Used for single, index, archive, and search contents.
 *
 * @subpackage fgreen
 * @author tishonator
 * @since fGreen 1.0.0
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_single() ) : ?>

			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>

	<?php else : ?>
	
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h1>
	
	<?php endif; ?>

	<div class="before-content">
		
		<?php if ( !is_single() && get_the_title() === '' ) : ?>

				<span class="clock-icon">
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time(get_option('date_format')); ?></time>
					</a>
				</span><!-- .clock-icon -->
	
		<?php else : ?>

				<span class="clock-icon">
					<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time(get_option('date_format')); ?></time>
				</span><!-- .clock-icon -->
			
		<?php endif; ?>
		
		<span class="author-icon">
			<?php the_author_posts_link(); ?>
		</span><!-- .author-icon -->
		
		<?php if ( ! post_password_required() ) :
		
					$format = get_post_format();
						if ( current_theme_supports( 'post-formats', $format ) ) :
							printf( '<span class="%1$s-icon"> <a href="%2$s">%3$s</a></span>',
									$format,							
									esc_url( get_post_format_link( $format ) ),
									get_post_format_string( $format )
								);
						endif;
				
			   endif;
		?>
		
		<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>

					<span class="comments-icon">
						<?php comments_popup_link(__( 'No Comments', 'fgreen' ), __( '1 Comment', 'fgreen' ), __( '% Comments', 'fgreen' ), '', __( 'Comments are closed.', 'fgreen' )); ?>
					</span><!-- .comments-icon -->
		
		<?php endif; ?>
		
		<?php edit_post_link( __( 'Edit', 'fgreen' ), '<span class="edit-icon">', '</span>' ); ?>

	</div><!-- .before-content -->

	<?php if ( is_single() ) : ?>

				<div class="content">
					<?php fgreen_the_content_single(); ?> 
				</div><!-- .content -->

	<?php else : ?>

				<div class="content">
					<?php fgreen_the_content(); ?>
				</div><!-- .content -->

	<?php endif; ?>

	<div class="after-content">
		
		<?php if ( ! post_password_required() ) : ?>

					<?php if ( has_category() ) : ?>
					
								<span class="category-icon">
									<?php _e('Categories:', 'fgreen'); ?>
									<?php the_category( ', ' ) ?>
								</span><!-- .category-icon -->

					<?php endif; ?>
				
					<?php if ( has_tag() ) : ?>

								<span class="tags-icon">
										<?php _e('Tags:', 'fgreen'); ?>
										<?php the_tags(); ?>
								</span><!-- .tags-icon -->

					<?php endif; ?>

		<?php endif; // ! post_password_required()
			  ?>
		
	</div><!-- .after-content -->
	
	<?php if ( !is_single() ) : ?>

			<div class="separator">
			</div><!-- .separator -->

	<?php endif; ?>
	
</article><!-- #post-## -->
