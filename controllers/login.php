<!-- File to handle all HTTP request of login interactions -->

<?php
    require_once('login.php');
    

    class Login extends Controller 
    {
        function __construct()
        {
            parent::__construct();
            $this->view = new View();
        }


        function checkLogin($sessionEmail, $sessionPassword){
           $email =  $sessionEmail;
           $password =  $sessionPassword;
           $userLogin = $this->model->get($email, $password);
            if($userLogin != null){
                $this->model->startSession($userLogin);
                $this->view->render('dashboard/index');
            } else {
                $this->view->message = "Login incorrect";
                $this->view->render('login/index');
            }


        }




        function render($direction){
            $this->view->render($direction);
        }

    }
    









    
?>
