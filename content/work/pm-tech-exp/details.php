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
           <div class="preview-image col5l col5m col4s col12x vertical">
                <img src="mobileScreens.png"
                 alt="mobile device">
           </div>
            <div class="col7l col7m col8s col12x">
                <h1 class="project-title h1">Guided User Experiences</h1>
                <p class="h4 project-date uiux">UI/UX Design <br>Fall 2019</p>
                <h2 class="h3">Summary</h2>
                <p>Designing a new UI to create intuitive guided workflows so Customer Service Rep.'s can schedule work faster and techs
                    can complete jobs faster.
                </p>
            </div>
        </div>
    </section>
    <section id="project-process1"
             class="accent-bar">
        <div class="container clearfix">
            <div class="row outdent">
                <div class="col12x col6s col5m col4l col4xl">
                    <h2 class="h3 no-margin">Design Round 1</h2>

                    <p>
                        Our Product Director challenged the UX Team to explore new ways of allowing users to quickly
                        discover common tasks without having to dig through onerous and dated navigation systems.
                    </p>
                    <p>
                        For our first round, I explored three methods of revealing tasks:
                        <ol>
                            <li>A classic text index of tasks for technology adverse users</li>
                            <li>A metro grid style to make it easy for users on devices to find and click things</li>
                            <li>A weighted system that increased the prominence of tasks the more that users interacted
                                with those tasks, and slowly hid ones users avoided.</li>
                        </ol>
                    </p>

                </div>
                <div class="col12x col6s col7m col8l col8xl side-outdent top-margin2">
                    <div id="techexp-gallery1"
                         class="project-gallery  side-outdent"
                         data-sizes="4432">
                        <figure class="project-img">
                            <a href="v01index-mobile.png"><img src="v01index-mobile.png"
                                     alt="Task Index mobile view, v1"></a>
                            <figcaption>Task Index mobile view, v1
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v01index-tablet.png"><img src="v01index-tablet.png"
                                     alt="Task Index tablet view, v1"></a>
                            <figcaption>Task Index tablet view, v1
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v01metro-desktop.png"><img src="v01metro-desktop.png"
                                     alt="Metro style task groups, v1"></a>
                            <figcaption>Metro style task groups, desktop view, v1
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v01metro-mobile.png"><img src="v01metro-mobile.png"
                                     alt="Metro style task groups, mobile view, v1"></a>
                            <figcaption>Metro style task groups, mobile view, v1
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v01metro-tablet.png"><img src="v01metro-tablet.png"
                                     alt="Metro style task groups, tablet view, v1"></a>
                            <figcaption>Metro style task groups, tablet view, v1
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v01weighted-mobile.png"><img src="v01weighted-mobile.png"
                                     alt="tasks weighted by usage, mobile view, v1"></a>
                            <figcaption>tasks weighted by usage, mobile view, v1
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="project-process2"
             class="top-margin4">
        <div class="container clearfix">
            <div class="row outdent">
                <div class="col12x col6s col5m col4l col4xl">
                    <h2 class="h3 no-margin">Design Round 2</h2>

                    <p>
                        For our second round, I merged the best ideas of each option into one set of designs
                    </p>
                        <figure class="project-img top-margin2">
                            <a href="v02metro-mobile.png"><img src="v02metro-mobile.png"
                                     alt="Metro style 'Favorite Tasks' on mobile, v2"></a>
                            <figcaption>Metro style 'Favorite Tasks' on mobile, v2
                            </figcaption>
                        </figure>
                </div>
                <div class="col12x col6s col7m col8l col8xl side-outdent top-margin2">
                    <div id="techexp-gallery2"
                         class="project-gallery  side-outdent"
                         data-sizes="2222">
                        <figure class="project-img">
                            <a href="v02indexed-desktop.png"><img src="v02indexed-desktop.png"
                                     alt="Task Index desktop view, v2"></a>
                            <figcaption>Task Index desktop view, v2
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v02metro-desktop.png"><img src="v02metro-desktop.png"
                                     alt="Metro style 'Favorite Tasks' on desktop, v2"></a>
                            <figcaption>Metro style 'Favorite Tasks' on desktop, v2
                            </figcaption>
                        </figure>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="project-process3"
             class="accent-bar">
        <div class="container clearfix">
            <div class="row outdent">
                <div class="col12x col6s col5m col4l col4xl">
                    <h2 class="h3 no-margin">Design Round 3</h2>

                    <p>
                        In round 3, we focused on how users might engage with some of their most common tasks, checking
                        their schedules and working jobs.
                    </p>
                    <div class="top-margin2">
                        <figure class="project-img">
                            <a href="desktopScreens.png"><img src="desktopScreens.png"
                                     alt="Overview of desktop screens & workflow"></a>
                            <figcaption>Overview of desktop screens & workflow
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="tabletScreens.png"><img src="tabletScreens.png"
                                     alt="Overview of tablet screens & workflow"></a>
                            <figcaption>Overview of tablet screens & workflow
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="mobileScreens.png"><img src="mobileScreens.png"
                                     alt="Overview of mobile screens & workflow"></a>
                            <figcaption>Overview of mobile screens & workflow
                            </figcaption>
                        </figure>
                    </div>

                </div>
                <div class="col12x col6s col7m col8l col8xl side-outdent top-margin2">
                    <div id="techexp-gallery3"
                         class="project-gallery  side-outdent"
                         data-sizes="4322">
                        <figure class="project-img">
                            <a href="v03schedule-desktop.png"><img src="v03schedule-desktop.png"
                                     alt="Viewing Personal Schedule,desktop, v3"></a>
                            <figcaption>Viewing Personal Schedule,desktop, v3
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v03schedule-mobile.png"><img src="v03schedule-mobile.png"
                                     alt="Viewing Personal Schedule,mobile, v3"></a>
                            <figcaption>Viewing Personal Schedule,mobile, v3
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v03workingjob-mobile.png"><img src="v03workingjob-mobile.png"
                                     alt="Viewing Viewing Current Job Assignment,mobile, v3"></a>
                            <figcaption>Viewing Current Job Assignment,mobile, v3
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v03workingjob-desktop.png"><img src="v03workingjob-desktop.png"
                                     alt="Viewing Viewing Current Job Assignment,desktop, v3"></a>
                            <figcaption>Viewing Current Job Assignment,desktop, v3
                            </figcaption>
                        </figure>
                        <figure class="project-img">
                            <a href="v03jobinfo-mobile.png"><img src="v03jobinfo-mobile.png"
                                     alt="Viewing Job Information,mobile, v3"></a>
                            <figcaption>Viewing Job Information,mobile, v3
                            </figcaption>
                        </figure>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include('../../footer.php');