<?php
/**
 * Template Name: Corporate and Commercial
 */
$defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => '',
	'container_class' => 'sideMenuList',
	'container_id'    => '',
	'menu_class'      => 'sideMenuList',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);
while (have_posts()) : the_post(); ?>
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
		<?php wp_nav_menu( $defaults); ?> 
		</div>
</div>