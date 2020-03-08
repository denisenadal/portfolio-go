
{{ if eq (mod $index 2) 0 }} right {{ end }}

TODO switch main page to use spacer to offset 

{{ index $colors $index }}


range first 6

<pre>
    {{ printf "%#v" . }}
</pre>


<figure>
    <img src="{{.src}}"
            alt="{{.name}}">
    {{with .params.caption}}
    <figcaption>{{.name}}</figcaption>
    {{end }}
</figure>