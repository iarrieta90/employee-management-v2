<?php

class DashboardModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getAll()
    {

        try {

            $query = $this->db->connect()->query("SELECT*FROM employees");

            $employeesList = $query->fetchAll(PDO::FETCH_ASSOC);
            return $employeesList;

        } catch (PDOException $e) {
            print_r('Connection error: ' . $e->getMessage());
            return null;
        }
    }

    function delete($id)
    {
        try {
            $query = $this->db->connect()->prepare("DELETE FROM employees WHERE id = :id");
            $query->execute([
                'id' => $id
            ]);
            return true;

        } catch (PDOException $e) {
            print_r('Connection error: ' . $e->getMessage());
            return false;
        }
    }
    function create($newEmployee)
    {
        try {
            $query = $this->db->connect()->prepare("INSERT INTO employees
            (name, email, age, streetAddress, city, state, postalCode, phoneNumber) VALUES 
            (:name, :email, :age, :streetAddress, :city, :state, :postalCode, :phoneNumber)");

            $query->execute(
                [
                    'name' => $newEmployee['name'],
                    'email' => $newEmployee['email'],
                    'age' => $newEmployee['age'],
                    'streetAddress' => $newEmployee['streetAddress'],
                    'city' => $newEmployee['city'],
                    'state' => $newEmployee['state'],
                    'postalCode' => $newEmployee['postalCode'],
                    'phoneNumber' => $newEmployee['phoneNumber'],
                ]
            );
                return true;
        } catch (PDOException $e) {
            print_r('Connection error: ' . $e->getMessage());
            return false;
        }
    }


    function update($updateEmployee)
    {
        try {
            $query = $this->db->connect()->prepare("UPDATE employees SET 
            name = :name, lastName = :lastName, email = :email, gender = :gender, age = :age, streetAddress = :streetAddress, city = :city, state = :state, postalCode = :postalCode, phoneNumber = :phoneNumber, avatar = :avatar
            WHERE id = :id");
            $query->execute([
                'id' => $updateEmployee['id'],
                'name' => $updateEmployee['name'],
                'lastName' => $updateEmployee['lastName'],
                'email' => $updateEmployee['email'],
                'gender' => $updateEmployee['gender'],
                'age' => $updateEmployee['age'],
                'streetAddress' => $updateEmployee['streetAddress'],
                'city' => $updateEmployee['city'],
                'state' => $updateEmployee['state'],
                'postalCode' => $updateEmployee['postalCode'],
                'phoneNumber' => $updateEmployee['phoneNumber'],
                'avatar' => $updateEmployee['avatar']
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

            $query = $this->db->connect()->query("SELECT*FROM employees WHERE id = $id");

            $employee = $query->fetchAll(PDO::FETCH_ASSOC);
            return $employee;

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