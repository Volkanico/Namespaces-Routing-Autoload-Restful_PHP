<?php
$folderPath = $_SERVER['SCRIPT_NAME'];
$urlPath = $_SERVER['REQUEST_URI'];
$url = $urlPath;

define('URL',$url);


echo $folderPath . '<br>';
echo $urlPath . '<br>';
echo $url . '<br>';

//echo '<pre>';
//var_dump($_SERVER);
//echo '<pre>';

?>