<?php
namespace yasmf;
class HttpHelper
{
 public static function getParam($name) {
 return isset($_GET[$name]) ? $_GET[$name] : null;
 }
}