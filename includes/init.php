<?php
spl_autoload_register('my_autoload_class');


function my_autoload_class($class_name){
  include_once "classes/". $class_name .".php";


}
?>
