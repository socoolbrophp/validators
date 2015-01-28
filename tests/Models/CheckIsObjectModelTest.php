<?php
namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models as Models;
/**
 * @name CheckIsObjectTest
 * Description of CheckIsObjectTest
 *
 *
 * @date : 2015-01-27
 * @author : adrian
 */
class CheckIsObjectModelTest extends \PHPUnit_Framework_TestCase {
    
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
        
        $this->current_result = Models\CheckIsObjectModel::checkValue($this->resource);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testFalseIsFalse(){
        
        $this->boolean_false = (bool)$this->boolean_false;
        
        $this->current_result = Models\CheckIsObjectModel::checkValue($this->boolean_false);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testBooleanTrueIsFalse(){
        
        $this->boolean_true = (boolean)$this->boolean_true;
        
        $this->current_result = Models\CheckIsObjectModel::checkValue($this->boolean_true);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testFloatIsFalse(){
        
        $this->float = (float)$this->float;
        
        $this->current_result = Models\CheckIsObjectModel::checkValue($this->float);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testStringIsFalse(){
        
        $this->string = (string)$this->string;
        
        $this->current_result = Models\CheckIsObjectModel::checkValue($this->string);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testArrayIsFalse(){
        
        $this->array = array();
        
        $this->current_result = Models\CheckIsObjectModel::checkValue($this->array);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testObjectIsTrue(){
        
        $this->object = new \stdClass();
        
        $this->current_result = Models\CheckIsObjectModel::checkValue($this->object);
        $this->assertTrue($this->current_result);
        
    }
    
    public function testNullIsFalse(){
        
        $this->null = null;
        
        $this->current_result = Models\CheckIsObjectModel::checkValue($this->null);
        $this->assertFalse($this->current_result);
        
    }
    
    public function testResourceIsFalse(){
        
        $this->resource = tmpfile();
        
        $this->current_result = Models\CheckIsObjectModel::checkValue($this->resource);
        $this->assertFalse($this->current_result);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }
    
}
