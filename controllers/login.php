<!-- File to handle all HTTP request of login interactions -->

<?php
    require_once('login.php');


    class Login extends Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->view->mensaje = "";
        }


        function checkLogin(){
            if(isset($_POST['email']) && isset($_POST['password'])){
                if($userLogin = $this->model->get($_POST['email'], $_POST['password'])){
                     $this->model->startSession($userLogin);
                     header('Location:' . URL . 'dashboard');
                 } else {
                     $this->view->message = "Login incorrect";
                     echo "login incorrect";
                     $this->view->render();
                 }
     
            }
           

        }

        

        function render(){
            $this->view->render('login/index');
        }

    }











?>
