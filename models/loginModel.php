<?php
    class LoginModel extends Model {

        function __construct()
        {
            parent::__construct();
        }

        public function get($user){
         
            try {
                $query = $this->db->connect()->prepare('SELECT * FROM users WHERE email = :email');
                $query->execute(['email' => $user['email']]);
                $dataUser = $query->fetch();
                if(password_verify($user['password'], $dataUser['password'])){
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




    }
