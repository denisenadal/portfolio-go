---
title: "{{ replace .Name "-" " " | title }}"
date: {{ .Date }}
draft: true
description: {{.Description | safeHTML}}
featured_image: 
type: "work"
tags: []
---