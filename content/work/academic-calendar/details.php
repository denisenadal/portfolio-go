<?php
$category = strip_tags($_GET['type'] );
$pageVars = array(
	'css' => array('den-work'),
	'title' => 'Academic Calendar App',
	'category'=>$category,
	'js'	=>array('macy','projects','projects/academic-calendar')
);
include('../../header.php');
?>
<main id="content-sections-wrap">
<section id="project-intro" class="container">
	<div class="flex-row outdent flex-vcenter">
		<div class="preview-image col5l col5m col4s col12x ">
			<img src="ac-ipad.jpg" alt="Academic Calendar v1 on an ipad" class="vertical" style="border:none;">
		</div>
		<div class="col7l col7m col8s col12x">
			<h1 class="project-title h1">Academic Calendar App</h1>
			<p class="h4 project-date uiux">UIUX Design, Summer 2017 to Spring 2018</p>
			<p class="h4 project-date dev">Development, Summer 2017 to Spring 2018</p>
			<h2 class="h3">Summary</h2>
			<p>A single page app used to display information about important dates at Dixie State University. It's been designed to be easily to search and sort through events. Interaction design and development by myself, and visual design by myself and fellow designer, David Hulet.</p>
		</div>
	</div>
</section>
<section id="project-process" class="accent-bar">
	<div class="container clearfix">
		<div class="row outdent">
			<div class="col12x col7s col8m col8l   ">
				<h2 class="h3 "><span class="uiux dev">Design & Development Process</h2>
				<p  class="uiux dev">The Academic Calendar has been a pain point for our university since we migrated our site into a new CMS. The previous version had calendaring logic built into the same code as rendered the calendar - the dates did not exist outside of the page and was a security risk.</p>

				<p>We had to meet several design and technical considerations. First, we needed to develop a system that would be easy for Registration staff to update annually without anyone needed to hand-type dates, or risk unauthorized editing. Second, we needed it to be easy to read for students in a hurry, but also similar enough to the old calendar to feel familiar to users who spent 10 years with the previous version. Thirdly, it needed to be flexible enough to look great on desktops, mobile devices and print well.</p>

				<p>After several rounds of brainstorming David and I agreed that the calendar should allow users to view a full calendar and use a filtering system to find specific dates, view  a specific semester, or alternate between block or semester schedules. After planning out the functionality together, David designed the visual interface for the first iteration, and I focused on coding out the filtering system and finding a solution for the calendar source. </p>

				<p>The filtering system was surprisingly simple to code out. When the dates are added to the DOM, each date element gets descriptive classes added. For instance, the first day of classes for Fall 2017 would have the classes “fall 2017 cb coursework semester” added. We then can filter events by year, semester (spring/fall), semester type (semester or block), category (classwork), or specific event (cb = ‘classwork begins’), by simply hiding all events that don’t have the classes we’re looking for. </p>

				<p>In spring 2018 I revisited this project to implement stage 2, which allows the user to select which semester they would like to view dates for. Since this drastically changed the way the calendar functioned, I retouched the design to better integrate the new features.</p>
			</div>
			<div class="col12x col5s col4m col4l  ">
				<!-- <a href="color_palettes.png"><img src="color_palettes.png" alt="" class="no-mobile">Color Palette Standard I developed as part of the this project.</a> -->
			</div>

		</div>
</section>
<section id="project-results" class="container top-margin4" >
	<h2 class="h3">The Final <span class="uiux">Design</span><span class="gd">Design</span><span class="dev">Product</span> </h2>
	<div id="ac-results-gallery" class="project-gallery col12x" data-sizes="4422">
		<figure class="project-img">
			<a href="ac-desktop03.PNG">
				<img src="ac-desktop03.PNG" alt="Desktop view of version 2">
				<figcaption>Desktop view of version 2's home page</figcaption>
			</a>
		</figure>
		<figure class="project-img">
			<a href="ac-desktop-filtered.png">
				<img src="ac-desktop-filtered.png" alt="Desktop view of version 2's filtered results page">
				<figcaption>Desktop view of version 2's filtered results page</figcaption>
			</a>
		</figure>
		<figure class="project-img">
			<a href="ac-small01.PNG">
				<img src="ac-small01.PNG" alt="Smaller view of version 2">
				<figcaption>Smaller view of version 2</figcaption>
			</a>
		</figure>
		<figure class="project-img">
			<a href="ac-mobile01.PNG">
				<img src="ac-mobile01.PNG" alt="Mobile view of version 2">
				<figcaption>Mobile view of version 2</figcaption>
			</a>
		</figure>
		<div >
			<a href="http://academics.dixie.edu/academic-calendar" class="btn top-margin3 left-margin bottom-margin3">Visit live page</a>
		</div
	</div>
</section>

</main>
<?php include('../../footer.php');
