
{{ if eq (mod $index 2) 0 }} right {{ end }}

{{ index $colors $index }}


range first 6

<pre>
    {{ printf "%#v" . }}
</pre>

TODO make columns more customizable
fix load order issues of js

make a figure template