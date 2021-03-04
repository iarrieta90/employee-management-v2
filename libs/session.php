<?php
require_once 'helpers/sessionHelper.php';
class Session
{

    function isLoggedIn($url)
    {

        if (isset($_SESSION['id']) || $url == 'login/checkLogin') {
            return true;
        } else {
            return false;
        }
    }
    function startSession($userLogin){
        session_start();
        $_SESSION['id'] = $userLogin['id'];
        $_SESSION['start'] = time();
        $_SESSION['life'] = 600;
        isSessionAlive($_SESSION['start'], $_SESSION['life']);
        return true;
    }

    function closeUserSession($sessionTime, $sessionDuration){
        if($sessionTime >= $sessionDuration){
            session_start();
            session_destroy();
            header("Location: ../index.php");
            exit();
        }
    }
}

//TODO mirar el el session helper si la sesión ha acabado o no