<?php
$category = strip_tags($_GET['type'] );
$pageVars = array(
	'css' => array('den-work'),
	'title' => 'Personal Portfolio & Branding',
	'category'=>$category,
	'js'	=>array('macy','projects')
);
include('../../header.php');
?>
<main id="content-sections-wrap">
<section id="project-intro" class="container">
	<div class="flex-row outdent flex-vcenter">
		<div class="preview-image col5l col5m col4s col12x">
			<img src="personal-group.jpg" alt="personal portfolio site on various screen sizes" >
		</div>
		<div class="col7l col7m col8s col12x">
			<h1 class="project-title h1">Personal Portfolio & Branding</h1>
			<p class="h4 project-date uiux">UIUX Design, 2016 & 2018 </p>
			<p class="h4 project-date dev">Dev</p>
			<p class="h4 project-date gd">Design</p>
			<h2 class="h3">Summary</h2>
			<p>For the design of this portfolio site, I knew I wanted something bright and fun and reflective of my personality and design taste. I love bright, bold colors and designs and wanted the challenge of using them in my portfolio. This site was also a chance for me to work on crafting a clear narrative targeted towards a specific user experience. </p>
		</div>
	</div>
</section>
<section id="project-process" class="accent-bar">
	<div class="container clearfix">
		<div class="row outdent">
			<div class="col12x col12s col9m col8l pad1">
				<h2 class="h3"><span class="uiux">Design</span><span class="gd">Design</span><span class="dev">Development</span> Process</h2>
				<p  class=" uiux">I started this site by spending a few weeks sketching out ideas as thumbnails and storyboards. Once I had clear idea about what I wanted the site to look and feel like, I took it to mockups and began figuring out the details of the design. From there I built it out into code. </p>
				<p >It has undergone several iterations, first as a simple php site, then as WordPress theme, and now it's something of a hybrid.</p>
			</div>
			<div class=" col12x no-pad">
				<div id="personal-process-gallery" class="project-gallery " data-sizes="4422">
					<figure class="project-img">
						<a href="mockup-contact.jpg">
							<img src="mockup-contact.jpg" alt="Mockup of the Contact page">
							<figcaption>Mockup of the Contact page</figcaption>
						</a>
					</figure>
					<figure class="project-img">
						<a href="mockup-about.jpg">
							<img src="mockup-about.jpg" alt="Mockup of the About page">
							<figcaption>Mockup of the About page</figcaption>
						</a>
					</figure>
					<figure class="project-img">
						<a href="mockup-skills.jpg">
							<img src="mockup-skills.jpg" alt="Mockup of the skills page">
							<figcaption>Mockup of the skills page</figcaption>
						</a>
					</figure>
					<figure class="project-img">
						<a href="mockup-gallery.jpg">
							<img src="mockup-gallery.jpg" alt="mockup of the gallery page">
							<figcaption>Mockup of the gallery page</figcaption>
						</a>
					</figure>
					<figure class="project-img">
						<a href="mockup-exp01.jpg">
							<img src="mockup-exp01.jpg" alt="Mockup of work experience">
							<figcaption>Mockup of work experience</figcaption>
						</a>
					</figure>

					<figure class="project-img">
						<a href="mockup-work01.jpg">
							<img src="mockup-work01.jpg" alt="sample work page">
							<figcaption>sample work page</figcaption>
						</a>
					</figure>
					<figure class="project-img">
						<a href="mockup-work02.jpg">
							<img src="mockup-work02.jpg" alt="sample work page">
							<figcaption>sample work page</figcaption>
						</a>
					</figure>
					<figure class="project-img">
						<a href="mockup-work03.jpg">
							<img src="mockup-work03.jpg" alt="sample work page">
							<figcaption>sample work page</figcaption>
						</a>
					</figure>
					<figure class="project-img">
						<a href="mockup-work07.jpg">
							<img src="mockup-work07.jpg" alt="samepl work page">
							<figcaption>Sample Work Page</figcaption>
						</a>
					</figure>
				</div>
			</div>
		</div>
</section>
<section id="project-results" class="container">
	<div class="flex-row outdent">
		<div class="col12x col6s col5m col4l">
			<h2 class="h3">The Final <span class="uiux">Design</span><span class="gd">Design</span><span class="dev">Product</span> </h2>
			<p class="uiux">The design is a constant work in process, but has been in use in various iterations since 2016.</p>
			<p class="dev"></p>
			<p class="gd"></p>
		</div>
		<div class="col12x col6s col7m col8l">
			<div id="personal-results-gallery" class="project-gallery" data-sizes="4422">
				<figure class="project-img"> <img src="personal-hd.jpg" alt="Personal Site on HD Screens"> </figure>
				<figure class="project-img"> <img src="personal-sd.jpg" alt="Personal Site on Small Screens"> </figure>
				<figure class="project-img"> <img src="personal-tablet.jpg" alt="Personal Site on Tablet"> </figure>
				<figure class="project-img"> <img src="personal-mobile.jpg" alt="Personal Site on Mobile"> </figure>
			</div>
		</div>
	</div>
</section>
</main>
<?php include('../../footer.php');
