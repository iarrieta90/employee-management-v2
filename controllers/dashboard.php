
<?php

class Dashboard extends Controller
{

    function __construct()
    {
        parent::__construct();

        switch ($_SERVER['REQUEST_METHOD']) {

            case "GET":
            //   if (isset($_REQUEST['employeeId'])) {
            //     $employee = getEmployee($_GET['employeeId']);
            //   }
              if (isset($_REQUEST['getEmployees'])) {
                print_r($_REQUEST['getEmployees']);
              }
              break;
          
            // case "POST":
            //   $_REQUEST['id'] = getNextIdentifier(json_decode(getAllEmployees(), true));
          
            //   if (isset($_REQUEST['employeePage'])) {
            //     array_splice($_REQUEST, array_search('employeePage', array_keys($_REQUEST)), 1);
            //     addEmployee($_REQUEST);
            //     header('Location: ../dashboard.php?success=Employee created corectly');
            //     exit;
            //   } else {
            //     $_REQUEST['lastName'] = "";
            //     $_REQUEST['gender'] = "";
            //     $_REQUEST['avatar'] = isset($_REQUEST['avatar']) ? $_REQUEST['avatar'] : "../assets/images/no-user.png";
            //     addEmployee($_REQUEST);
            //     header('Content-Type: application/json');
            //     echo json_encode($_REQUEST['id']);
            //   }
            //   break;
          
            // case "PUT":
            //   $query = getQueryStringParameters();
            //   if (isset($query['employeePage'])) {
            //     updateEmployee($query);
            //     header('Location: ../dashboard.php?success=Employee updated corectly');
            //     exit;
            //   } else {
            //     updateEmployee($query);
            //   }
            //   break;
          
            // case "DELETE":
            //   $query = getQueryStringParameters();
            //   deleteEmployee($query['data']);
            //   break;
          }
    }

    function render()
    {
        $employeesList =  $this->model->getEmployees();
        // print_r($employeesList);
        // $this->view->employeesList = $employeesList;
        $this->view->render('dashboard/index');
        echo $employeesList;
    }
}







// require_once('employeeManager.php');

// //We are checking if the user has clicked the submit button
// if (isset($_POST['submit'])) {
//     print_r($_POST);

//     //We are deleting submit item from $_POST array
//     unset($_POST['submit']);

//     if (updateEmployee($_POST)){
//         setErrorEmployeeMessage("Employee Successfully Saved!", $_POST['id']);
//         exit();
//     }
//     else {
//         setErrorEmployeeMessage("Faile To Save!", $_POST['id']);
//         exit();
//     }

// }

// //We are checking if the user has clicked the return button
// if (isset($_POST['return'])) {
//     header("Location: ../dashboard.php$url");
//     exit();
// }
?>