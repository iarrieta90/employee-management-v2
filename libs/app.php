<?php

require_once 'controllers/errors.php';
class App
{

    function __construct()
    {
        // session_destroy();
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        // $login = new Session();
        // var_dump($login);

        // if ($login->isLoggedIn($url[0].'/checkLogin')) {
            if (empty($url[0])) {
                require_once 'controllers/login.php';
                $controller = new Login();
                $controller->render();
            } else {
                $controllerRoute = 'controllers/' . $url[0] . '.php';
                if (file_exists($controllerRoute)) {
                  require_once $controllerRoute;
                  $controller = new $url[0];
                  $controller->loadModel($url[0]);
                  $nparam = sizeof($url);
                  if ($nparam > 2) {
                    $param = [];
                    for ($i = 2; $i < $nparam; $i++) {
                      array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                  } else if ($nparam > 1) {
                    $controller->{$url[1]}();
                  } else {
                    $controller->render();
                  }
                } else{
                    $controller = new Errors();
                }
            }

        
        // } else {
        //     $controllerPath = 'controllers/login.php';
        //     require_once $controllerPath;
        //     $controller = new Login();
        //     $controller->loadModel($url[0]);
        //     $controller->render('login/index');

        // }
    }
}
