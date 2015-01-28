<?php
namespace SoCoolBroPHP\Validators\Models;
use SoCoolBroPHP\Validators\Data;
/**
 * @name CheckIsString
 * Description of CheckIsString
 *
 *
 * @date : 2015-01-27
 * @author : adrian
 */
class CheckIsStringModel implements CheckableValueInterfaceModel {

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
        
        if(
                
                is_string($value)
                
                ){
            
            return Data\TrueData::set();
            
        }
        
        return Data\FalseData::set();
    }

}
