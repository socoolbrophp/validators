<?php
namespace SoCoolBroPHP\Validators\Models;
use SoCoolBroPHP\Validators\Data as Data;
/**
 * @name CheckIsIntModel
 * Description of CheckIsIntModel
 *
 *
 * @date : 2015-01-26
 * @author : adrian
 */
class CheckIsIntModel implements CheckableValueInterfaceModel {

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

    public static function checkValue($value = null) {
        
        if(is_int($value)){
            
            return Data\TrueData::set();
            
        }
        
        return Data\FalseData::set();
        
    }

}
