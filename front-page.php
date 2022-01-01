<?php get_header() ?>

<!-- Whoami Grid Section -->
<section id="whoami">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center">
				<p id="shuva">Shuvankar Sarkar</p>
			</div>
			<div class="col-lg-6 text-center">
				<br/><br/>
				<div class="container py-5">
					<div class="output" id="output">
						<h1 class="cursor"></h1>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- When Section -->
<section class="success" id="blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="display-3">Blog</h2>
				<?php
				if ( have_posts() ) {
					// Load posts loop.
					while ( have_posts() ) {
						the_post();
						the_title( sprintf( '<h5 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h5>' );
					}
				} else {
					// If no content, include the "No posts found" template.
					get_template_part( 'template-parts/content/content-none' );
				}
				?>
			</div>
		</div>
		<br/></br><br/></br><br/></br>
	</div>
</section>



<?php get_footer() ?>