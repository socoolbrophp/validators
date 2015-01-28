<?php
namespace SoCoolBroPHP\Validators\Models;
use SoCoolBroPHP\Validators\Data as Data;

/**
 * @name CheckArraySizeModel
 * Description of CheckArraySizeModel
 *
 *
 * @date : 2015-01-27
 * @author : adrian
 */
class CheckArraySizeModel implements SizeableModelInterface {

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

    public static function checkSize($value = null, $size = null) {
        
        $arraySize = Data\SizeArrayData::getValue($value);
        
        if(
                
                CheckNotNullModel::check($size) &&
                CheckIssetModel::check($size) &&
                CheckNotNullModel::check($value) &&
                CheckIssetModel::check($value) &&
                $arraySize == $size
            
                ){
            
            return Data\TrueData::set();
            
        }
        
        return Data\FalseData::set();
    }

}
