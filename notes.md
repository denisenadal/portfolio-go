
{{ if eq (mod $index 2) 0 }} right {{ end }}


range first 6

<pre>
    {{ printf "%#v" . }}
</pre>

TODO
- make process-gallery a generic repeatable section
- have background bg handled by nth selector css
- test handing in classes for img width
- - clean up each gallery
- - finish off summary, tech exp, others?
