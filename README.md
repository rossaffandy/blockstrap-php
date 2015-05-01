## Blockstrap SDKs

We currently provide support and examples for the following languages:

* PHP | [SDK Docs](https://github.com/blockstrap/sdks/tree/master/php)

More languages and a more detailed specification coming soon!

Priority languages:

* NodeJS
* JavaScript
* Ruby
* Python
* Java
* GO
* ASP
* C++
* VB

Priority platforms:

* iOS
* Android
* Coccoa
* Windows

__Please suggest other lamguages and platforms!__

---------------------

### Modules

The required modules for each language should include:

* __blockstrap__ (core)
* __api__ (requires blockstrap and cache)
* __cache__ (optionally removed if no native cache availabile - _please see below_)

### API Module

The API module should provide the following minimum public functions:

* __address__ (mapped to address/transactions)
* __block__ (mapped to block)
* __blocks__ (mapped to block/latest)
* __decode__ (mapped to transaction/decode)
* __height__ (mapped to block/height)
* __market__ (mapped to market/stats)
* __relay__ (mapped to transaction/relay)
* __transaction__ (mapped to transaction/id)

The end result should either be `false` or a valid data array or object.

Example seen below for __PHP__ using `$api->height(array('chain'=>'btc', 'id'=>1066))`:

```
Array
(
    [id] => 00000000FECD0D39A38004FD68F750DF914176CE5F7096F10D40F92451692B3B
    [size] => 216
    [height] => 1066
    [version] => 1
    [merkel_root] => 1BE48B9C3F64C621933CFD770AF351B5D995C18CF1A88DB1336ADF772300F8AC
    [time] => 1232398573
    [time_display] => 2009-01-19T20:56:13+00:00
    [nonce] => 425968641
    [chainwork] => 0000000000000000000000000000000000000000000000000000000000000000042B042B042B
    [bits] => 486604799
    [prev_block_id] => 00000000901629857911AF89940F25968FED60168ECEFE3F843EA98ED604032D
    [next_block_id] => 000000000037504B6BDD57439970D748EAC0F091945F8B12373E83C1BBC46C79
    [confirmations] => 349006
    [is_main_chain] => 1
    [tx_count] => 1
    [coinbase_value] => 5000000000
    [coinbase_value_fiat_now] => 12,349.55
    [coinbase_value_disp] => 50.00000000
    [input_value] => 0
    [input_value_fiat_now] => 0.00
    [input_value_disp] => 0.00000000
    [output_value] => 5000000000
    [output_value_fiat_now] => 12,349.55
    [output_value_disp] => 50.00000000
    [fees] => 0
    [fees_fiat_now] => 0.00
    [fees_disp] => 0.00000000
    [total_satoshies] => 5335000000000
    [total_seconds] => 1392068
    [satoshi_seconds] => 2131741272500000000
    [total_satoshi_seconds] => 2172789500000000000
    [destroyed_satoshi_seconds] => 0
    [transactions] => Array
        (
            [0] => Array
                (
                    [id] => 1BE48B9C3F64C621933CFD770AF351B5D995C18CF1A88DB1336ADF772300F8AC
                    [size] => 135
                    [version] => 1
                    [time] => 1232398573
                    [time_display] => 2009-01-19T20:56:13+00:00
                    [is_coinbase] => 1
                    [fees] => 0
                    [fees_fiat_now] => 0.00
                    [fees_disp] => 0.00000000
                    [block_id] => 00000000FECD0D39A38004FD68F750DF914176CE5F7096F10D40F92451692B3B
                    [block_height] => 1066
                    [block_time] => 1232398573
                    [block_time_display] => 2009-01-19T20:56:13+00:00
                    [confirmations] => 349006
                    [input_count] => 0
                    [input_value] => 0
                    [input_value_fiat_now] => 0.00
                    [input_value_disp] => 0.00000000
                    [output_count] => 1
                    [output_value] => 5000000000
                    [output_value_fiat_now] => 12349.55
                    [output_value_disp] => 50.00000000
                    [inputs] => Array
                        (
                        )

                    [outputs] => Array
                        (
                            [0] => Array
                                (
                                    [pos] => 0
                                    [script_pub_key] => 4104CE72CF88AD916387204F5F3AEDE0C43643841A5DB6A73437EFA0B697F0F07B16DD7E0F842B12DCE70F83B64F9888E8C2D55F06DB5226B6C82ACC8343194FB551AC
                                    [pubkey_hash] => 3586964BDF60F0CC8693B9E63373DEF9AEFF1E7D
                                    [address] => 15t23SezMVMzy4E8W7bEv6aYnuWgTozUec
                                    [value] => 5000000000
                                    [value_fiat_now] => 12349.55
                                    [value_disp] => 50.00000000
                                    [spending_tx_id] => 
                                    [spending_tx_pos] => 0
                                    [is_spent] => 0
                                )

                        )

                )

        )

)
```

Each of the public API functions should support the following variables with the example below showing the default options allocated to the `$api->height()` function:

```
$options = array(
    'debug' => false,
    'details' => false,
    'method' => 'block/height',
    'chain' => $this::$blockchain,
    'base' => $this::$options['blockchains'][$this::$blockchain]['base'],
    'id' => false,
    'showtxn' => 0,
    'showtxnio' => 1
);
```

### Cache Module

The cache module should provide the following minimum public functions (required by API module):

* __read__
* __write__

If there is no native solution available to the relevant platform, these functions should still be delpoyed and left as return boolean values until the data module is also available for that platform. List of available native cache solutions and their corresponding platforms can be seen below:

* __PHP__ uses $_SESSION
* __JS__ uses LocalStorage

--------------------------

For more information, please visit - [docs.blockstrap.com](http://docs.blockstrap.com)