<?php
namespace SoCoolBroPHP\Validators\Data;
/**
 * @name StrlenStringData
 * Description of StrlenStringData
 *
 *
 * @date : 2015-01-27
 * @author : adrian
 */
class StrlenStringData implements SetableValueInterfaceData {

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

    public static function getValue($value) {
        
        return strlen($value);
        
    }

}
