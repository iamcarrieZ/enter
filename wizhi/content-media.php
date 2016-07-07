<div class="media">
	<a href="<?php the_permalink(); ?>" class="media-cap">
		<?php the_post_thumbnail( 'thumbnail' ); ?>
	</a>
	<div class="media-body">
		<div class="media-body-title">
			<strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>
		</div>
	</div>
</div>