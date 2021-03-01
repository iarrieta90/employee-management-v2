<?php

class App
{

    function __construct()
    {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $nparam = count($url);

        if (!isset($_SESSION['id'])) {
            $controllerPath = 'controllers/login.php';
            require_once $controllerPath;
            $controller = new Login();
            $controller->loadModel($url[0]);
            if(isset($_POST['submit'])){
                if($nparam > 1){
                    $controller->{$url[1]}($_POST['email'], $_POST['password']);
                } else {
                    echo "else";
                }
            }  
            $controller->render('login/index');
        } else {
            if (empty($url[0])) {
                $controllerPath = 'controllers/dashboard.php';
                require_once $controllerPath;
                $controller = new Dashboard();
                $controller->loadModel('dashboard');
                $controller->render('dashboard/index');
            } else {

            }
        
        }
    }
}
