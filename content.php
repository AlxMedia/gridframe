<?php $format = get_post_format(); ?>

<div class="type-portfolio">
	<div class="type-portfolio-inner">
	
		<div class="type-portfolio-thumb">
			<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail('gridframe-medium-h'); ?>
				<?php else: ?>	
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-medium.png" alt="<?php the_title_attribute(); ?>" />
				<?php endif; ?>
				<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
				<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
				<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
			</a>
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
				<a class="type-portfolio-comments" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
			<?php endif; ?>
		</div>
	</div>
	<div class="type-portfolio-content">	
		<?php if ( get_theme_mod( 'item-titles', 'on' ) =='on' ): ?>
			<h3 class="type-portfolio-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<?php endif; ?>
		<?php if (get_theme_mod('excerpt-length','0') != '0'): ?>
			<div class="type-portfolio-excerpt">
				<?php the_excerpt(); ?>
			</div>
		<?php endif; ?>
		<?php if ( has_category() && ( get_theme_mod( 'item-category', 'on' ) =='on' ) ): ?>
			<div class="type-portfolio-category"><?php the_category(' / '); ?></div>
		<?php endif; ?>
	</div>
</div>