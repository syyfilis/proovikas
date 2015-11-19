<?php
/**
 * Template Name: Corporate and Commercial
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class = "mainBox">
	<div class="pageHeader">
		<h1><?php the_field('page_title'); ?></h1>
	</div>
		<div class = "corporateText">
			<p class = "cpText"><?php the_field('page_text'); ?></p>
		</div>
		<div class = "corporateMenu">
			<ul class = "sideMenuList">
				<li class = "sideMenuListUnit">Banking and Finance</li>
				<li class = "sideMenuListUnit" >Capital Markets</li>
				<li class = "sideMenuListUnit">Private Equity</li>
				<li class = "sideMenuListUnit">Corporate and Commercial</li>
				<li class = "sideMenuListUnit" id = "lastUnit">Intelectual Property</li>
			</ul>
		</div>
</div>