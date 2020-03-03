<?php
$pageVars = array(
	'css' => 'den-work',
	'title' => 'dixie.edu Tutoring Schedule App',
	'category'=>'dev'
);
include('header.php');
?>
<main id="content-sections-wrap">
<article class="container">
	<section id="project-intro" class="flex-row outdent">
		<img src="" alt="" class="col6l col5m col4s col12x">
		<div class="col6l col7m col8s col12x">
			<h1 class="project-title h1"></h1>
			<p class="h2 project-date"></p>
			<h2 class="h3">Summary</h2>
			<p>Create a single page app to make it easy for students to find tutoring sessions for their classes. The interface needed to clean, simple and mobile-friendly, and the calendar needed to be easy to update by someone of basic computer skills. The final product was built using WordPress,  javascript, jQuery and Google’s Calendar API.</p>
		</div>
	</section>
	<section id="project-process" class="flex-row outdent">
		<h2 class="h3">Process</h2>
		<p>The Tutoring Center’s previous calendar was a simple Google Calendar embed, which was easy for them to update, but difficult for users to read. We needed to keep the ease of use for the department, but make it easier for end users. To this aim, I wrote a small app using the Google Calendars javascript API client to collect the calendar data through REST, format the data and add it to the DOM. On page load, the page would display schedules for the most popular tutoring subjects,  and a navigation area with links to the other schedules. I used jQuery to handle the user interactions that allow users to sort through the different tutoring subjects and sessions.</p>
	</section>
	<section id="project-results" class="flex-row outdent">
		<h2 class="h3">The Final Product</h2>
		<p></p>
	</section>
</article>
</main>
<?php include('footer.php');
