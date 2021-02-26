<?php

class App {

    function __construct()
    {
        $archivoController = 'controllers/login.php';
        require_once $archivoController;
        $controller = new Login();

        if($controller->checkLogin()){
            $controller->loadModel('login');
            $controller->render('dashboard/index');
        } else {
            $controller->render('login/index');
        }




        $url = isset($_GET['url'])? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if(empty($url[0])){
            
        }

    }




}
