<?php

/**
 * User: Affandy
 * Date: 21/7/2015
 * Time: 11:00 AM
 */

class bs_blockauthTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {

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
}
