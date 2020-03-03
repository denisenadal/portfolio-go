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
                <img src="iq-cover.png"
                 alt="quote presentation design">
            </div>
            <div class="col7l col7m col8s col12x">
                <h1 class="project-title h1">Job Quote & Invoicing System </h1>
                <p class="h4 project-date uiux">UI/UX Design <br>Summer 2018 - Winter 2018</p>
                <h2 class="h3">Summary</h2>
                <p>Designing a new way for technicians to build customizable invoices & quotes in the field.</p>
            </div>
        </div>
    </section>
    <section id="project-process"
             class="accent-bar">
        <div class="container clearfix">
            <div class="row outdent">
                <h2 class="h3 col12x no-vpad float-left">Design Process</h2>
                <div class="col12x col12s col8m col8l no-vpad  float-left uiux">
                    <p> This project was one of first two major projects that the UX Team undertook after joining the
                        Engineering Team in 2018. We started this project in late summer but struggled to form consensus
                        amongst the design team on the best solution; I knew there had to be a better way to make
                        decisions than spending days in a room arguing about details. The difficulties we encountered
                        with our own design processes on these projects was what inspired me to learn more about modern
                        product design.
                    </p>
                    <p>
                        We started this project by getting a list of "requirements" (user requests) from our Customer
                        Success team. Our subject matter expert's in house spend some time walking us through how they believed the users
                        completed this task and how they should do it. We didn't have a robust (or any) user research
                        processes at the time, so we had to take our SME's word for it.
                    </p>
                    <p>
                        Two of the three engineers who doubled as designers, myself included, spend several weeks
                        ideating on what this process could look like. We spend a lot of time building our very detailed
                        prototypes before ever talking to any customers.
                    </p>
                    <p>It took us a very long time to come to any decisions about which designs to test with users, and
                        testing consisted of walking users through our prototypes over a Zoom call, so our results
                        weren't reliable.</p>
                    <p>When it came time to move forward and start scoping our the development work, we realized that we
                        had scope-creeped this project to oblivion. The amount of time required to build the project was
                        too large for our company to invest in.</p>
                    <p>This was the first of many projects that were tabled due to scoping issues, which is how I
                        learned the importance of product managers and lean practices.</p>
                    <p> The design process for this was a major learning experience, and some of our best design work
                        came out of this project.
                    </p>
                </div>
                <div class="project-gallery col12x col3s col4m col4l  float-right no-mobile no-tablet">
                    <figure class="project-img">
                        <a href="IQcover.png"><img src="IQcover.png"
                                 alt="overview of all screens"></a>
                        <figcaption>overview of all screens</figcaption>
                    </figure>
                    <figure class="project-img  top-margin2">
                        <a href="iq-cover.png"><img src="iq-cover.png"
                                 alt="quote selection screen"></a>
                        <figcaption>quote selection screen</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section id="project-results"
             class="container">
        <div class="flex-row outdent">
            <div class="col12x col8s col8m col9l">
                <h2 class="h3 top-margin3">The Final Designs </h2>
                <p>This project was never finished, and below are some of the screens form the last round of designs.
                    They follow the scenario of a technician in the field preparing a quote and invoice for a customer.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="">
                <div id="pm-iq-results-gallery"
                     class="project-gallery side-outdent top-margin"
                     data-sizes="5431">
                    <figure class="project-img">
                        <a href="quote/01-Blank.png"><img src="quote/01-Blank.png"
                                 alt="a new quote"></a>
                        <figcaption>A tech starts a new quote </figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="quote/02-AddItems.png"><img src="quote/02-AddItems.png"
                                 alt="adding items to quote"></a>
                        <figcaption>She then adds work items to the quote</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="quote/03-Edited.png"><img src="quote/03-Edited.png"
                                 alt="The edited quote"></a>
                        <figcaption>The customized quote</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="quote/04-SelectQuotes.png"><img src="quote/04-SelectQuotes.png"
                                 alt="quote selection"></a>
                        <figcaption>She can make multiple quotes and choose which to present to the customer
                        </figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="quote/05-Present.png"><img src="quote/05-Present.png"
                                 alt="presentation"></a>
                        <figcaption>She then presents the quotes to the customer </figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="quote/06-Accepted.png"><img src="quote/06-Accepted.png"
                                 alt="an accepted quote"></a>
                        <figcaption>After the customer accepts the quote, work begins</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="quote/08-Completed Work.png"><img src="quote/08-Completed Work.png"
                                 alt="a completed invoice"></a>
                        <figcaption>Once work is completed, it's ready to be billed. </figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="quote/09-Complete & Approved.png"><img src="quote/09-Complete & Approved.png"
                                 alt="an approved invoice "></a>
                        <figcaption>The invoice is ready for the customer </figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="quote/10-Email.png"><img src="quote/10-Email.png"
                                 alt="email invoice"></a>
                        <figcaption>Emailing the final bill to the customer.</figcaption>
                    </figure>

                </div>
            </div>
        </div>
    </section>
</main>
<?php include('../../footer.php');