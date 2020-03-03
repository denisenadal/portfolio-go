<?php
$category = strip_tags($_GET['type'] );
$pageVars = array(
	'css' => array('den-work'),
	'title' => 'dixie.edu Tutoring Schedule App',
	'category'=>$category,
	'js'	=>array('macy','projects','projects/tutoring')
);
include('../../header.php');
?>
<main id="content-sections-wrap">
<section id="project-intro" class="container">
	<div class="flex-row outdent flex-vcenter">
		<div class="preview-image col5l col5m col4s col12x ">
			<img src="tutoring-cropped.png" alt="cropped view of the tutoring calendar/schedule page" class="vertical">
		</div>
		<div class="col7l col7m col8s col12x">
			<h1 class="project-title h1">dixie.edu Tutoring Schedule App</h1>
			<p class="h4 project-date uiux">UI Design, January 2017</p>
			<p class="h4 project-date dev">JS App Dev, January 2017</p>
			<h2 class="h3">Summary</h2>
			<p>Create a single page app to make it easy for students to find tutoring sessions for their classes. The interface needed to clean, simple and mobile-friendly, and the calendar needed to be easy to update by someone of basic computer skills. The final product was built using WordPress,  javascript, jQuery and Google’s Calendar API.</p>
		</div>
	</div>
</section>
<section id="project-process" class="accent-bar">
	<div class="container clearfix">
		<div class="row outdent">
			<h2 class="h3 col12x no-vpad float-left"><span class="uiux">Design</span><span class="dev">Development</span> Process</h2>
			<p  class="col12x col12s col8m col6l no-vpad  float-left uiux">I began this project by sketching several ideas and taking the best two to mockups. During the process of designing the mockups a clear front-runner emerged, but I verified my conclusion by requesting feedback from other members of the team. Once we agreed on a design, I built out a quick HTML/CSS wireframe for the frontend, build out the javascript-based event handling, and refined the CSS.</p>
			<p  class="col12x col12s col8m col6l no-vpad  float-left dev">The Tutoring Center’s previous calendar was a simple Google Calendar embed, which was easy for them to update, but difficult for users to read. We needed to keep the ease of use for the department, but make it easier for end users. To this aim, I wrote a small app using the Google Calendars javascript API client to collect the calendar data through REST, format the data and add it to the DOM. On page load, the page would display schedules for the most popular tutoring subjects,  and a navigation area with links to the other schedules. I used jQuery to handle the user interactions that allow users to sort through the different tutoring subjects and sessions.</>
			<figure class="project-img col12x col3s col4m col4l no-vpad float-right no-mobile no-tablet">
				<img src="tutoring-04.png" alt="Mobile Mockup version 2" >
			</figure>
			<div class="clear-left col12x col12s col8m col6l">
				<div id="tutoring-process-gallery" class="project-gallery " data-sizes="3322">
					<figure class="project-img">
						<img src="tutoring-01.png" alt="Desktop Mockup version 1">
					</figure>
					<figure class="project-img">
						<img src="tutoring-02.png" alt="Desktop Mockup version 2" >
					</figure>
					<figure class="project-img">
						<img src="tutoring-03.png" alt="Mobile Mockup version 1" >
					</figure>
					<p class="caption-quote">
						<span>Various mockups exploring different ways of conveying the same meaning</span>
					</p>
				</div>
			</div>
		</div>
</section>
<section id="project-results" class="container">
	<div class="flex-row outdent">
		<div class="col12x col6s col5m col4l">
			<h2 class="h3">The Final <span class="uiux">Design</span><span class="dev">Product</span> </h2>
			<p class="uiux">The final design combined the most successful aspects of different designs. The color scheme was muted and refined to match our company's branding.</p>
			<p class="dev">This calendar has been easy for our client, the Academic Performance & Tutoring Center, to use.</p>
			<p>It has been in use since its launch in early 2017.</p>
			<a href="https://tutoring.dixie.edu/tutoring-schedule/" class="btn center-text display-block">Visit the live version</a>
		</div>
		<div class="col12x col6s col7m col8l">
			<div id="tutoring-results-gallery" class="project-gallery" data-sizes="2222">
				<figure class="project-img">
					<img src="tutoring-desktop.png" alt="Desktop version"></figure>
				<figure class="project-img">
					<img src="tutoring-mobile.png" alt="Mobile version "></figure>
			</div>
		</div>
	</div>
</section>
</main>
<?php include('../../footer.php');
