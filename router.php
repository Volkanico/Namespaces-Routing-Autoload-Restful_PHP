<?php

    class Router {
        private $controller;
        private $method;

        public function __construct() {
            $this->matchRoute();
        }
        public function matchRoute() {
            var_dump(URL);

            $url = explode('/',URL);
            
            var_dump($url);
            
            $this->controller = !empty($url[1]) ? $url[1] : 'Camiseta';
            $this->method= !empty($url[2]) ? $url[2] : 'list';

            $this->controller = $this->controller . 'Controller';
            require_once (__DIR__.'/controller/'.$this->controller.'.controller.php');
        }

        public function run() {
             
            $controller = new $this->controller();
            $method = $this->method;
            $controller->$method();    
        }
    }

/*
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

    USE PER METHOD
    require_once './router.php';
    route('/',function(){
    });
    
    $action = $_SERVER['REQUEST_URI'];
    dispatch($action);
    */
?>