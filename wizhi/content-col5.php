<?php if ( has_post_thumbnail() ): ?>
	<article class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-5">
		<div class="col">
			<div class="sep media-hover">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'archive' ); ?>
				</a>
				<div class="media-overlay">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><span class="link"></span></a>
				</div>
			</div>
		</div>
	</article>
<?php endif; ?>
