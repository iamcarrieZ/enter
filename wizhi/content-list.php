<article <?php post_class(); ?>>

	<div class="pure-g">

		<?php if ( has_post_thumbnail() ): ?>

			<div class="pure-u-1 pure-u-md-1-4">
				<div class="col">
					<div class="item-picture">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'archive' ); ?>
						</a>
						<div class="media-overlay">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><span class="link"></span></a>
						</div>
					</div>
				</div>

			</div>
		<?php endif; ?>

		<div class="pure-u-1 <?= ( has_post_thumbnail() ) ? 'pure-u-md-3-4' : ''; ?>">
			<div class="col entry-content">

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<p><?php echo mb_strimwidth( strip_tags( apply_filters( "the_content", $post->post_content ) ), 0, 120, "…" ); ?></p>

				<a class="pull-right button-text" href="<?php the_permalink(); ?>">继续阅读</a>
			</div>
		</div>

	</div>

</article>