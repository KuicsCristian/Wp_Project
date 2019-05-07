
<?php get_header(); 

	if ( have_posts() ) : 

		
			// Start the loop.
		while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			
			<?php the_date(); ?>
			<?php the_content(); ?>
			<?php the_category(); ?>
	<?php  
			

			echo'<hr>';

		endwhile;
			
		else :
			echo "nu avem posturi";
			
		endif;
		?>

<?php get_footer(); ?>