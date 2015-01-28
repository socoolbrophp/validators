<?php
namespace SoCoolBroPHP\Tests\Data;
use SoCoolBroPHP\Validators\Data as Data;

/**
 * @name TrueDataTest
 * Description of TrueDataTest
 *
 *
 * @date : 2015-01-26
 * @author : adrian
 */
class TrueDataTest extends \PHPUnit_Framework_TestCase{
    
    protected $trueData;
    protected $true = null;
    
    public function setUp() {
        parent::setUp();
        $this->trueData = Data\TrueData::getInstance();
    }
    
    public function testTrueIsTrue(){
        
        $this->true = $this->trueData->set();
        $this->assertTrue($this->true);
        
    }
    
    public function tearDown() {
        parent::tearDown();
        unset($this->trueData);
    }
    
}
