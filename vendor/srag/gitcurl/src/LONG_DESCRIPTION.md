## Usage

### Composer

First add the following to your `composer.json` file:

```json
"require": {
  "srag/gitcurl": ">=0.1.0"
},
```

And run a `composer install`.

If you deliver your plugin, the plugin has it's own copy of this library and the user doesn't need to install the library.

Tip: Because of multiple autoloaders of plugins, it could be, that different versions of this library exists and suddenly your plugin use an older or a newer version of an other plugin!

So I recommand to use [srag/librariesnamespacechanger](https://packagist.org/packages/srag/librariesnamespacechanger) in your plugin.

### PHP 7.0

You can use this library with PHP 7.0 by using the `PHP72Backport` from [srag/librariesnamespacechanger](https://packagist.org/packages/srag/librariesnamespacechanger)
