<?php
namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models as Models;

/**
 * @name CheckStringLengthModelTest
 * Description of CheckStringLengthModelTest
 *
 *
 * @date : 2015-01-27
 * @author : adrian
 */
class CheckStringLengthModelTest extends \PHPUnit_Framework_TestCase {
    
    public $array = array(
            
            'test' => 'test'
            
            );
    public $first_size = 1;
    public $second_size = 0;
    
    public $current_result;

    public function setUp() {
        parent::setUp();
    }
    
    public function testCheckSizeIsTrue(){
        
        $this->current_result = Models\CheckArraySizeModel::checkSize($this->array, $this->first_size);
        $this->assertTrue($this->current_result);
        
    }
    
    public function testCheckSizeIsFalse(){
        
        $this->current_result = Models\CheckArraySizeModel::checkSize($this->array, $this->second_size);
        $this->assertFalse($this->current_result);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }

}
