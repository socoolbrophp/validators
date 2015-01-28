<?php
namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models as Models;
/**
 * @name CheckIsStringModelModelTest
 * Description of CheckIsStringModelModelTest
 *
 *
 * @date : 2015-01-27
 * @author : adrian
 */
class CheckIsStringModelModelTest extends \PHPUnit_Framework_TestCase {
    
    public $int = 0;
    public $boolean_true = true;
    public $boolean_false = false;
    public $float = 0.0;
    public $string = "abc212335";
    public $array = array();
    public $object = null;
    public $null = null;
    public $resource = null;
    
    public $current_result = null;
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testIntIsFalse(){
        
        $this->int = (int)$this->int;
        
        $this->current_result = Models\CheckIsStringModel::checkValue($this->int);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testBooleanTrueIsFalse(){
        
        $this->boolean_true = (bool)$this->boolean_true;
        
        $this->current_result = Models\CheckIsStringModel::checkValue($this->boolean_true);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testBooleanFalseIsFalse(){
        
        $this->boolean_false = (bool)$this->boolean_false;
        
        $this->current_result = Models\CheckIsStringModel::checkValue($this->boolean_false);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testFloatIsFalse(){
        
        $this->float = (float)$this->float;
        $this->current_result = Models\CheckIsStringModel::checkValue($this->float);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testStringIsTrue(){
        $this->string = (string)$this->string;
        $this->current_result = Models\CheckIsStringModel::checkValue($this->string);
        $this->assertTrue($this->current_result);
        
    }
    
    public function testArrayIsFalse(){
        
        $this->current_result = Models\CheckIsStringModel::checkValue($this->array);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testObjectIsFalse(){
        
        $this->object = new \stdClass();
        $this->current_result = Models\CheckIsStringModel::checkValue($this->object);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testNullIsFalse(){
        
        $this->current_result = Models\CheckIsStringModel::checkValue($this->null);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testResourceIsFalse(){
        
        $this->resource = tmpfile();
        $this->current_result = Models\CheckIsStringModel::checkValue($this->resource);
        $this->assertFalse($this->current_result);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }
    
}
