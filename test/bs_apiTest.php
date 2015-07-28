<?php

/**
 * User: Affandy
 * Date: 21/7/2015
 * Time: 11:50 AM
 */

class bs_apiTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->settings = array(
            'blockchains' => array(
                'btc' => array(
                    'base' => 'http://api.blockstrap.com/v0/btc/',
                    'name' => 'Bitcoin'
                ),
                'dash' => array(
                    'base' => 'http://api.blockstrap.com/v0/dash/',
                    'name' => 'DashPay'
                ),
                'doge' => array(
                    'base' => 'http://api.blockstrap.com/v0/doge/',
                    'name' => 'Dogecoin'
                ),
                'ltc' => array(
                    'base' => 'http://api.blockstrap.com/v0/ltc/',
                    'name' => 'Litecoin'
                ),
                'btct' => array(
                    'base' => 'http://api.blockstrap.com/v0/btct/',
                    'name' => 'BTC Testnet'
                ),
                'dasht' => array(
                    'base' => 'http://api.blockstrap.com/v0/dasht/',
                    'name' => 'DASH Testnet'
                ),
                'doget' => array(
                    'base' => 'http://api.blockstrap.com/v0/dogt/',
                    'name' => 'DOGE Testnet'
                ),
                'ltct' => array(
                    'base' => 'http://api.blockstrap.com/v0/ltct/',
                    'name' => 'LTC Testnet'
                ),
                'multi' => array(
                    'base' => 'http://api.blockstrap.com/v0/multi/',
                    'name' => 'Multiple Currencies'
                )
            )
        );

    }

    public function tearDown()
    {

    }

    public function testaddressSuccess(){
        //this is slow because we test real api address
        //should just let only acceptance test run this code?
        $address = array('id' => '1FfmbHfnpaZjKFvyi1okTjJJusN455paPH'); //bitcoin address
        $api = new bs_api($this->settings);
        $result = $api->address($address);
        $this->assertContains('1FfmbHfnpaZjKFvyi1okTjJJusN455paPH', $result);
    }

    public function testaddressFailure(){
        $api = new bs_api();
        $result = $api->address();
        $this->assertFalse($result);
    }

    public function testblockSuccess() {
        //this is slow because we test real api address
        //should just let only acceptance test run this code?
        $blockhash = array('id' => '000000000000000014644706BC35165A903B811843C9E1555ADA4A264B6328DC'); //bitcoin block hash
        $api = new bs_api($this->settings);
        $result = $api->block($blockhash);
        $this->assertContains('000000000000000014644706BC35165A903B811843C9E1555ADA4A264B6328DC', $result);
    }

    public function testblockFailure() {
        $api = new bs_api();
        $result = $api->block();
        $this->assertFalse($result);
    }
    /*We expecting it to fail, but still return json data. bug in API?
     *
     public function testblocksFailure() {
        $api = new bs_api();
        $result = $api->blocks();
        $this->assertFalse($result);
    }
    */

    public function testdecodeFailure() {
        $api = new bs_api();
        $result = $api->decode();
        $this->assertFalse($result);
    }

    public function testdnkeyFailure() {
        $api = new bs_api();
        $result = $api->dnkey();
        $this->assertFalse($result);
    }

    /*
     * We expecting it to fail, but still return json data. bug in API?
     public function testheightFailure() {
        $api = new bs_api();
        $result = $api->height();
        $this->assertFalse($result);
    }
    */

    public function testmarketSuccess() {
        $api = new bs_api($this->settings);
        $result = $api->market();
        $this->assertArrayHasKey('block_count_24hr', $result);
    }

    public function testrelayFailure() {
        $api = new bs_api();
        $result = $api->relay();
        $this->assertFalse($result);
    }

    public function testtransactionFailure() {
        $api = new bs_api();
        $result = $api->transaction();
        $this->assertFalse($result);
    }
}
