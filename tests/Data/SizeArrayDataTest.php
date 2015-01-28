<?php
namespace SoCoolBroPHP\Tests\Data;
use SoCoolBroPHP\Validators\Data as Data;

/**
 * @name StringLengthDataTest
 * Description of StringLengthDataTest
 *
 *
 * @date : 2015-01-27
 * @author : adrian
 */
class SizeArrayDataTest extends \PHPUnit_Framework_TestCase {
    
    public $array = array(
        
        'test' => 'test'
        
    );
    public $first_size = 1;
    public $second_size = 0;
    
    public $currentResult = null;
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testGetValueAssertEquals(){
        
        $this->currentResult = Data\SizeArrayData::getValue($this->array);
        $this->assertEquals($this->first_size, $this->currentResult);
        
    }
    
    public function testGetValueAssertNotEquals(){
        
        $this->currentResult = Data\SizeArrayData::getValue($this->array);
        $this->assertNotEquals($this->second_size, $this->currentResult);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }

}
