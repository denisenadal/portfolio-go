---
title:  "flickr feed"
subtitle: "Coding Project"
date: 2018-03-31T20:46:03-05:00
date_range: "March 2018"
draft: false
image: {"name":"final/flickrfeed-desktop-default.png"," alt":"Desktop Latest Results"}
type: "work"
tags: ["Web App", "Development"]
weight: 41
resources: [
    {"src":"00-process.md"},
    {"src":"00-final.md"},
{
    "src":"final/flickrfeed-desktop-default.png",
    "title": "Desktop Latest Results",
    "name": "final-image",
    "params": {
        "caption": true,
        "w": 1,
         "h": 1,
        "order": 1
    }
},{
    "src":"final/flickrfeed-desktop-searchresults.png",
    "title": "Desktop Search Results",
    "name": "final-image",
    "params": {
        "caption": true,
        "w": 1,
         "h": 1,
        "order": 1
    }
},{
    "src":"final/flickrfeed-mobile.png",
    "title": "Mobile Version",
    "name": "final-image",
    "params": {
        "caption": true,
        "w": 1,
         "h": 1,
        "order": 1
    }
}]
---
A simple Node/Express web app that allows users to search for images uploaded to flickr, and view those images either as a webpage or as raw json data.

It allows users to search through flickr's database of images. Users can search for images by topic, or browse latest images. The results for either can be view in the app, or viewed as raw JSON. It's loosely based on freecodecamp's [Image Abstraction Layer](https://www.freecodecamp.org/challenges/image-search-abstraction-layer) project.