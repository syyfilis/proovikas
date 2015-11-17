<?php
/**
 * Template Name: How can we help you:
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<?php use Roots\Sage\Titles; ?>



<div class = "mainBox">
	<img src = "http://mullarikoch.ee/app/themes/mk/dist/images/logo.png" width = "200" height = "200">
	<div class = "contentSection" id = "white">
		<div class ="boxHeader" >	
			<h2><?php the_field('header_1'); ?></h2>
		</div>
		<div class = "boxTextSection" id = "boxText">
				<p><?php the_field('content_text_1'); ?></p>
		</div>
	</div>
	<div class ="contentSection" id = "grey">
		<div class ="boxHeader" id = "lightBlue">
			<h2><?php the_field('header_2'); ?></h2>
		</div>
		<div class = "boxTextSection">
			<p><?php the_field('content_text_2'); ?></p>
		</div>
	</div>
	<div class ="contentSection" id ="white">
		<div class ="boxHeader">
			<h2><?php the_field('header_3'); ?></h2>
		</div>
		<div class = "boxTextSection">
			<p><?php the_field('content_text_3'); ?></p>
		</div>

	</div>
	
	<div class = "boxButton">
		<div class = "boxButtonInput">
			<h3 class ="boxInputHeader">Contact Us</h3>
		</div>
	</div>
	<div class = "boxButton" >
		<div class = "boxButtonInput">
			<h3>Contact Us</h3>
		</div>
	</div>
	<div class = "boxButton" >
		<div class = "boxButtonInput">
			<h3>Contact Us</h3>
		</div>
	</div>
</div>












<div class = "mainBox">
	<div class="pageHeader">
		<h1>How can we help you:</h1>
	</div>
	<div class = "contentSection" id = "white">
		<div class ="boxHeader" >
			<h2>Counselling</h2>
		</div>
		<div class = "boxTextSection">
    <ul>
 
    <?php while( have_rows('content_text_4') ): the_row(); ?>
 
        <li><?php echo the_row(); ?></li>
        
    <?php endwhile; ?>
 
    </ul>
		</div>
	</div>
	<div class ="contentSection" id = "grey">
		<div class ="boxHeader" id = "lightBlue">
			<h2>Dispute Resolution</h2>
		</div>
		<div class = "boxTextSection">
			<ul>
				<li>Commerical Law, Mergers and Acquisitons</li>
				<li>Contract Law</li>
				<li>Data PRotection</li>
			</ul>
		</div>
	</div>
	<div class ="contentSection" id ="white">
		<div class ="boxHeader">
			<h2>Packages</h2>
		</div>
		<div class = "boxTextSection">
			<ul>
				<li>Commerical Law, Mergers and Acquisitons</li>
				<li>Contract Law</li>
				<li>Data PRotection</li>
			</ul>
		</div>
	</div>
	<div class = "boxButtonContact">
		<div class = "boxButtonInput" id = "bottomBox">
			<h3>Contact Us</h3>
		</div>
	</div>
</div>


