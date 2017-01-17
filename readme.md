# Learning House Wordpress Starter Theme

This repo features the entire WordPress install including core files.

The core of this theme is based on [Bones theme](https://github.com/eddiemachado/bones).

## Basic Usage

### Install Dependencies

Install by navigating to the theme's `library` folder and running `npm install` followed by `bower install`

### Critical CSS

This theme utilizes inline styling in the head of the document for faster load times. If it seems like your changes are not working there is a chance that these inline styles are overwriting your changes. To update run `grunt deploy` and it will update the critical css files accordingly.

### Watch Files

To start watching files use `grunt` from the `library` folder. This will run browsersync and then watch. You can now open any browser and when you make changes the browser(s) will inject the proper files automatically.

### Grid Usage

This theme uses Susy Grid. Documentation can be found [here](http://susydocs.oddbird.net/en/latest/)

## Menus

There are three menus setup for this theme by default:

1. MAIN MENU - Main Navigation
2. SECONDARY MENU - Secondary navigation at the top of header with contact information
3. FOOTER MENU - Footer Navigation

## Theme File Structure

``` bash
starter-theme/
├── library
|    ├── bower_components  // Where all our bower components are housed
|    ├── css  //
|    |   ├── build // Production Files 
|    |   |   ├── minified  // Contains all minified versions of stylesheets
|    |   |   ├── prefixed  // Contains style sheets that have been through Autoprefixer
|    |   |   ├── home-critical.css // Critical CSS for homepage
|    |   |   ├── ie.css  // IE Stylesheet
|    |   |   ├── interior-critical.css  // Critical CSS for interior pages
|    |   |   ├── lp-critical.css  // Critical CSS for Landing Pages
|    |   |   ├── lp-style.css  // Main stylesheet for Landing Pages
|    |   |   └── style.css  // Main Stylesheet
|    ├── images  // Images relative to the theme
|    ├── js  //
|    |   ├── build // Production Files
|    |   |   ├── production.js // Concatenated JavaScript file
|    |   |   └── production.min.js
|    |   ├── libs // For javascript libraries i.e. Modernizr
|    |   └──  scripts.js // Main javascript file
|    ├── plugins  // Zip files of plugins that are critical to the theme
|    ├── scss
|    |    ├── base
|    |    |    ├── _base.scss // Base stylesheet for mobile and up
|    |    |    ├── _grid.scss // Setting up SUSY and grid styling
|    |    |    ├── _mixins.scss // All mixins
|    |    |    ├── _normalize.scss // Normalize
|    |    |    ├── _typography.scss // Typography styling
|    |    |    └── _variables.scss // Variables (breakpoints, colors, etc.)
|    |    ├── modules
|    |    |    ├── _buttons.scss // Contains styling that applies to buttons
|    |    |    ├── _forms.scss // Form styling
|    |    |    ├── _progress.scss // Styling for the progress bar on blog posts
|    |    |    ├── _accordion.scss // Styling for accordions
|    |    |    ├── _clearfix.scss // Clearfix class decleration
|    |    |    ├── _links.scss // Link Styling
|    |    |    ├── _media.scss // Styling for images, videos, etc.
|    |    |    ├── _sidebar.scss // Sidebar Styling
|    |    |    ├── _social.scss // Social Sharing Styling
|    |    |    └── _tables.scss // Table styling
|    |    ├── pages
|    |    |    ├── _home.scss // Homepage Styling
|    |    |    ├── _layout.scss // Layout Styling
|    |    |    ├── _page.scss // Page Styling
|    |    |    └── _post.scss // Blog Post Styling
|    |    ├── partials
|    |    |    ├── _footer.scss // Footer Styling
|    |    |    ├── _header.scss // Header Styling
|    |    |    ├── _nav.scss // Navigation Styling
|    |    |    └── _print.scss // Print Styling
|    |    ├── ie.scss // IE stylesheet
|    |    ├── lp-style.scss // Landing Page stylesheet
|    |    └── style.scss // Main stylesheet, this gets compiled into ==> style.css
|    ├── .sassdocrc // Settings for SassDoc
|    ├── bones.php  // Functions and features for the theme
|    ├── bower.json  // Bower setup and dependencies
|    ├── custom-post-types.php  // Where we register our custom post types for Online Degrees and Landing Pages
|    ├── Gruntfile.js  // Grunt setup file
|    └── package.json  // Grunt details and dependencies
├── 404.php  // Template for 404 page
├── archive-degrees.php  // Archive template for Online Degrees
├── archive.php  // Archive template for blog posts
├── favicon.png  // Favicon
├── footer-lp.php // Landing Page Footer template
├── footer.php // Footer template
├── front-page.php  // Homepage template
├── functions.php  // Controls features and functionality custom to the theme
├── header-lp.php  // Landing Page Header template
├── header.php  // Header template
├── index.php  // Blog index template
├── page.php	  // Page template
├── screenshot.png  // Image used for the theme
├── sidebar.php  // Sidebar template
├── single-degrees.php  // Online Degree page template
├── single.php  // Single blog post template
└── style.css  // Stylesheet used for theme information
```

## Resources

### Style Guide

For common patterns and styles please use this resource. This was mostly created for the inbound when they create blog post. [View Style Guide](http://tlhstarter.wpengine.com/style-guide)

### Sassdoc

This documentation is for the front-end team for easy access to variable, mixins, functions, etc. [View SassDoc](http://tlhstarter.wpengine.com/sassdoc)

To update sassdoc run `grunt deploy` or `grunt sassdo`
