<?php
//include_once '../modules/blockstrap.php';

/**
 * User: Affandy
 * Date: 14/7/2015
 * Time: 2:51 PM
 */
class blockstrapTest extends \PHPUnit_Framework_TestCase
{

    private $key, $value;

    protected function setUp()
    {
        $_POST = array();
        $_GET = array();

        $this->key = 'test';
        $this->value = 'testing';
    }

    public function tearDown()
    {

    }

    public function testGetVarPost() {
        $_POST = array($this->key => $this->value);

        $bs = new blockstrap();
        $result = $bs->get_var($this->key);

        $this->assertEquals($this->value, $result);
    }

    public function testGetVarGet() {
        $_GET = array($this->key => $this->value);

        $bs = new blockstrap();
        $result = $bs->get_var($this->key);

        $this->assertEquals($this->value, $result);
    }

    public function testGetVarFailure() {

        $bs = new blockstrap();
        $result = $bs->get_var($this->key);

        $this->assertFalse($result);
    }
}
