---
title: "Process"
name: "process"
date: 2019-09-01:46:03-05:00
draft: false
order: 0
columns: "col-sm-12"
---
{{<row>}}
{{% column class="col-sm-12 col-md-6 col-lg-7 col-xl-8 mb-4" %}}

This was one of the first major projects I was a part of at Pointman. At this time, we didn't have a discreet Product or UX team. We had a product owner who worked with our SME's to collect requirements, and he deeply collaborated with us on the Engineering team to design and develop the features.

At the time, none of us really understood how to apply innovative Design Thinking methodologies to the app development process. Our process was essentially "start with a customer request, and then iterate, iterate and iterate."

If I had the chance to do this project over again— I would have performed a **task analysis, a customer journey map**, and mapped out all of our customer feedback in an **affinity diagram**. After performing this research, I would have our team do several **rapid iterations** of radically different ideas and test them with users, rather than slowly building up one or two ideas.

{{%/column%}}
{{<column>}}
    {{<workImage class="text-muted" src="/work/pm-iq/02-process/workflow.png" alt="Diagram of our old design process" caption="our old design process, which we used for this project">}}
{{</column>}}
{{</row>}}

{{<hr>}}
{{<row>}}
{{% column class="col-sm-12 col-md-6 col-lg-7 col-xl-8 mb-4" %}}

## Research & Insights

We started this project by getting a list of requests from our Customer Success team, who collected user feedback. Our subject matter experts spend some time walking us through how they believed the users completed this task and how they should do it.

I also performed **competitive analysis** by looking at how competing products, such as ServiceTitan, Housecall Pro and Jobber handled these issues.

### Key Insights

{{%/column%}}
{{</row>}}
{{<row>}}
    {{<column class="col-sm-12 col-md-6">}}
        <div class="bg-accent p-3 mb-3">
            <h4 class="h6">No easy way to present multiple options for a job</h4>
            <p>You would have to create multiple quotes to present individually. This was also unfair to the technicians, because our system would show that they made 3 offers to the homeowner, and 2 were rejected, even though they did in fact close the deal. </p>
        </div>
        <div class="bg-accent p-3 mb-3">
            <h4 class="h6">Our system treated quotes as a property of a job</h4>
            <p>Every job must have a quote, and every time you give a person an estimate, you must create a job. <em>This doesn't match real-life user behavior;</em> oftentimes, a salesperson will visit a homeowner, propose some work and the homeowner  decline the work or need time to think about it. There's no need to have a job until the work has been approved and it's time to send the technicians out to do the work that was sold. </p>
        </div>
    {{</column>}}
    {{<column class="col-sm-12 col-md-6">}}
        <div class="bg-accent p-3 mb-3">
            <h4 class="h6">Users needed an easy way to copy quotes between jobs</h4>
            <p>You might want to offer the same add-ons that another technician suggest the last time they visited the same homeowner. You might be working on an apartment unit, and need to quickly copy over the quote and invoices from one unit to another.</p>
        </div>    
        <div class="bg-accent p-3 mb-3">
            <h4 class="h6">Need for part bundles</h4>
            <p>Technicians would often add the same "bundle" of parts to a quote. For example, a specific fan needs the same accessories every time you install it. It would speed up their workflow to have an ability to add that "bundle" of parts.</p>
        </div>
    {{</column>}}
{{</row>}}
{{<hr>}}
{{<row>}}
{{< column class="col-sm-12 col-md-8" >}}
{{%markdown%}}
## Ideation & Design

Our ideation process started with internalizing the information from our SME's and deep thinking about the problems. From there, we started sketching out ideas.

After several rounds of design and critiques, we had some solid designs that we felt comfortable testing.
{{%/markdown%}}
    {{<workImage class="text-muted" src="/work/pm-iq/02-process/iq-screens-group.png" alt="overview of prototype screens" caption="overview of prototype screens">}}
{{</column>}}
{{<column class="col-sm-6 col-md-2">}}
{{<workImage class="figure text-muted mb-3" src="/work/pm-iq/02-process/editablev1.jpg" alt="exploration of an editable invoice" caption="exploration of an editable invoice">}}
{{<workImage class="figure text-muted" src="/work/pm-iq/02-process/iq-options.png" alt="exploration of presenting options to homeowners" caption="presenting options to homeowner">}}
{{</column>}}
{{<column class="col-sm-6 col-md-2">}}
{{<workImage class=" figure text-muted mb-3" src="/work/pm-iq/02-process/editablev2.jpg" alt="exploration of a static invoice" caption="exploration of a static invoice">}}
{{<workImage class="figure text-muted" src="/work/pm-iq/02-process/Email-Modal.png" alt="example of sending the invoice to the homeowner" caption=" sending the invoice to the homeowner">}}
{{</column>}}
{{</row>}}

