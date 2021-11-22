<?php get_header(); ?> 

	<?php while(have_posts()): the_post(); ?>

		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
		<?php the_post_thumbnail(); ?>

		<?php 

			$terms = get_the_terms(get_the_id(),'services_type');

			foreach($terms as $term): ?>
				<li><?php echo $term->name; ?></li>
			<?php endforeach; ?>

	<?php endwhile; ?>

<?php get_footer(); ?> 