# Olympus Hermes Translator
> **Olympus Hermes Translator** is a bundle used to translate all messages from your WordPress website, its plugins and Olympus bundles.

```sh
composer require getolympus/olympus-hermes-translator
```

---

[![Olympus Component][olympus-image]][olympus-url]
[![CodeFactor Grade][codefactor-image]][codefactor-url]
[![Packagist Version][packagist-image]][packagist-url]
[![MIT][license-image]][license-blob]

---

## Features

+ Better and secure folder structure
+ Dependency management with [**Composer**](https://getcomposer.org)

![With Composer](https://img.shields.io/badge/with-Composer-885630.svg?style=flat-square)

## How to

You can easily use the `Hermes` translator thanks to its functions:
```php

namespace MyCustomPackage;

use GetOlympus\Hermes\Hermes;

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