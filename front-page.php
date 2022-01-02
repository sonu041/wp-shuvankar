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

<!-- Blog Section -->
<section id="blog">
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
	</div>
</section>

<!-- Experience Section -->
<section id="tools">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="display-3">Tools and Technology</h2>
				<ul class="cloud" role="navigation" aria-label="Webdev tag cloud">
					<li><a data-weight="7" href="#tools">PHP</a></li>
					<li><a data-weight="8" href="#tools">HTML</a></li>
					<li><a data-weight="6" href="#tools">Flutter</a></li>
					<li><a data-weight="5" href="#tools">REST</a></li>
					<li><a data-weight="9" href="#tools">Java</a></li>
					<li><a data-weight="6" href="#tools">.Net</a></li>
					<li><a data-weight="5" href="#tools">Python</a></li>
					<li><a data-weight="9" href="#tools">C#</a></li>
					<li><a data-weight="8" href="#tools">CSS</a></li>
					<li><a data-weight="6" href="#tools">Jquery</a></li>
					<li><a data-weight="7" href="#tools">Oracle</a></li>
					<li><a data-weight="6" href="#tools">SQL</a></li>
					<li><a data-weight="9" href="#tools">Git</a></li>
					<li><a data-weight="4" href="#tools">Jenkins</a></li>
					<li><a data-weight="5" href="#tools">Jira</a></li>
					<li><a data-weight="3" href="#tools">OCI</a></li>
					<li><a data-weight="5" href="#tools">MySql</a></li>
					<li><a data-weight="4" href="#tools">VBA</a></li>
					<li><a data-weight="3" href="#tools">Android</a></li>
					<li><a data-weight="6" href="#tools">Excel</a></li>
					<li><a data-weight="5" href="#tools">Informatica</a></li>
					<li><a data-weight="4" href="#tools">Tableau</a></li>
					<li><a data-weight="7" href="#tools">Javascript</a></li>
					<li><a data-weight="5" href="#tools">SOLR</a></li>
					<li><a data-weight="6" href="#tools">Redis</a></li>
					<li><a data-weight="5" href="#tools">Burpsuite</a></li>
					<li><a data-weight="6" href="#tools">Angular</a></li>
					<li><a data-weight="3" href="#tools">VB</a></li>
					<li><a data-weight="5" href="#tools">SQLServer</a></li>
				</ul>
			</div>
			<div class="col-lg-12 text-right">*Level of expertise depends on the size of the text</dev>
		</div>
		<br/></br>
	</div>
</section>



<?php get_footer() ?>