<?php
$category = strip_tags($_GET['type'] );
$pageVars = array(
	'css' => array('den-work'),
	'title' => '',
	'category'=>$category,
	'js'	=>array('macy','projects','projects/homemaint')
);
include('../../header.php');
?>
<main id="content-sections-wrap">
    <section id="project-intro"
             class="container">
        <div class="flex-row outdent flex-vcenter">
            <div class="preview-image col5l col5m col4s col12x">
                <img src="pitchDeck-Title.png"
                 alt="design for subscription home maintenance service">
            </div>
            <div class="col7l col7m col8s col12x">
                <h1 class="project-title h1">Home Maintenance Service</h1>
                <p class="h4 project-date uiux">Product Research & UI/UX Design <br>Jan 2020 </p>
                <p class="h4 project-date dev">Dev</p>
                <p class="h4 project-date gd">Design</p>
                <h2 class="h3">Summary</h2>
                <p>Product Exploration, Market & UX Research Project to identify new product opportunities to help
                    homeowners avoid problems with home service contractors.</p>
                <p>This project was 3 week experiment by a cross-functional Innovation Team.</p>
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
                        The process for this project was fast and experimental. We conducted several rounds of lean
                        experiments to test hypotheses about the market, as well as using several methods to collect
                        first-hand personal experiences to inform our thinking. Some of the methods we used were
                        in-depth interviews, guerilla surveys, paid surveys, casually interviewing everyone we know and
                        looking at general market data. We also conducted collaborative design sessions and workshops to
                        define our personas, customer journey, understand the problem space, ideate product
                        opportunities and define and test a value proposition.
                    </p>
                    <div id="homemaintprocessgallery1"
                         class="project-gallery side-outdent top-margin" data-sizes="2222">
                        <figure class="project-img no-mobile">
                            <a href="boards-03.jpg"><img src="boards-03.jpg"
                                 alt="design artifacts for subscription home maintenance service"></a>
                        </figure>
                        <figure class="project-img no-mobile">
                            <a href="boards-04.jpg"><img src="boards-04.jpg"
                                 alt="design artifacts for subscription home maintenance service"></a>
                        </figure>
                    </div>
                </div>
                <div class="col12x col12s col6m col5l col5xl side-outdent">
                    <div id="homemaint-process-gallery"
                         class="project-gallery  side-outdent"
                         data-sizes="2222">
                        <figure class="project-img  no-mobile">
                            <a href="experiment1.png"><img src="experiment1.png"
                                 alt="experiment results"></a>
                        </figure>
                        <figure class="project-img  no-mobile">
                            <a href="boards-01.jpg"><img src="boards-01.jpg"
                                 alt="design artifacts for subscription home maintenance service"></a>
                        </figure>
                        <figure class="project-img  no-mobile">
                            <a href="boards-02.jpg"><img src="boards-02.jpg"
                                 alt="design artifacts for subscription home maintenance service"></a>
                        </figure>
                        <figure class="project-img  no-mobile">
                            <a href="experiment2.png"><img src="experiment2.png"
                                 alt="experiment results"></a>
                        </figure>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="project-results"
             class="container">
        <div class="flex-row outdent">
            <div class="col12x col6s col6m col6l">
                <h2 class="h3">The Final <span class="uiux">Result</span><span class="gd">Design</span><span
                          class="dev">Product</Design>
                </h2>
                <p class="uiux">The final result was a pitch deck that we presented to the CEO. The summary of our
                    pitch is as follows:</p>
                <blockquote class="content-card">
                    <p class="uiux">Homeowners end up paying almost 10K a year in unexpected hidden costs most of
                        which could have been avoided with regular, simple maintenance.</p>
                    <p class="uiux">Let's make it easy for homeowners to save money and protect their homes with a
                        subscription service that provides regular maintenance. </p>
                    <p class="uiux">Over $80 billion is spent on home repairs each year and of the homeowners we've
                        talked to 75% are interested in a service to provide regular maintenance.</p>
                    <p class="uiux">Now is the time to act. There's only a handful of competitors trying similar
                        ideas and no one is doing it right.</p>
                    <p class="uiux">This is a real opportunity to help homeowners build wealth and invest in their
                        homes and communities.</p>
                </blockquote>
                </p>
            </div>
            <div class="col12x col6s col6m col6l">
                <div class="project-gallery">
                    <div class="flew-row out-dent">
                        <figure class="project-img col12x col6s col6m col6l">
                            <a href="amandaHaven-NewHomeowner.png"><img src="amandaHaven-NewHomeowner.png"
                                 alt="Our Primary Persona"></a>
                            <figcaption>
                                Our Primary Persona
                            </figcaption>
                        </figure>
                        <figure class="project-img col12x col6s col6m col6l">
                            <a href="ScottCarpenter-DIYHomeowner.png"><img src="ScottCarpenter-DIYHomeowner.png"
                                 alt="Our Secondary Persona"></a>
                            <figcaption>
                                Our Secondary Persona
                            </figcaption>
                        </figure>
                    </div>
                    <figure class="project-img">
                        <a href="valueprop.png"><img src="valueprop.png"
                             alt=" Exploring value props"></a>
                        <figcaption>
                            Exploring value proposition & product positioning
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('../../footer.php');