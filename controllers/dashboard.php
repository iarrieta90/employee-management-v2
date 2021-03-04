
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

    function getEmployees()
    {
        header('Content-Type: application/json');
        echo json_encode($this->model->getAll());
    }

    function createEmployee()
    {
        $this->view->message = $this->model->create($_POST) ? "employee created correctly" : "employee couldn't be created";
        if (isset($_POST['employeeProfile'])) {
            $this->view->render('dashboard/index');
        } else {
            echo $this->view->message;
        }
    }

    function deleteEmployee()
    {
        $query = $this->model->getQueryStringParameters();
        $this->view->message = $this->model->delete($query['data']) ? "employee deleted correctly" : "employee couldn't be deleted";
        $this->render();
    }

    function updateEmployee()
    {
        $query = $this->model->getQueryStringParameters();
        $this->view->message = $this->model->update($query) ? "employee updated correctly" : "employee couldn't be updated";
        if (isset($query['employeeProfile'])) {
            $this->render();
        } else {
            echo $this->view->message;
        }
    }

    function employee($param = null)
    {
        if ($param) {
            $id = $param[0];
            $employee = $this->model->getById($id);
            foreach ($employee as $key) {
                $employee = $key;
            }
            $this->view->employee = $employee;
            $this->view->render('employee/index');
        } else {
            $this->view->render('employee/index');
        }
    }

    function employeeProfile()
    {
        if (isset($_REQUEST['_method'])) {
            $_SERVER['REQUEST_METHOD'] = $_REQUEST['_method'];
            array_splice($_REQUEST, array_search('_method', array_keys($_REQUEST)), 1);
        }
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'PUT':
                $this->updateEmployee();
                break;
            case 'POST':
                $this->createEmployee();

                break;
        }
    }
}

?>