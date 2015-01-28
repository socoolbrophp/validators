<?php
namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models as Models;

/**
 * @name CheckIssetModelTest
 * Description of CheckIssetModelTest
 *
 *
 * @date : 2015-01-26
 * @author : adrian
 */
class CheckIssetModelTest extends \PHPUnit_Framework_TestCase {
    
    protected $currentResult = null;
    public $value = null;
    public $data = array();

    public function setUp() {
        parent::setUp();
        
    }
    
    public function testCheckValueIsIssetTest(){
        
        $this->value = "";
        $this->currentResult = Models\CheckIssetModel::getInstance()->check($this->value);
        $this->assertTrue($this->currentResult);
        
    }
    
    public function testCheckArrayIsIssetTest(){
        
        $this->currentResult = Models\CheckIssetModel::getInstance()->check($this->data);
        $this->assertTrue($this->currentResult);
        
    }
    
    public function testCheckValueIsNotIsset(){
        
        $this->currentResult = Models\CheckIssetModel::getInstance()->check($this->value);
        $this->assertFalse($this->currentResult);
        
    }
    
    public function tearDown() {
        parent::tearDown();
        unset($this->checkIssetModel);
    }

}
