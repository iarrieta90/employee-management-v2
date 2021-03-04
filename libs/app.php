<?php

require_once 'controllers/errors.php';
class App
{

  function __construct()
  {
    $url = isset($_GET['url']) ? $_GET['url'] : null;
    $url = rtrim($url, '/');
    $url = explode('/', $url);


    if (empty($url[0])) {
      $url[0] = 'login';
    }
    session_start();
    // session_destroy();
    if (isset($_SESSION['life'])) {
      if ((time() - $_SESSION['start'] > $_SESSION['life']) && !($url[0] == "login" && $url[1] == "timeout")) {
        header("Location: " . URL . "login/timeout");
        die;
      } else if ($url[0] == 'login' && !($url[1])) {
        header("Location: " . URL . "dashboard");
        die;
      }
    } else if (!($url[0] == "login" || ($url[0] == "login" && $url[1] == "checkLogin"))) {
      header("Location: " . URL);
      die;
    }

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
    } else {
      $controller = new Errors();
    }
  }

}
