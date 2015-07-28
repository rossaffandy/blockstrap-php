<?php

/**
 * User: Ross Affandy
 * Date: 20/7/2015
 * Time: 9:51 AM
 */

class bs_dnkeyTest extends \PHPUnit_Framework_TestCase
{
    private $_dnkey = null;

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

    public function testApiWrongSettingFailure()
    {
        $this->_dnkey = new bs_dnkey($this->settings);

        $options = array('chain' => 'btc', 'id' => 'blockstrap.com');
        $result = $this->_dnkey->api($options);

        $this->assertContains(false, $result);
    }


    public function testApiNoSettingFailure()
    {
        $array = array();
        $this->_dnkey = new bs_dnkey($array);

        $result = $this->_dnkey->api();
        $this->assertFalse($result);
    }

    public function testApigetFailure()
    {
        $this->_dnkey = new bs_dnkey($this->settings);

        $options = array('host' => 'blockstrap.com');
        $result = $this->_dnkey->get($options);
        $this->assertContains(false, $result);
    }
}