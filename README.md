sfSassPlugin
============

A symfony 1.x plugin utilizing the excellent [phpsass](https://github.com/richthegeek/phpsass) SASS/SCSS compiler for PHP.

The plugin allows you to create SASS/SCSS stylesheets wherever you want and add them as you would normal CSS files to your view.yml files or by using `sfWebResponse::addStylesheet`.

Because the plugin overrides the `sfWebResponse::addStylesheet` function call, it will recognise when it needs to serve a compiled CSS file rather than a SASS/SCSS file and will at that point either serve up the already-compiled version of the given file if nothing has changed in the original, or re-compile it and serve the newly compiled version.