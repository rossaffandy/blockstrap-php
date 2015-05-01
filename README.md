## Blockstrap PHP SDK

The long-term plans for all of our SDKs is to recreate the full-functionality of our [HTML5 Framework](http://github.com/blockstrap/framework).

For now, the following modules exist:

* __blockstrap__ (core)
* __api__ (requires blockstrap and cache)
* __dnkey__ (support for [DNKey](http://dnkey.org) and [BlockAuth](http://blockauth.org)

### API Module

The API module scurrently provides the following __public__ functions:

* __address__ (mapped to address/transactions)
* __block__ (mapped to block)
* __blocks__ (mapped to block/latest)
* __decode__ (mapped to transaction/decode)
* __dnkey__ (mapped to transaction/decode)
* __height__ (mapped to block/height)
* __market__ (mapped to market/stats)
* __relay__ (mapped to transaction/relay)
* __transaction__ (mapped to transaction/id)

--------------------------

For more information, please visit - [docs.blockstrap.com](http://docs.blockstrap.com)