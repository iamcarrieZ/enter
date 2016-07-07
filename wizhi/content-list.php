<div class="media">
	<a href="<?php the_permalink(); ?>" class="media-cap">
		<?php the_post_thumbnail( 'thumbnail' ); ?>
	</a>
	<div class="media-body">
		<div class="media-body-title">
			<strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>
		</div>
		<p><?php echo mb_strimwidth( strip_tags( apply_filters( "the_content", $post->post_content ) ), 0, 320, "…" ); ?></p>
	</div>
</div>