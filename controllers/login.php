<!-- File to handle all HTTP request of login interactions -->

<?php
    require_once('login.php');


    class Login extends Controller
    {
        function __construct()
        {
            parent::__construct();
            // $this->view = new View();
            $this->view->mensaje = "";
        }


        function checkLogin($sessionEmail, $sessionPassword){
           $email =  $sessionEmail;
           $password =  $sessionPassword;
           $userLogin = $this->model->get($email, $password);
           print_r($userLogin);
           if($userLogin != null){
                $this->model->startSession($userLogin);
                $this->view->render('dashboard/index');
            } else {
                $this->view->message = "Login incorrect";
                echo "login incorrect";
                $this->view->render('login/index');
            }


        }




        function render($direction){
            $this->view->render($direction);
        }

    }











?>
