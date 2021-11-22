<?php get_header(); ?>

	
	<div class="blog_main_area">
		<div class="left_sidebar_area">
			<?php while(have_posts()): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php the_post_thumbnail(); ?>
				<p><?php the_author(); ?></p>
				<p><?php the_time( "j F Y - g:i A" ) ?></p>
				<p><?php comments_popup_link( 'Zero Comment', '1 comment', '% comments', 'comment_korbo_ki_je_kori', 'Disable comment' ); ?></p>
			<?php endwhile; ?>
		</div>
		<div class="right_sidebar_area">
			<h1>Right Top sidebar area</h1>
			<?php dynamic_sidebar('right_sidebar_id'); ?>
		</div>
	</div>

<?php get_footer(); ?>