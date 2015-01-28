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
    
    public $first_string = 'test';
    public $first_string_size = 4;
    public $second_string = 'test';
    public $second_string_size = 3;
    
    public $current_result;

    public function setUp() {
        parent::setUp();
    }
    
    public function testCheckSizeIsTrue(){
        
        $this->current_result = Models\CheckStringLengthModel::checkSize($this->first_string, $this->first_string_size);
        $this->assertTrue($this->current_result);
        
    }
    
    public function testCheckSizeIsFalse(){
        
        $this->current_result = Models\CheckStringLengthModel::checkSize($this->second_string, $this->second_string_size);
        $this->assertFalse($this->current_result);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }

}
