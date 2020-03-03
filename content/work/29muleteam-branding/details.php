<?php
$category = strip_tags($_GET['type'] );
$pageVars = array(
	'css' => array('den-work'),
	'title' => '29 Mule Borax Branding Project',
	'category'=>$category,
	'js'	=>array('macy','projects','projects/29mule')
);
include('../../header.php');
?>
<main id="content-sections-wrap">
<section id="project-intro" class="container">
	<div class="flex-row outdent flex-vcenter">
		<div class="preview-image col5l col5m col4s col12x ">
			<img src="29muleteam-mockup.jpg" alt="29 Mule Borax Branding System Mockup" class="">
		</div>
		<div class="col7l col7m col8s col12x">
			<h1 class="project-title h1">29 Mule Borax Branding Project</h1>
			<p class="h4 project-date gd">Branding Design, 2015</p>
			<h2 class="h3">Summary</h2>
			<p>As a design exercise, I created a branded business system for one of my favorite cleaning products.</p>
		</div>
	</div>
</section>
<section id="project-process" class="accent-bar">
	<div class="container clearfix">
		<div class="row outdent">
			<div class="col12x col9s col8m col6l no-vpad  ">
				<h2 class="h3 "><span class="gd">Design</span> Process</h2>
				<p  class="gd">I wanted to create a bold design that captured some of the "Old West" nostaglia of the 29 Mule story and frontier mining, while also being modern and forward-thinking.</p>
				<p class="gd">I began this project with pencil thumbnails for ideas of a logo a design elements. After developing a logo and color palette, I designed the various business products.</p>
			</div>
			<div id="mule-process-gallery" class="col12x project-gallery" data-sizes="3332">
				<figure class="project-img">
					<a href="BusinessSystem_businessCardBack.jpg">
						<img src="BusinessSystem_businessCardBack.jpg" alt="Business Card Back">
						<figcaption>Business Card Back</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="BusinessSystem_businessCardFront.jpg">
						<img src="BusinessSystem_businessCardFront.jpg" alt="Business Card Front">
						<figcaption>Business Card Front</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="business-system_letterhead.jpg">
						<img src="business-system_letterhead.jpg" alt="Letterhead">
						<figcaption>Letterhead</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="BusinessSystem_envelopBack.jpg">
						<img src="BusinessSystem_envelopBack.jpg" alt="Envelope Back">
						<figcaption>Envelope Back</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="BusinessSystem_envelopeFront.jpg">
						<img src="BusinessSystem_envelopeFront.jpg" alt="Envelope Front">
						<figcaption>Envelope Front</figcaption>
					</a>
				</figure>
			</div>
		</div>
</section>

</main>
<?php include('../../footer.php');
