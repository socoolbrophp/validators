<?php

namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models;

/**
 * @name CheckTrimValueModelTest
 * Description of CheckTrimValueModelTest
 *
 *
 * @date : 2015-01-27
 * @author : adrian
 */
class CheckTrimValueModelTest extends \PHPUnit_Framework_TestCase {

    public $current_result = null;
    public $firstStringValue = 'test';
    public $secondStringValue = '';
    public $thirdStringValue = '       ';
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testValueIsNotOnlyWhiteSpaces(){
        
        $this->current_result = Models\CheckTrimValueModel::checkValue($this->firstStringValue);
        $this->assertTrue($this->current_result);
        
    }
    
    public function testValueIsZeroChars(){
        
        $this->current_result = Models\CheckTrimValueModel::checkValue($this->secondStringValue);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testValueIsOnlyWhiteSpaces(){
        
        $this->current_result = Models\CheckTrimValueModel::checkValue($this->thirdStringValue);
        $this->assertFalse($this->current_result);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }
    

}
