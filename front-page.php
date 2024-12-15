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
				<h2 class="display-3 font-8vw">Blog</h2>
				<?php
				if ( have_posts() ) {
					// Load posts loop.
					while ( have_posts() ) {
						the_post();
						the_title( sprintf( '<h5 class="entry-title default-max-width"><a href="%s"><li>', esc_url( get_permalink() ) ), '</li></a></h5>' );
					}
				} else {
					// If no content, include the "No posts found" template.
					get_template_part( 'template-parts/content/content-none' );
				}
				?>
				<?php get_search_form(); ?>
				<a href="all-posts/">All Posts</a> 
			</div>
		</div>
	</div>
</section>

<!-- Experience Section -->
<section id="tools">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="display-3 font-8vw">Tools and Technology</h2>
				<ul class="cloud" role="navigation" aria-label="Webdev tag cloud">
					<li><a data-weight="7" href="#tools">PHP</a></li>
					<li><a data-weight="6" href="#tools">Flutter</a></li>
					<li><a data-weight="5" href="#tools">REST</a></li>
					<li><a data-weight="9" href="#tools">Java</a></li>
					<li><a data-weight="6" href="#tools">Angular</a></li>
					<li><a data-weight="6" href="#tools">.Net</a></li>
					<li><a data-weight="5" href="#tools">Python</a></li>
					<li><a data-weight="9" href="#tools">C#</a></li>
					<li><a data-weight="6" href="#tools">Jquery</a></li>
					<li><a data-weight="6" href="#tools">SQL</a></li>
					<li><a data-weight="7" href="#tools">Oracle</a></li>
					<li><a data-weight="4" href="#tools">Jenkins</a></li>
					<li><a data-weight="5" href="#tools">Jira</a></li>
					<li><a data-weight="8" href="#tools">CSS</a></li>
					<li><a data-weight="3" href="#tools">OCI</a></li>
					<li><a data-weight="5" href="#tools">MySql</a></li>
					<li><a data-weight="3" href="#tools">Android</a></li>
					<li><a data-weight="6" href="#tools">Excel</a></li>
					<li><a data-weight="5" href="#tools">Informatica</a></li>
					<li><a data-weight="9" href="#tools">Git</a></li>
					<li><a data-weight="4" href="#tools">Tableau</a></li>
					<li><a data-weight="7" href="#tools">Javascript</a></li>
					<li><a data-weight="5" href="#tools">SOLR</a></li>
					<li><a data-weight="8" href="#tools">HTML</a></li>
					<li><a data-weight="6" href="#tools">Redis</a></li>
					<li><a data-weight="5" href="#tools">Burpsuite</a></li>
					<li><a data-weight="3" href="#tools">VBA</a></li>
					<li><a data-weight="5" href="#tools">SQLServer</a></li>
					<li><a data-weight="4" href="#tools">NewRelic</a></li>
					<li><a data-weight="7" href="#tools">GoogleCloud</a></li>
				</ul>
			</div>
			<div class="col-lg-12 text-right">*Level of expertise depends on the size of the text</dev>
		</div>
		<br/></br>
	</div>
</section>

<!-- Certification Section -->
<section id="certification">
	<div class="container">
		<h2 class="display-2 text-center font-8vw">Certification</h2>
		<div class="row pt-3 pb-3">
			<div class="col-lg-3 text-center">
				<a target="_blank" href="https://www.credly.com/badges/20eb211e-9082-46d4-823f-2493ef4b3b2f/public_url">
					<img src="images/GCP-PCD_Logo.png" alt="GCP-PCD" width="200" height="200">
				</a>
			</div>
			<div class="col-lg-3 text-center">
				<a target="_blank" href="https://www.credly.com/badges/65b16994-37c5-4437-b640-95fa18cfb0d5/public_url">
					<img src="images/GCP-PCA_Logo.png" alt="GCP-PCA" width="200" height="200">
				</a>
			</div>
			<div class="col-lg-3 text-center">
				<a target="_blank" href="https://www.credly.com/badges/5d1c4c6f-7d5d-4c8b-a252-14fb875ac4f6/public_url">
					<img src="images/GCP-ACE_Logo.png" alt="GCP-ACE" width="200" height="200">
				</a>
			</div>
			<div class="col-lg-3 text-center">
				<a target="_blank" href="https://www.credly.com/badges/3303ca53-b40f-4e29-b6f1-bf545e08bba4/public_url">
					<img src="images/GCP-CDL_Logo.png" alt="GCP-CDL" width="200" height="200">
				</a>
			</div>
			
		</div>
		<div class="row pt-3 pb-3">
			<div class="col-lg-3 text-center">
				<a target="_blank" href="https://catalog-education.oracle.com/pls/certview/sharebadge?id=854A64A9373B6EC1042CB5B34F947F5C8F30B5484CB9609E6CE4454C7143A332">
					<img src="images/OCI_Foundation_2021.jpg" alt="OCI_Foundation" width="200" height="200">
				</a>
			</div>
			<div class="col-lg-3 text-center">
				<a target="_blank" href="https://www.credly.com/badges/32ba401c-451d-40fb-8bde-054d4e59f560/public_url">
					<img src="images/BADGES_FINAL_PSM-I_600.png" alt="PSM-I" width="200" height="200">
				<a>
			</div>
			<div class="col-lg-3 text-center">
				<a target="_blank" href="https://aspen.eccouncil.org/VerifyBadge?type=certification&a=wROWxqVXfkMwU0h7ibS0swOpqP2BFvcry9buh1Xkvxc=">
					<img src="images/CEH_2E345519D3F7.png" alt="CEH" width="200" height="200">
				</a>
			</div>
			<div class="col-lg-3 text-center">
				<a target="_blank" href="https://www.credential.net/fb1e83c1-9cea-40e3-b863-2c743209b244">
					<img src="images/Google-Play.png" alt="Google-Play" width="200" height="200">
				</a>
			</div>
		</div>
		<div class="row pt-3 pb-3">
			<div class="col-lg-3 text-center">
				<a target="_blank" href="https://www.credly.com/badges/aebbb0d9-015a-4878-9ddd-373fe63abe6e/public_url">
					<img src="images/MCSD_App_Builder_2017-01.png" alt="MCSD" width="200" height="200">
				</a>
			</div>
			<div class="col-lg-3 text-center">
				<a target="_blank" href="https://www.credly.com/badges/5e6734d5-cf66-4342-bda2-573e89ca0fe5/public_url">
					<img src="images/MCSA_Web_Applications_2017-01.png" alt="MCSA" width="200" height="200">
				</a>
			</div>
		</div>
		<h2 class="text-center"><a href="certificates/">All Certificates</a></h2>
	</div>
</section>

<!-- Apps -->
<section id="apps">
	<div class="container">
		<div class="row pt-3 pb-3">
			<div class="col-lg-4">
			<h2 class="display-4 text-center">Apps</h2>
				<ul>
					<li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.shuvankar.wasticker&hl=en_IN&gl=US">BongStick - Bengali WAStickerApps</a></li>
					<li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.shuvankarsarkar.ctfcapturetheflag&hl=en_IN&gl=US">CTF - Capture The Flag</a></li>
					<li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.shuvankar.engostick&hl=en_IN&gl=US">EngoStick - English WAStickerApps</a></li>
					<li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.shuvankar.hindistick&hl=en_IN&gl=US">HindiStick - Hindi WAStickerApps</a></li>
					<li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.shuvankar.shuveccha&hl=en_IN&gl=US">Shuveccha - WA Bengali sticker</a></li>
					<li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.shuvankar.statshak&hl=en_IN&gl=US">Statshak - Status Saver</a></li>
				</ul>
			</div>
			<div class="col-lg-4 text-center">
				<h2 class="display-4 text-center">Online CV</h2>
				<a target="_blank" href="cv">
					<img src="images/Online_CV.PNG" alt="Online-CV" width="300">
				</a>
				<a href="https://github.com/sonu041/CV/raw/main/ShuvankarSarkar_CV.pdf">Download PDF Version CV</a>
			</div>
			<div class="col-lg-4">
				<h2 class="display-4 text-center">Book Review</h2>
				<ul>
					<li><a target="_blank" href="https://www.google.co.in/books/edition/PhpStorm_Cookbook/8cwGBgAAQBAJ?hl=en&gbpv=1&dq=Shuvankar+Sarkar&pg=PT21&printsec=frontcover">PhpStorm Cookbook</a></li>
					<li><a target="_blank" href="https://www.google.co.in/books/edition/PHP_7_Programming_Blueprints/dJncDgAAQBAJ?hl=en&gbpv=1&dq=Shuvankar+Sarkar&pg=PP6&printsec=frontcover">PHP 7 Programming Blueprints</a></li>
					<li><a target="_blank" href="https://www.google.co.in/books/edition/Building_RESTful_Web_Services_with_PHP_7/xJlGDwAAQBAJ?hl=en&gbpv=1&dq=Shuvankar+Sarkar&pg=PP6&printsec=frontcover">Building RESTful Web Services with PHP 7</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Contacts -->
<section id="contact">
	<div class="container">
		<div class="row pt-3 pb-3">
			<div class="col-lg-12 text-center">
				<a target="_blank" href="mailto:shuvankarsarkarhihi@gmail.com">
					<img src="images/Email-Icon.png" alt="email">
				</a>
				<a target="_blank" href="https://www.linkedin.com/in/shuvankarsarkar/">
					<img src="images/Linkedin.png" alt="linkedin">
				</a>
				<a target="_blank" href="https://www.instagram.com/sonu041/?hl=en">
					<img src="images/Instagram-Icon.png" alt="instagram">
				</a>
				<a target="_blank" href="https://twitter.com/sonu041">
					<img src="images/Twitter-Icon.png" alt="twitter">
				</a>
				<a target="_blank" href="https://github.com/sonu041">
					<img src="images/Github-Icon.png" alt="github">
				</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer() ?>