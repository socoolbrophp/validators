<?php
namespace SoCoolBroPHP\Tests\Models;
use \SoCoolBroPHP\Validators\Models as Models;

/**
 * @name CheckIsEmptyModelTest
 * Description of CheckIsEmptyModelTest
 *
 *
 * @date : 2015-01-26
 * @author : adrian
 */
class CheckIsEmptyModelTest extends \PHPUnit_Framework_TestCase {
    
    public $current_result = null;
    public $value = null;
    public $data = array("value");
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testTypeIsEmpty(){
        
        foreach($this->data as $key){
            $this->current_result = Models\CheckIsEmptyModel::check($key);
            $this->assertTrue($this->current_result);
        }
        
    }
    
    public function testTypeIsNotEmpty(){
        
        $this->current_result = Models\CheckIsEmptyModel::check($this->value);
        $this->assertFalse($this->current_result);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }
    
}
