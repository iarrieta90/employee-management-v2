<!-- TODO Employee view -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="../assets/css/employee.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/error.css">
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include_once('../assets/html/header.html'); ?>
    <?php
        include_once("./library/sessionHelper.php");

        session_start();
        $sessionStart = $_SESSION["start"];
        $sessionDuration = $_SESSION["duration"];
        $sessionTime = time() - $sessionStart;

        if(!isset($_SESSION["id"])){
            header("Location: ../index.php");
        }
        else {
            closeUserSession($sessionTime, $sessionDuration);
        }
        // $sessionStart = $_SESSION["start"];
        // $sessionDuration = $_SESSION["duration"];
        // $sessionTime = time() - $sessionStart;

        // if(isset($_SESSION["id"])){
        //     closeUserSession($sessionTime, $sessionDuration);
        // }
    ?>
    <!-- <header class="header">
        <section class="title">
            <h4>Employees Manager</h4>
        </section>
        <ul class="nav-links">
            <li>
                <a href="http://127.0.0.1/php-employee-management-v1/src/library/loginController.php?logout='true'">Login</a>
            </li>
            <li>
                <a href="http://127.0.0.1/php-employee-management-v1/src/dashboard.php">Dashboard</a>
            </li>
            <li>
                <a href="http://127.0.0.1/php-employee-management-v1/src/employee.php">Employee</a>
            </li>
        </ul>

        <section class="searchBar-container">
            <form class="searchBar" action="" method="get">
                <input id="headerSearch" class="searchBar__input" type="text" name="searchValue" required>
                <button class="searchBar__submit" id="searchBtn" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </section>
        <section class="logout-container">
            <a href="./library/loginController.php?logout='true'"><button class="logoutBtn" id="logout"> Log Out </button></a>
        </section>
    </header> -->
    <?php if (isset($_GET['employee'])) {
            $employeeCheck = $_GET['employee'];
            if (strpos($employeeCheck, 'Success') !== false) {
                echo '<aside class="success_message">
                        <p class="error">'.$employeeCheck.'</p>
                    </aside>';
            }
            else {
                echo '<aside class="error_message">
                        <p class="error">'.$employeeCheck.'</p>
                    </aside>';
            }
        }
    ?>
    <?php
    include_once('./library/employeeManager.php');
    ?>
    <section class="section-employee">
        <form action="./library/employeeController.php" method="POST" class="employee" id="employee">
            <div class="employee__grupo" id="grupo__name">
                <label for="name" class="employee__label">First name</label>
                <input type="hidden" name="id" id="id" value="<?=getEmployee('2')['id']?>">
                <input type="text" class="employee__input" name="name" id="name" value="<?=getEmployee('2')['name']?>">
            </div>
            <div class="employee__grupo" id="grupo__lastName">
                <label for="lastName" class="employee__label">Last name</label>
                <input type="text" class="employee__input" name="lastName" id="lastName" value="<?=getEmployee('2')['lastName']?>">
            </div>
            <div class="employee__grupo" id="grupo__email">
                <label for="email" class="employee__label">Email address</label>
                <input type="email" class="employee__input" name="email" id="email" value="<?=getEmployee('2')['email']?>">
            </div>
            <div class="employee__grupo" id="grupo__gender">
                <label for="gender" class="employee__label">Gender</label>
                <select name="gender" class="employee__input">
                    <option value="man" <?=(getEmployee("2")["gender"] == "man") ? "selected" : ""?>>man</option>
                    <option value="woman" <?=(getEmployee("2")["gender"] == "woman") ? "selected" : ""?>>woman</option>
                </select>
            </div>
            <div class="employee__grupo" id="grupo__city">
                <label for="city" class="employee__label">City</label>
                <input type="text" class="employee__input" name="city" id="city" value="<?=getEmployee('2')['city']?>">
            </div>
            <div class="employee__grupo" id="grupo__streetAddress">
                <label for="streetAddress" class="employee__label">Street address</label>
                <input type="text" class="employee__input" name="streetAddress" id="streetAddress" value="<?=getEmployee('2')['streetAddress']?>">
            </div>
            <div class="employee__grupo" id="grupo__state">
                <label for="state" class="employee__label">State</label>
                <input type="text" class="employee__input" name="state" id="state" value="<?=getEmployee('2')['state']?>">
            </div>
            <div class="employee__grupo" id="grupo__age">
                <label for="age" class="employee__label">Age</label>
                <input type="text" class="employee__input" name="age" id="age" value="<?=getEmployee('2')['age']?>">
            </div>
            <div class="employee__grupo" id="grupo__postalCode">
                <label for="postalCode" class="employee__label">Postal code</label>
                <input type="text" class="employee__input" name="postalCode" id="postalCode" value="<?=getEmployee('2')['postalCode']?>">
            </div>
            <div class="employee__grupo" id="grupo__phoneNumber">
                <label for="phoneNumber" class="employee__label">Phone number</label>
                <input type="text" class="employee__input" name="phoneNumber" id="phoneNumber" value="<?=getEmployee('2')['phoneNumber']?>">
            </div>
            <div class="employee__grupo employee__grupo-btn-enviar">
                <input type="submit" name="return" class="btn returnbtn" id="cancelbtn" value="Return"></input>
                <input type="submit" name="submit" class="btn submitbtn" id="loginbtn" value="Submit"></input>
            </div>
        </form>
    </section>
    <!-- <script src="../assets/js/employeeRequest.js"></script> -->
</body>
</html>
