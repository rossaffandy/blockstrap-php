[![Build Status](https://travis-ci.org/rossaffandy/blockstrap-php.svg?branch=UnitTest)](https://travis-ci.org/rossaffandy/blockstrap-php)
[![Coverage Status](https://coveralls.io/repos/rossaffandy/blockstrap-php/badge.svg?branch=UnitTest&service=github)](https://coveralls.io/github/rossaffandy/blockstrap-php?branch=UnitTest)

## Blockstrap PHP SDK

The long-term plan for all of our SDKs is to recreate the full-functionality of our [HTML5 Framework](http://github.com/blockstrap/framework).

For now, the following PHP modules exist:

* __blockstrap__ (core)
* __api__ (requires blockstrap and cache)
* __blockauth__ (authentication via blockchains)
* __cache__ (uses simple session storage)
* __dnkey__ (support for [DNKey](http://dnkey.org) and [BlockAuth](http://blockauth.org)

### Blockstrap Core

Blockstrap core currently provides the following __public__ functions:

* __debug__ (prettier object prints)
* __get_var__ (better $_POST / $_GET functionality)

### API Module

The API module currently provides the following __public__ functions:

* __address__ (mapped to address/transactions)
* __block__ (mapped to block)
* __blocks__ (mapped to block/latest)
* __decode__ (mapped to transaction/decode)
* __dnkey__ (mapped to transaction/decode)
* __height__ (mapped to block/height)
* __market__ (mapped to market/stats)
* __relay__ (mapped to transaction/relay)
* __transaction__ (mapped to transaction/id)

The Cache Module is required for all external API calls.

### BlockAuth Module

The BlockAuth module currently provides the following __public__ functions:

* __check__ (checks the supplied transaction to verify the supplied password)
* __login__ (basic wrapper to first collect DNKey info if supplied before checking credentials)

The API Module is required for the __check__ function to work.

The DNKey Module s required for the __login__ function to work.

### Cache Module

The cache module currently provides the following __public__ functions:

* __read__ (read from session storage)
* __write__ (write to session storage)

### DNKey Module

The DNKey module currently provides the following __public__ functions:

* __api__ (used if accessed via api module)
* __get__ (used if from standalone include)

### Unit Test

phpunit --configuration phpunit.xml --coverage-text

```php
Code Coverage Report:
  2015-07-21 13:31:57

 Summary:
  Classes:  0.00% (0/5)
  Methods: 46.88% (15/32)
  Lines:   39.29% (288/733)

@bs::bs_api
  Methods:  31.25% ( 5/16)   Lines:  63.24% (215/340)
@bs::bs_blockauth
  Methods:  25.00% ( 1/ 4)   Lines:  20.31% ( 13/ 64)
@bs::bs_cache
  Methods:  80.00% ( 4/ 5)   Lines:  92.86% ( 26/ 28)
@bs::bs_dnkey
  Methods:  66.67% ( 2/ 3)   Lines:  23.81% ( 20/ 84)
blockstrap
  Methods:  75.00% ( 3/ 4)   Lines:  77.78% ( 14/ 18)
```

--------------------------

For more information, please visit - [docs.blockstrap.com](http://docs.blockstrap.com)