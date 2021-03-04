<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="<?= URL ?>node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= URL ?>node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?= URL ?>node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= URL ?>node_modules/jsgrid/css/theme.css">
    <link rel="stylesheet" href="<?= URL ?>node_modules/jsgrid/css/jsgrid.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>assets/css/main.css">

</head>

<body>
    <?php include_once 'views/header.php'; ?>
<section id="form-wrapper" class="center">
  <div class="container overflow-hidden">
    <form class="needs-validation" action="<?= URL ?>users/userProfile" method="POST">
  </div>

  <div class="col-sm-6 p-2">
    <label for="uEmail" class="form-label">Email: </label>
    <input type="email" class="form-control" id="uEmail" name="email" required>
  </div>

  <div class="col-sm-6 p-2">
    <label for="uName" class="form-label">Rol: </label><br>
    <select class="form-control" id="uName" name="name" required>
      <option value="user" selected>User</option>
      <option value="admin">Admin</option>
    </select>
  </div>

  <div class="col-sm-6 p-2">
    <label for="uPassword" class="form-label">Password: </label>
    <input type="password" class="form-control" id="uPassword" name="password" required>
  </div>

  <input type="submit" class="w-30 btn btn-dark mt-5 mr-3">
  <a class="w-30 btn btn-dark mt-5" href="<?= URL ?>users">Go Back</a>
  </form>
  </div>
</section>
</body>

</html>