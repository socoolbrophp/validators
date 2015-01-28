<?php
namespace SoCoolBroPHP\Validators\Models;
use SoCoolBroPHP\Validators\Data as Data;

/**
 * @name CheckableTypeIsArrayModel
 * Description of CheckableTypeIsArrayModel
 *
 *
 * @date : 2015-01-26
 * @author : adrian
 */
class CheckTypeIsArrayModel implements CheckableIsArrayInterface {

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

    public static function check($value = null) {
        
        if(
                
                is_array($value)
                
                ){
            
            return Data\TrueData::set();
            
        }
        
        return Data\FalseData::set();
        
    }

}
