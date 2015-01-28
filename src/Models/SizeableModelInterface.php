<?php
namespace SoCoolBroPHP\Validators\Models;
/**
 * @name CountableArrayModelInterface
 * Description of CountableArrayModelInterface
 *
 *
 * @date : 2015-01-27
 * @author : adrian
 */
interface SizeableModelInterface {
    public static function checkSize($value = null, $size = null);
}
