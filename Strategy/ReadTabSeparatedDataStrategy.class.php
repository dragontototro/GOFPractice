<?php
require_once 'ReadItemDataStrategy.class.php';

/**
* タブ区切りデータを読み込む
* ConcreteStrategyに相当する
*/
class ReadTabSeparatedDataStrategy extends ReadItemDataStrategy
{
  /**
  * データファイルを読み込み、オブジェクトの配列で返す
  * @param string データファイル名
  * @return データオブジェクトの配列
  */

  protected function readData($filename){
    $fp = fopen($filename,'r');

    /**
    * ヘッダ行を抜く
    */
    $dummy = fgets($fp,4096);

    /**
    * データの読み込み
    */
    $return_value = array();
    while($buffer = fgets($fp,4096)){
      $data = explode("\t",trim($buffer));
      if (count($data) !== 4) {
        continue;
      }
      list($item_code,$item_name,$price,$release_date) = $data;
      $obj = new stdClass();
      $obj->item_name = $item_name;
      $obj->item_code = $item_code;
      $obj->price = $price;
      $obj->release_date = new DateTime($release_date);
      $return_value[] = $obj;
    }
    fclose($fp);
    return $return_value;
  }
}
 ?>
