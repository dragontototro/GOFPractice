<?php
require_once 'DisplaySourceFileImpl.class.php';
require_once 'DisplaySourceFileImpl2.class.php';
/**
* DisplaySourceFileImplクラスをインスタンス化する
*/
$show_file = new DisplaySourceFileImpl('./ShowFile.class.php');
$show_file2 = new DisplaySourceFileImpl2('./ShowFile.class.php');

/**
* プレーンテキストとハイライトしたファイル内容をそれぞれ表示する
*/
//$show_file->display();
//$show_file->showPlain();
$show_file2->display();
 ?>
