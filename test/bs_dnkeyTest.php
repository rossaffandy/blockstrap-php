<?php

include_once '../modules/blockstrap.php';
include_once '../modules/dnkey.php';

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

    }

    public function tearDown()
    {

    }

    public function testApiWrongSettingFailure()
    {
        $settings = array();
        $this->_dnkey = new bs_dnkey($settings);

        $options = array('chain' => 'btc', 'id' => '1JsoyFgFugGRRY7qkPGTHaKVQpeqf67VVb');
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
}