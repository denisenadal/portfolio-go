---
title: "Solution 4"
date: 2019-11-01:46:03-05:00
draft: false
order: 6
columns: "col-sm-12"
---
{{<row>}}
{{%column class="col-sm-12 col-md-8 col-lg-7 mb-4" %}}
### Full Redesign (Nov, Dec 2019)

After several failed attempts to inject user-focused experiences into the existing codebase, we as a team came to the conclusion that it would take just as long, or perhaps less time, to just try again from scratch.  We decided to "do it right" this time, and start by challenging our assumptions and researching our users, their tasks, needs and wants. 
{{%/column%}}
{{</row>}}
{{<row>}}
{{%column class="col-sm-12 col-md-8 col-lg-7 mb-4" %}}
#### Research

----

I spearheaded this project after our new Product Director challenged the UX Team to **test our assumption**s about how our users really do their jobs. Up until this point, we accepted the longstanding assumptions that our organization has built up through the years about what a "job" should look like and what dispatchers and technicians "should" do.

We started this process by **interviewing a former HVAC technician and  a general manage**r for plumbing and HVAC companies. During the interview process we made several discoveries that changed our entire perception of what a "job" was.

Through those interviews, and **discussions with technicians** at HVAC conferences, we learned about the kind of people who gravitate towards this work, and combining this insight with **industry research** I was able to build personas for our 4 basic user groups: owners, dispatchers, customer service reps, and technicians.

By building out these **detailed personas based on real data** rather that anecdotal evidence, it became easier to focus in on the right workflows and solutions. All the insights we gained as a Product &  UX Team through this process later informed the best design work we had done as a team.
{{</column>}}
{{<column class="mt-5">}}
  {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/research/cassie-booker-CSR.png" alt="CSR Persona" caption="CSR Persona">}}
{{</column>}}
{{<column class="mt-5">}}
  {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/research/donna-lister-DIS.png" alt="Dispatcher Persona" caption="Dispatcher Persona">}}
{{</column>}}
{{</row>}}

{{<row>}}
    {{<column class="col-sm-6 col-md-3">}}
         {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/research/job-mental-map.jpg" alt="Job mental map" caption="Job mental map">}}
         {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/research/newjob-workflow.jpg" alt="workflow for creating a job" caption="Workflow for creating a job">}}
    {{</column>}}
    {{<column class="col-sm-6 col-md-3">}}
        {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/research/dispatch-workflow.jpg" alt="Dispatcher workflow" caption="Dispatcher workflow">}}
        {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/research/tech-workflow.jpg" alt="Tech workflow" caption="Tech workflow">}}
    {{</column>}}
    {{<column class="col-sm-6 col-md-3">}}
        {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/research/owner-workflow.jpg" alt="Owner workflow" caption="Owner workflow">}}
        {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/research/job-diagrams.jpg" alt="diagramming various types of jobs" caption="Diagramming various types of jobs">}}
    {{</column>}}
    {{<column class="col-sm-6 col-md-3">}}
        {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/research/csr-workflow.jpg" alt="CSR workflow" caption="CSR workflow">}}
    {{</column>}}
{{</row>}}

#### Ideation

----
{{<row>}}
{{<column class="col-sm-12 col-md-6 mb-4" >}}
{{%markdown%}}
After establishing a deep understanding of who we were designing for and understanding the tasks involved, I did a lot of loose sketching on paper to work out my initial ideas. From there I worked up several wireframes, some of which are detailed in the next section

##### Wireframing through a Scenario

Part of validating this design and workflow was running it through several common and uncommon scenarios. To the left is an example for a common scenario that can be challenging - a landlord calls to schedule work at a tenant's home.
{{%/markdown%}}
{{</column>}}
    {{<column class="col-sm-6 col-md-2">}}
         {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/ideation/v04scenario-0.png" alt="Scenario Step 1">}}
        {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/ideation/v04scenario-03.png" alt="Scenario Step 4">}}
    {{</column>}}
    {{<column class="col-sm-6 col-md-2">}}
         {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/ideation/v04scenario-01.png" alt="Scenario Step 2">}}
        {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/ideation/v04scenario-04.png" alt="Scenario Step 5">}}
    {{</column>}}
    {{<column class="col-sm-6 col-md-2">}}
         {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/ideation/v04scenario-02.png" alt="Scenario Step 3">}}
        {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/ideation/v04scenario-05.png" alt="Scenario Step 6">}}
    {{</column>}}
{{</row>}}
{{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/ideation/v3workflow-wires.png" alt="Scenario: landlord calls to schedule work at a tenant's home">}}


#### Visual Design

---- 

{{<row>}}
{{<column class="col-sm-12 col-md-8 col-lg-7 mb-4" >}}
{{%markdown%}}
For the visual design of this project, I used our systems existing fonts, colors, and button styles, but tried to streamline and simplify the UI. 

If we had continued with this project, I would have spend more time fine tuning and testing the designs.
{{%/markdown%}}
<div class="row mt-5">
    {{<column class="col-sm-6 col-md-4 float-left">}}
    {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/visual/v4-contact-tablet.png" alt="Customer details on a tablet" caption="Customer details on a tablet">}}
    {{</column>}}
    {{<column class="col-sm-6 col-md-4  float-left">}}
    {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/visual/v4jobdone-tablet.png" alt="Completed Job on a tablet" caption="Completed Job on a tablet">}}
    {{</column>}}
    {{<column class="col-sm-6 col-md-4 float-left">}}
    {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/visual/v4jobprog-desktop.png" alt="Job 'In Progress' on a desktop" caption="Job 'In Progress' on a desktop">}}
    {{</column>}}
</div>
{{</column>}}
{{<column class="col-sm-6 col-md-2">}}
  {{<workImage class="figure text-muted mb-4" src="/work/pm-call-experience/06-redesign/visual/v05mobilejob.png" alt="Job Screen on a mobile device">}}
{{</column>}}

{{</row>}}