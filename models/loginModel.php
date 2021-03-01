<?php
    include_once 'models/user.php';
    class LoginModel extends Model {

        function __construct()
        {
            parent::__construct();
        }

        public function get($email,$password){
            // $users= [];
            try {
                $query = $this->db->connect()->prepare('SELECT * FROM users WHERE email = :email');
                $query->execute(['email' => $email]);
                $dataUser = $query->fetch();
                if(password_verify($password, $dataUser['password']))
                print_r($dataUser);
                //     echo "hello fetch";
                //     $user = new User();
                //     $user->id = $dataUser['user_no'];
                //     $user->email = $dataUser['email'];
                //     $user->password = $dataUser['password'];
                //     print_r($dataUser['user_no']);
                //     array_push($users, $user);
                
                // print_r($users);
                return $dataUser;

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


    }

   
    // function setErrorMessage($message){
    //     $url = $message? "?login=$message" : "";
    //     header("Location: ../../index.php$url");
    //     exit();
    // }
