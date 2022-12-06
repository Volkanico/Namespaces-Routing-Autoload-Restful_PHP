<?php
spl_autoload_register('autoloadModel');
function autoloadModel($className){
    
    $extension = ".class.php";
    $fullpath = $className . $extension;
    include_once $fullpath;
}


?>