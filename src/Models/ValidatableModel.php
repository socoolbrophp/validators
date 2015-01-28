<?php
namespace SoCoolBroPHP\Validators\Models;
/**
 * @name ValidatableModel
 * Description of ValidatableModel
 *
 *
 * @date : 2015-01-28
 * @author : adrian
 */
interface ValidatableModel {
    
    public static function validate(array $data = null);
    
    
}
