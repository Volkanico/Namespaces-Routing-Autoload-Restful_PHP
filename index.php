<?php
use controller\camisetaController;
use routes\Route;

require_once 'autoload.php';

//Productes
Route::add('/', function () {
    $controller = new camisetaController();
    $controller->list();
    
});

Route::add('/form', function () {
    $controller = new camisetaController();
    $controller->edit();
});

Route::add('/product/add', function () {
    $controller = new camisetaController();
    $controller->save();
}, 'POST');

Route::add('/product/confirmDelete', function () {
    $controller = new camisetaController();
    $controller->confirmDelete();
});

Route::add('/product/delete', function () {
    $controller = new camisetaController();
    $controller->delete();
});

Route::run();
/*
use controller\camisetaController;
use routes\Route;

require_once ('./autoload.php');



// INDEX LIST
Route::add('/',function() {
    
    $controller = new camisetaController;
    $dataToView["data"] = array();
if(method_exists($controller,$_GET["action"])) $dataToView["data"] = $controller->{$_GET["action"]}();

   $controller->list();
   require_once './view/'.$controller->view.'.php';
   
},'get');

// EDIT_CAMISETA
Route::add('/test.html',function(){
    echo 'Hello from test.html';
},'post');

//DELETE_CAMISETA
Route::add('/contact-form',function(){
    echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
},'get');

// CARRETO
Route::add('/foo/([0-9]*)/bar',function($var1){
    echo $var1.' is a great number!';
},'get');

Route::run('/');*/
?>