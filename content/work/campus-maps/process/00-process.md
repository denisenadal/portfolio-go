---
title: "Design & Development"
date: 2017-10-31T20:46:03-05:00
draft: false
order: 0
images: [{
    "src": "campusmap-large.png",
    "title":"map overview, desktop size",
    "params" : {
        "caption": true,
        "group":3,
        "order": 0,
        "columns": "col-sm-6 col-md-6 col-lg-3"
     }
    },{
        "src": "campusmaps-active.png",
    "title":"active point details, desktop size",
    "params" : {
        "caption": true,
        "group":3,
        "order": 0,
        "columns": "col-sm-6 col-md-6 col-lg-3"
     }
    },{
    "src": "campus-map-mobile01.png",
    "title":"map overview, mobile size",
    "params" : {
        "caption": true,
        "group":3,
        "order": 0
     }
    }]
---
For the design, I tried to integrate the university’s typography, color schemes and flat design approach with aspects of Google’s Material design in terms of spacing, economy of design and icon usage. 

In earlier iterations of the map, the map area was contained in a box, and the legend/navigation was outside the box and part of the normal page flow. I found this to be disengaging for users, because the viewport for the map felt cramped. By making the map full-width and (nearly) full-height, users are able to dive into the map and explore, with the legend floating over the map for when they need it.

{{<button title="live version" link="https://dixie.edu/campus-maps" class="btn-secondary" >}}