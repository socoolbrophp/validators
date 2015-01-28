<?php
namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models;

/**
 * @name CheckIsFloatModelTest
 * Description of CheckIsFloatModelTest
 *
 *
 * @date : 2015-01-27
 * @author : adrian
 */
class CheckIsFloatModelTest extends \PHPUnit_Framework_TestCase {

    public $int = 0;
    public $boolean_true = true;
    public $boolean_false = false;
    public $float = 0.01;
    public $second_float = 1.2e3;
    public $third_float = 7E-10;
    public $string = "abc212335";
    public $array = array();
    public $object = null;
    public $null = null;
    public $resource = null;
    
    public $current_value = null;
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testIntIsFalse(){
        
        $this->int = (int)$this->int;
        
        $this->current_value = Models\CheckIsFloatModel::checkValue($this->int);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testBooleanTrueIsFalse(){
        
        $this->boolean_true = (bool)$this->boolean_true;
        
        $this->current_value = Models\CheckIsFloatModel::checkValue($this->boolean_true);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testBooleanFalseIsFalse(){
        
        $this->boolean_false = (bool)$this->boolean_false;
        
        $this->current_value = Models\CheckIsFloatModel::checkValue($this->boolean_false);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testFloatIsTrue(){
        
        $this->float = (float)$this->float;
        
        $this->current_value = Models\CheckIsFloatModel::checkValue($this->float);
        $this->assertTrue($this->current_value);
        
    }
    
    public function testSecondFloatIsTrue(){
        
        $this->second_float = (float)$this->second_float;
        
        $this->current_value = Models\CheckIsFloatModel::checkValue($this->second_float);
        $this->assertTrue($this->current_value);
        
    }
    
    public function testThirdFloatIsTrue(){
        
        $this->third_float = (float)$this->third_float;
        
        $this->current_value = Models\CheckIsFloatModel::checkValue($this->third_float);
        $this->assertTrue($this->current_value);
        
    }
    
    public function testStringIsFalse(){
        
        $this->string = (string)$this->string;
        $this->current_value = Models\CheckIsFloatModel::checkValue($this->string);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testArrayIsFalse(){
        
        $this->current_value = Models\CheckIsFloatModel::checkValue($this->array);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testObjectIsFalse(){
        
        $this->object = new \stdClass();
        $this->current_value = Models\CheckIsFloatModel::checkValue($this->object);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testNullIsFalse(){
        
        $this->current_value = Models\CheckIsFloatModel::checkValue($this->null);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testResourceIsFalse(){
        
        $this->resource = tmpfile();
        $this->current_value = Models\CheckIsFloatModel::checkValue($this->resource);
        $this->assertFalse($this->current_value);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }
    
}
