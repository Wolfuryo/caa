<?php
//helper functions
//make this a singleton for no reason :)
class UTILS{

//contains the actual output
private $output;

//singleton
private static $instance;

private function __construct(){
self::$instance=$this;
}

//make the class a singleton
public static function get(){
if(self::$instance===null) {
self::$instance=new self();
}
return self::$instance;
}

public function redirect($url){
header('Location:'.$url);die();
}

//transform a string into a color code
public function color($str){
$code=dechex(crc32($str));
$code=substr($code, 0, 6);
return $code;
}

}