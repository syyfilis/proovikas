<?php
/**
 * Template Name: Single person
 */
?>
<?php get_template_part('templates', 'extra-menu'); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
	<div class = "mainMenu" id ="secondary">
		<div class = "mainMenuContent">
			<div class = "extraMenu">
				<div class = "menuBox" id = "nav"><a href ="#">Tambet Mullari</a></div>
				<div class = "menuBox" id = "nav"><a href ="#">Paavo Koch</a></div>
				<div class = "menuBox" id = "nav"><a href ="#">Urmas Kukk</a></div>
				<div class = "menuBox" id = "nav"><a href ="#">Ksenia Kravtðenko</a></div>
				<div class = "menuBox" id = "nav"><a href ="#">Annely Sepp</a></div>
			</div>
		</div>
	</div>
<div class = "mainBox">
	<div class = "personImageBig">
			<img src = "http://mullarikoch.ee/app/uploads/2015/07/tamber-mullari-s1.png">
	</div>
	<div class = "personTextSectionBig">
		<div class = "careerInfo">
			<div class = "personName">
				<h2><?php the_field('person_name'); ?></h2>
				<h3><?php the_field('person_status'); ?></h3>
			</div>
				<h4 class = "careerHeadings"><?php the_field('heading_1'); ?></h4>
			<table>
				<?php
					if( have_rows('table_1') )
					{
						while ( have_rows('table_1') ) : the_row();
						?>
						<tr>
							<td><?php the_sub_field('year_1'); ?></td>
							<td><?php the_sub_field('information_1'); ?></td>
						</tr>
						<?php
						endwhile;
					}
				?>
			</table>
				<h4 class = "careerHeadings"><?php the_field('heading_2'); ?></h4>
			<table>
				<?php
					if( have_rows('table_1') )
					{
						while ( have_rows('table_2') ) : the_row();
						?>
						<tr>
							<td><?php the_sub_field('year_2'); ?></td>
							<td><?php the_sub_field('information_2'); ?></td>
						</tr>
						<?php
						endwhile;
					}
				?>
			</table>
				<h4 class = "careerHeadings"><?php the_field('heading_3'); ?></h4>
			<div class = "careerText">
				<p><?php the_field('languages'); ?></p>
			</div>
			<h4 class = "careerHeadings"><?php the_field('heading_4'); ?></h4>
			<div class = "careerText">
				<p><<?php the_field('addition_information'); ?>/p>
			</div>
			
		</div>
	</div>
</div>