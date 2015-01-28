<?php
namespace SoCoolBroPHP\Tests\Arrays;

/**
 * @name IntIntoTable
 * Description of IntIntoTable
 *
 *
 * @date : 2015-01-28
 * @author : adrian
 */
class IntIntoTable {

    
    public static $data = array(
        'array' => 'get',
        'variable' => 'int',
        'size' => '1',
        /**
        * basic -- all
        * array -- array
        * object -- object
        */
        'type' => 'int',
        'get' => array(
            
            'int' => 4
            
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
