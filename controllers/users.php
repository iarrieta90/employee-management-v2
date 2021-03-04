
<?php
class Users extends Controller
{


    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render('users/index');
    }

    function getUsers()
    {
        header('Content-Type: application/json');
        echo json_encode($this->model->getAll());
    }

    function newUser() 
    {
        $this->view->render("users/user");
    }
    function createUser()
    {
        $this->view->message = $this->model->create($_POST) ? "User created correctly" : "User couldn't be created";
        $this->view->render('users/index');
    }

    function deleteUser()
    {
        $query = $this->model->getQueryStringParameters();
        $this->view->message = $this->model->delete($query['data']) ? "User deleted correctly" : "User couldn't be deleted";
        $this->render();
    }

    //TODO: Make the functionality update a user
    // function updateUser()
    // {
    //     $query = $this->model->getQueryStringParameters();
    //     $this->view->message = $this->model->update($query) ? "User updated correctly" : "User couldn't be updated";
    //     $this->render();
    // }

    //TODO: Make the functionality when click on user
    // function user($param = null)
    // {
    //     if ($param) {
    //         $id = $param[0];
    //         $user = $this->model->getById($id);
    //         foreach ($user as $key) {
    //             $user = $key;
    //         }
    //         $this->view->user = $user;
    //         $this->view->render('employee/index');
    //     } else {
    //         $this->view->render('employee/index');
    //     }
    // }

    function userProfile()
    {
        if (isset($_REQUEST['_method'])) {
            $_SERVER['REQUEST_METHOD'] = $_REQUEST['_method'];
            array_splice($_REQUEST, array_search('_method', array_keys($_REQUEST)), 1);
        }
        switch ($_SERVER['REQUEST_METHOD']) {
            // case 'PUT':
            //     $this->updateUser();
            //     break;
            case 'POST':
                $this->createUser();

                break;
        }
    }
}

?>