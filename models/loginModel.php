<?php
    include_once 'models/user.php';
    class LoginModel extends Model {

        function __construct()
        {
            parent::__construct();
        }

        public function get($email,$password){
            $user = new User();
            try {
                $query = $this->db->connect()->prepare('SELECT * FROM users WHERE email=:email AND password=:password');
                $query->execute(['email' => $email, 'password' => $password]);

                while($dataUser = $query->fetch()){
                    $user->id = $dataUser['user_no'];
                    $user->email = $dataUser['email'];
                    $user->password = $dataUser['password'];
                }

                return $user;

            } catch(PDOException $e) {
                print_r('Connection error: ' . $e->getMessage()); 
                return null;
            }
        }

        function startSession($userLogin){
            session_start();
            $_SESSION['id'] = $userLogin['user_no'];
            $_SESSION['email'] = $userLogin['email'];
            $_SESSION['start'] = time();
            $_SESSION['duration'] = 600;
        }


    }

   
    // function setErrorMessage($message){
    //     $url = $message? "?login=$message" : "";
    //     header("Location: ../../index.php$url");
    //     exit();
    // }
