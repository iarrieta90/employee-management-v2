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

    <form ction="<?= URL ?>users/userProfile" method="POST" class="login__form">
      <div class="login__form-div row">
          <label for="uEmail" class="login__form-div-label">Email: </label>
          <input type="email" class="login__form-div-input" id="uEmail" name="email" required>

          <label for="uName" class="login__form-div-label">Rol: </label><br>
          <select class="login__form-div-input" id="uName" name="name" required>
            <option value="user" selected>User</option>
            <option value="admin">Admin</option>
          </select>

          <label for="uPassword" class="login__form-div-label">Password: </label>
          <input type="password" class="login__form-div-input" id="uPassword" name="password" required>

            <input type="submit" class="btn loginbtn" value="Create user">
            <a class="btn loginbtn" href="<?= URL ?>users">Go Back</a>

        </div>
      </div>
    </form>
</body>

</html>