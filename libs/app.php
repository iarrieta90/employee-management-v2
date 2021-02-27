<?php

class App
{

    function __construct()
    {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (!isset($_SESSION['id'])) {
            $controllerPath = 'controllers/login.php';
            require_once $controllerPath;
            $controller = new Login();
            $controller->loadModel('loginModel');
            if(isset($_POST['submit'])){
                $controller->checkLogin($_POST['email'], $_POST['password']);
            }  
            $controller->render('login/index');
        } else {
            if (empty($url[0])) {
                $controllerPath = 'controllers/dashboard.php';
                require_once $controllerPath;
                $controller = new Dashboard();
                $controller->loadModel('dashboardModel');
                $controller->render('dashboard/index');
            } else {

            }
        
        }
    }
}
