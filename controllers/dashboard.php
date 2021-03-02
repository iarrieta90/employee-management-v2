
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
        $this->model->create($_POST);
    }


    function render()
    {
        $this->view->render('dashboard/index');
    }
}

?>