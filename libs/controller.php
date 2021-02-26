<?php

class Controller {

    function __construct()
    {
        $this->view = new View();
    }

    function loadModel($model){
        $url = 'models/'. $model . '.php';
        if(file_exists($url)){
            require $url;
            $this->model = new $model();
        }
    }
}



?>