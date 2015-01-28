<?php
namespace SoCoolBroPHP\Validators\Models;
use SoCoolBroPHP\Validators\Data as Data;

/**
 * @name ValidatorModel
 * Description of ValidatorModel
 *
 *
 * @date : 2015-01-28
 * @author : adrian
 */
class ValidatorModel implements ValidatableModel {
    
    private static $minimalValidateTableSize = 1;

    private static $instances = array();

    protected function __construct() {
        
    }

    protected function __clone() {
        
    }

    public function __wakeup() {
        throw new Exception("Cannot unserialize singleton");
    }

    public static function getInstance() {
        $cls = get_called_class(); // late-static-bound class name
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static;
        }
        return self::$instances[$cls];
    }

    public static function validate(array $data = null) {
        
        if(CheckArraySizeModel::checkSize($data) >= self::$minimalValidateTableSize){
            
            return CheckTypeModel::checkType($data);
            
        }
        
        return Data\FalseData::set();
        
    }

}
