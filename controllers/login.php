<?php
    class Login extends Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->view->mensaje = "";
        }

        function render(){
            $this->view->render('login/index');
        }

        function checkLogin(){
            if(isset($_POST['email']) && isset($_POST['password'])){
                if($userLogin = $this->model->get($_POST)){
                    $this->saveSession($userLogin);
                    header('Location:' . URL . 'dashboard');

                 } else {
                     $this->view->message = "incorrect email or password";
                     $this->view->render('login/index');
                     
                 }

            }
        }

        function logOut()
        {
            session_destroy();
            $this->view->message = "logged out correctly";
            $this->view->render('login/index');

        }

        function timeout()
        {
            session_destroy();
            $this->view->message = "session expired!";
            $this->view->render('login/index');

        }

        function saveSession($userLogin){
            $_SESSION['id'] = $userLogin['id'];
            $_SESSION['name'] = $userLogin['name'];
            $_SESSION['start'] = time();
            $_SESSION['life'] = 600;
    
            return true;
        }

    }











?>
