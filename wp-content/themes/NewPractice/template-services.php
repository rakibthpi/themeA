<?php 

/* 

Template Name: Services Template

*/

?>

<?php get_header(); ?>

	<?php 
		$services = new WP_Query(array(
			'post_type'		=>	'custom-post-type'
		));

	?>
	<?php while($services->have_posts()): $services->the_post(); ?>

		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<ul>
		<?php 
			$terms = get_the_terms(get_the_id(),'services_type');
			

			foreach($terms as $term):
				$url = get_term_link($term); ?>
				<li><a href="<?php echo $url; ?>"> <?php echo $term->name; ?> </a></li>
			<?php endforeach; ?>
		</ul>
		<a href="<?php the_permalink(); ?>">Services Details...</a>
	<?php endwhile; ?>

<?php get_footer(); ?>