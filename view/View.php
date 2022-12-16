<?php
namespace view;

class View {
    private $dataToView;

    public function __construct(){   }

    public function render($name,$dataToView) :void
    {
        $this->dataToView = $dataToView;
        $viewPath = 'view/'.$name;

        if(!file_exists($viewPath))
        header("Location: /");

        require_once $viewPath;
        
    }
}