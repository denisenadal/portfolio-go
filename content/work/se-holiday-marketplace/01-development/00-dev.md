---
title: "Development Process"
date: 2020-11-01T20:46:03-05:00
draft: false
order: 0
columns: "col-sm-12"
---
{{<row>}}
{{< column class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" >}}
<div class="text-light bg-info mb-4 p-3">
<h3 class="mb-1 mt-2 font-weight-bolder">Tech Stack</h3>
<ul>
<li class="mb-1">11ty</li>
<li class="mb-1">SASS</li>
<li class="mb-1">Netlify</li>
<li class="mb-1">JS/jQuery</li>
<li class="mb-1">Algolia</li>
</ul>
</div>
{{</column >}}
{{% column class="col-sm-6 col-md-8 col-lg-5 mb-4" %}}

The development process included several stages. First was collecting all the data about the businesses participating. Next was building out a static version of the site as a prototype for final design feedback and review. After that would come adding in the logic layer to display the data about the businesses and implement user interactions.
{{%/column %}}
{{</row>}}
{{<row>}}
{{% column class="col-sm-12  col-lg-8 mb-4" %}}

## Setting up the database
Each of the businesses participating submitted an application form with basic details about their business which the Brand team reviewed for eligibility. The application included links to their business website and up to 5 product pages. I was able to set up a Node.js script that would scrape each of the product pages for open graph tags and save what information it could find (product name, description, image and price). The script saved all the data scraped into a JSON file. 

Rather than deal with the hassle of setting up a database server and writing up API endpoints  to return the data, I used Algolia to handle all of it for me. I uploaded the JSON file and set up which attributes should be searchable or filterable, and we were ready to go.

## Setting up the static site.
The primary build stack at FIFCO USA is 11ty, which generates static HTML & CSS lightining fast using javascript. I used 11ty to build out a basic version of the home page, category pages, about and faq pages. Using the same JSON file that I fed to algolia, I was able to set up a shop directory page listing all the businesses.

## Making the Magic!
Next came putting all the pieces together, and using Algolia's js library, I was able to very quickly replace all the static business listings with live dynamic data. The homepage displayed a random selection of businesses, and the category pages showed a gallery of businesses and their products, and had full search, filtering and pagination capabilities. 
{{%/column %}}
{{</row>}}