
<?php

class Dashboard extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render('dashboard/index');
    }

    function getEmployees(){
        $employeesList =  $this->model->getAll();
        $employeesList = json_encode($employeesList);
        header('Content-Type: application/json');
        echo $employeesList;

    }
    function createEmployee() {
        $this->model->create($_POST);
    }

    function deleteEmployee() {
        $query = $this->model->getQueryStringParameters();
        print_r($query['data']);
        $this->model->delete($query['data']);
    }

    function updateEmployee() {
        $query = $this->model->getQueryStringParameters();
        print_r($query);
        $this->model->update($query);
    }

    function employee($param = null) {
        $id = $param[0];
        $employee = $this->model->getById($id);
        echo '<br>';
        foreach ($employee as $key) {
            $employee = $key;
        }
        $this->view->employee = $employee;
        $this->view->render('employee/index');
    }

    function employeeProfile()
    {
        if(isset($_REQUEST['_method'])) {
            $_SERVER['REQUEST_METHOD'] = $_REQUEST['_method'];
            array_splice($_REQUEST, array_search('_method', array_keys($_REQUEST)), 1);
        }
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'PUT':
                $this->updateEmployee();
                $this->render('dashboard/index');
            break;
            case 'POST':
                $this->createEmployee();
                $this->render('dashboard/index');
            break;
        }
    }

}

?>