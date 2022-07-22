<?php
/**
 * Template part for displaying posts
 *
 * @package wp-shuvakar
 * @author Shuvankar Sarkar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section id="blog-title">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<?php the_title( '<h1 class="entry-title display-4">', '</h1>' ); ?>
				</div>
			</div>
		</div>
	</section>

	<section id="blog-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<?php
					the_content();
				?>
				</div>
			</div>
		</div>
	</section>

</article><!-- #post-<?php the_ID(); ?> -->
