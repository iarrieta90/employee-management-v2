<!-- File to handle all HTTP request of login interactions -->

<?php
    require_once('login.php');
    //We are checking if the user has clicked the login button

  

    class Login extends Controller 
    {
        function __construct()
        {
           
            $this->view = new View();
        }

        function checkLogin(){
            if (isset($_POST['submit'])) {

                //Getting the data from login form
                $email = $_POST['email'];
                $password = $_POST['password'];
        
                // Checking if the inputs are empty
                if (empty($email) || empty($password)) {
                    setErrorMessage("Please fill in all the fields");
                    exit();
                }
                elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    //Checking if email is valid
                    setErrorMessage("Please write a valid email");
                    exit();
                }
                elseif (verifyUser($email, $password)) {
                    //Checking if this user is valid
                    // header("Location: ../dashboard.php");
                   return true;
                    exit();
                }
                else {
                    setErrorMessage("Incorrect user credentials");
                    exit();
                }
            }
            elseif (isset($_GET['logout'])){
                session_start();
                session_destroy();
                // header("Location: ../../index.php");
                return false;
            }
            else {
                // header("Location: ../../index.php");
                return false;
            }
        }

        function render($direction){
            $this->view->render($direction);
        }

    }
    









    
?>
