# Olympus Hermes Translator ![PHP Version][php-image]
> **Olympus Hermes Translator** is a bundle used to translate all messages from your WordPress website, its plugins and Olympus bundles.

[![Olympus Component][olympus-image]][olympus-url]
[![CodeFactor Grade][codefactor-image]][codefactor-url]
[![Packagist Version][packagist-image]][packagist-url]
[![Travis Status][travis-image]][travis-url]

## Features

+ Better and secure folder structure
+ Dependency management with [**Composer**](https://getcomposer.org)

![With Composer](https://img.shields.io/badge/with-Composer-885630.svg?style=flat-square)

## Installation

Using `composer` in your PHP project:

```sh
composer require getolympus/olympus-hermes-translator
```

## Examples

You can easily use the `Hermes` translator thanks to its functions:
```php
/**
 * Load translations.
 *
 * @param  array   $translations
 * @param  string  $locale
 */
Hermes::l([
    'my-custom-domain' => '/absolute/path/to/custom/domain/directory/languages',
    'my-other-domain'  => '/absolute/path/to/other/domain/directory/languages',
    'my-latest-domain' => '/absolute/path/to/latest/domain/directory/languages',
    // (...)
], 'en_US');

/**
 * Noop typo from WordPress.
 *
 * @param  string  $single
 * @param  string  $plural
 * @param  integer $number
 * @param  string  $domain
 *
 * @return string
 */
echo Hermes::n('%s message', '%s messages', 3, 'my-custom-domain');

/**
 * Prepare noop typo from WordPress.
 *
 * @param  string  $single
 * @param  string  $plural
 *
 * @return string
 */
echo Hermes::noop('My %s uniq message', 'My %s messages', 'my-custom-domain');

/**
 * Translate typo.
 *
 * @param  string  $message
 * @param  string  $domain
 *
 * @return string
 */
echo Hermes::t('My custom message to translate', 'my-custom-domain');
```

## Release History

See [**CHANGELOG.md**][changelog-blob] for all details.

## Authors and Copyright

Achraf Chouk  
[![@crewstyle][twitter-image]][twitter-url]

[https://github.com/crewstyle](https://github.com/crewstyle)  
[http://fr.linkedin.com/in/achrafchouk](http://fr.linkedin.com/in/achrafchouk)

Please, read [![MIT][license-image]][license-blob] for more information.

## Contributing

1. Fork it (<https://github.com/GetOlympus/Hermes-Translator/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

---

**Built with ♥ by [Achraf Chouk](http://github.com/crewstyle "Achraf Chouk") ~ (c) since a long time.**

<!-- links & imgs dfn's -->
[olympus-image]: https://img.shields.io/badge/for-Olympus-44cc11.svg?style=flat-square
[olympus-url]: https://github.com/GetOlympus
[changelog-blob]: https://github.com/GetOlympus/Hermes-Translator/blob/master/CHANGELOG.md
[codefactor-image]: https://www.codefactor.io/repository/github/GetOlympus/Hermes-Translator/badge?style=flat-square
[codefactor-url]: https://www.codefactor.io/repository/github/getolympus/Hermes-Translator
[license-blob]: https://github.com/GetOlympus/Hermes-Translator/blob/master/LICENSE
[license-image]: https://img.shields.io/badge/license-MIT_License-blue.svg?style=flat-square
[packagist-image]: https://img.shields.io/packagist/v/getolympus/olympus-Hermes-Translator.svg?style=flat-square
[packagist-url]: https://packagist.org/packages/getolympus/olympus-Hermes-Translator
[php-image]: https://img.shields.io/travis/php-v/GetOlympus/Hermes-Translator.svg?style=flat-square
[travis-image]: https://img.shields.io/travis/GetOlympus/Hermes-Translator/master.svg?style=flat-square
[travis-url]: https://travis-ci.org/GetOlympus/Hermes-Translator
[twitter-image]: https://img.shields.io/badge/crewstyle-blue.svg?style=social&logo=twitter
[twitter-url]: http://twitter.com/crewstyle