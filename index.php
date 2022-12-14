<?php
// Include router class
require_once ('./autoload.php');

// INDEX LIST
Route::add('/',function() {
    echo "welcome";
});

// EDIT_CAMISETA
Route::add('/test.html',function(){
    echo 'Hello from test.html';
});

//DELETE_CAMISETA
Route::add('/contact-form',function(){
    echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
},'get');

// CARRETO
Route::add('/foo/([0-9]*)/bar',function($var1){
    echo $var1.' is a great number!';
});

Route::run('/');
?>