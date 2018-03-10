<?php
require_once 'Command.class.php';
require_once 'File.class.php';

/**
* ComcreteCommandクラスに相当する
*/

class CopyCommand implements Command
{
  private $file;
  public function __construct(File $file){
    $this->file = $file;
  }

  public function execute()
  {
    $file = new File('copy_of_'.$this->file->getName());
    $file->create();
  }
}
 ?>
