
	<article class = "blogPost">
		<div class = "blogPostTime">
			<h4 class = "date"><?php the_date(); ?></h4>
		</div>
		<div class = "blogPostTitle">
			<a href = "<?php echo get_permalink(); ?>"><h2 class = "blogTitle"><?php the_title(); ?></h2></a>
		</div>
		<div class = "blogPostContent">
			<p class = "blogContent"><?php the_excerpt(); ?></p>
		</div>
	</article>