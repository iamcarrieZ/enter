<ul class="entry-meta">

	<li class="meta-date">
		<span class="fa fa-clock-o"></span><span class="updated"><?php echo get_the_date(); ?></span>
	</li>

	<li class="meta-author">
		<span class="fa fa-user"></span><span class="vcard author"><span class="fn"><?php the_author_posts_link(); ?></span></span>
	</li>

	<li class="meta-category">
		<span class="fa fa-folder-o"></span><?php the_category( ', ', get_the_ID() ); ?>
	</li>

	<li class="meta-comments comment-scroll">
		<span class="fa fa-comment-o"></span>
		<?php comments_popup_link( esc_html__( '0 Comments', 'enter' ), esc_html__( '1 Comment', 'enter' ), esc_html__( '% Comments', 'enter' ), 'comments-link' ); ?>
	</li>

</ul>