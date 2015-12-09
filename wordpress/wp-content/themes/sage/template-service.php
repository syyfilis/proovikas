<?php
/**
 * Template Name: Main Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>



<div class = "mainBox">
	<img src = "http://mullarikoch.ee/app/themes/mk/dist/images/logo.png" width = "200" height = "200">
	<div class = "contentTable">
	<div class = "contentSection" id = "white">
		<div class ="boxHeader" >	
			<h2 class = "headerText"><?php the_field('header_1'); ?></h2>
		</div>
		<div class = "boxTextSection">
			<ul class = "boxBlogList">
				<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 4, 'format' => 'Custom','before' => '<li class = "blogListUnit">','after' => '</li>') ); ?>
			</ul>
		</div>
	</div>
	<div class ="contentSection" id = "grey">
		<div class ="boxHeader" id = "lightBlue">
			<h2 class = "headerText"><?php the_field('header_2'); ?></h2>
		</div>
		<div class = "boxTextSection">
			<p><?php the_field('content_text_2'); ?></p>
		</div>
	</div>
	<div class ="contentSection" id ="white">
		<div class ="boxHeader">
			<h2 class = "headerText"><?php the_field('header_3'); ?></h2>
		</div>
		<div class = "boxTextSection">
			<p><?php the_field('content_text_3'); ?></p>
		</div>

	</div>
	</div>
	<div class = "boxButton">
		<div class = "boxButtonInput">
				<a href = <?php the_field('button_1_url'); ?> ><h3 class = "boxButtonText"><?php the_field('button_1'); ?></h3></a>
		</div>
	</div>
	<div class = "boxButton" >
		<div class = "boxButtonInput">
			<a href = <?php the_field('button_2_url'); ?> ><h3 class = "boxButtonText"><?php the_field('button_2'); ?></h3></a>
		</div>
	</div>
	<div class = "boxButton" >
		<div class = "boxButtonInput">
			<a href = <?php the_field('button_3_url'); ?> ><h3 class = "boxButtonText"><?php the_field('button_3'); ?></h3></a>
		</div>
	</div>
</div>












<div class = "mainBox">
	<div class="pageHeader">
		<h1>How can we help you:</h1>
	</div>
	<div class = "contentTable">
	<div class = "contentSection" id = "white">
		<div class ="boxHeader" >
			<h2 class = "headerText"><?php the_field('header_4'); ?></h2>
		</div>
		<div class = "boxTextSection">
    <ul>
		<?php
			if( have_rows('content_text_4') )
			{
				while ( have_rows('content_text_4') ) : the_row();
						// display a sub field value
				?>
						<li><?php the_sub_field('list_item'); ?></li>
				<?php
				endwhile;
			}
		?>
    </ul>
		</div>
	</div>
	<div class ="contentSection" id = "grey">
		<div class ="boxHeader" id = "lightBlue">
			<h2 class = "headerText"><?php the_field('header_5'); ?></h2>
		</div>
		<div class = "boxTextSection">
			<ul>
				<?php
					if( have_rows('content_text_5') )
					{
						while ( have_rows('content_text_5') ) : the_row();
						?>
								<li><?php the_sub_field('list_item'); ?></li>
						<?php
						endwhile;
					}
				?>
			</ul>
		</div>
	</div>
	<div class ="contentSection" id ="white">
		<div class ="boxHeader">
			<h2 class = "headerText"><?php the_field('header_6'); ?></h2>
		</div>
		<div class = "boxTextSection">
			<ul>
				<?php
					if( have_rows('content_text_6') )
					{
						while ( have_rows('content_text_6') ) : the_row();
						?>
								<li><?php the_sub_field('list_item'); ?></li>
						<?php
						endwhile;
					}
				?>
			</ul>
		</div>
	</div>
	</div>
	<div class = "boxButtonContact">
		<div class = "boxButtonInput" id = "bottomBox">
			<a href = <?php the_field('button_4_url'); ?> ><h3 class = "boxButtonText"><?php the_field('button_4'); ?></h3></a>
		</div>
	</div>
</div>


