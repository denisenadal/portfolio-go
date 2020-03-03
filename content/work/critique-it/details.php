<?php
$category = strip_tags($_GET['type'] );
$pageVars = array(
	'css' => array('den-work'),
	'title' => 'CritiqueIt Web App',
	'category'=>$category,
	'js'	=>array('macy','projects')
);
include('../../header.php');
?>
<main id="content-sections-wrap">
<section id="project-intro" class="container">
	<div class="flex-row outdent flex-vcenter">
		<div class="preview-image col5l col5m col4s col12x ">
			<img src="critiqueit-mockup.jpg" alt="CritiqueIt App on iMac screen" class="" style="border:none;">
		</div>
		<div class="col7l col7m col8s col12x">
			<h1 class="project-title h1">CritiqueIt Web App</h1>
			<p class="h4 project-date uiux">UIUX Design, Fall 2017 </p>
			<p class="h4 project-date dev">Development, Fall 2017 </p>
			<h2 class="h3">Summary</h2>
			<p>My first MEAN stack project, completed as a design & development exercise. Its a prototype for a social networking site targeted towards artists and designers desiring feedback and constructive critique.</p>
		</div>
	</div>
</section>
<section id="project-process" class="accent-bar">
	<div class="container clearfix">
		<div class="row outdent uiux">
			<div class="col12x col7s col8m col8l   ">
				<h2 class="h3"><span class="uiux">Design</span> Process</h2>
				<p >For the design, I started with some simple pencil sketches of screens and user flows. Once I felt I understood how user's should interact with the site and what information needed to be displayed, I started designing as I coded. </p>
			</div>
			<figure class="col12x col5s col4m col4l  ">
				<a href="wireframes.jpg"><img src="wireframes.jpg" alt="Photo of my original sketches" > <figcaption>Original Sketches</figcaption> </a>
			</figure>
		</div>
	</div>
</section>
<section id="project-results" class="container top-margin4" >
	<h2 class="h3 pad1">The Final <span class="uiux">Design</span><span class="gd">Design</span><span class="dev">Product</span> </h2>
	<div id="critiqueit-results-gallery" class="project-gallery col12x" data-sizes="3332">
		<figure class="project-img">
			<a href="critiqueit01.PNG">
				<img src="critiqueit01.PNG" alt="Desktop view of onboarding screen">
				<figcaption>Desktop view of onboarding screen</figcaption>
			</a>
		</figure>
		<figure class="project-img">
			<a href="critiqueit02.jpg">
				<img src="critiqueit02.jpg" alt="Desktop view of an artist's profile page">
				<figcaption>Desktop view of onboarding screen</figcaption>
			</a>
		</figure>
		<div >
			<a href="http://critique-it.herokuapp.com/#/" class="btn top-margin3 left-margin bottom-margin3 display-inline-block">Visit live version</a>
		</div
	</div>
</section>

</main>
<?php include('../../footer.php');
