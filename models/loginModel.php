<?php
    include_once 'models/user.php';
    class LoginModel extends Model {

        function __construct()
        {
            parent::__construct();
        }

        public function get($email,$password){
         
            try {
                $query = $this->db->connect()->prepare('SELECT * FROM users WHERE email = :email');
                $query->execute(['email' => $email]);
                $dataUser = $query->fetch();
                if(password_verify($password, $dataUser['password'])){
                    return $dataUser;
                } else {
                    echo "incorrect email or password";
                    return false;
                }

            } catch(PDOException $e) {
                print_r('Connection error: ' . $e->getMessage()); 
                return null;
            }
        }

        function startSession($userLogin){
            session_start();
            $_SESSION['id'] = $userLogin['id'];
            $_SESSION['start'] = time();
            $_SESSION['duration'] = 600;
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

   
    // function setErrorMessage($message){
    //     $url = $message? "?login=$message" : "";
    //     header("Location: ../../index.php$url");
    //     exit();
    // }
