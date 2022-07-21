## Installation
* On Mac OS `brew install hugo`
* On Linux `snap install hugo --channel=extended` or `sudo apt-get install hugo`


## Local Development
### Quickstart
Simple version - run `hugo server --watch` to run a local version on [http://localhost:1313](http://localhost:1313). Use `npm run start` to build a local environment with live reload and sass compiling and `npm run build` to package for deployment.

Use NPM to install all the necessary build packages, including Sass and Bootstrap 4. The npm package file also includes several build scripts. 

The sass build scripts run `rsync` before runtime, which we run to normalize the bootstrap directory. (This makes sure bootstrap's sass files are in the same directly regardless of whether we're building the site locally or remotely, or whether its a stand-alone theme or sitting inside of the themes folder.)

The `start` script also sources a .env file to load any private environment variables. Always remember to put your .env files on the server/or in Netlify so they're also available where you need them! The 2 env values that are currently required are `FORMSPREE_ID` and `FORMSPREE_RECAPTCHA` to enable the contact form.


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
    
