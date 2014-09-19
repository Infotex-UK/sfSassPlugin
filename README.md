sfSassPlugin
============

A symfony 1.x plugin utilizing the excellent [phpsass](https://github.com/richthegeek/phpsass) SASS/SCSS compiler for PHP.

The plugin allows you to create SASS/SCSS stylesheets wherever you want and add them as you would normal CSS files to your view.yml files or by using `sfWebResponse::addStylesheet`.

Because the plugin overrides the `sfWebResponse::addStylesheet` function call, it will recognise when it needs to serve a compiled CSS file rather than a SASS/SCSS file and will at that point either serve up the already-compiled version of the given file if nothing has changed in the original, or re-compile it and serve the newly compiled version.


Installation & Usage
--------------------

1. Get a copy of the plugin:
```
$ git submodule add https://github.com/Infotex-UK/sfSassPlugin plugins/sfSassPlugin
```
2. Go into the plugin directory and initialize it's own submodule - _phpsass_:
```
$ git submodule init
$ git submodule update
```

2. Enable the plugin in _config/ProjectConfiguration.class.php_:
```
public function setup() {
    ...
    $this->enablePlugins('sfSassPlugin');
    ...
}
```
3. For each app that you want to use SASS/SCSS stylesheets, edit the app's _factories.yml_ config file to change the response handler for all environments:
```
response:
    class: sfSassPluginWebResponse
```

4. Publish the plugin assets:
```
php symfony plugin:publish-assets sfSassPlugin
```
5. Make sure the plugin's web/css directory is writable by the web server:
```
chmod 775 plugins/sfSassPlugin/web/css
```
6. Create scss/sass files wherever you want and add them to view.yml files!