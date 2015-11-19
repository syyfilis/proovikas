<div id = "mainBox">
	<div class="pageHeader">
		<h1>Latest News</h1>
	</div>
</div>

<?php while (have_posts()) : the_post(); ?>
	<article class = "blogPost">
		<div class = "blogPostTime">
			<h4 class = "date"><?php the_date(); ?></h4>
		</div>
		<div class = "blogPostTitle">
			<h2 class = "blogTitle"><?php the_title(); ?></h2>	
		</div>
		<div class = "blogPostContent">
			<p class = "blogContent"<?php the_content(); ?></p>
		</div>
	</article>
<?php endwhile; ?>
