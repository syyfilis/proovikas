<?php
/**
 * Template Name: News
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div id = "mainBox">
	<div class="pageHeader">
		<h1>Latest News</h1>
	</div>
</div>