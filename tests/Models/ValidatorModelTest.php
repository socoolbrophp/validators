<?php
namespace SoCoolBroPHP\Tests\Models;
use SoCoolBroPHP\Validators\Models as Models;

/**
 * @name ValidatorModelTest
 * Description of ValidatorModelTest
 *
 *
 * @date : 2015-01-28
 * @author : adrian
 */
class ValidatorModelTest extends \PHPUnit_Framework_TestCase {

    public $null_excepted_result = null;
    public $empty_array = array();
    
    public $current_result = null;
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testValidateTableIsEmpty(){
        
        $this->current_result = Models\ValidatorModel::validate($this->empty_array);
        $this->assertFalse($this->current_result);
        
    }
    
    public function tearDown() {
        parent::tearDown();
    }
    

}
