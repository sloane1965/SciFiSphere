<?php
/**
 * Template Name: Reviews
 * 
 * The template for displaying product reviews
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package scifi
 */

get_header(); ?>
<div class="container">
<section class="reviews">





<div class="articles">

	<h1 align="center"><u>
		<?php
		while ( have_posts() ) : the_post();
			
				$title = get_field( "review_page_title" );
		
					if( $title ) {
    
					    echo $title;

					} else {

					    echo 'empty';
					    
					}
	
		endwhile; // End of the loop.
		?>
	</u></h1>


	<?php if( have_rows('article_preview') ): ?>


	<?php while( have_rows('article_preview') ): the_row(); 

		$image = get_sub_field('article_image');
		$title = get_sub_field('article_title');
		$category = get_sub_field('article_category');
		$paragraph = get_sub_field('article_paragraph');
		$link = get_sub_field('article_link');


		?>
		<div class="article row">
		<hr>

			<h3>
				<?php echo $title ?>
			</h3>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
		<hr>
			<h4>
			<?php echo $category ?>
			</h4>
			<p>
				<?php echo $paragraph ?>
			</p>
			<a href="<?php echo $link ?>">Read More</a>
		<hr>
	</div>

	<?php endwhile; ?>


	<?php endif; ?>


		<div class="article row">
		<hr>
			<h3>This is a placeholder!</h3>
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtI6rE8WBnr7_yU4NWhRf8vjYzZK5gMUxT3Gkem3t8Xk3poi-wJOLu-_X1kA" alt="">
		<hr>
			<h4>Category</h4>
			<p>Clicking read more will bring you to the review page showing a preview made with a repeater field, clicking on that "read more" will bring you to the article template! As posts are created previews will be placed here, linking to the article, each page will allow for previews like this to be dynamically created.  </p>
			<a href="http://localhost:8888/science/reviews/">Read More</a>
		<hr>
	</div>
<aside>
		<ul>
			<hr>
				<li><a href="">Movies</a></li>
			<hr>
			<hr>
				<li><a href="">Technology</a></li>
			<hr>
			<hr>
				<li><a href="">Television</a></li>
			<hr>
			<hr>
				<li><a href="">Video Games</a></li>
			<hr>
				<li><a href="">Television</a></li>
			<hr>
				<li><a href="http://localhost:8888/science/reviews/tabletop/">Tabletop</a></li>
			<hr>
				<li><a href="">Board Games</a></li>
			<hr>
				<li><a href="">Role Playing</a></li>
			<hr>
		</ul>
	</aside>

	
</section>
</div>
<?php get_footer(); ?>
