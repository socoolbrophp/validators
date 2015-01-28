<?php
namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models as Models;

/**
 * @name CheckTypeModelTest
 * Description of CheckTypeModelTest
 *
 *
 * @date : 2015-01-28
 * @author : adrian
 */
class CheckTypeModelTest extends \PHPUnit_Framework_TestCase {
    
    public $current_result;
    
    public function setUp() {
        parent::setUp();
    }
    
    public function checkIntIntoTable(){
        
        $this->current_result = Models\CheckTypeModel::checkArrayKey($data, $key)
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }
    

}
