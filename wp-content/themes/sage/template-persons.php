<?php
/**
 * Template Name: Persons
 */
?>
<?php get_template_part('templates', 'extra-menu'); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<div class = "mainBox">
	<?php
		if( have_rows('person') )
		{
		while ( have_rows('person') ) : the_row();
		?>
	<div class = "contentSection" id = "personSection">
		<div class = "personTextSection">
						<h3><?php the_sub_field('personname'); ?></h3>
						<h4><?php the_sub_field('personstatus'); ?></h4>
						<ul>
						<?php
							if( have_rows('personareas') )
							{
								while ( have_rows('personareas') ) : the_row();
										// display a sub field value
								?>
										<li><?php the_sub_field('personarea'); ?></li>
								<?php
								endwhile;
							}
						?>
						</ul>
		</div>
	</div>
	<?php
		endwhile;
		}
	?>

</div>