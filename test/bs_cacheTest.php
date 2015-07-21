<?php

/**
 * User: Ross Affandy
 * Date: 14/7/2015
 * Time: 2:51 PM
 */

# running from the cli doesn't set $_SESSION here on phpunit
if (!isset($_SESSION)) $_SESSION = array();

class bs_cacheTest extends \PHPUnit_Framework_TestCase
{
    public static $shared_session = array();
    private $_testCache = null;

    public function __construct()
    {
        ob_start();
    }

    protected function setUp()
    {
        $_SESSION = bs_cacheTest::$shared_session;

    }

    public function tearDown()
    {
        bs_cacheTest::$shared_session = $_SESSION;
    }

    public function testWriteRead()
    {

        $key = 'test';
        $value = 'testing';
        $term = '';

        $cache = new bs_cache();

        $cache->write($key, $value, $term);

        $record = $cache->read($key, $term);

        $this->assertEquals($value, $record);

    }

}