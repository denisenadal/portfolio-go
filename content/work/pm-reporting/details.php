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
                <img src="report-cover2.png"
                 alt="Reporting Dashboard Design">
            </div>
            <div class="col7l col7m col8s col12x">
                <h1 class="project-title h1">Reporting Dashboards</h1>
                <p class="h4 project-date uiux">UI/UX Design <br>Fall 2018 - Spring 2019</p>
                <p class="h4 project-date dev">Dev</p>
                <p class="h4 project-date gd">Design</p>
                <h2 class="h3">Summary</h2>
                <p>UI design for various business reporting dashboards for HVAC business owners to help them manage
                    their profitability.
                </p>
            </div>
        </div>
    </section>
    <section id="project-process"
             class="accent-bar">
        <div class="container clearfix">
            <h2 class="h3 left-margin">Design Process</h2>
            <div class="row ">
                <div id="customer-summary-process-gallery"
                     class="project-gallery "
                     data-sizes="3333">
                     <div class="no-vpad display-block">
                         <p class="no-margin">These designs were completed when I was on the Engineering team and design work was done ad-hoc as needed in an informal process. After getting assigned the ticket in a sprint, I discussed the feature requirements with internal stakeholders. I mocked up some quick designs based on their specifications, and review them with those same stakeholders. </p>
                         <p>Most of the designs were straightforward, but the Job Efficiency Report required a lot of back and forth, and combining several different ideas into the final result. After getting their sign off, the designs where ready for me and a Full-Stack Engineer to implement. 
                    </p>
                     </div>
                     <figure class="project-img no-mobile no-tablet">
                    <a href="leadsource-00.png"><img src="leadsource-00.png"
                             alt="Lead Source Report Designs"></a>
                    <figcaption>Lead Source Report Designs</figcaption>
                </figure>
                <figure class="project-img no-mobile no-tablet">
                    <a href="scorecard-00.png"><img src="scorecard-00.png"
                             alt="Job Scorecard Designs"></a>
                    <figcaption>Job Scorecard Designs</figcaption>
                </figure>
                    <figure class="project-img">
                        <a href="efficiency-00v1.png"><img src="efficiency-00v1.png"
                                 alt="Job Efficiency Report"></a>
                        <figcaption>Job Efficiency Report, design 1</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="efficiency-00v2.png"><img src="efficiency-00v2.png"
                                 alt="Job Efficiency Report"></a>
                        <figcaption>Job Efficiency Report, design 2</figcaption>
                    </figure>
                    <figure class="project-img">
                        <a href="efficiency-00v3.png"><img src="efficiency-00v3.png"
                                 alt="Job Efficiency Report"></a>
                        <figcaption>Job Efficiency Report, design 3</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section id="project-results"
             class="container">
        <div class="pad1">
            <h2 class="h3">The Final Designs</h2>
            <p>All the various reporting screens implemented in our product.</p>
        </div>
        <div id="pm-workflows-results-gallery"
             class="project-gallery"
             data-sizes="4422">
            <figure class="project-img">
                <a href="finals/efficiency01.jpg"><img src="finals/efficiency01.jpg"
                         alt="Job Efficiency Report"></a>
                <figcaption>Job Efficiency Report</figcaption>
            </figure>
            <figure class="project-img">
                <a href="finals/efficiency02.png"><img src="finals/efficiency02.png"
                         alt="Billable Hour Efficiency Report"></a>
                <figcaption>Billable Hour Efficiency Report</figcaption>
            </figure>
            <figure class="project-img">
                <a href="finals/invoicing01.png"><img src="finals/invoicing01.png"
                         alt="Invoicing Report"></a>
                <figcaption>Invoicing Report</figcaption>
            </figure>
            <figure class="project-img">
                <a href="finals/leadsource-01.png"><img src="finals/leadsource-01.png"
                         alt="Lead Sources Report"></a>
                <figcaption>Lead Sources Report</figcaption>
            </figure>
            <figure class="project-img">
                <a href="finals/sales01.png"><img src="finals/sales01.png"
                         alt="Sales Report"></a>
                <figcaption>Sales Report</figcaption>
            </figure>
            <figure class="project-img">
                <a href="finals/scorecard01.png"><img src="finals/scorecard01.png"
                         alt="Scorecard Report, p1"></a>
                <figcaption>Scorecard Report, p1</figcaption>
            </figure>
            <figure class="project-img">
                <a href="finals/scorecard02.png"><img src="finals/scorecard02.png"
                         alt="Scorecard Report, p2"></a>
                <figcaption>Scorecard Report, p2</figcaption>
            </figure>

        </div>
    </section>
</main>
<?php include('../../footer.php');