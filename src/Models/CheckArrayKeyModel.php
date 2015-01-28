<?php
namespace SoCoolBroPHP\Validators\Models;
use SoCoolBroPHP\Validators\Data as Data;

/**
 * @name CheckKeyModel
 * Description of CheckKeyModel
 *
 *
 * @date : 2015-01-28
 * @author : adrian
 */
class CheckArrayKeyModel implements CheckableArrayKeyModelInterface {

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

    public static function checkArrayKey(array $data, $key = null) {
        
        if(
                
                array_key_exists($key, $data)
                
                ){
            
            return Data\TrueData::set();
            
        }
        
    return Data\FalseData::set();
        
    }
}
