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
class StringLengthDataTest extends \PHPUnit_Framework_TestCase {
    
    public $string = 'test';
    public $first_size = 4;
    public $second_size = 3;
    
    public $currentResult = null;
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testGetValueAssertEquals(){
        
        $this->currentResult = Data\StrlenStringData::getValue($this->string);
        $this->assertEquals($this->first_size, $this->currentResult);
        
    }
    
    public function testGetValueAssertNotEquals(){
        
        $this->currentResult = Data\StrlenStringData::getValue($this->string);
        $this->assertNotEquals($this->second_size, $this->currentResult);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }

}
