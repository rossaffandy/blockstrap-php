<?php

/**
 * User: Affandy
 * Date: 21/7/2015
 * Time: 11:00 AM
 */

class bs_blockauthTest extends \PHPUnit_Framework_TestCase
{

    protected $settings;

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

    public function testCheckFailure() {
        $txid = '051FEE135B7D2FE48EB6B815F134B83E1D8AAC5859565A6D5C7F14ADEE55B51F';
        $uid = '3F52161E37D0EBAB7A86EB0A22EDEDE5D69933B0DE4481F2F877F5AFA1263B95';
        $blockchain = 'btc';
        $password = '';

        $blockauth = new bs_blockauth();
        $result = $blockauth->check($txid, $uid, $blockchain, $password);

        $this->assertFalse($result);
    }

    public function testloginFailure() {
        $blockauth = new bs_blockauth();
        $result = $blockauth->login();

        $this->assertFalse($result);
    }

    public function testCheckPasswordFailure() {
        $txid = '051FEE135B7D2FE48EB6B815F134B83E1D8AAC5859565A6D5C7F14ADEE55B51F';
        $uid = '3F52161E37D0EBAB7A86EB0A22EDEDE5D69933B0DE4481F2F877F5AFA1263B95';
        $blockchain = 'btc';
        $password = '123456';

        $blockauth = new bs_blockauth($this->settings);
        $result = $blockauth->check($txid, $uid, $blockchain, $password);

        $this->assertFalse($result);
    }

}
