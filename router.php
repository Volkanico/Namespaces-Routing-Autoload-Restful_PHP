<?php

    $routes = [];

    function route($action,$callback){

        global $routes;

        $action = trim($action,'/');

        $routes[$action] = $callback;
    }

    function dispatch($action){
        global $routes;

        $action = trim($action,'/');

        $callback = $routes[$action];

        echo(call_user_func($callback));
    }

    /* USE PER METHOD
    
    require_once './router.php';

    route('/',function(){

    });
    
    $action = $_SERVER['REQUEST_URI'];
    dispatch($action);
    */
?>