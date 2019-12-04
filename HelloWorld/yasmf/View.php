<?php
namespace yasmf;
class View
{
 private $relativePath;
 private $viewParams = array();
 public function __construct($relativePath)
 {
 $this->relativePath = $relativePath;
 }
 public function setVar($key, $value)
 {
 $this->viewParams[$key] = $value;
 return $this;
 }
 public function render()
 {
 // convert view params in variables accessible by the php file
 extract($this->viewParams);
 // "enrole" the php file used to build and send the response
 require_once $_SERVER['DOCUMENT_ROOT'] . "/$this->relativePath.php";
 }
} 