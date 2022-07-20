## Installation
* On Mac OS `brew install hugo`
* On Linux `snap install hugo --channel=extended` or `sudo apt-get install hugo`


## Local Development
Simple version - run `hugo server --watch` to run a local version on [http://localhost:1313](http://localhost:1313). There's also several NPM scripts to automate building both the site and live sass compiling, using Dart Sass. Use `npm run start` to build a local environment and `npm run build` to package for deployment.


## Deployment
`hugo` builds a static site, use  `npm run build` to compile the sass before generating the site. 

## TODO
* document package scripts
* remove targeted portfolios
* update works gallery
    * national meeting
    * kiosk app?
    * holiday market
    * Labatt Snapchat ?
    * Hard Seltzer Site
    * Good Neighbor?
    * Safety Data Sheets
    * Intranet
    * SE Flavor Pages
    * SE Cocktails
    * GeneseeNY ?
    * Labatt CYOA
    
 * try to use Hugo's native sass compiling   
```
    {{ $options := (dict "targetPath" "style.css" "outputStyle" "compressed" "enableSourceMap" (not hugo.IsProduction) "includePaths" (slice "node_modules/myscss")) }}
{{ $style := resources.Get "sass/main.scss" | resources.ToCSS $options }}
```