<?php
spl_autoload_register('my_autoload_class');


<<<<<<< HEAD
function my_autoload_class($my_class){

  $path = "includes/{$path}.php";
=======
function my_autoload_class($class_name){
  include_once "classes/". $class_name .".php";
>>>>>>> c8c9f33f726c0c169a237b742ae01547c2b35a14


}
?>
