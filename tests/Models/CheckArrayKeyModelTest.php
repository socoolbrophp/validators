<?php
namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models as Models;

/**
 * @name CheckArrayKeyModelTest
 * Description of CheckArrayKeyModelTest
 *
 *
 * @date : 2015-01-28
 * @author : adrian
 */
class CheckArrayKeyModelTest extends \PHPUnit_Framework_TestCase {
    
    public $data = array(
        'test' => 'test'
    );
    
    public $first_key = 'test';
    public $second_key = 'test1';
    
    public $current_result;
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testCheckArrayModelKeyKeyIsExist(){
        
        $this->current_result = Models\CheckArrayKeyModel::checkArrayKey($this->data, $this->first_key);
        $this->assertTrue($this->current_result);
        
    }
    
    public function testCheckArrayKeyISNotExist(){
        
        $this->current_result = Models\CheckArrayKeyModel::checkArrayKey($this->data, $this->second_key);
        $this->assertFalse($this->current_result);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }
    
}
