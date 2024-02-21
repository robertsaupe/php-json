# php-json

[![Minimum PHP version: 8.2](https://img.shields.io/badge/php-8.2%2B-blue.svg?color=blue&style=for-the-badge)](https://packagist.org/packages/robertsaupe/php-json)
[![Packagist Version](https://img.shields.io/packagist/v/robertsaupe/php-json?color=blue&style=for-the-badge)](https://packagist.org/packages/robertsaupe/php-json)
[![Packagist Downloads](https://img.shields.io/packagist/dt/robertsaupe/php-json?color=blue&style=for-the-badge)](https://packagist.org/packages/robertsaupe/php-json)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=for-the-badge)](LICENSE)

php library for json and jsonc parsing

## Supporting

[GitHub](https://github.com/sponsors/robertsaupe) |
[Patreon](https://www.patreon.com/robertsaupe) |
[PayPal](https://www.paypal.com/donate?hosted_button_id=SQMRNY8YVPCZQ) |
[Amazon](https://www.amazon.de/ref=as_li_ss_tl?ie=UTF8&linkCode=ll2&tag=robertsaupe-21&linkId=b79bc86cee906816af515980cb1db95e&language=de_DE)

## Installing

```sh
composer require robertsaupe/php-json
```

## Getting started

### Json

```php
use robertsaupe\Json\Json;

$json = new Json();
print_r($json->decodeFile('path_to_file.json'));
```

### Jsonc

```php
use robertsaupe\Json\Jsonc;

$jsonc = new Jsonc();
print_r($jsonc->decodeFile('path_to_file.jsonc'));
```

## Credits

- [box-project/box](https://github.com/box-project/box) for basic Json parsing
  - Kevin Herrera <kevin@herrera.io>
  - Théo Fidry <theo.fidry@gmail.com>

- Alexander Shostak <https://stackoverflow.com/a/43439966> for decode commented json
