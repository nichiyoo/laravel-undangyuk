<?php

namespace App\Lib;

use stdClass;

class Helper
{
  public static function to_object($array)
  {
    $object = new stdClass();
    foreach ($array as $key => $value) {
      $object->$key = is_array($value) ? self::to_object($value) : $value;
    }
    return $object;
  }
}
