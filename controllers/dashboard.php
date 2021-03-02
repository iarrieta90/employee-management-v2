
<?php

class Dashboard extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function getEmployees(){
        $employeesList =  $this->model->get();
        $employeesList = json_encode($employeesList);
        header('Content-Type: application/json');
        echo $employeesList;

    }
    function createEmployee() {
            // $name = $_POST['name'];
            // $email = $_POST['email'];
            // $age = $_POST['age'];
            // $streetAddress = $_POST['streetAddress'];
            // $city = $_POST['city'];
            // $state = $_POST['state'];
            // $postalCode = $_POST['PC'];
            // $phoneNumber = $_POST['phoneNumber'];

        $this->model->create([$_POST['name'], $_POST['email'], $_POST['age'], $_POST['streetAddress'], $_POST['city'], $_POST['state'], $_POST['PC'], $_POST['phoneNumber']]);
    }


    function render()
    {
        $this->view->render('dashboard/index');
    }
}

?>