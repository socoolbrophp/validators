<?php
namespace SoCoolBroPHP\Validators\Models;
use SoCoolBroPHP\Validators\Data;

/**
 * @name CheckTypeModel
 * Description of CheckTypeModel
 *
 *
 * @date : 2015-01-28
 * @author : adrian
 */
class CheckTypeModel implements CheckableValueInterfaceModel, TypableModelInterface, CheckableArrayKeyModelInterface {

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
                
        CheckIssetModel::check($value['type']) &&
        CheckNotNullModel::check($value['type']) &&
        CheckIssetModel::check($value['variable']) &&
        CheckNotNullModel::check($value['variable']) &&
                self::checkArrayKey($value['array'], $value['variable']) 
                
                ){
            
            return self::checkType($value['array']);
            
        } else if(
                
            CheckIssetModel::check($value['type']) &&
            CheckNotNullModel::check($value['type']) &&
            CheckIssetModel::check($value['variable']) &&
            CheckNotNullModel::check($value['variable']) &&
                !self::checkArrayKey($value['array'], $value['variable']) 
                
                ) {
            $value['array'] = $value;
            return self::checkType($value);
            
        }
        
        return Data\FalseData::set();
        
    }

    public static function checkType($value) {
        
        switch($value['type']){
            
            case 'int':
                return CheckIsIntModel::checkValue($value['variable']);
                break;
            case 'float':
                return CheckIsFloatModel::checkValue($value['variable']);
                break;
            case 'string':
                return CheckIsStringModel::checkValue($value['variable']);
                break;
            case 'boolean':
                return CheckIsBooleanModel::checkValue($value['variable']);
                break;
            case 'object':
                return CheckIsObjectModel::checkValue($value['variable']);
                break;
            case 'array':
                return CheckTypeIsArrayModel::check($value['variable']);
                break;
            case 'null':
                break;
            case 'empty':
                return CheckIsEmptyModel::check($value);
                break;
            case 'null':
                return CheckNotNullModel::check($multipart);
                break;
            case 'resource':
                return CheckIsResourceModel::checkValue($value);
                break;
            default :
                return Data\FalseData::set();
        }
        
    }

    public static function checkArrayKey(array $data, $key = null) {
        
        if(
                
        CheckArrayKeyModel::checkArrayKey($data, $key)
                
                ){
            
            return Data\TrueData::set();
            
        }
        
        return Data\FalseData::set();
        
    }

}
