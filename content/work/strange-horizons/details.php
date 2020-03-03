<?php
$category = strip_tags($_GET['type'] );
$pageVars = array(
	'css' => array('den-work'),
	'title' => '',
	'category'=>$category,
	'js'	=>array('macy','projects')
);
include('../../header.php');
?>
<main id="content-sections-wrap">
<section id="project-intro" class="container">
	<div class="flex-row outdent flex-vcenter">
		<div class="preview-image col5l col5m col4s col12x vertical">
			<img src="strange_horizons_preview.jpg" alt="cropped view of the strange horizons redesign" >
		</div>
		<div class="col7l col7m col8s col12x">
			<h1 class="project-title h1">Strange Horizons site redesign</h1>
			<p class="h4 project-date uiux">Potential Site Design, 2016 </p>
			<p class="h4 project-date dev">Dev</p>
			<p class="h4 project-date gd">Design</p>
			<h2 class="h3">Summary</h2>
			<p>A mockup of  a potential redesign for online magazine <em>Strange Horizons</em>. It was completed as a design exercise.
</p>
		</div>
	</div>
</section>
<section id="project-process" class="accent-bar">
	<div class="container clearfix">
		<div class="row outdent">
			<div class="col12x col9s col8m col9l pad1">
				<h2 class="h3" ><span class="uiux">Design</span> Process</h2>
				<p > I wanted to create an attractive layout that was visually appealing and engaging while still focusing on the content, and was also complementary in color and style with the magazine’s sci-fi/fantasy topics.</p>
				<p>I started with penciled thumbnail sketches that were resolved into lo-fidelity mockups, and the final product is the high-fidelity mockupS in the following section</p>
				<div id="strange-process-gallery"  class="project-gallery" data-sizes="3332">
					<figure class="project-img"><figcaption>Desktop Thumbnail</figcaption> <img src="thumbs-desktop.gif" alt="Strange Horizons mockups thumbnail stage desktop version"> </figure>
					<figure class="project-img"><figcaption>Tablet Thumbnail</figcaption> <img src="thumbs-tablet.gif" alt="Strange Horizons mockups thumbnail stage tablet version"></figure>

					<figure class="project-img"><figcaption>Mobile Thumbnail</figcaption> <img src="thumbs-mobile.gif" alt="Strange Horizons mockups thumbnail stage mobile version"></figure>

					<figure class="project-img"><figcaption>Desktop Comp</figcaption> <img src="comps-desktop.jpg" alt="Strange Horizons mockups comp stage desktop version"> </figure>
					<figure class="project-img"><figcaption>Tablet Thumbnail</figcaption> <img src="comps-tablet.jpg" alt="Strange Horizons mockups comp stage tablet version"></figure>
				</div>
			</div>
			<figure class="project-img col12x col3s col4m col3l no-vpad float-right no-mobile no-tablet">
				<figcaption>Mobile Comp</figcaption> <img src="comps-mobile.jpg" alt="Strange Horizons mockups comp stage mobile version">
			</figure>
		</div>
</section>
<section id="project-results" class="container">
	<div class="flex-row outdent">
		<div class="col12x">
			<h2 class="h3">The Final <span class="uiux">Design</span> </h2>
			<div div id="strange-result-gallery"  class="project-gallery" data-sizes="3322">
				<figure class="project-img"><a href="strange_horizons_desktop.jpg"><img src="strange_horizons_desktop.jpg" alt="Strange Horizons mockups final stage desktop version"></a>  </figure>
				<figure class="project-img"><a href="strange_horizons_tablet.jpg"><img src="strange_horizons_tablet.jpg" alt="Strange Horizons mockups final stage tablet version"></a> </figure>
				<figure class="project-img"><a href="strange_horizons_mobile.jpg"><img src="strange_horizons_mobile.jpg" alt="Strange Horizons mockups  final stage mobile version"></a> </figure>
			</div>
		</div>
	</div>
</section>
</main>
<?php include('../../footer.php');
