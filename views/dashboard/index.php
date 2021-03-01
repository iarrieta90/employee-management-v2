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

    <?php include_once('views/header.php'); ?>
    <h1>Dashboard</h1>
    <?php include_once("./helpers/jsgrid.php"); ?>
    <script src="<?=URL?>assets/js/createGrid.js"></script>
    <script src="<?=URL?>assets/js/getEmployeeId.js"></script>
</body>
</html>
