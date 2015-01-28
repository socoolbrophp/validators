<?php
namespace SoCoolBroPHP\Validators\Models;
use \SoCoolBroPHP\Validators\Data as Data;

/**
 * @name CheclsObjectModel
 * Description of CheclsObjectModel
 *
 *
 * @date : 2015-01-27
 * @author : adrian
 */
class CheckIsObjectModel implements CheckableValueInterfaceModel {

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
                
                is_object($value)
                
                ){
            
            return Data\TrueData::set();
            
        }
        
        return Data\FalseData::set();
        
    }

}
