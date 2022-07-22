---
title: "Process"
name: "process"
date: 2019-11-01:46:03-05:00
draft: false
order: 1
columns: "col-sm-12"
---
{{<row>}}
{{% column class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-8 mb-4" %}}
I followed a modified version of the **Design Thinking** process. I started with trying to find out as much as I could about the site, who used it and for what reasons, as well as what they did and didn't like about the system. Next I sketched out the logical **content structure** and **information architecture** with our support team. Then I created **wireframes** which I **tested** with users, and revised several times before working up some high-res mockups. These mockups where turned into **prototypes** and also went through several round of testing. From there I developed detailed screens to use as product specs to hand off to the engineers.
{{<hr>}}

## Research

Research for this project consisted of interviewing internal and external users. Because this administration site was used primarily by our support team assisting users, they were my primary source of information. I interviewed the support team on what features they used, what tasks they completed on behalf of users, and which tasks users frequently completed themselves. I also discovered which features went unused and areas of the site that no one seemed to know exactly how it was supposed to function.

I also interviewed members of the engineering team, who understood the data structures and the limitations of the system. Some of the most interesting insights from these interviews were

{{% /column%}}
{{% column class="bg-light p-4  mb-4 text-danger font-weight-bolder" %}}
### Key Findings:
- some features were built so long ago and so underused that no one knew what they did
- users rarely used the system themselves because it was too confusing
- we had dozens of reports with similar information, but none really showed the right information
- unclear why some settings/form fields were considered "account level" vs "company level"

{{%/column%}}
{{</row>}}
{{<hr>}}

{{<row>}}
    {{<column class="col-sm-12 col-md-6 col-lg-7 col-xl-8 mb-3" >}}
{{% markdown %}}
##   Information Architecture

The existing screens were long and confusing- the result of almost ten years worth of adding new features where ever there happened to be room.  I began my design process by analyzing the content on the pages and restructuring it logically and hierarchically.

This was somewhat challenging as the data structure was as shown, right:
{{% /markdown %}}
    {{<workImage src="/work/swr-srs/01-process/IA-New.png" alt="planning out the new information architecture">}}
    {{</column>}}
    {{<column class="col-sm-12 col-md-6 col-lg-5 col-xl-4 mb-3">}}
        <span class="h2 d-block">&nbsp;</span>
        {{<workImage src="/work/swr-srs/01-process/IAdiagram.png" alt="Diagram of the database structure">}}
        <div class="text-danger bg-light p-3">
            <h3>Key Insight</h3>
            <em class="lead">
            It was often unclear why some settings existed at the "Master Account" level and others at the "Company" level.</em>
        </div>
    {{</column>}}
{{</row>}}

{{<hr>}}
{{<row>}}
{{%column class="col-12 col-sm-12 col-md-5  mb-4"%}}
## Wireframes

After the Information Architecture was confirmed, I started designing out the content and layout of the pages through wireframes.I then took these designs to our team and tested them with users to make sure we were on track. 

Highlighted on the images are discussion points:

* Questions I uncovered during the design process
* Points of confusion in the desired workflow
* Concerns about technical implementation
* Areas that are still under exploration
  
{{%/column%}}
    {{<column>}}
        <span class="h2 d-block">&nbsp;</span>
        {{<workImage src="/work/swr-srs/01-process/wireframes-group.png" alt="wireframes of the SWR SRS admin site">}}
    {{</column>}}
{{</row>}}

{{<hr>}}

{{<row>}}
    {{<column  class="col-sm-12 col-md-6">}}
        <span class="h2 d-block">&nbsp;</span>
        {{<workImage src="/work/swr-srs/01-process/theme-variants.jpg" alt="Testing out variants of the material theme">}}
    {{</column>}}
{{% column class="col-12 col-sm-12 col-md-6" %}}

## Visual Design

To improve the speed of development and lighten the lift on our engineering team, we've been using Google's Material Design theming for all of our apps. For building out the theme for our site, I used the Pointman brand colors as a starting point, and them mixed them up to be more suitable to accessible web design standards.
Because consistent spacing is important to visual design and readability, I created some layout guides for the engineers to understand how to space elements and arrange content on different sized devices.

I also created a walkthrough of how I expected save interactions to work throughout the system, so the engineers would know how to start programming saving interactions in their component design.

{{% /column%}}
{{</row>}}

{{<hr>}}

{{<row>}}
{{% column class="col-sm-12 col-md-6 col-lg-7 col-xl-8 mb-3" %}}

## Prototyping

Prototyping went through three distinct phases, during the first round, I solidified the visual design of each page and walked users through the system to hammer out points of confusion. The second round involved fleshing out variant workflows and scenarios, and creating all the appropriate screens to represent them. These were also validated again users. The third round was diving in edge cases and detailing errors and interactions for the engineering team.
{{% /column%}}
{{</row>}}

{{<row>}}
    {{<column class="col-sm-12 col-md-5  mb-4 mt-0" >}}
        {{<workImage src="/work/swr-srs/01-process/proto-system.png" alt="system level / administrator user screens">}}
        {{<workImage src="/work/swr-srs/01-process/proto-master-account.png" alt="master account level screens">}}
    {{</column>}}
    {{<column class="col-sm-12 col-md-7  mb- mt-0" >}}
        {{<workImage src="/work/swr-srs/01-process/proto-company1.png" alt="company level settings screens">}}
        {{<workImage src="/work/swr-srs/01-process/proto-company2.png" alt="company level settings screens">}}
        {{<workImage src="/work/swr-srs/01-process/proto-company3.png" alt="company level settings screens">}}
    {{</column>}}
{{</row>}}

{{<hr>}}

{{<row>}}
{{% column class="col-12 col-sm-12 col-md-6 col-lg-7   mb-3" %}}

## Testing

Testing the design happened continuously, although due to time constraints, I only had time to test against internal users of varying level of familiarity with the system. 

{{% /column%}}
    {{<column>}}
        <div class="text-danger bg-light p-3">
            <h3>Key Insight</h3>
            <em class="lead">The more we improved the experience, the more the problems with the existing information architecture became apparent. 
            </em>
        </div>
    {{</column>}}
{{</row>}}
{{<hr>}}
{{<row>}}
{{% column class="col-sm-12 col-md-6 col-lg-7 col-xl-8  mb-3" %}}
## Hand-off & Design Specs

The hand-off occurred in stages, as the engineers were ready before the designs were 100% done.  We were able to determine what sections the engineers would work on first, and I could design out ahead of them. Below you can see an example of the design specs handed off for the login page.
More information was recorded as comments in the InVision project that served as our source of truth.
{{% /column%}}
{{</row>}}

{{<row>}}
    {{<column class="col-sm-12 col-md-6 mb-4 mt-0" >}}
        {{<workImage src="/work/swr-srs/01-process/proto-global.png" alt="System level elements">}}
        {{<workImage src="/work/swr-srs/01-process/save-interactions.png" alt=" Documenting the login logout interactions for development">}}
    {{</column>}}
    {{<column class="col-sm-12 col-md-6 mb-4 mt-0" >}}
        {{<workImage src="/work/swr-srs/01-process/layouts.png" alt="Demonstrating layouts and container sizes for development">}}
    {{</column>}}
{{</row>}}    

