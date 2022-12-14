<?php
spl_autoload_register('autoload');
function autoload($className){
    $extension = ".php";
    $fullpath = $className . $extension;
    include_once $fullpath;
}
?>