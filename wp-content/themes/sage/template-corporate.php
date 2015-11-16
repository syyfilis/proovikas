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
		<h1>Corporate and Commercial</h1>
	</div>
		<div class = "corporateText">
			<p class = "cpText">Law firm Mullari & Koch provides legal services in all business related matters. Our clients are companies, state and local authorities as well as private investors and startups. We do not believe in consulting or memoranda that do not offer solutions. We believe that the fundamentals of a successful consultation are expertise, professionalism and dedication. We believe in clear-cut solutions.</p>
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