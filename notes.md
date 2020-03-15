
{{ if eq (mod $index 2) 0 }} right {{ end }}


range first 6

<pre>
    {{ printf "%#v" . }}
</pre>

TODO
- - clean up each gallery
- - finish off summary, tech exp, others?

{{< figure src="/media/spf13.jpg" title="Steve Francia" >}}

src
link
target
rel
alt
title
caption
class
height
width
attr
attrlink
=====================
{{range sort . "Params.order"}}
    <div class="{{.Params.sizing | default $default_img_width}} col grid-item">
        {{partial "single-work/figure.html" .}}
    </div>
{{end}}


{{partial "single-work/figure.html" (dict "page" $page "image" .)}}


<figure class="figure">
    <img src="{{.page.Permalink}}process{{.image.src | relURL}}"
         alt="{{.image.title}}"
         class="figure-img img-fluid">
    {{if .image.params.caption }}
    <figcaption class="figure-caption">{{.image.title}}</figcaption>
    {{end }}
</figure>