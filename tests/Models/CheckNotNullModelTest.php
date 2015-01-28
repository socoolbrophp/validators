<?php
namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models as Models;
/**
 * @name CheckNotNullModelTest
 * @date : 2015-01-26
 * @author : adrian
 */
class CheckNotNullModelTest extends \PHPUnit_Framework_TestCase {
    
    protected $currentResult = null;
    public $value = " ";
    public $data = array(
        ""
    );
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testValueIsNotNull(){
        
        $this->currentResult = Models\CheckNotNullModel::check($this->value);
        $this->assertTrue($this->currentResult);
        
    }
    
    public function testArrayIsNotNull(){
        
        $this->currentResult = Models\CheckNotNullModel::check($this->data);
        $this->assertTrue($this->currentResult);
    }
    
    public function testValueIsNull(){
        
        $this->value = null;
        $this->currentResult = Models\CheckNotNullModel::check($this->value);
        $this->assertFalse($this->currentResult);
        
    }
    
    public function testArrayIsNull(){
        
        $this->data = null;
        $this->currentResult = Models\CheckNotNullModel::check($this->data);
        $this->assertFalse($this->currentResult);
        
    }
    
    public function tearDown() {
        parent::tearDown();
        unset($this->currentResult);
    }
    
}
