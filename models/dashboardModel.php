<?php

class DashboardModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get()
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

    function delete()
    {
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
                    'postalCode' => $newEmployee['PC'],
                    'phoneNumber' => $newEmployee['phoneNumber'],
                ]
            );
                return true;
        } catch (PDOException $e) {
            print_r('Connection error: ' . $e->getMessage());
            return false;
        }
    }

    function update()
    {
    }

    function employee()
    {
    }

    // function getQueryStringParameters()
    // {
    //     parse_str(file_get_contents("php://input"), $query);
    //     return $query;
    // }

}










// function addEmployee(array $newEmployee)
// {
//     // TODO implement it
// }


// function deleteEmployee(string $id)
// {
//     // TODO implement it
// }


// function updateEmployee(array $updateEmployee)
// {
//     $url = '../../resources/employees.json'; // path to your JSON file
//     $data = file_get_contents($url); // put the contents of the file into a variable
//     $employees = json_decode($data, true); // decode the JSON to key value array
//     $employees[$updateEmployee['id'] - 1] = array_replace($employees[$updateEmployee['id'] - 1], $updateEmployee);
//     $updatedEmployeesJson = json_encode($employees, JSON_PRETTY_PRINT);
//     $result = file_put_contents($url, $updatedEmployeesJson);
//     return $result;
// }


// function getEmployee(string $id)
// {
//     $url = '../resources/employees.json'; // path to your JSON file
//     $data = file_get_contents($url); // put the contents of the file into a variable
//     $employees = json_decode($data, true); // decode the JSON to key value array

//     foreach ($employees as $employee) {
//         if ($employee['id'] == $id) {
//             return $employee;
//         }
//     }
// }


// function removeAvatar($id)
// {
//     // TODO implement it
// }


// function getQueryStringParameters()
// {
//     // TODO implement it
// }

// function getNextIdentifier(array $employeesCollection)
// {
//     // TODO implement it
// }

// function setErrorEmployeeMessage($message, $id)
// {
//     $url = $message ? "?employee=$message" : "";
//     header("Location: ../employee.php$url&userId=$id");
//     exit();
// }
