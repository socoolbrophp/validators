<?php
namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models as Models;
/**
 * @name CheckIsBooleanModelTests
 * Description of CheckIsBooleanModelTests
 *
 *
 * @date : 2015-01-27
 * @author : adrian
 */
class CheckIsBooleanModelTest extends \PHPUnit_Framework_TestCase {
    
    public $int = 0;
    public $boolean_true = true;
    public $boolean_false = false;
    public $float = 0.0;
    public $string = "abc212335";
    public $array = array();
    public $object = null;
    public $null = null;
    public $resource = null;
    
    public $current_value;
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testIntIsFalse(){
        
        $this->int = (int)$this->int;
        
        $this->current_value = Models\CheckIsBooleanModel::checkValue($this->int);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testBooleanFalseIsTrue(){
        
        $this->boolean_false = (bool)$this->boolean_false;
        
        $this->current_value = Models\CheckIsBooleanModel::checkValue($this->boolean_false);
        $this->assertTrue($this->current_value);
        
    }
    
    public function testBooleanTrueIsTrue(){
        
        $this->boolean_true = (bool)$this->boolean_true;
        
        $this->current_value = Models\CheckIsBooleanModel::checkValue($this->boolean_true);
        $this->assertTrue($this->current_value);
        
    }
    
    public function testFloatIsFalse(){
        
        $this->float = (float)$this->float;
        
        $this->current_value = Models\CheckIsBooleanModel::checkValue($this->float);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testStringIsFalse(){
        
        $this->string = (string)$this->string;
        
        $this->current_value = Models\CheckIsBooleanModel::checkValue($this->string);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testArrayIsFalse(){
        
        $this->array = array();
        
        $this->current_value = Models\CheckIsBooleanModel::checkValue($this->array);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testObjectIsFalse(){
        
        $this->object = new \stdClass();
        
        $this->current_value = Models\CheckIsBooleanModel::checkValue($this->object);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testNullIsFalse(){
        
        $this->null = null;
        
        $this->current_value = Models\CheckIsBooleanModel::checkValue($this->null);
        $this->assertFalse($this->current_value);
        
    }
    
    public function testResourceIsFalse(){
        
        $this->resource = tmpfile();
        
        $this->current_value = Models\CheckIsBooleanModel::checkValue($this->resource);
        $this->assertFalse($this->current_value);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }
    
}
