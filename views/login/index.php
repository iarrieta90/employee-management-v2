<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link rel="stylesheet" href="<?= URL ?>node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?= URL ?>node_modules/bootstrap-icons/font/bootstrap-icons.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>assets/css/main.css">
    <script src="<?= URL ?>node_modules/jquery/dist/jquery.min.js"></script>

</head>

<body>
    <header class="header">
        <section class="title">
            <h4>Employees Manager</h4>
        </section>
    </header>
    <div class="toast-msg">
        <?= isset($this->message) ?
            "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
            <div class='toast-body'>" .
            $this->message .
            "</div>
          </div>" : "";

        ?>
    </div>
    <section>
        <form action="<?=URL?>login/checkLogin" method="POST" class="login__form">
            <div class="login__form-div">
                <div>
                    <label class="login__form-div-label" for="email"><b>Email</b></label>
                    <input class="login__form-div-input" type="email" placeholder="Enter email" name="email">
                </div>
                <div>
                    <label class="login__form-div-label" for="psw"><b>Password</b></label>
                    <input class="login__form-div-input" type="password" placeholder="Enter Password" name="password">
                </div>
                <div class="login__submit">
                    <input type="submit" name="submit" class="btn loginbtn" id="loginbtn" value="Log In"></input>
                </div>
            </div>
        </form>
    </section>

    <script>
        $(".toast").toast({
            delay: 3000
        });
        $(".toast").toast('show');
    </script>
</body>

</html>