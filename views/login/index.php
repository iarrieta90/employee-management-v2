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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>assets/css/main.css">

    
</head>

<body>
    <?php include_once('views/header.php'); ?>
    <?php if (isset($_GET['login'])) {
        $loginCheck = $_GET['login'];
        echo '<aside class="error_message">
                    <p class="error">' . $loginCheck . '</p>
                </aside>';
    }
    ?>

    <section>
        <form action="<?php echo constant('URL'); ?>login/checkLogin" method="POST" class="login__form">
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
                    <!-- <input type="reset" class="btn cancelbtn" id="cancelbtn" value="Cancel"></input> -->
                    <input type="submit" name="submit" class="btn loginbtn" id="loginbtn" value="Log In"></input>
                </div>
            </div>
        </form>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>
<!-- <script src="assets/js/submitForm.js"></script> -->

</html>