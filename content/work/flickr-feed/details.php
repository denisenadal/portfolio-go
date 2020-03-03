<?php
$category = strip_tags($_GET['type'] );
$pageVars = array(
	'css' => array('den-work'),
	'title' => 'flickr feed API project',
	'category'=>$category,
	'js'	=>array('macy','projects','projects/flickr')
);
include('../../header.php');
?>
<main id="content-sections-wrap">
<section id="project-intro" class="container">
	<div class="flex-row outdent flex-vcenter">
		<div class=" preview-image col5l col5m col4s col12x vertical">
			<img src="flickrfeed-desktop-default.png" alt="flickr feed api project defaul landing page" class="">
		</div>
		<div class="col7l col7m col8s col12x">
			<h1 class="project-title h1">flickr feed API project</h1>
			<p class="h4 project-date uiux">UI Design, March 2018 </p>
			<p class="h4 project-date dev">Dev, March 2018</p>
			<p class="h4 project-date gd">Design</p>
			<h2 class="h3">Summary</h2>
			<p>A simple Node/Express web app that allows users to search for images uploaded to flickr, and view those images either as a webpage or as raw json data.</p>

			<p>It allows users to search through flickr's database of images. Users can search for images by topic, or browse latest images. The results for either can be view in the app, or viewed as raw JSON. It's loosely based on freecodecamp's <a href="https://www.freecodecamp.org/challenges/image-search-abstraction-layer ">Image Abstraction Layer</a> project.</p>
		</div>
	</div>
</section>
<section id="project-process" class="accent-bar">
	<div class="container clearfix">
		<div class="row outdent">
			<h2 class="h3 col12x no-vpad float-left"><span class="uiux">Design</span><span class="gd">Design</span><span class="dev">Development</span> Process</h2>
			<p  class="col12x col9s col8m col6l no-vpad  uiux">This was project I did for fun & self-learning in my feel time, so I didn’t have any formal or structured design process for this. I focused on creating a fun and visually exciting interface that still puts the content at the center of attention.</p>
			<div  class="col12x col9s col8m col6l no-vpad  dev">
				<p>I’ve been working my way through freecodecamp’s “Front End Dev” projects to keep my node.js fresh since I primarily use Wordpress on a LAMP stack at work. Fow this assignment, the project was fairly basic, create service to allow users to search through images and receive indexed page results back as JSON. </p>
				<p>I decided to make it more challenging and interesting by working with Flickr’s API to use their database of images, and create a web interface for the search API service I was building. I also used handlebars.js to handle templating for the  search results. My version of the project allows users to search for images posted to flickr by keyword, or get a list of recent images, and the results can be view either as html or JSON.</p>
			</div>
		</div>
</section>
<section id="project-results" class="container">
	<div class="flex-row outdent flex-wrap">
		<div class="col12x col7s col8m col8l">
			<h2 class="h3">The Final <span class="uiux">Design</span><span class="gd">Design</span><span class="dev">Product</span> </h2>
			<p >The final version is a demo hosted on glitch.</p>
		</div>
		<div class="col12x col5s col4m col4l">
			<a href="https://flickrfeed.glitch.me/" class="btn center-text display-block top-margin2">Visit the live version</a>
		</div>
		<div class="col12x pad1">
			<div id="flickr-results-gallery" class="project-gallery" data-sizes="3332">
				<figure class="project-img"><a href="flickrfeed-desktop-default.png"><img src="flickrfeed-desktop-default.png" alt="flickr feed api project defaul landing page" class=""><figcaption>Desktop Latest Results</figcaption></a> </figure>
				<figure class="project-img"><a href="flickrfeed-desktop-searchresults.png"><img src="flickrfeed-desktop-searchresults.png" alt="flickr feed api project search results page" class=""><figcaption>Desktop Search Results</figcaption></a> </figure>
				<figure class="project-img"><a href="flickrfeed-mobile.png"><img src="flickrfeed-mobile.png" alt="flickr feed api project viewed on mobile screen" class=""><figcaption>Mobile Version</figcaption></a> </figure>
			</div>
		</div>
	</div>
</section>
</main>
<?php include('../../footer.php');
