<?php if ( has_post_thumbnail() ): ?>
	<article class="pure-u">
		<div class="col">
			<div class="sep media-hover">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'masonry' ); ?>
				</a>
				<div class="media-overlay">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><span class="link"></span></a>
				</div>
			</div>
		</div>
	</article>
<?php endif; ?>
