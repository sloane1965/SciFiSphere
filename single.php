<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package scifi
 */

get_header(); ?>


		
		<div class="container">
<section class="reviews">
<aside>
		<ul>
			<hr>
				<li><a href="">Games</a></li>
			<hr>
				<li><a href="">Movies</a></li>
			<hr>
				<li><a href="">Television</a></li>
			<hr>
				<li><a href="">Tabletop</a></li>
			<hr>
				<li><a href="">Collectibles</a></li>
			<hr>
		</ul>
	</aside>

<div class="articles">

	<div class="mainArticle">
		<hr>
		<?php if( get_field('article_image') ): ?>

			<img src="<?php the_field('article_image'); ?>" />

		<?php endif; ?>



			<h3>	
		<?php
		while ( have_posts() ) : the_post();
			
				$title = get_field( "article_title" );
		
					if( $title ) {
    
					    echo $title;

					} else {

					    echo 'empty';
					    
					}
	
		endwhile; // End of the loop.
		?>
			
		</h3>

		<h4>
			<?php
		while ( have_posts() ) : the_post();
			
				$subtitle = get_field( "sub_title" );
		
				if( $subtitle ) {
    
				    echo $subtitle;

				} else {

				    echo 'empty';
    
				}
	
			endwhile; // End of the loop.
			?>
			
		</h4>

		<hr>

		<?php
		while ( have_posts() ) : the_post();
			
				$content = get_field( "article_content" );
		
				if( $content ) {
    
				    echo $content;

				} else {

				    echo 'empty';
    
				}
	
			endwhile; // End of the loop.
			?>
			
		<hr>
	</div>
	<div class="author">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlKtZtyr__QgoVabEbGiMKkm0KMKNX6Bw5f87h_HCLed8IjhUbLQGkiKz1" alt="">
		<h6>
		<?php	while ( have_posts() ) : the_post();
			
				$name = get_field( "author_name" );
		
				if( $name ) {
    
				    echo $name;

				} else {

				    echo 'empty';
    
				}
	
			endwhile; // End of the loop.
			?>
		</h6>

		<p style="max-width: 50%;">
		<?php
			while ( have_posts() ) : the_post();
			
				$aboutauthor = get_field( "about_the_author" );
		
				if( $aboutauthor ) {
    
				    echo $aboutauthor;

				} else {

				    echo 'empty';
    
				}
	
			endwhile; // End of the loop.
			?>
		</p>

		<ul id="authorsSocial">
		<p>Follow me here!</p>
			<li><a href=""><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
			<li><a href=""><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
			<li><a href=""><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
		</ul>

	</div>
	
</section>

</div>


<?php
get_footer();
?>
