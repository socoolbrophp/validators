<?php
namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models as Models;

/**
 * @name CheckIsIntTest
 * Description of CheckIsIntTest
 *
 *
 * @date : 2015-01-26
 * @author : adrian
 */
class CheckIsIntModelTest extends \PHPUnit_Framework_TestCase {
    
    public $int = 3;
    public $boolean_true = true;
    public $boolean_false = false;
    public $float = 0.1;
    public $string = "abc212335";
    public $array = array();
    public $object;
    public $null = null;
    public $resource = null;
    public $maxInteger32BitsPlatform = 2147483647;
    public $minInteger32BitsPlatform = -2147483648;
    public $maxInteger64BitsPlatform = 9223372036854775807;
    public $minInteger64BitsPlatform = - -9223372036854775808;
    
    public $current_result = null;
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testMinInteger64BitsPlatform(){
        
        $min64Bits = $this->minInteger64BitsPlatform - 1;
        $this->current_result = Models\CheckIsIntModel::checkValue($min64Bits);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testMaxInteger64BitsPlatform(){
        
        $max64Bits = $this->maxInteger64BitsPlatform + 1;
        $this->current_result = Models\CheckIsIntModel::checkValue($max64Bits);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testMinInteger32BitsPlatform(){
        
        $min32Bits = $this->minInteger32BitsPlatform - 1;
        $this->current_result = Models\CheckIsIntModel::checkValue($min32Bits);
        $this->assertTrue($this->current_result);
        
    }
    
    public function testMaxInteger32BitsPlatform(){
        
        $max32Bits = $this->maxInteger32BitsPlatform + 1;
        $this->current_result = Models\CheckIsIntModel::checkValue($max32Bits);
        $this->assertTrue($this->current_result);
        
    }
    
    public function testIntIsTrue(){
        
        $integer = \settype($this->int, 'integer');
        
        $this->current_result = Models\CheckIsIntModel::checkValue($integer);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testBooleanTrueIsFalse(){
        
        $this->current_result = Models\CheckIsIntModel::checkValue($this->boolean_true);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testBooleanFalseIsFalse(){
        
        $this->current_result = Models\CheckIsIntModel::checkValue($this->boolean_false);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testFloatIsFalse(){
        
        $this->current_result = Models\CheckIsIntModel::checkValue($this->float);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testStringIsFalse(){
        
        $this->current_result = Models\CheckIsIntModel::checkValue($this->string);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testArrayIsFalse(){
        
        $this->current_result = Models\CheckIsIntModel::checkValue($this->array);
        $this->assertFalse($this->current_result);
        
    }
    
    public function checkObjectIsFalse(){
        
        $this->object = new \stdClass();
        $this->current_result = Models\CheckIsIntModel::checkValue($this->object);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testNullIsFalse(){
        
        $this->current_result = Models\CheckIsIntModel::checkValue($this->null);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testResourceIsFalse(){
        
        $resource = tmpfile();
        $this->current_result = Models\CheckIsIntModel::checkValue($resource);
        $this->assertFalse($this->current_result);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }
    
}
