<?php
require_once 'ItemPrototype.class.php';

/**
* ConcretePrototypeクラスに相当する
*/
class ShallowCopyItem Extends ItemPrototype
{
  /**
  * 浅いコプーを行うので、からの実装を行う
  */
  protected function __clone(){}
}
 ?>
