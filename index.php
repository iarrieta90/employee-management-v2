<?php

require_once 'libs/database.php';

require_once 'libs/controller.php';

require_once 'libs/view.php';

require_once 'libs/model.php';

require_once 'libs/app.php';

require_once 'config/config.php';


$app = new App();

session_start();
// session_destroy();
if (isset($_SESSION['life'])) {
    if ((time() - $_SESSION['start'] > $_SESSION['life']) && !($app->getController() == "login" && $app->getMethod() == "timeout")) {
        header("Location: " . URL . "login/timeout");
        die;
    } else if ($app->getController() == 'login' && !($app->getMethod())) {
        header("Location: " . URL . "dashboard");
        die;
    }
    } else if (!($app->getController() == "login" || ($app->getController() == "login" && $app->getMethod() == "checkLogin"))) {
        header("Location: " . URL);
        die;
}

$app->routing();