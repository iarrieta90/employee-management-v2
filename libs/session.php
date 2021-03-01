<?php

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
}

//TODO mirar el el session helper si la sesión ha acabado o no