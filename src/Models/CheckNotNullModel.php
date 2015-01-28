<?php

namespace SoCoolBroPHP\Validators\Models;
use \SoCoolBroPHP\Validators\Data as Data;

/**
 * @name CheckNotNullModel
 * Description of CheckNotNullModel
 *
 *
 * @date : 2015-01-26
 * @author : adrian
 */
class CheckNotNullModel implements CheckableNullModel {

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

    public static function check($multipart = null) {
        
        if(
                
                !is_null($multipart)
                
                ){
            
            return Data\TrueData::set();
            
        }
        
        return Data\FalseData::set();
        
    }

}
