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
            <div class="preview-image col5l col5m col4s col12x">
                <img src="summary-cover.png"
                 alt="Design exploration for job and customer screens in the Pointman App">
            </div>
            <div class="col7l col7m col8s col12x">
                <h1 class="project-title h1">Customer Search & Job Scheduling Experience </h1>
                <p class="h4 project-date uiux">UI/UX Design <br>Fall 2018 - Fall 2019</p>
                <p class="h4 project-date dev">Dev</p>
                <p class="h4 project-date gd">Design</p>
                <h2 class="h3">Summary</h2>
                <p>A project that was ongoing from Sept 2018 to Nov 2019. The design was completed in several stages as
                    it was started and shelved several times before the product was finally retired in December 2019.
                </p>
            </div>
        </div>
    </section>
    <section id="project-overview"
             class="accent-bar">
        <div class="container clearfix">
            <div class="row outdent">
                <h2 class="h3 col12x pad1">Project Overview</h2>
                <div id="pm-workflows-presentation-gallery"
                     class="col12x project-gallery "
                     data-sizes="4422">
                    <figure class="project-img">
                        <a href="cover-01.png"><img src="cover-01.png"
                                 alt="presentation asset"></a>
                    </figure>
                    <figure class="project-img">
                        <a href="cover-02.png"><img src="cover-02.png"
                                 alt="presentation asset"></a>
                    </figure>
                    <figure class="project-img">
                        <a href="cover-03.png"><img src="cover-03.png"
                                 alt="presentation asset"></a>
                    </figure>
                    <figure class="project-img">
                        <a href="cover-04.png"><img src="cover-04.png"
                                 alt="presentation asset"></a>
                    </figure>
                </div>
            </div>
    </section>
    <section id="project-process"
             class="">
        <div class="container clearfix top-margin4">
            <div class="row outdent">
                <h2 class="h3 col12x no-vpad float-left"><span class="uiux">Design</span><span
                          class="gd">Design</span><span class="dev">Development</span> Process</h2>
                <div class="col12x col12s col8m col8l no-vpad  float-left uiux">
                    <p>
                        One of the most frequent complaints about the Pointman app was that it was difficult to view
                        information about customers and jobs, because the information was spread out across several
                        screen.
                    </p>
                    <p>
                        Between projects, I took to the initiative to start exploring screen layouts to show all  relevant information on one screen. I started with really basic information design, based on the common workflow for a Customer Service Rep scheduling a new job for their organization.
                    </p>
                    <p>
                        Although the designs received positive feedback from stakeholders, they were tabled until Engineering had capacity to take on the project.
                    </p>
                    <p>
                        Some time later, improving the user experience with Pointman became a company objective, and this  project because the focus on the Product and Engineering Teams. During this round, I dived deep into exploring the customer journey and tested my designs against several key workflows. With guidance from the Product Director we were able to come up with a fresh modern design that made it easy to complete common tasks.
                    </p>
                    <p>
                        Unfortunately, after completing the designs, the timeline to deliver the final project wasn't
                        acceptable to the Strategy Team, and we pivoted to a new project.
                    </p>
                </div>
                <figure class="project-img col12x col3s col4m col4l  float-right no-mobile no-tablet">
                    <a href="summary-drafts.jpg"><img src="summary-drafts.jpg"
                             alt="early paper prototypes"></a>
                    <figcaption>early paper prototypes & information architecture</figcaption>
                </figure>
                <div class="row clear pad1">
                    <div id="customer-summary-process-gallery"
                         class="project-gallery "
                         data-sizes="4432">
                        <figure class="project-img">
                            <a href="v1contact.png"><img src="v1contact.png"
                                     alt="version 1 contact summary"></a>
                            <figcaption>trying to apply the new contact page layout to existing design patterns
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v1property2.png"><img src="v1property2.png"
                                     alt="version 1 property summary"></a>
                            <figcaption>trying to apply the new property page layout to existing design patterns
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v2contact-alt.png"><img src="v2contact-alt.png"
                                     alt="a more radical design variant"></a>
                            <figcaption>I was dissatisfied with the existing design patterns, and explored some
                                alternatives</figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v3contact-wires.png"><img src="v3contact-wires.png"
                                     alt="version 3 wireframe"></a>
                            <figcaption>After being stalled, we re-approached the project and tried to simplify the
                                design some more.</figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v3workflow-wires.png"><img src="v3workflow-wires.png"
                                     alt="diagramming all the workflows"></a>
                            <figcaption>diagramming all the workflows</figcaption>
                        </figure>
                        <p class="caption-quote">
                            <span></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="project-scenarios"
             class="accent-bar">
        <div class="container clearfix">
            <div class="row outdent">
                <div class=" col12x col6s col4m col3l pad1">
                    <figure class="project-img">
                        <a href="v04scenario-0.png"><img src="v04scenario-0.png"
                                 alt="cover image for scenario"></a>
                    </figure>
                </div>
                <div class="col12x col6s col8m col9l pad1">
                    <h2 class="h3 no-vpad">Specific Scenario</h2>
                    <p>
                        Part of validating this design and workflow was running it through several common and uncommon
                        scenarios. For this example, we follow the workflow of a Customer Service Rep responding to a
                        call from a Landlord asking for information about a recent job completed at a tenant's house.
                    </p>
                </div>
                <div id="pm-workflows-scenario-gallery"
                     class="project-gallery col12x"
                     data-sizes="5332">
                    <figure class="project-img">
                        <a href="v04scenario-01.png"><img src="v04scenario-01.png"
                                 alt="scenario step 1"></a>
                        <figcaption>She starts by looking up the landlord</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04scenario-03.png"><img src="v04scenario-03.png"
                                 alt="scenario step 2"></a>
                        <figcaption>After selecting the landlord, she see's his info. She can select the rental property
                            from the properties section.</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04scenario-02.png"><img src="v04scenario-02.png"
                                 alt="scenario step 3"></a>
                        <figcaption> After selecting the correct rental property, she can select the correct past job.
                        </figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04scenario-04.png"><img src="v04scenario-04.png"
                                 alt="scenario step 4"></a>
                        <figcaption>She can view the details of the job</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04scenario-05.png"><img src="v04scenario-05.png"
                                 alt="scenario step 5"></a>
                        <figcaption>She can dig into the invoice as well</figcaption>
                    </figure>
                </div>
            </div>
    </section>
    <section id="project-components">
        <div class="container clearfix top-margin4">
            <div class="row outdent">
                <h2 class="h3 left-margin">Early Component Design</h2>
                <div class="col12x col4s col4m col4l pad1">
                    <p class="no-margin">
                        After validating the design against our use cases, I created several early wire-frame designs of
                        the various visual/interactive components that would be required, to discuss the project
                        feasibility with Engineering.
                    </p>
                    <figure class="project-img top-margin2">
                        <a href="v03workflow-wires.png"><img src="v03workflow-wires.png"
                                 alt="version 2 wireframes"></a>
                        <figcaption>version 2 wireframes</figcaption>
                    </figure>
                </div>
                <div id="pm-workflows-process-gallery"
                     class=" col12x col8s col8m col8l project-gallery"
                     data-sizes="3322">

                    <figure class="project-img">
                        <a href="v04-bits01.png"><img src="v04-bits01.png"
                                 alt="component designs for engineering"></a>
                        <figcaption>component designs for engineering</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04-bits02.png"><img src="v04-bits02.png"
                                 alt="component designs for engineering"></a>
                        <figcaption>component designs for engineering</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04-bits03.png"><img src="v04-bits03.png"
                                 alt="component designs for engineering"></a>
                        <figcaption>component designs for engineering</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04-bits04.png"><img src="v04-bits04.png"
                                 alt="component designs for engineering"></a>
                        <figcaption>component designs for engineering</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04-bits05.png"><img src="v04-bits05.png"
                                 alt="component designs for engineering"></a>
                        <figcaption>component designs for engineering</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="v04-bits06.png"><img src="v04-bits06.png"
                                 alt="component designs for engineering"></a>
                        <figcaption>component designs for engineering</figcaption>
                    </figure>
                </div>
            </div>
    </section>
    <section id="project-results"
             class="accent-bar">
        <div class="container">
            <div class="flex-row outdent">
                <div class="col12x col8s col8m col9l">
                    <h2 class="h3">The Final <span class="uiux">Design</span><span class="gd">Design</span><span
                              class="dev">Product</span> </h2>
                    <p class="uiux"> The final design was presented and approved by all the stakeholders involved, but
                        was
                        never put into production due to limited resources and shifting company priorities.</p>
                    <p>In hindsight, I wished that I fought harder to keep this project moving, but it's a lesson
                        learned
                        for the future.</p>
                    <p class="dev"></p>
                    <p class="gd"></p>
                    <div id="customer-summary-results-gallery"
                         class="project-gallery side-outdent top-margin"
                         data-sizes="3321">
                        <figure class="project-img">
                            <a href="v4-contact-tablet.png"><img src="v4-contact-tablet.png"
                                     alt="the final contact page design"></a>
                            <figcaption>the contact page design, tablet size</figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v4jobdone-tablet.png"> <img src="v4jobdone-tablet.png"
                                     alt="a closed out job screen, tablet sized"></a>
                            <figcaption>a closed out job screen, tablet sized</figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v4jobprog-desktop.png"><img src="v4jobprog-desktop.png"
                                     alt="an in progress job at desktop size"></a>
                            <figcaption>an in progress job at desktop size</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col12x col4s col4m col3l project-gallery">
                    <figure class="project-img">
                        <a href="v4job-mobile.png"><img src="v4job-mobile.png"
                                 alt="diagramming all the workflows"></a>
                        <figcaption>the job screen on a mobile device</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('../../footer.php');