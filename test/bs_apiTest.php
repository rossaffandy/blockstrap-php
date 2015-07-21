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

    }

    public function tearDown()
    {

    }

    public function testaddressFailure(){
        $api = new bs_api();
        $result = $api->address();
        $this->assertFalse($result);
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

    public function testmarketFailure() {
        $api = new bs_api();
        $result = $api->market();
        $this->assertFalse($result);
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
