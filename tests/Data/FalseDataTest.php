<?php
namespace SoCoolBroPHP\Tests\Data;
use SoCoolBroPHP\Validators\Data as Data;
/**
 * @name FalseDataTest
 * Description of FalseDataTest
 *
 *
 * @date : 2015-01-26
 * @author : adrian
 */
class FalseDataTest extends \PHPUnit_Framework_TestCase {
    protected $falseData;
    protected $false = null;
    
    public function setUp() {
        parent::setUp();
        $this->falseData = Data\FalseData::getInstance();
    }
    
    public function testFalseIsTrue(){
        
        $this->false = $this->falseData->set();
        $this->assertFalse($this->false);
        
    }
    
    public function tearDown() {
        parent::tearDown();
        unset($this->falseData);
    }
}
