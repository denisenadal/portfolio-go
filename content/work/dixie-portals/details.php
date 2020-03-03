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
			<img src="dsu-set2.jpg" alt="DSU homepage on varions screens" class="" >
		</div>
		<div class="col7l col7m col8s col12x">
			<h1 class="project-title h1">dixie.edu User Portals Redesign</h1>
			<p class="h4 project-date uiux">UIUX Design, Fall 2017 </p>
			<p class="h4 project-date dev">Development, Fall 2017 </p>
			<h2 class="h3">Summary</h2>
			<p>Like most university websites, the frontpage of dixie.edu is targeted towards prospective students. This leaves other user groups such as current students, faculty, staff and community members lost when trying to find content relevant to their needs. Redesigning our “portal” pages to be effective homepages or dashboards for each user group has been a critical issue and top priority for our team this year. Because the existing portal pages were the result of rushing through the design process, for this iteration we took our time to get things right. We will be rolling out the new portals one at a time from November 2017 to March 2018.
</p>
		</div>
	</div>
</section>
<section id="project-process" class="accent-bar">
	<div class="container clearfix">
		<div class="row outdent">
			<div class="col12x col7s col8m col8l pad1">
				<h2 class="h3"><span class="uiux">Design</span><span class="dev">Development</span> Process</h2>
				<div class="des">
					<p >We began this process by conducting user research. We held focus groups and user interviews to assess user sentiment about the site and learn what they considered to be their pain points. We reviewed our analytics to understand what our users were looking for and how they were finding it. </p>
					<p>After collecting a tremendous amount of raw data, I distilled it into common activities and goals for each group. After identifying the most important goals and needs for our users, we proceeded into the design phase and explored several different designs.</p>
					<p>We produced prototypes of our strongest designs and tested them with users. </p>
					<p>After testing with users we had a clear idea of what direction to go in, what was working and what needed to be improved. I proceeded with refining the visual design, and after a few more rounds of design and critique with our review committee we agreed on a final design. </p>
				</div>
				<div class="dev">
					Development process description coming soon.
				</div>
			</div>
			<div id="portal-process-gallery" class="project-gallery col12x uiux" data-sizes="4432">
				<figure class="project-img">
					<a href="hpp03-data-collection.jpg">
						<img src="hpp03-data-collection.jpg" alt="Data Collection process">
						<figcaption>All of the data collected</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="hpp04-summary-of-user-feedback.jpg">
						<img src="hpp04-summary-of-user-feedback.jpg" alt="Summary of user feedback">
						<figcaption>Summary of user feedback</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="hpp05-datasummarization.jpg">
						<img src="hpp05-datasummarization.jpg" alt="Summarizing the results">
						<figcaption>Summarizing the results</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="hpp06-usergoals.jpg">
						<img src="hpp06-usergoals.jpg" alt="Examining user goals">
						<figcaption>Examining user goals</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="hpp07-user-needs.jpg">
						<img src="hpp07-user-needs.jpg" alt="Evaluating user needs">
						<figcaption>Evaluating user needs</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="hpp08-site-strengths-weakness.jpg">
						<img src="hpp08-site-strengths-weakness.jpg" alt="Site strengths/weakness identified by users">
						<figcaption>Site strengths/weakness identified by users</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="hpp09-finalgoals.jpg">
						<img src="hpp09-finalgoals.jpg" alt="Final Goals for project">
						<figcaption>Final goals for project</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="hpp10-thumbnail-sketches.jpg">
						<img src="hpp10-thumbnail-sketches.jpg" alt="Thumnbail sketches">
						<figcaption>Thumnbail sketches</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="portal01-content.jpg">
						<img src="portal01-content.jpg" alt="Organizing content">
						<figcaption>Organizing content</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="portal03-wireframe.jpg">
						<img src="portal03-wireframe.jpg" alt="early wireframes">
						<figcaption>early wireframes</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="portals-v1-wireframes.png">
						<img src="portals-v1-wireframes.png" alt="more detailed  wireframes">
						<figcaption>detailed wireframes</figcaption>
					</a>
				</figure>
			</div>
		</div>
	</div>
</section>
<section id="project-results" class="container top-margin4" >
	<h2 class="h3">The Final <span class="uiux">Design</span><span class="dev">Product</span> </h2>
	<div id="portal-results-gallery" class="project-gallery col12x" data-sizes="4432">
		<div class="display-block">
			<a href="http://students.dixie.edu" class="btn top-margin2 right-margin2 bottom-margin2 display-block">Student Portal</a>
			<a href="http://employees.dixie.edu" class="btn top-margin2 right-margin2 bottom-margin2 display-block">Employee Portal</a>
			<a href="http://alumni.dixie.edu" class="btn top-margin2 right-margin2 bottom-margin2 display-block">Alumni Portal</a>
</div>
		<figure class="project-img">
			<a href="alumniPortalFinal.jpg">
				<img src="alumniPortalFinal.jpg" alt="Desktop view of alumni portal">
				<figcaption>Desktop view of alumni portal</figcaption>
			</a>
		</figure>
		<figure class="project-img">
			<a href="students-portalFINAL.jpg">
				<img src="students-portalFINAL.jpg" alt="Desktop view of student portal">
				<figcaption>Desktop view of student portal</figcaption>
			</a>
		</figure>
		<figure class="project-img">
			<a href="employees-final.jpg">
				<img src="employees-final.jpg" alt="Desktop view of employee portal">
				<figcaption>Desktop view of employee portal</figcaption>
			</a>
		</figure>
	</div>
</section>

</main>
<?php include('../../footer.php');
