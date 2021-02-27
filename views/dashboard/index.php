<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
    ?>
    <?php include_once('views/header.php'); ?>
    <h1>Dashboard</h1>
    <?php include_once("./jsgrid.php"); ?>
    <script src="assets/js/createGrid.js"></script>
    <script src="../assets/js/getEmployeeId.js"></script>
</body>
</html>
