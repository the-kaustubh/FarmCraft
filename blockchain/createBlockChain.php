<?php
/**
 *
 */
class Block
{
  public $data;
  function __construct($arguments)
  {
    $this->data = $arguments;
  }
  function writeToDB() {

  }
}

$obj = new Block(3);
echo $obj->data;
 ?>
