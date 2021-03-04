<?php

class UsersModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getAll()
    {

        try {

            $query = $this->db->connect()->query("SELECT*FROM users");

            $usersList = $query->fetchAll(PDO::FETCH_ASSOC);
            return $usersList;

        } catch (PDOException $e) {
            print_r('Connection error: ' . $e->getMessage());
            return null;
        }
    }

    function delete($id)
    {
        try {
            $query = $this->db->connect()->prepare("DELETE FROM users WHERE id = :id");
            $query->execute([
                'id' => $id
            ]);
            return true;

        } catch (PDOException $e) {
            print_r('Connection error: ' . $e->getMessage());
            return false;
        }
    }
    function create($newUser)
    {
        try {
            $query = $this->db->connect()->prepare("INSERT INTO users
            (name, email, password) VALUES 
            (:name, :email, :password)");

            $query->execute(
                [
                    'name' => $newUser['name'],
                    'email' => $newUser['email'],
                    'password' => password_hash($newUser['password'], PASSWORD_DEFAULT)
                ]
            );
                return true;
        } catch (PDOException $e) {
            print_r('Connection error: ' . $e->getMessage());
            return false;
        }
    }


    function update($updateUser)
    {
        try {
            $query = $this->db->connect()->prepare("UPDATE users SET 
            name = :name WHERE id = :id");
            $query->execute([
                'id' => $updateUser['id'],
                'name' => $updateUser['name']
            ]);
            return true;

        } catch (PDOException $e) {
            print_r('Connection error: ' . $e->getMessage());
            return false;
        }

    }

    function getById($id) 
    {
        try {

            $query = $this->db->connect()->query("SELECT*FROM users WHERE id = $id");

            $user = $query->fetchAll(PDO::FETCH_ASSOC);
            return $user;

        } catch (PDOException $e) {
            print_r('Connection error: ' . $e->getMessage());
            return null;
        }
    }

    function getQueryStringParameters()
    {
        parse_str(file_get_contents("php://input"), $query);
        return $query;
    }

}