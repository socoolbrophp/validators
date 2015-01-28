<?php
namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models as Models;
/**
 * @name CheckTypeIsArrayTest
 * Description of CheckTypeIsArrayTest
 *
 *
 * @date : 2015-01-26
 * @author : adrian
 */
class CheckTypeIsArrayModelTest extends \PHPUnit_Framework_TestCase {
    
    protected $currentResult = null;
    public $value = null;
    public $data = array();
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testStringIsArray(){
        
        $this->currentResult = Models\CheckTypeIsArrayModel::check($this->value);
        $this->assertFalse($this->currentResult);
    }
    
    public function testArrayIsArray(){
        
        $this->currentResult = Models\CheckTypeIsArrayModel::check($this->data);
        $this->assertTrue($this->currentResult);
        
    }
    
    public function testNullIsArray(){
        
        $this->currentResult = Models\CheckTypeIsArrayModel::check(null);
        $this->assertFalse($this->currentResult);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }

}
