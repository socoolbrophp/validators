<?php
namespace SoCoolBroPHP\Tests\Arrays;

/**
 * @name IntTable
 * Description of IntTable
 *
 *
 * @date : 2015-01-28
 * @author : adrian
 */
class IntTable {
    
    public static $data = array(
        'array' => 'get',
        'variable' => 'string',
        'size' => '1',
        /**
        * basic -- all
        * array -- array
        * object -- object
        */
        'type' => 'string',
        'get' => array(
            
            'string' => 'string'
            
        )
    );

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

}
