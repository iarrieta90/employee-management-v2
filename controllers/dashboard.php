
<?php

class Dashboard extends Controller
{

    function __construct()
    {
        parent::__construct();
    }
    
    function getEmployees(){
        $employeesList =  $this->model->getEmployees();
        $employeesList = json_encode($employeesList);
        header('Content-Type: application/json');
        echo $employeesList;

    }


    function render()
    {
        $this->view->render('dashboard/index');
    }
}

?>