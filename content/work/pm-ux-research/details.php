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
    <section id="project-intro"
             class="container">
        <div class="flex-row outdent flex-vcenter">
            <div class="preview-images col5l col5m col4s col12x ">
                <img src="system-map.jpg"
                 alt="early draft at mapping the lifecycle of an HVAC service job ">
            </div>
            <div class="col7l col7m col8s col12x">
                <h1 class="project-title h1">A Day in the Life</h1>
                <p class="h4 project-date uiux">UX Research<br>Fall 2019 </p>
                <h2 class="h3">Summary</h2>
                <p>UX research into what it's like to be an owner or employee of a HVAC business. Includes personas,
                    user interviews, user experience maps, industry research and diagraming workflows.</p>
            </div>
        </div>
    </section>
    <section id="project-process"
             class="accent-bar">
        <div class="container clearfix">
            <div class="row outdent">
                <div class="col12x col12s col6m col7l col7xl">
                    <h2 class="h3 no-margin">Design Process</h2>
                    <p class="">
                        I spearheaded this project after our new Product Director challenged the UX Team to test our assumptions about how our users really do their jobs. Up until this point, we accepted the longstanding assumptions that our organization has built up through the years about what a "job" should look like and what dispatchers and technicians "should" do.
                    </p>
                    <p>
                        We started this process by interviewing a former HVAC technician and our business coach, who was a general manager for plumbing and HVAC companies. During the interview process we made several discoveries that changed our entire perception of what a "job" was. 
                    </p>
                    <!-- <p>Out system was built assuming all jobs are roughly similar: a customer calls, a visit is scheduled, the technician comes and does the work. Through our interviews, we learned that this is only true for basic repair and service jobs. Larger repairs and installs can span multiple days, and many jobs start as a quote that later converts to a "job." In this scenario, a customer calls, the visit is scheduled, the technican who specializes in sales goes out and gives a quote for work. The customer may or may not agree to proceed. If they do, another visit is scheduled with a different technician who specializes in installs. Because our system treated all these scenarios the same, it caused many points of friction for users.</p> -->
                    <p>Through those interviews, and discussions with technicians at HVAC conferences, we learned about the kind of people who gravitate towards this work, and combining this insight with industry research, I was able to build personas for our 4 basic user groups: owners, dispatchers, customer service reps, and technicians.</p>
                    <p>
                        By building out these detailed personas based on real data rather that anecdotal evidence, it became easier to focus in on the right workflows and solutions. All the insights we gained as a Product & UX Team through this process later informed the best design work we had done as a team.
                    </p>
                </div>
                <div class="col12x col12s col6m col5l col5xl side-outdent top-margin4">
                    <div id="pmresearch-gallery1"
                         class="project-gallery  side-outdent"
                         data-sizes="2221">
                        <figure class="project-img  ">
                            <a href="donna-lister-DIS.png"><img src="donna-lister-DIS.png"
                                     alt="one of our 4 basic personas"></a>
                            <figcaption>one of our 4 basic personas</figcaption>
                        </figure>
                        <figure class="project-img  ">
                            <a href="cassie-booker-CSR.png"><img src="cassie-booker-CSR.png"
                                     alt="one of our 4 basic personas"></a>
                            <figcaption>one of our 4 basic personas</figcaption>
                        </figure>

                    </div>
                </div>
                <div class="col12x">
                    <div id="pmresearch-gallery2"
                         class="project-gallery outdent"
                         data-sizes="4432">
                        <figure class="project-img  ">
                            <a href="owner-workflow.jpg"><img src="owner-workflow.jpg"
                                     alt="owner's day map"></a>
                            <figcaption>a loose estimate of an owner's day</figcaption>
                        </figure>
                        <figure class="project-img  ">
                            <a href="csr-workflow.jpg"><img src="csr-workflow.jpg"
                                     alt="CSR's experience map"></a>
                            <figcaption>a map of a customer service rep.'s day</figcaption>
                        </figure>
                        <figure class="project-img  ">
                            <a href="dispatch-workflow.jpg"><img src="dispatch-workflow.jpg"
                                     alt="Dispatchers's experience map"></a>
                            <figcaption>a map of a dispatcher's day</figcaption>
                        </figure>
                        <figure class="project-img  ">
                            <a href="job-mental-map.jpg"><img src="job-mental-map.jpg"
                                     alt="breaking down a job into its basic parts"></a>
                            <figcaption>breaking down a job into its basic parts</figcaption>
                        </figure>
                        <figure class="project-img  ">
                            <a href="tech-workflow.jpg"><img src="tech-workflow.jpg"
                                     alt="technician experience for working a job"></a>
                            <figcaption>technician's workflow for working a job</figcaption>
                        </figure>
                        <figure class="project-img  ">
                            <a href="job-diagrams.jpg"><img src="job-diagrams.jpg"
                                     alt="Diagramming the variant's of jobs"></a>
                            <figcaption>diagramming the entry and exit points for different types of jobs</figcaption>
                        </figure>
                        <figure class="project-img  ">
                            <a href="newjob-workflow.jpg"><img src="newjob-workflow.jpg"
                                     alt="the essential workflow"></a>
                            <figcaption>the essential workflow</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('../../footer.php');