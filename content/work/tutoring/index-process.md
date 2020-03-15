---
title: "The Design Process"
date: 2017-10-31T20:46:03-05:00
draft: false
layout: "col-sm-6 col-lg-4"
---
I began this project by sketching several ideas and taking the best two to mockups. During the process of designing the mockups a clear front-runner emerged, but I verified my conclusion by requesting feedback from other members of the team. Once we agreed on a design, I built out a quick HTML/CSS wireframe for the frontend, build out the javascript-based event handling, and refined the CSS.

The Tutoring Center’s previous calendar was a simple Google Calendar embed, which was easy for them to update, but difficult for users to read. We needed to keep the ease of use for the department, but make it easier for end users. To this aim, I wrote a small app using the Google Calendars javascript API client to collect the calendar data through REST, format the data and add it to the DOM. On page load, the page would display schedules for the most popular tutoring subjects,  and a navigation area with links to the other schedules. I used jQuery to handle the user interactions that allow users to sort through the different tutoring subjects and sessions.

