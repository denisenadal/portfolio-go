<?php
$category = strip_tags($_GET['type'] );
$pageVars = array(
	'css' => array('den-work'),
	'title' => 'Spilker Custom Homes',
	'category'=>$category,
	'js'	=>array('macy','projects')
);
include('../../header.php');
?>
<main id="content-sections-wrap">
<section id="project-intro" class="container">
	<div class="flex-row outdent flex-vcenter">
		<div class="preview-image col5l col5m col4s col12x">
			<img src="spilker-branding.jpg" alt="mockup of full branding system" class="gd">
			<img src="spilker-set.jpg" alt="mockup of website on all screens" class=" uiux">

		</div>
		<div class="col7l col7m col8s col12x">
			<h1 class="project-title h1">Spilker Custom Homes</h1>
            <p class="h4 project-date gd">Site Redesign & Branding, 2016 </p>
            <p class="h4 project-date uiux">Site Redesign & Branding, 2016 </p>
			<h2 class="h3">Summary</h2>
			<p>With project partner, Drew Adams, designed and implemented a new clean and modern site targeted towards our client’s target demographic, utilizing user feedback to optimize UI/UX. </p>
			<p>Also created a new logotype design & branded business system.</p>
		</div>
	</div>
</section>
<section id="project-process" class="accent-bar">
	<div class="container clearfix">
		<div class="row outdent">
			<div class="col12x col12s col9m col8l pad1">
				<h2 class="h3 "><span class="uiux">Design</span><span class="gd">Design</span> Process</h2>
				<p  class=" ">We were on a tight deadline to complete the redesign, so I focused on creating a simple clean design that emphasized the content and services the client provides. The client had an established color scheme of blue & silver, which I used in conjunction with architectural serif fonts to create a feeling of monumental design, class, and luxurious architecture.</p>
			</div>
			<div id="spliker-process-gallery1" class="project-gallery col12x gd" data-sizes="4432">
				<figure class="project-img">
					<a href="spilkerlogo-mockups-v1.jpg">
						<img src="spilkerlogo-mockups-v1.jpg" alt="logo mockup version 1">
						<figcaption>logo mockup version 1</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="spilkerlogo-mockups-v2.jpg">
						<img src="spilkerlogo-mockups-v2.jpg" alt="logo mockup version 2">
						<figcaption>logo mockup version 2</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="spilkerlogo-mockups-v3.jpg">
						<img src="spilkerlogo-mockups-v3.jpg" alt="logo mockup version 3">
						<figcaption>logo mockup version 3</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="spilkerlogo-FINAL.jpg">
						<img src="spilkerlogo-FINAL.jpg" alt="final logo design">
						<figcaption>final logo design</figcaption>
					</a>
				</figure>

				<figure class="project-img">
					<a href="BusinessSystem-01.jpg">
						<img src="BusinessSystem-01.jpg" alt="branded letterhead">
						<figcaption>branded letterhead</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="BusinessSystem-02.jpg">
						<img src="BusinessSystem-02.jpg" alt="branded business card back">
						<figcaption>branded business card back</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="BusinessSystem-04.jpg">
						<img src="BusinessSystem-04.jpg" alt="branded business card front">
						<figcaption>branded business card front</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="BusinessSystem-05.jpg">
						<img src="BusinessSystem-05.jpg" alt="branded envelopment design">
						<figcaption>branded envelope design</figcaption>
					</a>
				</figure>
			</div>
			<div id="spilker-process-gallery2"  class="project-gallery col12x uiux" data-sizes="4432">
				<figure class="project-img">
					<a href="gallery.png">
						<img src="gallery.png" alt="Spilker gallery design">
						<figcaption>gallery design</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="spliker-about-small.png">
						<img src="spliker-about-small.png" alt="Spilker about us page design">
						<figcaption>about us design</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="spilkermockup.jpg">
						<img src="spilkermockup.jpg" alt="Spilker desktop design">
						<figcaption>desktop design</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="spilker-mobile.png">
						<img src="spilker-mobile.png" alt="Spilker mobile design">
						<figcaption>mobile design</figcaption>
					</a>
				</figure>
				<figure class="project-img">
					<a href="spliker-email.jpg">
						<img src="spliker-email.jpg" alt="Design for email campaign newsletter">
						<figcaption>email campaign newsletter</figcaption>
					</a>
				</figure>
			</div>
		</div>
	</div>
</section>
<section id="project-results" class="container">
	<div class="flex-row outdent flex-wrap flex-vcenter">
		<div class="col12x">
			<h2 class="h3">The Final <span class="uiux">Design</span><span class="gd">Design</span> </h2>
			<p class="uiux"> Spilker Custom Homes used our design for their web presence for several years, from 2016 to 2019.</p>
			<p class="gd">While the client liked the designs for the business system, they chose to continue using their original logo for branding consistency</p>
		</div>
		<div class="project-gallery col12x ">
			<figure class="project-img gd no-pad">
				<img src="spilker-branding.jpg" alt="mockup of full branding system" class="">
			</figure>
			<figure class="project-img uiux no-pad">
				<img src="spilker-set.jpg" alt="mockup of website on all screens" class="">
			</figure>
		</div>
	</div>
</section>
</main>
<?php include('../../footer.php');
