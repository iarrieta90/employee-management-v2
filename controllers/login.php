<?php
    class Login extends Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->view->mensaje = "";
        }


        function checkLogin(){
            if(isset($_POST['email']) && isset($_POST['password'])){
                if($userLogin = $this->model->get($_POST)){
                    $session = new Session;
                    $istrue = $session->startSession($userLogin);
                    if($istrue) {
                        $this->view->render('dashboard/index');
                        header('Location:' . URL . 'dashboard');
                    }
                 } else {
                    //  $this->view->message = "Login incorrect";
                    //  echo "login incorrect";
                    //  $this->view->render();
                 }

            }
        }

        function logOut()
        {
            session_start();
            session_destroy();
        }

        function render(){
            $this->view->render('login/index');
        }

    }











?>
