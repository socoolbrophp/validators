<?php
namespace SoCoolBroPHP\Validators\Models;
/**
 * @name CheckableArrayValueInterface
 * Description of CheckableArrayValueInterface
 *
 *
 * @date : 2015-01-28
 * @author : adrian
 */
interface CheckableArrayKeyModelInterface {
    
    public static function checkArrayKey(array $data, $key = null);
    
}
