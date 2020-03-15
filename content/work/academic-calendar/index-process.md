---
title: "The Design Process"
date: 2017-10-31T20:46:03-05:00
draft: false
layout: "col-sm-6 col-lg-4"
---
The Academic Calendar has been a pain point for our university since we migrated our site into a new CMS. The previous version had calendaring logic built into the same code as rendered the calendar - the dates did not exist outside of the page and was a security risk.

We had to meet several design and technical considerations. First, we needed to develop a system that would be easy for Registration staff to update annually without anyone needed to hand-type dates, or risk unauthorized editing. Second, we needed it to be easy to read for students in a hurry, but also similar enough to the old calendar to feel familiar to users who spent 10 years with the previous version. Thirdly, it needed to be flexible enough to look great on desktops, mobile devices and print well.

After several rounds of brainstorming David and I agreed that the calendar should allow users to view a full calendar and use a filtering system to find specific dates, view  a specific semester, or alternate between block or semester schedules. After planning out the functionality together, David designed the visual interface for the first iteration, and I focused on coding out the filtering system and finding a solution for the calendar source. 

The filtering system was surprisingly simple to code out. When the dates are added to the DOM, each date element gets descriptive classes added. For instance, the first day of classes for Fall 2017 would have the classes “fall 2017 cb coursework semester” added. We then can filter events by year, semester (spring/fall), semester type (semester or block), category (classwork), or specific event (cb = ‘classwork begins’), by simply hiding all events that don’t have the classes we’re looking for.

In spring 2018 I revisited this project to implement stage 2, which allows the user to select which semester they would like to view dates for. Since this drastically changed the way the calendar functioned, I retouched the design to better integrate the new features.