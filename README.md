## Installation
* On Mac OS `brew install hugo`
* On Linux `snap install hugo --channel=extended` or `sudo apt-get install hugo`


## Local Development
Just run `hugo server --watch` to run a local version on [http://localhost:1313](http://localhost:1313).


## Deployment
`hugo` builds a static site.

## TODO
* update package scripts
* document package scripts
* change DSU to Utah Tech
* remove targeted portfolios
* to use Hugo's native sass compiling
```
    {{ $options := (dict "targetPath" "style.css" "outputStyle" "compressed" "enableSourceMap" (not hugo.IsProduction) "includePaths" (slice "node_modules/myscss")) }}
{{ $style := resources.Get "sass/main.scss" | resources.ToCSS $options }}
```