<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="<?=URL?>node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=URL?>node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?=URL?>node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=URL?>node_modules/jsgrid/css/theme.css">
    <link rel="stylesheet" href="<?=URL?>node_modules/jsgrid/css/jsgrid.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>assets/css/main.css">

</head>

<body>

    <?php include_once 'views/header.php'; ?>
    <h1>Dashboard</h1>
    <main id="main-wrapper">
    </main>
    <?php require_once 'views/footer.php'; ?>
    <script>
        const URL = '<?= URL?>';
    </script>
    <script type="module" src="<?= URL ?>assets/js/index.js"></script>
</body>

</html>